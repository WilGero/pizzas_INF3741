<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Supplie;
use Laracast\Flash\Flash;

class ProductsController extends Controller
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
            $products = Product::orderBy('id','desc')->paginate(100);
            return view('admin.products.index')->with('products', $products);
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
        $supplies = Supplie::orderBy('id', 'asc')->paginate();
        return view('admin.products.create')
            ->with('supplies', $supplies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product($request->all());
        $product->save();
        $supplies = Supplie::orderBy('id', 'asc')->paginate();
        foreach($supplies as $supplie){
            $nombre = $supplie->name;
            $product->supplies()->sync( [$supplie->id => ['amount' => $request->$nombre]], false);
        };
        flash('El producto ' . $product->name . ' a sido registrado de forma exitosa!')->success();
        $products = Product::orderBy('id','desc')->paginate(100);
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.show')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit')->with('product', $product);
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
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        $supplies = Supplie::orderBy('id', 'asc')->paginate();
        foreach($supplies as $supplie){
            $nombre = $supplie->name;
            $product->supplies()->sync( [$supplie->id => ['amount' => $request->$nombre]], false);
        };
        flash('El producto ' . $product->name . ' a sido editado de forma exitosa!')->success();
        $products = Product::orderBy('id','desc')->paginate(100);
        return view('admin.products.index')->with('products', $products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        flash('El producto ' . $product->name . ' a sido borrado de forma exitosa!')->success();
        $products = Product::orderBy('id','desc')->paginate(100);
        return view('admin.products.index')->with('products', $products);
    }
}
