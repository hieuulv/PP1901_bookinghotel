<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index_contact(){
        $contacts = Contact::all();

        return view('admin.contact.index_contact', compact('contacts'));
    }

    public function remove($id)
    {
        $contacts = Contact::destroy($id);
        if (empty($contacts)) {
            abort(404);
        }

        return redirect()->route('index_contact', compact('contacts'));
    }
}
