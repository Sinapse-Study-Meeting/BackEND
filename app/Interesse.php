<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{

    protected $fillable = [
        'assunto', 'nivel_conhecimento'

    ];

    //
    public function user(){
         return $this->belongsTo('App\User');
    }

    public function categorias(){
        return $this->belongsToMany('App\Categoria');
    }
}
