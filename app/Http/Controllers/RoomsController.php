<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function index_rooms()
    {
        $rooms = Room::all();

        return view('admin.rooms.index_rooms', compact('rooms'));
    }

    //ADD Rooms
    public function create()
    {

        return view('admin.rooms.add');
    }

    public function add(Request $request)
    {
        $rooms = new Room();
        $rooms->name = $request->get('name');
        $rooms->title = $request->get('title');
        $rooms->rooms_detail = $request->get('rooms_detail');
        $rooms->price = $request->get('price');
        $rooms->address = $request->get('address');
        $rooms->bed_type = $request->get('bed_type');
        $rooms->save();

        return redirect()->route('index_rooms', compact('rooms'));
    }

    //EDIT CATEGORIES
    public function update($id)
    {
        $rooms = Room::find($id);
        if (empty($rooms)) {
            return redirect('admin/rooms');
        }

        return view('admin.rooms.edit', compact('rooms'));
    }

    public function edit(Request $request, $id)
    {
        $rooms = Room::find($id);
        if (empty($rooms)) {
            return redirect('admin/rooms');
        } else {
            $rooms->name = $request->get('name');
            $rooms->title = $request->get('title');
            $rooms->rooms_detail = $request->get('rooms_detail');
            $rooms->price = $request->get('price');
            $rooms->address = $request->get('address');
            $rooms->bed_type = $request->get('bed_type');
            $rooms->save();
        }
        return redirect()->route('index_rooms', compact('rooms'));
    }

    public function remove($id)
    {
        $rooms = Room::destroy($id);
        if (empty($rooms)) {
            abort(404);
        }

        return redirect()->route('index_rooms', compact('rooms'));
    }
}
