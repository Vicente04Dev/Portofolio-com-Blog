<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\category;
use App\Models\comments;
use App\Models\contacts;
use App\Models\portfolio;
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
        $abouts = about::all();
        $services = services::all();
        $testimonials = testimonials::all();
        $posts = posts::all();

        return view('site.pages.about',  compact(['abouts', 'services', 'testimonials', 'posts']));
    }

    public function portfolio(){
        $portfolios = portfolio::all();
        return view('site.pages.portfolio', compact('portfolios'));
    }

    public function blog(){
        $posts = posts::paginate(2);
        $categories = category::all();
        $comments = comments::all();
        return view('site.pages.blog', compact(['posts', 'categories', 'comments']));
    }

    public function contacto(){
        $contacts = contacts::all();
        return view('site.pages.contact', compact('contacts'));
    }

    public function showPost($slug){
        $posts = posts::where('slug', $slug)->get();
        $postsAll = posts::all();
        $categories = category::all();
        $comments = comments::all();

        $commentsPost = comments::where('post_id', $posts[0]->id)->get();
        return view('site.pages.blogDetails', compact(['posts', 'categories', 'comments', 'postsAll', 'commentsPost'] ));
    }
}
