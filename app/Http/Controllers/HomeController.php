<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Post;
use App\Models\Room;
use App\Models\Setting;
use App\Models\Slide_home;
use App\Models\Slide_subpage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $comments = Comment::limit(5)->get()->toArray();
        $image_array_one = [];
        $room_one = Room::limit(4)->orderBy('id', 'desc')->get()->toArray();
        foreach ($room_one as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array_one[$key] = $value;
            $image_array_one[$key]['images'] = $image;
        }
        $image_array_two = [];
        $room_two = Room::limit(8)->orderBy('id', 'asc')->get()->toArray();
        foreach ($room_two as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array_two[$key] = $value;
            $image_array_two[$key]['images'] = $image;
        }
        $settings = Setting::all()->toArray();
        $homepage = 'index';
        $slide_homes = Slide_home::all();

        return view('index', compact('comments', 'image_array_one', 'image_array_two', 'room_one', 'settings', 'homepage', 'slide_homes'));
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
        $rooms = Room::paginate(5);
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
        $comment_id = Comment::where('room_id', $rooms['id'])->get()->toArray();

        return view('detail_room', compact('settings', 'slide_subpages', 'rooms', 'image_array', 'comment_id', 'id'));
    }

    public function booking($id)
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
        $image_array = [];
        $rooms = Room::find($id)->toArray();
        $image = Image::where('rooms_id', $rooms['id'])->get()->toArray();
        $image_array['images'] = $image;

        return view('booking', compact('rooms', 'image_array', 'settings', 'slide_subpages'));
    }

    public function post()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('post', compact('settings', 'slide_subpages'));
    }

    public function myroom()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        $bookings = Booking::with([
            'room' => function ($query) {
                $query->select(['id', 'name']);
            },
            'user' => function ($query) {
                $query->select(['id', 'email']);
            }])
            ->get()->toArray();

        return view('myroom', compact('settings','bookings', 'slide_subpages'));
    }

    public function contact()
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('contact', compact('settings', 'slide_subpages'));
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function search(Request $request)
    {
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();
        $image_array = [];
        $rooms = Room::paginate(5);
        foreach ($rooms as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['images'] = $image;
        }

        if (!$request->has('keyword') || empty($request->keyword)) {
//            return view('rooms');
        } else {
            $kw = $request->keyword;
            $rooms = Room::where('name', 'like', "%$kw%")->orWhere('price', 'like', "%$kw%")->get();
        }

        return view('rooms', compact('rooms', 'settings', 'slide_subpages', 'image_array'));
    }

}
