# the-sunshine-webapp

-   Project webapp đầu tiên của Tach!
-   Project này sẽ sử dụng Laravel 11.x làm backend và VueJS làm frontend.
-   Hướng dẫn rất chi tiết từng bước cài đặt và chạy project.

## Hướng dẫn các phần mềm liên quan

-   [Hướng dẫn cơ bản VSCode](/docs/vscode.md)
-   [Cài đặt tiện ích mở rộng VSCode](/docs/vscode-extensions.md)

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
echo tachdepgai:
```

-   Sau khi chạy lệnh trên trong Terminal, mở trình duyệt và truy cập vào địa chỉ [http://localhost:8001](http://localhost:8001) để xem project.

## Cấu trúc project

### Cấu trúc thư mục

-   the-sunshine-webapp
    -   app: Thư mục chứa mã nguồn PHP của Laravel
        -   Actions: Thư mục chứa các Action của Laravel, mỗi Action là một class thực hiện một công việc cụ thể, ví dụ như tạo mới user, reset password, update profile...
        -   Http: Thư mục chứa mã nguồn liên quan đến HTTP, bao gồm Controllers và Middleware
            -   Controllers: Thư mục chứa các Controllers, mỗi Controller là một class thực hiện các công việc xử lý request từ client
            -   Middleware: Thư mục chứa các Middleware, mỗi Middleware là một class thực hiện các công việc xử lý request trước khi đến Controller
        -   Models: Thư mục chứa các Models, mỗi Model là một class tương ứng với một bảng trong database
        -   Providers: Thư mục chứa các Providers, mỗi Provider là một class cung cấp các dịch vụ cho ứng dụng, các dịch vụ này có thể là các dịch vụ của Laravel hoặc dịch vụ do người dùng tự định nghĩa
    -   bootstrap: Thư mục chứa các file khởi tạo ứng dụng, bình thường không cần chỉnh sửa vì Laravel sẽ tự động quản lý
    -   config: Thư mục chứa các file cấu hình của ứng dụng, bao gồm cấu hình database, cache, session, mail...
    -   database: Thư mục chứa các file liên quan đến database, bao gồm migrations, seeders, factories
    -   docs: Thư mục chứa tài liệu hướng dẫn, giải thích các thành phần của ứng dụng
    -   public: Thư mục chứa các file tĩnh của ứng dụng, bao gồm file CSS, JS, images...
    -   resources: Thư mục chứa các file nguồn của ứng dụng, bao gồm file CSS, JS, Blade templates, Markdown... Đây là nơi chúng ta sẽ làm việc nhiều nhất, sẽ có mô tả cấu trúc chi tiết ở dưới
    -   routes: Thư mục chứa các file định tuyến của ứng dụng, bao gồm file định tuyến cho API, file định tuyến cho Web
    -   storage: Thư mục chứa các file tạm của ứng dụng, bao gồm file cache, session, logs... -> Thư mục này không cần quan tâm, Laravel sẽ tự quản lý
    -   tests: Thư mục chứa các file test của ứng dụng, bao gồm các file test Unit, Feature, Pest, TestCase...
    -   vendor: Thư mục chứa các thư viện của ứng dụng, bao gồm các thư viện PHP, JS, CSS... -> Thư mục này không cần quan tâm, Laravel sẽ tự quản lý

### Cấu trúc các file (project root folder)

-   the-sunshine-webapp
    -   .env (Environment): File cấu hình môi trường của ứng dụng, chứa các thông tin nhạy cảm như thông tin database, thông tin mail, thông tin API...
    -   .env.example: File mẫu cấu hình môi trường của ứng dụng, chứa các thông tin mẫu, không chứa thông tin nhạy cảm -> File này không cần quan tâm
    -   .gitignore: File chứa danh sách các file, thư mục không muốn đưa lên Git. Ví dụ: .env, vendor, node_modules...
    -   .gitattributes: File cấu hình cho Git, chứa thông tin về cách xử lý file khi commit, merge...
    -   .editorconfig: File cấu hình cho Editor, chứa thông tin về cách format code, cách hiển thị tab, space...
    -   artisan: File thực thi các lệnh Artisan, dùng để tạo mới Controller, Model, Migration, Seeder...
    -   composer.json: File cấu hình Composer, chứa thông tin về các thư viện PHP cần cài đặt cho ứng dụng
    -   composer.lock: File chứa thông tin chi tiết về các thư viện PHP đã cài đặt, thường thi file này được tự quản lý bởi Composer
    -   jsconfig.json: File cấu hình cho JavaScript trong ứng dụng
    -   package.json: File cấu hình cho npm, chứa thông tin về các thư viện JS cần cài đặt cho ứng dụng
    -   package-lock.json: File chứa thông tin chi tiết về các thư viện JS đã cài đặt, thường thi file này được tự quản lý bởi npm
    -   phpunit.xml: File cấu hình cho PHPUnit, chứa thông tin về các file test, các file test coverage...
    -   postcss.config.js: File cấu hình cho PostCSS, chứa thông tin về các plugin PostCSS cần sử dụng
    -   tailwind.config.js: File cấu hình cho TailwindCSS, chứa thông tin về các plugin TailwindCSS cần sử dụng
    -   vite.config.js: File cấu hình cho Vite, chứa thông tin về các plugin Vite cần sử dụng
    -   LICENSE: File chứa thông tin về giấy phép sử dụng ứng dụng, chúng ta sử dụng giấy phép GNU GPL v3
    -   README.md: File chứa thông tin giới thiệu về ứng dụng, hướng dẫn cài đặt, hướng dẫn sử dụng...

### Cấu trúc thư mục resources

-   resources
    -   css: Thư mục chứa các file CSS của ứng dụng, để trang trí giao diện
        -   app.css
    -   js: Thư mục chứa các file JS của ứng dụng, để xử lý logic, cho người dùng tương tác trực tiếp với ứng dụng
        -   Components: Thư mục chứa các Components VueJS, mỗi Component là một file .vue, chứa HTML, CSS, JS. Trong một trang web sẽ có nhiều thành phần nhỏ, mỗi thành phần nhỏ sẽ được tách ra thành một Component riêng, ví dụ như Header (phần đầu trang), Footer (phần cuối trang), Sidebar (phần bên trái hoặc bên phải trang)...
        -   Layouts: Thư mục chứa các Layouts VueJS, mỗi Layout là một file .vue, chứa HTML, CSS, JS. Layout là cấu trúc chung của một trang web và sẽ chứa những component được sử dụng chung cho nhiều trang, ví dụ như Header, Footer, Sidebar... (những component này đều cần được hiển thị ở mọi trang)
        -   Pages: Thư mục chứa các Pages VueJS, mỗi Page là một file .vue, chứa HTML, CSS, JS. Page là trang web mà người dùng sẽ thấy, nó sẽ chứa nhiều components và layout. Mỗi trang sẽ có một URL riêng và có thể chứa những component khác nhau, ví dụ như /index (trang chủ) sẽ chứa component danh sách bài viết, /post (trang bài viết) sẽ chứa component chi tiết bài viết...
        -   app.js: File chứa mã nguồn JS chính của ứng dụng, nó sẽ import các file JS khác, khởi tạo ứng dụng VueJS
        -   bootstrap.js: File chứa mã nguồn JS khởi tạo ứng dụng, nó sẽ import các thư viện cần thiết cho ứng dụng
    -   markdown: Thư mục chứa các file Markdown, dùng để viết tài liệu, hướng dẫn, giải thích... Thường thì bạn không cần quan tâm đến thư mục này
    -   views: Thư mục chứa các file Blade templates, dùng để hiển thị giao diện cho người dùng, Blade template là một công nghệ template engine của Laravel, nó cho phép chúng ta viết mã PHP trong file HTML, thường thì chúng ta sẽ ít sử dụng Blade template vì chúng ta đã sử dụng VueJS để xử lý giao diện. Giao diện sẽ được tải một lần duy nhất khi truy cập trang web, sau đó sẽ không cần tải lại trang web mỗi khi người dùng tương tác với ứng dụng. Nếu chúng ta phát triển email, thì có thể sử dụng Blade template để tạo nội dung email.
