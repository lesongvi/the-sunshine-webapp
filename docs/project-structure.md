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

# Cấu trúc dự án

## Cấu trúc thư mục

-   **the-sunshine-webapp**
    -   **app**: Thư mục chứa mã nguồn PHP của Laravel
        -   **Actions**: Thư mục chứa các Action của Laravel, mỗi Action là một class thực hiện một công việc cụ thể, ví dụ như tạo mới user, reset password, update profile...
        -   **Http**: Thư mục chứa mã nguồn liên quan đến HTTP, bao gồm Controllers và Middleware
            -   **Controllers**: Thư mục chứa các Controllers, mỗi Controller là một class thực hiện các công việc xử lý request từ client
            -   **Middleware**: Thư mục chứa các Middleware, mỗi Middleware là một class thực hiện các công việc xử lý request trước khi đến Controller
        -   **Models**: Thư mục chứa các Models, mỗi Model là một class tương ứng với một bảng trong database
        -   **Providers**: Thư mục chứa các Providers, mỗi Provider là một class cung cấp các dịch vụ cho ứng dụng, các dịch vụ này có thể là các dịch vụ của Laravel hoặc dịch vụ do người dùng tự định nghĩa
    -   **bootstrap**: Thư mục chứa các file khởi tạo ứng dụng, bình thường không cần chỉnh sửa vì Laravel sẽ tự động quản lý
    -   **config**: Thư mục chứa các file cấu hình của ứng dụng, bao gồm cấu hình database, cache, session, mail...
    -   **database**: Thư mục chứa các file liên quan đến database, bao gồm migrations, seeders, factories
    -   **docs**: Thư mục chứa tài liệu hướng dẫn, giải thích các thành phần của ứng dụng
    -   **public**: Thư mục chứa các file tĩnh của ứng dụng, bao gồm file CSS, JS, images...
    -   **resources**: Thư mục chứa các file nguồn của ứng dụng, bao gồm file CSS, JS, Blade templates, Markdown... Đây là nơi chúng ta sẽ làm việc nhiều nhất, sẽ có mô tả cấu trúc chi tiết ở dưới
    -   **routes**: Thư mục chứa các file định tuyến của ứng dụng, bao gồm file định tuyến cho API, file định tuyến cho Web
    -   **storage**: Thư mục chứa các file tạm của ứng dụng, bao gồm file cache, session, logs... -> Thư mục này không cần quan tâm, Laravel sẽ tự quản lý
    -   **tests**: Thư mục chứa các file test của ứng dụng, bao gồm các file test Unit, Feature, Pest, TestCase...
    -   **vendor**: Thư mục chứa các thư viện của ứng dụng, bao gồm các thư viện PHP, JS, CSS... -> Thư mục này không cần quan tâm, Laravel sẽ tự quản lý

## Cấu trúc các file (project root folder)

-   **the-sunshine-webapp**
    -   **_.env_** (Environment): File cấu hình môi trường của ứng dụng, chứa các thông tin nhạy cảm như thông tin database, thông tin mail, thông tin API...
    -   **_.env.example_**: File mẫu cấu hình môi trường của ứng dụng, chứa các thông tin mẫu, không chứa thông tin nhạy cảm -> File này không cần quan tâm
    -   **_.gitignore_**: File chứa danh sách các file, thư mục không muốn đưa lên Git. Ví dụ: .env, vendor, node_modules...
    -   **_.gitattributes_**: File cấu hình cho Git, chứa thông tin về cách xử lý file khi commit, merge...
    -   **_.editorconfig_**: File cấu hình cho Editor, chứa thông tin về cách format code, cách hiển thị tab, space...
    -   **_artisan_**: File thực thi các lệnh Artisan, dùng để tạo mới Controller, Model, Migration, Seeder...
    -   **_composer.json_**: File cấu hình Composer, chứa thông tin về các thư viện PHP cần cài đặt cho ứng dụng
    -   **_composer.lock_**: File chứa thông tin chi tiết về các thư viện PHP đã cài đặt, thường thi file này được tự quản lý bởi Composer
    -   **_jsconfig.json_**: File cấu hình cho JavaScript trong ứng dụng
    -   **_package.json_**: File cấu hình cho npm, chứa thông tin về các thư viện JS cần cài đặt cho ứng dụng
    -   **_package-lock.json_**: File chứa thông tin chi tiết về các thư viện JS đã cài đặt, thường thi file này được tự quản lý bởi npm
    -   **_phpunit.xml_**: File cấu hình cho PHPUnit, chứa thông tin về các file test, các file test coverage...
    -   **_postcss.config.js_**: File cấu hình cho PostCSS, chứa thông tin về các plugin PostCSS cần sử dụng
    -   **_tailwind.config.js_**: File cấu hình cho TailwindCSS, chứa thông tin về các plugin TailwindCSS cần sử dụng
    -   **_vite.config.js_**: File cấu hình cho Vite, chứa thông tin về các plugin Vite cần sử dụng
    -   **_LICENSE_**: File chứa thông tin về giấy phép sử dụng ứng dụng, chúng ta sử dụng giấy phép GNU GPL v3
    -   **_README.md_**: File chứa thông tin giới thiệu về ứng dụng, hướng dẫn cài đặt, hướng dẫn sử dụng...

## Cấu trúc thư mục resources

-   **resources**
    -   **css**: Thư mục chứa các file CSS của ứng dụng, để trang trí giao diện
        -   **_app.css_**
    -   **js**: Thư mục chứa các file JS của ứng dụng, để xử lý logic, cho người dùng tương tác trực tiếp với ứng dụng
        -   **Components**: Thư mục chứa các Components VueJS, mỗi Component là một file .vue, chứa HTML, CSS, JS. Trong một trang web sẽ có nhiều thành phần nhỏ, mỗi thành phần nhỏ sẽ được tách ra thành một Component riêng, ví dụ như Header (phần đầu trang), Footer (phần cuối trang), Sidebar (phần bên trái hoặc bên phải trang)...
        -   **Layouts**: Thư mục chứa các Layouts VueJS, mỗi Layout là một file .vue, chứa HTML, CSS, JS. Layout là cấu trúc chung của một trang web và sẽ chứa những component được sử dụng chung cho nhiều trang, ví dụ như Header, Footer, Sidebar... (những component này đều cần được hiển thị ở mọi trang)
        -   **Pages**: Thư mục chứa các Pages VueJS, mỗi Page là một file .vue, chứa HTML, CSS, JS. Page là trang web mà người dùng sẽ thấy, nó sẽ chứa nhiều components và layout. Mỗi trang sẽ có một URL riêng và có thể chứa những component khác nhau, ví dụ như /index (trang chủ) sẽ chứa component danh sách bài viết, /post (trang bài viết) sẽ chứa component chi tiết bài viết...
        -   **_app.js_**: File chứa mã nguồn JS chính của ứng dụng, nó sẽ import các file JS khác, khởi tạo ứng dụng VueJS
        -   **_bootstrap.js_**: File chứa mã nguồn JS khởi tạo ứng dụng, nó sẽ import các thư viện cần thiết cho ứng dụng
    -   **markdown**: Thư mục chứa các file Markdown, dùng để viết tài liệu, hướng dẫn, giải thích... Thường thì bạn không cần quan tâm đến thư mục này
    -   **views**: Thư mục chứa các file Blade templates, dùng để hiển thị giao diện cho người dùng, Blade template là một công nghệ template engine của Laravel, nó cho phép chúng ta viết mã PHP trong file HTML, thường thì chúng ta sẽ ít sử dụng Blade template vì chúng ta đã sử dụng VueJS để xử lý giao diện. Giao diện sẽ được tải một lần duy nhất khi truy cập trang web, sau đó sẽ không cần tải lại trang web mỗi khi người dùng tương tác với ứng dụng. Nếu chúng ta phát triển email, thì có thể sử dụng Blade template để tạo nội dung email.
