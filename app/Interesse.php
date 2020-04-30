<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{

    protected $fillable = [
        'nome', 'nivel'
    ];

    //
    public function users(){
         return $this->belongsToMany('App\User');
    }

    public function categorias(){
        return $this->belongsToMany('App\Categoria');
    }
}
