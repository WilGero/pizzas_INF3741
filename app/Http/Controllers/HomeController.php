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
        $orders = Order::orderBy('id','desc')->paginate(100);
        $orders->each(function($orders){
            $orders->user;
            $orders->customer;
        });
        $user = auth()->user();
        return view('admin.orders.index')
            ->with('orders', $orders)
            ->with('user', $user);
    }
}
