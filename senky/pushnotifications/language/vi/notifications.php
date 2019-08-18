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
	'SENKY_PUSHNOTIFICATIONS_NOTIFICATION_METHOD_BROWSER' => 'Browser',

	'BROWSER_NOTIFICATIONS_ACTION_ENABLED'			=> ' <strong>Bật</strong>. Bạn sẽ không bỏ lỡ bất cứ thông tin nào trên diễn đàn. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Disable?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_ENABLED_SHORT'	=> ' <strong>Bật</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-unsubscribe">Tắt tính năng?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED'			=> ' <strong>Tắt</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Click vào đây để bật thông báo từ diễn đàn</a>.',
	'BROWSER_NOTIFICATIONS_ACTION_DISABLED_SHORT'	=> ' <strong>Tắt</strong>. <a href="javascript:;" id="senky-pushnotifications-btn-subscribe">Bật tính năng?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED'		=> ' <strong>Bị tắt hoàn toàn</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Làm sao bật lại?</a>',
	'BROWSER_NOTIFICATIONS_ACTION_DISALLOWED_SHORT'	=> ' <strong>Bị tắt</strong>. <a href=javascript:;" id="senky-pushnotifications-btn-enable">Làm sao bật lại?</a>',
	'BROWSER_NOTIFICATIONS'							=> 'Thông báo trên trình duyệt',
	'BROWSER_NOTIFICATIONS_SHORT'					=> 'Sử dụng tính năng thông báo trên trình duyệt',
	'BROWSER_NOTIFICATIONS_UPDATE_FAILED'			=> 'Đã xảy ra lỗi (có thể là lỗi kết nối trong khi liên hệ với máy chủ) trong quá trình bật thông báo web. Họ đã bị vô hiệu hóa trong trình duyệt này. Vui lòng kiểm tra kết nối internet của bạn và thử lại. Liên hệ với quản trị viên nếu vấn đề vẫn còn.',
	'BROWSER_NOTIFICATIONS_UNSUBSCRIBE_FAILED'		=> 'Đã xảy ra lỗi (có thể là lỗi kết nối trong khi liên hệ với máy chủ) trong quá trình hủy bật thông báo web. Vui lòng kiểm tra kết nối internet của bạn và thử lại. Liên hệ với quản trị viên nếu vấn đề vẫn còn.',

	'BROWSER_NOTIFICATIONS_MANUAL_TITLE'					=> 'Làm thế nào để sử dụng tính năng thông báo trên trình duyệt',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME'					=> '<ol><li>Click vào nút "i" ở bên cạnh thanh địa chỉ.</li><li>Tìm phần "Thông báo"</li><li>Click vào khung chọn </li><li>Trong khung click "Bật"</li><li>F5 lại trang.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_OPERA'					=> '<ol><li>Click vào icon ngay bên trái thanh địa chỉ.</li><li>Tìm phần "Thông báo"</li><li>Click vào khung chọn, chọn "Luôn sử dụng cho trang này"</li><li>F5 lại trang.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_EDGE'						=> '<ol><li>Click vào icon ngay bên trái thanh địa chỉ.</li><li>Tìm phần "Thông báo" bên dưới "Phân quyền websites".</li><li>Kích hoạt tính năng.</li><li>F5 lại trang.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_CHROME_FOR_ANDROID'		=> '<ol><li>Click vào icon ngay bên trái thanh địa chỉ (chữ "i").</li><li>Chọn Thiết lập trang > Thông báo.</li><li>Chọn Cho phép.</li><li>Click vào nút tải lại trang.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_OPERA_FOR_ANDROID'	=> '<ol><li>Ở phần bên phải, click vào Opera logo, chọn Thiết lập.</li><li>Kéo xuống phần Cài đặt riêng từ và vị trí.</li><li>Click vào Notifications and Notifications.</li><li>Chọn Cho phép.</li><li>Click vào nút tải lại trang.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_FIREFOX_FOR_ANDROID'	=> '<ol><li>Click vào biểu tượng Control Center ở bên trái thanh địa chỉ.</li><li>Chọn Cài đặt trang web.</li><li>Bật cho phép thông báo.</li><li>Click vào nút tải lại trang.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_UC_FOR_ANDROID'		=> '<ol><li>Click vào Menu thanh điều hướng bên dưới.</li><li>Chọn Cài đặt, Cài đặt thông báo, Thông báo của trang web.</li><li>Tìm URL của website và click Xóa.</li><li>Click tải lại trang và bật thông báo.</li></ol>',
	'BROWSER_NOTIFICATIONS_MANUAL_DESC_SAMSUNG_FOR_ANDROID'	=> '<ol><li>Ở bên phải thanh địa chỉ, Chọn Menu (có dấu 3 chấm).</li><li>Chọn Cài đặt, Nâng cao, Thông báo web.</li><li>Tìm URL của website và bật nó lên.</li><li>Click vào nút tải lại trang.</li></ol>',

	'BROWSER_NOTIFICATIONS_POPUP_TITLE'	=> 'Thông báo trên trình duyệt',
	'BROWSER_NOTIFICATIONS_POPUP_TEXT'	=> 'Bạn sẽ nhận được thông báo mới nhất từ diễn đàn - kể cả khi trình duyệt đã bị đóng - bạn sẽ không bỏ lỡ bất kỳ thông tin nào trên diễn đàn. Bạn cũng dễ dàng thay đổi tùy chọn này. Bạn muốn nhận thông báo ngay chứ?<br><br><span style="display: block; text-align: center;"><a class="button1 alert_close" style="cursor: pointer; float: none; margin-right: 0;">Ok luôn</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="button2 alert_close" style="cursor: pointer; float: none; margin-right: 0;">No</a></span>',
));
