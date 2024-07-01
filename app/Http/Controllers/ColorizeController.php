<?php

namespace App\Http\Controllers;

use App\Models\EggerTableros;
use App\Models\FeplacLineas;
use App\Models\FeplacTableros;
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
            $files = FeplacLineas::all();
            return response()->json($files);
        } else if ($opcion == 2) {
            $files = EggerTableros::all();
            return response()->json($files);
        }
    }


    public function getFelac($lineaId)
    {
        $files = FeplacTableros::where('feplacLinea_id', $lineaId)->get();

        return $files;
    }
}
