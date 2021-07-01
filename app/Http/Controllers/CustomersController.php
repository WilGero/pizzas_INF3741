<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Laracast\Flash\Flash;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        if($user->type == "administrador"){
            $customers = Customer::orderBy('id','desc')->paginate(100);
            return view('admin.customers.index')->with('customers', $customers);
        }else{
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer($request->all());
        Customer::create([
            'ci' => $customer['ci'],
            'name' => $customer['name'],
            'phone' => $customer['phone'],
            'direction' => $customer['direction'],
            
        ]);
        flash('El cliente ' . $customer->name . ' a sido creado de forma exitosa!')->success();
        $customers = Customer::orderBy('id','desc')->paginate(100);
        return view('admin.customers.index')->with('customers', $customers);
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
        $customer = Customer::find($id);
        return view('admin.customers.edit')->with('customer', $customer);
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
        $customer = Customer::find($id);
        $customer->ci = $request->ci;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->direction = $request->direction;
        $customer->save();
        flash('El cliente ' . $customer->name . ' a sido editado de forma exitosa!')->success();
        $customers = Customer::orderBy('id','desc')->paginate(100);
        return view('admin.customers.index')->with('customers', $customers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        flash('El cliente ' . $customer->name . ' a sido borrado de forma exitosa!')->success();
        $customers = Customer::orderBy('id','desc')->paginate(100);
        return view('admin.customers.index')->with('customers', $customers);
    }
}
