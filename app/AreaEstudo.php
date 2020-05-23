<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaEstudo extends Model
{
    protected $fillable = ['area'];
    protected $table = 'areas_estudo';

    public function grupo() {
        return $this->belongsTo('App\Grupo');
    }
}
