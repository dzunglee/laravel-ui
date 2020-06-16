<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function __construct()
    {
        $this->updateSeo('Branding');
    }

    public function home(){
        return view('pages.home');
    }

    public function about(){
        $this->updateSeo('About');
        return view('pages.about');
    }

    public function services(){
        $this->updateSeo('Services');
        return view('pages.services');
    }

    public function projects(){
        $this->updateSeo('Projects');
        return view('pages.projects');
    }

    public function blog(){
        $this->updateSeo('Blog');
        return view('pages.blog');
    }

    public function contact(){
        $this->updateSeo('Contact');
        return view('pages.contact');
    }
}
