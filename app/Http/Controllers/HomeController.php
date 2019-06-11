<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();
        $posts = Post::all();
        $setting = Setting::all();
        return view('index', compact('categories', 'posts', 'setting'));
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function profile()
    {
        return view('member.profile');
    }

}
