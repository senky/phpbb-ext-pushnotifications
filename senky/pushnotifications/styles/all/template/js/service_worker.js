'use strict';

function urlB64ToUint8Array(base64String) {
	var padding = '='.repeat((4 - base64String.length % 4) % 4);
	var base64 = (base64String + padding)
		.replace(/\-/g, '+')
		.replace(/_/g, '/');

	var rawData = atob(base64);
	var outputArray = new Uint8Array(rawData.length);

	for (var i = 0; i < rawData.length; ++i) {
		outputArray[i] = rawData.charCodeAt(i);
	}
	return outputArray;
}

function updateSubscriptionOnServer(subscription, unsubscribe = false) {
	subscription = subscription.toJSON();

	var formData = new FormData();
	formData.append('endpoint', subscription.endpoint);
	formData.append('keys[auth]', subscription.keys.auth);
	formData.append('keys[p256dh]', subscription.keys.p256dh);

	var url = unsubscribe ? '{{ U_UNSUBSCRIBE }}' : '{{ U_SUBSCRIBE }}';

	return fetch(url, {
		method: 'POST',
		body: formData,
		headers: {
			'X-Requested-With': 'XMLHttpRequest'
		},
		credentials: 'include'
	});
}

self.addEventListener('install', function(event) {
	event.waitUntil(self.skipWaiting());
});

self.addEventListener('activate', function(event) {
	event.waitUntil(self.clients.claim());
});

self.addEventListener('notificationclick', function(event) {
	event.notification.close();

	if (event.notification.data && event.notification.data.url) {
		event.waitUntil(
			self.clients.matchAll({ type: 'window' }).then(function(clientList) {
				if (clientList.length > 0) {
					clientList[0].navigate(event.notification.data.url);
					return clientList[0].focus();
				}

				return self.clients.openWindow(event.notification.data.url);
			})
		);
	}
});

self.addEventListener('push', function(event) {
	event.waitUntil(
		// Make sure user is still logged in by requesting the URL.
		// Also fetch other data along the way.
		fetch('{{ U_TEST }}', {credentials: 'include'})
		.then(function(response) {
			return response.json();
		})
		.then(function(server_data) {
			const data = event.data.json();

			self.registration.pushManager.getSubscription()
			.then(function(subscription) {
				var sub_key = JSON.stringify(new Uint8Array(subscription.options.applicationServerKey));
				var server_key = JSON.stringify(urlB64ToUint8Array(server_data.public_key));

				// Make sure currently logged in user is the same one that this notification aims to.
				// Also check for rare situation when user reinstalled the extension and server's
				// public key is different than the one used to subscribe the user.
				if (server_data.user_id == data.user_id && sub_key == server_key) {
					const title = data.title;
					const options = {
						//actions: 
						//badge: data.badge,
						body: data.message,
						dir: server_data.dir,
						icon: data.avatar,
						//image:
						lang: server_data.lang,
						vibrate: [300, 100, 300],
						data: {
							url: data.url
						},
					};

					return self.registration.showNotification(title, options);
				} else { // something is in disarray, unsubscribe the user
					updateSubscriptionOnServer(subscription, true)
					.then(function() {
						subscription.unsubscribe();
					});
				}
			});
		})
	);
});

self.addEventListener('pushsubscriptionchange', function(event) {
	event.waitUntil(
		updateSubscriptionOnServer(event.oldSubscription, true)
		.then(function() {
			return self.registration.pushManager.subscribe({
				userVisibleOnly: true,
				applicationServerKey: urlB64ToUint8Array('{{ SERVER_KEY }}')
			}).then(function(newSubscription) {
				return updateSubscriptionOnServer(newSubscription);
			});
		})
	);
});

// TODO: treba aj unregister dat ked clovek odinstaluje ext