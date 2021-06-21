<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Laracast\Flash\Flash;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::orderBy('id','desc')->paginate(100);
        return view('admin.types.index')->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type($request->all());
        Type::create([
            'type' => $type['type'],
        ]);
        flash('El tipo ' . $type->type . ' a sido registrado de forma exitosa!')->success();
        $types = Type::orderBy('id','desc')->paginate(100);
        return view('admin.types.index')->with('types', $types);
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
        $type = Type::find($id);
        return view('admin.types.edit')->with('type', $type);
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
        $type = Type::find($id);
        $type->type = $request->type;
        $type->save();
        flash('El tipo ' . $type->type . ' a sido editado de forma exitosa!')->success();
        $types = Type::orderBy('id','desc')->paginate(100);
        return view('admin.types.index')->with('types', $types);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Type::find($id);
        $type->delete();
        flash('El tipo ' . $type->type . ' a sido borrado de forma exitosa!')->success();
        $types = Type::orderBy('id','desc')->paginate(100);
        return view('admin.types.index')->with('types', $types);
    }
}
