<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        return view('admin.pages.user.profile.user-info', compact('user'));
    }


    public function userInfo(){
        return view('admin.pages.user.profile.user-info');
    }

    public function profileForm(){
        return view('admin.pages.user.profile.update');
    }
    public function settingIndex(){
        return view('admin.pages.user.setting.index');
    }




}
