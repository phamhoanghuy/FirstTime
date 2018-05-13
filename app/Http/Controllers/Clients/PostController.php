<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * Show Post
     * date: 2018/04/23
     * update: 2018/05/11
     * @param
     * @return View 'index'
     */
    public function showPost($type)
    {
        $title = '';
        $img = '';
        $caption = '';
        if($type == 'thiet-ke'){
            $title = 'Thiết kế';
            $img = 'images/post-img-1.jpg';
            $caption = 'Thiết kế quan trọng chủ yếu nhắm đến sự hài lòng của khách hàng là tiêu chí chính của chúng tôi';
        } else if ($type == 'in-an'){
            $title = 'In ấn';
            $img = 'images/post-img-2.jpg';
            $caption = 'In ấn trên mọi chất liệu với phong cách chuyên nghiệp, đem lại sự hài lòng cho khách hàng';
        } else if ($type == 'thi-cong'){
            $title = 'Thi công';
            $img = 'images/post-img-3.jpg';
            $caption = 'Thi công các công trình bảng hiệu quảng cáo từ lớn tới nhỏ.';
        }

        // Breadcrumb Ads Budget List && Header
        $this->push($title, '');
        $pageTitle = $title;

        $post = new Collection();
        $post->title = $title;
        $post->img = $img;
        $post->caption = $caption;
        $post->content = 'This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!
                    This is a line! This is a line! This is a line! This is a line! This is a line! This is a line!';

        return view('post', ['pageTitle' => $pageTitle, 'post' => $post, 'breadcrumbs' => $this->breadcrumbs]);
    }
}
