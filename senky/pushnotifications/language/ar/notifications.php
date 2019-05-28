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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'المتصفح',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>مفعلة</strong>. لن تفوت أي خبر من هذا المنتدى. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">تعطيل؟</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>مفعلة</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">تعطيل؟</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>معطلة</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">انقر هنا لتفعيل إشعارات المتصفح</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>معطلة</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">تفعيل؟</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>معطلة قسراً</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">كيفية تفعيلهم؟</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>معطلة</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">كيفية تفعيلهم؟</a>',
	'BROWSER_NOTIFICATIONS'							=> 'إشعارات المتصفح لهذا المتصفح',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'إشعارات المتصفح',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'حدث خطأ (ربما خطأ في الاتصال أثناء الاتصال بالخادم) أثناء الاشتراك في إشعارات الويب. لقد تم تعطيلهم في هذا المتصفح. يرجى التحقق من اتصالك بالإنترنت والمحاولة مرة أخرى. اتصل بمسؤول المنتدى إذا استمرت المشكلة.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'حدث خطأ (ربما خطأ في الاتصال أثناء الاتصال بالخادم) أثناء إلغاء الاشتراك في إشعارات الويب. يرجى التحقق من اتصالك بالإنترنت والمحاولة مرة أخرى. اتصل بمسؤول المنتدى إذا استمرت المشكلة.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'كيفية تفعيل إشعارات المتصفح',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>انقر على أيقونة "i" الموجودة بجانب شريط العنوان.</li><li>ابحث عن "الإشعارات"</li><li>انقر على كلمة "حظر" الموجودة داخل المربع</li><li>من القائمة المنسدلة، انقر على "تمكين"</li><li>قم بتحديث هذه الصفحة.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>انقر على رمز الكرة الأرضية بجانب شريط العنوان.</li><li>ابحث عن "الإشعارات"</li><li>من القائمة المنسدلة، حدد خيار "تمكين دائمًا لهذا الموقع"</li><li>قم بتحديث هذه الصفحة.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>انقر فوق رمز القفل الموجود بجانب شريط العنوان.</li><li>ابحث عن تصنيف "الإشعارات" تحت عنوان "أذونات موقع الويب".</li><li>بدل المفتاح.</li><li>قم بتحديث هذه الصفحة.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>بجانب شريط العناوين، انقر على معلومات (علامة "i").</li><li>انقر على إعدادات > الإشعارات.</li><li>اختر سماح.</li><li>قم بتحديث هذه الصفحة.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>في الزاوية السفلية، انقر على شعار Opera، ثم إعدادات.</li><li>انزل لأسفل إلى الخصوصية > إعدادات الموقع.</li><li>اضغط على الإخطارات والإشعارات مرة أخرى.</li><li>اختر سماح.</li><li>قم بتحديث هذه الصفحة.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>اضغط على رمز مركز التحكم (القفل)، بجانب شريط العنوان.</li><li>انقر فوق تحرير إعدادات الموقع.</li><li>اضغط على خيار الإخطارات.</li><li>قم بتحديث هذه الصفحة.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>انقر على "القائمة" من الشريط السفلي.</li><li>اضغط على أيقونة الإعدادات ، ثم إعدادات الإشعارات ثم إشعارات الموقع.</li><li>ابحث عن عنوان هذا الموقع وانقر على مسح.</li><li>قم بتحديث هذه الصفحة وفعل الإشعارات مرة أخرى.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>بجانب شريط العناوين، انقر على القائمة (ثلاث نقاط).</li><li>انقر فوق الإعدادات ، ثم متقدم ، ثم إشعارات الويب.</li><li>ابحث عن عنوان هذا الموقع وقم بتبديل المفتاح.</li><li>قم بتحديث هذه الصفحة.</li></ol>',

	'BROWSER_NOTIFICATIONS_POPUP_TITLE'	=> 'Browser notifications',
	'BROWSER_NOTIFICATIONS_POPUP_TEXT'	=> 'This board allows you to receive notifications directly to your browser - even when it is closed. You will never miss anything important and you can always choose what type of notifications you receive or turn them all off. Do you want to opt-in now?<br><br><span style="display: block; text-align: center;"><a class="button1 alert_close" style="cursor: pointer; float: none; margin-right: 0;">Yes, please</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button2 alert_close" style="cursor: pointer; float: none; margin-right: 0;">No</a></span>',
));
