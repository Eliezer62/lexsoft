<?php

namespace Database\Seeders;

use App\Models\Sexo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        Sexo::firstOrCreate([
            'sexo'=>'Masculino'
        ]);

        Sexo::firstOrCreate([
            'sexo'=>'Feminino'
        ]);

        Sexo::firstOrCreate([
            'sexo'=>'Intersexual'
        ]);
    }
}
