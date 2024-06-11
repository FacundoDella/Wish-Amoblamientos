<?php

// app/Http/Controllers/BotonController.php
// app/Http/Controllers/BotonController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use App\Models\Boton;
use Illuminate\Http\Request;

// class BotonController extends Controller
// {
//     public function store(Request $request)
//     {
//         $requestData = $request->all();


//         $botones = $requestData;

//         foreach ($botones as $data) {
//             $validatedData = Validator::make($data, [
//                 'imagen_id' => 'required|exists:imagenes,id',
//                 'contenido' => 'required|string',
//                 'posicion_x' => 'required|numeric',
//                 'posicion_y' => 'required|numeric',

//             ])->validate();

//             Boton::create($validatedData);
//         }
//         // Redireccionar de vuelta a la vista original
//         return redirect()->route('trabajos.index')->with('success', 'Botones agregados correctamente');
//     }
// }
class BotonController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'imagen_id' => 'required',
            'contenido' => 'required',
            'posicion_x' => 'required',
            'posicion_y' => 'required',
        ]);

        $boton = new Boton();
        $boton->imagen_id = $request->imagen_id;
        $boton->contenido = $request->contenido;
        $boton->posicion_x = $request->posicion_x;
        $boton->posicion_y = $request->posicion_y;
        $boton->save();

        // Redireccionar de vuelta a la vista original
        return redirect()->route('trabajos.index')->with('success', 'Botones agregados correctamente');
    }
}
