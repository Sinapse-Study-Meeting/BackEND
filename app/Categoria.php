<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    protected $fillable = [
        'nome'
    ];
    public $timestamps = false;

    public function interesses(){
        return $this->belongsToMany('App\Interesse');
    }
}
