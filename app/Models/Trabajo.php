<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $fillable = ['titulo', 'descripcion','detalles','materiales', 'seccion_id'];

    public function seccion()
    {
        return $this->belongsTo(Secciones::class);
    }

    public function imagenes()
    {
        return $this->hasMany(Imagenes::class);
    }
}
