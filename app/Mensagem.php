<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mensagem extends Model{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mensagem', 'user_id',
    ];

    protected $table = 'mensagens';

    public function user(){
        return $this->belongsTo('App\User');
    }

}
