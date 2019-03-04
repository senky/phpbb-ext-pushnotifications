(function() {
	// Register service worker. This will be done on every page to make sure notifications are delivered.
	if ('serviceWorker' in navigator && 'PushManager' in window) {
		navigator.serviceWorker.register(senky_pushnotifications.serviceWorkerPath)
		.catch(function(err) {
			console.log('err registration', err); // TODO
		});

		// Perform additional actions after registration:
		//    - prepare label wrappers to inform user about the state of the notifications
		//    - automatically subscribe user if permission is granted
		//    - update labels with notification status
		//    - display pop-up when applicable
		navigator.serviceWorker.ready.then(function(registration) {
			registration.pushManager.getSubscription().then(function(subscription) {
				// Prepare label wrapper(s).
				var statusLabelWrapper = document.createElement('p');
				statusLabelWrapper.className = 'senky-pushnotifications-wrapper';
				document.querySelector(senky_pushnotifications.notif_list_selector).appendChild(statusLabelWrapper);

				if (senky_pushnotifications.inNotificationOptions) {
					var $table = document.querySelector(senky_pushnotifications.notif_ucp_table_selector);
					$table.parentNode.insertBefore(statusLabelWrapper.cloneNode(true), $table);
				}

				// Add prefix text to label(s).
				document.querySelectorAll('.senky-pushnotifications-wrapper').forEach(function(elem) {
					var prefix = document.createElement('span');
					prefix.innerHTML = elem.parentElement.className == senky_pushnotifications.notif_list_parent_selector ? senky_pushnotifications.lang.BROWSER_NOTIFICATIONS_SHORT : senky_pushnotifications.lang.BROWSER_NOTIFICATIONS;
					elem.appendChild(prefix);

					var container = document.createElement('span');
					container.className = 'senky-pushnotifications-container';
					elem.appendChild(container);
				});

				// If user already granted permission to send notifications and also wishes
				// to receive them but we are not subscribed yet, do it automatically here.
				if (!subscription && Notification.permission === 'granted' && JSON.parse(localStorage.getItem('senky_pushnotifications_receive'))) {
					subscribeUser();
				} else { // Else just update the status label.
					updateLabel();
				}
			});

			displayPopup();
		});
	} else if (senky_pushnotifications.inNotificationOptions) { // Hide browser settings for unsupported browsers.
		// Remove Browser column header
		document.querySelectorAll(senky_pushnotifications.browser_column_header_selector).forEach(function(elem) {
			if (elem.textContent == senky_pushnotifications.notification_method_name) {
				elem.parentElement.removeChild(elem);
			}
		});
		// Shrink colspan of headers
		document.querySelectorAll(senky_pushnotifications.notif_types_headers_selector).forEach(function(elem) {
			elem.colSpan -= 1;
		});
		// Remove Browser columns
		document.querySelectorAll('input[name$="senky.pushnotifications.notification.method.browser"]').forEach(function(elem) {
			var td = elem.parentElement;
			td.parentElement.removeChild(td);
		});

		// additional actions for current style
		document.dispatchEvent(new Event('senky-pushnotifications-unsupported'));
	}

	function updateLabel() {
		if (Notification.permission === 'denied') {
			setLabelState('disallowed');
		} else if (Notification.permission === 'default') {
			setLabelState('default');
		} else {
			navigator.serviceWorker.ready.then(function(registration) {
				registration.pushManager.getSubscription().then(function(subscription) {
					if (subscription) {
						setLabelState('enabled');
					} else {
						setLabelState('default');
					}
				});
			});
		}
	}

	function setLabelState(state) {
		var container = document.querySelectorAll('.senky-pushnotifications-container');
		switch (state) {
			case 'default':
				container.forEach(function(elem) {
					elem.innerHTML = elem.parentElement.parentElement.className == senky_pushnotifications.notif_list_parent_selector ? senky_pushnotifications.lang.OFF_SHORT : senky_pushnotifications.lang.OFF;
				});
				document.querySelectorAll('#senky-pushnotifications-btn-subscribe').forEach(function(elem) {
					elem.addEventListener('click', subscribeUser)
				});
			break;

			case 'enabled':
				container.forEach(function(elem) {
					elem.innerHTML = elem.parentElement.parentElement.className == senky_pushnotifications.notif_list_parent_selector ? senky_pushnotifications.lang.ENABLED_SHORT : senky_pushnotifications.lang.ENABLED;
				});
				document.querySelectorAll('#senky-pushnotifications-btn-unsubscribe').forEach(function(elem) {
					elem.addEventListener('click', unsubscribeUser);
				});
			break;

			case 'disallowed':
				container.forEach(function(elem) {
					elem.innerHTML = elem.parentElement.parentElement.className == senky_pushnotifications.notif_list_parent_selector ? senky_pushnotifications.lang.DISALLOWED_SHORT : senky_pushnotifications.lang.DISALLOWED;
				});
				document.querySelectorAll('#senky-pushnotifications-btn-enable').forEach(function(elem) {
					elem.addEventListener('click', function(event) {
						event.preventDefault();

						showEnableManual();
					});
				});
			break;
		}
	}

	function showEnableManual() {
		var title = senky_pushnotifications.lang.MANUAL_TITLE;
		var desc = '';

		if (navigator.userAgent.toLowerCase().indexOf("android") > -1 && navigator.userAgent.toLowerCase().indexOf(" opr/") > -1) { // Opera for Android
			desc = senky_pushnotifications.lang.MANUAL_DESC_OPERA_FOR_ANDROID;
		} else if (navigator.userAgent.toLowerCase().indexOf("android") > -1 && navigator.userAgent.toLowerCase().indexOf("firefox") > -1) { // Firefox for Android
			desc = senky_pushnotifications.lang.MANUAL_DESC_FIREFOX_FOR_ANDROID;
		} else if (navigator.userAgent.toLowerCase().indexOf("android") > -1 && navigator.userAgent.toLowerCase().indexOf("ucbrowser") > -1) { // UC Browser for Android
			desc = senky_pushnotifications.lang.MANUAL_DESC_UC_FOR_ANDROID;
		} else if (navigator.userAgent.toLowerCase().indexOf("android") > -1 && navigator.userAgent.toLowerCase().indexOf("samsungbrowser") > -1) { // Samsung Browser for Android
			desc = senky_pushnotifications.lang.MANUAL_DESC_SAMSUNG_FOR_ANDROID;
		} else if (navigator.userAgent.toLowerCase().indexOf("android") > -1 && !!window.chrome) { // Chrome for Android
			desc = senky_pushnotifications.lang.MANUAL_DESC_CHROME_FOR_ANDROID;
		} else if ((!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0) { // Opera
			desc = senky_pushnotifications.lang.MANUAL_DESC_OPERA;
		} else if (window.navigator.userAgent.indexOf("Edge") > -1) { // Edge
			desc = senky_pushnotifications.lang.MANUAL_DESC_EDGE;
		} else if (!!window.chrome) { // Chrome Desktop
			desc = senky_pushnotifications.lang.MANUAL_DESC_CHROME;
		}
		// Firefox doesn't support disabled notifications. It's either enabled or default.

		if (desc) {
			phpbb.alert(title, desc);
		}
	}

	function subscribeUser(e) {
		if (e) {
			e.preventDefault();
		}

		navigator.serviceWorker.ready.then(function(registration) {
			registration.pushManager.subscribe({
				userVisibleOnly: true,
				applicationServerKey: urlB64ToUint8Array(senky_pushnotifications.serverAPIkey)
			}).then(function(subscription) {
				updateSubscriptionOnServer(subscription);
				localStorage.setItem('senky_pushnotifications_receive', true);
				updateLabel();
			}).catch(function(err) {
				if (Notification.permission !== 'denied') {
					phpbb.alert(senky_pushnotifications.lang.INFORMATION, senky_pushnotifications.lang.UPDATE_FAILED);
				}
				updateLabel();
			});
		});
	}

	function unsubscribeUser(e) {
		if (e) {
			e.preventDefault();
		}

		navigator.serviceWorker.ready.then(function(registration) {
			registration.pushManager.getSubscription()
			.then(function(subscription) {
				if (subscription) {
					updateSubscriptionOnServer(subscription, true);
					if (e) { // triggered manually so user wishes to stop receiving notifications
						localStorage.setItem('senky_pushnotifications_receive', false);
					}
					return subscription.unsubscribe();
				}
			}).catch(function() {
				phpbb.alert(senky_pushnotifications.lang.INFORMATION, senky_pushnotifications.lang.UNSUBSCRIBE_FAILED);
			}).then(function() {
				updateLabel();
			});
		});
	}

	function updateSubscriptionOnServer(subscription, unsubscribe = false) {
		subscription = subscription.toJSON();

		var formData = new FormData();
		formData.append('endpoint', subscription.endpoint);
		formData.append('keys[auth]', subscription.keys.auth);
		formData.append('keys[p256dh]', subscription.keys.p256dh);

		var url = unsubscribe ? senky_pushnotifications.uUnsubscribe : senky_pushnotifications.uSubscribe;

		fetch(url, {
			method: 'POST',
			body: formData,
			headers: {
				'X-Requested-With': 'XMLHttpRequest'
			},
			credentials: 'include'
		})
		.then(function(response) {
			return response.json();
		})
		.catch(function() {
			if (!unsubscribe) { // Unsubscribe in case of an error during subscription.
				unsubscribeUser();
				phpbb.alert(senky_pushnotifications.lang.INFORMATION, senky_pushnotifications.lang.UPDATE_FAILED);
			}
			// Do not show an error for failed unsubscription - it will be handled on the server side.
		})
		.then(function(response) {
			if (!response.id && !unsubscribe) { // Unsubscribe in case of an error during subscription.
				unsubscribeUser();
				phpbb.alert(
					senky_pushnotifications.lang.INFORMATION,
					(response.error) ? response.error : senky_pushnotifications.lang.UPDATE_FAILED
				);
			}
		});
	}

	function urlB64ToUint8Array(base64String) {
		var padding = '='.repeat((4 - base64String.length % 4) % 4);
		var base64 = (base64String + padding)
			.replace(/\-/g, '+')
			.replace(/_/g, '/');

		var rawData = window.atob(base64);
		var outputArray = new Uint8Array(rawData.length);

		for (var i = 0; i < rawData.length; ++i) {
			outputArray[i] = rawData.charCodeAt(i);
		}
		return outputArray;
	}

	function displayPopup() {
		if (Notification.permission === 'default' && senky_pushnotifications.displayPopup) {
			if (senky_pushnotifications.popupMethod == 'only_prompt') {
				subscribeUser();
			} else {
				phpbb.alert(senky_pushnotifications.lang.POPUP_TITLE, senky_pushnotifications.lang.POPUP_TEXT);
				document.querySelector('.alert_text .button1').addEventListener('click', function(e) {
					subscribeUser(e);
				});
			}
		}
	}
})();
