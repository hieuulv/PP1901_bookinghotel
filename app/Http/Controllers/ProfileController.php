<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Slide_subpage;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile($id)
    {
        $users = User::find($id);
        $settings = Setting::all()->toArray();
        $slide_subpages = Slide_subpage::all()->toArray();

        return view('member.profile', compact('users', 'settings', 'slide_subpages'));
    }


}
