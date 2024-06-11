<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'detalles', 'materiales', 'seccion_id'];

    public function seccion()
    {
        return $this->belongsTo(Secciones::class);
    }


    // Borrar imagenes de la carpeta trabajosSubido
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($trabajo) {
            // Eliminar las imágenes asociadas del sistema de archivos
            foreach ($trabajo->imagenes as $imagen) {
                $rutaCompleta = public_path($imagen->ruta);
                if (file_exists($rutaCompleta)) {
                    unlink($rutaCompleta);
                }
            }

            // Eliminar las imágenes asociadas de la base de datos
            $trabajo->imagenes()->delete();
        });
    }


    public function imagenes()
    {
        return $this->hasMany(Imagenes::class, 'trabajo_id');
    }
}
