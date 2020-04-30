<?php

use App\Categoria;
use App\Interesse;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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


        $pro = Categoria::where('nome','Programacao')->first();
        $adm = Categoria::where('nome','Administracao')->first();
        $jobs = Categoria::where('nome','Milionario')->first();

        
        $php = Interesse::create(['assunto'=>'Php']);
        $gp = Interesse::create(['assunto'=>'Gestao de Pessoas']);
        $mb = Interesse::create(['assunto'=>'Money no bolso']);

        $php->categorias()->attach($pro);
        $gp->categorias()->attach($adm);
        $mb->categorias()->attach($jobs);

    }
}
