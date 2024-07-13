<?php

namespace Database\Seeders;

use App\Models\Tribunal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TribunalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        //Supremos
        Tribunal::firstOrCreate([
            'id'=>'100',
            'nome'=>'Supremo Tribunal Federal',
            'ramo_tribunal'=>'1'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'200',
            'nome'=>'Conselho Nacional de Justiça',
            'ramo_tribunal'=>'2'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'300',
            'nome'=>'Superior Tribunal de Justiça',
            'ramo_tribunal'=>'3'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'500',
            'nome'=>'Tribunal Superior do Trabalho',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'600',
            'nome'=>'Tribunal Superior Eleitoral',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'700',
            'nome'=>'Superior Tribunal Militar',
            'ramo_tribunal'=>'7'
        ]);

        //Federal
        Tribunal::firstOrCreate([
           'id'=>'490',
            'nome'=>'Conselho da Justiça Federal',
            'ramo_tribunal'=>'4'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'401',
            'nome'=>'TRF da 1ª Região',
            'ramo_tribunal'=>'4'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'402',
            'nome'=>'TRF da 2ª Região',
            'ramo_tribunal'=>'4'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'403',
            'nome'=>'TRF da 3ª Região',
            'ramo_tribunal'=>'4'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'404',
            'nome'=>'TRF da 4ª Região',
            'ramo_tribunal'=>'4'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'405',
            'nome'=>'TRF da 5ª Região',
            'ramo_tribunal'=>'4'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'406',
            'nome'=>'TRF da 6ª Região',
            'ramo_tribunal'=>'4'
        ]);
        //Do trabalho
        Tribunal::firstOrCreate([
            'id'=>'501',
            'nome'=>'Tribunais Regionais do Trabalho 1ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'502',
            'nome'=>'Tribunais Regionais do Trabalho 2ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'503',
            'nome'=>'Tribunais Regionais do Trabalho 3ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'504',
            'nome'=>'Tribunais Regionais do Trabalho 4ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'505',
            'nome'=>'Tribunais Regionais do Trabalho 5ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'506',
            'nome'=>'Tribunais Regionais do Trabalho 6ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'507',
            'nome'=>'Tribunais Regionais do Trabalho 7ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'508',
            'nome'=>'Tribunais Regionais do Trabalho 8ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'509',
            'nome'=>'Tribunais Regionais do Trabalho 9ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'510',
            'nome'=>'Tribunais Regionais do Trabalho 10ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'511',
            'nome'=>'Tribunais Regionais do Trabalho 11ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'512',
            'nome'=>'Tribunais Regionais do Trabalho 12ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'513',
            'nome'=>'Tribunais Regionais do Trabalho 13ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'514',
            'nome'=>'Tribunais Regionais do Trabalho 14ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'515',
            'nome'=>'Tribunais Regionais do Trabalho 15ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'516',
            'nome'=>'Tribunais Regionais do Trabalho 16ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'517',
            'nome'=>'Tribunais Regionais do Trabalho 17ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'518',
            'nome'=>'Tribunais Regionais do Trabalho 18ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'519',
            'nome'=>'Tribunais Regionais do Trabalho 19ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'520',
            'nome'=>'Tribunais Regionais do Trabalho 20ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'521',
            'nome'=>'Tribunais Regionais do Trabalho 21ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'522',
            'nome'=>'Tribunais Regionais do Trabalho 22ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'523',
            'nome'=>'Tribunais Regionais do Trabalho 23ª Região',
            'ramo_tribunal'=>'5'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'524',
            'nome'=>'Tribunais Regionais do Trabalho 24ª Região',
            'ramo_tribunal'=>'5'
        ]);
        //Eleitoral
        Tribunal::firstOrCreate([
            'id'=>'601',
            'nome'=>'Tribunal Regional Eleitoral do Acre',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'602',
            'nome'=>'Tribunal Regional Eleitoral de Alagoas',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'603',
            'nome'=>'Tribunal Regional Eleitoral do Amapá',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'604',
            'nome'=>'Tribunal Regional Eleitoral do Amazonas',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'605',
            'nome'=>'Tribunal Regional Eleitoral da Bahia',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'606',
            'nome'=>'Tribunal Regional Eleitoral do Ceará',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'607',
            'nome'=>'Tribunal Regional Eleitoral do Distrito Federal',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'608',
            'nome'=>'Tribunal Regional Eleitoral do Espírito Santo',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'609',
            'nome'=>'Tribunal Regional Eleitoral de Goiás',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'610',
            'nome'=>'Tribunal Regional Eleitoral do Maranhão',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'611',
            'nome'=>'Tribunal Regional Eleitoral de Mato Grosso',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'612',
            'nome'=>'Tribunal Regional Eleitoral de Mato Grosso do Sul',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'613',
            'nome'=>'Tribunal Regional Eleitoral de Minas Gerais',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'614',
            'nome'=>'Tribunal Regional Eleitoral do Pará',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'615',
            'nome'=>'Tribunal Regional Eleitoral da Paraíba',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'616',
            'nome'=>'Tribunal Regional Eleitoral do Paraná',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'617',
            'nome'=>'Tribunal Regional Eleitoral de Pernambuco',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'618',
            'nome'=>'Tribunal Regional Eleitoral do Piauí',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'619',
            'nome'=>'Tribunal Regional Eleitoral do Rio de Janeiro',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'620',
            'nome'=>'Tribunal Regional Eleitoral do Rio Grande do Norte',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'621',
            'nome'=>'Tribunal Regional Eleitoral do Rio Grande do Sul',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'622',
            'nome'=>'Tribunal Regional Eleitoral de Roraima',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'623',
            'nome'=>'Tribunal Regional Eleitoral de Rondônia',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'624',
            'nome'=>'Tribunal Regional Eleitoral de Santa Catarina',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'625',
            'nome'=>'Tribunal Regional Eleitoral de Sergipe',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'626',
            'nome'=>'Tribunal Regional Eleitoral de São Paulo',
            'ramo_tribunal'=>'6'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'627',
            'nome'=>'Tribunal Regional Eleitoral do Tocantins',
            'ramo_tribunal'=>'6'
        ]);
        //Estadual
        Tribunal::firstOrCreate([
            'id'=>'801',
            'nome'=>'Tribunal de Justiça do Acre',
            'ramo_tribunal'=>'8'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'802',
            'nome'=>'Tribunal de Justiça de Alagoas',
            'ramo_tribunal'=>'8'
        ]);
        Tribunal::firstOrCreate([
            'id'=>'803',
            'nome'=>'Tribunal de Justiça do Amapá',
            'ramo_tribunal'=>'8'
        ]);
    }
}
