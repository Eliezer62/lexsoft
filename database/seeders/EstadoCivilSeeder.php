<?php

namespace Database\Seeders;

use App\Models\EstadoCivil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        EstadoCivil::firstOrCreate([
            'estado_civil'=>'Solteriro'
        ]);

        EstadoCivil::firstOrCreate([
            'estado_civil'=>'Casado'
        ]);

        EstadoCivil::firstOrCreate([
            'estado_civil'=>'Separado'
        ]);

        EstadoCivil::firstOrCreate([
            'estado_civil'=>'Divorciado'
        ]);

        EstadoCivil::firstOrCreate([
            'estado_civil'=>'Viúvo'
        ]);
    }
}
