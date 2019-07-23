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
        $booking = Booking::with([
            'room' => function ($query) {
                $query->select(['id', 'name']);
            },
            'user' => function ($query) {
                $query->select(['id', 'email']);
            }])
            ->get()->toArray();

        return view('admin.booking.index_booking', compact('booking'));

    }

    public function member_booking(Request $request)
    {
        $rooms = Room::find($request->get('room_id'));
        if (empty($rooms)){
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
        $bookings->save();

        return redirect()->route('booking', compact( 'rooms_id'));
    }


}
