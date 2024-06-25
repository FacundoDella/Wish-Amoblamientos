<?php

namespace App\Http\Controllers;

use App\Models\FeplacLineas;
use Illuminate\Http\Request;

class FeplacLineasController extends Controller
{
    public function uploadJsonFeplac(Request $request)
    {
        $jsonData = json_decode($request->getContent(), true);

        try {
            foreach ($jsonData as $data) {
                FeplacLineas::create([
                    'nombre' => $data['nombre'],
                    'imagenLinea' => $data['imagenLinea']
                ]);
            }
            return response()->json(['message' => 'Data uploaded successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to upload data', 'error' => $e->getMessage()], 500);
        }
    }
}
