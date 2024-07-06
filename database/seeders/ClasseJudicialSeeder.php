<?php

namespace Database\Seeders;

use App\Models\ClasseJudicial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseJudicialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClasseJudicial::firstOrCreate([
           'id'=>386,
            'descricao'=>'	Execução da Pena'
        ]);

        ClasseJudicial::firstOrCreate([
            'id'=>12729,
            'descricao'=>'Execução de Medidas Alternativas no Juízo Comum'
        ]);
    }
}
