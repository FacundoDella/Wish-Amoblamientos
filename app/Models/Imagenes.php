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
        return $this->belongsTo(Trabajo::class);
    }

    public function botones()
{
    return $this->hasMany(Boton::class);
}
}
