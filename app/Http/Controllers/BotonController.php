<?php

// app/Http/Controllers/BotonController.php
// app/Http/Controllers/BotonController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use App\Models\Boton;
use Illuminate\Http\Request;

class BotonController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'imagen_id' => 'required',
            'contenido' => 'required|array',
            'posicion_x' => 'required|array',
            'posicion_y' => 'required|array',
        ]);

        $imagen_id = $request->imagen_id;
        $contenidos = $request->contenido;
        $posiciones_x = $request->posicion_x;
        $posiciones_y = $request->posicion_y;

        // Verificamos que el número de botones coincida en todos los campos
        $num_botones = count($contenidos);
        if (count($posiciones_x) != $num_botones || count($posiciones_y) != $num_botones) {
            return redirect()->back()->with('error', 'Los datos de los botones no coinciden.');
        }

        try {
            // Guardamos cada botón en la base de datos
            for ($i = 0; $i < $num_botones; $i++) {
                $boton = new Boton();
                $boton->imagen_id = $imagen_id;
                $boton->contenido = $contenidos[$i];
                $boton->posicion_x = $posiciones_x[$i];
                $boton->posicion_y = $posiciones_y[$i];
                $boton->save();
            }

            return redirect()->route('trabajos.index')->with('success', 'Botones agregados correctamente');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un problema al agregar los botones.');
        }
    }
}
