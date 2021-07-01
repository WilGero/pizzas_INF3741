<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplie;
use Laracast\Flash\Flash;

class SuppliesController extends Controller
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
            $supplies = Supplie::orderBy('id','desc')->paginate(100);
            return view('admin.supplies.index')->with('supplies', $supplies);
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
        return view('admin.supplies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplie = new Supplie($request->all());
        Supplie::create([
            'name' => $supplie['name'],
            'price' => $supplie['price'],
            'description' => $supplie['description'],
        ]);
        flash('El insumo ' . $supplie->name . ' a sido registrado de forma exitosa!')->success();
        $supplies = Supplie::orderBy('id','desc')->paginate(100);
        return view('admin.supplies.index')->with('supplies', $supplies);
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
        $supplie = Supplie::find($id);
        return view('admin.supplies.edit')->with('supplie', $supplie);
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
        $supplie = Supplie::find($id);
        $supplie->name = $request->name;
        $supplie->price = $request->price;
        $supplie->description = $request->description;
        $supplie->save();
        flash('El insumo ' . $supplie->name . ' a sido editado de forma exitosa!')->success();
        $supplies = Supplie::orderBy('id','desc')->paginate(100);
        return view('admin.supplies.index')->with('supplies', $supplies);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplie = Supplie::find($id);
        $supplie->delete();
        flash('El insumo ' . $supplie->name . ' a sido borrado de forma exitosa!')->success();
        $supplies = Supplie::orderBy('id','desc')->paginate(100);
        return view('admin.supplies.index')->with('supplies', $supplies);
    }
}
