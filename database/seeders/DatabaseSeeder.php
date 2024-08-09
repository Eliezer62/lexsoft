<?php

namespace Database\Seeders;

use App\Models\Advogado;
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

        Advogado::firstOrCreate([
           'cpf'=>'99999999999',
            'nome'=>'Administrador',
            'email'=>'sample@google.com',
            'password'=>'lexsoft',
            'grupo'=>'administrador'
        ]);
    }
}
