<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Feedback;

class SiteController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->paginate(3);
        $links = $posts->links();
        return view('home', compact('posts', 'links'));
        
        
    }
    public function newsMore($id){
        
        $post = Post::findOrFail($id);

        $post->increment('views');

        $most_viewed = Post::mostViews()->get();

        return view('batafsil',[
            'post'=>$post,
            'most_posts'=>$most_viewed
        ]);
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
    public function FeedbackStore(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email|',
            'subject'=>'required|min:10|max:100',
            'message'=>'required|max:2048'
        ]);
        Feedback::create([
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'subject'=>$request->post('subject'),
            'message'=>$request->post('message')
        ]);
        return redirect()
                    ->route('contact')
                    ->with('success', 'Xabar uchun raxmat! Tez orada sizga javob qaytaramiz!');
    }
}
