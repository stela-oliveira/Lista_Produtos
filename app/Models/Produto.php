<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function produtos(){
        return $this->hasMany(Categoria::class);
    }
}
