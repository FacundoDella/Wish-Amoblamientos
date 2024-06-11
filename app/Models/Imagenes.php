<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;

    protected $fillable = ['ruta', 'trabajo_id'];

    public function trabajo()
    {
        return $this->belongsTo(Trabajo::class, 'trabajo_id');
    }

    public function botones()
    {
        return $this->hasMany(Boton::class, 'imagen_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($imagen) {
            // Eliminar botones asociados
            $imagen->botones()->delete();
        });
    }

}
