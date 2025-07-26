<?php
// Text
$_['text_title'] = 'Hóa đơn Klarna - Thanh toán trong vòng 14 ngày';
$_['text_terms_fee'] = '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee'] = '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional'] = 'Klarna Invoice yêu cầu một số thông tin bổ sung trước khi có thể xử lý đơn hàng của bạn.';
$_['text_male'] = 'Nam';
$_['text_female'] = 'Nữ';
$_['text_year'] = 'Năm';
$_['text_month'] = 'Tháng';
$_['text_day'] = 'Ngày';
$_['text_comment'] = 'ID hóa đơn Klarna: %s. ' . "\n" . '%s/%s: %.4f';
$_['text_terms_description'] = 'Với việc chuyển thông tin cá nhân và chi tiết đặt hàng tới Klarna, bạn đồng ý với chính sách bảo mật và điều khoản của chúng tôi. Bạn phải từ 18 tuổi trở lên để sử dụng phương thức thanh toán này.';

// Entry
$_['entry_gender'] = 'Giới tính';
$_['entry_pno'] = 'Số cá nhân';
$_['entry_dob'] = 'Ngày sinh';
$_['entry_phone_no'] = 'Số điện thoại';
$_['entry_street'] = 'Đường';
$_['entry_house_no'] = 'Số nhà';
$_['entry_house_ext'] = 'Chi tiết thêm';
$_['entry_company'] = 'Số đăng ký công ty';

// Help
$_['help_pno'] = 'Vui lòng nhập số An sinh xã hội của bạn ở đây.';
$_['help_phone_no'] = 'Vui lòng nhập số điện thoại của bạn.';
$_['help_street'] = 'Lưu ý rằng việc giao hàng chỉ có thể thực hiện đến địa chỉ đăng ký khi thanh toán bằng Klarna.';
$_['help_house_no'] = 'Vui lòng nhập số nhà của bạn.';
$_['help_house_ext'] = 'Vui lòng gửi phần mở rộng của nhà bạn ở đây. Ví dụ: A, B, C, Đỏ, Xanh v.v.';
$_['help_company'] = 'Vui lòng nhập số đăng ký công ty của bạn';

// Error
$_['error_deu_terms'] = 'Bạn phải đồng ý với chính sách bảo mật của Klarna';
$_['error_address_match'] = 'Địa chỉ thanh toán và giao hàng phải khớp nếu bạn muốn sử dụng Klarna Invoice';
$_['error_network'] = 'Đã xảy ra lỗi khi kết nối với Klarna. Vui lòng thử lại sau.';
