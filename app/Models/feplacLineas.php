<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feplaclineas extends Model
{
    protected $table = 'feplaclineas'; 
    protected $fillable = ['nombre','imagenLinea'];

    public function feplacTableros()
    {
        return $this->hasMany(FeplacTableros::class,'FeplacLinea_id');
    }
}
