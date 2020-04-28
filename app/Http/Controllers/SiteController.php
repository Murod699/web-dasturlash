<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(2);
        $links = $posts->links();
        return view('home', compact('posts', 'links'));
        
        
    }
    public function newsMore(){
        return view('newsMore');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function contact()
    {
        return view('contact');
    }
}
