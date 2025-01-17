<!--
 Copyright 2025 Administrator

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

     https://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->

# Cài đặt dự án

## Lưu ý về PHP

### Phiên bản PHP

-   Sử dụng phiên bản PHP 8.2.x

### Cài đặt CA cert

-   Tải file [cacert.pem](https://curl.se/ca/cacert.pem) và cài đặt cacert trong php.ini

```ini
cacert=<absolute path to cacert.pem>
```

### Extension PHP cần thiết

-   php_openssl
-   php_fileinfo
-   zip
-   pcntl (không cài trên Windows được theo tài liệu của PHP)

## Cài đặt thư viện

### Cài đặt vendor cho Laravel

-   Lệnh sau sẽ cài đặt các thư viện cần thiết cho Backend:

```bash
composer install
```

### Databases và Migrations

-   Sau khi cài đặt Laravel, cấu hình thông tin database trong file `.env` để webapp có thể kết nối với database.
-   Cần phải tạo database có thể là `the-sunshine-webapp` trước khi chạy migrations nha!

```bash
DB_CONNECTION=mysql # Driver của database, chúng ta sẽ sử dụng MySQL
DB_HOST=127.0.0.1 # Địa chỉ IP của database server, 127.0.0.1 chính là máy tính hiện tại
DB_PORT=3306 # Port của database server, mặc định là 3306
DB_DATABASE=the-sunshine-webapp # Tên database
DB_USERNAME=root # Tên đăng nhập vào database
DB_PASSWORD=123123 # Mật khẩu đăng nhập vào database
```

-   Nếu có lỗi xảy ra, kiểm tra lại thông tin đăng nhập, port, tên database xem đúng với database đang chạy chưa, nếu sử dụng XAMPP, kiểm tra lại thông tin trong file `C:\xampp\phpMyAdmin\config.inc.php`, tìm đoạn giống dưới này, user và password là thông tin cần thiết:

```php
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';
```

-   Sau khi setup xong database, chạy lệnh sau để tạo bảng trong database:

```bash
php artisan migrate
```

-   Tạo khóa mã hóa

```bash
php artisan key:generate
```

### Cài đặt node modules cho Inertia.js và Vue.js

-   Lệnh sau sẽ cài đặt các thư viện cần thiết cho Frontend:

```bash
npm install
```
