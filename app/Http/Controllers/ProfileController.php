<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laracast\Flash\Flash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('profile.profile')->with('user', $user);
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->save();
        $user = auth()->user();
        return view('profile.profile')->with('user', $user);
    }
}


