<?php

namespace App\Http\Controllers;

use App\Models\eggertableros;
use App\Models\feplaclineas;
use App\Models\feplactableros;
use Illuminate\Http\Request;

class ColorizeController extends Controller
{
    public function colorize()
    {
        return view('colorize.colorize');
    }

    public function getFiles($opcion)
    {
        if ($opcion == 1) {
            $files = feplaclineas::all();
            return response()->json($files);
        } else if ($opcion == 2) {
            $files = eggertableros::all();
            return response()->json($files);
        }
    }


    public function getFelac($lineaId)
    {
        $files = feplactableros::where('feplacLinea_id', $lineaId)->get();

        return $files;
    }
}
