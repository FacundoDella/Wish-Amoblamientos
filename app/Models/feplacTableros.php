<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeplacTableros extends Model
{
    protected $table = 'FeplacTableros'; 
    protected $fillable = ['titleItem', 'imagenItem', 'FeplacLinea_id'];

    public function feplacLineas()
    {
        return $this->belongsTo(FeplacLineas::class);
    }
}
