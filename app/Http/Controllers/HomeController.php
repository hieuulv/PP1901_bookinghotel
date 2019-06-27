<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::paginate(5);
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        $homepage = 'index';
        return view('index', compact('posts', 'settings', 'comments', 'homepage'));
    }

    public function rooms()
    {
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        return view('rooms', compact( 'posts', 'settings'));
    }

    public function detail_rooms()
    {
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        return view('detail', compact( 'posts', 'settings'));
    }

    public function post()
    {
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        return view('post', compact( 'posts', 'settings'));
    }

    public function contact()
    {
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        return view('contact', compact( 'posts', 'settings'));
    }

    public function admin()
    {
        return view('admin.index');
    }

}
