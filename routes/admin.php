<?php

use Khaind\MvcOop\Controllers\Admin\DashboardController;
use Khaind\MvcOop\Controllers\Admin\ProductController;
use Khaind\MvcOop\Controllers\Admin\UserController;
use Khaind\MvcOop\Controllers\Admin\PostController;
use Khaind\MvcOop\Models\Category;

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD PRODUCTS
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');  // Danh sách
        $router->get('/create',         ProductController::class . '@create'); // Show form thêm mới
        $router->post('/store',         ProductController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      ProductController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      ProductController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   ProductController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    ProductController::class . '@delete'); // Xóa
    });
    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');  // Danh sách
        $router->get('/create',         UserController::class . '@create'); // Show form thêm mới
        $router->post('/store',         UserController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      UserController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      UserController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   UserController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    UserController::class . '@delete'); // Xóa
    });
    // CRUD POST
    $router->mount('/posts', function () use ($router) {
        $router->get('/',               PostController::class . '@index');  // Danh sách
        $router->get('/create',         PostController::class . '@create'); // Show form thêm mới
        $router->post('/store',         PostController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      PostController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      PostController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   PostController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    PostController::class . '@delete'); // Xóa
    });
});
