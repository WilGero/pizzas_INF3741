<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Laracast\Flash\Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        if (auth()->user()->type == "administrador") {
            return view('adminHome');
        }else{
            return view('home');
        }
    }

    public function adminHome()
    {
        return view('adminHome');
    }

}
