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

    /**
     * Show Printing Quotation
     * date: 2018/05/13
     * @param
     * @return View 'quotation'
     */
    public function showQuotation()
    {
        $title = 'Báo giá';

        // Breadcrumb Ads Budget List && Header
        $this->push($title, '');
        $pageTitle = $title;

        return view('quotation', ['pageTitle' => $pageTitle, 'breadcrumbs' => $this->breadcrumbs]);
    }

    public function test()
    {
        return view('test');
    }

    /**
     * Show upload files form
     * date: 2018/05/13
     * @param
     * @return View 'upload_files'
     */
    public function showUploadFilesForm()
    {
        $title = 'Gửi File';
        // Breadcrumb Ads Budget List && Header
        $this->push($title, '');
        $pageTitle = $title;
        return view('upload_files', ['pageTitle' => $pageTitle, 'breadcrumbs' => $this->breadcrumbs]);
    }
}
