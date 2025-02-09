<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Cái này là route mặc định của Laravel
// Bạn define route và component tương ứng với route đó ở đây
// Ví dụ: Khi vào trang chủ (không có đường dẫn nào tương ứng với /), thì sẽ render component Welcome
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route này sẽ render component Login
// Ở đây bạn có thể dùng thêm middleware để kiểm tra quyền truy cập, ví dụ ở đây tôi dùng auth:sanctum để kiểm tra xem user đã đăng nhập chưa trước khi vào trang dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
