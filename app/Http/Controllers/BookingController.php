<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //
    public function index_booking()
    {
        $bookings = Booking::where('user_id', '=', Auth::user()->id)->get();

        return view('admin.booking.index_booking', compact('bookings'));

    }

    public function member_booking(Request $request)
    {
        $rooms = Room::find($request->get('room_id'));
        if (empty($rooms)) {
            abort(404);
        }
        $rooms_id = $rooms['id'];
        $bookings = new Booking();
        $bookings->name = $request->get('name');
        $bookings->phone = $request->get('phone');
        $bookings->check_in = $request->get('check_in');
        $bookings->check_out = $request->get('check_out');
        $bookings->note = $request->get('note');
        $bookings->room_id = $request->get('room_id');
        $bookings->user_id = (Auth::user()->id);
        $bookings->status = $request->get('status');
        $bookings->save();

        return redirect()->route('myroom', compact('rooms_id'));
    }

    public function status_booking($id)
    {
        $status_bookings = Booking::find($id);

//        dd($status_bookings);

        return view('admin.booking.status_booking', compact('status_bookings'));
    }
}
