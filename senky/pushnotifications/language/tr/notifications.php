<?php
/**
 *
 * Browser and Mobile Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Jakub Senko
 * @license Proprietary/All rights reserved
 * @licensee {{LICENSEE}}
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Tarayıcı',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Açık</strong>. Bu sitedeki hiçbir haberi kaçırmayacaksınız. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Devre dışı bırak?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Açık</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Devre dışı bırak?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Kapalı</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Tarayıcı bildirimlerini etkinleştirmek için buraya tıklayın</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Kapalı</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Etkinleştir?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Zorla Devre dışı bırakıldı</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Onları nasıl etkinleştiririm?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Devre dışı bırakıldı</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Nasıl etkinleştirilir?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Bu tarayıcı için Tarayıcı Bildirimleri',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Tarayıcı bildirimleri',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Web Bildirimlerine abonelik sırasında bir hata oluştu (muhtemelen sunucuya bağlanırken oluşan bir bağlantı hatası). Onlar bu tarayıcıda devre dışı bırakılmışlar. Lütfen internet bağlantınızı kontrol edin ve tekrar deneyin. Problem devam ederse site yöneticisi ile ileteişime geçin.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Web Bildirimleri aboneliği iptali sırasında bir hata oluştu (muhtemelen sunucuya bağlanırken oluşan bir bağlantı hatası). Lütfen internet bağlantınızı kontrol edin ve tekrar deneyin. Problem devam ederse site yöneticisi ile ileteişime geçin.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Tarayıcı bildirimleri nasıl etkinleştirilir',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Adres çubuğunun sol tarafındaki yuvarlak içindeki "i" simgesine tıklayın.</li><li>"Bildirimler" etiketini bulun</li><li>Seçim kutusundaki "Blok" üzerine tıklayın</li><li>Açılır menüden "Etkinleştir"i seçin</li><li>Bu sayfayı yenileyin.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Adres çubuğunun sol tarafındaki dünya simgesine tıklayın.</li><li>"Bildirimler" etiketini bulun</li><li>Etiketin sağındaki açılır menüden "Bu site için her zaman etkinleştir"i seçin.</li><li>Bu sayfayı yenileyin.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Adres çubuğunun sol tarafındaki kilit simgesine tıklayın.</li><li>"Bildirimler" etiketinin altında "Website izinleri" başlığını bulun.</li><li>Ayarı değiştirin.</li><li>Bu sayfayı yenileyin.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Adres çubuğunun solundaki Bilgi simgesine (yuvarlak içindeki "i") tıklayın.</li><li>Site Ayarlarına tıklayın > Bildirimler.</li><li>İzin Ver\'i seçin.</li><li>Bu sayfayı yenileyin.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Sağ alt köşedeki Opera logosuna ve sonrasında Ayarlara tıklayın.</li><li>Gizlilik &gt; Konum Ayarları bölümüne gelmek için aşağı kaydırın.</li><li>Bildirimlere ve tekrar Bildirimlere tıklayın.</li><li>İzin Ver\'i seçin.</li><li>Bu sayfayı yenileyin.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Adres çubuğunun solundaki Kontrol Merkezi simgesine (kilit) tıklayın.</li><li>Site Ayarlarını Düzenle\'ye tıklayın.</li><li>Bildirimleri Kontrol Et.</li><li>Bu sayfayı yenileyin.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Alt çubuktan Menüye tıklayın.</li><li>Ayarlar simgesine tıklayın, ardından Bildirim Ayarları ve Site Bildirimlerine.</li><li>Bu sitenin URL\'sini bulun ve Temizle\'ye tıklayın.</li><li>Bu sayfayı yenileyin ve bildirimleri bir kez daha etkinleştirin.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Adres çubuğunun sağındaki Menüye (üç nokta) tıklayın.</li><li>Ayarlara, arından Gelişmişe ve sonrasında Web Bildirimlerine tıklayın.</li><li>Bu sitenin URL\'sini bulun ve ayarı değiştirin.</li><li>Bu sayfayı yenileyin.</li></ol>',
));
