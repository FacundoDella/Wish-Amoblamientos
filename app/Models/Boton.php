<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boton extends Model
{
    use HasFactory;

    protected $fillable = ['imagen_id', 'contenido', 'posicion_x', 'posicion_y'];

    public function imagen()
    {
        return $this->belongsTo(Imagenes::class);
    }
}
