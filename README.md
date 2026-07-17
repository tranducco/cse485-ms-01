# cse485-ms-01
Phiếu bài tập 1
# MiniShop - Phiếu 01: PHP Cơ bản & Catalog

## 📌 Giới thiệu dự án
Đây là mã nguồn thực hành giải quyết các yêu cầu của **Phiếu 01 — PHP cơ bản & Catalog MiniShop**. 
Mục tiêu của bài tập là làm quen với quy trình tách biệt dữ liệu (Model) và giao diện hiển thị (View), thao tác với mảng đa chiều trong PHP, và render dữ liệu động ra cấu trúc Semantic HTML.

## 📂 Cấu trúc thư mục
- `data.php`: Chứa mảng dữ liệu gốc (categories và 8 products).
- `index.php`: Xử lý logic, tính toán và render giao diện HTML.
- `README.md`: Tài liệu mô tả dự án.

## 🚀 Các tính năng đã hoàn thiện

- **Phân tách mã nguồn:** Đã tách thành công phần định nghĩa dữ liệu (`data.php`) và phần hiển thị giao diện (`index.php`) thông qua lệnh `require`.
- **Hiển thị danh sách:** Render tự động bảng HTML chứa đủ 8 sản phẩm (SKU) bằng vòng lặp `foreach`.
- **Mapping dữ liệu:** Xử lý chuyển đổi thành công `category_id` (1, 2, 3) thành tên danh mục dạng chữ (Bàn phím, Chuột, Màn hình).
- **Tính toán tự động:** 
  - Thêm cột Thành tiền (`line_total` = `price` * `qty`).
  - Cộng dồn và in ra màn hình Tổng giá trị kho chính xác: **41380000**.
  - Đếm tự động số lượng sản phẩm trong kho (8 sản phẩm).
- **Bảo mật cơ bản:** Áp dụng hàm `htmlspecialchars()` khi in các chuỗi văn bản (SKU, Tên sản phẩm, Tên danh mục) để phòng chống lỗi XSS.
- **Tiêu chuẩn chấm tự động:** Tích hợp thẻ comment `MS_EXPECT` phục vụ hệ thống máy chấm.

## ⚙️ Hướng dẫn chạy thử nghiệm

1. Khởi động module **Apache** trên XAMPP.
2. Đặt thư mục chứa mã nguồn (ví dụ: `minishop-01`) vào đường dẫn `C:\xampp\htdocs\`.
3. Mở trình duyệt web và truy cập: `http://localhost/minishop-01/index.php`.
4. Để xem dữ liệu thô (debug), cuộn xuống cuối trang hoặc click chuột phải chọn *View Page Source* để kiểm tra thẻ comment máy chấm.

## 🎓 Thông tin sinh viên
* **Họ và tên:** Trần Đức Cơ
* **Chuyên ngành:** Hệ thống Thông tin 
* **Mã sinh viên:** 2251161959