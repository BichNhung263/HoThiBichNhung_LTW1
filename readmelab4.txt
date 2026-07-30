///Cập nhật chương trình để lấy dữ liệu Họ tên từ Form bằng $_GET['fullname'], chạy chương trình và quan sát kết quả của biến $fullname.

//Kết quả sau khi chạy chương trình:
- Khi nhập họ tên vào form và gửi dữ liệu, biến $fullname sẽ nhận giá trị được truyền từ URL thông qua phương thức GET.
- Ví dụ: nếu nhập "Nguyễn Văn A" thì giá trị của $fullname sẽ là Nguyen Van A.
- Nếu không nhập dữ liệu hoặc không gửi tham số fullname thì biến $fullname có thể rỗng hoặc không tồn tại.

Sự khác nhau giữa GET và POST:
- Cách gửi dữ liệu:
  + GET: gửi dữ liệu qua URL.
  + POST: gửi dữ liệu trong phần body của request.
- Dữ liệu có hiển thị trên URL hay không:
  + GET: dữ liệu hiển thị trên URL, có thể thấy trong thanh địa chỉ.
  + POST: dữ liệu không hiển thị trên URL.
- Trường hợp nên sử dụng GET và POST:
  + GET nên dùng khi truy vấn dữ liệu, lấy thông tin, hoặc khi cần bookmark/share URL.
  + POST nên dùng khi gửi dữ liệu nhạy cảm, thêm/sửa/xóa dữ liệu, hoặc khi dữ liệu nhiều và dài.
