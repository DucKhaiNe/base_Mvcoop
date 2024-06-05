<?php 

namespace Khaind\MvcOop\Controllers\Client;

use Khaind\MvcOop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Khaind';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}