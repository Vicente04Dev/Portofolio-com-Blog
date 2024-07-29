<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\posts;
use App\Models\services;
use App\Models\testimonials;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $about = about::all();
        $services = services::all();
        $testimonials = testimonials::all();
        $posts = posts::all();

        return view('site.pages.index', compact(['about', 'services', 'testimonials', 'posts']));
    }

    public function sobre(){
        return view('site.pages.about');
    }

    public function portfolio(){
        return view('site.pages.portfolio');
    }

    public function blog(){
        return view('site.pages.blog');
    }

    public function contacto(){
        return view('site.pages.contact');
    }
}
