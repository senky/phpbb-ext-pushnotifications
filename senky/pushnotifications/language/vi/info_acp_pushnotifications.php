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
	'ACP_SENKY_PUSHNOTIFICATIONS_CAT' 		=> 'Browser & Mobile Notifications',
	'ACP_SENKY_PUSHNOTIFICATIONS_SETTINGS'	=> 'Cài đặt',
	'ACP_SENKY_PUSHNOTIFICATIONS_TITLE'		=> 'Cài đặt Browser & Mobile Notifications',
	'SENKY_PUSHNOTIFICATIONS_ENABLED_USERS'	=> [
		1	=> 'Diễn đàn có <strong>%d</strong> thành viên đã kích hoạt sử dụng thông báo từ diễn đàn trong tổng %d (%0.2f%%).',
		2	=> 'Diễn đàn có <strong>%d</strong> thành viên đã kích hoạt sử dụng thông báo từ diễn đàn trong tổng %d (%0.2f%%).',
	],

	'DISPLAY_POPUP'			=> 'Hiển thị pop-up thông báo',
	'DISPLAY_POPUP_EXPLAIN'	=> 'Đặt thành YES để sau khi thành viên đăng nhập họ sẽ nhận popup thông báo đăng ký nhận tin từ diễn đàn. Thành viên có thể ẩn popup đi, nhưng có thể gây phiền với họ. Hãy thận trọng khi sử dụng tính năng này.<br><br>&raquo; <a id="pop-up-alternatives-btn" href="#">Xem các cách tiếp cận khác nhau</a>',

	'POP_UP_ALTERNATIVES_HEADER'		=> 'Cách khuyến khích người dùng kích hoạt thông báo trình duyệt',
	'POP_UP_ALTENRATIVES_P1'			=> 'Làm cho người dùng nhấp vào trình duyệt bật lên kỳ lạ đó không phải là một nhiệm vụ dễ dàng. Nhiều thử nghiệm khả năng sử dụng đối với kịch bản này dẫn đến cùng một khuyến nghị: không bao giờ yêu cầu sự cho phép của người dùng trước khi họ có thể thấy rõ lợi thế của nó. Đó là lý do tại sao tiện ích mở rộng này cung cấp thông báo trình duyệt ở những nơi người dùng xử lý thông báo.',
	'POP_UP_ALTENRATIVES_P2'			=> 'Nhưng rõ ràng có thể hiểu rằng bạn muốn người dùng tận dụng lợi thế của tính năng tuyệt vời này. Vì vậy, đây là một số cách được đề xuất để làm điều đó theo cách không tích cực:',
	'POP_UP_ALTENRATIVES_L1_HEADER'		=> 'Đăng một thông báo',
	'POP_UP_ALTENRATIVES_L1_CONTENT'	=> 'Nếu bạn biết rằng người dùng của bạn thường xuyên đọc các thông báo, chỉ cần đăng một thông báo mới cho họ biết thông báo trình duyệt là gì, lợi thế của nó và cách kích hoạt chúng.',
	'POP_UP_ALTENRATIVES_L2_HEADER'		=> 'Gửi PM tới mọi thành viên',
	'POP_UP_ALTENRATIVES_L2_CONTENT'	=> 'Không có gì là cá nhân trong phpBB hơn là một tin nhắn riêng tư. Và thông báo này sẽ được ghi đâm hơn trong phần tin nhắn của thành viên, nếu họ chưa đọc chúng.',
	'POP_UP_ALTENRATIVES_L3_HEADER'		=> 'Sử dụng gói mở rộng Board Announcements',
	'POP_UP_ALTENRATIVES_L3_CONTENT'	=> '<a target="_blank" href="https://www.phpbb.com/customise/db/extension/boardannouncements/">Board Announcements</a> là 1 gói mở rộng chính thức của phpBB, giúp hiển thị thông báo trên toàn diễn đàn. Gói mở rộng này cũng giúp ích cho bạn tăng số người đăng ký lên đáng kể.',
	'POP_UP_ALTENRATIVES_L4_HEADER'		=> 'Gửi thông báo hàng loạt',
	'POP_UP_ALTENRATIVES_L4_CONTENT'	=> 'Chưa bao giờ nghe nói về một lựa chọn như vậy? Gói mở rộng mới của tôi <a target="_blank" href="https://www.phpbb.com/customise/db/extension/massnotification/">Mass notification</a> cho phép bạn gửi thông báo bảng một lần. Vì vậy, trong khi người dùng của bạn	đang đọc thông báo, họ có thể nhấn nút Bật ngay bên dưới.',
	'POP_UP_ALTENRATIVES_P3'			=> 'Vẫn không tự tin? Nếu các cách trên chưa giúp ích được cho bạn, thì hãy sử dụng chế độ mặc định. Cửa sổ bật lên sẽ không được hiển thị cho người dùng đã bật hoặc tắt thông báo, vì vậy đừng lo lắng về người dùng đã quyết định.',
	'CLOSE'								=> 'Đóng',

	'POPUP_METHOD'					=> 'Cách Pop-up hiển thị',
	'POPUP_METHOD_EXPLAIN'			=> 'Vì bạn đã quyết định hiển thị cửa sổ bật lên để khuyến khích người dùng cho phép thông báo trình duyệt, nên ở đây bạn có hai tùy chọn về cách hiển thị nó. Tùy chọn đầu tiên ít xâm lấn hơn và cũng cho người dùng cơ hội hiểu những lợi thế của việc bật thông báo trình duyệt. Tùy chọn thứ hai ít xâm phạm hơn, nhưng có thể dẫn đến nhiều từ chối.',
	'POPUP_METHOD_ONLY_PROMPT'		=> '<strong>Hiển thị thông báo trực tiếp.</strong> Người dùng của bạn sẽ thấy lời nhắc của trình duyệt trực tiếp trên tất cả các trang họ truy cập cho đến khi họ xác nhận hoặc từ chối.',
	'POPUP_METHOD_ASK_AFTER_LOGIN'	=> '<strong>Hỏi một lần sau mỗi lần đăng nhập.</strong> Người dùng của bạn sẽ được hỏi một lần mỗi khi họ đăng nhập xem họ có muốn nhận thông báo trình duyệt hay không. Xác nhận, họ sẽ thấy một trình duyệt nhắc nhở. Từ chối, họ sẽ không bao giờ thấy cửa sổ bật lên đó nữa.',

	'SETTINGS_SAVED'				=> 'Cài đặt cấu hình cho Browser and Mobile Notifications đã được lưu lại thành công.',

	// Mass notification extension
	'NOTIFICATION_METHOD' 			=> 'Phương thức thông báo',
	'NOTIFICATION_METHOD_EXPLAIN'	=> 'Bạn có thể chọn gửi thông báo qua gói mở rộng <strong>Browser and Mobile Notifications</strong> thay vì phương thức thông báo bảng truyền thống.',
	'USE_BOARD_NOTIFICATIONS'		=> 'Sử dụng bảng thông báo',
	'USE_BROWSER_NOTIFICATIONS'		=> 'Sử dụng thông báo trình duyệt',
));
