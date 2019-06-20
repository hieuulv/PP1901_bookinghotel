<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function index_setting()
    {
        $settings = Setting::all();
        return view('admin.setting.index_setting', compact('settings'));
    }

    //EDIT Setting
    public function update($id)
    {
        $settings = Setting::find($id);
        if (empty($settings)) {

            return redirect('admin/setting');
        }

        return view('admin.setting.edit', compact('settings'));
    }

    public function edit(Request $request, $id)
    {
        $settings = Setting::find($id);
        if (empty($settings)) {
            return redirect('admin/setting');
        } else {
            $settings->logo = $request->get('logo');
            $settings->email = $request->get('email');
            $settings->phone = $request->get('phone');
            $settings->address = $request->get('address');
            $settings->map = $request->get('map');
            $settings->save();
        }

        return redirect()->route('index_setting', compact('settings'));
    }
}
