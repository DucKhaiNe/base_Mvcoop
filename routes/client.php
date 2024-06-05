<?php

use Khaind\MvcOop\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');