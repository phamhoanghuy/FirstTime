<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show Contact Form
     * date: 2018/05/11
     * @param
     * @return View 'index'
     */
    public function showContactForm()
    {
        $title = 'Thông tin khách hàng';
        // Breadcrumb Ads Budget List && Header
        $this->push($title, '');
        $pageTitle = $title;
        return view('contact', ['pageTitle' => $pageTitle, 'breadcrumbs' => $this->breadcrumbs]);
    }

    /**
     * Send Contact Form
     * date: 2018/05/11
     * @param
     * @return $response['result']
     */
    public function sendContactForm(Request $request)
    {
        $data = $request->all();
        return response(['result' => 'success', 'data' => $data]);
    }
}
