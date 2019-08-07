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
use App\Repositories\BookingHotelRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $bookingHotelRepository;

    public function __construct(BookingHotelRepositoryInterface $bookingHotelRepository)
    {
        $this->bookingHotelRepository = $bookingHotelRepository;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = $this->bookingHotelRepository->comments_lmit();
        $image_array_one = $this->bookingHotelRepository->img_one();
        $image_array_two = $this->bookingHotelRepository->img_tow();
        $settings = $this->bookingHotelRepository->settingAll();
        $homepage = 'index';
        $slide_homes = $this->bookingHotelRepository->slide_index();

        return view('index', compact('comments', 'image_array_one', 'image_array_two', 'settings', 'homepage', 'slide_homes'));
    }

    public function about()
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('about', compact('settings', 'slide_subpages'));
    }

    public function rooms()
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = $this->bookingHotelRepository->slide_subpage();
        $image_array = $this->bookingHotelRepository->image_first();

        return view('rooms', compact('settings', 'slide_subpages', 'image_array'));
    }

    public function detail_rooms($id)
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = $this->bookingHotelRepository->slide_subpage();
//        detail rooms
        $rooms = $this->bookingHotelRepository->roomId($id);
        $image_array = $this->bookingHotelRepository->imageAll($id);
        $comment_id = $this->bookingHotelRepository->commentId($id);
//dd($image_array);
        return view('detail_room', compact('settings', 'slide_subpages', 'rooms', 'image_array', 'comment_id'));
    }

    public function booking($id)
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = $this->bookingHotelRepository->slide_subpage();
        $rooms = $this->bookingHotelRepository->roomId($id);
        $image_array = $this->bookingHotelRepository->imageAll($id);

        return view('booking', compact('rooms', 'image_array', 'settings', 'slide_subpages'));
    }

    public function post()
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = $this->bookingHotelRepository->slide_subpage();

        return view('post', compact('settings', 'slide_subpages'));
    }

    public function myroom()
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = $this->bookingHotelRepository->slide_subpage();
        $bookings = Booking::where('user_id', '=', Auth::user()->id)->get();

        return view('myroom', compact('settings', 'bookings', 'slide_subpages'));
    }

    public function contact()
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = $this->bookingHotelRepository->slide_subpage();

        return view('contact', compact('settings', 'slide_subpages'));
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function search(Request $request)
    {
        $settings = $this->bookingHotelRepository->settingAll();
        $slide_subpages = $this->bookingHotelRepository->slide_subpage();

        $image_array = [];
        $rooms = Room::paginate(5);
        foreach ($rooms as $key => $value) {
            $image = Image::where('rooms_id', $value['id'])->first();
            $image_array[$key] = $value;
            $image_array[$key]['images'] = $image;
        }


        $kw = $request->keyword;
        $rooms = Room::where('name', 'like', "%$kw%")->orWhere('price', 'like', "%$kw%");

        return view('rooms', compact('rooms', 'settings', 'slide_subpages', 'image_array'));
    }

}
