<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function updateSeo($title = null, $description = null, $image = null)
    {
        view()->share('site_title', $title ? $title : '');
        view()->share('site_description', $description ? $description : '');
        view()->share('site_image', url($image ? $image : ''));
    }
}
