<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index_user()
    {
        $users = User::all();

        return view('admin.user.index_user', compact('users'));
    }

    //Add User
    public function create()
    {
        return view('admin.user.add');
    }

    //Update user
    public function update($id)
    {
        $users = User::find($id);
        if (empty($users)) {
            return redirect('admin/user');
        }
        return view('admin.user.edit', compact('users'));
    }
}
