<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Show Home
     * date: 2018/04/14
     * @param
     * @return View 'index'
     */
    public function home()
    {
        $pageTitle = 'Trang chủ';
        return view('index', ['pageTitle' => $pageTitle]);
    }
}
