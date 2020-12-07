<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConviteGrupo extends Model
{
    protected $guarded = [];
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
