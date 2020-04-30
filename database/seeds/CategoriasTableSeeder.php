<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate();

        Categoria::create(['nome'=>'Programacao']);
        Categoria::create(['nome'=>'Administracao']);
        Categoria::create(['nome'=>'Milionario']);

    }
}
