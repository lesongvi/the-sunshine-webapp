# the-sunshine-webapp

-   Project webapp đầu tiên của Tach!
-   Project này sẽ sử dụng Laravel 11.x làm backend và VueJS làm frontend.
-   Hướng dẫn rất chi tiết từng bước cài đặt và chạy project.

## Cài đặt sơ khai

-   Chỉ cần làm một lần lúc khởi tạo dự án từ đầu, nếu clone project từ git về thì không cần làm bước này

### Cài đặt Laravel

-   Cài đặt [PHP 8.4](https://www.php.net/downloads)
-   Cài đặt Composer [Composer](https://getcomposer.org/download/)
-   Cài đặt [Laravel](https://laravel.com/docs/11.x/installation)

-   Chạy lệnh sau để khởi tạo project Laravel mới

```bash
laravel new the-sunshine-webapp
```

#### Chi tiết cài đặt

-   Sử dụng Laravel Jetstream làm starter kit
-   Sử dụng Inertia.js và Vue.js làm Jetsream stack
-   Chọn cài đặt sẵn feature API support, Dark mode, Email verification

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

## Cài đặt thư viện

### Cài đặt vendor cho Laravel

-   Lệnh sau sẽ cài đặt các thư viện cần thiết cho Backend:

```bash
composer install
```

### Cài đặt node modules cho Inertia.js và Vue.js

-   Lệnh sau sẽ cài đặt các thư viện cần thiết cho Frontend:

```bash
npm install
```

## Chạy project

-   Để chạy project, chạy lệnh:

```bash
composer run dev
```
