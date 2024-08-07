<?php

namespace App\Http\Controllers;

use App\Models\feplactableros;
use Illuminate\Http\Request;


class FeplacTablerosUploadController extends Controller
{
    public function uploadJsonFeplacTableros(Request $request)
    {
        $jsonData = json_decode($request->getContent(), true);

        try {
            foreach ($jsonData as $data) {
                feplactableros::create([
                    'titleItem' => $data['titleItem'],
                    'imagenItem' => $data['imagenItem'],
                    'feplacLinea_id' => $data['feplacLinea_id'],
                ]);
            }
            return response()->json(['message' => 'Data uploaded successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to upload data', 'error' => $e->getMessage()], 500);
        }
    }
}

// TODO ver la subia de archivos mediante Postman