<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        Estado::firstOrCreate([
            'uf'=>'PR',
            'nome'=>'Paraná'
        ]);

        Estado::firstOrCreate([
            'uf'=>'RJ',
            'nome'=>'Rio de Janeiro'
        ]);

        Estado::firstOrCreate([
            'uf'=>'AC',
            'nome'=>'Acre'
        ]);

        Estado::firstOrCreate([
            'uf'=>'AL',
            'nome'=>'Alagoas'
        ]);

        Estado::firstOrCreate([
            'uf'=>'AP',
            'nome'=>'Amapá'
        ]);

        Estado::firstOrCreate([
            'uf'=>'AM',
            'nome'=>'Amazonas'
        ]);

        Estado::firstOrCreate([
            'uf'=>'BA',
            'nome'=>'Bahia'
        ]);

        Estado::firstOrCreate([
            'uf'=>'CE',
            'nome'=>'Ceará'
        ]);

        Estado::firstOrCreate([
            'uf'=>'DF',
            'nome'=>'Distrito Federal'
        ]);

        Estado::firstOrCreate([
            'uf'=>'ES',
            'nome'=>'Espírito Santo'
        ]);

        Estado::firstOrCreate([
            'uf'=>'GO',
            'nome'=>'Goiás'
        ]);

        Estado::firstOrCreate([
            'uf'=>'MA',
            'nome'=>'Maranhão'
        ]);

        Estado::firstOrCreate([
            'uf'=>'MT',
            'nome'=>'Mato Grosso'
        ]);

        Estado::firstOrCreate([
            'uf'=>'MS',
            'nome'=>'Mato Grosso do Sul'
        ]);

        Estado::firstOrCreate([
            'uf'=>'MG',
            'nome'=>'Minas Gerais'
        ]);

        Estado::firstOrCreate([
            'uf'=>'PA',
            'nome'=>'Pará'
        ]);

        Estado::firstOrCreate([
            'uf'=>'PB',
            'nome'=>'Paraíba'
        ]);

        Estado::firstOrCreate([
            'uf'=>'PE',
            'nome'=>'Pernambuco'
        ]);

        Estado::firstOrCreate([
            'uf'=>'PI',
            'nome'=>'Piauí'
        ]);

        Estado::firstOrCreate([
            'uf'=>'RN',
            'nome'=>'Rio Grande do Norte'
        ]);

        Estado::firstOrCreate([
            'uf'=>'RS',
            'nome'=>'Rio Grande do Sul'
        ]);

        Estado::firstOrCreate([
            'uf'=>'RO',
            'nome'=>'Rondônia'
        ]);

        Estado::firstOrCreate([
            'uf'=>'RR',
            'nome'=>'Roraima'
        ]);

        Estado::firstOrCreate([
            'uf'=>'SC',
            'nome'=>'Santa Catarina'
        ]);

        Estado::firstOrCreate([
            'uf'=>'SP',
            'nome'=>'São Paulo'
        ]);

        Estado::firstOrCreate([
            'uf'=>'SE',
            'nome'=>'Sergipe'
        ]);

        Estado::firstOrCreate([
            'uf'=>'TO',
            'nome'=>'Tocantins'
        ]);

    }
}
