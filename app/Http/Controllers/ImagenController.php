<?php

namespace App\Http\Controllers;

use App\Models\Imagenes;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class ImagenController extends Controller
{
    public function destroy(Imagenes $imagen)
    {
        try {
            Log::info('Iniciando la eliminación de la imagen: ' . $imagen->id);

            // Eliminar el archivo de la imagen del sistema de archivos
            if (File::exists(public_path($imagen->ruta))) {
                File::delete(public_path($imagen->ruta));
                Log::info('Archivo de imagen eliminado: ' . $imagen->ruta);
            }

            // Eliminar la imagen de la base de datos
            $imagen->delete();
            Log::info('Registro de imagen eliminado de la base de datos: ' . $imagen->id);

            return response()->json(['success' => 'Imagen eliminada exitosamente'], 200);
        } catch (\Exception $e) {
            Log::error('Error al eliminar la imagen: ' . $e->getMessage());

            return response()->json(['error' => 'Hubo un problema al eliminar la imagen'], 500);
        }
    }
}
