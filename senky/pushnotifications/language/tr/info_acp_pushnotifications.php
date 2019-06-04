<?php
/**
 *
 * Browser and Mobile Notifications. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Jakub Senko
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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Tarayıcı & Mobil Bildirimler',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Ayarlar',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Tarayıcı & Mobil Bildirimler Ayarları',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Sitenizde <strong>%d</strong> kullanıcı tarayıcı bildirimlerini etkinletirdi. Toplam kullanıcı: %d (%0.2f%%).',
		2	=> 'Sitenizde <strong>%d</strong> kullanıcı tarayıcı bildirimlerini etkinletirdi. Toplam kullanıcı: %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Açılır pencere (pop up) göster',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Kullanıcılardan oturum açtıktan sonra tarayıcı bildirimlerini etkinleştirmelerini istemek için açılır pencereleri görüntülenmesi için evet olarak ayarlayın. Açılır pencereyi reddedebilir ve gizleyebilirler, ancak bu şekilde diğerlerinden daha fazla dönüş almanız olasıdır. Öte yandan, bu yöntem kullanıcılar için çok müdahaleci görünebilir ve anlık korku ile bildirimlerini reddedebilirler. Bu nedenle bu yöntem dikkatli kullanılmalıdır.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Farklı yaklaşımları görün</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Kullanıcılar tarayıcı bildirimlerini etkinleştirmeye nasıl teşvik edilir',
	'POP_UP_ALTENRATIVES_P1'			=> 'Kullanıcıların bu garip tarayıcı pop-up\'ını tıklatması kolay bir iş değildir. Bu senaryo ile ilgilenen birçok kullanılabilirlik testi aynı 
											tavsiyeyle sonuçlandı: kullanıcılar bunun avantajını açıkça görmeden önce bunun için izin istemeyin. Bu nedenle, bu uzantı, kullanıcının site
											bildirimleriyle ilgilendiği yerlerde tarayıcı bildirimi sunar.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Ancak, kullanıcıların bu fantastik özelliğin avantajlarından yararlanmasını istediğiniz açıkça anlaşılabilir. Yani burada agresif olmayan bir şekilde yapmak için önerilen birkaç yol:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Bir duyuru gönder',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Kullanıcılarınızın düzenli olarak duyuruları okuduğunu biliyorsanız, 
											yalnızca tarayıcı bildirimlerinin ne olduğunu, bunun avantajını ve nasıl etkinleştirilebileceğini 
											bildiren yeni bir tane gönderin.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Herkese ÖM gönder',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Hiçbir şey phpBB\'de özel bir mesajdan daha kişisel değildir. Başlıktaki parlayan okunmamış 
											ÖM sayı numarası nedeniyle kullanıcı gözünden gizlenmeyecek. Ve kullanıcılarınız arada bir 
											yöneticiden gelen olumlu bir mesajı hakediyorlar, öyle değil mi?',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Site Duyuruları eklentisini kullan',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Site Duyuruları</a> eklentisi her sayfada mesaj göstermek için harika bir 
											resmi eklentidir. Bu eklenti ve birkaç teşvik edici kelime kullanım sayacını 
											artırmak için yeterlidir.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Toplu bildirim gönder',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Böyle bir seçeneği hiç duymadınız mı? Yeni eklentim
											<a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Toplu Bildirim</a> size bir defada site tamamına bildirim gönderme olanağı sağlar. Böylece, kullanıcılarınız 
											bildirimi okurken, hemen altındaki Etkinleştir düğmesine tıklayabilirler.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Hala kendine güvenmiyor musun? Yukarıdaki öneriler yardımcı olmadıysa, kalan 
											kullanıcıları bulmak için pop-up seçeneğini kullanmayı düşünebilirsiniz. Açılır pencereler (pop up) zaten bildirimleri etkinleştiren veya devre dışı bırakan
											kullanıcılara gösterilmez, bu nedenle önceden karar vermiş kullanıcılar hakkında endişelenmeyin.',
	'CLOSE'								=> 'Kapat',

	'POPUP_METHOD'					=> 'Pop-up yöntemi',
	'POPUP_METHOD_EXPLAIN'			=> 'Kullanıcıları tarayıcı bildirimlerine izin vermeye teşvik etmek için bir pop up açmaya karar verdiğinizden, burada nasıl görüntüleneceği konusunda iki seçeneğiniz vardır. İlk seçenek daha az invazivdir ve ayrıca kullanıcıya tarayıcı bildirimlerini etkinleştirmenin avantajlarının ne olduğunu anlama şansı verir. İkinci seçenek daha az müdahalecidir, ancak birçok redde yol açabilir.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Doğrudan komut istemi göster.</strong> Kullanıcılarınız tarayıcıyı komut istemini onaylayana ya da reddedene kadar ziyaret ettikleri tüm sayfalarda doğrudan göreceklerdir.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Her giriş işleminden sonra bir kez sor.</strong> Kullanıcılarınıza, siteye her giriş yaptıklarında tarayıcı bildirimlerini almak isteyip istemedikleri bir kez sorulacaktır. Onaylarlarsa, bir tarayıcı istemi görecekler. Reddederlerse, bir daha bu pop-up\'ı görmeyecekler.',

	'SETTINGS_SAVED'	=> 'Tarayıcı & Mobil Bildirimler ayarları kaydedildi.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Bildirim yöntemi',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Geleneksel site bildirim yöntemi yerine Tarayıcı ve Mobil Bildirimler Eklentisi yoluyla bildirim göndermeyi seçebilirsiniz..',
	'USE_BOARD_NOTIFICATIONS'		=> 'Site bildirimlerini kullan',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Tarayıcı bildirimlerini kullan',
));
