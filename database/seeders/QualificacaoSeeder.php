<?php

namespace Database\Seeders;

use App\Models\Qualificacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualificacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        Qualificacao::firstOrCreate(['descricao'=>'Agravado']);

        Qualificacao::firstOrCreate(['descricao'=>'Agravante']);

        Qualificacao::firstOrCreate(['descricao'=>'Apelado']);

        Qualificacao::firstOrCreate(['descricao'=>'Apelante']);

        Qualificacao::firstOrCreate(['descricao'=>'Autor']);

        Qualificacao::firstOrCreate(['descricao'=>'Adotante']);

        Qualificacao::firstOrCreate(['descricao'=>'Adotado']);

        Qualificacao::firstOrCreate(['descricao'=>'Acusado']);

        Qualificacao::firstOrCreate(['descricao'=>'Acusante']);

        Qualificacao::firstOrCreate(['descricao'=>'Comunicado']);

        Qualificacao::firstOrCreate(['descricao'=>'Comunicante']);

        Qualificacao::firstOrCreate(['descricao'=>'Corrigente']);

        Qualificacao::firstOrCreate(['descricao'=>'Corrigido']);

        Qualificacao::firstOrCreate(['descricao'=>'Embargado']);

        Qualificacao::firstOrCreate(['descricao'=>'Embargante']);

        Qualificacao::firstOrCreate(['descricao'=>'Excepto']);

        Qualificacao::firstOrCreate(['descricao'=>'Excipiente']);

        Qualificacao::firstOrCreate(['descricao'=>'Executado']);

        Qualificacao::firstOrCreate(['descricao'=>'Exequente']);

        Qualificacao::firstOrCreate(['descricao'=>'Expropriado']);

        Qualificacao::firstOrCreate(['descricao'=>'Expropriante']);

        Qualificacao::firstOrCreate(['descricao'=>'Impetrado']);

        Qualificacao::firstOrCreate(['descricao'=>'Impetrante']);

        Qualificacao::firstOrCreate(['descricao'=>'Impugnado']);

        Qualificacao::firstOrCreate(['descricao'=>'Interpelado']);

        Qualificacao::firstOrCreate(['descricao'=>'Interpelante']);

        Qualificacao::firstOrCreate(['descricao'=>'Inventariado']);

        Qualificacao::firstOrCreate(['descricao'=>'Inventariante']);

        Qualificacao::firstOrCreate(['descricao'=>'Juiz']);

        Qualificacao::firstOrCreate(['descricao'=>'Ofendido']);

        Qualificacao::firstOrCreate(['descricao'=>'Ofensor']);

        Qualificacao::firstOrCreate(['descricao'=>'Opoente']);

        Qualificacao::firstOrCreate(['descricao'=>'Oposto']);

        Qualificacao::firstOrCreate(['descricao'=>'Querelado']);

        Qualificacao::firstOrCreate(['descricao'=>'Querelante']);

        Qualificacao::firstOrCreate(['descricao'=>'Reclamado']);

        Qualificacao::firstOrCreate(['descricao'=>'Reclamante']);

        Qualificacao::firstOrCreate(['descricao'=>'Recorrente']);

        Qualificacao::firstOrCreate(['descricao'=>'Recorrido']);

        Qualificacao::firstOrCreate(['descricao'=>'Representado']);

        Qualificacao::firstOrCreate(['descricao'=>'Representante']);

        Qualificacao::firstOrCreate(['descricao'=>'Suscitado']);

        Qualificacao::firstOrCreate(['descricao'=>'Suscitante']);

        Qualificacao::firstOrCreate(['descricao'=>'Réu']);
    }
}
