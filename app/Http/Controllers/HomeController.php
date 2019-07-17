<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Post;
use App\Models\Room;
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
        $settings = Setting::all()->toArray();
        $homepage = 'index';
        $slide_homes = Slide_home::all();

        return view('index', compact('settings', 'comments', 'homepage', 'slide_homes'));
    }

    public function about()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('about', compact('settings', 'slide_subpages'));
    }

    public function rooms()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
        $image_array = [];
        $rooms = Room::all()->toArray();
        foreach ($rooms as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['images'] = $image;
        }

        return view('rooms', compact('settings', 'slide_subpages', 'rooms', 'image_array'));
    }

    public function detail_rooms($id)
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
//        detail rooms
        $image_array = [];
        $rooms = Room::find($id)->toArray();
        $image = Image::where('rooms_id', $rooms['id'])->get()->toArray();
        $image_array['images'] = $image;
        $comments = Comment::with([
            'room' => function ($query) {
                $query->select(['id', 'name']);
            },
            'user' => function ($query) {
                $query->select(['id', 'name', 'email', 'images']);
            }])
            ->get()->toArray();

        return view('detail', compact('settings', 'slide_subpages', 'rooms', 'image_array', 'comments'));
    }

    public function booking($id){
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
        $image_array = [];
        $rooms = Room::find($id)->toArray();
        $image = Image::where('rooms_id', $rooms['id'])->get()->toArray();
        $image_array['images'] = $image;

        return view('booking', compact('rooms','image_array', 'settings', 'slide_subpages'));
    }

    public function post()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('post', compact('settings', 'slide_subpages'));
    }

    public function myroom(){
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('myroom', compact('settings', 'slide_subpages'));
    }

    public function contact()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('contact', compact( 'settings', 'slide_subpages'));
    }

    public function admin()
    {
        return view('admin.index');
    }

}
