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
        $categories = Category::paginate(5);
        $comments = Comment::paginate(5);
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        $homepage = 'index';
        return view('index', compact('categories', 'posts', 'settings', 'comments', 'homepage'));
    }

    public function contact()
    {
        $categories = Category::paginate(5);
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        return view('contact', compact('categories', 'posts', 'settings'));
    }

    public function admin()
    {
        return view('admin.index');
    }

}
