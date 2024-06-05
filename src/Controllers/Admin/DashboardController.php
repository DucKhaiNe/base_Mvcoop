<?php

namespace  Khaind\MvcOop\Controllers\Admin;

use  Khaind\MvcOop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
