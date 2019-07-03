<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Slide_home;
use App\Models\Slide_subpage;
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
        $slide_homes = Slide_home::all();
        return view('index', compact('posts', 'settings', 'comments', 'homepage', 'slide_homes'));
    }

    public function about()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
        return view('about', compact( 'settings', 'slide_subpages'));
    }

    public function rooms()
    {
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
        return view('rooms', compact( 'posts', 'settings', 'slide_subpages'));
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
        $slide_subpages = Slide_subpage::all()->toArray();
        return view('post', compact( 'posts', 'settings', 'slide_subpages'));
    }

    public function contact()
    {
        $posts = Post::all();
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
        return view('contact', compact( 'posts', 'settings', 'slide_subpages'));
    }

    public function contact_admin(Request $request)
    {
        $contacts = new Contact();
        $contacts->name = $request->get('name');
        $contacts->email = $request->get('email');
        $contacts->phone = $request->get('phone');
        $contacts->address = $request->get('address');
        $contacts->content = $request->get('content');
        $contacts->save();

        return redirect()->route('contact', compact('contacts'));
    }

    public function admin()
    {
        return view('admin.index');
    }

}
