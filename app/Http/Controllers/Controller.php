<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Collection;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Collection Breadcrumbs currently being generated.
     */
    protected $breadcrumbs;
    public function __construct()
    {
        $this->breadcrumbs = new Collection();
        $this->push('Trang chủ', route('home'));
    }

    /**
     * Add a breadcrumb.
     *
     * Should be called from the closure for each page. May be called more than once.
     *
     * @param string      $title The title of the page.
     * @param string|null $url   The URL of the page.
     * @param array       $data  Optional associative array of additional data to pass to the view.
     */
    protected function push(string $title, string $url = null, array $data = []) //: void
    {
        $this->breadcrumbs->push((object) array_merge($data, [
            'title' => $title,
            'url'   => $url,
        ]));
    }
}
