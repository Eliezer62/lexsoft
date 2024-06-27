<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrupoUsuario;

class GrupoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        GrupoUsuario::firstOrCreate([
            'grupo'=>'administrador',
            'descricao'=>'Administrador do sistema'
        ]);

        GrupoUsuario::firstOrCreate([
            'grupo'=>'advogado',
            'descricao'=>'Usuário advogado'
        ]);

        GrupoUsuario::firstOrCreate([
            'grupo'=>'estagiario',
            'descricao'=>'Usuário estagiário'
        ]);
    }
}
