<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile($id)
    {
        $users = User::find($id);
        return view('member.profile', compact('users'));
    }


}
