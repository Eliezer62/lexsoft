<?php

namespace Database\Seeders;

use App\Models\ClasseJudicial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ClasseJudicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $classes = Http::withOptions(['verify' => false])->get('http://gateway.cloud.pje.jus.br/tpu//api/v1/publico/download/classes')->collect();
        foreach ($classes as $classe)
        {
            ClasseJudicial::firstOrCreate([
                'id'=>$classe['cod_item'],
                'descricao'=>$classe['nome'],
            ]);
        }
    }
}
