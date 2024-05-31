<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use App\Models\Seccion;
use App\Models\Secciones;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    // Muestra una lista de trabajos
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

    // Almacena un nuevo trabajo en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'detalles' => 'required',
            'materiales' => 'required',
            'seccion_id' => 'required',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $trabajo = new Trabajo();
        $trabajo->titulo = $request->titulo;
        $trabajo->descripcion = $request->descripcion;
        $trabajo->detalles = $request->detalles;
        $trabajo->materiales = $request->materiales;
        $trabajo->seccion_id = $request->seccion_id;
        $trabajo->save();

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $nombre = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move(public_path('imagenes'), $nombre);

                $trabajo->imagenes()->create(['ruta' => $nombre]);
            }
        }

        return redirect()->route('trabajos.index')->with('success', 'Trabajo creado exitosamente');
    }

    // Muestra el formulario para editar un trabajo existente
    public function edit(Trabajo $trabajo)
    {
        $secciones = Secciones::all();
        return view('admin.trabajos.edit', compact('trabajo', 'secciones'));
    }

    // Actualiza un trabajo existente en la base de datos
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
                $imagen->move(public_path('imagenes'), $nombre);

                $trabajo->imagenes()->create(['ruta' => $nombre]);
            }
        }

        return redirect()->route('trabajos.index')->with('success', 'Trabajo actualizado exitosamente');
    }

    // Elimina un trabajo de la base de datos
    public function destroy(Trabajo $trabajo)
    {
        $trabajo->delete();
        return redirect()->route('trabajos.index')->with('success', 'Trabajo eliminado exitosamente');
    }
}
