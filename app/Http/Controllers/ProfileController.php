<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'desc')->get();
        return view('profile.profile',compact('user'));
    }
}
