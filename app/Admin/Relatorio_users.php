<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Relatorio_users extends Model implements IRelatorio
{
    protected $table = 'relatorio_users';
 
    public function generate() : void
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }
  
    public function dropView():string
    {
        return 'DROP VIEW IF EXISTS `'. $this->table .'`;';
    }
    public function createView():string
    {
        return 'CREATE VIEW '.$this->table.' AS
                SELECT name, email, city, state 
                FROM users;';


    }
}
