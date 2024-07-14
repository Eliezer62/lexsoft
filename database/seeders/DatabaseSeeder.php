<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoSeeder::run();
        GrupoUsuarioSeeder::run();
        SexoSeeder::run();
        EstadoCivilSeeder::run();
        ClasseJudicialSeeder::run();
        CidadeSeeder::run();
        TribunalSeeder::run();
        QualificacaoSeeder::run();
    }
}
