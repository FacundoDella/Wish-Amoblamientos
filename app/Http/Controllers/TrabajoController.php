<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use App\Models\Seccion;
use App\Models\Secciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrabajoController extends Controller
{
    public function index()
    {
        $trabajos = Trabajo::with('seccion')->get();
        return view('admin.trabajos.index', compact('trabajos'));
    }

    // Muestra el formulario para crear un nuevo trabajo
    public function create()
    {
        $secciones = Secciones::all();
        return view('admin.trabajos.create', compact('secciones'));
    }

    public function store(Request $request)
    {  // Validar los datos
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'detalles' => 'required',
            'materiales' => 'required',
            'seccion_id' => 'required',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120' // 5MB por imagen
        ]);

        try {
            Log::info('Iniciando la creación del trabajo.');

            // Crear un nuevo trabajo
            $trabajo = new Trabajo();
            $trabajo->titulo = $request->titulo;
            $trabajo->descripcion = $request->descripcion;
            $trabajo->detalles = $request->detalles;
            $trabajo->materiales = $request->materiales;
            $trabajo->seccion_id = $request->seccion_id;
            $trabajo->save();

            Log::info('Trabajo creado con éxito: ' . $trabajo->id);

            // Manejar las imágenes
            if ($request->hasFile('imagenes')) {
                foreach ($request->file('imagenes') as $imagen) {
                    $nombre = time() . '_' . $imagen->getClientOriginalName();
                    Log::info('Procesando imagen: ' . $nombre);

                    $imagen->move(public_path('imagenes/trabajosSubidos'), $nombre);

                    $trabajo->imagenes()->create(['ruta' => 'imagenes/trabajosSubidos/' . $nombre]);
                    Log::info('Imagen guardada: ' . 'imagenes/trabajosSubidos/' . $nombre);
                }
            }

            // Redirigir con éxito
            Log::info('Redirigiendo después de crear el trabajo.');
            return redirect()->route('trabajos.index')->with('success', 'Trabajo creado exitosamente');
        } catch (\Exception $e) {
            // Registrar el error
            Log::error('Error al crear el trabajo: ' . $e->getMessage());

            // Redirigir con un mensaje de error
            return redirect()->route('trabajos.index')->with('error', 'Hubo un problema al crear el trabajo.');
        }
    }

    // editar un trabajo existente
    public function edit(Trabajo $trabajo)
    {
        $secciones = Secciones::all();
        return view('admin.trabajos.edit', compact('trabajo', 'secciones'));
    }

    // metodo para añadir inputs a un trabajo
    public function addInputs(Trabajo $trabajo)
    {
        // Cargar las imágenes relacionadas con el trabajo
        $trabajo->load('imagenes');
        return view('admin.inputs.addInputs', compact('trabajo'));
    }

    // actualiza un trabajo existente en la base de datos
    public function update(Request $request, Trabajo $trabajo)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'detalles' => 'required',
            'materiales' => 'required',
            'seccion_id' => 'required',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $trabajo->titulo = $request->titulo;
        $trabajo->descripcion = $request->descripcion;
        $trabajo->detalles = $request->detalles;
        $trabajo->materiales = $request->materiales;
        $trabajo->seccion_id = $request->seccion_id;
        $trabajo->save();

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $nombre = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move(public_path('imagenes/trabajosSubidos'), $nombre);

                $trabajo->imagenes()->create(['ruta' => 'imagenes/trabajosSubidos/' . $nombre]);
            }
        }
        return redirect()->route('trabajos.index')->with('success', 'Trabajo actualizado exitosamente');
    }

    // Elimina 
    public function destroy(Trabajo $trabajo)
    {
        $trabajo->delete();
        return redirect()->route('trabajos.index')->with('success', 'Trabajo eliminado exitosamente');
    }
}
