<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->updateSeo();
    }

    public function home(){
        return view('pages.home');
    }
}
