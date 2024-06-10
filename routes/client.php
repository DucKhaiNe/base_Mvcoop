<?php
use Khaind\MvcOop\Controllers\Client\AuthController;
use Khaind\MvcOop\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');

$router->get( '/auth/login',            AuthController::class . '@showFormLogin');
$router->post( '/auth/handle-login',    AuthController::class . '@login');
$router->get( '/auth/logout',           AuthController::class . '@logout');