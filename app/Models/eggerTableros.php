<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class eggertableros extends Model
{
    protected $table = 'eggertableros';
    protected $fillable = ['title', 'codigo', 'imagen'];
}
