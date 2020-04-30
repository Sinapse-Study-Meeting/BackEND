<?php

use App\Categoria;
use App\Interesse;
use Illuminate\Database\Seeder;

class InteressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void     */
    public function run()
    {


        Interesse::truncate();

        DB::table('categoria_interesse')->truncate();

            $php = Interesse::create(['nome'=>'Php']);
            $gp = Interesse::create(['nome'=>'Gestao de Pessoas']);
            $mb = Interesse::create(['nome'=>'Money no bolso']);

        $pro = Categoria::where('nome','Programacao')->first();
        $adm = Categoria::where('nome','Administracao')->first();
        $jobs = Categoria::where('nome','Milionario')->first();

        $php->categorias()->attach($pro);
        $gp->categorias()->attach($adm);
        $mb->categorias()->attach($jobs);

    }
}
