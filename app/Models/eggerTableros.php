<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EggerTableros extends Model
{
    protected $table = 'EggerTableros';
    protected $fillable = ['title', 'codigo', 'imagen'];
}
