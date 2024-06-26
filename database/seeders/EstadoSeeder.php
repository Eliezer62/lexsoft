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
    }
}
