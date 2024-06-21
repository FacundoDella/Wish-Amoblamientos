<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeplacLineas extends Model
{
    protected $fillable = ['nombre'];

    public function feplacTableros()
    {
        return $this->hasMany(FeplacTableros::class,'FeplacLinea_id');
    }
}
