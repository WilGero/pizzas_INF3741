<?php

namespace App\Http\Controllers;

use App\Models\Carrousel;
use App\Models\Image;
use Illuminate\Http\Request;

class CarrouselController extends Controller
{

    public function index()
    {
        $carruseles = Carrousel::orderBy('id', 'desc')->get();
        return view('carrousels.index', compact('carruseles'));
    }

    public function create()
    {
        return view('carrousels.create');
    }


    public function store(Request $request)
    {
        $carrusel = Carrousel::create([
            'title' => $request->title,
            'description' => $request->description,
            'urlimage' => $request->urlimage,
        ]);
        return redirect()->route('carrousels.index')->with('info', 'Carrusel creado exitosamente');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function caruselimage(Request $request)
    {
        try {
            $folderPath = public_path('storage/carrousels/');

            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);

            $imageName = uniqid() . '.png';

            $imageFullPath = $folderPath . $imageName;

            file_put_contents($imageFullPath, $image_base64);

            $saveFile = new Image();
            $saveFile->title = $imageName;
            $saveFile->save();
            $datos = array(
                'nombrefoto' => $imageName
            );
            //Devolvemos el array pasado a JSON como objeto

            return json_encode($datos, JSON_FORCE_OBJECT);
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}
