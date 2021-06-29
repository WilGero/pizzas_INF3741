<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Laracast\Flash\Flash;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $orders = Order::orderBy('id','desc')->paginate(100);
        $orders->each(function($orders){
            $orders->user;
            $orders->customer;
        });
        //dd($orders);
        return view('admin.orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::orderBy('ci', 'asc')->paginate();
        $products = Product::orderBy('id', 'asc')->paginate();
        return view('admin.orders.create')
            ->with('customers', $customers)
            ->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order($request->all());
        $user = auth()->user();
        $order->user_id = $user->id;
        $order->save();

        $order->products()->sync( [
            1 => ['amount' => $request->p1],
            2 => ['amount' => $request->p2],
            3 => ['amount' => $request->p3],
            4 => ['amount' => $request->p4],
            5 => ['amount' => $request->p5],
            6 => ['amount' => $request->p6]
        ], false);
        flash('El pedido a sido creado de forma exitosa!')->success();
        $orders = Order::orderBy('id','desc')->paginate(100);
        return view('admin.orders.index')->with('orders', $orders); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $order->customer;
        return view('admin.orders.edit')
            ->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
