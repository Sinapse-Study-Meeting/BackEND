<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = [
        'nome', 'descricao'
    ];


    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function areas_estudo(){
        return $this->hasMany('App\AreaEstudo');
    }
}
