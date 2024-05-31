<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secciones extends Model
{
    protected $fillable = ['nombre'];

    public function trabajos()
    {
        return $this->hasMany(Trabajo::class);
    }
}
