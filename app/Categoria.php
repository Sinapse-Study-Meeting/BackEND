<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    protected $fillable = [
        'nome'
    ];

    public function interesses(){
        return $this->hasMany('App\Interesse');
    }
}
