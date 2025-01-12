# VSCode - Cơ bản

## Cài đặt VSCode

-   Cài đặt [VSCode](https://code.visualstudio.com/download)

## Giải thích cơ bản các thành phần chính của VSCode

### Thanh hoạt động trái (Left Activity Bar)

![Left Activity Bar](/docs/assets/left_activity_bar.png)

-   Thanh này chứa các biểu tượng tượng trưng cho các chức năng chính của VSCode:
    | Biểu tượng | Chức năng | Mô tả |
    |------------|----------|----------|
    | ![Explorer](/docs/assets/explorer_icon.png) | Mở cửa sổ Explorer | Hiển thị cấu trúc thư mục của dự án hiện tại |
    | ![Search](/docs/assets/search_icon.png) | Mở cửa sổ Search | Tìm kiếm trong dự án hiện tại |
    | ![Source Control](/docs/assets/source_control_icon.png) | Mở cửa sổ Source Control | Quản lý phiên bản của dự án hiện tại (GIT) |
    | ![Run](/docs/assets/debug_icon.png) | Mở cửa sổ Run & Debug | Chạy và Gỡ lỗi (Debug) ứng dụng |
    | ![Extensions](/docs/assets/extensions_icon.png) | Mở cửa sổ Extensions | Quản lý các Tiện ích mở rộng của VSCode |

-   Phía dưới thanh này thường có thêm 2 biểu tượng:
    | Biểu tượng | Chức năng | Mô tả |
    |------------|----------|----------|
    | ![Account](/docs/assets/account_icon.png) | Mở menu Account | Quản lý tài khoản của bạn |
    | ![Settings](/docs/assets/settings_icon.png) | Mở menu Settings | Cấu hình VSCode |

### Thanh bên (Side Bar)

![Side Bar](/docs/assets/side_bar.png)

-   Tùy theo từng chức năng mà bạn chọn ở thanh hoạt động trái, thanh bên sẽ hiển thị các tùy chọn cụ thể cho chức năng đó. Ví dụ theo hình trên, khi bạn chọn biểu tượng ![Explorer](/docs/assets/explorer_icon.png) thì thanh bên sẽ hiển thị cấu trúc thư mục của dự án hiện tại.

### Thanh trạng thái (Status Bar)

![Status Bar](/docs/assets/status_bar.png)

-   Thanh này chứa các thông tin cơ bản về dự án, file hiện tại, ngôn ngữ, trạng thái git, encoding, thông báo, có thể có một số thông tin được thêm từ các tiện ích mở rộng khác.

### Cửa sổ soạn thảo (Editor)

![Editor](/docs/assets/editor.png)

-   Cửa sổ soạn thảo chính của VSCode, nơi bạn viết code, xem code, chỉnh sửa code.

#### Các thẻ (Tabs) và Hành động (Actions)

![Tabs and Actions](/docs/assets/tabs_and_actions.png)

-   Trong cửa sổ soạn thảo, mỗi file mở sẽ có một thẻ tương ứng, bạn có thể chuyển đổi giữa các file bằng cách click vào thẻ đó.
-   Bên phải của thẻ có các hành động nhanh như kiểm tra lịch sử git, tách cửa sổ ra làm đôi và nhiều hành động khác.

### Bảng điều khiển cơ sở (Basepanel)

![Basepanel](/docs/assets/basepanel.png)

-   Bảng điều khiển cơ sở chứa các cửa sổ con như Terminal, Output, Problems, Debug Console
    | Tên | Chức năng | Mô tả |
    |------------|----------|----------|
    | Terminal | Mở cửa sổ Terminal | Dùng để chạy các lệnh CLI, nó giống như CMD vậy |
    | Output | Mở cửa sổ Output | Hiển thị thông tin từ các tiện ích mở rộng hoặc từ VSCode |
    | Problems | Mở cửa sổ Problems | Hiển thị các lỗi, cảnh báo từ code của bạn, nó có thể được tạo ra từ các tiện ích mở rộng hoặc từ VSCode |
    | Debug Console | Mở cửa sổ Debug Console | Hiển thị thông tin debug khi bạn chạy ứng dụng |
