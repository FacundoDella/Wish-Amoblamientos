<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feplactableros extends Model
{
    protected $table = 'feplactableros'; 
    protected $fillable = ['titleItem', 'imagenItem', 'feplacLinea_id'];

    public function feplacLineas()
    {
        return $this->belongsTo(FeplacLineas::class);
    }
}
