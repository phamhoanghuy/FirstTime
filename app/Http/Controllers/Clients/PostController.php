<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * Show Post
     * date: 2018/04/23
     * @param
     * @return View 'index'
     */
    public function showPost()
    {
        return view('post');
    }
}
