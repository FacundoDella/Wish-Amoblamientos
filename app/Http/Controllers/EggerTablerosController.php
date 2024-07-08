<?php

namespace App\Http\Controllers;

use App\Models\eggertableros;
use Illuminate\Http\Request;

class EggerTablerosController extends Controller
{
    public function uploadJsonEgger(Request $request)
    {
        $jsonData = json_decode($request->getContent(), true);

        try {
            foreach ($jsonData as $data) {
                eggertableros::create([
                    'title' => $data['title'],
                    'codigo' => $data['codigo'],
                    'imagen' => $data['imagen'],
                ]);
            }
            return response()->json(['message' => 'Data uploaded successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to upload data', 'error' => $e->getMessage()], 500);
        }
    }
}
