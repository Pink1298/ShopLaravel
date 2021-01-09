# ShopLaravel
Đồ án website thương mại điện tử bán xe máy xemaymeta.vn

# Thông tin về Tác giả
Mã sinh viên: 678
Họ tên: Trần Thị Huỳnh Hoa

# Hướng dẫn cách sử dụng dự án
## Step 1: Clone source dự án
Thực thi câu lệnh sau:
```
git clone https://github.com/Pink1298/ShopLaravel
```

## Step 2: Khởi tạo, kết nối database
Hiệu chỉnh file .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=xemaymeta
DB_USERNAME=root
DB_PASSWORD=matkhau
```

## Step 3: Tạo database, thực hiện migrate
- Tạo database xemaymeta, chuẩn bảng mã `utf8mb4_unicode_ci`
- Thực thi câu lệnh khởi tạo cấu trúc bảng
```
php artisan migrate
```

## Step 4: tạo dữ liệu mẫu
- Thực thi câu lệnh
```
php artisan db:seed
```

## Step 5: tạo domain ảo
- Tạo domain ảo với xemaymeta.vn

## Step 6: thông tin tài khoản truy cập hệ thống
