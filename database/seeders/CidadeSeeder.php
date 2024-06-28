<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public static function run(): void
    {
        DB::table('cidades')->insert([
            [
                "id"=> 1,
                "nome"=> "Alta Floresta D'Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 2,

                "nome"=> "Ariquemes",
                "estado"=> "RO"
            ],
            [
                "id"=> 3,

                "nome"=> "Cabixi",
                "estado"=> "RO"
            ],
            [
                "id"=> 4,

                "nome"=> "Cacoal",
                "estado"=> "RO"
            ],
            [
                "id"=> 5,

                "nome"=> "Cerejeiras",
                "estado"=> "RO"
            ],
            [
                "id"=> 6,

                "nome"=> "Colorado do Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 7,

                "nome"=> "Corumbiara",
                "estado"=> "RO"
            ],
            [
                "id"=> 8,

                "nome"=> "Costa Marques",
                "estado"=> "RO"
            ],
            [
                "id"=> 9,

                "nome"=> "Espigão D'Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 10,

                "nome"=> "Guajará-Mirim",
                "estado"=> "RO"
            ],
            [
                "id"=> 11,

                "nome"=> "Jaru",
                "estado"=> "RO"
            ],
            [
                "id"=> 12,

                "nome"=> "Ji-Paraná",
                "estado"=> "RO"
            ],
            [
                "id"=> 13,

                "nome"=> "Machadinho D'Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 14,

                "nome"=> "Nova Brasilândia D'Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 15,

                "nome"=> "Ouro Preto do Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 16,

                "nome"=> "Pimenta Bueno",
                "estado"=> "RO"
            ],
            [
                "id"=> 17,

                "nome"=> "Porto Velho",
                "estado"=> "RO"
            ],
            [
                "id"=> 18,

                "nome"=> "Presidente Médici",
                "estado"=> "RO"
            ],
            [
                "id"=> 19,

                "nome"=> "Rio Crespo",
                "estado"=> "RO"
            ],
            [
                "id"=> 20,

                "nome"=> "Rolim de Moura",
                "estado"=> "RO"
            ],
            [
                "id"=> 21,

                "nome"=> "Santa Luzia D'Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 22,

                "nome"=> "Vilhena",
                "estado"=> "RO"
            ],
            [
                "id"=> 23,

                "nome"=> "São Miguel do Guaporé",
                "estado"=> "RO"
            ],
            [
                "id"=> 24,

                "nome"=> "Nova Mamoré",
                "estado"=> "RO"
            ],
            [
                "id"=> 25,

                "nome"=> "Alvorada D'Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 26,

                "nome"=> "Alto Alegre dos Parecis",
                "estado"=> "RO"
            ],
            [
                "id"=> 27,

                "nome"=> "Alto Paraíso",
                "estado"=> "RO"
            ],
            [
                "id"=> 28,

                "nome"=> "Buritis",
                "estado"=> "RO"
            ],
            [
                "id"=> 29,

                "nome"=> "Novo Horizonte do Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 30,

                "nome"=> "Cacaulândia",
                "estado"=> "RO"
            ],
            [
                "id"=> 31,

                "nome"=> "Campo Novo de Rondônia",
                "estado"=> "RO"
            ],
            [
                "id"=> 32,

                "nome"=> "Candeias do Jamari",
                "estado"=> "RO"
            ],
            [
                "id"=> 33,

                "nome"=> "Castanheiras",
                "estado"=> "RO"
            ],
            [
                "id"=> 34,

                "nome"=> "Chupinguaia",
                "estado"=> "RO"
            ],
            [
                "id"=> 35,

                "nome"=> "Cujubim",
                "estado"=> "RO"
            ],
            [
                "id"=> 36,

                "nome"=> "Governador Jorge Teixeira",
                "estado"=> "RO"
            ],
            [
                "id"=> 37,

                "nome"=> "Itapuã do Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 38,

                "nome"=> "Ministro Andreazza",
                "estado"=> "RO"
            ],
            [
                "id"=> 39,

                "nome"=> "Mirante da Serra",
                "estado"=> "RO"
            ],
            [
                "id"=> 40,

                "nome"=> "Monte Negro",
                "estado"=> "RO"
            ],
            [
                "id"=> 41,

                "nome"=> "Nova União",
                "estado"=> "RO"
            ],
            [
                "id"=> 42,

                "nome"=> "Parecis",
                "estado"=> "RO"
            ],
            [
                "id"=> 43,

                "nome"=> "Pimenteiras do Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 44,

                "nome"=> "Primavera de Rondônia",
                "estado"=> "RO"
            ],
            [
                "id"=> 45,

                "nome"=> "São Felipe D'Oeste",
                "estado"=> "RO"
            ],
            [
                "id"=> 46,

                "nome"=> "São Francisco do Guaporé",
                "estado"=> "RO"
            ],
            [
                "id"=> 47,

                "nome"=> "Seringueiras",
                "estado"=> "RO"
            ],
            [
                "id"=> 48,

                "nome"=> "Teixeirópolis",
                "estado"=> "RO"
            ],
            [
                "id"=> 49,

                "nome"=> "Theobroma",
                "estado"=> "RO"
            ],
            [
                "id"=> 50,

                "nome"=> "Urupá",
                "estado"=> "RO"
            ],
            [
                "id"=> 51,

                "nome"=> "Vale do Anari",
                "estado"=> "RO"
            ],
            [
                "id"=> 52,

                "nome"=> "Vale do Paraíso",
                "estado"=> "RO"
            ],
            [
                "id"=> 53,

                "nome"=> "Acrelândia",
                "estado"=> "AC"
            ],
            [
                "id"=> 54,

                "nome"=> "Assis Brasil",
                "estado"=> "AC"
            ],
            [
                "id"=> 55,

                "nome"=> "Brasiléia",
                "estado"=> "AC"
            ],
            [
                "id"=> 56,

                "nome"=> "Bujari",
                "estado"=> "AC"
            ],
            [
                "id"=> 57,

                "nome"=> "Capixaba",
                "estado"=> "AC"
            ],
            [
                "id"=> 58,

                "nome"=> "Cruzeiro do Sul",
                "estado"=> "AC"
            ],
            [
                "id"=> 59,

                "nome"=> "Epitaciolândia",
                "estado"=> "AC"
            ],
            [
                "id"=> 60,

                "nome"=> "Feijó",
                "estado"=> "AC"
            ],
            [
                "id"=> 61,

                "nome"=> "Jordão",
                "estado"=> "AC"
            ],
            [
                "id"=> 62,

                "nome"=> "Mâncio Lima",
                "estado"=> "AC"
            ],
            [
                "id"=> 63,

                "nome"=> "Manoel Urbano",
                "estado"=> "AC"
            ],
            [
                "id"=> 64,

                "nome"=> "Marechal Thaumaturgo",
                "estado"=> "AC"
            ],
            [
                "id"=> 65,

                "nome"=> "Plácido de Castro",
                "estado"=> "AC"
            ],
            [
                "id"=> 66,

                "nome"=> "Porto Walter",
                "estado"=> "AC"
            ],
            [
                "id"=> 67,

                "nome"=> "Rio Branco",
                "estado"=> "AC"
            ],
            [
                "id"=> 68,

                "nome"=> "Rodrigues Alves",
                "estado"=> "AC"
            ],
            [
                "id"=> 69,

                "nome"=> "Santa Rosa do Purus",
                "estado"=> "AC"
            ],
            [
                "id"=> 70,

                "nome"=> "Senador Guiomard",
                "estado"=> "AC"
            ],
            [
                "id"=> 71,

                "nome"=> "Sena Madureira",
                "estado"=> "AC"
            ],
            [
                "id"=> 72,

                "nome"=> "Tarauacá",
                "estado"=> "AC"
            ],
            [
                "id"=> 73,

                "nome"=> "Xapuri",
                "estado"=> "AC"
            ],
            [
                "id"=> 74,

                "nome"=> "Porto Acre",
                "estado"=> "AC"
            ],
            [
                "id"=> 75,

                "nome"=> "Alvarães",
                "estado"=> "AM"
            ],
            [
                "id"=> 76,

                "nome"=> "Amaturá",
                "estado"=> "AM"
            ],
            [
                "id"=> 77,

                "nome"=> "Anamã",
                "estado"=> "AM"
            ],
            [
                "id"=> 78,

                "nome"=> "Anori",
                "estado"=> "AM"
            ],
            [
                "id"=> 79,

                "nome"=> "Apuí",
                "estado"=> "AM"
            ],
            [
                "id"=> 80,

                "nome"=> "Atalaia do Norte",
                "estado"=> "AM"
            ],
            [
                "id"=> 81,

                "nome"=> "Autazes",
                "estado"=> "AM"
            ],
            [
                "id"=> 82,

                "nome"=> "Barcelos",
                "estado"=> "AM"
            ],
            [
                "id"=> 83,

                "nome"=> "Barreirinha",
                "estado"=> "AM"
            ],
            [
                "id"=> 84,

                "nome"=> "Benjamin Constant",
                "estado"=> "AM"
            ],
            [
                "id"=> 85,

                "nome"=> "Beruri",
                "estado"=> "AM"
            ],
            [
                "id"=> 86,

                "nome"=> "Boa Vista do Ramos",
                "estado"=> "AM"
            ],
            [
                "id"=> 87,

                "nome"=> "Boca do Acre",
                "estado"=> "AM"
            ],
            [
                "id"=> 88,

                "nome"=> "Borba",
                "estado"=> "AM"
            ],
            [
                "id"=> 89,

                "nome"=> "Caapiranga",
                "estado"=> "AM"
            ],
            [
                "id"=> 90,

                "nome"=> "Canutama",
                "estado"=> "AM"
            ],
            [
                "id"=> 91,

                "nome"=> "Carauari",
                "estado"=> "AM"
            ],
            [
                "id"=> 92,

                "nome"=> "Careiro",
                "estado"=> "AM"
            ],
            [
                "id"=> 93,

                "nome"=> "Careiro da Várzea",
                "estado"=> "AM"
            ],
            [
                "id"=> 94,

                "nome"=> "Coari",
                "estado"=> "AM"
            ],
            [
                "id"=> 95,

                "nome"=> "Codajás",
                "estado"=> "AM"
            ],
            [
                "id"=> 96,

                "nome"=> "Eirunepé",
                "estado"=> "AM"
            ],
            [
                "id"=> 97,

                "nome"=> "Envira",
                "estado"=> "AM"
            ],
            [
                "id"=> 98,

                "nome"=> "Fonte Boa",
                "estado"=> "AM"
            ],
            [
                "id"=> 99,

                "nome"=> "Guajará",
                "estado"=> "AM"
            ],
            [
                "id"=> 100,

                "nome"=> "Humaitá",
                "estado"=> "AM"
            ],
            [
                "id"=> 101,

                "nome"=> "Ipixuna",
                "estado"=> "AM"
            ],
            [
                "id"=> 102,

                "nome"=> "Iranduba",
                "estado"=> "AM"
            ],
            [
                "id"=> 103,

                "nome"=> "Itacoatiara",
                "estado"=> "AM"
            ],
            [
                "id"=> 104,

                "nome"=> "Itamarati",
                "estado"=> "AM"
            ],
            [
                "id"=> 105,

                "nome"=> "Itapiranga",
                "estado"=> "AM"
            ],
            [
                "id"=> 106,

                "nome"=> "Japurá",
                "estado"=> "AM"
            ],
            [
                "id"=> 107,

                "nome"=> "Juruá",
                "estado"=> "AM"
            ],
            [
                "id"=> 108,

                "nome"=> "Jutaí",
                "estado"=> "AM"
            ],
            [
                "id"=> 109,

                "nome"=> "Lábrea",
                "estado"=> "AM"
            ],
            [
                "id"=> 110,

                "nome"=> "Manacapuru",
                "estado"=> "AM"
            ],
            [
                "id"=> 111,

                "nome"=> "Manaquiri",
                "estado"=> "AM"
            ],
            [
                "id"=> 112,

                "nome"=> "Manaus",
                "estado"=> "AM"
            ],
            [
                "id"=> 113,

                "nome"=> "Manicoré",
                "estado"=> "AM"
            ],
            [
                "id"=> 114,

                "nome"=> "Maraã",
                "estado"=> "AM"
            ],
            [
                "id"=> 115,

                "nome"=> "Maués",
                "estado"=> "AM"
            ],
            [
                "id"=> 116,

                "nome"=> "Nhamundá",
                "estado"=> "AM"
            ],
            [
                "id"=> 117,

                "nome"=> "Nova Olinda do Norte",
                "estado"=> "AM"
            ],
            [
                "id"=> 118,

                "nome"=> "Novo Airão",
                "estado"=> "AM"
            ],
            [
                "id"=> 119,

                "nome"=> "Novo Aripuanã",
                "estado"=> "AM"
            ],
            [
                "id"=> 120,

                "nome"=> "Parintins",
                "estado"=> "AM"
            ],
            [
                "id"=> 121,

                "nome"=> "Pauini",
                "estado"=> "AM"
            ],
            [
                "id"=> 122,

                "nome"=> "Presidente Figueiredo",
                "estado"=> "AM"
            ],
            [
                "id"=> 123,

                "nome"=> "Rio Preto da Eva",
                "estado"=> "AM"
            ],
            [
                "id"=> 124,

                "nome"=> "Santa Isabel do Rio Negro",
                "estado"=> "AM"
            ],
            [
                "id"=> 125,

                "nome"=> "Santo Antônio do Içá",
                "estado"=> "AM"
            ],
            [
                "id"=> 126,

                "nome"=> "São Gabriel da Cachoeira",
                "estado"=> "AM"
            ],
            [
                "id"=> 127,

                "nome"=> "São Paulo de Olivença",
                "estado"=> "AM"
            ],
            [
                "id"=> 128,

                "nome"=> "São Sebastião do Uatumã",
                "estado"=> "AM"
            ],
            [
                "id"=> 129,

                "nome"=> "Silves",
                "estado"=> "AM"
            ],
            [
                "id"=> 130,

                "nome"=> "Tabatinga",
                "estado"=> "AM"
            ],
            [
                "id"=> 131,

                "nome"=> "Tapauá",
                "estado"=> "AM"
            ],
            [
                "id"=> 132,

                "nome"=> "Tefé",
                "estado"=> "AM"
            ],
            [
                "id"=> 133,

                "nome"=> "Tonantins",
                "estado"=> "AM"
            ],
            [
                "id"=> 134,

                "nome"=> "Uarini",
                "estado"=> "AM"
            ],
            [
                "id"=> 135,

                "nome"=> "Urucará",
                "estado"=> "AM"
            ],
            [
                "id"=> 136,

                "nome"=> "Urucurituba",
                "estado"=> "AM"
            ],
            [
                "id"=> 137,

                "nome"=> "Amajari",
                "estado"=> "RR"
            ],
            [
                "id"=> 138,

                "nome"=> "Alto Alegre",
                "estado"=> "RR"
            ],
            [
                "id"=> 139,

                "nome"=> "Boa Vista",
                "estado"=> "RR"
            ],
            [
                "id"=> 140,

                "nome"=> "Bonfim",
                "estado"=> "RR"
            ],
            [
                "id"=> 141,

                "nome"=> "Cantá",
                "estado"=> "RR"
            ],
            [
                "id"=> 142,

                "nome"=> "Caracaraí",
                "estado"=> "RR"
            ],
            [
                "id"=> 143,

                "nome"=> "Caroebe",
                "estado"=> "RR"
            ],
            [
                "id"=> 144,

                "nome"=> "Iracema",
                "estado"=> "RR"
            ],
            [
                "id"=> 145,

                "nome"=> "Mucajaí",
                "estado"=> "RR"
            ],
            [
                "id"=> 146,

                "nome"=> "Normandia",
                "estado"=> "RR"
            ],
            [
                "id"=> 147,

                "nome"=> "Pacaraima",
                "estado"=> "RR"
            ],
            [
                "id"=> 148,

                "nome"=> "Rorainópolis",
                "estado"=> "RR"
            ],
            [
                "id"=> 149,

                "nome"=> "São João da Baliza",
                "estado"=> "RR"
            ],
            [
                "id"=> 150,

                "nome"=> "São Luiz",
                "estado"=> "RR"
            ],
            [
                "id"=> 151,

                "nome"=> "Uiramutã",
                "estado"=> "RR"
            ],
            [
                "id"=> 152,

                "nome"=> "Abaetetuba",
                "estado"=> "PA"
            ],
            [
                "id"=> 153,

                "nome"=> "Abel Figueiredo",
                "estado"=> "PA"
            ],
            [
                "id"=> 154,

                "nome"=> "Acará",
                "estado"=> "PA"
            ],
            [
                "id"=> 155,

                "nome"=> "Afuá",
                "estado"=> "PA"
            ],
            [
                "id"=> 156,

                "nome"=> "Água Azul do Norte",
                "estado"=> "PA"
            ],
            [
                "id"=> 157,

                "nome"=> "Alenquer",
                "estado"=> "PA"
            ],
            [
                "id"=> 158,

                "nome"=> "Almeirim",
                "estado"=> "PA"
            ],
            [
                "id"=> 159,

                "nome"=> "Altamira",
                "estado"=> "PA"
            ],
            [
                "id"=> 160,

                "nome"=> "Anajás",
                "estado"=> "PA"
            ],
            [
                "id"=> 161,

                "nome"=> "Ananindeua",
                "estado"=> "PA"
            ],
            [
                "id"=> 162,

                "nome"=> "Anapu",
                "estado"=> "PA"
            ],
            [
                "id"=> 163,

                "nome"=> "Augusto Corrêa",
                "estado"=> "PA"
            ],
            [
                "id"=> 164,

                "nome"=> "Aurora do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 165,

                "nome"=> "Aveiro",
                "estado"=> "PA"
            ],
            [
                "id"=> 166,

                "nome"=> "Bagre",
                "estado"=> "PA"
            ],
            [
                "id"=> 167,

                "nome"=> "Baião",
                "estado"=> "PA"
            ],
            [
                "id"=> 168,

                "nome"=> "Bannach",
                "estado"=> "PA"
            ],
            [
                "id"=> 169,

                "nome"=> "Barcarena",
                "estado"=> "PA"
            ],
            [
                "id"=> 170,

                "nome"=> "Belém",
                "estado"=> "PA"
            ],
            [
                "id"=> 171,

                "nome"=> "Belterra",
                "estado"=> "PA"
            ],
            [
                "id"=> 172,

                "nome"=> "Benevides",
                "estado"=> "PA"
            ],
            [
                "id"=> 173,

                "nome"=> "Bom Jesus do Tocantins",
                "estado"=> "PA"
            ],
            [
                "id"=> 174,

                "nome"=> "Bonito",
                "estado"=> "PA"
            ],
            [
                "id"=> 175,

                "nome"=> "Bragança",
                "estado"=> "PA"
            ],
            [
                "id"=> 176,

                "nome"=> "Brasil Novo",
                "estado"=> "PA"
            ],
            [
                "id"=> 177,

                "nome"=> "Brejo Grande do Araguaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 178,

                "nome"=> "Breu Branco",
                "estado"=> "PA"
            ],
            [
                "id"=> 179,

                "nome"=> "Breves",
                "estado"=> "PA"
            ],
            [
                "id"=> 180,

                "nome"=> "Bujaru",
                "estado"=> "PA"
            ],
            [
                "id"=> 181,

                "nome"=> "Cachoeira do Piriá",
                "estado"=> "PA"
            ],
            [
                "id"=> 182,

                "nome"=> "Cachoeira do Arari",
                "estado"=> "PA"
            ],
            [
                "id"=> 183,

                "nome"=> "Cametá",
                "estado"=> "PA"
            ],
            [
                "id"=> 184,

                "nome"=> "Canaã dos Carajás",
                "estado"=> "PA"
            ],
            [
                "id"=> 185,

                "nome"=> "Capanema",
                "estado"=> "PA"
            ],
            [
                "id"=> 186,

                "nome"=> "Capitão Poço",
                "estado"=> "PA"
            ],
            [
                "id"=> 187,

                "nome"=> "Castanhal",
                "estado"=> "PA"
            ],
            [
                "id"=> 188,

                "nome"=> "Chaves",
                "estado"=> "PA"
            ],
            [
                "id"=> 189,

                "nome"=> "Colares",
                "estado"=> "PA"
            ],
            [
                "id"=> 190,

                "nome"=> "Conceição do Araguaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 191,

                "nome"=> "Concórdia do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 192,

                "nome"=> "Cumaru do Norte",
                "estado"=> "PA"
            ],
            [
                "id"=> 193,

                "nome"=> "Curionópolis",
                "estado"=> "PA"
            ],
            [
                "id"=> 194,

                "nome"=> "Curralinho",
                "estado"=> "PA"
            ],
            [
                "id"=> 195,

                "nome"=> "Curuá",
                "estado"=> "PA"
            ],
            [
                "id"=> 196,

                "nome"=> "Curuçá",
                "estado"=> "PA"
            ],
            [
                "id"=> 197,

                "nome"=> "Dom Eliseu",
                "estado"=> "PA"
            ],
            [
                "id"=> 198,

                "nome"=> "Eldorado dos Carajás",
                "estado"=> "PA"
            ],
            [
                "id"=> 199,

                "nome"=> "Faro",
                "estado"=> "PA"
            ],
            [
                "id"=> 200,

                "nome"=> "Floresta do Araguaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 201,

                "nome"=> "Garrafão do Norte",
                "estado"=> "PA"
            ],
            [
                "id"=> 202,

                "nome"=> "Goianésia do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 203,

                "nome"=> "Gurupá",
                "estado"=> "PA"
            ],
            [
                "id"=> 204,

                "nome"=> "Igarapé-Açu",
                "estado"=> "PA"
            ],
            [
                "id"=> 205,

                "nome"=> "Igarapé-Miri",
                "estado"=> "PA"
            ],
            [
                "id"=> 206,

                "nome"=> "Inhangapi",
                "estado"=> "PA"
            ],
            [
                "id"=> 207,

                "nome"=> "Ipixuna do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 208,

                "nome"=> "Irituia",
                "estado"=> "PA"
            ],
            [
                "id"=> 209,

                "nome"=> "Itaituba",
                "estado"=> "PA"
            ],
            [
                "id"=> 210,

                "nome"=> "Itupiranga",
                "estado"=> "PA"
            ],
            [
                "id"=> 211,

                "nome"=> "Jacareacanga",
                "estado"=> "PA"
            ],
            [
                "id"=> 212,

                "nome"=> "Jacundá",
                "estado"=> "PA"
            ],
            [
                "id"=> 213,

                "nome"=> "Juruti",
                "estado"=> "PA"
            ],
            [
                "id"=> 214,

                "nome"=> "Limoeiro do Ajuru",
                "estado"=> "PA"
            ],
            [
                "id"=> 215,

                "nome"=> "Mãe do Rio",
                "estado"=> "PA"
            ],
            [
                "id"=> 216,

                "nome"=> "Magalhães Barata",
                "estado"=> "PA"
            ],
            [
                "id"=> 217,

                "nome"=> "Marabá",
                "estado"=> "PA"
            ],
            [
                "id"=> 218,

                "nome"=> "Maracanã",
                "estado"=> "PA"
            ],
            [
                "id"=> 219,

                "nome"=> "Marapanim",
                "estado"=> "PA"
            ],
            [
                "id"=> 220,

                "nome"=> "Marituba",
                "estado"=> "PA"
            ],
            [
                "id"=> 221,

                "nome"=> "Medicilândia",
                "estado"=> "PA"
            ],
            [
                "id"=> 222,

                "nome"=> "Melgaço",
                "estado"=> "PA"
            ],
            [
                "id"=> 223,

                "nome"=> "Mocajuba",
                "estado"=> "PA"
            ],
            [
                "id"=> 224,

                "nome"=> "Moju",
                "estado"=> "PA"
            ],
            [
                "id"=> 225,

                "nome"=> "Mojuí dos Campos",
                "estado"=> "PA"
            ],
            [
                "id"=> 226,

                "nome"=> "Monte Alegre",
                "estado"=> "PA"
            ],
            [
                "id"=> 227,

                "nome"=> "Muaná",
                "estado"=> "PA"
            ],
            [
                "id"=> 228,

                "nome"=> "Nova Esperança do Piriá",
                "estado"=> "PA"
            ],
            [
                "id"=> 229,

                "nome"=> "Nova Ipixuna",
                "estado"=> "PA"
            ],
            [
                "id"=> 230,

                "nome"=> "Nova Timboteua",
                "estado"=> "PA"
            ],
            [
                "id"=> 231,

                "nome"=> "Novo Progresso",
                "estado"=> "PA"
            ],
            [
                "id"=> 232,

                "nome"=> "Novo Repartimento",
                "estado"=> "PA"
            ],
            [
                "id"=> 233,

                "nome"=> "Óbidos",
                "estado"=> "PA"
            ],
            [
                "id"=> 234,

                "nome"=> "Oeiras do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 235,

                "nome"=> "Oriximiná",
                "estado"=> "PA"
            ],
            [
                "id"=> 236,

                "nome"=> "Ourém",
                "estado"=> "PA"
            ],
            [
                "id"=> 237,

                "nome"=> "Ourilândia do Norte",
                "estado"=> "PA"
            ],
            [
                "id"=> 238,

                "nome"=> "Pacajá",
                "estado"=> "PA"
            ],
            [
                "id"=> 239,

                "nome"=> "Palestina do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 240,

                "nome"=> "Paragominas",
                "estado"=> "PA"
            ],
            [
                "id"=> 241,

                "nome"=> "Parauapebas",
                "estado"=> "PA"
            ],
            [
                "id"=> 242,

                "nome"=> "Pau D'Arco",
                "estado"=> "PA"
            ],
            [
                "id"=> 243,

                "nome"=> "Peixe-Boi",
                "estado"=> "PA"
            ],
            [
                "id"=> 244,

                "nome"=> "Piçarra",
                "estado"=> "PA"
            ],
            [
                "id"=> 245,

                "nome"=> "Placas",
                "estado"=> "PA"
            ],
            [
                "id"=> 246,

                "nome"=> "Ponta de Pedras",
                "estado"=> "PA"
            ],
            [
                "id"=> 247,

                "nome"=> "Portel",
                "estado"=> "PA"
            ],
            [
                "id"=> 248,

                "nome"=> "Porto de Moz",
                "estado"=> "PA"
            ],
            [
                "id"=> 249,

                "nome"=> "Prainha",
                "estado"=> "PA"
            ],
            [
                "id"=> 250,

                "nome"=> "Primavera",
                "estado"=> "PA"
            ],
            [
                "id"=> 251,

                "nome"=> "Quatipuru",
                "estado"=> "PA"
            ],
            [
                "id"=> 252,

                "nome"=> "Redenção",
                "estado"=> "PA"
            ],
            [
                "id"=> 253,

                "nome"=> "Rio Maria",
                "estado"=> "PA"
            ],
            [
                "id"=> 254,

                "nome"=> "Rondon do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 255,

                "nome"=> "Rurópolis",
                "estado"=> "PA"
            ],
            [
                "id"=> 256,

                "nome"=> "Salinópolis",
                "estado"=> "PA"
            ],
            [
                "id"=> 257,

                "nome"=> "Salvaterra",
                "estado"=> "PA"
            ],
            [
                "id"=> 258,

                "nome"=> "Santa Bárbara do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 259,

                "nome"=> "Santa Cruz do Arari",
                "estado"=> "PA"
            ],
            [
                "id"=> 260,

                "nome"=> "Santa Isabel do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 261,

                "nome"=> "Santa Luzia do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 262,

                "nome"=> "Santa Maria das Barreiras",
                "estado"=> "PA"
            ],
            [
                "id"=> 263,

                "nome"=> "Santa Maria do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 264,

                "nome"=> "Santana do Araguaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 265,

                "nome"=> "Santarém",
                "estado"=> "PA"
            ],
            [
                "id"=> 266,

                "nome"=> "Santarém Novo",
                "estado"=> "PA"
            ],
            [
                "id"=> 267,

                "nome"=> "Santo Antônio do Tauá",
                "estado"=> "PA"
            ],
            [
                "id"=> 268,

                "nome"=> "São Caetano de Odivelas",
                "estado"=> "PA"
            ],
            [
                "id"=> 269,

                "nome"=> "São Domingos do Araguaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 270,

                "nome"=> "São Domingos do Capim",
                "estado"=> "PA"
            ],
            [
                "id"=> 271,

                "nome"=> "São Félix do Xingu",
                "estado"=> "PA"
            ],
            [
                "id"=> 272,

                "nome"=> "São Francisco do Pará",
                "estado"=> "PA"
            ],
            [
                "id"=> 273,

                "nome"=> "São Geraldo do Araguaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 274,

                "nome"=> "São João da Ponta",
                "estado"=> "PA"
            ],
            [
                "id"=> 275,

                "nome"=> "São João de Pirabas",
                "estado"=> "PA"
            ],
            [
                "id"=> 276,

                "nome"=> "São João do Araguaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 277,

                "nome"=> "São Miguel do Guamá",
                "estado"=> "PA"
            ],
            [
                "id"=> 278,

                "nome"=> "São Sebastião da Boa Vista",
                "estado"=> "PA"
            ],
            [
                "id"=> 279,

                "nome"=> "Sapucaia",
                "estado"=> "PA"
            ],
            [
                "id"=> 280,

                "nome"=> "Senador José Porfírio",
                "estado"=> "PA"
            ],
            [
                "id"=> 281,

                "nome"=> "Soure",
                "estado"=> "PA"
            ],
            [
                "id"=> 282,

                "nome"=> "Tailândia",
                "estado"=> "PA"
            ],
            [
                "id"=> 283,

                "nome"=> "Terra Alta",
                "estado"=> "PA"
            ],
            [
                "id"=> 284,

                "nome"=> "Terra Santa",
                "estado"=> "PA"
            ],
            [
                "id"=> 285,

                "nome"=> "Tomé-Açu",
                "estado"=> "PA"
            ],
            [
                "id"=> 286,

                "nome"=> "Tracuateua",
                "estado"=> "PA"
            ],
            [
                "id"=> 287,

                "nome"=> "Trairão",
                "estado"=> "PA"
            ],
            [
                "id"=> 288,

                "nome"=> "Tucumã",
                "estado"=> "PA"
            ],
            [
                "id"=> 289,

                "nome"=> "Tucuruí",
                "estado"=> "PA"
            ],
            [
                "id"=> 290,

                "nome"=> "Ulianópolis",
                "estado"=> "PA"
            ],
            [
                "id"=> 291,

                "nome"=> "Uruará",
                "estado"=> "PA"
            ],
            [
                "id"=> 292,

                "nome"=> "Vigia",
                "estado"=> "PA"
            ],
            [
                "id"=> 293,

                "nome"=> "Viseu",
                "estado"=> "PA"
            ],
            [
                "id"=> 294,

                "nome"=> "Vitória do Xingu",
                "estado"=> "PA"
            ],
            [
                "id"=> 295,

                "nome"=> "Xinguara",
                "estado"=> "PA"
            ],
            [
                "id"=> 296,

                "nome"=> "Serra do Navio",
                "estado"=> "AP"
            ],
            [
                "id"=> 297,

                "nome"=> "Amapá",
                "estado"=> "AP"
            ],
            [
                "id"=> 298,

                "nome"=> "Pedra Branca do Amapari",
                "estado"=> "AP"
            ],
            [
                "id"=> 299,

                "nome"=> "Calçoene",
                "estado"=> "AP"
            ],
            [
                "id"=> 300,

                "nome"=> "Cutias",
                "estado"=> "AP"
            ],
            [
                "id"=> 301,

                "nome"=> "Ferreira Gomes",
                "estado"=> "AP"
            ],
            [
                "id"=> 302,

                "nome"=> "Itaubal",
                "estado"=> "AP"
            ],
            [
                "id"=> 303,

                "nome"=> "Laranjal do Jari",
                "estado"=> "AP"
            ],
            [
                "id"=> 304,

                "nome"=> "Macapá",
                "estado"=> "AP"
            ],
            [
                "id"=> 305,

                "nome"=> "Mazagão",
                "estado"=> "AP"
            ],
            [
                "id"=> 306,

                "nome"=> "Oiapoque",
                "estado"=> "AP"
            ],
            [
                "id"=> 307,

                "nome"=> "Porto Grande",
                "estado"=> "AP"
            ],
            [
                "id"=> 308,

                "nome"=> "Pracuúba",
                "estado"=> "AP"
            ],
            [
                "id"=> 309,

                "nome"=> "Santana",
                "estado"=> "AP"
            ],
            [
                "id"=> 310,

                "nome"=> "Tartarugalzinho",
                "estado"=> "AP"
            ],
            [
                "id"=> 311,

                "nome"=> "Vitória do Jari",
                "estado"=> "AP"
            ],
            [
                "id"=> 312,

                "nome"=> "Abreulândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 313,

                "nome"=> "Aguiarnópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 314,

                "nome"=> "Aliança do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 315,

                "nome"=> "Almas",
                "estado"=> "TO"
            ],
            [
                "id"=> 316,

                "nome"=> "Alvorada",
                "estado"=> "TO"
            ],
            [
                "id"=> 317,

                "nome"=> "Ananás",
                "estado"=> "TO"
            ],
            [
                "id"=> 318,

                "nome"=> "Angico",
                "estado"=> "TO"
            ],
            [
                "id"=> 319,

                "nome"=> "Aparecida do Rio Negro",
                "estado"=> "TO"
            ],
            [
                "id"=> 320,

                "nome"=> "Aragominas",
                "estado"=> "TO"
            ],
            [
                "id"=> 321,

                "nome"=> "Araguacema",
                "estado"=> "TO"
            ],
            [
                "id"=> 322,

                "nome"=> "Araguaçu",
                "estado"=> "TO"
            ],
            [
                "id"=> 323,

                "nome"=> "Araguaína",
                "estado"=> "TO"
            ],
            [
                "id"=> 324,

                "nome"=> "Araguanã",
                "estado"=> "TO"
            ],
            [
                "id"=> 325,

                "nome"=> "Araguatins",
                "estado"=> "TO"
            ],
            [
                "id"=> 326,

                "nome"=> "Arapoema",
                "estado"=> "TO"
            ],
            [
                "id"=> 327,

                "nome"=> "Arraias",
                "estado"=> "TO"
            ],
            [
                "id"=> 328,

                "nome"=> "Augustinópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 329,

                "nome"=> "Aurora do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 330,

                "nome"=> "Axixá do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 331,

                "nome"=> "Babaçulândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 332,

                "nome"=> "Bandeirantes do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 333,

                "nome"=> "Barra do Ouro",
                "estado"=> "TO"
            ],
            [
                "id"=> 334,

                "nome"=> "Barrolândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 335,

                "nome"=> "Bernardo Sayão",
                "estado"=> "TO"
            ],
            [
                "id"=> 336,

                "nome"=> "Bom Jesus do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 337,

                "nome"=> "Brasilândia do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 338,

                "nome"=> "Brejinho de Nazaré",
                "estado"=> "TO"
            ],
            [
                "id"=> 339,

                "nome"=> "Buriti do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 340,

                "nome"=> "Cachoeirinha",
                "estado"=> "TO"
            ],
            [
                "id"=> 341,

                "nome"=> "Campos Lindos",
                "estado"=> "TO"
            ],
            [
                "id"=> 342,

                "nome"=> "Cariri do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 343,

                "nome"=> "Carmolândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 344,

                "nome"=> "Carrasco Bonito",
                "estado"=> "TO"
            ],
            [
                "id"=> 345,

                "nome"=> "Caseara",
                "estado"=> "TO"
            ],
            [
                "id"=> 346,

                "nome"=> "Centenário",
                "estado"=> "TO"
            ],
            [
                "id"=> 347,

                "nome"=> "Chapada de Areia",
                "estado"=> "TO"
            ],
            [
                "id"=> 348,

                "nome"=> "Chapada da Natividade",
                "estado"=> "TO"
            ],
            [
                "id"=> 349,

                "nome"=> "Colinas do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 350,

                "nome"=> "Combinado",
                "estado"=> "TO"
            ],
            [
                "id"=> 351,

                "nome"=> "Conceição do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 352,

                "nome"=> "Couto Magalhães",
                "estado"=> "TO"
            ],
            [
                "id"=> 353,

                "nome"=> "Cristalândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 354,

                "nome"=> "Crixás do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 355,

                "nome"=> "Darcinópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 356,

                "nome"=> "Dianópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 357,

                "nome"=> "Divinópolis do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 358,

                "nome"=> "Dois Irmãos do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 359,

                "nome"=> "Dueré",
                "estado"=> "TO"
            ],
            [
                "id"=> 360,

                "nome"=> "Esperantina",
                "estado"=> "TO"
            ],
            [
                "id"=> 361,

                "nome"=> "Fátima",
                "estado"=> "TO"
            ],
            [
                "id"=> 362,

                "nome"=> "Figueirópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 363,

                "nome"=> "Filadélfia",
                "estado"=> "TO"
            ],
            [
                "id"=> 364,

                "nome"=> "Formoso do Araguaia",
                "estado"=> "TO"
            ],
            [
                "id"=> 365,

                "nome"=> "Fortaleza do Tabocão",
                "estado"=> "TO"
            ],
            [
                "id"=> 366,

                "nome"=> "Goianorte",
                "estado"=> "TO"
            ],
            [
                "id"=> 367,

                "nome"=> "Goiatins",
                "estado"=> "TO"
            ],
            [
                "id"=> 368,

                "nome"=> "Guaraí",
                "estado"=> "TO"
            ],
            [
                "id"=> 369,

                "nome"=> "Gurupi",
                "estado"=> "TO"
            ],
            [
                "id"=> 370,

                "nome"=> "Ipueiras",
                "estado"=> "TO"
            ],
            [
                "id"=> 371,

                "nome"=> "Itacajá",
                "estado"=> "TO"
            ],
            [
                "id"=> 372,

                "nome"=> "Itaguatins",
                "estado"=> "TO"
            ],
            [
                "id"=> 373,

                "nome"=> "Itapiratins",
                "estado"=> "TO"
            ],
            [
                "id"=> 374,

                "nome"=> "Itaporã do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 375,

                "nome"=> "Jaú do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 376,

                "nome"=> "Juarina",
                "estado"=> "TO"
            ],
            [
                "id"=> 377,

                "nome"=> "Lagoa da Confusão",
                "estado"=> "TO"
            ],
            [
                "id"=> 378,

                "nome"=> "Lagoa do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 379,

                "nome"=> "Lajeado",
                "estado"=> "TO"
            ],
            [
                "id"=> 380,

                "nome"=> "Lavandeira",
                "estado"=> "TO"
            ],
            [
                "id"=> 381,

                "nome"=> "Lizarda",
                "estado"=> "TO"
            ],
            [
                "id"=> 382,

                "nome"=> "Luzinópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 383,

                "nome"=> "Marianópolis do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 384,

                "nome"=> "Mateiros",
                "estado"=> "TO"
            ],
            [
                "id"=> 385,

                "nome"=> "Maurilândia do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 386,

                "nome"=> "Miracema do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 387,

                "nome"=> "Miranorte",
                "estado"=> "TO"
            ],
            [
                "id"=> 388,

                "nome"=> "Monte do Carmo",
                "estado"=> "TO"
            ],
            [
                "id"=> 389,

                "nome"=> "Monte Santo do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 390,

                "nome"=> "Palmeiras do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 391,

                "nome"=> "Muricilândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 392,

                "nome"=> "Natividade",
                "estado"=> "TO"
            ],
            [
                "id"=> 393,

                "nome"=> "Nazaré",
                "estado"=> "TO"
            ],
            [
                "id"=> 394,

                "nome"=> "Nova Olinda",
                "estado"=> "TO"
            ],
            [
                "id"=> 395,

                "nome"=> "Nova Rosalândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 396,

                "nome"=> "Novo Acordo",
                "estado"=> "TO"
            ],
            [
                "id"=> 397,

                "nome"=> "Novo Alegre",
                "estado"=> "TO"
            ],
            [
                "id"=> 398,

                "nome"=> "Novo Jardim",
                "estado"=> "TO"
            ],
            [
                "id"=> 399,

                "nome"=> "Oliveira de Fátima",
                "estado"=> "TO"
            ],
            [
                "id"=> 400,

                "nome"=> "Palmeirante",
                "estado"=> "TO"
            ],
            [
                "id"=> 401,

                "nome"=> "Palmeirópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 402,

                "nome"=> "Paraíso do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 403,

                "nome"=> "Paranã",
                "estado"=> "TO"
            ],
            [
                "id"=> 404,

                "nome"=> "Pau D'Arco",
                "estado"=> "TO"
            ],
            [
                "id"=> 405,

                "nome"=> "Pedro Afonso",
                "estado"=> "TO"
            ],
            [
                "id"=> 406,

                "nome"=> "Peixe",
                "estado"=> "TO"
            ],
            [
                "id"=> 407,

                "nome"=> "Pequizeiro",
                "estado"=> "TO"
            ],
            [
                "id"=> 408,

                "nome"=> "Colméia",
                "estado"=> "TO"
            ],
            [
                "id"=> 409,

                "nome"=> "Pindorama do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 410,

                "nome"=> "Piraquê",
                "estado"=> "TO"
            ],
            [
                "id"=> 411,

                "nome"=> "Pium",
                "estado"=> "TO"
            ],
            [
                "id"=> 412,

                "nome"=> "Ponte Alta do Bom Jesus",
                "estado"=> "TO"
            ],
            [
                "id"=> 413,

                "nome"=> "Ponte Alta do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 414,

                "nome"=> "Porto Alegre do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 415,

                "nome"=> "Porto Nacional",
                "estado"=> "TO"
            ],
            [
                "id"=> 416,

                "nome"=> "Praia Norte",
                "estado"=> "TO"
            ],
            [
                "id"=> 417,

                "nome"=> "Presidente Kennedy",
                "estado"=> "TO"
            ],
            [
                "id"=> 418,

                "nome"=> "Pugmil",
                "estado"=> "TO"
            ],
            [
                "id"=> 419,

                "nome"=> "Recursolândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 420,

                "nome"=> "Riachinho",
                "estado"=> "TO"
            ],
            [
                "id"=> 421,

                "nome"=> "Rio da Conceição",
                "estado"=> "TO"
            ],
            [
                "id"=> 422,

                "nome"=> "Rio dos Bois",
                "estado"=> "TO"
            ],
            [
                "id"=> 423,

                "nome"=> "Rio Sono",
                "estado"=> "TO"
            ],
            [
                "id"=> 424,

                "nome"=> "Sampaio",
                "estado"=> "TO"
            ],
            [
                "id"=> 425,

                "nome"=> "Sandolândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 426,

                "nome"=> "Santa Fé do Araguaia",
                "estado"=> "TO"
            ],
            [
                "id"=> 427,

                "nome"=> "Santa Maria do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 428,

                "nome"=> "Santa Rita do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 429,

                "nome"=> "Santa Rosa do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 430,

                "nome"=> "Santa Tereza do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 431,

                "nome"=> "Santa Terezinha do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 432,

                "nome"=> "São Bento do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 433,

                "nome"=> "São Félix do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 434,

                "nome"=> "São Miguel do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 435,

                "nome"=> "São Salvador do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 436,

                "nome"=> "São Sebastião do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 437,

                "nome"=> "São Valério",
                "estado"=> "TO"
            ],
            [
                "id"=> 438,

                "nome"=> "Silvanópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 439,

                "nome"=> "Sítio Novo do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 440,

                "nome"=> "Sucupira",
                "estado"=> "TO"
            ],
            [
                "id"=> 441,

                "nome"=> "Taguatinga",
                "estado"=> "TO"
            ],
            [
                "id"=> 442,

                "nome"=> "Taipas do Tocantins",
                "estado"=> "TO"
            ],
            [
                "id"=> 443,

                "nome"=> "Talismã",
                "estado"=> "TO"
            ],
            [
                "id"=> 444,

                "nome"=> "Palmas",
                "estado"=> "TO"
            ],
            [
                "id"=> 445,

                "nome"=> "Tocantínia",
                "estado"=> "TO"
            ],
            [
                "id"=> 446,

                "nome"=> "Tocantinópolis",
                "estado"=> "TO"
            ],
            [
                "id"=> 447,

                "nome"=> "Tupirama",
                "estado"=> "TO"
            ],
            [
                "id"=> 448,

                "nome"=> "Tupiratins",
                "estado"=> "TO"
            ],
            [
                "id"=> 449,

                "nome"=> "Wanderlândia",
                "estado"=> "TO"
            ],
            [
                "id"=> 450,

                "nome"=> "Xambioá",
                "estado"=> "TO"
            ],
            [
                "id"=> 451,

                "nome"=> "Açailândia",
                "estado"=> "MA"
            ],
            [
                "id"=> 452,

                "nome"=> "Afonso Cunha",
                "estado"=> "MA"
            ],
            [
                "id"=> 453,

                "nome"=> "Água Doce do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 454,

                "nome"=> "Alcântara",
                "estado"=> "MA"
            ],
            [
                "id"=> 455,

                "nome"=> "Aldeias Altas",
                "estado"=> "MA"
            ],
            [
                "id"=> 456,

                "nome"=> "Altamira do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 457,

                "nome"=> "Alto Alegre do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 458,

                "nome"=> "Alto Alegre do Pindaré",
                "estado"=> "MA"
            ],
            [
                "id"=> 459,

                "nome"=> "Alto Parnaíba",
                "estado"=> "MA"
            ],
            [
                "id"=> 460,

                "nome"=> "Amapá do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 461,

                "nome"=> "Amarante do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 462,

                "nome"=> "Anajatuba",
                "estado"=> "MA"
            ],
            [
                "id"=> 463,

                "nome"=> "Anapurus",
                "estado"=> "MA"
            ],
            [
                "id"=> 464,

                "nome"=> "Apicum-Açu",
                "estado"=> "MA"
            ],
            [
                "id"=> 465,

                "nome"=> "Araguanã",
                "estado"=> "MA"
            ],
            [
                "id"=> 466,

                "nome"=> "Araioses",
                "estado"=> "MA"
            ],
            [
                "id"=> 467,

                "nome"=> "Arame",
                "estado"=> "MA"
            ],
            [
                "id"=> 468,

                "nome"=> "Arari",
                "estado"=> "MA"
            ],
            [
                "id"=> 469,

                "nome"=> "Axixá",
                "estado"=> "MA"
            ],
            [
                "id"=> 470,

                "nome"=> "Bacabal",
                "estado"=> "MA"
            ],
            [
                "id"=> 471,

                "nome"=> "Bacabeira",
                "estado"=> "MA"
            ],
            [
                "id"=> 472,

                "nome"=> "Bacuri",
                "estado"=> "MA"
            ],
            [
                "id"=> 473,

                "nome"=> "Bacurituba",
                "estado"=> "MA"
            ],
            [
                "id"=> 474,

                "nome"=> "Balsas",
                "estado"=> "MA"
            ],
            [
                "id"=> 475,

                "nome"=> "Barão de Grajaú",
                "estado"=> "MA"
            ],
            [
                "id"=> 476,

                "nome"=> "Barra do Corda",
                "estado"=> "MA"
            ],
            [
                "id"=> 477,

                "nome"=> "Barreirinhas",
                "estado"=> "MA"
            ],
            [
                "id"=> 478,

                "nome"=> "Belágua",
                "estado"=> "MA"
            ],
            [
                "id"=> 479,

                "nome"=> "Bela Vista do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 480,

                "nome"=> "Benedito Leite",
                "estado"=> "MA"
            ],
            [
                "id"=> 481,

                "nome"=> "Bequimão",
                "estado"=> "MA"
            ],
            [
                "id"=> 482,

                "nome"=> "Bernardo do Mearim",
                "estado"=> "MA"
            ],
            [
                "id"=> 483,

                "nome"=> "Boa Vista do Gurupi",
                "estado"=> "MA"
            ],
            [
                "id"=> 484,

                "nome"=> "Bom Jardim",
                "estado"=> "MA"
            ],
            [
                "id"=> 485,

                "nome"=> "Bom Jesus das Selvas",
                "estado"=> "MA"
            ],
            [
                "id"=> 486,

                "nome"=> "Bom Lugar",
                "estado"=> "MA"
            ],
            [
                "id"=> 487,

                "nome"=> "Brejo",
                "estado"=> "MA"
            ],
            [
                "id"=> 488,

                "nome"=> "Brejo de Areia",
                "estado"=> "MA"
            ],
            [
                "id"=> 489,

                "nome"=> "Buriti",
                "estado"=> "MA"
            ],
            [
                "id"=> 490,

                "nome"=> "Buriti Bravo",
                "estado"=> "MA"
            ],
            [
                "id"=> 491,

                "nome"=> "Buriticupu",
                "estado"=> "MA"
            ],
            [
                "id"=> 492,

                "nome"=> "Buritirana",
                "estado"=> "MA"
            ],
            [
                "id"=> 493,

                "nome"=> "Cachoeira Grande",
                "estado"=> "MA"
            ],
            [
                "id"=> 494,

                "nome"=> "Cajapió",
                "estado"=> "MA"
            ],
            [
                "id"=> 495,

                "nome"=> "Cajari",
                "estado"=> "MA"
            ],
            [
                "id"=> 496,

                "nome"=> "Campestre do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 497,

                "nome"=> "Cândido Mendes",
                "estado"=> "MA"
            ],
            [
                "id"=> 498,

                "nome"=> "Cantanhede",
                "estado"=> "MA"
            ],
            [
                "id"=> 499,

                "nome"=> "Capinzal do Norte",
                "estado"=> "MA"
            ],
            [
                "id"=> 500,

                "nome"=> "Carolina",
                "estado"=> "MA"
            ],
            [
                "id"=> 501,

                "nome"=> "Carutapera",
                "estado"=> "MA"
            ],
            [
                "id"=> 502,

                "nome"=> "Caxias",
                "estado"=> "MA"
            ],
            [
                "id"=> 503,

                "nome"=> "Cedral",
                "estado"=> "MA"
            ],
            [
                "id"=> 504,

                "nome"=> "Central do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 505,

                "nome"=> "Centro do Guilherme",
                "estado"=> "MA"
            ],
            [
                "id"=> 506,

                "nome"=> "Centro Novo do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 507,

                "nome"=> "Chapadinha",
                "estado"=> "MA"
            ],
            [
                "id"=> 508,

                "nome"=> "Cidelândia",
                "estado"=> "MA"
            ],
            [
                "id"=> 509,

                "nome"=> "Codó",
                "estado"=> "MA"
            ],
            [
                "id"=> 510,

                "nome"=> "Coelho Neto",
                "estado"=> "MA"
            ],
            [
                "id"=> 511,

                "nome"=> "Colinas",
                "estado"=> "MA"
            ],
            [
                "id"=> 512,

                "nome"=> "Conceição do Lago-Açu",
                "estado"=> "MA"
            ],
            [
                "id"=> 513,

                "nome"=> "Coroatá",
                "estado"=> "MA"
            ],
            [
                "id"=> 514,

                "nome"=> "Cururupu",
                "estado"=> "MA"
            ],
            [
                "id"=> 515,

                "nome"=> "Davinópolis",
                "estado"=> "MA"
            ],
            [
                "id"=> 516,

                "nome"=> "Dom Pedro",
                "estado"=> "MA"
            ],
            [
                "id"=> 517,

                "nome"=> "Duque Bacelar",
                "estado"=> "MA"
            ],
            [
                "id"=> 518,

                "nome"=> "Esperantinópolis",
                "estado"=> "MA"
            ],
            [
                "id"=> 519,

                "nome"=> "Estreito",
                "estado"=> "MA"
            ],
            [
                "id"=> 520,

                "nome"=> "Feira Nova do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 521,

                "nome"=> "Fernando Falcão",
                "estado"=> "MA"
            ],
            [
                "id"=> 522,

                "nome"=> "Formosa da Serra Negra",
                "estado"=> "MA"
            ],
            [
                "id"=> 523,

                "nome"=> "Fortaleza dos Nogueiras",
                "estado"=> "MA"
            ],
            [
                "id"=> 524,

                "nome"=> "Fortuna",
                "estado"=> "MA"
            ],
            [
                "id"=> 525,

                "nome"=> "Godofredo Viana",
                "estado"=> "MA"
            ],
            [
                "id"=> 526,

                "nome"=> "Gonçalves Dias",
                "estado"=> "MA"
            ],
            [
                "id"=> 527,

                "nome"=> "Governador Archer",
                "estado"=> "MA"
            ],
            [
                "id"=> 528,

                "nome"=> "Governador Edison Lobão",
                "estado"=> "MA"
            ],
            [
                "id"=> 529,

                "nome"=> "Governador Eugênio Barros",
                "estado"=> "MA"
            ],
            [
                "id"=> 530,

                "nome"=> "Governador Luiz Rocha",
                "estado"=> "MA"
            ],
            [
                "id"=> 531,

                "nome"=> "Governador Newton Bello",
                "estado"=> "MA"
            ],
            [
                "id"=> 532,

                "nome"=> "Governador Nunes Freire",
                "estado"=> "MA"
            ],
            [
                "id"=> 533,

                "nome"=> "Graça Aranha",
                "estado"=> "MA"
            ],
            [
                "id"=> 534,

                "nome"=> "Grajaú",
                "estado"=> "MA"
            ],
            [
                "id"=> 535,

                "nome"=> "Guimarães",
                "estado"=> "MA"
            ],
            [
                "id"=> 536,

                "nome"=> "Humberto de Campos",
                "estado"=> "MA"
            ],
            [
                "id"=> 537,

                "nome"=> "Icatu",
                "estado"=> "MA"
            ],
            [
                "id"=> 538,

                "nome"=> "Igarapé do Meio",
                "estado"=> "MA"
            ],
            [
                "id"=> 539,

                "nome"=> "Igarapé Grande",
                "estado"=> "MA"
            ],
            [
                "id"=> 540,

                "nome"=> "Imperatriz",
                "estado"=> "MA"
            ],
            [
                "id"=> 541,

                "nome"=> "Itaipava do Grajaú",
                "estado"=> "MA"
            ],
            [
                "id"=> 542,

                "nome"=> "Itapecuru Mirim",
                "estado"=> "MA"
            ],
            [
                "id"=> 543,

                "nome"=> "Itinga do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 544,

                "nome"=> "Jatobá",
                "estado"=> "MA"
            ],
            [
                "id"=> 545,

                "nome"=> "Jenipapo dos Vieiras",
                "estado"=> "MA"
            ],
            [
                "id"=> 546,

                "nome"=> "João Lisboa",
                "estado"=> "MA"
            ],
            [
                "id"=> 547,

                "nome"=> "Joselândia",
                "estado"=> "MA"
            ],
            [
                "id"=> 548,

                "nome"=> "Junco do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 549,

                "nome"=> "Lago da Pedra",
                "estado"=> "MA"
            ],
            [
                "id"=> 550,

                "nome"=> "Lago do Junco",
                "estado"=> "MA"
            ],
            [
                "id"=> 551,

                "nome"=> "Lago Verde",
                "estado"=> "MA"
            ],
            [
                "id"=> 552,

                "nome"=> "Lagoa do Mato",
                "estado"=> "MA"
            ],
            [
                "id"=> 553,

                "nome"=> "Lago dos Rodrigues",
                "estado"=> "MA"
            ],
            [
                "id"=> 554,

                "nome"=> "Lagoa Grande do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 555,

                "nome"=> "Lajeado Novo",
                "estado"=> "MA"
            ],
            [
                "id"=> 556,

                "nome"=> "Lima Campos",
                "estado"=> "MA"
            ],
            [
                "id"=> 557,

                "nome"=> "Loreto",
                "estado"=> "MA"
            ],
            [
                "id"=> 558,

                "nome"=> "Luís Domingues",
                "estado"=> "MA"
            ],
            [
                "id"=> 559,

                "nome"=> "Magalhães de Almeida",
                "estado"=> "MA"
            ],
            [
                "id"=> 560,

                "nome"=> "Maracaçumé",
                "estado"=> "MA"
            ],
            [
                "id"=> 561,

                "nome"=> "Marajá do Sena",
                "estado"=> "MA"
            ],
            [
                "id"=> 562,

                "nome"=> "Maranhãozinho",
                "estado"=> "MA"
            ],
            [
                "id"=> 563,

                "nome"=> "Mata Roma",
                "estado"=> "MA"
            ],
            [
                "id"=> 564,

                "nome"=> "Matinha",
                "estado"=> "MA"
            ],
            [
                "id"=> 565,

                "nome"=> "Matões",
                "estado"=> "MA"
            ],
            [
                "id"=> 566,

                "nome"=> "Matões do Norte",
                "estado"=> "MA"
            ],
            [
                "id"=> 567,

                "nome"=> "Milagres do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 568,

                "nome"=> "Mirador",
                "estado"=> "MA"
            ],
            [
                "id"=> 569,

                "nome"=> "Miranda do Norte",
                "estado"=> "MA"
            ],
            [
                "id"=> 570,

                "nome"=> "Mirinzal",
                "estado"=> "MA"
            ],
            [
                "id"=> 571,

                "nome"=> "Monção",
                "estado"=> "MA"
            ],
            [
                "id"=> 572,

                "nome"=> "Montes Altos",
                "estado"=> "MA"
            ],
            [
                "id"=> 573,

                "nome"=> "Morros",
                "estado"=> "MA"
            ],
            [
                "id"=> 574,

                "nome"=> "Nina Rodrigues",
                "estado"=> "MA"
            ],
            [
                "id"=> 575,

                "nome"=> "Nova Colinas",
                "estado"=> "MA"
            ],
            [
                "id"=> 576,

                "nome"=> "Nova Iorque",
                "estado"=> "MA"
            ],
            [
                "id"=> 577,

                "nome"=> "Nova Olinda do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 578,

                "nome"=> "Olho D'Água das Cunhãs",
                "estado"=> "MA"
            ],
            [
                "id"=> 579,

                "nome"=> "Olinda Nova do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 580,

                "nome"=> "Paço do Lumiar",
                "estado"=> "MA"
            ],
            [
                "id"=> 581,

                "nome"=> "Palmeirândia",
                "estado"=> "MA"
            ],
            [
                "id"=> 582,

                "nome"=> "Paraibano",
                "estado"=> "MA"
            ],
            [
                "id"=> 583,

                "nome"=> "Parnarama",
                "estado"=> "MA"
            ],
            [
                "id"=> 584,

                "nome"=> "Passagem Franca",
                "estado"=> "MA"
            ],
            [
                "id"=> 585,

                "nome"=> "Pastos Bons",
                "estado"=> "MA"
            ],
            [
                "id"=> 586,

                "nome"=> "Paulino Neves",
                "estado"=> "MA"
            ],
            [
                "id"=> 587,

                "nome"=> "Paulo Ramos",
                "estado"=> "MA"
            ],
            [
                "id"=> 588,

                "nome"=> "Pedreiras",
                "estado"=> "MA"
            ],
            [
                "id"=> 589,

                "nome"=> "Pedro do Rosário",
                "estado"=> "MA"
            ],
            [
                "id"=> 590,

                "nome"=> "Penalva",
                "estado"=> "MA"
            ],
            [
                "id"=> 591,

                "nome"=> "Peri Mirim",
                "estado"=> "MA"
            ],
            [
                "id"=> 592,

                "nome"=> "Peritoró",
                "estado"=> "MA"
            ],
            [
                "id"=> 593,

                "nome"=> "Pindaré-Mirim",
                "estado"=> "MA"
            ],
            [
                "id"=> 594,

                "nome"=> "Pinheiro",
                "estado"=> "MA"
            ],
            [
                "id"=> 595,

                "nome"=> "Pio XII",
                "estado"=> "MA"
            ],
            [
                "id"=> 596,

                "nome"=> "Pirapemas",
                "estado"=> "MA"
            ],
            [
                "id"=> 597,

                "nome"=> "Poção de Pedras",
                "estado"=> "MA"
            ],
            [
                "id"=> 598,

                "nome"=> "Porto Franco",
                "estado"=> "MA"
            ],
            [
                "id"=> 599,

                "nome"=> "Porto Rico do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 600,

                "nome"=> "Presidente Dutra",
                "estado"=> "MA"
            ],
            [
                "id"=> 601,

                "nome"=> "Presidente Juscelino",
                "estado"=> "MA"
            ],
            [
                "id"=> 602,

                "nome"=> "Presidente Médici",
                "estado"=> "MA"
            ],
            [
                "id"=> 603,

                "nome"=> "Presidente Sarney",
                "estado"=> "MA"
            ],
            [
                "id"=> 604,

                "nome"=> "Presidente Vargas",
                "estado"=> "MA"
            ],
            [
                "id"=> 605,

                "nome"=> "Primeira Cruz",
                "estado"=> "MA"
            ],
            [
                "id"=> 606,

                "nome"=> "Raposa",
                "estado"=> "MA"
            ],
            [
                "id"=> 607,

                "nome"=> "Riachão",
                "estado"=> "MA"
            ],
            [
                "id"=> 608,

                "nome"=> "Ribamar Fiquene",
                "estado"=> "MA"
            ],
            [
                "id"=> 609,

                "nome"=> "Rosário",
                "estado"=> "MA"
            ],
            [
                "id"=> 610,

                "nome"=> "Sambaíba",
                "estado"=> "MA"
            ],
            [
                "id"=> 611,

                "nome"=> "Santa Filomena do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 612,

                "nome"=> "Santa Helena",
                "estado"=> "MA"
            ],
            [
                "id"=> 613,

                "nome"=> "Santa Inês",
                "estado"=> "MA"
            ],
            [
                "id"=> 614,

                "nome"=> "Santa Luzia",
                "estado"=> "MA"
            ],
            [
                "id"=> 615,

                "nome"=> "Santa Luzia do Paruá",
                "estado"=> "MA"
            ],
            [
                "id"=> 616,

                "nome"=> "Santa Quitéria do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 617,

                "nome"=> "Santa Rita",
                "estado"=> "MA"
            ],
            [
                "id"=> 618,

                "nome"=> "Santana do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 619,

                "nome"=> "Santo Amaro do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 620,

                "nome"=> "Santo Antônio dos Lopes",
                "estado"=> "MA"
            ],
            [
                "id"=> 621,

                "nome"=> "São Benedito do Rio Preto",
                "estado"=> "MA"
            ],
            [
                "id"=> 622,

                "nome"=> "São Bento",
                "estado"=> "MA"
            ],
            [
                "id"=> 623,

                "nome"=> "São Bernardo",
                "estado"=> "MA"
            ],
            [
                "id"=> 624,

                "nome"=> "São Domingos do Azeitão",
                "estado"=> "MA"
            ],
            [
                "id"=> 625,

                "nome"=> "São Domingos do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 626,

                "nome"=> "São Félix de Balsas",
                "estado"=> "MA"
            ],
            [
                "id"=> 627,

                "nome"=> "São Francisco do Brejão",
                "estado"=> "MA"
            ],
            [
                "id"=> 628,

                "nome"=> "São Francisco do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 629,

                "nome"=> "São João Batista",
                "estado"=> "MA"
            ],
            [
                "id"=> 630,

                "nome"=> "São João do Carú",
                "estado"=> "MA"
            ],
            [
                "id"=> 631,

                "nome"=> "São João do Paraíso",
                "estado"=> "MA"
            ],
            [
                "id"=> 632,

                "nome"=> "São João do Soter",
                "estado"=> "MA"
            ],
            [
                "id"=> 633,

                "nome"=> "São João dos Patos",
                "estado"=> "MA"
            ],
            [
                "id"=> 634,

                "nome"=> "São José de Ribamar",
                "estado"=> "MA"
            ],
            [
                "id"=> 635,

                "nome"=> "São José dos Basílios",
                "estado"=> "MA"
            ],
            [
                "id"=> 636,

                "nome"=> "São Luís",
                "estado"=> "MA"
            ],
            [
                "id"=> 637,

                "nome"=> "São Luís Gonzaga do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 638,

                "nome"=> "São Mateus do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 639,

                "nome"=> "São Pedro da Água Branca",
                "estado"=> "MA"
            ],
            [
                "id"=> 640,

                "nome"=> "São Pedro dos Crentes",
                "estado"=> "MA"
            ],
            [
                "id"=> 641,

                "nome"=> "São Raimundo das Mangabeiras",
                "estado"=> "MA"
            ],
            [
                "id"=> 642,

                "nome"=> "São Raimundo do Doca Bezerra",
                "estado"=> "MA"
            ],
            [
                "id"=> 643,

                "nome"=> "São Roberto",
                "estado"=> "MA"
            ],
            [
                "id"=> 644,

                "nome"=> "São Vicente Ferrer",
                "estado"=> "MA"
            ],
            [
                "id"=> 645,

                "nome"=> "Satubinha",
                "estado"=> "MA"
            ],
            [
                "id"=> 646,

                "nome"=> "Senador Alexandre Costa",
                "estado"=> "MA"
            ],
            [
                "id"=> 647,

                "nome"=> "Senador La Rocque",
                "estado"=> "MA"
            ],
            [
                "id"=> 648,

                "nome"=> "Serrano do Maranhão",
                "estado"=> "MA"
            ],
            [
                "id"=> 649,

                "nome"=> "Sítio Novo",
                "estado"=> "MA"
            ],
            [
                "id"=> 650,

                "nome"=> "Sucupira do Norte",
                "estado"=> "MA"
            ],
            [
                "id"=> 651,

                "nome"=> "Sucupira do Riachão",
                "estado"=> "MA"
            ],
            [
                "id"=> 652,

                "nome"=> "Tasso Fragoso",
                "estado"=> "MA"
            ],
            [
                "id"=> 653,

                "nome"=> "Timbiras",
                "estado"=> "MA"
            ],
            [
                "id"=> 654,

                "nome"=> "Timon",
                "estado"=> "MA"
            ],
            [
                "id"=> 655,

                "nome"=> "Trizidela do Vale",
                "estado"=> "MA"
            ],
            [
                "id"=> 656,

                "nome"=> "Testadoilândia",
                "estado"=> "MA"
            ],
            [
                "id"=> 657,

                "nome"=> "Tuntum",
                "estado"=> "MA"
            ],
            [
                "id"=> 658,

                "nome"=> "Turiaçu",
                "estado"=> "MA"
            ],
            [
                "id"=> 659,

                "nome"=> "Turilândia",
                "estado"=> "MA"
            ],
            [
                "id"=> 660,

                "nome"=> "Tutóia",
                "estado"=> "MA"
            ],
            [
                "id"=> 661,

                "nome"=> "Urbano Santos",
                "estado"=> "MA"
            ],
            [
                "id"=> 662,

                "nome"=> "Vargem Grande",
                "estado"=> "MA"
            ],
            [
                "id"=> 663,

                "nome"=> "Viana",
                "estado"=> "MA"
            ],
            [
                "id"=> 664,

                "nome"=> "Vila Nova dos Martírios",
                "estado"=> "MA"
            ],
            [
                "id"=> 665,

                "nome"=> "Vitória do Mearim",
                "estado"=> "MA"
            ],
            [
                "id"=> 666,

                "nome"=> "Vitorino Freire",
                "estado"=> "MA"
            ],
            [
                "id"=> 667,

                "nome"=> "Zé Doca",
                "estado"=> "MA"
            ],
            [
                "id"=> 668,

                "nome"=> "Acauã",
                "estado"=> "PI"
            ],
            [
                "id"=> 669,

                "nome"=> "Agricolândia",
                "estado"=> "PI"
            ],
            [
                "id"=> 670,

                "nome"=> "Água Branca",
                "estado"=> "PI"
            ],
            [
                "id"=> 671,

                "nome"=> "Alagoinha do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 672,

                "nome"=> "Alegrete do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 673,

                "nome"=> "Alto Longá",
                "estado"=> "PI"
            ],
            [
                "id"=> 674,

                "nome"=> "Altos",
                "estado"=> "PI"
            ],
            [
                "id"=> 675,

                "nome"=> "Alvorada do Gurguéia",
                "estado"=> "PI"
            ],
            [
                "id"=> 676,

                "nome"=> "Amarante",
                "estado"=> "PI"
            ],
            [
                "id"=> 677,

                "nome"=> "Angical do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 678,

                "nome"=> "Anísio de Abreu",
                "estado"=> "PI"
            ],
            [
                "id"=> 679,

                "nome"=> "Antônio Almeida",
                "estado"=> "PI"
            ],
            [
                "id"=> 680,

                "nome"=> "Aroazes",
                "estado"=> "PI"
            ],
            [
                "id"=> 681,

                "nome"=> "Aroeiras do Itaim",
                "estado"=> "PI"
            ],
            [
                "id"=> 682,

                "nome"=> "Arraial",
                "estado"=> "PI"
            ],
            [
                "id"=> 683,

                "nome"=> "Assunção do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 684,

                "nome"=> "Avelino Lopes",
                "estado"=> "PI"
            ],
            [
                "id"=> 685,

                "nome"=> "Baixa Grande do Ribeiro",
                "estado"=> "PI"
            ],
            [
                "id"=> 686,

                "nome"=> "Barra D'Alcântara",
                "estado"=> "PI"
            ],
            [
                "id"=> 687,

                "nome"=> "Barras",
                "estado"=> "PI"
            ],
            [
                "id"=> 688,

                "nome"=> "Barreiras do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 689,

                "nome"=> "Barro Duro",
                "estado"=> "PI"
            ],
            [
                "id"=> 690,

                "nome"=> "Batalha",
                "estado"=> "PI"
            ],
            [
                "id"=> 691,

                "nome"=> "Bela Vista do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 692,

                "nome"=> "Belém do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 693,

                "nome"=> "Beneditinos",
                "estado"=> "PI"
            ],
            [
                "id"=> 694,

                "nome"=> "Bertolínia",
                "estado"=> "PI"
            ],
            [
                "id"=> 695,

                "nome"=> "Betânia do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 696,

                "nome"=> "Boa Hora",
                "estado"=> "PI"
            ],
            [
                "id"=> 697,

                "nome"=> "Bocaina",
                "estado"=> "PI"
            ],
            [
                "id"=> 698,

                "nome"=> "Bom Jesus",
                "estado"=> "PI"
            ],
            [
                "id"=> 699,

                "nome"=> "Bom Princípio do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 700,

                "nome"=> "Bonfim do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 701,

                "nome"=> "Boqueirão do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 702,

                "nome"=> "Brasileira",
                "estado"=> "PI"
            ],
            [
                "id"=> 703,

                "nome"=> "Brejo do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 704,

                "nome"=> "Buriti dos Lopes",
                "estado"=> "PI"
            ],
            [
                "id"=> 705,

                "nome"=> "Buriti dos Montes",
                "estado"=> "PI"
            ],
            [
                "id"=> 706,

                "nome"=> "Cabeceiras do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 707,

                "nome"=> "Cajazeiras do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 708,

                "nome"=> "Cajueiro da Praia",
                "estado"=> "PI"
            ],
            [
                "id"=> 709,

                "nome"=> "Caldeirão Grande do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 710,

                "nome"=> "Campinas do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 711,

                "nome"=> "Campo Alegre do Fidalgo",
                "estado"=> "PI"
            ],
            [
                "id"=> 712,

                "nome"=> "Campo Grande do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 713,

                "nome"=> "Campo Largo do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 714,

                "nome"=> "Campo Maior",
                "estado"=> "PI"
            ],
            [
                "id"=> 715,

                "nome"=> "Canavieira",
                "estado"=> "PI"
            ],
            [
                "id"=> 716,

                "nome"=> "Canto do Buriti",
                "estado"=> "PI"
            ],
            [
                "id"=> 717,

                "nome"=> "Capitão de Campos",
                "estado"=> "PI"
            ],
            [
                "id"=> 718,

                "nome"=> "Capitão Gervásio Oliveira",
                "estado"=> "PI"
            ],
            [
                "id"=> 719,

                "nome"=> "Caracol",
                "estado"=> "PI"
            ],
            [
                "id"=> 720,

                "nome"=> "Caraúbas do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 721,

                "nome"=> "Caridade do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 722,

                "nome"=> "Castelo do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 723,

                "nome"=> "Caxingó",
                "estado"=> "PI"
            ],
            [
                "id"=> 724,

                "nome"=> "Cocal",
                "estado"=> "PI"
            ],
            [
                "id"=> 725,

                "nome"=> "Cocal de Telha",
                "estado"=> "PI"
            ],
            [
                "id"=> 726,

                "nome"=> "Cocal dos Alves",
                "estado"=> "PI"
            ],
            [
                "id"=> 727,

                "nome"=> "Coivaras",
                "estado"=> "PI"
            ],
            [
                "id"=> 728,

                "nome"=> "Colônia do Gurguéia",
                "estado"=> "PI"
            ],
            [
                "id"=> 729,

                "nome"=> "Colônia do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 730,

                "nome"=> "Conceição do Canindé",
                "estado"=> "PI"
            ],
            [
                "id"=> 731,

                "nome"=> "Coronel José Dias",
                "estado"=> "PI"
            ],
            [
                "id"=> 732,

                "nome"=> "Corrente",
                "estado"=> "PI"
            ],
            [
                "id"=> 733,

                "nome"=> "Cristalândia do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 734,

                "nome"=> "Cristino Castro",
                "estado"=> "PI"
            ],
            [
                "id"=> 735,

                "nome"=> "Curimatá",
                "estado"=> "PI"
            ],
            [
                "id"=> 736,

                "nome"=> "Currais",
                "estado"=> "PI"
            ],
            [
                "id"=> 737,

                "nome"=> "Curralinhos",
                "estado"=> "PI"
            ],
            [
                "id"=> 738,

                "nome"=> "Curral Novo do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 739,

                "nome"=> "Demerval Lobão",
                "estado"=> "PI"
            ],
            [
                "id"=> 740,

                "nome"=> "Dirceu Arcoverde",
                "estado"=> "PI"
            ],
            [
                "id"=> 741,

                "nome"=> "Dom Expedito Lopes",
                "estado"=> "PI"
            ],
            [
                "id"=> 742,

                "nome"=> "Domingos Mourão",
                "estado"=> "PI"
            ],
            [
                "id"=> 743,

                "nome"=> "Dom Inocêncio",
                "estado"=> "PI"
            ],
            [
                "id"=> 744,

                "nome"=> "Elesbão Veloso",
                "estado"=> "PI"
            ],
            [
                "id"=> 745,

                "nome"=> "Eliseu Martins",
                "estado"=> "PI"
            ],
            [
                "id"=> 746,

                "nome"=> "Esperantina",
                "estado"=> "PI"
            ],
            [
                "id"=> 747,

                "nome"=> "Fartura do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 748,

                "nome"=> "Flores do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 749,

                "nome"=> "Floresta do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 750,

                "nome"=> "Floriano",
                "estado"=> "PI"
            ],
            [
                "id"=> 751,

                "nome"=> "Francinópolis",
                "estado"=> "PI"
            ],
            [
                "id"=> 752,

                "nome"=> "Francisco Ayres",
                "estado"=> "PI"
            ],
            [
                "id"=> 753,

                "nome"=> "Francisco Macedo",
                "estado"=> "PI"
            ],
            [
                "id"=> 754,

                "nome"=> "Francisco Santos",
                "estado"=> "PI"
            ],
            [
                "id"=> 755,

                "nome"=> "Fronteiras",
                "estado"=> "PI"
            ],
            [
                "id"=> 756,

                "nome"=> "Geminiano",
                "estado"=> "PI"
            ],
            [
                "id"=> 757,

                "nome"=> "Gilbués",
                "estado"=> "PI"
            ],
            [
                "id"=> 758,

                "nome"=> "Guadalupe",
                "estado"=> "PI"
            ],
            [
                "id"=> 759,

                "nome"=> "Guaribas",
                "estado"=> "PI"
            ],
            [
                "id"=> 760,

                "nome"=> "Hugo Napoleão",
                "estado"=> "PI"
            ],
            [
                "id"=> 761,

                "nome"=> "Ilha Grande",
                "estado"=> "PI"
            ],
            [
                "id"=> 762,

                "nome"=> "Inhuma",
                "estado"=> "PI"
            ],
            [
                "id"=> 763,

                "nome"=> "Ipiranga do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 764,

                "nome"=> "Isaías Coelho",
                "estado"=> "PI"
            ],
            [
                "id"=> 765,

                "nome"=> "Itainópolis",
                "estado"=> "PI"
            ],
            [
                "id"=> 766,

                "nome"=> "Itaueira",
                "estado"=> "PI"
            ],
            [
                "id"=> 767,

                "nome"=> "Jacobina do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 768,

                "nome"=> "Jaicós",
                "estado"=> "PI"
            ],
            [
                "id"=> 769,

                "nome"=> "Jardim do Mulato",
                "estado"=> "PI"
            ],
            [
                "id"=> 770,

                "nome"=> "Jatobá do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 771,

                "nome"=> "Jerumenha",
                "estado"=> "PI"
            ],
            [
                "id"=> 772,

                "nome"=> "João Costa",
                "estado"=> "PI"
            ],
            [
                "id"=> 773,

                "nome"=> "Joaquim Pires",
                "estado"=> "PI"
            ],
            [
                "id"=> 774,

                "nome"=> "Joca Marques",
                "estado"=> "PI"
            ],
            [
                "id"=> 775,

                "nome"=> "José de Freitas",
                "estado"=> "PI"
            ],
            [
                "id"=> 776,

                "nome"=> "Juazeiro do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 777,

                "nome"=> "Júlio Borges",
                "estado"=> "PI"
            ],
            [
                "id"=> 778,

                "nome"=> "Jurema",
                "estado"=> "PI"
            ],
            [
                "id"=> 779,

                "nome"=> "Lagoinha do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 780,

                "nome"=> "Lagoa Alegre",
                "estado"=> "PI"
            ],
            [
                "id"=> 781,

                "nome"=> "Lagoa do Barro do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 782,

                "nome"=> "Lagoa de São Francisco",
                "estado"=> "PI"
            ],
            [
                "id"=> 783,

                "nome"=> "Lagoa do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 784,

                "nome"=> "Lagoa do Sítio",
                "estado"=> "PI"
            ],
            [
                "id"=> 785,

                "nome"=> "Landri Sales",
                "estado"=> "PI"
            ],
            [
                "id"=> 786,

                "nome"=> "Luís Correia",
                "estado"=> "PI"
            ],
            [
                "id"=> 787,

                "nome"=> "Luzilândia",
                "estado"=> "PI"
            ],
            [
                "id"=> 788,

                "nome"=> "Madeiro",
                "estado"=> "PI"
            ],
            [
                "id"=> 789,

                "nome"=> "Manoel Emídio",
                "estado"=> "PI"
            ],
            [
                "id"=> 790,

                "nome"=> "Marcolândia",
                "estado"=> "PI"
            ],
            [
                "id"=> 791,

                "nome"=> "Marcos Parente",
                "estado"=> "PI"
            ],
            [
                "id"=> 792,

                "nome"=> "Massapê do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 793,

                "nome"=> "Matias Olímpio",
                "estado"=> "PI"
            ],
            [
                "id"=> 794,

                "nome"=> "Miguel Alves",
                "estado"=> "PI"
            ],
            [
                "id"=> 795,

                "nome"=> "Miguel Leão",
                "estado"=> "PI"
            ],
            [
                "id"=> 796,

                "nome"=> "Milton Brandão",
                "estado"=> "PI"
            ],
            [
                "id"=> 797,

                "nome"=> "Monsenhor Gil",
                "estado"=> "PI"
            ],
            [
                "id"=> 798,

                "nome"=> "Monsenhor Hipólito",
                "estado"=> "PI"
            ],
            [
                "id"=> 799,

                "nome"=> "Monte Alegre do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 800,

                "nome"=> "Morro Cabeça no Tempo",
                "estado"=> "PI"
            ],
            [
                "id"=> 801,

                "nome"=> "Morro do Chapéu do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 802,

                "nome"=> "Murici dos Portelas",
                "estado"=> "PI"
            ],
            [
                "id"=> 803,

                "nome"=> "Nazaré do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 804,

                "nome"=> "Nazária",
                "estado"=> "PI"
            ],
            [
                "id"=> 805,

                "nome"=> "Nossa Senhora de Nazaré",
                "estado"=> "PI"
            ],
            [
                "id"=> 806,

                "nome"=> "Nossa Senhora dos Remédios",
                "estado"=> "PI"
            ],
            [
                "id"=> 807,

                "nome"=> "Novo Oriente do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 808,

                "nome"=> "Novo Santo Antônio",
                "estado"=> "PI"
            ],
            [
                "id"=> 809,

                "nome"=> "Oeiras",
                "estado"=> "PI"
            ],
            [
                "id"=> 810,

                "nome"=> "Olho D'Água do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 811,

                "nome"=> "Padre Marcos",
                "estado"=> "PI"
            ],
            [
                "id"=> 812,

                "nome"=> "Paes Landim",
                "estado"=> "PI"
            ],
            [
                "id"=> 813,

                "nome"=> "Pajeú do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 814,

                "nome"=> "Palmeira do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 815,

                "nome"=> "Palmeirais",
                "estado"=> "PI"
            ],
            [
                "id"=> 816,

                "nome"=> "Paquetá",
                "estado"=> "PI"
            ],
            [
                "id"=> 817,

                "nome"=> "Parnaguá",
                "estado"=> "PI"
            ],
            [
                "id"=> 818,

                "nome"=> "Parnaíba",
                "estado"=> "PI"
            ],
            [
                "id"=> 819,

                "nome"=> "Passagem Franca do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 820,

                "nome"=> "Patos do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 821,

                "nome"=> "Pau D'Arco do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 822,

                "nome"=> "Paulistana",
                "estado"=> "PI"
            ],
            [
                "id"=> 823,

                "nome"=> "Pavussu",
                "estado"=> "PI"
            ],
            [
                "id"=> 824,

                "nome"=> "Pedro II",
                "estado"=> "PI"
            ],
            [
                "id"=> 825,

                "nome"=> "Pedro Laurentino",
                "estado"=> "PI"
            ],
            [
                "id"=> 826,

                "nome"=> "Nova Santa Rita",
                "estado"=> "PI"
            ],
            [
                "id"=> 827,

                "nome"=> "Picos",
                "estado"=> "PI"
            ],
            [
                "id"=> 828,

                "nome"=> "Pimenteiras",
                "estado"=> "PI"
            ],
            [
                "id"=> 829,

                "nome"=> "Pio IX",
                "estado"=> "PI"
            ],
            [
                "id"=> 830,

                "nome"=> "Piracuruca",
                "estado"=> "PI"
            ],
            [
                "id"=> 831,

                "nome"=> "Piripiri",
                "estado"=> "PI"
            ],
            [
                "id"=> 832,

                "nome"=> "Porto",
                "estado"=> "PI"
            ],
            [
                "id"=> 833,

                "nome"=> "Porto Alegre do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 834,

                "nome"=> "Prata do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 835,

                "nome"=> "Queimada Nova",
                "estado"=> "PI"
            ],
            [
                "id"=> 836,

                "nome"=> "Redenção do Gurguéia",
                "estado"=> "PI"
            ],
            [
                "id"=> 837,

                "nome"=> "Regeneração",
                "estado"=> "PI"
            ],
            [
                "id"=> 838,

                "nome"=> "Riacho Frio",
                "estado"=> "PI"
            ],
            [
                "id"=> 839,

                "nome"=> "Ribeira do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 840,

                "nome"=> "Ribeiro Gonçalves",
                "estado"=> "PI"
            ],
            [
                "id"=> 841,

                "nome"=> "Rio Grande do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 842,

                "nome"=> "Santa Cruz do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 843,

                "nome"=> "Santa Cruz dos Milagres",
                "estado"=> "PI"
            ],
            [
                "id"=> 844,

                "nome"=> "Santa Filomena",
                "estado"=> "PI"
            ],
            [
                "id"=> 845,

                "nome"=> "Santa Luz",
                "estado"=> "PI"
            ],
            [
                "id"=> 846,

                "nome"=> "Santana do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 847,

                "nome"=> "Santa Rosa do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 848,

                "nome"=> "Santo Antônio de Lisboa",
                "estado"=> "PI"
            ],
            [
                "id"=> 849,

                "nome"=> "Santo Antônio dos Milagres",
                "estado"=> "PI"
            ],
            [
                "id"=> 850,

                "nome"=> "Santo Inácio do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 851,

                "nome"=> "São Braz do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 852,

                "nome"=> "São Félix do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 853,

                "nome"=> "São Francisco de Assis do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 854,

                "nome"=> "São Francisco do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 855,

                "nome"=> "São Gonçalo do Gurguéia",
                "estado"=> "PI"
            ],
            [
                "id"=> 856,

                "nome"=> "São Gonçalo do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 857,

                "nome"=> "São João da Canabrava",
                "estado"=> "PI"
            ],
            [
                "id"=> 858,

                "nome"=> "São João da Fronteira",
                "estado"=> "PI"
            ],
            [
                "id"=> 859,

                "nome"=> "São João da Serra",
                "estado"=> "PI"
            ],
            [
                "id"=> 860,

                "nome"=> "São João da Varjota",
                "estado"=> "PI"
            ],
            [
                "id"=> 861,

                "nome"=> "São João do Arraial",
                "estado"=> "PI"
            ],
            [
                "id"=> 862,

                "nome"=> "São João do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 863,

                "nome"=> "São José do Divino",
                "estado"=> "PI"
            ],
            [
                "id"=> 864,

                "nome"=> "São José do Peixe",
                "estado"=> "PI"
            ],
            [
                "id"=> 865,

                "nome"=> "São José do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 866,

                "nome"=> "São Julião",
                "estado"=> "PI"
            ],
            [
                "id"=> 867,

                "nome"=> "São Lourenço do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 868,

                "nome"=> "São Luis do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 869,

                "nome"=> "São Miguel da Baixa Grande",
                "estado"=> "PI"
            ],
            [
                "id"=> 870,

                "nome"=> "São Miguel do Fidalgo",
                "estado"=> "PI"
            ],
            [
                "id"=> 871,

                "nome"=> "São Miguel do Tapuio",
                "estado"=> "PI"
            ],
            [
                "id"=> 872,

                "nome"=> "São Pedro do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 873,

                "nome"=> "São Raimundo Nonato",
                "estado"=> "PI"
            ],
            [
                "id"=> 874,

                "nome"=> "Sebastião Barros",
                "estado"=> "PI"
            ],
            [
                "id"=> 875,

                "nome"=> "Sebastião Leal",
                "estado"=> "PI"
            ],
            [
                "id"=> 876,

                "nome"=> "Sigefredo Pacheco",
                "estado"=> "PI"
            ],
            [
                "id"=> 877,

                "nome"=> "Simões",
                "estado"=> "PI"
            ],
            [
                "id"=> 878,

                "nome"=> "Simplício Mendes",
                "estado"=> "PI"
            ],
            [
                "id"=> 879,

                "nome"=> "Socorro do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 880,

                "nome"=> "Sussuapara",
                "estado"=> "PI"
            ],
            [
                "id"=> 881,

                "nome"=> "Tamboril do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 882,

                "nome"=> "Tanque do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 883,

                "nome"=> "Teresina",
                "estado"=> "PI"
            ],
            [
                "id"=> 884,

                "nome"=> "União",
                "estado"=> "PI"
            ],
            [
                "id"=> 885,

                "nome"=> "Uruçuí",
                "estado"=> "PI"
            ],
            [
                "id"=> 886,

                "nome"=> "Valença do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 887,

                "nome"=> "Várzea Branca",
                "estado"=> "PI"
            ],
            [
                "id"=> 888,

                "nome"=> "Várzea Grande",
                "estado"=> "PI"
            ],
            [
                "id"=> 889,

                "nome"=> "Vera Mendes",
                "estado"=> "PI"
            ],
            [
                "id"=> 890,

                "nome"=> "Vila Nova do Piauí",
                "estado"=> "PI"
            ],
            [
                "id"=> 891,

                "nome"=> "Wall Ferraz",
                "estado"=> "PI"
            ],
            [
                "id"=> 892,

                "nome"=> "Abaiara",
                "estado"=> "CE"
            ],
            [
                "id"=> 893,

                "nome"=> "Acarape",
                "estado"=> "CE"
            ],
            [
                "id"=> 894,

                "nome"=> "Acaraú",
                "estado"=> "CE"
            ],
            [
                "id"=> 895,

                "nome"=> "Acopiara",
                "estado"=> "CE"
            ],
            [
                "id"=> 896,

                "nome"=> "Aiuaba",
                "estado"=> "CE"
            ],
            [
                "id"=> 897,

                "nome"=> "Alcântaras",
                "estado"=> "CE"
            ],
            [
                "id"=> 898,

                "nome"=> "Altaneira",
                "estado"=> "CE"
            ],
            [
                "id"=> 899,

                "nome"=> "Alto Santo",
                "estado"=> "CE"
            ],
            [
                "id"=> 900,

                "nome"=> "Amontada",
                "estado"=> "CE"
            ],
            [
                "id"=> 901,

                "nome"=> "Antonina do Norte",
                "estado"=> "CE"
            ],
            [
                "id"=> 902,

                "nome"=> "Apuiarés",
                "estado"=> "CE"
            ],
            [
                "id"=> 903,

                "nome"=> "Aquiraz",
                "estado"=> "CE"
            ],
            [
                "id"=> 904,

                "nome"=> "Aracati",
                "estado"=> "CE"
            ],
            [
                "id"=> 905,

                "nome"=> "Aracoiaba",
                "estado"=> "CE"
            ],
            [
                "id"=> 906,

                "nome"=> "Ararendá",
                "estado"=> "CE"
            ],
            [
                "id"=> 907,

                "nome"=> "Araripe",
                "estado"=> "CE"
            ],
            [
                "id"=> 908,

                "nome"=> "Aratuba",
                "estado"=> "CE"
            ],
            [
                "id"=> 909,

                "nome"=> "Arneiroz",
                "estado"=> "CE"
            ],
            [
                "id"=> 910,

                "nome"=> "Assaré",
                "estado"=> "CE"
            ],
            [
                "id"=> 911,

                "nome"=> "Aurora",
                "estado"=> "CE"
            ],
            [
                "id"=> 912,

                "nome"=> "Baixio",
                "estado"=> "CE"
            ],
            [
                "id"=> 913,

                "nome"=> "Banabuiú",
                "estado"=> "CE"
            ],
            [
                "id"=> 914,

                "nome"=> "Barbalha",
                "estado"=> "CE"
            ],
            [
                "id"=> 915,

                "nome"=> "Barreira",
                "estado"=> "CE"
            ],
            [
                "id"=> 916,

                "nome"=> "Barro",
                "estado"=> "CE"
            ],
            [
                "id"=> 917,

                "nome"=> "Barroquinha",
                "estado"=> "CE"
            ],
            [
                "id"=> 918,

                "nome"=> "Baturité",
                "estado"=> "CE"
            ],
            [
                "id"=> 919,

                "nome"=> "Beberibe",
                "estado"=> "CE"
            ],
            [
                "id"=> 920,

                "nome"=> "Bela Cruz",
                "estado"=> "CE"
            ],
            [
                "id"=> 921,

                "nome"=> "Boa Viagem",
                "estado"=> "CE"
            ],
            [
                "id"=> 922,

                "nome"=> "Brejo Santo",
                "estado"=> "CE"
            ],
            [
                "id"=> 923,

                "nome"=> "Camocim",
                "estado"=> "CE"
            ],
            [
                "id"=> 924,

                "nome"=> "Campos Sales",
                "estado"=> "CE"
            ],
            [
                "id"=> 925,

                "nome"=> "Canindé",
                "estado"=> "CE"
            ],
            [
                "id"=> 926,

                "nome"=> "Capistrano",
                "estado"=> "CE"
            ],
            [
                "id"=> 927,

                "nome"=> "Caridade",
                "estado"=> "CE"
            ],
            [
                "id"=> 928,

                "nome"=> "Cariré",
                "estado"=> "CE"
            ],
            [
                "id"=> 929,

                "nome"=> "Caririaçu",
                "estado"=> "CE"
            ],
            [
                "id"=> 930,

                "nome"=> "Cariús",
                "estado"=> "CE"
            ],
            [
                "id"=> 931,

                "nome"=> "Carnaubal",
                "estado"=> "CE"
            ],
            [
                "id"=> 932,

                "nome"=> "Cascavel",
                "estado"=> "CE"
            ],
            [
                "id"=> 933,

                "nome"=> "Catarina",
                "estado"=> "CE"
            ],
            [
                "id"=> 934,

                "nome"=> "Catunda",
                "estado"=> "CE"
            ],
            [
                "id"=> 935,

                "nome"=> "Caucaia",
                "estado"=> "CE"
            ],
            [
                "id"=> 936,

                "nome"=> "Cedro",
                "estado"=> "CE"
            ],
            [
                "id"=> 937,

                "nome"=> "Chaval",
                "estado"=> "CE"
            ],
            [
                "id"=> 938,

                "nome"=> "Choró",
                "estado"=> "CE"
            ],
            [
                "id"=> 939,

                "nome"=> "Chorozinho",
                "estado"=> "CE"
            ],
            [
                "id"=> 940,

                "nome"=> "Coreaú",
                "estado"=> "CE"
            ],
            [
                "id"=> 941,

                "nome"=> "Crateús",
                "estado"=> "CE"
            ],
            [
                "id"=> 942,

                "nome"=> "Crato",
                "estado"=> "CE"
            ],
            [
                "id"=> 943,

                "nome"=> "Croatá",
                "estado"=> "CE"
            ],
            [
                "id"=> 944,

                "nome"=> "Cruz",
                "estado"=> "CE"
            ],
            [
                "id"=> 945,

                "nome"=> "Deputado Irapuan Pinheiro",
                "estado"=> "CE"
            ],
            [
                "id"=> 946,

                "nome"=> "Ererê",
                "estado"=> "CE"
            ],
            [
                "id"=> 947,

                "nome"=> "Eusébio",
                "estado"=> "CE"
            ],
            [
                "id"=> 948,

                "nome"=> "Farias Brito",
                "estado"=> "CE"
            ],
            [
                "id"=> 949,

                "nome"=> "Forquilha",
                "estado"=> "CE"
            ],
            [
                "id"=> 950,

                "nome"=> "Fortaleza",
                "estado"=> "CE"
            ],
            [
                "id"=> 951,

                "nome"=> "Fortim",
                "estado"=> "CE"
            ],
            [
                "id"=> 952,

                "nome"=> "Frecheirinha",
                "estado"=> "CE"
            ],
            [
                "id"=> 953,

                "nome"=> "General Sampaio",
                "estado"=> "CE"
            ],
            [
                "id"=> 954,

                "nome"=> "Graça",
                "estado"=> "CE"
            ],
            [
                "id"=> 955,

                "nome"=> "Granja",
                "estado"=> "CE"
            ],
            [
                "id"=> 956,

                "nome"=> "Granjeiro",
                "estado"=> "CE"
            ],
            [
                "id"=> 957,

                "nome"=> "Groaíras",
                "estado"=> "CE"
            ],
            [
                "id"=> 958,

                "nome"=> "Guaiúba",
                "estado"=> "CE"
            ],
            [
                "id"=> 959,

                "nome"=> "Guaraciaba do Norte",
                "estado"=> "CE"
            ],
            [
                "id"=> 960,

                "nome"=> "Guaramiranga",
                "estado"=> "CE"
            ],
            [
                "id"=> 961,

                "nome"=> "Hidrolândia",
                "estado"=> "CE"
            ],
            [
                "id"=> 962,

                "nome"=> "Horizonte",
                "estado"=> "CE"
            ],
            [
                "id"=> 963,

                "nome"=> "Ibaretama",
                "estado"=> "CE"
            ],
            [
                "id"=> 964,

                "nome"=> "Ibiapina",
                "estado"=> "CE"
            ],
            [
                "id"=> 965,

                "nome"=> "Ibicuitinga",
                "estado"=> "CE"
            ],
            [
                "id"=> 966,

                "nome"=> "Icapuí",
                "estado"=> "CE"
            ],
            [
                "id"=> 967,

                "nome"=> "Icó",
                "estado"=> "CE"
            ],
            [
                "id"=> 968,

                "nome"=> "Iguatu",
                "estado"=> "CE"
            ],
            [
                "id"=> 969,

                "nome"=> "Independência",
                "estado"=> "CE"
            ],
            [
                "id"=> 970,

                "nome"=> "Ipaporanga",
                "estado"=> "CE"
            ],
            [
                "id"=> 971,

                "nome"=> "Ipaumirim",
                "estado"=> "CE"
            ],
            [
                "id"=> 972,

                "nome"=> "Ipu",
                "estado"=> "CE"
            ],
            [
                "id"=> 973,

                "nome"=> "Ipueiras",
                "estado"=> "CE"
            ],
            [
                "id"=> 974,

                "nome"=> "Iracema",
                "estado"=> "CE"
            ],
            [
                "id"=> 975,

                "nome"=> "Irauçuba",
                "estado"=> "CE"
            ],
            [
                "id"=> 976,

                "nome"=> "Itaiçaba",
                "estado"=> "CE"
            ],
            [
                "id"=> 977,

                "nome"=> "Itaitinga",
                "estado"=> "CE"
            ],
            [
                "id"=> 978,

                "nome"=> "Itapagé",
                "estado"=> "CE"
            ],
            [
                "id"=> 979,

                "nome"=> "Itapipoca",
                "estado"=> "CE"
            ],
            [
                "id"=> 980,

                "nome"=> "Itapiúna",
                "estado"=> "CE"
            ],
            [
                "id"=> 981,

                "nome"=> "Itarema",
                "estado"=> "CE"
            ],
            [
                "id"=> 982,

                "nome"=> "Itatira",
                "estado"=> "CE"
            ],
            [
                "id"=> 983,

                "nome"=> "Jaguaretama",
                "estado"=> "CE"
            ],
            [
                "id"=> 984,

                "nome"=> "Jaguaribara",
                "estado"=> "CE"
            ],
            [
                "id"=> 985,

                "nome"=> "Jaguaribe",
                "estado"=> "CE"
            ],
            [
                "id"=> 986,

                "nome"=> "Jaguaruana",
                "estado"=> "CE"
            ],
            [
                "id"=> 987,

                "nome"=> "Jardim",
                "estado"=> "CE"
            ],
            [
                "id"=> 988,

                "nome"=> "Jati",
                "estado"=> "CE"
            ],
            [
                "id"=> 989,

                "nome"=> "Jijoca de Jericoacoara",
                "estado"=> "CE"
            ],
            [
                "id"=> 990,

                "nome"=> "Juazeiro do Norte",
                "estado"=> "CE"
            ],
            [
                "id"=> 991,

                "nome"=> "Jucás",
                "estado"=> "CE"
            ],
            [
                "id"=> 992,

                "nome"=> "Lavras da Mangabeira",
                "estado"=> "CE"
            ],
            [
                "id"=> 993,

                "nome"=> "Limoeiro do Norte",
                "estado"=> "CE"
            ],
            [
                "id"=> 994,

                "nome"=> "Madalena",
                "estado"=> "CE"
            ],
            [
                "id"=> 995,

                "nome"=> "Maracanaú",
                "estado"=> "CE"
            ],
            [
                "id"=> 996,

                "nome"=> "Maranguape",
                "estado"=> "CE"
            ],
            [
                "id"=> 997,

                "nome"=> "Marco",
                "estado"=> "CE"
            ],
            [
                "id"=> 998,

                "nome"=> "Martinópole",
                "estado"=> "CE"
            ],
            [
                "id"=> 999,

                "nome"=> "Massapê",
                "estado"=> "CE"
            ],
            [
                "id"=> 1000,

                "nome"=> "Mauriti",
                "estado"=> "CE"
            ],
            [
                "id"=> 1001,

                "nome"=> "Meruoca",
                "estado"=> "CE"
            ],
            [
                "id"=> 1002,

                "nome"=> "Milagres",
                "estado"=> "CE"
            ],
            [
                "id"=> 1003,

                "nome"=> "Milhã",
                "estado"=> "CE"
            ],
            [
                "id"=> 1004,

                "nome"=> "Miraíma",
                "estado"=> "CE"
            ],
            [
                "id"=> 1005,

                "nome"=> "Missão Velha",
                "estado"=> "CE"
            ],
            [
                "id"=> 1006,

                "nome"=> "Mombaça",
                "estado"=> "CE"
            ],
            [
                "id"=> 1007,

                "nome"=> "Monsenhor Tabosa",
                "estado"=> "CE"
            ],
            [
                "id"=> 1008,

                "nome"=> "Morada Nova",
                "estado"=> "CE"
            ],
            [
                "id"=> 1009,

                "nome"=> "Moraújo",
                "estado"=> "CE"
            ],
            [
                "id"=> 1010,

                "nome"=> "Morrinhos",
                "estado"=> "CE"
            ],
            [
                "id"=> 1011,

                "nome"=> "Mucambo",
                "estado"=> "CE"
            ],
            [
                "id"=> 1012,

                "nome"=> "Mulungu",
                "estado"=> "CE"
            ],
            [
                "id"=> 1013,

                "nome"=> "Nova Olinda",
                "estado"=> "CE"
            ],
            [
                "id"=> 1014,

                "nome"=> "Nova Russas",
                "estado"=> "CE"
            ],
            [
                "id"=> 1015,

                "nome"=> "Novo Oriente",
                "estado"=> "CE"
            ],
            [
                "id"=> 1016,

                "nome"=> "Ocara",
                "estado"=> "CE"
            ],
            [
                "id"=> 1017,

                "nome"=> "Orós",
                "estado"=> "CE"
            ],
            [
                "id"=> 1018,

                "nome"=> "Pacajus",
                "estado"=> "CE"
            ],
            [
                "id"=> 1019,

                "nome"=> "Pacatuba",
                "estado"=> "CE"
            ],
            [
                "id"=> 1020,

                "nome"=> "Pacoti",
                "estado"=> "CE"
            ],
            [
                "id"=> 1021,

                "nome"=> "Pacujá",
                "estado"=> "CE"
            ],
            [
                "id"=> 1022,

                "nome"=> "Palhano",
                "estado"=> "CE"
            ],
            [
                "id"=> 1023,

                "nome"=> "Palmácia",
                "estado"=> "CE"
            ],
            [
                "id"=> 1024,

                "nome"=> "Paracuru",
                "estado"=> "CE"
            ],
            [
                "id"=> 1025,

                "nome"=> "Paraipaba",
                "estado"=> "CE"
            ],
            [
                "id"=> 1026,

                "nome"=> "Parambu",
                "estado"=> "CE"
            ],
            [
                "id"=> 1027,

                "nome"=> "Paramoti",
                "estado"=> "CE"
            ],
            [
                "id"=> 1028,

                "nome"=> "Pedra Branca",
                "estado"=> "CE"
            ],
            [
                "id"=> 1029,

                "nome"=> "Penaforte",
                "estado"=> "CE"
            ],
            [
                "id"=> 1030,

                "nome"=> "Pentecoste",
                "estado"=> "CE"
            ],
            [
                "id"=> 1031,

                "nome"=> "Pereiro",
                "estado"=> "CE"
            ],
            [
                "id"=> 1032,

                "nome"=> "Pindoretama",
                "estado"=> "CE"
            ],
            [
                "id"=> 1033,

                "nome"=> "Piquet Carneiro",
                "estado"=> "CE"
            ],
            [
                "id"=> 1034,

                "nome"=> "Pires Ferreira",
                "estado"=> "CE"
            ],
            [
                "id"=> 1035,

                "nome"=> "Poranga",
                "estado"=> "CE"
            ],
            [
                "id"=> 1036,

                "nome"=> "Porteiras",
                "estado"=> "CE"
            ],
            [
                "id"=> 1037,

                "nome"=> "Potengi",
                "estado"=> "CE"
            ],
            [
                "id"=> 1038,

                "nome"=> "Potiretama",
                "estado"=> "CE"
            ],
            [
                "id"=> 1039,

                "nome"=> "Quiterianópolis",
                "estado"=> "CE"
            ],
            [
                "id"=> 1040,

                "nome"=> "Quixadá",
                "estado"=> "CE"
            ],
            [
                "id"=> 1041,

                "nome"=> "Quixelô",
                "estado"=> "CE"
            ],
            [
                "id"=> 1042,

                "nome"=> "Quixeramobim",
                "estado"=> "CE"
            ],
            [
                "id"=> 1043,

                "nome"=> "Quixeré",
                "estado"=> "CE"
            ],
            [
                "id"=> 1044,

                "nome"=> "Redenção",
                "estado"=> "CE"
            ],
            [
                "id"=> 1045,

                "nome"=> "Reriutaba",
                "estado"=> "CE"
            ],
            [
                "id"=> 1046,

                "nome"=> "Russas",
                "estado"=> "CE"
            ],
            [
                "id"=> 1047,

                "nome"=> "Saboeiro",
                "estado"=> "CE"
            ],
            [
                "id"=> 1048,

                "nome"=> "Salitre",
                "estado"=> "CE"
            ],
            [
                "id"=> 1049,

                "nome"=> "Santana do Acaraú",
                "estado"=> "CE"
            ],
            [
                "id"=> 1050,

                "nome"=> "Santana do Cariri",
                "estado"=> "CE"
            ],
            [
                "id"=> 1051,

                "nome"=> "Santa Quitéria",
                "estado"=> "CE"
            ],
            [
                "id"=> 1052,

                "nome"=> "São Benedito",
                "estado"=> "CE"
            ],
            [
                "id"=> 1053,

                "nome"=> "São Gonçalo do Amarante",
                "estado"=> "CE"
            ],
            [
                "id"=> 1054,

                "nome"=> "São João do Jaguaribe",
                "estado"=> "CE"
            ],
            [
                "id"=> 1055,

                "nome"=> "São Luís do Curu",
                "estado"=> "CE"
            ],
            [
                "id"=> 1056,

                "nome"=> "Senador Pompeu",
                "estado"=> "CE"
            ],
            [
                "id"=> 1057,

                "nome"=> "Senador Sá",
                "estado"=> "CE"
            ],
            [
                "id"=> 1058,

                "nome"=> "Sobral",
                "estado"=> "CE"
            ],
            [
                "id"=> 1059,

                "nome"=> "Solonópole",
                "estado"=> "CE"
            ],
            [
                "id"=> 1060,

                "nome"=> "Tabuleiro do Norte",
                "estado"=> "CE"
            ],
            [
                "id"=> 1061,

                "nome"=> "Tamboril",
                "estado"=> "CE"
            ],
            [
                "id"=> 1062,

                "nome"=> "Tarrafas",
                "estado"=> "CE"
            ],
            [
                "id"=> 1063,

                "nome"=> "Tauá",
                "estado"=> "CE"
            ],
            [
                "id"=> 1064,

                "nome"=> "Tejuçuoca",
                "estado"=> "CE"
            ],
            [
                "id"=> 1065,

                "nome"=> "Tianguá",
                "estado"=> "CE"
            ],
            [
                "id"=> 1066,

                "nome"=> "Trairi",
                "estado"=> "CE"
            ],
            [
                "id"=> 1067,

                "nome"=> "Tururu",
                "estado"=> "CE"
            ],
            [
                "id"=> 1068,

                "nome"=> "Ubajara",
                "estado"=> "CE"
            ],
            [
                "id"=> 1069,

                "nome"=> "Umari",
                "estado"=> "CE"
            ],
            [
                "id"=> 1070,

                "nome"=> "Umirim",
                "estado"=> "CE"
            ],
            [
                "id"=> 1071,

                "nome"=> "Uruburetama",
                "estado"=> "CE"
            ],
            [
                "id"=> 1072,

                "nome"=> "Uruoca",
                "estado"=> "CE"
            ],
            [
                "id"=> 1073,

                "nome"=> "Varjota",
                "estado"=> "CE"
            ],
            [
                "id"=> 1074,

                "nome"=> "Várzea Alegre",
                "estado"=> "CE"
            ],
            [
                "id"=> 1075,

                "nome"=> "Viçosa do Ceará",
                "estado"=> "CE"
            ],
            [
                "id"=> 1076,

                "nome"=> "Acari",
                "estado"=> "RN"
            ],
            [
                "id"=> 1077,

                "nome"=> "Açu",
                "estado"=> "RN"
            ],
            [
                "id"=> 1078,

                "nome"=> "Afonso Bezerra",
                "estado"=> "RN"
            ],
            [
                "id"=> 1079,

                "nome"=> "Água Nova",
                "estado"=> "RN"
            ],
            [
                "id"=> 1080,

                "nome"=> "Alexandria",
                "estado"=> "RN"
            ],
            [
                "id"=> 1081,

                "nome"=> "Almino Afonso",
                "estado"=> "RN"
            ],
            [
                "id"=> 1082,

                "nome"=> "Alto do Rodrigues",
                "estado"=> "RN"
            ],
            [
                "id"=> 1083,

                "nome"=> "Angicos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1084,

                "nome"=> "Antônio Martins",
                "estado"=> "RN"
            ],
            [
                "id"=> 1085,

                "nome"=> "Apodi",
                "estado"=> "RN"
            ],
            [
                "id"=> 1086,

                "nome"=> "Areia Branca",
                "estado"=> "RN"
            ],
            [
                "id"=> 1087,

                "nome"=> "Arês",
                "estado"=> "RN"
            ],
            [
                "id"=> 1088,

                "nome"=> "Augusto Severo",
                "estado"=> "RN"
            ],
            [
                "id"=> 1089,

                "nome"=> "Baía Formosa",
                "estado"=> "RN"
            ],
            [
                "id"=> 1090,

                "nome"=> "Baraúna",
                "estado"=> "RN"
            ],
            [
                "id"=> 1091,

                "nome"=> "Barcelona",
                "estado"=> "RN"
            ],
            [
                "id"=> 1092,

                "nome"=> "Bento Fernandes",
                "estado"=> "RN"
            ],
            [
                "id"=> 1093,

                "nome"=> "Bodó",
                "estado"=> "RN"
            ],
            [
                "id"=> 1094,

                "nome"=> "Bom Jesus",
                "estado"=> "RN"
            ],
            [
                "id"=> 1095,

                "nome"=> "Brejinho",
                "estado"=> "RN"
            ],
            [
                "id"=> 1096,

                "nome"=> "Caiçara do Norte",
                "estado"=> "RN"
            ],
            [
                "id"=> 1097,

                "nome"=> "Caiçara do Rio do Vento",
                "estado"=> "RN"
            ],
            [
                "id"=> 1098,

                "nome"=> "Caicó",
                "estado"=> "RN"
            ],
            [
                "id"=> 1099,

                "nome"=> "Campo Redondo",
                "estado"=> "RN"
            ],
            [
                "id"=> 1100,

                "nome"=> "Canguaretama",
                "estado"=> "RN"
            ],
            [
                "id"=> 1101,

                "nome"=> "Caraúbas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1102,

                "nome"=> "Carnaúba dos Dantas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1103,

                "nome"=> "Carnaubais",
                "estado"=> "RN"
            ],
            [
                "id"=> 1104,

                "nome"=> "Ceará-Mirim",
                "estado"=> "RN"
            ],
            [
                "id"=> 1105,

                "nome"=> "Cerro Corá",
                "estado"=> "RN"
            ],
            [
                "id"=> 1106,

                "nome"=> "Coronel Ezequiel",
                "estado"=> "RN"
            ],
            [
                "id"=> 1107,

                "nome"=> "Coronel João Pessoa",
                "estado"=> "RN"
            ],
            [
                "id"=> 1108,

                "nome"=> "Cruzeta",
                "estado"=> "RN"
            ],
            [
                "id"=> 1109,

                "nome"=> "Currais Novos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1110,

                "nome"=> "Doutor Severiano",
                "estado"=> "RN"
            ],
            [
                "id"=> 1111,

                "nome"=> "Parnamirim",
                "estado"=> "RN"
            ],
            [
                "id"=> 1112,

                "nome"=> "Encanto",
                "estado"=> "RN"
            ],
            [
                "id"=> 1113,

                "nome"=> "Equador",
                "estado"=> "RN"
            ],
            [
                "id"=> 1114,

                "nome"=> "Espírito Santo",
                "estado"=> "RN"
            ],
            [
                "id"=> 1115,

                "nome"=> "Extremoz",
                "estado"=> "RN"
            ],
            [
                "id"=> 1116,

                "nome"=> "Felipe Guerra",
                "estado"=> "RN"
            ],
            [
                "id"=> 1117,

                "nome"=> "Fernando Pedroza",
                "estado"=> "RN"
            ],
            [
                "id"=> 1118,

                "nome"=> "Florânia",
                "estado"=> "RN"
            ],
            [
                "id"=> 1119,

                "nome"=> "Francisco Dantas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1120,

                "nome"=> "Frutuoso Gomes",
                "estado"=> "RN"
            ],
            [
                "id"=> 1121,

                "nome"=> "Galinhos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1122,

                "nome"=> "Goianinha",
                "estado"=> "RN"
            ],
            [
                "id"=> 1123,

                "nome"=> "Governador Dix-Sept Rosado",
                "estado"=> "RN"
            ],
            [
                "id"=> 1124,

                "nome"=> "Grossos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1125,

                "nome"=> "Guamaré",
                "estado"=> "RN"
            ],
            [
                "id"=> 1126,

                "nome"=> "Ielmo Marinho",
                "estado"=> "RN"
            ],
            [
                "id"=> 1127,

                "nome"=> "Ipanguaçu",
                "estado"=> "RN"
            ],
            [
                "id"=> 1128,

                "nome"=> "Ipueira",
                "estado"=> "RN"
            ],
            [
                "id"=> 1129,

                "nome"=> "Itajá",
                "estado"=> "RN"
            ],
            [
                "id"=> 1130,

                "nome"=> "Itaú",
                "estado"=> "RN"
            ],
            [
                "id"=> 1131,

                "nome"=> "Jaçanã",
                "estado"=> "RN"
            ],
            [
                "id"=> 1132,

                "nome"=> "Jandaíra",
                "estado"=> "RN"
            ],
            [
                "id"=> 1133,

                "nome"=> "Janduís",
                "estado"=> "RN"
            ],
            [
                "id"=> 1134,

                "nome"=> "Januário Cicco",
                "estado"=> "RN"
            ],
            [
                "id"=> 1135,

                "nome"=> "Japi",
                "estado"=> "RN"
            ],
            [
                "id"=> 1136,

                "nome"=> "Jardim de Angicos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1137,

                "nome"=> "Jardim de Piranhas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1138,

                "nome"=> "Jardim do Seridó",
                "estado"=> "RN"
            ],
            [
                "id"=> 1139,

                "nome"=> "João Câmara",
                "estado"=> "RN"
            ],
            [
                "id"=> 1140,

                "nome"=> "João Dias",
                "estado"=> "RN"
            ],
            [
                "id"=> 1141,

                "nome"=> "José da Penha",
                "estado"=> "RN"
            ],
            [
                "id"=> 1142,

                "nome"=> "Jucurutu",
                "estado"=> "RN"
            ],
            [
                "id"=> 1143,

                "nome"=> "Jundiá",
                "estado"=> "RN"
            ],
            [
                "id"=> 1144,

                "nome"=> "Lagoa D'Anta",
                "estado"=> "RN"
            ],
            [
                "id"=> 1145,

                "nome"=> "Lagoa de Pedras",
                "estado"=> "RN"
            ],
            [
                "id"=> 1146,

                "nome"=> "Lagoa de Velhos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1147,

                "nome"=> "Lagoa Nova",
                "estado"=> "RN"
            ],
            [
                "id"=> 1148,

                "nome"=> "Lagoa Salgada",
                "estado"=> "RN"
            ],
            [
                "id"=> 1149,

                "nome"=> "Lajes",
                "estado"=> "RN"
            ],
            [
                "id"=> 1150,

                "nome"=> "Lajes Pintadas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1151,

                "nome"=> "Lucrécia",
                "estado"=> "RN"
            ],
            [
                "id"=> 1152,

                "nome"=> "Luís Gomes",
                "estado"=> "RN"
            ],
            [
                "id"=> 1153,

                "nome"=> "Macaíba",
                "estado"=> "RN"
            ],
            [
                "id"=> 1154,

                "nome"=> "Macau",
                "estado"=> "RN"
            ],
            [
                "id"=> 1155,

                "nome"=> "Major Sales",
                "estado"=> "RN"
            ],
            [
                "id"=> 1156,

                "nome"=> "Marcelino Vieira",
                "estado"=> "RN"
            ],
            [
                "id"=> 1157,

                "nome"=> "Martins",
                "estado"=> "RN"
            ],
            [
                "id"=> 1158,

                "nome"=> "Maxaranguape",
                "estado"=> "RN"
            ],
            [
                "id"=> 1159,

                "nome"=> "Messias Targino",
                "estado"=> "RN"
            ],
            [
                "id"=> 1160,

                "nome"=> "Montanhas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1161,

                "nome"=> "Monte Alegre",
                "estado"=> "RN"
            ],
            [
                "id"=> 1162,

                "nome"=> "Monte das Gameleiras",
                "estado"=> "RN"
            ],
            [
                "id"=> 1163,

                "nome"=> "Mossoró",
                "estado"=> "RN"
            ],
            [
                "id"=> 1164,

                "nome"=> "Natal",
                "estado"=> "RN"
            ],
            [
                "id"=> 1165,

                "nome"=> "Nísia Floresta",
                "estado"=> "RN"
            ],
            [
                "id"=> 1166,

                "nome"=> "Nova Cruz",
                "estado"=> "RN"
            ],
            [
                "id"=> 1167,

                "nome"=> "Olho-D'Água do Borges",
                "estado"=> "RN"
            ],
            [
                "id"=> 1168,

                "nome"=> "Ouro Branco",
                "estado"=> "RN"
            ],
            [
                "id"=> 1169,

                "nome"=> "Paraná",
                "estado"=> "RN"
            ],
            [
                "id"=> 1170,

                "nome"=> "Paraú",
                "estado"=> "RN"
            ],
            [
                "id"=> 1171,

                "nome"=> "Parazinho",
                "estado"=> "RN"
            ],
            [
                "id"=> 1172,

                "nome"=> "Parelhas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1173,

                "nome"=> "Rio do Fogo",
                "estado"=> "RN"
            ],
            [
                "id"=> 1174,

                "nome"=> "Passa e Fica",
                "estado"=> "RN"
            ],
            [
                "id"=> 1175,

                "nome"=> "Passagem",
                "estado"=> "RN"
            ],
            [
                "id"=> 1176,

                "nome"=> "Patu",
                "estado"=> "RN"
            ],
            [
                "id"=> 1177,

                "nome"=> "Santa Maria",
                "estado"=> "RN"
            ],
            [
                "id"=> 1178,

                "nome"=> "Pau dos Ferros",
                "estado"=> "RN"
            ],
            [
                "id"=> 1179,

                "nome"=> "Pedra Grande",
                "estado"=> "RN"
            ],
            [
                "id"=> 1180,

                "nome"=> "Pedra Preta",
                "estado"=> "RN"
            ],
            [
                "id"=> 1181,

                "nome"=> "Pedro Avelino",
                "estado"=> "RN"
            ],
            [
                "id"=> 1182,

                "nome"=> "Pedro Velho",
                "estado"=> "RN"
            ],
            [
                "id"=> 1183,

                "nome"=> "Pendências",
                "estado"=> "RN"
            ],
            [
                "id"=> 1184,

                "nome"=> "Pilões",
                "estado"=> "RN"
            ],
            [
                "id"=> 1185,

                "nome"=> "Poço Branco",
                "estado"=> "RN"
            ],
            [
                "id"=> 1186,

                "nome"=> "Portalegre",
                "estado"=> "RN"
            ],
            [
                "id"=> 1187,

                "nome"=> "Porto do Mangue",
                "estado"=> "RN"
            ],
            [
                "id"=> 1188,

                "nome"=> "Presidente Juscelino",
                "estado"=> "RN"
            ],
            [
                "id"=> 1189,

                "nome"=> "Pureza",
                "estado"=> "RN"
            ],
            [
                "id"=> 1190,

                "nome"=> "Rafael Fernandes",
                "estado"=> "RN"
            ],
            [
                "id"=> 1191,

                "nome"=> "Rafael Godeiro",
                "estado"=> "RN"
            ],
            [
                "id"=> 1192,

                "nome"=> "Riacho da Cruz",
                "estado"=> "RN"
            ],
            [
                "id"=> 1193,

                "nome"=> "Riacho de Santana",
                "estado"=> "RN"
            ],
            [
                "id"=> 1194,

                "nome"=> "Riachuelo",
                "estado"=> "RN"
            ],
            [
                "id"=> 1195,

                "nome"=> "Rodolfo Fernandes",
                "estado"=> "RN"
            ],
            [
                "id"=> 1196,

                "nome"=> "Tibau",
                "estado"=> "RN"
            ],
            [
                "id"=> 1197,

                "nome"=> "Ruy Barbosa",
                "estado"=> "RN"
            ],
            [
                "id"=> 1198,

                "nome"=> "Santa Cruz",
                "estado"=> "RN"
            ],
            [
                "id"=> 1199,

                "nome"=> "Santana do Matos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1200,

                "nome"=> "Santana do Seridó",
                "estado"=> "RN"
            ],
            [
                "id"=> 1201,

                "nome"=> "Santo Antônio",
                "estado"=> "RN"
            ],
            [
                "id"=> 1202,

                "nome"=> "São Bento do Norte",
                "estado"=> "RN"
            ],
            [
                "id"=> 1203,

                "nome"=> "São Bento do Trairí",
                "estado"=> "RN"
            ],
            [
                "id"=> 1204,

                "nome"=> "São Fernando",
                "estado"=> "RN"
            ],
            [
                "id"=> 1205,

                "nome"=> "São Francisco do Oeste",
                "estado"=> "RN"
            ],
            [
                "id"=> 1206,

                "nome"=> "São Gonçalo do Amarante",
                "estado"=> "RN"
            ],
            [
                "id"=> 1207,

                "nome"=> "São João do Sabugi",
                "estado"=> "RN"
            ],
            [
                "id"=> 1208,

                "nome"=> "São José de Mipibu",
                "estado"=> "RN"
            ],
            [
                "id"=> 1209,

                "nome"=> "São José do Campestre",
                "estado"=> "RN"
            ],
            [
                "id"=> 1210,

                "nome"=> "São José do Seridó",
                "estado"=> "RN"
            ],
            [
                "id"=> 1211,

                "nome"=> "São Miguel",
                "estado"=> "RN"
            ],
            [
                "id"=> 1212,

                "nome"=> "São Miguel do Gostoso",
                "estado"=> "RN"
            ],
            [
                "id"=> 1213,

                "nome"=> "São Paulo do Potengi",
                "estado"=> "RN"
            ],
            [
                "id"=> 1214,

                "nome"=> "São Pedro",
                "estado"=> "RN"
            ],
            [
                "id"=> 1215,

                "nome"=> "São Rafael",
                "estado"=> "RN"
            ],
            [
                "id"=> 1216,

                "nome"=> "São Tomé",
                "estado"=> "RN"
            ],
            [
                "id"=> 1217,

                "nome"=> "São Vicente",
                "estado"=> "RN"
            ],
            [
                "id"=> 1218,

                "nome"=> "Senador Elói de Souza",
                "estado"=> "RN"
            ],
            [
                "id"=> 1219,

                "nome"=> "Senador Georgino Avelino",
                "estado"=> "RN"
            ],
            [
                "id"=> 1220,

                "nome"=> "Serra de São Bento",
                "estado"=> "RN"
            ],
            [
                "id"=> 1221,

                "nome"=> "Serra do Mel",
                "estado"=> "RN"
            ],
            [
                "id"=> 1222,

                "nome"=> "Serra Negra do Norte",
                "estado"=> "RN"
            ],
            [
                "id"=> 1223,

                "nome"=> "Serrinha",
                "estado"=> "RN"
            ],
            [
                "id"=> 1224,

                "nome"=> "Serrinha dos Pintos",
                "estado"=> "RN"
            ],
            [
                "id"=> 1225,

                "nome"=> "Severiano Melo",
                "estado"=> "RN"
            ],
            [
                "id"=> 1226,

                "nome"=> "Sítio Novo",
                "estado"=> "RN"
            ],
            [
                "id"=> 1227,

                "nome"=> "Taboleiro Grande",
                "estado"=> "RN"
            ],
            [
                "id"=> 1228,

                "nome"=> "Taipu",
                "estado"=> "RN"
            ],
            [
                "id"=> 1229,

                "nome"=> "Tangará",
                "estado"=> "RN"
            ],
            [
                "id"=> 1230,

                "nome"=> "Tenente Ananias",
                "estado"=> "RN"
            ],
            [
                "id"=> 1231,

                "nome"=> "Tenente Laurentino Cruz",
                "estado"=> "RN"
            ],
            [
                "id"=> 1232,

                "nome"=> "Tibau do Sul",
                "estado"=> "RN"
            ],
            [
                "id"=> 1233,

                "nome"=> "Timbaúba dos Batistas",
                "estado"=> "RN"
            ],
            [
                "id"=> 1234,

                "nome"=> "Touros",
                "estado"=> "RN"
            ],
            [
                "id"=> 1235,

                "nome"=> "Triunfo Potiguar",
                "estado"=> "RN"
            ],
            [
                "id"=> 1236,

                "nome"=> "Umarizal",
                "estado"=> "RN"
            ],
            [
                "id"=> 1237,

                "nome"=> "Upanema",
                "estado"=> "RN"
            ],
            [
                "id"=> 1238,

                "nome"=> "Várzea",
                "estado"=> "RN"
            ],
            [
                "id"=> 1239,

                "nome"=> "Venha-Ver",
                "estado"=> "RN"
            ],
            [
                "id"=> 1240,

                "nome"=> "Vera Cruz",
                "estado"=> "RN"
            ],
            [
                "id"=> 1241,

                "nome"=> "Viçosa",
                "estado"=> "RN"
            ],
            [
                "id"=> 1242,

                "nome"=> "Vila Flor",
                "estado"=> "RN"
            ],
            [
                "id"=> 1243,

                "nome"=> "Água Branca",
                "estado"=> "PB"
            ],
            [
                "id"=> 1244,

                "nome"=> "Aguiar",
                "estado"=> "PB"
            ],
            [
                "id"=> 1245,

                "nome"=> "Alagoa Grande",
                "estado"=> "PB"
            ],
            [
                "id"=> 1246,

                "nome"=> "Alagoa Nova",
                "estado"=> "PB"
            ],
            [
                "id"=> 1247,

                "nome"=> "Alagoinha",
                "estado"=> "PB"
            ],
            [
                "id"=> 1248,

                "nome"=> "Alcantil",
                "estado"=> "PB"
            ],
            [
                "id"=> 1249,

                "nome"=> "Algodão de Jandaíra",
                "estado"=> "PB"
            ],
            [
                "id"=> 1250,

                "nome"=> "Alhandra",
                "estado"=> "PB"
            ],
            [
                "id"=> 1251,

                "nome"=> "São João do Rio do Peixe",
                "estado"=> "PB"
            ],
            [
                "id"=> 1252,

                "nome"=> "Amparo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1253,

                "nome"=> "Aparecida",
                "estado"=> "PB"
            ],
            [
                "id"=> 1254,

                "nome"=> "Araçagi",
                "estado"=> "PB"
            ],
            [
                "id"=> 1255,

                "nome"=> "Arara",
                "estado"=> "PB"
            ],
            [
                "id"=> 1256,

                "nome"=> "Araruna",
                "estado"=> "PB"
            ],
            [
                "id"=> 1257,

                "nome"=> "Areia",
                "estado"=> "PB"
            ],
            [
                "id"=> 1258,

                "nome"=> "Areia de Baraúnas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1259,

                "nome"=> "Areial",
                "estado"=> "PB"
            ],
            [
                "id"=> 1260,

                "nome"=> "Aroeiras",
                "estado"=> "PB"
            ],
            [
                "id"=> 1261,

                "nome"=> "Assunção",
                "estado"=> "PB"
            ],
            [
                "id"=> 1262,

                "nome"=> "Baía da Traição",
                "estado"=> "PB"
            ],
            [
                "id"=> 1263,

                "nome"=> "Bananeiras",
                "estado"=> "PB"
            ],
            [
                "id"=> 1264,

                "nome"=> "Baraúna",
                "estado"=> "PB"
            ],
            [
                "id"=> 1265,

                "nome"=> "Barra de Santana",
                "estado"=> "PB"
            ],
            [
                "id"=> 1266,

                "nome"=> "Barra de Santa Rosa",
                "estado"=> "PB"
            ],
            [
                "id"=> 1267,

                "nome"=> "Barra de São Miguel",
                "estado"=> "PB"
            ],
            [
                "id"=> 1268,

                "nome"=> "Bayeux",
                "estado"=> "PB"
            ],
            [
                "id"=> 1269,

                "nome"=> "Belém",
                "estado"=> "PB"
            ],
            [
                "id"=> 1270,

                "nome"=> "Belém do Brejo do Cruz",
                "estado"=> "PB"
            ],
            [
                "id"=> 1271,

                "nome"=> "Bernardino Batista",
                "estado"=> "PB"
            ],
            [
                "id"=> 1272,

                "nome"=> "Boa Ventura",
                "estado"=> "PB"
            ],
            [
                "id"=> 1273,

                "nome"=> "Boa Vista",
                "estado"=> "PB"
            ],
            [
                "id"=> 1274,

                "nome"=> "Bom Jesus",
                "estado"=> "PB"
            ],
            [
                "id"=> 1275,

                "nome"=> "Bom Sucesso",
                "estado"=> "PB"
            ],
            [
                "id"=> 1276,

                "nome"=> "Bonito de Santa Fé",
                "estado"=> "PB"
            ],
            [
                "id"=> 1277,

                "nome"=> "Boqueirão",
                "estado"=> "PB"
            ],
            [
                "id"=> 1278,

                "nome"=> "Igaracy",
                "estado"=> "PB"
            ],
            [
                "id"=> 1279,

                "nome"=> "Borborema",
                "estado"=> "PB"
            ],
            [
                "id"=> 1280,

                "nome"=> "Brejo do Cruz",
                "estado"=> "PB"
            ],
            [
                "id"=> 1281,

                "nome"=> "Brejo dos Santos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1282,

                "nome"=> "Caaporã",
                "estado"=> "PB"
            ],
            [
                "id"=> 1283,

                "nome"=> "Cabaceiras",
                "estado"=> "PB"
            ],
            [
                "id"=> 1284,

                "nome"=> "Cabedelo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1285,

                "nome"=> "Cachoeira dos Índios",
                "estado"=> "PB"
            ],
            [
                "id"=> 1286,

                "nome"=> "Cacimba de Areia",
                "estado"=> "PB"
            ],
            [
                "id"=> 1287,

                "nome"=> "Cacimba de Dentro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1288,

                "nome"=> "Cacimbas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1289,

                "nome"=> "Caiçara",
                "estado"=> "PB"
            ],
            [
                "id"=> 1290,

                "nome"=> "Cajazeiras",
                "estado"=> "PB"
            ],
            [
                "id"=> 1291,

                "nome"=> "Cajazeirinhas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1292,

                "nome"=> "Caldas Brandão",
                "estado"=> "PB"
            ],
            [
                "id"=> 1293,

                "nome"=> "Camalaú",
                "estado"=> "PB"
            ],
            [
                "id"=> 1294,

                "nome"=> "Campina Grande",
                "estado"=> "PB"
            ],
            [
                "id"=> 1295,

                "nome"=> "Capim",
                "estado"=> "PB"
            ],
            [
                "id"=> 1296,

                "nome"=> "Caraúbas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1297,

                "nome"=> "Carrapateira",
                "estado"=> "PB"
            ],
            [
                "id"=> 1298,

                "nome"=> "Casserengue",
                "estado"=> "PB"
            ],
            [
                "id"=> 1299,

                "nome"=> "Catingueira",
                "estado"=> "PB"
            ],
            [
                "id"=> 1300,

                "nome"=> "Catolé do Rocha",
                "estado"=> "PB"
            ],
            [
                "id"=> 1301,

                "nome"=> "Caturité",
                "estado"=> "PB"
            ],
            [
                "id"=> 1302,

                "nome"=> "Conceição",
                "estado"=> "PB"
            ],
            [
                "id"=> 1303,

                "nome"=> "Condado",
                "estado"=> "PB"
            ],
            [
                "id"=> 1304,

                "nome"=> "Conde",
                "estado"=> "PB"
            ],
            [
                "id"=> 1305,

                "nome"=> "Congo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1306,

                "nome"=> "Coremas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1307,

                "nome"=> "Coxixola",
                "estado"=> "PB"
            ],
            [
                "id"=> 1308,

                "nome"=> "Cruz do Espírito Santo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1309,

                "nome"=> "Cubati",
                "estado"=> "PB"
            ],
            [
                "id"=> 1310,

                "nome"=> "Cuité",
                "estado"=> "PB"
            ],
            [
                "id"=> 1311,

                "nome"=> "Cuitegi",
                "estado"=> "PB"
            ],
            [
                "id"=> 1312,

                "nome"=> "Cuité de Mamanguape",
                "estado"=> "PB"
            ],
            [
                "id"=> 1313,

                "nome"=> "Curral de Cima",
                "estado"=> "PB"
            ],
            [
                "id"=> 1314,

                "nome"=> "Curral Velho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1315,

                "nome"=> "Damião",
                "estado"=> "PB"
            ],
            [
                "id"=> 1316,

                "nome"=> "Desterro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1317,

                "nome"=> "Vista Serrana",
                "estado"=> "PB"
            ],
            [
                "id"=> 1318,

                "nome"=> "Diamante",
                "estado"=> "PB"
            ],
            [
                "id"=> 1319,

                "nome"=> "Dona Inês",
                "estado"=> "PB"
            ],
            [
                "id"=> 1320,

                "nome"=> "Duas Estradas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1321,

                "nome"=> "Emas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1322,

                "nome"=> "Esperança",
                "estado"=> "PB"
            ],
            [
                "id"=> 1323,

                "nome"=> "Fagundes",
                "estado"=> "PB"
            ],
            [
                "id"=> 1324,

                "nome"=> "Frei Martinho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1325,

                "nome"=> "Gado Bravo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1326,

                "nome"=> "Guarabira",
                "estado"=> "PB"
            ],
            [
                "id"=> 1327,

                "nome"=> "Gurinhém",
                "estado"=> "PB"
            ],
            [
                "id"=> 1328,

                "nome"=> "Gurjão",
                "estado"=> "PB"
            ],
            [
                "id"=> 1329,

                "nome"=> "Ibiara",
                "estado"=> "PB"
            ],
            [
                "id"=> 1330,

                "nome"=> "Imaculada",
                "estado"=> "PB"
            ],
            [
                "id"=> 1331,

                "nome"=> "Ingá",
                "estado"=> "PB"
            ],
            [
                "id"=> 1332,

                "nome"=> "Itabaiana",
                "estado"=> "PB"
            ],
            [
                "id"=> 1333,

                "nome"=> "Itaporanga",
                "estado"=> "PB"
            ],
            [
                "id"=> 1334,

                "nome"=> "Itapororoca",
                "estado"=> "PB"
            ],
            [
                "id"=> 1335,

                "nome"=> "Itatuba",
                "estado"=> "PB"
            ],
            [
                "id"=> 1336,

                "nome"=> "Jacaraú",
                "estado"=> "PB"
            ],
            [
                "id"=> 1337,

                "nome"=> "Jericó",
                "estado"=> "PB"
            ],
            [
                "id"=> 1338,

                "nome"=> "João Pessoa",
                "estado"=> "PB"
            ],
            [
                "id"=> 1339,

                "nome"=> "Juarez Távora",
                "estado"=> "PB"
            ],
            [
                "id"=> 1340,

                "nome"=> "Juazeirinho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1341,

                "nome"=> "Junco do Seridó",
                "estado"=> "PB"
            ],
            [
                "id"=> 1342,

                "nome"=> "Juripiranga",
                "estado"=> "PB"
            ],
            [
                "id"=> 1343,

                "nome"=> "Juru",
                "estado"=> "PB"
            ],
            [
                "id"=> 1344,

                "nome"=> "Lagoa",
                "estado"=> "PB"
            ],
            [
                "id"=> 1345,

                "nome"=> "Lagoa de Dentro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1346,

                "nome"=> "Lagoa Seca",
                "estado"=> "PB"
            ],
            [
                "id"=> 1347,

                "nome"=> "Lastro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1348,

                "nome"=> "Livramento",
                "estado"=> "PB"
            ],
            [
                "id"=> 1349,

                "nome"=> "Logradouro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1350,

                "nome"=> "Lucena",
                "estado"=> "PB"
            ],
            [
                "id"=> 1351,

                "nome"=> "Mãe D'Água",
                "estado"=> "PB"
            ],
            [
                "id"=> 1352,

                "nome"=> "Malta",
                "estado"=> "PB"
            ],
            [
                "id"=> 1353,

                "nome"=> "Mamanguape",
                "estado"=> "PB"
            ],
            [
                "id"=> 1354,

                "nome"=> "Manaíra",
                "estado"=> "PB"
            ],
            [
                "id"=> 1355,

                "nome"=> "Marcação",
                "estado"=> "PB"
            ],
            [
                "id"=> 1356,

                "nome"=> "Mari",
                "estado"=> "PB"
            ],
            [
                "id"=> 1357,

                "nome"=> "Marizópolis",
                "estado"=> "PB"
            ],
            [
                "id"=> 1358,

                "nome"=> "Massaranduba",
                "estado"=> "PB"
            ],
            [
                "id"=> 1359,

                "nome"=> "Mataraca",
                "estado"=> "PB"
            ],
            [
                "id"=> 1360,

                "nome"=> "Matinhas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1361,

                "nome"=> "Mato Grosso",
                "estado"=> "PB"
            ],
            [
                "id"=> 1362,

                "nome"=> "Maturéia",
                "estado"=> "PB"
            ],
            [
                "id"=> 1363,

                "nome"=> "Mogeiro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1364,

                "nome"=> "Montadas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1365,

                "nome"=> "Monte Horebe",
                "estado"=> "PB"
            ],
            [
                "id"=> 1366,

                "nome"=> "Monteiro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1367,

                "nome"=> "Mulungu",
                "estado"=> "PB"
            ],
            [
                "id"=> 1368,

                "nome"=> "Natuba",
                "estado"=> "PB"
            ],
            [
                "id"=> 1369,

                "nome"=> "Nazarezinho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1370,

                "nome"=> "Nova Floresta",
                "estado"=> "PB"
            ],
            [
                "id"=> 1371,

                "nome"=> "Nova Olinda",
                "estado"=> "PB"
            ],
            [
                "id"=> 1372,

                "nome"=> "Nova Palmeira",
                "estado"=> "PB"
            ],
            [
                "id"=> 1373,

                "nome"=> "Olho D'Água",
                "estado"=> "PB"
            ],
            [
                "id"=> 1374,

                "nome"=> "Olivedos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1375,

                "nome"=> "Ouro Velho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1376,

                "nome"=> "Parari",
                "estado"=> "PB"
            ],
            [
                "id"=> 1377,

                "nome"=> "Passagem",
                "estado"=> "PB"
            ],
            [
                "id"=> 1378,

                "nome"=> "Patos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1379,

                "nome"=> "Paulista",
                "estado"=> "PB"
            ],
            [
                "id"=> 1380,

                "nome"=> "Pedra Branca",
                "estado"=> "PB"
            ],
            [
                "id"=> 1381,

                "nome"=> "Pedra Lavrada",
                "estado"=> "PB"
            ],
            [
                "id"=> 1382,

                "nome"=> "Pedras de Fogo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1383,

                "nome"=> "Piancó",
                "estado"=> "PB"
            ],
            [
                "id"=> 1384,

                "nome"=> "Picuí",
                "estado"=> "PB"
            ],
            [
                "id"=> 1385,

                "nome"=> "Pilar",
                "estado"=> "PB"
            ],
            [
                "id"=> 1386,

                "nome"=> "Pilões",
                "estado"=> "PB"
            ],
            [
                "id"=> 1387,

                "nome"=> "Pilõezinhos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1388,

                "nome"=> "Pirpirituba",
                "estado"=> "PB"
            ],
            [
                "id"=> 1389,

                "nome"=> "Pitimbu",
                "estado"=> "PB"
            ],
            [
                "id"=> 1390,

                "nome"=> "Pocinhos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1391,

                "nome"=> "Poço Dantas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1392,

                "nome"=> "Poço de José de Moura",
                "estado"=> "PB"
            ],
            [
                "id"=> 1393,

                "nome"=> "Pombal",
                "estado"=> "PB"
            ],
            [
                "id"=> 1394,

                "nome"=> "Prata",
                "estado"=> "PB"
            ],
            [
                "id"=> 1395,

                "nome"=> "Princesa Isabel",
                "estado"=> "PB"
            ],
            [
                "id"=> 1396,

                "nome"=> "Puxinanã",
                "estado"=> "PB"
            ],
            [
                "id"=> 1397,

                "nome"=> "Queimadas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1398,

                "nome"=> "Quixabá",
                "estado"=> "PB"
            ],
            [
                "id"=> 1399,

                "nome"=> "Remígio",
                "estado"=> "PB"
            ],
            [
                "id"=> 1400,

                "nome"=> "Pedro Régis",
                "estado"=> "PB"
            ],
            [
                "id"=> 1401,

                "nome"=> "Riachão",
                "estado"=> "PB"
            ],
            [
                "id"=> 1402,

                "nome"=> "Riachão do Bacamarte",
                "estado"=> "PB"
            ],
            [
                "id"=> 1403,

                "nome"=> "Riachão do Poço",
                "estado"=> "PB"
            ],
            [
                "id"=> 1404,

                "nome"=> "Riacho de Santo Antônio",
                "estado"=> "PB"
            ],
            [
                "id"=> 1405,

                "nome"=> "Riacho dos Cavalos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1406,

                "nome"=> "Rio Tinto",
                "estado"=> "PB"
            ],
            [
                "id"=> 1407,

                "nome"=> "Salgadinho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1408,

                "nome"=> "Salgado de São Félix",
                "estado"=> "PB"
            ],
            [
                "id"=> 1409,

                "nome"=> "Santa Cecília",
                "estado"=> "PB"
            ],
            [
                "id"=> 1410,

                "nome"=> "Santa Cruz",
                "estado"=> "PB"
            ],
            [
                "id"=> 1411,

                "nome"=> "Santa Helena",
                "estado"=> "PB"
            ],
            [
                "id"=> 1412,

                "nome"=> "Santa Inês",
                "estado"=> "PB"
            ],
            [
                "id"=> 1413,

                "nome"=> "Santa Luzia",
                "estado"=> "PB"
            ],
            [
                "id"=> 1414,

                "nome"=> "Santana de Mangueira",
                "estado"=> "PB"
            ],
            [
                "id"=> 1415,

                "nome"=> "Santana dos Garrotes",
                "estado"=> "PB"
            ],
            [
                "id"=> 1416,

                "nome"=> "Joca Claudino",
                "estado"=> "PB"
            ],
            [
                "id"=> 1417,

                "nome"=> "Santa Rita",
                "estado"=> "PB"
            ],
            [
                "id"=> 1418,

                "nome"=> "Santa Teresinha",
                "estado"=> "PB"
            ],
            [
                "id"=> 1419,

                "nome"=> "Santo André",
                "estado"=> "PB"
            ],
            [
                "id"=> 1420,

                "nome"=> "São Bento",
                "estado"=> "PB"
            ],
            [
                "id"=> 1421,

                "nome"=> "São Bentinho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1422,

                "nome"=> "São Domingos do Cariri",
                "estado"=> "PB"
            ],
            [
                "id"=> 1423,

                "nome"=> "São Domingos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1424,

                "nome"=> "São Francisco",
                "estado"=> "PB"
            ],
            [
                "id"=> 1425,

                "nome"=> "São João do Cariri",
                "estado"=> "PB"
            ],
            [
                "id"=> 1426,

                "nome"=> "São João do Tigre",
                "estado"=> "PB"
            ],
            [
                "id"=> 1427,

                "nome"=> "São José da Lagoa Tapada",
                "estado"=> "PB"
            ],
            [
                "id"=> 1428,

                "nome"=> "São José de Caiana",
                "estado"=> "PB"
            ],
            [
                "id"=> 1429,

                "nome"=> "São José de Espinharas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1430,

                "nome"=> "São José dos Ramos",
                "estado"=> "PB"
            ],
            [
                "id"=> 1431,

                "nome"=> "São José de Piranhas",
                "estado"=> "PB"
            ],
            [
                "id"=> 1432,

                "nome"=> "São José de Princesa",
                "estado"=> "PB"
            ],
            [
                "id"=> 1433,

                "nome"=> "São José do Bonfim",
                "estado"=> "PB"
            ],
            [
                "id"=> 1434,

                "nome"=> "São José do Brejo do Cruz",
                "estado"=> "PB"
            ],
            [
                "id"=> 1435,

                "nome"=> "São José do Sabugi",
                "estado"=> "PB"
            ],
            [
                "id"=> 1436,

                "nome"=> "São José dos Cordeiros",
                "estado"=> "PB"
            ],
            [
                "id"=> 1437,

                "nome"=> "São Mamede",
                "estado"=> "PB"
            ],
            [
                "id"=> 1438,

                "nome"=> "São Miguel de Taipu",
                "estado"=> "PB"
            ],
            [
                "id"=> 1439,

                "nome"=> "São Sebastião de Lagoa de Roça",
                "estado"=> "PB"
            ],
            [
                "id"=> 1440,

                "nome"=> "São Sebastião do Umbuzeiro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1441,

                "nome"=> "Sapé",
                "estado"=> "PB"
            ],
            [
                "id"=> 1442,

                "nome"=> "São Vicente do Seridó",
                "estado"=> "PB"
            ],
            [
                "id"=> 1443,

                "nome"=> "Serra Branca",
                "estado"=> "PB"
            ],
            [
                "id"=> 1444,

                "nome"=> "Serra da Raiz",
                "estado"=> "PB"
            ],
            [
                "id"=> 1445,

                "nome"=> "Serra Grande",
                "estado"=> "PB"
            ],
            [
                "id"=> 1446,

                "nome"=> "Serra Redonda",
                "estado"=> "PB"
            ],
            [
                "id"=> 1447,

                "nome"=> "Serraria",
                "estado"=> "PB"
            ],
            [
                "id"=> 1448,

                "nome"=> "Sertãozinho",
                "estado"=> "PB"
            ],
            [
                "id"=> 1449,

                "nome"=> "Sobrado",
                "estado"=> "PB"
            ],
            [
                "id"=> 1450,

                "nome"=> "Solânea",
                "estado"=> "PB"
            ],
            [
                "id"=> 1451,

                "nome"=> "Soledade",
                "estado"=> "PB"
            ],
            [
                "id"=> 1452,

                "nome"=> "Sossêgo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1453,

                "nome"=> "Sousa",
                "estado"=> "PB"
            ],
            [
                "id"=> 1454,

                "nome"=> "Sumé",
                "estado"=> "PB"
            ],
            [
                "id"=> 1455,

                "nome"=> "Tacima",
                "estado"=> "PB"
            ],
            [
                "id"=> 1456,

                "nome"=> "Taperoá",
                "estado"=> "PB"
            ],
            [
                "id"=> 1457,

                "nome"=> "Tavares",
                "estado"=> "PB"
            ],
            [
                "id"=> 1458,

                "nome"=> "Teixeira",
                "estado"=> "PB"
            ],
            [
                "id"=> 1459,

                "nome"=> "Tenório",
                "estado"=> "PB"
            ],
            [
                "id"=> 1460,

                "nome"=> "Triunfo",
                "estado"=> "PB"
            ],
            [
                "id"=> 1461,

                "nome"=> "Uiraúna",
                "estado"=> "PB"
            ],
            [
                "id"=> 1462,

                "nome"=> "Umbuzeiro",
                "estado"=> "PB"
            ],
            [
                "id"=> 1463,

                "nome"=> "Várzea",
                "estado"=> "PB"
            ],
            [
                "id"=> 1464,

                "nome"=> "Vieirópolis",
                "estado"=> "PB"
            ],
            [
                "id"=> 1465,

                "nome"=> "Zabelê",
                "estado"=> "PB"
            ],
            [
                "id"=> 1466,

                "nome"=> "Abreu e Lima",
                "estado"=> "PE"
            ],
            [
                "id"=> 1467,

                "nome"=> "Afogados da Ingazeira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1468,

                "nome"=> "Afrânio",
                "estado"=> "PE"
            ],
            [
                "id"=> 1469,

                "nome"=> "Agrestina",
                "estado"=> "PE"
            ],
            [
                "id"=> 1470,

                "nome"=> "Água Preta",
                "estado"=> "PE"
            ],
            [
                "id"=> 1471,

                "nome"=> "Águas Belas",
                "estado"=> "PE"
            ],
            [
                "id"=> 1472,

                "nome"=> "Alagoinha",
                "estado"=> "PE"
            ],
            [
                "id"=> 1473,

                "nome"=> "Aliança",
                "estado"=> "PE"
            ],
            [
                "id"=> 1474,

                "nome"=> "Altinho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1475,

                "nome"=> "Amaraji",
                "estado"=> "PE"
            ],
            [
                "id"=> 1476,

                "nome"=> "Angelim",
                "estado"=> "PE"
            ],
            [
                "id"=> 1477,

                "nome"=> "Araçoiaba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1478,

                "nome"=> "Araripina",
                "estado"=> "PE"
            ],
            [
                "id"=> 1479,

                "nome"=> "Arcoverde",
                "estado"=> "PE"
            ],
            [
                "id"=> 1480,

                "nome"=> "Barra de Guabiraba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1481,

                "nome"=> "Barreiros",
                "estado"=> "PE"
            ],
            [
                "id"=> 1482,

                "nome"=> "Belém de Maria",
                "estado"=> "PE"
            ],
            [
                "id"=> 1483,

                "nome"=> "Belém do São Francisco",
                "estado"=> "PE"
            ],
            [
                "id"=> 1484,

                "nome"=> "Belo Jardim",
                "estado"=> "PE"
            ],
            [
                "id"=> 1485,

                "nome"=> "Betânia",
                "estado"=> "PE"
            ],
            [
                "id"=> 1486,

                "nome"=> "Bezerros",
                "estado"=> "PE"
            ],
            [
                "id"=> 1487,

                "nome"=> "Bodocó",
                "estado"=> "PE"
            ],
            [
                "id"=> 1488,

                "nome"=> "Bom Conselho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1489,

                "nome"=> "Bom Jardim",
                "estado"=> "PE"
            ],
            [
                "id"=> 1490,

                "nome"=> "Bonito",
                "estado"=> "PE"
            ],
            [
                "id"=> 1491,

                "nome"=> "Brejão",
                "estado"=> "PE"
            ],
            [
                "id"=> 1492,

                "nome"=> "Brejinho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1493,

                "nome"=> "Brejo da Madre de Deus",
                "estado"=> "PE"
            ],
            [
                "id"=> 1494,

                "nome"=> "Buenos Aires",
                "estado"=> "PE"
            ],
            [
                "id"=> 1495,

                "nome"=> "Buíque",
                "estado"=> "PE"
            ],
            [
                "id"=> 1496,

                "nome"=> "Cabo de Santo Agostinho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1497,

                "nome"=> "Cabrobó",
                "estado"=> "PE"
            ],
            [
                "id"=> 1498,

                "nome"=> "Cachoeirinha",
                "estado"=> "PE"
            ],
            [
                "id"=> 1499,

                "nome"=> "Caetés",
                "estado"=> "PE"
            ],
            [
                "id"=> 1500,

                "nome"=> "Calçado",
                "estado"=> "PE"
            ],
            [
                "id"=> 1501,

                "nome"=> "Calumbi",
                "estado"=> "PE"
            ],
            [
                "id"=> 1502,

                "nome"=> "Camaragibe",
                "estado"=> "PE"
            ],
            [
                "id"=> 1503,

                "nome"=> "Camocim de São Félix",
                "estado"=> "PE"
            ],
            [
                "id"=> 1504,

                "nome"=> "Camutanga",
                "estado"=> "PE"
            ],
            [
                "id"=> 1505,

                "nome"=> "Canhotinho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1506,

                "nome"=> "Capoeiras",
                "estado"=> "PE"
            ],
            [
                "id"=> 1507,

                "nome"=> "Carnaíba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1508,

                "nome"=> "Carnaubeira da Penha",
                "estado"=> "PE"
            ],
            [
                "id"=> 1509,

                "nome"=> "Carpina",
                "estado"=> "PE"
            ],
            [
                "id"=> 1510,

                "nome"=> "Caruaru",
                "estado"=> "PE"
            ],
            [
                "id"=> 1511,

                "nome"=> "Casinhas",
                "estado"=> "PE"
            ],
            [
                "id"=> 1512,

                "nome"=> "Catende",
                "estado"=> "PE"
            ],
            [
                "id"=> 1513,

                "nome"=> "Cedro",
                "estado"=> "PE"
            ],
            [
                "id"=> 1514,

                "nome"=> "Chã de Alegria",
                "estado"=> "PE"
            ],
            [
                "id"=> 1515,

                "nome"=> "Chã Grande",
                "estado"=> "PE"
            ],
            [
                "id"=> 1516,

                "nome"=> "Condado",
                "estado"=> "PE"
            ],
            [
                "id"=> 1517,

                "nome"=> "Correntes",
                "estado"=> "PE"
            ],
            [
                "id"=> 1518,

                "nome"=> "Cortês",
                "estado"=> "PE"
            ],
            [
                "id"=> 1519,

                "nome"=> "Cumaru",
                "estado"=> "PE"
            ],
            [
                "id"=> 1520,

                "nome"=> "Cupira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1521,

                "nome"=> "Custódia",
                "estado"=> "PE"
            ],
            [
                "id"=> 1522,

                "nome"=> "Dormentes",
                "estado"=> "PE"
            ],
            [
                "id"=> 1523,

                "nome"=> "Escada",
                "estado"=> "PE"
            ],
            [
                "id"=> 1524,

                "nome"=> "Exu",
                "estado"=> "PE"
            ],
            [
                "id"=> 1525,

                "nome"=> "Feira Nova",
                "estado"=> "PE"
            ],
            [
                "id"=> 1526,

                "nome"=> "Fernando de Noronha",
                "estado"=> "PE"
            ],
            [
                "id"=> 1527,

                "nome"=> "Ferreiros",
                "estado"=> "PE"
            ],
            [
                "id"=> 1528,

                "nome"=> "Flores",
                "estado"=> "PE"
            ],
            [
                "id"=> 1529,

                "nome"=> "Floresta",
                "estado"=> "PE"
            ],
            [
                "id"=> 1530,

                "nome"=> "Frei Miguelinho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1531,

                "nome"=> "Gameleira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1532,

                "nome"=> "Garanhuns",
                "estado"=> "PE"
            ],
            [
                "id"=> 1533,

                "nome"=> "Glória do Goitá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1534,

                "nome"=> "Goiana",
                "estado"=> "PE"
            ],
            [
                "id"=> 1535,

                "nome"=> "Granito",
                "estado"=> "PE"
            ],
            [
                "id"=> 1536,

                "nome"=> "Gravatá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1537,

                "nome"=> "Iati",
                "estado"=> "PE"
            ],
            [
                "id"=> 1538,

                "nome"=> "Ibimirim",
                "estado"=> "PE"
            ],
            [
                "id"=> 1539,

                "nome"=> "Ibirajuba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1540,

                "nome"=> "Igarassu",
                "estado"=> "PE"
            ],
            [
                "id"=> 1541,

                "nome"=> "Iguaraci",
                "estado"=> "PE"
            ],
            [
                "id"=> 1542,

                "nome"=> "Inajá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1543,

                "nome"=> "Ingazeira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1544,

                "nome"=> "Ipojuca",
                "estado"=> "PE"
            ],
            [
                "id"=> 1545,

                "nome"=> "Ipubi",
                "estado"=> "PE"
            ],
            [
                "id"=> 1546,

                "nome"=> "Itacuruba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1547,

                "nome"=> "Itaíba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1548,

                "nome"=> "Ilha de Itamaracá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1549,

                "nome"=> "Itambé",
                "estado"=> "PE"
            ],
            [
                "id"=> 1550,

                "nome"=> "Itapetim",
                "estado"=> "PE"
            ],
            [
                "id"=> 1551,

                "nome"=> "Itapissuma",
                "estado"=> "PE"
            ],
            [
                "id"=> 1552,

                "nome"=> "Itaquitinga",
                "estado"=> "PE"
            ],
            [
                "id"=> 1553,

                "nome"=> "Jaboatão dos Guararapes",
                "estado"=> "PE"
            ],
            [
                "id"=> 1554,

                "nome"=> "Jaqueira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1555,

                "nome"=> "Jataúba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1556,

                "nome"=> "Jatobá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1557,

                "nome"=> "João Alfredo",
                "estado"=> "PE"
            ],
            [
                "id"=> 1558,

                "nome"=> "Joaquim Nabuco",
                "estado"=> "PE"
            ],
            [
                "id"=> 1559,

                "nome"=> "Jucati",
                "estado"=> "PE"
            ],
            [
                "id"=> 1560,

                "nome"=> "Jupi",
                "estado"=> "PE"
            ],
            [
                "id"=> 1561,

                "nome"=> "Jurema",
                "estado"=> "PE"
            ],
            [
                "id"=> 1562,

                "nome"=> "Lagoa do Carro",
                "estado"=> "PE"
            ],
            [
                "id"=> 1563,

                "nome"=> "Lagoa de Itaenga",
                "estado"=> "PE"
            ],
            [
                "id"=> 1564,

                "nome"=> "Lagoa do Ouro",
                "estado"=> "PE"
            ],
            [
                "id"=> 1565,

                "nome"=> "Lagoa dos Gatos",
                "estado"=> "PE"
            ],
            [
                "id"=> 1566,

                "nome"=> "Lagoa Grande",
                "estado"=> "PE"
            ],
            [
                "id"=> 1567,

                "nome"=> "Lajedo",
                "estado"=> "PE"
            ],
            [
                "id"=> 1568,

                "nome"=> "Limoeiro",
                "estado"=> "PE"
            ],
            [
                "id"=> 1569,

                "nome"=> "Macaparana",
                "estado"=> "PE"
            ],
            [
                "id"=> 1570,

                "nome"=> "Machados",
                "estado"=> "PE"
            ],
            [
                "id"=> 1571,

                "nome"=> "Manari",
                "estado"=> "PE"
            ],
            [
                "id"=> 1572,

                "nome"=> "Maraial",
                "estado"=> "PE"
            ],
            [
                "id"=> 1573,

                "nome"=> "Mirandiba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1574,

                "nome"=> "Moreno",
                "estado"=> "PE"
            ],
            [
                "id"=> 1575,

                "nome"=> "Nazaré da Mata",
                "estado"=> "PE"
            ],
            [
                "id"=> 1576,

                "nome"=> "Olinda",
                "estado"=> "PE"
            ],
            [
                "id"=> 1577,

                "nome"=> "Orobó",
                "estado"=> "PE"
            ],
            [
                "id"=> 1578,

                "nome"=> "Orocó",
                "estado"=> "PE"
            ],
            [
                "id"=> 1579,

                "nome"=> "Ouricuri",
                "estado"=> "PE"
            ],
            [
                "id"=> 1580,

                "nome"=> "Palmares",
                "estado"=> "PE"
            ],
            [
                "id"=> 1581,

                "nome"=> "Palmeirina",
                "estado"=> "PE"
            ],
            [
                "id"=> 1582,

                "nome"=> "Panelas",
                "estado"=> "PE"
            ],
            [
                "id"=> 1583,

                "nome"=> "Paranatama",
                "estado"=> "PE"
            ],
            [
                "id"=> 1584,

                "nome"=> "Parnamirim",
                "estado"=> "PE"
            ],
            [
                "id"=> 1585,

                "nome"=> "Passira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1586,

                "nome"=> "Paudalho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1587,

                "nome"=> "Paulista",
                "estado"=> "PE"
            ],
            [
                "id"=> 1588,

                "nome"=> "Pedra",
                "estado"=> "PE"
            ],
            [
                "id"=> 1589,

                "nome"=> "Pesqueira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1590,

                "nome"=> "Petrolândia",
                "estado"=> "PE"
            ],
            [
                "id"=> 1591,

                "nome"=> "Petrolina",
                "estado"=> "PE"
            ],
            [
                "id"=> 1592,

                "nome"=> "Poção",
                "estado"=> "PE"
            ],
            [
                "id"=> 1593,

                "nome"=> "Pombos",
                "estado"=> "PE"
            ],
            [
                "id"=> 1594,

                "nome"=> "Primavera",
                "estado"=> "PE"
            ],
            [
                "id"=> 1595,

                "nome"=> "Quipapá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1596,

                "nome"=> "Quixaba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1597,

                "nome"=> "Recife",
                "estado"=> "PE"
            ],
            [
                "id"=> 1598,

                "nome"=> "Riacho das Almas",
                "estado"=> "PE"
            ],
            [
                "id"=> 1599,

                "nome"=> "Ribeirão",
                "estado"=> "PE"
            ],
            [
                "id"=> 1600,

                "nome"=> "Rio Formoso",
                "estado"=> "PE"
            ],
            [
                "id"=> 1601,

                "nome"=> "Sairé",
                "estado"=> "PE"
            ],
            [
                "id"=> 1602,

                "nome"=> "Salgadinho",
                "estado"=> "PE"
            ],
            [
                "id"=> 1603,

                "nome"=> "Salgueiro",
                "estado"=> "PE"
            ],
            [
                "id"=> 1604,

                "nome"=> "Saloá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1605,

                "nome"=> "Sanharó",
                "estado"=> "PE"
            ],
            [
                "id"=> 1606,

                "nome"=> "Santa Cruz",
                "estado"=> "PE"
            ],
            [
                "id"=> 1607,

                "nome"=> "Santa Cruz da Baixa Verde",
                "estado"=> "PE"
            ],
            [
                "id"=> 1608,

                "nome"=> "Santa Cruz do Capibaribe",
                "estado"=> "PE"
            ],
            [
                "id"=> 1609,

                "nome"=> "Santa Filomena",
                "estado"=> "PE"
            ],
            [
                "id"=> 1610,

                "nome"=> "Santa Maria da Boa Vista",
                "estado"=> "PE"
            ],
            [
                "id"=> 1611,

                "nome"=> "Santa Maria do Cambucá",
                "estado"=> "PE"
            ],
            [
                "id"=> 1612,

                "nome"=> "Santa Terezinha",
                "estado"=> "PE"
            ],
            [
                "id"=> 1613,

                "nome"=> "São Benedito do Sul",
                "estado"=> "PE"
            ],
            [
                "id"=> 1614,

                "nome"=> "São Bento do Una",
                "estado"=> "PE"
            ],
            [
                "id"=> 1615,

                "nome"=> "São Caitano",
                "estado"=> "PE"
            ],
            [
                "id"=> 1616,

                "nome"=> "São João",
                "estado"=> "PE"
            ],
            [
                "id"=> 1617,

                "nome"=> "São Joaquim do Monte",
                "estado"=> "PE"
            ],
            [
                "id"=> 1618,

                "nome"=> "São José da Coroa Grande",
                "estado"=> "PE"
            ],
            [
                "id"=> 1619,

                "nome"=> "São José do Belmonte",
                "estado"=> "PE"
            ],
            [
                "id"=> 1620,

                "nome"=> "São José do Egito",
                "estado"=> "PE"
            ],
            [
                "id"=> 1621,

                "nome"=> "São Lourenço da Mata",
                "estado"=> "PE"
            ],
            [
                "id"=> 1622,

                "nome"=> "São Vicente Ferrer",
                "estado"=> "PE"
            ],
            [
                "id"=> 1623,

                "nome"=> "Serra Talhada",
                "estado"=> "PE"
            ],
            [
                "id"=> 1624,

                "nome"=> "Serrita",
                "estado"=> "PE"
            ],
            [
                "id"=> 1625,

                "nome"=> "Sertânia",
                "estado"=> "PE"
            ],
            [
                "id"=> 1626,

                "nome"=> "Sirinhaém",
                "estado"=> "PE"
            ],
            [
                "id"=> 1627,

                "nome"=> "Moreilândia",
                "estado"=> "PE"
            ],
            [
                "id"=> 1628,

                "nome"=> "Solidão",
                "estado"=> "PE"
            ],
            [
                "id"=> 1629,

                "nome"=> "Surubim",
                "estado"=> "PE"
            ],
            [
                "id"=> 1630,

                "nome"=> "Tabira",
                "estado"=> "PE"
            ],
            [
                "id"=> 1631,

                "nome"=> "Tacaimbó",
                "estado"=> "PE"
            ],
            [
                "id"=> 1632,

                "nome"=> "Tacaratu",
                "estado"=> "PE"
            ],
            [
                "id"=> 1633,

                "nome"=> "Tamandaré",
                "estado"=> "PE"
            ],
            [
                "id"=> 1634,

                "nome"=> "Taquaritinga do Norte",
                "estado"=> "PE"
            ],
            [
                "id"=> 1635,

                "nome"=> "Terezinha",
                "estado"=> "PE"
            ],
            [
                "id"=> 1636,

                "nome"=> "Terra Nova",
                "estado"=> "PE"
            ],
            [
                "id"=> 1637,

                "nome"=> "Timbaúba",
                "estado"=> "PE"
            ],
            [
                "id"=> 1638,

                "nome"=> "Toritama",
                "estado"=> "PE"
            ],
            [
                "id"=> 1639,

                "nome"=> "Tracunhaém",
                "estado"=> "PE"
            ],
            [
                "id"=> 1640,

                "nome"=> "Trindade",
                "estado"=> "PE"
            ],
            [
                "id"=> 1641,

                "nome"=> "Triunfo",
                "estado"=> "PE"
            ],
            [
                "id"=> 1642,

                "nome"=> "Tupanatinga",
                "estado"=> "PE"
            ],
            [
                "id"=> 1643,

                "nome"=> "Tuparetama",
                "estado"=> "PE"
            ],
            [
                "id"=> 1644,

                "nome"=> "Venturosa",
                "estado"=> "PE"
            ],
            [
                "id"=> 1645,

                "nome"=> "Verdejante",
                "estado"=> "PE"
            ],
            [
                "id"=> 1646,

                "nome"=> "Vertente do Lério",
                "estado"=> "PE"
            ],
            [
                "id"=> 1647,

                "nome"=> "Vertentes",
                "estado"=> "PE"
            ],
            [
                "id"=> 1648,

                "nome"=> "Vicência",
                "estado"=> "PE"
            ],
            [
                "id"=> 1649,

                "nome"=> "Vitória de Santo Antão",
                "estado"=> "PE"
            ],
            [
                "id"=> 1650,

                "nome"=> "Xexéu",
                "estado"=> "PE"
            ],
            [
                "id"=> 1651,

                "nome"=> "Água Branca",
                "estado"=> "AL"
            ],
            [
                "id"=> 1652,

                "nome"=> "Anadia",
                "estado"=> "AL"
            ],
            [
                "id"=> 1653,

                "nome"=> "Arapiraca",
                "estado"=> "AL"
            ],
            [
                "id"=> 1654,

                "nome"=> "Atalaia",
                "estado"=> "AL"
            ],
            [
                "id"=> 1655,

                "nome"=> "Barra de Santo Antônio",
                "estado"=> "AL"
            ],
            [
                "id"=> 1656,

                "nome"=> "Barra de São Miguel",
                "estado"=> "AL"
            ],
            [
                "id"=> 1657,

                "nome"=> "Batalha",
                "estado"=> "AL"
            ],
            [
                "id"=> 1658,

                "nome"=> "Belém",
                "estado"=> "AL"
            ],
            [
                "id"=> 1659,

                "nome"=> "Belo Monte",
                "estado"=> "AL"
            ],
            [
                "id"=> 1660,

                "nome"=> "Boca da Mata",
                "estado"=> "AL"
            ],
            [
                "id"=> 1661,

                "nome"=> "Branquinha",
                "estado"=> "AL"
            ],
            [
                "id"=> 1662,

                "nome"=> "Cacimbinhas",
                "estado"=> "AL"
            ],
            [
                "id"=> 1663,

                "nome"=> "Cajueiro",
                "estado"=> "AL"
            ],
            [
                "id"=> 1664,

                "nome"=> "Campestre",
                "estado"=> "AL"
            ],
            [
                "id"=> 1665,

                "nome"=> "Campo Alegre",
                "estado"=> "AL"
            ],
            [
                "id"=> 1666,

                "nome"=> "Campo Grande",
                "estado"=> "AL"
            ],
            [
                "id"=> 1667,

                "nome"=> "Canapi",
                "estado"=> "AL"
            ],
            [
                "id"=> 1668,

                "nome"=> "Capela",
                "estado"=> "AL"
            ],
            [
                "id"=> 1669,

                "nome"=> "Carneiros",
                "estado"=> "AL"
            ],
            [
                "id"=> 1670,

                "nome"=> "Chã Preta",
                "estado"=> "AL"
            ],
            [
                "id"=> 1671,

                "nome"=> "Coité do Nóia",
                "estado"=> "AL"
            ],
            [
                "id"=> 1672,

                "nome"=> "Colônia Leopoldina",
                "estado"=> "AL"
            ],
            [
                "id"=> 1673,

                "nome"=> "Coqueiro Seco",
                "estado"=> "AL"
            ],
            [
                "id"=> 1674,

                "nome"=> "Coruripe",
                "estado"=> "AL"
            ],
            [
                "id"=> 1675,

                "nome"=> "Craíbas",
                "estado"=> "AL"
            ],
            [
                "id"=> 1676,

                "nome"=> "Delmiro Gouveia",
                "estado"=> "AL"
            ],
            [
                "id"=> 1677,

                "nome"=> "Dois Riachos",
                "estado"=> "AL"
            ],
            [
                "id"=> 1678,

                "nome"=> "Estrela de Alagoas",
                "estado"=> "AL"
            ],
            [
                "id"=> 1679,

                "nome"=> "Feira Grande",
                "estado"=> "AL"
            ],
            [
                "id"=> 1680,

                "nome"=> "Feliz Deserto",
                "estado"=> "AL"
            ],
            [
                "id"=> 1681,

                "nome"=> "Flexeiras",
                "estado"=> "AL"
            ],
            [
                "id"=> 1682,

                "nome"=> "Girau do Ponciano",
                "estado"=> "AL"
            ],
            [
                "id"=> 1683,

                "nome"=> "Ibateguara",
                "estado"=> "AL"
            ],
            [
                "id"=> 1684,

                "nome"=> "Igaci",
                "estado"=> "AL"
            ],
            [
                "id"=> 1685,

                "nome"=> "Igreja Nova",
                "estado"=> "AL"
            ],
            [
                "id"=> 1686,

                "nome"=> "Inhapi",
                "estado"=> "AL"
            ],
            [
                "id"=> 1687,

                "nome"=> "Jacaré dos Homens",
                "estado"=> "AL"
            ],
            [
                "id"=> 1688,

                "nome"=> "Jacuípe",
                "estado"=> "AL"
            ],
            [
                "id"=> 1689,

                "nome"=> "Japaratinga",
                "estado"=> "AL"
            ],
            [
                "id"=> 1690,

                "nome"=> "Jaramataia",
                "estado"=> "AL"
            ],
            [
                "id"=> 1691,

                "nome"=> "Jequiá da Praia",
                "estado"=> "AL"
            ],
            [
                "id"=> 1692,

                "nome"=> "Joaquim Gomes",
                "estado"=> "AL"
            ],
            [
                "id"=> 1693,

                "nome"=> "Jundiá",
                "estado"=> "AL"
            ],
            [
                "id"=> 1694,

                "nome"=> "Junqueiro",
                "estado"=> "AL"
            ],
            [
                "id"=> 1695,

                "nome"=> "Lagoa da Canoa",
                "estado"=> "AL"
            ],
            [
                "id"=> 1696,

                "nome"=> "Limoeiro de Anadia",
                "estado"=> "AL"
            ],
            [
                "id"=> 1697,

                "nome"=> "Maceió",
                "estado"=> "AL"
            ],
            [
                "id"=> 1698,

                "nome"=> "Major Isidoro",
                "estado"=> "AL"
            ],
            [
                "id"=> 1699,

                "nome"=> "Maragogi",
                "estado"=> "AL"
            ],
            [
                "id"=> 1700,

                "nome"=> "Maravilha",
                "estado"=> "AL"
            ],
            [
                "id"=> 1701,

                "nome"=> "Marechal Deodoro",
                "estado"=> "AL"
            ],
            [
                "id"=> 1702,

                "nome"=> "Maribondo",
                "estado"=> "AL"
            ],
            [
                "id"=> 1703,

                "nome"=> "Mar Vermelho",
                "estado"=> "AL"
            ],
            [
                "id"=> 1704,

                "nome"=> "Mata Grande",
                "estado"=> "AL"
            ],
            [
                "id"=> 1705,

                "nome"=> "Matriz de Camaragibe",
                "estado"=> "AL"
            ],
            [
                "id"=> 1706,

                "nome"=> "Messias",
                "estado"=> "AL"
            ],
            [
                "id"=> 1707,

                "nome"=> "Minador do Negrão",
                "estado"=> "AL"
            ],
            [
                "id"=> 1708,

                "nome"=> "Monteirópolis",
                "estado"=> "AL"
            ],
            [
                "id"=> 1709,

                "nome"=> "Murici",
                "estado"=> "AL"
            ],
            [
                "id"=> 1710,

                "nome"=> "Novo Lino",
                "estado"=> "AL"
            ],
            [
                "id"=> 1711,

                "nome"=> "Olho D'Água das Flores",
                "estado"=> "AL"
            ],
            [
                "id"=> 1712,

                "nome"=> "Olho D'Água do Casado",
                "estado"=> "AL"
            ],
            [
                "id"=> 1713,

                "nome"=> "Olho D'Água Grande",
                "estado"=> "AL"
            ],
            [
                "id"=> 1714,

                "nome"=> "Olivença",
                "estado"=> "AL"
            ],
            [
                "id"=> 1715,

                "nome"=> "Ouro Branco",
                "estado"=> "AL"
            ],
            [
                "id"=> 1716,

                "nome"=> "Palestina",
                "estado"=> "AL"
            ],
            [
                "id"=> 1717,

                "nome"=> "Palmeira dos Índios",
                "estado"=> "AL"
            ],
            [
                "id"=> 1718,

                "nome"=> "Pão de Açúcar",
                "estado"=> "AL"
            ],
            [
                "id"=> 1719,

                "nome"=> "Pariconha",
                "estado"=> "AL"
            ],
            [
                "id"=> 1720,

                "nome"=> "Paripueira",
                "estado"=> "AL"
            ],
            [
                "id"=> 1721,

                "nome"=> "Passo de Camaragibe",
                "estado"=> "AL"
            ],
            [
                "id"=> 1722,

                "nome"=> "Paulo Jacinto",
                "estado"=> "AL"
            ],
            [
                "id"=> 1723,

                "nome"=> "Penedo",
                "estado"=> "AL"
            ],
            [
                "id"=> 1724,

                "nome"=> "Piaçabuçu",
                "estado"=> "AL"
            ],
            [
                "id"=> 1725,

                "nome"=> "Pilar",
                "estado"=> "AL"
            ],
            [
                "id"=> 1726,

                "nome"=> "Pindoba",
                "estado"=> "AL"
            ],
            [
                "id"=> 1727,

                "nome"=> "Piranhas",
                "estado"=> "AL"
            ],
            [
                "id"=> 1728,

                "nome"=> "Poço das Trincheiras",
                "estado"=> "AL"
            ],
            [
                "id"=> 1729,

                "nome"=> "Porto Calvo",
                "estado"=> "AL"
            ],
            [
                "id"=> 1730,

                "nome"=> "Porto de Pedras",
                "estado"=> "AL"
            ],
            [
                "id"=> 1731,

                "nome"=> "Porto Real do Colégio",
                "estado"=> "AL"
            ],
            [
                "id"=> 1732,

                "nome"=> "Quebrangulo",
                "estado"=> "AL"
            ],
            [
                "id"=> 1733,

                "nome"=> "Rio Largo",
                "estado"=> "AL"
            ],
            [
                "id"=> 1734,

                "nome"=> "Roteiro",
                "estado"=> "AL"
            ],
            [
                "id"=> 1735,

                "nome"=> "Santa Luzia do Norte",
                "estado"=> "AL"
            ],
            [
                "id"=> 1736,

                "nome"=> "Santana do Ipanema",
                "estado"=> "AL"
            ],
            [
                "id"=> 1737,

                "nome"=> "Santana do Mundaú",
                "estado"=> "AL"
            ],
            [
                "id"=> 1738,

                "nome"=> "São Brás",
                "estado"=> "AL"
            ],
            [
                "id"=> 1739,

                "nome"=> "São José da Laje",
                "estado"=> "AL"
            ],
            [
                "id"=> 1740,

                "nome"=> "São José da Tapera",
                "estado"=> "AL"
            ],
            [
                "id"=> 1741,

                "nome"=> "São Luís do Quitunde",
                "estado"=> "AL"
            ],
            [
                "id"=> 1742,

                "nome"=> "São Miguel dos Campos",
                "estado"=> "AL"
            ],
            [
                "id"=> 1743,

                "nome"=> "São Miguel dos Milagres",
                "estado"=> "AL"
            ],
            [
                "id"=> 1744,

                "nome"=> "São Sebastião",
                "estado"=> "AL"
            ],
            [
                "id"=> 1745,

                "nome"=> "Satuba",
                "estado"=> "AL"
            ],
            [
                "id"=> 1746,

                "nome"=> "Senador Rui Palmeira",
                "estado"=> "AL"
            ],
            [
                "id"=> 1747,

                "nome"=> "Tanque D'Arca",
                "estado"=> "AL"
            ],
            [
                "id"=> 1748,

                "nome"=> "Taquarana",
                "estado"=> "AL"
            ],
            [
                "id"=> 1749,

                "nome"=> "Teotônio Vilela",
                "estado"=> "AL"
            ],
            [
                "id"=> 1750,

                "nome"=> "Traipu",
                "estado"=> "AL"
            ],
            [
                "id"=> 1751,

                "nome"=> "União dos Palmares",
                "estado"=> "AL"
            ],
            [
                "id"=> 1752,

                "nome"=> "Viçosa",
                "estado"=> "AL"
            ],
            [
                "id"=> 1753,

                "nome"=> "Amparo de São Francisco",
                "estado"=> "SE"
            ],
            [
                "id"=> 1754,

                "nome"=> "Aquidabã",
                "estado"=> "SE"
            ],
            [
                "id"=> 1755,

                "nome"=> "Aracaju",
                "estado"=> "SE"
            ],
            [
                "id"=> 1756,

                "nome"=> "Arauá",
                "estado"=> "SE"
            ],
            [
                "id"=> 1757,

                "nome"=> "Areia Branca",
                "estado"=> "SE"
            ],
            [
                "id"=> 1758,

                "nome"=> "Barra dos Coqueiros",
                "estado"=> "SE"
            ],
            [
                "id"=> 1759,

                "nome"=> "Boquim",
                "estado"=> "SE"
            ],
            [
                "id"=> 1760,

                "nome"=> "Brejo Grande",
                "estado"=> "SE"
            ],
            [
                "id"=> 1761,

                "nome"=> "Campo do Brito",
                "estado"=> "SE"
            ],
            [
                "id"=> 1762,

                "nome"=> "Canhoba",
                "estado"=> "SE"
            ],
            [
                "id"=> 1763,

                "nome"=> "Canindé de São Francisco",
                "estado"=> "SE"
            ],
            [
                "id"=> 1764,

                "nome"=> "Capela",
                "estado"=> "SE"
            ],
            [
                "id"=> 1765,

                "nome"=> "Carira",
                "estado"=> "SE"
            ],
            [
                "id"=> 1766,

                "nome"=> "Carmópolis",
                "estado"=> "SE"
            ],
            [
                "id"=> 1767,

                "nome"=> "Cedro de São João",
                "estado"=> "SE"
            ],
            [
                "id"=> 1768,

                "nome"=> "Cristinápolis",
                "estado"=> "SE"
            ],
            [
                "id"=> 1769,

                "nome"=> "Cumbe",
                "estado"=> "SE"
            ],
            [
                "id"=> 1770,

                "nome"=> "Divina Pastora",
                "estado"=> "SE"
            ],
            [
                "id"=> 1771,

                "nome"=> "Estância",
                "estado"=> "SE"
            ],
            [
                "id"=> 1772,

                "nome"=> "Feira Nova",
                "estado"=> "SE"
            ],
            [
                "id"=> 1773,

                "nome"=> "Frei Paulo",
                "estado"=> "SE"
            ],
            [
                "id"=> 1774,

                "nome"=> "Gararu",
                "estado"=> "SE"
            ],
            [
                "id"=> 1775,

                "nome"=> "General Maynard",
                "estado"=> "SE"
            ],
            [
                "id"=> 1776,

                "nome"=> "Gracho Cardoso",
                "estado"=> "SE"
            ],
            [
                "id"=> 1777,

                "nome"=> "Ilha das Flores",
                "estado"=> "SE"
            ],
            [
                "id"=> 1778,

                "nome"=> "Indiaroba",
                "estado"=> "SE"
            ],
            [
                "id"=> 1779,

                "nome"=> "Itabaiana",
                "estado"=> "SE"
            ],
            [
                "id"=> 1780,

                "nome"=> "Itabaianinha",
                "estado"=> "SE"
            ],
            [
                "id"=> 1781,

                "nome"=> "Itabi",
                "estado"=> "SE"
            ],
            [
                "id"=> 1782,

                "nome"=> "Itaporanga D'Ajuda",
                "estado"=> "SE"
            ],
            [
                "id"=> 1783,

                "nome"=> "Japaratuba",
                "estado"=> "SE"
            ],
            [
                "id"=> 1784,

                "nome"=> "Japoatã",
                "estado"=> "SE"
            ],
            [
                "id"=> 1785,

                "nome"=> "Lagarto",
                "estado"=> "SE"
            ],
            [
                "id"=> 1786,

                "nome"=> "Laranjeiras",
                "estado"=> "SE"
            ],
            [
                "id"=> 1787,

                "nome"=> "Macambira",
                "estado"=> "SE"
            ],
            [
                "id"=> 1788,

                "nome"=> "Malhada dos Bois",
                "estado"=> "SE"
            ],
            [
                "id"=> 1789,

                "nome"=> "Malhador",
                "estado"=> "SE"
            ],
            [
                "id"=> 1790,

                "nome"=> "Maruim",
                "estado"=> "SE"
            ],
            [
                "id"=> 1791,

                "nome"=> "Moita Bonita",
                "estado"=> "SE"
            ],
            [
                "id"=> 1792,

                "nome"=> "Monte Alegre de Sergipe",
                "estado"=> "SE"
            ],
            [
                "id"=> 1793,

                "nome"=> "Muribeca",
                "estado"=> "SE"
            ],
            [
                "id"=> 1794,

                "nome"=> "Neópolis",
                "estado"=> "SE"
            ],
            [
                "id"=> 1795,

                "nome"=> "Nossa Senhora Aparecida",
                "estado"=> "SE"
            ],
            [
                "id"=> 1796,

                "nome"=> "Nossa Senhora da Glória",
                "estado"=> "SE"
            ],
            [
                "id"=> 1797,

                "nome"=> "Nossa Senhora das Dores",
                "estado"=> "SE"
            ],
            [
                "id"=> 1798,

                "nome"=> "Nossa Senhora de Lourdes",
                "estado"=> "SE"
            ],
            [
                "id"=> 1799,

                "nome"=> "Nossa Senhora do Socorro",
                "estado"=> "SE"
            ],
            [
                "id"=> 1800,

                "nome"=> "Pacatuba",
                "estado"=> "SE"
            ],
            [
                "id"=> 1801,

                "nome"=> "Pedra Mole",
                "estado"=> "SE"
            ],
            [
                "id"=> 1802,

                "nome"=> "Pedrinhas",
                "estado"=> "SE"
            ],
            [
                "id"=> 1803,

                "nome"=> "Pinhão",
                "estado"=> "SE"
            ],
            [
                "id"=> 1804,

                "nome"=> "Pirambu",
                "estado"=> "SE"
            ],
            [
                "id"=> 1805,

                "nome"=> "Poço Redondo",
                "estado"=> "SE"
            ],
            [
                "id"=> 1806,

                "nome"=> "Poço Verde",
                "estado"=> "SE"
            ],
            [
                "id"=> 1807,

                "nome"=> "Porto da Folha",
                "estado"=> "SE"
            ],
            [
                "id"=> 1808,

                "nome"=> "Propriá",
                "estado"=> "SE"
            ],
            [
                "id"=> 1809,

                "nome"=> "Riachão do Dantas",
                "estado"=> "SE"
            ],
            [
                "id"=> 1810,

                "nome"=> "Riachuelo",
                "estado"=> "SE"
            ],
            [
                "id"=> 1811,

                "nome"=> "Ribeirópolis",
                "estado"=> "SE"
            ],
            [
                "id"=> 1812,

                "nome"=> "Rosário do Catete",
                "estado"=> "SE"
            ],
            [
                "id"=> 1813,

                "nome"=> "Salgado",
                "estado"=> "SE"
            ],
            [
                "id"=> 1814,

                "nome"=> "Santa Luzia do Itanhy",
                "estado"=> "SE"
            ],
            [
                "id"=> 1815,

                "nome"=> "Santana do São Francisco",
                "estado"=> "SE"
            ],
            [
                "id"=> 1816,

                "nome"=> "Santa Rosa de Lima",
                "estado"=> "SE"
            ],
            [
                "id"=> 1817,

                "nome"=> "Santo Amaro das Brotas",
                "estado"=> "SE"
            ],
            [
                "id"=> 1818,

                "nome"=> "São Cristóvão",
                "estado"=> "SE"
            ],
            [
                "id"=> 1819,

                "nome"=> "São Domingos",
                "estado"=> "SE"
            ],
            [
                "id"=> 1820,

                "nome"=> "São Francisco",
                "estado"=> "SE"
            ],
            [
                "id"=> 1821,

                "nome"=> "São Miguel do Aleixo",
                "estado"=> "SE"
            ],
            [
                "id"=> 1822,

                "nome"=> "Simão Dias",
                "estado"=> "SE"
            ],
            [
                "id"=> 1823,

                "nome"=> "Siriri",
                "estado"=> "SE"
            ],
            [
                "id"=> 1824,

                "nome"=> "Telha",
                "estado"=> "SE"
            ],
            [
                "id"=> 1825,

                "nome"=> "Tobias Barreto",
                "estado"=> "SE"
            ],
            [
                "id"=> 1826,

                "nome"=> "Tomar do Geru",
                "estado"=> "SE"
            ],
            [
                "id"=> 1827,

                "nome"=> "Umbaúba",
                "estado"=> "SE"
            ],
            [
                "id"=> 1828,

                "nome"=> "Abaíra",
                "estado"=> "BA"
            ],
            [
                "id"=> 1829,

                "nome"=> "Abaré",
                "estado"=> "BA"
            ],
            [
                "id"=> 1830,

                "nome"=> "Acajutiba",
                "estado"=> "BA"
            ],
            [
                "id"=> 1831,

                "nome"=> "Adustina",
                "estado"=> "BA"
            ],
            [
                "id"=> 1832,

                "nome"=> "Água Fria",
                "estado"=> "BA"
            ],
            [
                "id"=> 1833,

                "nome"=> "Érico Cardoso",
                "estado"=> "BA"
            ],
            [
                "id"=> 1834,

                "nome"=> "Aiquara",
                "estado"=> "BA"
            ],
            [
                "id"=> 1835,

                "nome"=> "Alagoinhas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1836,

                "nome"=> "Alcobaça",
                "estado"=> "BA"
            ],
            [
                "id"=> 1837,

                "nome"=> "Almadina",
                "estado"=> "BA"
            ],
            [
                "id"=> 1838,

                "nome"=> "Amargosa",
                "estado"=> "BA"
            ],
            [
                "id"=> 1839,

                "nome"=> "Amélia Rodrigues",
                "estado"=> "BA"
            ],
            [
                "id"=> 1840,

                "nome"=> "América Dourada",
                "estado"=> "BA"
            ],
            [
                "id"=> 1841,

                "nome"=> "Anagé",
                "estado"=> "BA"
            ],
            [
                "id"=> 1842,

                "nome"=> "Andaraí",
                "estado"=> "BA"
            ],
            [
                "id"=> 1843,

                "nome"=> "Andorinha",
                "estado"=> "BA"
            ],
            [
                "id"=> 1844,

                "nome"=> "Angical",
                "estado"=> "BA"
            ],
            [
                "id"=> 1845,

                "nome"=> "Anguera",
                "estado"=> "BA"
            ],
            [
                "id"=> 1846,

                "nome"=> "Antas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1847,

                "nome"=> "Antônio Cardoso",
                "estado"=> "BA"
            ],
            [
                "id"=> 1848,

                "nome"=> "Antônio Gonçalves",
                "estado"=> "BA"
            ],
            [
                "id"=> 1849,

                "nome"=> "Aporá",
                "estado"=> "BA"
            ],
            [
                "id"=> 1850,

                "nome"=> "Apuarema",
                "estado"=> "BA"
            ],
            [
                "id"=> 1851,

                "nome"=> "Aracatu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1852,

                "nome"=> "Araças",
                "estado"=> "BA"
            ],
            [
                "id"=> 1853,

                "nome"=> "Araci",
                "estado"=> "BA"
            ],
            [
                "id"=> 1854,

                "nome"=> "Aramari",
                "estado"=> "BA"
            ],
            [
                "id"=> 1855,

                "nome"=> "Arataca",
                "estado"=> "BA"
            ],
            [
                "id"=> 1856,

                "nome"=> "Aratuípe",
                "estado"=> "BA"
            ],
            [
                "id"=> 1857,

                "nome"=> "Aurelino Leal",
                "estado"=> "BA"
            ],
            [
                "id"=> 1858,

                "nome"=> "Baianópolis",
                "estado"=> "BA"
            ],
            [
                "id"=> 1859,

                "nome"=> "Baixa Grande",
                "estado"=> "BA"
            ],
            [
                "id"=> 1860,

                "nome"=> "Banzaê",
                "estado"=> "BA"
            ],
            [
                "id"=> 1861,

                "nome"=> "Barra",
                "estado"=> "BA"
            ],
            [
                "id"=> 1862,

                "nome"=> "Barra da Estiva",
                "estado"=> "BA"
            ],
            [
                "id"=> 1863,

                "nome"=> "Barra do Choça",
                "estado"=> "BA"
            ],
            [
                "id"=> 1864,

                "nome"=> "Barra do Mendes",
                "estado"=> "BA"
            ],
            [
                "id"=> 1865,

                "nome"=> "Barra do Rocha",
                "estado"=> "BA"
            ],
            [
                "id"=> 1866,

                "nome"=> "Barreiras",
                "estado"=> "BA"
            ],
            [
                "id"=> 1867,

                "nome"=> "Barro Alto",
                "estado"=> "BA"
            ],
            [
                "id"=> 1868,

                "nome"=> "Barrocas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1869,

                "nome"=> "Barro Preto",
                "estado"=> "BA"
            ],
            [
                "id"=> 1870,

                "nome"=> "Belmonte",
                "estado"=> "BA"
            ],
            [
                "id"=> 1871,

                "nome"=> "Belo Campo",
                "estado"=> "BA"
            ],
            [
                "id"=> 1872,

                "nome"=> "Biritinga",
                "estado"=> "BA"
            ],
            [
                "id"=> 1873,

                "nome"=> "Boa Nova",
                "estado"=> "BA"
            ],
            [
                "id"=> 1874,

                "nome"=> "Boa Vista do Tupim",
                "estado"=> "BA"
            ],
            [
                "id"=> 1875,

                "nome"=> "Bom Jesus da Lapa",
                "estado"=> "BA"
            ],
            [
                "id"=> 1876,

                "nome"=> "Bom Jesus da Serra",
                "estado"=> "BA"
            ],
            [
                "id"=> 1877,

                "nome"=> "Boninal",
                "estado"=> "BA"
            ],
            [
                "id"=> 1878,

                "nome"=> "Bonito",
                "estado"=> "BA"
            ],
            [
                "id"=> 1879,

                "nome"=> "Boquira",
                "estado"=> "BA"
            ],
            [
                "id"=> 1880,

                "nome"=> "Botuporã",
                "estado"=> "BA"
            ],
            [
                "id"=> 1881,

                "nome"=> "Brejões",
                "estado"=> "BA"
            ],
            [
                "id"=> 1882,

                "nome"=> "Brejolândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 1883,

                "nome"=> "Brotas de Macaúbas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1884,

                "nome"=> "Brumado",
                "estado"=> "BA"
            ],
            [
                "id"=> 1885,

                "nome"=> "Buerarema",
                "estado"=> "BA"
            ],
            [
                "id"=> 1886,

                "nome"=> "Buritirama",
                "estado"=> "BA"
            ],
            [
                "id"=> 1887,

                "nome"=> "Caatiba",
                "estado"=> "BA"
            ],
            [
                "id"=> 1888,

                "nome"=> "Cabaceiras do Paraguaçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1889,

                "nome"=> "Cachoeira",
                "estado"=> "BA"
            ],
            [
                "id"=> 1890,

                "nome"=> "Caculé",
                "estado"=> "BA"
            ],
            [
                "id"=> 1891,

                "nome"=> "Caém",
                "estado"=> "BA"
            ],
            [
                "id"=> 1892,

                "nome"=> "Caetanos",
                "estado"=> "BA"
            ],
            [
                "id"=> 1893,

                "nome"=> "Caetité",
                "estado"=> "BA"
            ],
            [
                "id"=> 1894,

                "nome"=> "Cafarnaum",
                "estado"=> "BA"
            ],
            [
                "id"=> 1895,

                "nome"=> "Cairu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1896,

                "nome"=> "Caldeirão Grande",
                "estado"=> "BA"
            ],
            [
                "id"=> 1897,

                "nome"=> "Camacan",
                "estado"=> "BA"
            ],
            [
                "id"=> 1898,

                "nome"=> "Camaçari",
                "estado"=> "BA"
            ],
            [
                "id"=> 1899,

                "nome"=> "Camamu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1900,

                "nome"=> "Campo Alegre de Lourdes",
                "estado"=> "BA"
            ],
            [
                "id"=> 1901,

                "nome"=> "Campo Formoso",
                "estado"=> "BA"
            ],
            [
                "id"=> 1902,

                "nome"=> "Canápolis",
                "estado"=> "BA"
            ],
            [
                "id"=> 1903,

                "nome"=> "Canarana",
                "estado"=> "BA"
            ],
            [
                "id"=> 1904,

                "nome"=> "Canavieiras",
                "estado"=> "BA"
            ],
            [
                "id"=> 1905,

                "nome"=> "Candeal",
                "estado"=> "BA"
            ],
            [
                "id"=> 1906,

                "nome"=> "Candeias",
                "estado"=> "BA"
            ],
            [
                "id"=> 1907,

                "nome"=> "Candiba",
                "estado"=> "BA"
            ],
            [
                "id"=> 1908,

                "nome"=> "Cândido Sales",
                "estado"=> "BA"
            ],
            [
                "id"=> 1909,

                "nome"=> "Cansanção",
                "estado"=> "BA"
            ],
            [
                "id"=> 1910,

                "nome"=> "Canudos",
                "estado"=> "BA"
            ],
            [
                "id"=> 1911,

                "nome"=> "Capela do Alto Alegre",
                "estado"=> "BA"
            ],
            [
                "id"=> 1912,

                "nome"=> "Capim Grosso",
                "estado"=> "BA"
            ],
            [
                "id"=> 1913,

                "nome"=> "Caraíbas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1914,

                "nome"=> "Caravelas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1915,

                "nome"=> "Cardeal da Silva",
                "estado"=> "BA"
            ],
            [
                "id"=> 1916,

                "nome"=> "Carinhanha",
                "estado"=> "BA"
            ],
            [
                "id"=> 1917,

                "nome"=> "Casa Nova",
                "estado"=> "BA"
            ],
            [
                "id"=> 1918,

                "nome"=> "Castro Alves",
                "estado"=> "BA"
            ],
            [
                "id"=> 1919,

                "nome"=> "Catolândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 1920,

                "nome"=> "Catu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1921,

                "nome"=> "Caturama",
                "estado"=> "BA"
            ],
            [
                "id"=> 1922,

                "nome"=> "Central",
                "estado"=> "BA"
            ],
            [
                "id"=> 1923,

                "nome"=> "Chorrochó",
                "estado"=> "BA"
            ],
            [
                "id"=> 1924,

                "nome"=> "Cícero Dantas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1925,

                "nome"=> "Cipó",
                "estado"=> "BA"
            ],
            [
                "id"=> 1926,

                "nome"=> "Coaraci",
                "estado"=> "BA"
            ],
            [
                "id"=> 1927,

                "nome"=> "Cocos",
                "estado"=> "BA"
            ],
            [
                "id"=> 1928,

                "nome"=> "Conceição da Feira",
                "estado"=> "BA"
            ],
            [
                "id"=> 1929,

                "nome"=> "Conceição do Almeida",
                "estado"=> "BA"
            ],
            [
                "id"=> 1930,

                "nome"=> "Conceição do Coité",
                "estado"=> "BA"
            ],
            [
                "id"=> 1931,

                "nome"=> "Conceição do Jacuípe",
                "estado"=> "BA"
            ],
            [
                "id"=> 1932,

                "nome"=> "Conde",
                "estado"=> "BA"
            ],
            [
                "id"=> 1933,

                "nome"=> "Condeúba",
                "estado"=> "BA"
            ],
            [
                "id"=> 1934,

                "nome"=> "Contendas do Sincorá",
                "estado"=> "BA"
            ],
            [
                "id"=> 1935,

                "nome"=> "Coração de Maria",
                "estado"=> "BA"
            ],
            [
                "id"=> 1936,

                "nome"=> "Cordeiros",
                "estado"=> "BA"
            ],
            [
                "id"=> 1937,

                "nome"=> "Coribe",
                "estado"=> "BA"
            ],
            [
                "id"=> 1938,

                "nome"=> "Coronel João Sá",
                "estado"=> "BA"
            ],
            [
                "id"=> 1939,

                "nome"=> "Correntina",
                "estado"=> "BA"
            ],
            [
                "id"=> 1940,

                "nome"=> "Cotegipe",
                "estado"=> "BA"
            ],
            [
                "id"=> 1941,

                "nome"=> "Cravolândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 1942,

                "nome"=> "Crisópolis",
                "estado"=> "BA"
            ],
            [
                "id"=> 1943,

                "nome"=> "Cristópolis",
                "estado"=> "BA"
            ],
            [
                "id"=> 1944,

                "nome"=> "Cruz das Almas",
                "estado"=> "BA"
            ],
            [
                "id"=> 1945,

                "nome"=> "Curaçá",
                "estado"=> "BA"
            ],
            [
                "id"=> 1946,

                "nome"=> "Dário Meira",
                "estado"=> "BA"
            ],
            [
                "id"=> 1947,

                "nome"=> "Dias D'Ávila",
                "estado"=> "BA"
            ],
            [
                "id"=> 1948,

                "nome"=> "Dom Basílio",
                "estado"=> "BA"
            ],
            [
                "id"=> 1949,

                "nome"=> "Dom Macedo Costa",
                "estado"=> "BA"
            ],
            [
                "id"=> 1950,

                "nome"=> "Elísio Medrado",
                "estado"=> "BA"
            ],
            [
                "id"=> 1951,

                "nome"=> "Encruzilhada",
                "estado"=> "BA"
            ],
            [
                "id"=> 1952,

                "nome"=> "Entre Rios",
                "estado"=> "BA"
            ],
            [
                "id"=> 1953,

                "nome"=> "Esplanada",
                "estado"=> "BA"
            ],
            [
                "id"=> 1954,

                "nome"=> "Euclides da Cunha",
                "estado"=> "BA"
            ],
            [
                "id"=> 1955,

                "nome"=> "Eunápolis",
                "estado"=> "BA"
            ],
            [
                "id"=> 1956,

                "nome"=> "Fátima",
                "estado"=> "BA"
            ],
            [
                "id"=> 1957,

                "nome"=> "Feira da Mata",
                "estado"=> "BA"
            ],
            [
                "id"=> 1958,

                "nome"=> "Feira de Santana",
                "estado"=> "BA"
            ],
            [
                "id"=> 1959,

                "nome"=> "Filadélfia",
                "estado"=> "BA"
            ],
            [
                "id"=> 1960,

                "nome"=> "Firmino Alves",
                "estado"=> "BA"
            ],
            [
                "id"=> 1961,

                "nome"=> "Floresta Azul",
                "estado"=> "BA"
            ],
            [
                "id"=> 1962,

                "nome"=> "Formosa do Rio Preto",
                "estado"=> "BA"
            ],
            [
                "id"=> 1963,

                "nome"=> "Gandu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1964,

                "nome"=> "Gavião",
                "estado"=> "BA"
            ],
            [
                "id"=> 1965,

                "nome"=> "Gentio do Ouro",
                "estado"=> "BA"
            ],
            [
                "id"=> 1966,

                "nome"=> "Glória",
                "estado"=> "BA"
            ],
            [
                "id"=> 1967,

                "nome"=> "Gongogi",
                "estado"=> "BA"
            ],
            [
                "id"=> 1968,

                "nome"=> "Governador Mangabeira",
                "estado"=> "BA"
            ],
            [
                "id"=> 1969,

                "nome"=> "Guajeru",
                "estado"=> "BA"
            ],
            [
                "id"=> 1970,

                "nome"=> "Guanambi",
                "estado"=> "BA"
            ],
            [
                "id"=> 1971,

                "nome"=> "Guaratinga",
                "estado"=> "BA"
            ],
            [
                "id"=> 1972,

                "nome"=> "Heliópolis",
                "estado"=> "BA"
            ],
            [
                "id"=> 1973,

                "nome"=> "Iaçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1974,

                "nome"=> "Ibiassucê",
                "estado"=> "BA"
            ],
            [
                "id"=> 1975,

                "nome"=> "Ibicaraí",
                "estado"=> "BA"
            ],
            [
                "id"=> 1976,

                "nome"=> "Ibicoara",
                "estado"=> "BA"
            ],
            [
                "id"=> 1977,

                "nome"=> "Ibicuí",
                "estado"=> "BA"
            ],
            [
                "id"=> 1978,

                "nome"=> "Ibipeba",
                "estado"=> "BA"
            ],
            [
                "id"=> 1979,

                "nome"=> "Ibipitanga",
                "estado"=> "BA"
            ],
            [
                "id"=> 1980,

                "nome"=> "Ibiquera",
                "estado"=> "BA"
            ],
            [
                "id"=> 1981,

                "nome"=> "Ibirapitanga",
                "estado"=> "BA"
            ],
            [
                "id"=> 1982,

                "nome"=> "Ibirapuã",
                "estado"=> "BA"
            ],
            [
                "id"=> 1983,

                "nome"=> "Ibirataia",
                "estado"=> "BA"
            ],
            [
                "id"=> 1984,

                "nome"=> "Ibitiara",
                "estado"=> "BA"
            ],
            [
                "id"=> 1985,

                "nome"=> "Ibititá",
                "estado"=> "BA"
            ],
            [
                "id"=> 1986,

                "nome"=> "Ibotirama",
                "estado"=> "BA"
            ],
            [
                "id"=> 1987,

                "nome"=> "Ichu",
                "estado"=> "BA"
            ],
            [
                "id"=> 1988,

                "nome"=> "Igaporã",
                "estado"=> "BA"
            ],
            [
                "id"=> 1989,

                "nome"=> "Igrapiúna",
                "estado"=> "BA"
            ],
            [
                "id"=> 1990,

                "nome"=> "Iguaí",
                "estado"=> "BA"
            ],
            [
                "id"=> 1991,

                "nome"=> "Ilhéus",
                "estado"=> "BA"
            ],
            [
                "id"=> 1992,

                "nome"=> "Inhambupe",
                "estado"=> "BA"
            ],
            [
                "id"=> 1993,

                "nome"=> "Ipecaetá",
                "estado"=> "BA"
            ],
            [
                "id"=> 1994,

                "nome"=> "Ipiaú",
                "estado"=> "BA"
            ],
            [
                "id"=> 1995,

                "nome"=> "Ipirá",
                "estado"=> "BA"
            ],
            [
                "id"=> 1996,

                "nome"=> "Ipupiara",
                "estado"=> "BA"
            ],
            [
                "id"=> 1997,

                "nome"=> "Irajuba",
                "estado"=> "BA"
            ],
            [
                "id"=> 1998,

                "nome"=> "Iramaia",
                "estado"=> "BA"
            ],
            [
                "id"=> 1999,

                "nome"=> "Iraquara",
                "estado"=> "BA"
            ],
            [
                "id"=> 2000,

                "nome"=> "Irará",
                "estado"=> "BA"
            ],
            [
                "id"=> 2001,

                "nome"=> "Irecê",
                "estado"=> "BA"
            ],
            [
                "id"=> 2002,

                "nome"=> "Itabela",
                "estado"=> "BA"
            ],
            [
                "id"=> 2003,

                "nome"=> "Itaberaba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2004,

                "nome"=> "Itabuna",
                "estado"=> "BA"
            ],
            [
                "id"=> 2005,

                "nome"=> "Itacaré",
                "estado"=> "BA"
            ],
            [
                "id"=> 2006,

                "nome"=> "Itaeté",
                "estado"=> "BA"
            ],
            [
                "id"=> 2007,

                "nome"=> "Itagi",
                "estado"=> "BA"
            ],
            [
                "id"=> 2008,

                "nome"=> "Itagibá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2009,

                "nome"=> "Itagimirim",
                "estado"=> "BA"
            ],
            [
                "id"=> 2010,

                "nome"=> "Itaguaçu da Bahia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2011,

                "nome"=> "Itaju do Colônia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2012,

                "nome"=> "Itajuípe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2013,

                "nome"=> "Itamaraju",
                "estado"=> "BA"
            ],
            [
                "id"=> 2014,

                "nome"=> "Itamari",
                "estado"=> "BA"
            ],
            [
                "id"=> 2015,

                "nome"=> "Itambé",
                "estado"=> "BA"
            ],
            [
                "id"=> 2016,

                "nome"=> "Itanagra",
                "estado"=> "BA"
            ],
            [
                "id"=> 2017,

                "nome"=> "Itanhém",
                "estado"=> "BA"
            ],
            [
                "id"=> 2018,

                "nome"=> "Itaparica",
                "estado"=> "BA"
            ],
            [
                "id"=> 2019,

                "nome"=> "Itapé",
                "estado"=> "BA"
            ],
            [
                "id"=> 2020,

                "nome"=> "Itapebi",
                "estado"=> "BA"
            ],
            [
                "id"=> 2021,

                "nome"=> "Itapetinga",
                "estado"=> "BA"
            ],
            [
                "id"=> 2022,

                "nome"=> "Itapicuru",
                "estado"=> "BA"
            ],
            [
                "id"=> 2023,

                "nome"=> "Itapitanga",
                "estado"=> "BA"
            ],
            [
                "id"=> 2024,

                "nome"=> "Itaquara",
                "estado"=> "BA"
            ],
            [
                "id"=> 2025,

                "nome"=> "Itarantim",
                "estado"=> "BA"
            ],
            [
                "id"=> 2026,

                "nome"=> "Itatim",
                "estado"=> "BA"
            ],
            [
                "id"=> 2027,

                "nome"=> "Itiruçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 2028,

                "nome"=> "Itiúba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2029,

                "nome"=> "Itororó",
                "estado"=> "BA"
            ],
            [
                "id"=> 2030,

                "nome"=> "Ituaçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 2031,

                "nome"=> "Ituberá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2032,

                "nome"=> "Iuiú",
                "estado"=> "BA"
            ],
            [
                "id"=> 2033,

                "nome"=> "Jaborandi",
                "estado"=> "BA"
            ],
            [
                "id"=> 2034,

                "nome"=> "Jacaraci",
                "estado"=> "BA"
            ],
            [
                "id"=> 2035,

                "nome"=> "Jacobina",
                "estado"=> "BA"
            ],
            [
                "id"=> 2036,

                "nome"=> "Jaguaquara",
                "estado"=> "BA"
            ],
            [
                "id"=> 2037,

                "nome"=> "Jaguarari",
                "estado"=> "BA"
            ],
            [
                "id"=> 2038,

                "nome"=> "Jaguaripe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2039,

                "nome"=> "Jandaíra",
                "estado"=> "BA"
            ],
            [
                "id"=> 2040,

                "nome"=> "Jequié",
                "estado"=> "BA"
            ],
            [
                "id"=> 2041,

                "nome"=> "Jeremoabo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2042,

                "nome"=> "Jiquiriçá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2043,

                "nome"=> "Jitaúna",
                "estado"=> "BA"
            ],
            [
                "id"=> 2044,

                "nome"=> "João Dourado",
                "estado"=> "BA"
            ],
            [
                "id"=> 2045,

                "nome"=> "Juazeiro",
                "estado"=> "BA"
            ],
            [
                "id"=> 2046,

                "nome"=> "Jucuruçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 2047,

                "nome"=> "Jussara",
                "estado"=> "BA"
            ],
            [
                "id"=> 2048,

                "nome"=> "Jussari",
                "estado"=> "BA"
            ],
            [
                "id"=> 2049,

                "nome"=> "Jussiape",
                "estado"=> "BA"
            ],
            [
                "id"=> 2050,

                "nome"=> "Lafaiete Coutinho",
                "estado"=> "BA"
            ],
            [
                "id"=> 2051,

                "nome"=> "Lagoa Real",
                "estado"=> "BA"
            ],
            [
                "id"=> 2052,

                "nome"=> "Laje",
                "estado"=> "BA"
            ],
            [
                "id"=> 2053,

                "nome"=> "Lajedão",
                "estado"=> "BA"
            ],
            [
                "id"=> 2054,

                "nome"=> "Lajedinho",
                "estado"=> "BA"
            ],
            [
                "id"=> 2055,

                "nome"=> "Lajedo do Tabocal",
                "estado"=> "BA"
            ],
            [
                "id"=> 2056,

                "nome"=> "Lamarão",
                "estado"=> "BA"
            ],
            [
                "id"=> 2057,

                "nome"=> "Lapão",
                "estado"=> "BA"
            ],
            [
                "id"=> 2058,

                "nome"=> "Lauro de Freitas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2059,

                "nome"=> "Lençóis",
                "estado"=> "BA"
            ],
            [
                "id"=> 2060,

                "nome"=> "Licínio de Almeida",
                "estado"=> "BA"
            ],
            [
                "id"=> 2061,

                "nome"=> "Livramento de Nossa Senhora",
                "estado"=> "BA"
            ],
            [
                "id"=> 2062,

                "nome"=> "Luís Eduardo Magalhães",
                "estado"=> "BA"
            ],
            [
                "id"=> 2063,

                "nome"=> "Macajuba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2064,

                "nome"=> "Macarani",
                "estado"=> "BA"
            ],
            [
                "id"=> 2065,

                "nome"=> "Macaúbas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2066,

                "nome"=> "Macururé",
                "estado"=> "BA"
            ],
            [
                "id"=> 2067,

                "nome"=> "Madre de Deus",
                "estado"=> "BA"
            ],
            [
                "id"=> 2068,

                "nome"=> "Maetinga",
                "estado"=> "BA"
            ],
            [
                "id"=> 2069,

                "nome"=> "Maiquinique",
                "estado"=> "BA"
            ],
            [
                "id"=> 2070,

                "nome"=> "Mairi",
                "estado"=> "BA"
            ],
            [
                "id"=> 2071,

                "nome"=> "Malhada",
                "estado"=> "BA"
            ],
            [
                "id"=> 2072,

                "nome"=> "Malhada de Pedras",
                "estado"=> "BA"
            ],
            [
                "id"=> 2073,

                "nome"=> "Manoel Vitorino",
                "estado"=> "BA"
            ],
            [
                "id"=> 2074,

                "nome"=> "Mansidão",
                "estado"=> "BA"
            ],
            [
                "id"=> 2075,

                "nome"=> "Maracás",
                "estado"=> "BA"
            ],
            [
                "id"=> 2076,

                "nome"=> "Maragogipe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2077,

                "nome"=> "Maraú",
                "estado"=> "BA"
            ],
            [
                "id"=> 2078,

                "nome"=> "Marcionílio Souza",
                "estado"=> "BA"
            ],
            [
                "id"=> 2079,

                "nome"=> "Mascote",
                "estado"=> "BA"
            ],
            [
                "id"=> 2080,

                "nome"=> "Mata de São João",
                "estado"=> "BA"
            ],
            [
                "id"=> 2081,

                "nome"=> "Matina",
                "estado"=> "BA"
            ],
            [
                "id"=> 2082,

                "nome"=> "Medeiros Neto",
                "estado"=> "BA"
            ],
            [
                "id"=> 2083,

                "nome"=> "Miguel Calmon",
                "estado"=> "BA"
            ],
            [
                "id"=> 2084,

                "nome"=> "Milagres",
                "estado"=> "BA"
            ],
            [
                "id"=> 2085,

                "nome"=> "Mirangaba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2086,

                "nome"=> "Mirante",
                "estado"=> "BA"
            ],
            [
                "id"=> 2087,

                "nome"=> "Monte Santo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2088,

                "nome"=> "Morpará",
                "estado"=> "BA"
            ],
            [
                "id"=> 2089,

                "nome"=> "Morro do Chapéu",
                "estado"=> "BA"
            ],
            [
                "id"=> 2090,

                "nome"=> "Mortugaba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2091,

                "nome"=> "Mucugê",
                "estado"=> "BA"
            ],
            [
                "id"=> 2092,

                "nome"=> "Mucuri",
                "estado"=> "BA"
            ],
            [
                "id"=> 2093,

                "nome"=> "Mulungu do Morro",
                "estado"=> "BA"
            ],
            [
                "id"=> 2094,

                "nome"=> "Mundo Novo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2095,

                "nome"=> "Muniz Ferreira",
                "estado"=> "BA"
            ],
            [
                "id"=> 2096,

                "nome"=> "Muquém de São Francisco",
                "estado"=> "BA"
            ],
            [
                "id"=> 2097,

                "nome"=> "Muritiba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2098,

                "nome"=> "Mutuípe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2099,

                "nome"=> "Nazaré",
                "estado"=> "BA"
            ],
            [
                "id"=> 2100,

                "nome"=> "Nilo Peçanha",
                "estado"=> "BA"
            ],
            [
                "id"=> 2101,

                "nome"=> "Nordestina",
                "estado"=> "BA"
            ],
            [
                "id"=> 2102,

                "nome"=> "Nova Canaã",
                "estado"=> "BA"
            ],
            [
                "id"=> 2103,

                "nome"=> "Nova Fátima",
                "estado"=> "BA"
            ],
            [
                "id"=> 2104,

                "nome"=> "Nova Ibiá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2105,

                "nome"=> "Nova Itarana",
                "estado"=> "BA"
            ],
            [
                "id"=> 2106,

                "nome"=> "Nova Redenção",
                "estado"=> "BA"
            ],
            [
                "id"=> 2107,

                "nome"=> "Nova Soure",
                "estado"=> "BA"
            ],
            [
                "id"=> 2108,

                "nome"=> "Nova Viçosa",
                "estado"=> "BA"
            ],
            [
                "id"=> 2109,

                "nome"=> "Novo Horizonte",
                "estado"=> "BA"
            ],
            [
                "id"=> 2110,

                "nome"=> "Novo Triunfo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2111,

                "nome"=> "Olindina",
                "estado"=> "BA"
            ],
            [
                "id"=> 2112,

                "nome"=> "Oliveira dos Brejinhos",
                "estado"=> "BA"
            ],
            [
                "id"=> 2113,

                "nome"=> "Ouriçangas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2114,

                "nome"=> "Ourolândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2115,

                "nome"=> "Palmas de Monte Alto",
                "estado"=> "BA"
            ],
            [
                "id"=> 2116,

                "nome"=> "Palmeiras",
                "estado"=> "BA"
            ],
            [
                "id"=> 2117,

                "nome"=> "Paramirim",
                "estado"=> "BA"
            ],
            [
                "id"=> 2118,

                "nome"=> "Paratinga",
                "estado"=> "BA"
            ],
            [
                "id"=> 2119,

                "nome"=> "Paripiranga",
                "estado"=> "BA"
            ],
            [
                "id"=> 2120,

                "nome"=> "Pau Brasil",
                "estado"=> "BA"
            ],
            [
                "id"=> 2121,

                "nome"=> "Paulo Afonso",
                "estado"=> "BA"
            ],
            [
                "id"=> 2122,

                "nome"=> "Pé de Serra",
                "estado"=> "BA"
            ],
            [
                "id"=> 2123,

                "nome"=> "Pedrão",
                "estado"=> "BA"
            ],
            [
                "id"=> 2124,

                "nome"=> "Pedro Alexandre",
                "estado"=> "BA"
            ],
            [
                "id"=> 2125,

                "nome"=> "Piatã",
                "estado"=> "BA"
            ],
            [
                "id"=> 2126,

                "nome"=> "Pilão Arcado",
                "estado"=> "BA"
            ],
            [
                "id"=> 2127,

                "nome"=> "Pindaí",
                "estado"=> "BA"
            ],
            [
                "id"=> 2128,

                "nome"=> "Pindobaçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 2129,

                "nome"=> "Pintadas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2130,

                "nome"=> "Piraí do Norte",
                "estado"=> "BA"
            ],
            [
                "id"=> 2131,

                "nome"=> "Piripá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2132,

                "nome"=> "Piritiba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2133,

                "nome"=> "Planaltino",
                "estado"=> "BA"
            ],
            [
                "id"=> 2134,

                "nome"=> "Planalto",
                "estado"=> "BA"
            ],
            [
                "id"=> 2135,

                "nome"=> "Poções",
                "estado"=> "BA"
            ],
            [
                "id"=> 2136,

                "nome"=> "Pojuca",
                "estado"=> "BA"
            ],
            [
                "id"=> 2137,

                "nome"=> "Ponto Novo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2138,

                "nome"=> "Porto Seguro",
                "estado"=> "BA"
            ],
            [
                "id"=> 2139,

                "nome"=> "Potiraguá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2140,

                "nome"=> "Prado",
                "estado"=> "BA"
            ],
            [
                "id"=> 2141,

                "nome"=> "Presidente Dutra",
                "estado"=> "BA"
            ],
            [
                "id"=> 2142,

                "nome"=> "Presidente Jânio Quadros",
                "estado"=> "BA"
            ],
            [
                "id"=> 2143,

                "nome"=> "Presidente Tancredo Neves",
                "estado"=> "BA"
            ],
            [
                "id"=> 2144,

                "nome"=> "Queimadas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2145,

                "nome"=> "Quijingue",
                "estado"=> "BA"
            ],
            [
                "id"=> 2146,

                "nome"=> "Quixabeira",
                "estado"=> "BA"
            ],
            [
                "id"=> 2147,

                "nome"=> "Rafael Jambeiro",
                "estado"=> "BA"
            ],
            [
                "id"=> 2148,

                "nome"=> "Remanso",
                "estado"=> "BA"
            ],
            [
                "id"=> 2149,

                "nome"=> "Retirolândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2150,

                "nome"=> "Riachão das Neves",
                "estado"=> "BA"
            ],
            [
                "id"=> 2151,

                "nome"=> "Riachão do Jacuípe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2152,

                "nome"=> "Riacho de Santana",
                "estado"=> "BA"
            ],
            [
                "id"=> 2153,

                "nome"=> "Ribeira do Amparo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2154,

                "nome"=> "Ribeira do Pombal",
                "estado"=> "BA"
            ],
            [
                "id"=> 2155,

                "nome"=> "Ribeirão do Largo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2156,

                "nome"=> "Rio de Contas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2157,

                "nome"=> "Rio do Antônio",
                "estado"=> "BA"
            ],
            [
                "id"=> 2158,

                "nome"=> "Rio do Pires",
                "estado"=> "BA"
            ],
            [
                "id"=> 2159,

                "nome"=> "Rio Real",
                "estado"=> "BA"
            ],
            [
                "id"=> 2160,

                "nome"=> "Rodelas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2161,

                "nome"=> "Ruy Barbosa",
                "estado"=> "BA"
            ],
            [
                "id"=> 2162,

                "nome"=> "Salinas da Margarida",
                "estado"=> "BA"
            ],
            [
                "id"=> 2163,

                "nome"=> "Salvador",
                "estado"=> "BA"
            ],
            [
                "id"=> 2164,

                "nome"=> "Santa Bárbara",
                "estado"=> "BA"
            ],
            [
                "id"=> 2165,

                "nome"=> "Santa Brígida",
                "estado"=> "BA"
            ],
            [
                "id"=> 2166,

                "nome"=> "Santa Cruz Cabrália",
                "estado"=> "BA"
            ],
            [
                "id"=> 2167,

                "nome"=> "Santa Cruz da Vitória",
                "estado"=> "BA"
            ],
            [
                "id"=> 2168,

                "nome"=> "Santa Inês",
                "estado"=> "BA"
            ],
            [
                "id"=> 2169,

                "nome"=> "Santaluz",
                "estado"=> "BA"
            ],
            [
                "id"=> 2170,

                "nome"=> "Santa Luzia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2171,

                "nome"=> "Santa Maria da Vitória",
                "estado"=> "BA"
            ],
            [
                "id"=> 2172,

                "nome"=> "Santana",
                "estado"=> "BA"
            ],
            [
                "id"=> 2173,

                "nome"=> "Santanópolis",
                "estado"=> "BA"
            ],
            [
                "id"=> 2174,

                "nome"=> "Santa Rita de Cássia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2175,

                "nome"=> "Santa Teresinha",
                "estado"=> "BA"
            ],
            [
                "id"=> 2176,

                "nome"=> "Santo Amaro",
                "estado"=> "BA"
            ],
            [
                "id"=> 2177,

                "nome"=> "Santo Antônio de Jesus",
                "estado"=> "BA"
            ],
            [
                "id"=> 2178,

                "nome"=> "Santo Estêvão",
                "estado"=> "BA"
            ],
            [
                "id"=> 2179,

                "nome"=> "São Desidério",
                "estado"=> "BA"
            ],
            [
                "id"=> 2180,

                "nome"=> "São Domingos",
                "estado"=> "BA"
            ],
            [
                "id"=> 2181,

                "nome"=> "São Félix",
                "estado"=> "BA"
            ],
            [
                "id"=> 2182,

                "nome"=> "São Félix do Coribe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2183,

                "nome"=> "São Felipe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2184,

                "nome"=> "São Francisco do Conde",
                "estado"=> "BA"
            ],
            [
                "id"=> 2185,

                "nome"=> "São Gabriel",
                "estado"=> "BA"
            ],
            [
                "id"=> 2186,

                "nome"=> "São Gonçalo dos Campos",
                "estado"=> "BA"
            ],
            [
                "id"=> 2187,

                "nome"=> "São José da Vitória",
                "estado"=> "BA"
            ],
            [
                "id"=> 2188,

                "nome"=> "São José do Jacuípe",
                "estado"=> "BA"
            ],
            [
                "id"=> 2189,

                "nome"=> "São Miguel das Matas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2190,

                "nome"=> "São Sebastião do Passé",
                "estado"=> "BA"
            ],
            [
                "id"=> 2191,

                "nome"=> "Sapeaçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 2192,

                "nome"=> "Sátiro Dias",
                "estado"=> "BA"
            ],
            [
                "id"=> 2193,

                "nome"=> "Saubara",
                "estado"=> "BA"
            ],
            [
                "id"=> 2194,

                "nome"=> "Saúde",
                "estado"=> "BA"
            ],
            [
                "id"=> 2195,

                "nome"=> "Seabra",
                "estado"=> "BA"
            ],
            [
                "id"=> 2196,

                "nome"=> "Sebastião Laranjeiras",
                "estado"=> "BA"
            ],
            [
                "id"=> 2197,

                "nome"=> "Senhor do Bonfim",
                "estado"=> "BA"
            ],
            [
                "id"=> 2198,

                "nome"=> "Serra do Ramalho",
                "estado"=> "BA"
            ],
            [
                "id"=> 2199,

                "nome"=> "Sento Sé",
                "estado"=> "BA"
            ],
            [
                "id"=> 2200,

                "nome"=> "Serra Dourada",
                "estado"=> "BA"
            ],
            [
                "id"=> 2201,

                "nome"=> "Serra Preta",
                "estado"=> "BA"
            ],
            [
                "id"=> 2202,

                "nome"=> "Serrinha",
                "estado"=> "BA"
            ],
            [
                "id"=> 2203,

                "nome"=> "Serrolândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2204,

                "nome"=> "Simões Filho",
                "estado"=> "BA"
            ],
            [
                "id"=> 2205,

                "nome"=> "Sítio do Mato",
                "estado"=> "BA"
            ],
            [
                "id"=> 2206,

                "nome"=> "Sítio do Quinto",
                "estado"=> "BA"
            ],
            [
                "id"=> 2207,

                "nome"=> "Sobradinho",
                "estado"=> "BA"
            ],
            [
                "id"=> 2208,

                "nome"=> "Souto Soares",
                "estado"=> "BA"
            ],
            [
                "id"=> 2209,

                "nome"=> "Tabocas do Brejo Velho",
                "estado"=> "BA"
            ],
            [
                "id"=> 2210,

                "nome"=> "Tanhaçu",
                "estado"=> "BA"
            ],
            [
                "id"=> 2211,

                "nome"=> "Tanque Novo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2212,

                "nome"=> "Tanquinho",
                "estado"=> "BA"
            ],
            [
                "id"=> 2213,

                "nome"=> "Taperoá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2214,

                "nome"=> "Tapiramutá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2215,

                "nome"=> "Teixeira de Freitas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2216,

                "nome"=> "Teodoro Sampaio",
                "estado"=> "BA"
            ],
            [
                "id"=> 2217,

                "nome"=> "Teofilândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2218,

                "nome"=> "Teolândia",
                "estado"=> "BA"
            ],
            [
                "id"=> 2219,

                "nome"=> "Terra Nova",
                "estado"=> "BA"
            ],
            [
                "id"=> 2220,

                "nome"=> "Tremedal",
                "estado"=> "BA"
            ],
            [
                "id"=> 2221,

                "nome"=> "Tucano",
                "estado"=> "BA"
            ],
            [
                "id"=> 2222,

                "nome"=> "Uauá",
                "estado"=> "BA"
            ],
            [
                "id"=> 2223,

                "nome"=> "Ubaíra",
                "estado"=> "BA"
            ],
            [
                "id"=> 2224,

                "nome"=> "Ubaitaba",
                "estado"=> "BA"
            ],
            [
                "id"=> 2225,

                "nome"=> "Ubatã",
                "estado"=> "BA"
            ],
            [
                "id"=> 2226,

                "nome"=> "Uibaí",
                "estado"=> "BA"
            ],
            [
                "id"=> 2227,

                "nome"=> "Umburanas",
                "estado"=> "BA"
            ],
            [
                "id"=> 2228,

                "nome"=> "Una",
                "estado"=> "BA"
            ],
            [
                "id"=> 2229,

                "nome"=> "Urandi",
                "estado"=> "BA"
            ],
            [
                "id"=> 2230,

                "nome"=> "Uruçuca",
                "estado"=> "BA"
            ],
            [
                "id"=> 2231,

                "nome"=> "Utinga",
                "estado"=> "BA"
            ],
            [
                "id"=> 2232,

                "nome"=> "Valença",
                "estado"=> "BA"
            ],
            [
                "id"=> 2233,

                "nome"=> "Valente",
                "estado"=> "BA"
            ],
            [
                "id"=> 2234,

                "nome"=> "Várzea da Roça",
                "estado"=> "BA"
            ],
            [
                "id"=> 2235,

                "nome"=> "Várzea do Poço",
                "estado"=> "BA"
            ],
            [
                "id"=> 2236,

                "nome"=> "Várzea Nova",
                "estado"=> "BA"
            ],
            [
                "id"=> 2237,

                "nome"=> "Varzedo",
                "estado"=> "BA"
            ],
            [
                "id"=> 2238,

                "nome"=> "Vera Cruz",
                "estado"=> "BA"
            ],
            [
                "id"=> 2239,

                "nome"=> "Vereda",
                "estado"=> "BA"
            ],
            [
                "id"=> 2240,

                "nome"=> "Vitória da Conquista",
                "estado"=> "BA"
            ],
            [
                "id"=> 2241,

                "nome"=> "Wagner",
                "estado"=> "BA"
            ],
            [
                "id"=> 2242,

                "nome"=> "Wanderley",
                "estado"=> "BA"
            ],
            [
                "id"=> 2243,

                "nome"=> "Wenceslau Guimarães",
                "estado"=> "BA"
            ],
            [
                "id"=> 2244,

                "nome"=> "Xique-Xique",
                "estado"=> "BA"
            ],
            [
                "id"=> 2245,

                "nome"=> "Abadia dos Dourados",
                "estado"=> "MG"
            ],
            [
                "id"=> 2246,

                "nome"=> "Abaeté",
                "estado"=> "MG"
            ],
            [
                "id"=> 2247,

                "nome"=> "Abre Campo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2248,

                "nome"=> "Acaiaca",
                "estado"=> "MG"
            ],
            [
                "id"=> 2249,

                "nome"=> "Açucena",
                "estado"=> "MG"
            ],
            [
                "id"=> 2250,

                "nome"=> "Água Boa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2251,

                "nome"=> "Água Comprida",
                "estado"=> "MG"
            ],
            [
                "id"=> 2252,

                "nome"=> "Aguanil",
                "estado"=> "MG"
            ],
            [
                "id"=> 2253,

                "nome"=> "Águas Formosas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2254,

                "nome"=> "Águas Vermelhas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2255,

                "nome"=> "Aimorés",
                "estado"=> "MG"
            ],
            [
                "id"=> 2256,

                "nome"=> "Aiuruoca",
                "estado"=> "MG"
            ],
            [
                "id"=> 2257,

                "nome"=> "Alagoa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2258,

                "nome"=> "Albertina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2259,

                "nome"=> "Além Paraíba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2260,

                "nome"=> "Alfenas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2261,

                "nome"=> "Alfredo Vasconcelos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2262,

                "nome"=> "Almenara",
                "estado"=> "MG"
            ],
            [
                "id"=> 2263,

                "nome"=> "Alpercata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2264,

                "nome"=> "Alpinópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2265,

                "nome"=> "Alterosa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2266,

                "nome"=> "Alto Caparaó",
                "estado"=> "MG"
            ],
            [
                "id"=> 2267,

                "nome"=> "Alto Rio Doce",
                "estado"=> "MG"
            ],
            [
                "id"=> 2268,

                "nome"=> "Alvarenga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2269,

                "nome"=> "Alvinópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2270,

                "nome"=> "Alvorada de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2271,

                "nome"=> "Amparo do Serra",
                "estado"=> "MG"
            ],
            [
                "id"=> 2272,

                "nome"=> "Andradas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2273,

                "nome"=> "Cachoeira de Pajeú",
                "estado"=> "MG"
            ],
            [
                "id"=> 2274,

                "nome"=> "Andrelândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2275,

                "nome"=> "Angelândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2276,

                "nome"=> "Antônio Carlos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2277,

                "nome"=> "Antônio Dias",
                "estado"=> "MG"
            ],
            [
                "id"=> 2278,

                "nome"=> "Antônio Prado de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2279,

                "nome"=> "Araçaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2280,

                "nome"=> "Aracitaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2281,

                "nome"=> "Araçuaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2282,

                "nome"=> "Araguari",
                "estado"=> "MG"
            ],
            [
                "id"=> 2283,

                "nome"=> "Arantina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2284,

                "nome"=> "Araponga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2285,

                "nome"=> "Araporã",
                "estado"=> "MG"
            ],
            [
                "id"=> 2286,

                "nome"=> "Arapuá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2287,

                "nome"=> "Araújos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2288,

                "nome"=> "Araxá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2289,

                "nome"=> "Arceburgo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2290,

                "nome"=> "Arcos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2291,

                "nome"=> "Areado",
                "estado"=> "MG"
            ],
            [
                "id"=> 2292,

                "nome"=> "Argirita",
                "estado"=> "MG"
            ],
            [
                "id"=> 2293,

                "nome"=> "Aricanduva",
                "estado"=> "MG"
            ],
            [
                "id"=> 2294,

                "nome"=> "Arinos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2295,

                "nome"=> "Astolfo Dutra",
                "estado"=> "MG"
            ],
            [
                "id"=> 2296,

                "nome"=> "Ataléia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2297,

                "nome"=> "Augusto de Lima",
                "estado"=> "MG"
            ],
            [
                "id"=> 2298,

                "nome"=> "Baependi",
                "estado"=> "MG"
            ],
            [
                "id"=> 2299,

                "nome"=> "Baldim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2300,

                "nome"=> "Bambuí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2301,

                "nome"=> "Bandeira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2302,

                "nome"=> "Bandeira do Sul",
                "estado"=> "MG"
            ],
            [
                "id"=> 2303,

                "nome"=> "Barão de Cocais",
                "estado"=> "MG"
            ],
            [
                "id"=> 2304,

                "nome"=> "Barão de Monte Alto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2305,

                "nome"=> "Barbacena",
                "estado"=> "MG"
            ],
            [
                "id"=> 2306,

                "nome"=> "Barra Longa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2307,

                "nome"=> "Barroso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2308,

                "nome"=> "Bela Vista de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2309,

                "nome"=> "Belmiro Braga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2310,

                "nome"=> "Belo Horizonte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2311,

                "nome"=> "Belo Oriente",
                "estado"=> "MG"
            ],
            [
                "id"=> 2312,

                "nome"=> "Belo Vale",
                "estado"=> "MG"
            ],
            [
                "id"=> 2313,

                "nome"=> "Berilo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2314,

                "nome"=> "Bertópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2315,

                "nome"=> "Berizal",
                "estado"=> "MG"
            ],
            [
                "id"=> 2316,

                "nome"=> "Betim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2317,

                "nome"=> "Bias Fortes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2318,

                "nome"=> "Bicas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2319,

                "nome"=> "Biquinhas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2320,

                "nome"=> "Boa Esperança",
                "estado"=> "MG"
            ],
            [
                "id"=> 2321,

                "nome"=> "Bocaina de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2322,

                "nome"=> "Bocaiúva",
                "estado"=> "MG"
            ],
            [
                "id"=> 2323,

                "nome"=> "Bom Despacho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2324,

                "nome"=> "Bom Jardim de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2325,

                "nome"=> "Bom Jesus da Penha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2326,

                "nome"=> "Bom Jesus do Amparo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2327,

                "nome"=> "Bom Jesus do Galho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2328,

                "nome"=> "Bom Repouso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2329,

                "nome"=> "Bom Sucesso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2330,

                "nome"=> "Bonfim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2331,

                "nome"=> "Bonfinópolis de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2332,

                "nome"=> "Bonito de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2333,

                "nome"=> "Borda da Mata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2334,

                "nome"=> "Botelhos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2335,

                "nome"=> "Botumirim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2336,

                "nome"=> "Brasilândia de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2337,

                "nome"=> "Brasília de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2338,

                "nome"=> "Brás Pires",
                "estado"=> "MG"
            ],
            [
                "id"=> 2339,

                "nome"=> "Braúnas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2340,

                "nome"=> "Brazópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2341,

                "nome"=> "Brumadinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2342,

                "nome"=> "Bueno Brandão",
                "estado"=> "MG"
            ],
            [
                "id"=> 2343,

                "nome"=> "Buenópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2344,

                "nome"=> "Bugre",
                "estado"=> "MG"
            ],
            [
                "id"=> 2345,

                "nome"=> "Buritis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2346,

                "nome"=> "Buritizeiro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2347,

                "nome"=> "Cabeceira Grande",
                "estado"=> "MG"
            ],
            [
                "id"=> 2348,

                "nome"=> "Cabo Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 2349,

                "nome"=> "Cachoeira da Prata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2350,

                "nome"=> "Cachoeira de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2351,

                "nome"=> "Cachoeira Dourada",
                "estado"=> "MG"
            ],
            [
                "id"=> 2352,

                "nome"=> "Caetanópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2353,

                "nome"=> "Caeté",
                "estado"=> "MG"
            ],
            [
                "id"=> 2354,

                "nome"=> "Caiana",
                "estado"=> "MG"
            ],
            [
                "id"=> 2355,

                "nome"=> "Cajuri",
                "estado"=> "MG"
            ],
            [
                "id"=> 2356,

                "nome"=> "Caldas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2357,

                "nome"=> "Camacho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2358,

                "nome"=> "Camanducaia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2359,

                "nome"=> "Cambuí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2360,

                "nome"=> "Cambuquira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2361,

                "nome"=> "Campanário",
                "estado"=> "MG"
            ],
            [
                "id"=> 2362,

                "nome"=> "Campanha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2363,

                "nome"=> "Campestre",
                "estado"=> "MG"
            ],
            [
                "id"=> 2364,

                "nome"=> "Campina Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 2365,

                "nome"=> "Campo Azul",
                "estado"=> "MG"
            ],
            [
                "id"=> 2366,

                "nome"=> "Campo Belo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2367,

                "nome"=> "Campo do Meio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2368,

                "nome"=> "Campo Florido",
                "estado"=> "MG"
            ],
            [
                "id"=> 2369,

                "nome"=> "Campos Altos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2370,

                "nome"=> "Campos Gerais",
                "estado"=> "MG"
            ],
            [
                "id"=> 2371,

                "nome"=> "Canaã",
                "estado"=> "MG"
            ],
            [
                "id"=> 2372,

                "nome"=> "Canápolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2373,

                "nome"=> "Cana Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 2374,

                "nome"=> "Candeias",
                "estado"=> "MG"
            ],
            [
                "id"=> 2375,

                "nome"=> "Cantagalo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2376,

                "nome"=> "Caparaó",
                "estado"=> "MG"
            ],
            [
                "id"=> 2377,

                "nome"=> "Capela Nova",
                "estado"=> "MG"
            ],
            [
                "id"=> 2378,

                "nome"=> "Capelinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2379,

                "nome"=> "Capetinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2380,

                "nome"=> "Capim Branco",
                "estado"=> "MG"
            ],
            [
                "id"=> 2381,

                "nome"=> "Capinópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2382,

                "nome"=> "Capitão Andrade",
                "estado"=> "MG"
            ],
            [
                "id"=> 2383,

                "nome"=> "Capitão Enéas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2384,

                "nome"=> "Capitólio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2385,

                "nome"=> "Caputira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2386,

                "nome"=> "Caraí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2387,

                "nome"=> "Caranaíba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2388,

                "nome"=> "Carandaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2389,

                "nome"=> "Carangola",
                "estado"=> "MG"
            ],
            [
                "id"=> 2390,

                "nome"=> "Caratinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2391,

                "nome"=> "Carbonita",
                "estado"=> "MG"
            ],
            [
                "id"=> 2392,

                "nome"=> "Careaçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2393,

                "nome"=> "Carlos Chagas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2394,

                "nome"=> "Carmésia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2395,

                "nome"=> "Carmo da Cachoeira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2396,

                "nome"=> "Carmo da Mata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2397,

                "nome"=> "Carmo de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2398,

                "nome"=> "Carmo do Cajuru",
                "estado"=> "MG"
            ],
            [
                "id"=> 2399,

                "nome"=> "Carmo do Paranaíba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2400,

                "nome"=> "Carmo do Rio Claro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2401,

                "nome"=> "Carmópolis de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2402,

                "nome"=> "Carneirinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2403,

                "nome"=> "Carrancas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2404,

                "nome"=> "Carvalhópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2405,

                "nome"=> "Carvalhos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2406,

                "nome"=> "Casa Grande",
                "estado"=> "MG"
            ],
            [
                "id"=> 2407,

                "nome"=> "Cascalho Rico",
                "estado"=> "MG"
            ],
            [
                "id"=> 2408,

                "nome"=> "Cássia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2409,

                "nome"=> "Conceição da Barra de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2410,

                "nome"=> "Cataguases",
                "estado"=> "MG"
            ],
            [
                "id"=> 2411,

                "nome"=> "Catas Altas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2412,

                "nome"=> "Catas Altas da Noruega",
                "estado"=> "MG"
            ],
            [
                "id"=> 2413,

                "nome"=> "Catuji",
                "estado"=> "MG"
            ],
            [
                "id"=> 2414,

                "nome"=> "Catuti",
                "estado"=> "MG"
            ],
            [
                "id"=> 2415,

                "nome"=> "Caxambu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2416,

                "nome"=> "Cedro do Abaeté",
                "estado"=> "MG"
            ],
            [
                "id"=> 2417,

                "nome"=> "Central de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2418,

                "nome"=> "Centralina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2419,

                "nome"=> "Chácara",
                "estado"=> "MG"
            ],
            [
                "id"=> 2420,

                "nome"=> "Chalé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2421,

                "nome"=> "Chapada do Norte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2422,

                "nome"=> "Chapada Gaúcha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2423,

                "nome"=> "Chiador",
                "estado"=> "MG"
            ],
            [
                "id"=> 2424,

                "nome"=> "Cipotânea",
                "estado"=> "MG"
            ],
            [
                "id"=> 2425,

                "nome"=> "Claraval",
                "estado"=> "MG"
            ],
            [
                "id"=> 2426,

                "nome"=> "Claro dos Poções",
                "estado"=> "MG"
            ],
            [
                "id"=> 2427,

                "nome"=> "Cláudio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2428,

                "nome"=> "Coimbra",
                "estado"=> "MG"
            ],
            [
                "id"=> 2429,

                "nome"=> "Coluna",
                "estado"=> "MG"
            ],
            [
                "id"=> 2430,

                "nome"=> "Comendador Gomes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2431,

                "nome"=> "Comercinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2432,

                "nome"=> "Conceição da Aparecida",
                "estado"=> "MG"
            ],
            [
                "id"=> 2433,

                "nome"=> "Conceição das Pedras",
                "estado"=> "MG"
            ],
            [
                "id"=> 2434,

                "nome"=> "Conceição das Alagoas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2435,

                "nome"=> "Conceição de Ipanema",
                "estado"=> "MG"
            ],
            [
                "id"=> 2436,

                "nome"=> "Conceição do Mato Dentro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2437,

                "nome"=> "Conceição do Pará",
                "estado"=> "MG"
            ],
            [
                "id"=> 2438,

                "nome"=> "Conceição do Rio Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 2439,

                "nome"=> "Conceição dos Ouros",
                "estado"=> "MG"
            ],
            [
                "id"=> 2440,

                "nome"=> "Cônego Marinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2441,

                "nome"=> "Confins",
                "estado"=> "MG"
            ],
            [
                "id"=> 2442,

                "nome"=> "Congonhal",
                "estado"=> "MG"
            ],
            [
                "id"=> 2443,

                "nome"=> "Congonhas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2444,

                "nome"=> "Congonhas do Norte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2445,

                "nome"=> "Conquista",
                "estado"=> "MG"
            ],
            [
                "id"=> 2446,

                "nome"=> "Conselheiro Lafaiete",
                "estado"=> "MG"
            ],
            [
                "id"=> 2447,

                "nome"=> "Conselheiro Pena",
                "estado"=> "MG"
            ],
            [
                "id"=> 2448,

                "nome"=> "Consolação",
                "estado"=> "MG"
            ],
            [
                "id"=> 2449,

                "nome"=> "Contagem",
                "estado"=> "MG"
            ],
            [
                "id"=> 2450,

                "nome"=> "Coqueiral",
                "estado"=> "MG"
            ],
            [
                "id"=> 2451,

                "nome"=> "Coração de Jesus",
                "estado"=> "MG"
            ],
            [
                "id"=> 2452,

                "nome"=> "Cordisburgo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2453,

                "nome"=> "Cordislândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2454,

                "nome"=> "Corinto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2455,

                "nome"=> "Coroaci",
                "estado"=> "MG"
            ],
            [
                "id"=> 2456,

                "nome"=> "Coromandel",
                "estado"=> "MG"
            ],
            [
                "id"=> 2457,

                "nome"=> "Coronel Fabriciano",
                "estado"=> "MG"
            ],
            [
                "id"=> 2458,

                "nome"=> "Coronel Murta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2459,

                "nome"=> "Coronel Pacheco",
                "estado"=> "MG"
            ],
            [
                "id"=> 2460,

                "nome"=> "Coronel Xavier Chaves",
                "estado"=> "MG"
            ],
            [
                "id"=> 2461,

                "nome"=> "Córrego Danta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2462,

                "nome"=> "Córrego do Bom Jesus",
                "estado"=> "MG"
            ],
            [
                "id"=> 2463,

                "nome"=> "Córrego Fundo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2464,

                "nome"=> "Córrego Novo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2465,

                "nome"=> "Couto de Magalhães de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2466,

                "nome"=> "Crisólita",
                "estado"=> "MG"
            ],
            [
                "id"=> 2467,

                "nome"=> "Cristais",
                "estado"=> "MG"
            ],
            [
                "id"=> 2468,

                "nome"=> "Cristália",
                "estado"=> "MG"
            ],
            [
                "id"=> 2469,

                "nome"=> "Cristiano Otoni",
                "estado"=> "MG"
            ],
            [
                "id"=> 2470,

                "nome"=> "Cristina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2471,

                "nome"=> "Crucilândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2472,

                "nome"=> "Cruzeiro da Fortaleza",
                "estado"=> "MG"
            ],
            [
                "id"=> 2473,

                "nome"=> "Cruzília",
                "estado"=> "MG"
            ],
            [
                "id"=> 2474,

                "nome"=> "Cuparaque",
                "estado"=> "MG"
            ],
            [
                "id"=> 2475,

                "nome"=> "Curral de Dentro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2476,

                "nome"=> "Curvelo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2477,

                "nome"=> "Datas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2478,

                "nome"=> "Delfim Moreira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2479,

                "nome"=> "Delfinópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2480,

                "nome"=> "Delta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2481,

                "nome"=> "Descoberto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2482,

                "nome"=> "Desterro de Entre Rios",
                "estado"=> "MG"
            ],
            [
                "id"=> 2483,

                "nome"=> "Desterro do Melo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2484,

                "nome"=> "Diamantina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2485,

                "nome"=> "Diogo de Vasconcelos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2486,

                "nome"=> "Dionísio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2487,

                "nome"=> "Divinésia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2488,

                "nome"=> "Divino",
                "estado"=> "MG"
            ],
            [
                "id"=> 2489,

                "nome"=> "Divino das Laranjeiras",
                "estado"=> "MG"
            ],
            [
                "id"=> 2490,

                "nome"=> "Divinolândia de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2491,

                "nome"=> "Divinópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2492,

                "nome"=> "Divisa Alegre",
                "estado"=> "MG"
            ],
            [
                "id"=> 2493,

                "nome"=> "Divisa Nova",
                "estado"=> "MG"
            ],
            [
                "id"=> 2494,

                "nome"=> "Divisópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2495,

                "nome"=> "Dom Bosco",
                "estado"=> "MG"
            ],
            [
                "id"=> 2496,

                "nome"=> "Dom Cavati",
                "estado"=> "MG"
            ],
            [
                "id"=> 2497,

                "nome"=> "Dom Joaquim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2498,

                "nome"=> "Dom Silvério",
                "estado"=> "MG"
            ],
            [
                "id"=> 2499,

                "nome"=> "Dom Viçoso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2500,

                "nome"=> "Dona Eusébia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2501,

                "nome"=> "Dores de Campos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2502,

                "nome"=> "Dores de Guanhães",
                "estado"=> "MG"
            ],
            [
                "id"=> 2503,

                "nome"=> "Dores do Indaiá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2504,

                "nome"=> "Dores do Turvo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2505,

                "nome"=> "Doresópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2506,

                "nome"=> "Douradoquara",
                "estado"=> "MG"
            ],
            [
                "id"=> 2507,

                "nome"=> "Durandé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2508,

                "nome"=> "Elói Mendes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2509,

                "nome"=> "Engenheiro Caldas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2510,

                "nome"=> "Engenheiro Navarro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2511,

                "nome"=> "Entre Folhas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2512,

                "nome"=> "Entre Rios de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2513,

                "nome"=> "Ervália",
                "estado"=> "MG"
            ],
            [
                "id"=> 2514,

                "nome"=> "Esmeraldas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2515,

                "nome"=> "Espera Feliz",
                "estado"=> "MG"
            ],
            [
                "id"=> 2516,

                "nome"=> "Espinosa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2517,

                "nome"=> "Espírito Santo do Dourado",
                "estado"=> "MG"
            ],
            [
                "id"=> 2518,

                "nome"=> "Estiva",
                "estado"=> "MG"
            ],
            [
                "id"=> 2519,

                "nome"=> "Estrela Dalva",
                "estado"=> "MG"
            ],
            [
                "id"=> 2520,

                "nome"=> "Estrela do Indaiá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2521,

                "nome"=> "Estrela do Sul",
                "estado"=> "MG"
            ],
            [
                "id"=> 2522,

                "nome"=> "Eugenópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2523,

                "nome"=> "Ewbank da Câmara",
                "estado"=> "MG"
            ],
            [
                "id"=> 2524,

                "nome"=> "Extrema",
                "estado"=> "MG"
            ],
            [
                "id"=> 2525,

                "nome"=> "Fama",
                "estado"=> "MG"
            ],
            [
                "id"=> 2526,

                "nome"=> "Faria Lemos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2527,

                "nome"=> "Felício dos Santos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2528,

                "nome"=> "São Gonçalo do Rio Preto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2529,

                "nome"=> "Felisburgo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2530,

                "nome"=> "Felixlândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2531,

                "nome"=> "Fernandes Tourinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2532,

                "nome"=> "Ferros",
                "estado"=> "MG"
            ],
            [
                "id"=> 2533,

                "nome"=> "Fervedouro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2534,

                "nome"=> "Florestal",
                "estado"=> "MG"
            ],
            [
                "id"=> 2535,

                "nome"=> "Formiga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2536,

                "nome"=> "Formoso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2537,

                "nome"=> "Fortaleza de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2538,

                "nome"=> "Fortuna de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2539,

                "nome"=> "Francisco Badaró",
                "estado"=> "MG"
            ],
            [
                "id"=> 2540,

                "nome"=> "Francisco Dumont",
                "estado"=> "MG"
            ],
            [
                "id"=> 2541,

                "nome"=> "Francisco Sá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2542,

                "nome"=> "Franciscópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2543,

                "nome"=> "Frei Gaspar",
                "estado"=> "MG"
            ],
            [
                "id"=> 2544,

                "nome"=> "Frei Inocêncio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2545,

                "nome"=> "Frei Lagonegro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2546,

                "nome"=> "Fronteira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2547,

                "nome"=> "Fronteira dos Vales",
                "estado"=> "MG"
            ],
            [
                "id"=> 2548,

                "nome"=> "Fruta de Leite",
                "estado"=> "MG"
            ],
            [
                "id"=> 2549,

                "nome"=> "Frutal",
                "estado"=> "MG"
            ],
            [
                "id"=> 2550,

                "nome"=> "Funilândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2551,

                "nome"=> "Galiléia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2552,

                "nome"=> "Gameleiras",
                "estado"=> "MG"
            ],
            [
                "id"=> 2553,

                "nome"=> "Glaucilândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2554,

                "nome"=> "Goiabeira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2555,

                "nome"=> "Goianá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2556,

                "nome"=> "Gonçalves",
                "estado"=> "MG"
            ],
            [
                "id"=> 2557,

                "nome"=> "Gonzaga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2558,

                "nome"=> "Gouveia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2559,

                "nome"=> "Governador Valadares",
                "estado"=> "MG"
            ],
            [
                "id"=> 2560,

                "nome"=> "Grão Mogol",
                "estado"=> "MG"
            ],
            [
                "id"=> 2561,

                "nome"=> "Grupiara",
                "estado"=> "MG"
            ],
            [
                "id"=> 2562,

                "nome"=> "Guanhães",
                "estado"=> "MG"
            ],
            [
                "id"=> 2563,

                "nome"=> "Guapé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2564,

                "nome"=> "Guaraciaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2565,

                "nome"=> "Guaraciama",
                "estado"=> "MG"
            ],
            [
                "id"=> 2566,

                "nome"=> "Guaranésia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2567,

                "nome"=> "Guarani",
                "estado"=> "MG"
            ],
            [
                "id"=> 2568,

                "nome"=> "Guarará",
                "estado"=> "MG"
            ],
            [
                "id"=> 2569,

                "nome"=> "Guarda-Mor",
                "estado"=> "MG"
            ],
            [
                "id"=> 2570,

                "nome"=> "Guaxupé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2571,

                "nome"=> "Guidoval",
                "estado"=> "MG"
            ],
            [
                "id"=> 2572,

                "nome"=> "Guimarânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2573,

                "nome"=> "Guiricema",
                "estado"=> "MG"
            ],
            [
                "id"=> 2574,

                "nome"=> "Gurinhatã",
                "estado"=> "MG"
            ],
            [
                "id"=> 2575,

                "nome"=> "Heliodora",
                "estado"=> "MG"
            ],
            [
                "id"=> 2576,

                "nome"=> "Iapu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2577,

                "nome"=> "Ibertioga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2578,

                "nome"=> "Ibiá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2579,

                "nome"=> "Ibiaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2580,

                "nome"=> "Ibiracatu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2581,

                "nome"=> "Ibiraci",
                "estado"=> "MG"
            ],
            [
                "id"=> 2582,

                "nome"=> "Ibirité",
                "estado"=> "MG"
            ],
            [
                "id"=> 2583,

                "nome"=> "Ibitiúra de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2584,

                "nome"=> "Ibituruna",
                "estado"=> "MG"
            ],
            [
                "id"=> 2585,

                "nome"=> "Icaraí de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2586,

                "nome"=> "Igarapé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2587,

                "nome"=> "Igaratinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2588,

                "nome"=> "Iguatama",
                "estado"=> "MG"
            ],
            [
                "id"=> 2589,

                "nome"=> "Ijaci",
                "estado"=> "MG"
            ],
            [
                "id"=> 2590,

                "nome"=> "Ilicínea",
                "estado"=> "MG"
            ],
            [
                "id"=> 2591,

                "nome"=> "Imbé de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2592,

                "nome"=> "Inconfidentes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2593,

                "nome"=> "Indaiabira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2594,

                "nome"=> "Indianópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2595,

                "nome"=> "Ingaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2596,

                "nome"=> "Inhapim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2597,

                "nome"=> "Inhaúma",
                "estado"=> "MG"
            ],
            [
                "id"=> 2598,

                "nome"=> "Inimutaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2599,

                "nome"=> "Ipaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2600,

                "nome"=> "Ipanema",
                "estado"=> "MG"
            ],
            [
                "id"=> 2601,

                "nome"=> "Ipatinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2602,

                "nome"=> "Ipiaçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2603,

                "nome"=> "Ipuiúna",
                "estado"=> "MG"
            ],
            [
                "id"=> 2604,

                "nome"=> "Iraí de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2605,

                "nome"=> "Itabira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2606,

                "nome"=> "Itabirinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2607,

                "nome"=> "Itabirito",
                "estado"=> "MG"
            ],
            [
                "id"=> 2608,

                "nome"=> "Itacambira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2609,

                "nome"=> "Itacarambi",
                "estado"=> "MG"
            ],
            [
                "id"=> 2610,

                "nome"=> "Itaguara",
                "estado"=> "MG"
            ],
            [
                "id"=> 2611,

                "nome"=> "Itaipé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2612,

                "nome"=> "Itajubá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2613,

                "nome"=> "Itamarandiba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2614,

                "nome"=> "Itamarati de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2615,

                "nome"=> "Itambacuri",
                "estado"=> "MG"
            ],
            [
                "id"=> 2616,

                "nome"=> "Itambé do Mato Dentro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2617,

                "nome"=> "Itamogi",
                "estado"=> "MG"
            ],
            [
                "id"=> 2618,

                "nome"=> "Itamonte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2619,

                "nome"=> "Itanhandu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2620,

                "nome"=> "Itanhomi",
                "estado"=> "MG"
            ],
            [
                "id"=> 2621,

                "nome"=> "Itaobim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2622,

                "nome"=> "Itapagipe",
                "estado"=> "MG"
            ],
            [
                "id"=> 2623,

                "nome"=> "Itapecerica",
                "estado"=> "MG"
            ],
            [
                "id"=> 2624,

                "nome"=> "Itapeva",
                "estado"=> "MG"
            ],
            [
                "id"=> 2625,

                "nome"=> "Itatiaiuçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2626,

                "nome"=> "Itaú de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2627,

                "nome"=> "Itaúna",
                "estado"=> "MG"
            ],
            [
                "id"=> 2628,

                "nome"=> "Itaverava",
                "estado"=> "MG"
            ],
            [
                "id"=> 2629,

                "nome"=> "Itinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2630,

                "nome"=> "Itueta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2631,

                "nome"=> "Ituiutaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2632,

                "nome"=> "Itumirim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2633,

                "nome"=> "Iturama",
                "estado"=> "MG"
            ],
            [
                "id"=> 2634,

                "nome"=> "Itutinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2635,

                "nome"=> "Jaboticatubas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2636,

                "nome"=> "Jacinto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2637,

                "nome"=> "Jacuí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2638,

                "nome"=> "Jacutinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2639,

                "nome"=> "Jaguaraçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2640,

                "nome"=> "Jaíba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2641,

                "nome"=> "Jampruca",
                "estado"=> "MG"
            ],
            [
                "id"=> 2642,

                "nome"=> "Janaúba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2643,

                "nome"=> "Januária",
                "estado"=> "MG"
            ],
            [
                "id"=> 2644,

                "nome"=> "Japaraíba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2645,

                "nome"=> "Japonvar",
                "estado"=> "MG"
            ],
            [
                "id"=> 2646,

                "nome"=> "Jeceaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2647,

                "nome"=> "Jenipapo de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2648,

                "nome"=> "Jequeri",
                "estado"=> "MG"
            ],
            [
                "id"=> 2649,

                "nome"=> "Jequitaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2650,

                "nome"=> "Jequitibá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2651,

                "nome"=> "Jequitinhonha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2652,

                "nome"=> "Jesuânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2653,

                "nome"=> "Joaíma",
                "estado"=> "MG"
            ],
            [
                "id"=> 2654,

                "nome"=> "Joanésia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2655,

                "nome"=> "João Monlevade",
                "estado"=> "MG"
            ],
            [
                "id"=> 2656,

                "nome"=> "João Pinheiro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2657,

                "nome"=> "Joaquim Felício",
                "estado"=> "MG"
            ],
            [
                "id"=> 2658,

                "nome"=> "Jordânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2659,

                "nome"=> "José Gonçalves de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2660,

                "nome"=> "José Raydan",
                "estado"=> "MG"
            ],
            [
                "id"=> 2661,

                "nome"=> "Josenópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2662,

                "nome"=> "Nova União",
                "estado"=> "MG"
            ],
            [
                "id"=> 2663,

                "nome"=> "Juatuba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2664,

                "nome"=> "Juiz de Fora",
                "estado"=> "MG"
            ],
            [
                "id"=> 2665,

                "nome"=> "Juramento",
                "estado"=> "MG"
            ],
            [
                "id"=> 2666,

                "nome"=> "Juruaia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2667,

                "nome"=> "Juvenília",
                "estado"=> "MG"
            ],
            [
                "id"=> 2668,

                "nome"=> "Ladainha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2669,

                "nome"=> "Lagamar",
                "estado"=> "MG"
            ],
            [
                "id"=> 2670,

                "nome"=> "Lagoa da Prata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2671,

                "nome"=> "Lagoa dos Patos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2672,

                "nome"=> "Lagoa Dourada",
                "estado"=> "MG"
            ],
            [
                "id"=> 2673,

                "nome"=> "Lagoa Formosa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2674,

                "nome"=> "Lagoa Grande",
                "estado"=> "MG"
            ],
            [
                "id"=> 2675,

                "nome"=> "Lagoa Santa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2676,

                "nome"=> "Lajinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2677,

                "nome"=> "Lambari",
                "estado"=> "MG"
            ],
            [
                "id"=> 2678,

                "nome"=> "Lamim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2679,

                "nome"=> "Laranjal",
                "estado"=> "MG"
            ],
            [
                "id"=> 2680,

                "nome"=> "Lassance",
                "estado"=> "MG"
            ],
            [
                "id"=> 2681,

                "nome"=> "Lavras",
                "estado"=> "MG"
            ],
            [
                "id"=> 2682,

                "nome"=> "Leandro Ferreira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2683,

                "nome"=> "Leme do Prado",
                "estado"=> "MG"
            ],
            [
                "id"=> 2684,

                "nome"=> "Leopoldina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2685,

                "nome"=> "Liberdade",
                "estado"=> "MG"
            ],
            [
                "id"=> 2686,

                "nome"=> "Lima Duarte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2687,

                "nome"=> "Limeira do Oeste",
                "estado"=> "MG"
            ],
            [
                "id"=> 2688,

                "nome"=> "Lontra",
                "estado"=> "MG"
            ],
            [
                "id"=> 2689,

                "nome"=> "Luisburgo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2690,

                "nome"=> "Luislândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2691,

                "nome"=> "Luminárias",
                "estado"=> "MG"
            ],
            [
                "id"=> 2692,

                "nome"=> "Luz",
                "estado"=> "MG"
            ],
            [
                "id"=> 2693,

                "nome"=> "Machacalis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2694,

                "nome"=> "Machado",
                "estado"=> "MG"
            ],
            [
                "id"=> 2695,

                "nome"=> "Madre de Deus de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2696,

                "nome"=> "Malacacheta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2697,

                "nome"=> "Mamonas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2698,

                "nome"=> "Manga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2699,

                "nome"=> "Manhuaçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2700,

                "nome"=> "Manhumirim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2701,

                "nome"=> "Mantena",
                "estado"=> "MG"
            ],
            [
                "id"=> 2702,

                "nome"=> "Maravilhas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2703,

                "nome"=> "Mar de Espanha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2704,

                "nome"=> "Maria da Fé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2705,

                "nome"=> "Mariana",
                "estado"=> "MG"
            ],
            [
                "id"=> 2706,

                "nome"=> "Marilac",
                "estado"=> "MG"
            ],
            [
                "id"=> 2707,

                "nome"=> "Mário Campos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2708,

                "nome"=> "Maripá de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2709,

                "nome"=> "Marliéria",
                "estado"=> "MG"
            ],
            [
                "id"=> 2710,

                "nome"=> "Marmelópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2711,

                "nome"=> "Martinho Campos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2712,

                "nome"=> "Martins Soares",
                "estado"=> "MG"
            ],
            [
                "id"=> 2713,

                "nome"=> "Mata Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 2714,

                "nome"=> "Materlândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2715,

                "nome"=> "Mateus Leme",
                "estado"=> "MG"
            ],
            [
                "id"=> 2716,

                "nome"=> "Matias Barbosa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2717,

                "nome"=> "Matias Cardoso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2718,

                "nome"=> "Matipó",
                "estado"=> "MG"
            ],
            [
                "id"=> 2719,

                "nome"=> "Mato Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 2720,

                "nome"=> "Matozinhos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2721,

                "nome"=> "Matutina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2722,

                "nome"=> "Medeiros",
                "estado"=> "MG"
            ],
            [
                "id"=> 2723,

                "nome"=> "Medina",
                "estado"=> "MG"
            ],
            [
                "id"=> 2724,

                "nome"=> "Mendes Pimentel",
                "estado"=> "MG"
            ],
            [
                "id"=> 2725,

                "nome"=> "Mercês",
                "estado"=> "MG"
            ],
            [
                "id"=> 2726,

                "nome"=> "Mesquita",
                "estado"=> "MG"
            ],
            [
                "id"=> 2727,

                "nome"=> "Minas Novas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2728,

                "nome"=> "Minduri",
                "estado"=> "MG"
            ],
            [
                "id"=> 2729,

                "nome"=> "Mirabela",
                "estado"=> "MG"
            ],
            [
                "id"=> 2730,

                "nome"=> "Miradouro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2731,

                "nome"=> "Miraí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2732,

                "nome"=> "Miravânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2733,

                "nome"=> "Moeda",
                "estado"=> "MG"
            ],
            [
                "id"=> 2734,

                "nome"=> "Moema",
                "estado"=> "MG"
            ],
            [
                "id"=> 2735,

                "nome"=> "Monjolos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2736,

                "nome"=> "Monsenhor Paulo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2737,

                "nome"=> "Montalvânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2738,

                "nome"=> "Monte Alegre de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2739,

                "nome"=> "Monte Azul",
                "estado"=> "MG"
            ],
            [
                "id"=> 2740,

                "nome"=> "Monte Belo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2741,

                "nome"=> "Monte Carmelo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2742,

                "nome"=> "Monte Formoso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2743,

                "nome"=> "Monte Santo de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2744,

                "nome"=> "Montes Claros",
                "estado"=> "MG"
            ],
            [
                "id"=> 2745,

                "nome"=> "Monte Sião",
                "estado"=> "MG"
            ],
            [
                "id"=> 2746,

                "nome"=> "Montezuma",
                "estado"=> "MG"
            ],
            [
                "id"=> 2747,

                "nome"=> "Morada Nova de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2748,

                "nome"=> "Morro da Garça",
                "estado"=> "MG"
            ],
            [
                "id"=> 2749,

                "nome"=> "Morro do Pilar",
                "estado"=> "MG"
            ],
            [
                "id"=> 2750,

                "nome"=> "Munhoz",
                "estado"=> "MG"
            ],
            [
                "id"=> 2751,

                "nome"=> "Muriaé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2752,

                "nome"=> "Mutum",
                "estado"=> "MG"
            ],
            [
                "id"=> 2753,

                "nome"=> "Muzambinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2754,

                "nome"=> "Nacip Raydan",
                "estado"=> "MG"
            ],
            [
                "id"=> 2755,

                "nome"=> "Nanuque",
                "estado"=> "MG"
            ],
            [
                "id"=> 2756,

                "nome"=> "Naque",
                "estado"=> "MG"
            ],
            [
                "id"=> 2757,

                "nome"=> "Natalândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2758,

                "nome"=> "Natércia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2759,

                "nome"=> "Nazareno",
                "estado"=> "MG"
            ],
            [
                "id"=> 2760,

                "nome"=> "Nepomuceno",
                "estado"=> "MG"
            ],
            [
                "id"=> 2761,

                "nome"=> "Ninheira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2762,

                "nome"=> "Nova Belém",
                "estado"=> "MG"
            ],
            [
                "id"=> 2763,

                "nome"=> "Nova Era",
                "estado"=> "MG"
            ],
            [
                "id"=> 2764,

                "nome"=> "Nova Lima",
                "estado"=> "MG"
            ],
            [
                "id"=> 2765,

                "nome"=> "Nova Módica",
                "estado"=> "MG"
            ],
            [
                "id"=> 2766,

                "nome"=> "Nova Ponte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2767,

                "nome"=> "Nova Porteirinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2768,

                "nome"=> "Nova Resende",
                "estado"=> "MG"
            ],
            [
                "id"=> 2769,

                "nome"=> "Nova Serrana",
                "estado"=> "MG"
            ],
            [
                "id"=> 2770,

                "nome"=> "Novo Cruzeiro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2771,

                "nome"=> "Novo Oriente de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2772,

                "nome"=> "Novorizonte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2773,

                "nome"=> "Olaria",
                "estado"=> "MG"
            ],
            [
                "id"=> 2774,

                "nome"=> "Olhos-D'Água",
                "estado"=> "MG"
            ],
            [
                "id"=> 2775,

                "nome"=> "Olímpio Noronha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2776,

                "nome"=> "Oliveira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2777,

                "nome"=> "Oliveira Fortes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2778,

                "nome"=> "Onça de Pitangui",
                "estado"=> "MG"
            ],
            [
                "id"=> 2779,

                "nome"=> "Oratórios",
                "estado"=> "MG"
            ],
            [
                "id"=> 2780,

                "nome"=> "Orizânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2781,

                "nome"=> "Ouro Branco",
                "estado"=> "MG"
            ],
            [
                "id"=> 2782,

                "nome"=> "Ouro Fino",
                "estado"=> "MG"
            ],
            [
                "id"=> 2783,

                "nome"=> "Ouro Preto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2784,

                "nome"=> "Ouro Verde de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2785,

                "nome"=> "Padre Carvalho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2786,

                "nome"=> "Padre Paraíso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2787,

                "nome"=> "Paineiras",
                "estado"=> "MG"
            ],
            [
                "id"=> 2788,

                "nome"=> "Pains",
                "estado"=> "MG"
            ],
            [
                "id"=> 2789,

                "nome"=> "Pai Pedro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2790,

                "nome"=> "Paiva",
                "estado"=> "MG"
            ],
            [
                "id"=> 2791,

                "nome"=> "Palma",
                "estado"=> "MG"
            ],
            [
                "id"=> 2792,

                "nome"=> "Palmópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2793,

                "nome"=> "Papagaios",
                "estado"=> "MG"
            ],
            [
                "id"=> 2794,

                "nome"=> "Paracatu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2795,

                "nome"=> "Pará de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2796,

                "nome"=> "Paraguaçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2797,

                "nome"=> "Paraisópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2798,

                "nome"=> "Paraopeba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2799,

                "nome"=> "Passabém",
                "estado"=> "MG"
            ],
            [
                "id"=> 2800,

                "nome"=> "Passa Quatro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2801,

                "nome"=> "Passa Tempo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2802,

                "nome"=> "Passa-Vinte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2803,

                "nome"=> "Passos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2804,

                "nome"=> "Patis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2805,

                "nome"=> "Patos de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2806,

                "nome"=> "Patrocínio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2807,

                "nome"=> "Patrocínio do Muriaé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2808,

                "nome"=> "Paula Cândido",
                "estado"=> "MG"
            ],
            [
                "id"=> 2809,

                "nome"=> "Paulistas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2810,

                "nome"=> "Pavão",
                "estado"=> "MG"
            ],
            [
                "id"=> 2811,

                "nome"=> "Peçanha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2812,

                "nome"=> "Pedra Azul",
                "estado"=> "MG"
            ],
            [
                "id"=> 2813,

                "nome"=> "Pedra Bonita",
                "estado"=> "MG"
            ],
            [
                "id"=> 2814,

                "nome"=> "Pedra do Anta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2815,

                "nome"=> "Pedra do Indaiá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2816,

                "nome"=> "Pedra Dourada",
                "estado"=> "MG"
            ],
            [
                "id"=> 2817,

                "nome"=> "Pedralva",
                "estado"=> "MG"
            ],
            [
                "id"=> 2818,

                "nome"=> "Pedras de Maria da Cruz",
                "estado"=> "MG"
            ],
            [
                "id"=> 2819,

                "nome"=> "Pedrinópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2820,

                "nome"=> "Pedro Leopoldo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2821,

                "nome"=> "Pedro Teixeira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2822,

                "nome"=> "Pequeri",
                "estado"=> "MG"
            ],
            [
                "id"=> 2823,

                "nome"=> "Pequi",
                "estado"=> "MG"
            ],
            [
                "id"=> 2824,

                "nome"=> "Perdigão",
                "estado"=> "MG"
            ],
            [
                "id"=> 2825,

                "nome"=> "Perdizes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2826,

                "nome"=> "Perdões",
                "estado"=> "MG"
            ],
            [
                "id"=> 2827,

                "nome"=> "Periquito",
                "estado"=> "MG"
            ],
            [
                "id"=> 2828,

                "nome"=> "Pescador",
                "estado"=> "MG"
            ],
            [
                "id"=> 2829,

                "nome"=> "Piau",
                "estado"=> "MG"
            ],
            [
                "id"=> 2830,

                "nome"=> "Piedade de Caratinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2831,

                "nome"=> "Piedade de Ponte Nova",
                "estado"=> "MG"
            ],
            [
                "id"=> 2832,

                "nome"=> "Piedade do Rio Grande",
                "estado"=> "MG"
            ],
            [
                "id"=> 2833,

                "nome"=> "Piedade dos Gerais",
                "estado"=> "MG"
            ],
            [
                "id"=> 2834,

                "nome"=> "Pimenta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2835,

                "nome"=> "Pingo-D'Água",
                "estado"=> "MG"
            ],
            [
                "id"=> 2836,

                "nome"=> "Pintópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2837,

                "nome"=> "Piracema",
                "estado"=> "MG"
            ],
            [
                "id"=> 2838,

                "nome"=> "Pirajuba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2839,

                "nome"=> "Piranga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2840,

                "nome"=> "Piranguçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2841,

                "nome"=> "Piranguinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2842,

                "nome"=> "Pirapetinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2843,

                "nome"=> "Pirapora",
                "estado"=> "MG"
            ],
            [
                "id"=> 2844,

                "nome"=> "Piraúba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2845,

                "nome"=> "Pitangui",
                "estado"=> "MG"
            ],
            [
                "id"=> 2846,

                "nome"=> "Piumhi",
                "estado"=> "MG"
            ],
            [
                "id"=> 2847,

                "nome"=> "Planura",
                "estado"=> "MG"
            ],
            [
                "id"=> 2848,

                "nome"=> "Poço Fundo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2849,

                "nome"=> "Poços de Caldas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2850,

                "nome"=> "Pocrane",
                "estado"=> "MG"
            ],
            [
                "id"=> 2851,

                "nome"=> "Pompéu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2852,

                "nome"=> "Ponte Nova",
                "estado"=> "MG"
            ],
            [
                "id"=> 2853,

                "nome"=> "Ponto Chique",
                "estado"=> "MG"
            ],
            [
                "id"=> 2854,

                "nome"=> "Ponto dos Volantes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2855,

                "nome"=> "Porteirinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2856,

                "nome"=> "Porto Firme",
                "estado"=> "MG"
            ],
            [
                "id"=> 2857,

                "nome"=> "Poté",
                "estado"=> "MG"
            ],
            [
                "id"=> 2858,

                "nome"=> "Pouso Alegre",
                "estado"=> "MG"
            ],
            [
                "id"=> 2859,

                "nome"=> "Pouso Alto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2860,

                "nome"=> "Prados",
                "estado"=> "MG"
            ],
            [
                "id"=> 2861,

                "nome"=> "Prata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2862,

                "nome"=> "Pratápolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2863,

                "nome"=> "Pratinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2864,

                "nome"=> "Presidente Bernardes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2865,

                "nome"=> "Presidente Juscelino",
                "estado"=> "MG"
            ],
            [
                "id"=> 2866,

                "nome"=> "Presidente Kubitschek",
                "estado"=> "MG"
            ],
            [
                "id"=> 2867,

                "nome"=> "Presidente Olegário",
                "estado"=> "MG"
            ],
            [
                "id"=> 2868,

                "nome"=> "Alto Jequitibá",
                "estado"=> "MG"
            ],
            [
                "id"=> 2869,

                "nome"=> "Prudente de Morais",
                "estado"=> "MG"
            ],
            [
                "id"=> 2870,

                "nome"=> "Quartel Geral",
                "estado"=> "MG"
            ],
            [
                "id"=> 2871,

                "nome"=> "Queluzito",
                "estado"=> "MG"
            ],
            [
                "id"=> 2872,

                "nome"=> "Raposos",
                "estado"=> "MG"
            ],
            [
                "id"=> 2873,

                "nome"=> "Raul Soares",
                "estado"=> "MG"
            ],
            [
                "id"=> 2874,

                "nome"=> "Recreio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2875,

                "nome"=> "Reduto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2876,

                "nome"=> "Resende Costa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2877,

                "nome"=> "Resplendor",
                "estado"=> "MG"
            ],
            [
                "id"=> 2878,

                "nome"=> "Ressaquinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2879,

                "nome"=> "Riachinho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2880,

                "nome"=> "Riacho dos Machados",
                "estado"=> "MG"
            ],
            [
                "id"=> 2881,

                "nome"=> "Ribeirão das Neves",
                "estado"=> "MG"
            ],
            [
                "id"=> 2882,

                "nome"=> "Ribeirão Vermelho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2883,

                "nome"=> "Rio Acima",
                "estado"=> "MG"
            ],
            [
                "id"=> 2884,

                "nome"=> "Rio Casca",
                "estado"=> "MG"
            ],
            [
                "id"=> 2885,

                "nome"=> "Rio Doce",
                "estado"=> "MG"
            ],
            [
                "id"=> 2886,

                "nome"=> "Rio do Prado",
                "estado"=> "MG"
            ],
            [
                "id"=> 2887,

                "nome"=> "Rio Espera",
                "estado"=> "MG"
            ],
            [
                "id"=> 2888,

                "nome"=> "Rio Manso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2889,

                "nome"=> "Rio Novo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2890,

                "nome"=> "Rio Paranaíba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2891,

                "nome"=> "Rio Pardo de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2892,

                "nome"=> "Rio Piracicaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2893,

                "nome"=> "Rio Pomba",
                "estado"=> "MG"
            ],
            [
                "id"=> 2894,

                "nome"=> "Rio Preto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2895,

                "nome"=> "Rio Vermelho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2896,

                "nome"=> "Ritápolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2897,

                "nome"=> "Rochedo de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2898,

                "nome"=> "Rodeiro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2899,

                "nome"=> "Romaria",
                "estado"=> "MG"
            ],
            [
                "id"=> 2900,

                "nome"=> "Rosário da Limeira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2901,

                "nome"=> "Rubelita",
                "estado"=> "MG"
            ],
            [
                "id"=> 2902,

                "nome"=> "Rubim",
                "estado"=> "MG"
            ],
            [
                "id"=> 2903,

                "nome"=> "Sabará",
                "estado"=> "MG"
            ],
            [
                "id"=> 2904,

                "nome"=> "Sabinópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 2905,

                "nome"=> "Sacramento",
                "estado"=> "MG"
            ],
            [
                "id"=> 2906,

                "nome"=> "Salinas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2907,

                "nome"=> "Salto da Divisa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2908,

                "nome"=> "Santa Bárbara",
                "estado"=> "MG"
            ],
            [
                "id"=> 2909,

                "nome"=> "Santa Bárbara do Leste",
                "estado"=> "MG"
            ],
            [
                "id"=> 2910,

                "nome"=> "Santa Bárbara do Monte Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 2911,

                "nome"=> "Santa Bárbara do Tugúrio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2912,

                "nome"=> "Santa Cruz de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2913,

                "nome"=> "Santa Cruz de Salinas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2914,

                "nome"=> "Santa Cruz do Escalvado",
                "estado"=> "MG"
            ],
            [
                "id"=> 2915,

                "nome"=> "Santa Efigênia de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2916,

                "nome"=> "Santa Fé de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2917,

                "nome"=> "Santa Helena de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2918,

                "nome"=> "Santa Juliana",
                "estado"=> "MG"
            ],
            [
                "id"=> 2919,

                "nome"=> "Santa Luzia",
                "estado"=> "MG"
            ],
            [
                "id"=> 2920,

                "nome"=> "Santa Margarida",
                "estado"=> "MG"
            ],
            [
                "id"=> 2921,

                "nome"=> "Santa Maria de Itabira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2922,

                "nome"=> "Santa Maria do Salto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2923,

                "nome"=> "Santa Maria do Suaçuí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2924,

                "nome"=> "Santana da Vargem",
                "estado"=> "MG"
            ],
            [
                "id"=> 2925,

                "nome"=> "Santana de Cataguases",
                "estado"=> "MG"
            ],
            [
                "id"=> 2926,

                "nome"=> "Santana de Pirapama",
                "estado"=> "MG"
            ],
            [
                "id"=> 2927,

                "nome"=> "Santana do Deserto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2928,

                "nome"=> "Santana do Garambéu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2929,

                "nome"=> "Santana do Jacaré",
                "estado"=> "MG"
            ],
            [
                "id"=> 2930,

                "nome"=> "Santana do Manhuaçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2931,

                "nome"=> "Santana do Paraíso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2932,

                "nome"=> "Santana do Riacho",
                "estado"=> "MG"
            ],
            [
                "id"=> 2933,

                "nome"=> "Santana dos Montes",
                "estado"=> "MG"
            ],
            [
                "id"=> 2934,

                "nome"=> "Santa Rita de Caldas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2935,

                "nome"=> "Santa Rita de Jacutinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 2936,

                "nome"=> "Santa Rita de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2937,

                "nome"=> "Santa Rita de Ibitipoca",
                "estado"=> "MG"
            ],
            [
                "id"=> 2938,

                "nome"=> "Santa Rita do Itueto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2939,

                "nome"=> "Santa Rita do Sapucaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2940,

                "nome"=> "Santa Rosa da Serra",
                "estado"=> "MG"
            ],
            [
                "id"=> 2941,

                "nome"=> "Santa Vitória",
                "estado"=> "MG"
            ],
            [
                "id"=> 2942,

                "nome"=> "Santo Antônio do Amparo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2943,

                "nome"=> "Santo Antônio do Aventureiro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2944,

                "nome"=> "Santo Antônio do Grama",
                "estado"=> "MG"
            ],
            [
                "id"=> 2945,

                "nome"=> "Santo Antônio do Itambé",
                "estado"=> "MG"
            ],
            [
                "id"=> 2946,

                "nome"=> "Santo Antônio do Jacinto",
                "estado"=> "MG"
            ],
            [
                "id"=> 2947,

                "nome"=> "Santo Antônio do Monte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2948,

                "nome"=> "Santo Antônio do Retiro",
                "estado"=> "MG"
            ],
            [
                "id"=> 2949,

                "nome"=> "Santo Antônio do Rio Abaixo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2950,

                "nome"=> "Santo Hipólito",
                "estado"=> "MG"
            ],
            [
                "id"=> 2951,

                "nome"=> "Santos Dumont",
                "estado"=> "MG"
            ],
            [
                "id"=> 2952,

                "nome"=> "São Bento Abade",
                "estado"=> "MG"
            ],
            [
                "id"=> 2953,

                "nome"=> "São Brás do Suaçuí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2954,

                "nome"=> "São Domingos das Dores",
                "estado"=> "MG"
            ],
            [
                "id"=> 2955,

                "nome"=> "São Domingos do Prata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2956,

                "nome"=> "São Félix de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2957,

                "nome"=> "São Francisco",
                "estado"=> "MG"
            ],
            [
                "id"=> 2958,

                "nome"=> "São Francisco de Paula",
                "estado"=> "MG"
            ],
            [
                "id"=> 2959,

                "nome"=> "São Francisco de Sales",
                "estado"=> "MG"
            ],
            [
                "id"=> 2960,

                "nome"=> "São Francisco do Glória",
                "estado"=> "MG"
            ],
            [
                "id"=> 2961,

                "nome"=> "São Geraldo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2962,

                "nome"=> "São Geraldo da Piedade",
                "estado"=> "MG"
            ],
            [
                "id"=> 2963,

                "nome"=> "São Geraldo do Baixio",
                "estado"=> "MG"
            ],
            [
                "id"=> 2964,

                "nome"=> "São Gonçalo do Abaeté",
                "estado"=> "MG"
            ],
            [
                "id"=> 2965,

                "nome"=> "São Gonçalo do Pará",
                "estado"=> "MG"
            ],
            [
                "id"=> 2966,

                "nome"=> "São Gonçalo do Rio Abaixo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2967,

                "nome"=> "São Gonçalo do Sapucaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2968,

                "nome"=> "São Gotardo",
                "estado"=> "MG"
            ],
            [
                "id"=> 2969,

                "nome"=> "São João Batista do Glória",
                "estado"=> "MG"
            ],
            [
                "id"=> 2970,

                "nome"=> "São João da Lagoa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2971,

                "nome"=> "São João da Mata",
                "estado"=> "MG"
            ],
            [
                "id"=> 2972,

                "nome"=> "São João da Ponte",
                "estado"=> "MG"
            ],
            [
                "id"=> 2973,

                "nome"=> "São João das Missões",
                "estado"=> "MG"
            ],
            [
                "id"=> 2974,

                "nome"=> "São João del Rei",
                "estado"=> "MG"
            ],
            [
                "id"=> 2975,

                "nome"=> "São João do Manhuaçu",
                "estado"=> "MG"
            ],
            [
                "id"=> 2976,

                "nome"=> "São João do Manteninha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2977,

                "nome"=> "São João do Oriente",
                "estado"=> "MG"
            ],
            [
                "id"=> 2978,

                "nome"=> "São João do Pacuí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2979,

                "nome"=> "São João do Paraíso",
                "estado"=> "MG"
            ],
            [
                "id"=> 2980,

                "nome"=> "São João Evangelista",
                "estado"=> "MG"
            ],
            [
                "id"=> 2981,

                "nome"=> "São João Nepomuceno",
                "estado"=> "MG"
            ],
            [
                "id"=> 2982,

                "nome"=> "São Joaquim de Bicas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2983,

                "nome"=> "São José da Barra",
                "estado"=> "MG"
            ],
            [
                "id"=> 2984,

                "nome"=> "São José da Lapa",
                "estado"=> "MG"
            ],
            [
                "id"=> 2985,

                "nome"=> "São José da Safira",
                "estado"=> "MG"
            ],
            [
                "id"=> 2986,

                "nome"=> "São José da Varginha",
                "estado"=> "MG"
            ],
            [
                "id"=> 2987,

                "nome"=> "São José do Alegre",
                "estado"=> "MG"
            ],
            [
                "id"=> 2988,

                "nome"=> "São José do Divino",
                "estado"=> "MG"
            ],
            [
                "id"=> 2989,

                "nome"=> "São José do Goiabal",
                "estado"=> "MG"
            ],
            [
                "id"=> 2990,

                "nome"=> "São José do Jacuri",
                "estado"=> "MG"
            ],
            [
                "id"=> 2991,

                "nome"=> "São José do Mantimento",
                "estado"=> "MG"
            ],
            [
                "id"=> 2992,

                "nome"=> "São Lourenço",
                "estado"=> "MG"
            ],
            [
                "id"=> 2993,

                "nome"=> "São Miguel do Anta",
                "estado"=> "MG"
            ],
            [
                "id"=> 2994,

                "nome"=> "São Pedro da União",
                "estado"=> "MG"
            ],
            [
                "id"=> 2995,

                "nome"=> "São Pedro dos Ferros",
                "estado"=> "MG"
            ],
            [
                "id"=> 2996,

                "nome"=> "São Pedro do Suaçuí",
                "estado"=> "MG"
            ],
            [
                "id"=> 2997,

                "nome"=> "São Romão",
                "estado"=> "MG"
            ],
            [
                "id"=> 2998,

                "nome"=> "São Roque de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 2999,

                "nome"=> "São Sebastião da Bela Vista",
                "estado"=> "MG"
            ],
            [
                "id"=> 3000,

                "nome"=> "São Sebastião da Vargem Alegre",
                "estado"=> "MG"
            ],
            [
                "id"=> 3001,

                "nome"=> "São Sebastião do Anta",
                "estado"=> "MG"
            ],
            [
                "id"=> 3002,

                "nome"=> "São Sebastião do Maranhão",
                "estado"=> "MG"
            ],
            [
                "id"=> 3003,

                "nome"=> "São Sebastião do Oeste",
                "estado"=> "MG"
            ],
            [
                "id"=> 3004,

                "nome"=> "São Sebastião do Paraíso",
                "estado"=> "MG"
            ],
            [
                "id"=> 3005,

                "nome"=> "São Sebastião do Rio Preto",
                "estado"=> "MG"
            ],
            [
                "id"=> 3006,

                "nome"=> "São Sebastião do Rio Verde",
                "estado"=> "MG"
            ],
            [
                "id"=> 3007,

                "nome"=> "São Tiago",
                "estado"=> "MG"
            ],
            [
                "id"=> 3008,

                "nome"=> "São Tomás de Aquino",
                "estado"=> "MG"
            ],
            [
                "id"=> 3009,

                "nome"=> "São Thomé das Letras",
                "estado"=> "MG"
            ],
            [
                "id"=> 3010,

                "nome"=> "São Vicente de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3011,

                "nome"=> "Sapucaí-Mirim",
                "estado"=> "MG"
            ],
            [
                "id"=> 3012,

                "nome"=> "Sardoá",
                "estado"=> "MG"
            ],
            [
                "id"=> 3013,

                "nome"=> "Sarzedo",
                "estado"=> "MG"
            ],
            [
                "id"=> 3014,

                "nome"=> "Setubinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 3015,

                "nome"=> "Sem-Peixe",
                "estado"=> "MG"
            ],
            [
                "id"=> 3016,

                "nome"=> "Senador Amaral",
                "estado"=> "MG"
            ],
            [
                "id"=> 3017,

                "nome"=> "Senador Cortes",
                "estado"=> "MG"
            ],
            [
                "id"=> 3018,

                "nome"=> "Senador Firmino",
                "estado"=> "MG"
            ],
            [
                "id"=> 3019,

                "nome"=> "Senador José Bento",
                "estado"=> "MG"
            ],
            [
                "id"=> 3020,

                "nome"=> "Senador Modestino Gonçalves",
                "estado"=> "MG"
            ],
            [
                "id"=> 3021,

                "nome"=> "Senhora de Oliveira",
                "estado"=> "MG"
            ],
            [
                "id"=> 3022,

                "nome"=> "Senhora do Porto",
                "estado"=> "MG"
            ],
            [
                "id"=> 3023,

                "nome"=> "Senhora dos Remédios",
                "estado"=> "MG"
            ],
            [
                "id"=> 3024,

                "nome"=> "Sericita",
                "estado"=> "MG"
            ],
            [
                "id"=> 3025,

                "nome"=> "Seritinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 3026,

                "nome"=> "Serra Azul de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3027,

                "nome"=> "Serra da Saudade",
                "estado"=> "MG"
            ],
            [
                "id"=> 3028,

                "nome"=> "Serra dos Aimorés",
                "estado"=> "MG"
            ],
            [
                "id"=> 3029,

                "nome"=> "Serra do Salitre",
                "estado"=> "MG"
            ],
            [
                "id"=> 3030,

                "nome"=> "Serrania",
                "estado"=> "MG"
            ],
            [
                "id"=> 3031,

                "nome"=> "Serranópolis de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3032,

                "nome"=> "Serranos",
                "estado"=> "MG"
            ],
            [
                "id"=> 3033,

                "nome"=> "Serro",
                "estado"=> "MG"
            ],
            [
                "id"=> 3034,

                "nome"=> "Sete Lagoas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3035,

                "nome"=> "Silveirânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3036,

                "nome"=> "Silvianópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 3037,

                "nome"=> "Simão Pereira",
                "estado"=> "MG"
            ],
            [
                "id"=> 3038,

                "nome"=> "Simonésia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3039,

                "nome"=> "Sobrália",
                "estado"=> "MG"
            ],
            [
                "id"=> 3040,

                "nome"=> "Soledade de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3041,

                "nome"=> "Tabuleiro",
                "estado"=> "MG"
            ],
            [
                "id"=> 3042,

                "nome"=> "Taiobeiras",
                "estado"=> "MG"
            ],
            [
                "id"=> 3043,

                "nome"=> "Taparuba",
                "estado"=> "MG"
            ],
            [
                "id"=> 3044,

                "nome"=> "Tapira",
                "estado"=> "MG"
            ],
            [
                "id"=> 3045,

                "nome"=> "Tapiraí",
                "estado"=> "MG"
            ],
            [
                "id"=> 3046,

                "nome"=> "Taquaraçu de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3047,

                "nome"=> "Tarumirim",
                "estado"=> "MG"
            ],
            [
                "id"=> 3048,

                "nome"=> "Teixeiras",
                "estado"=> "MG"
            ],
            [
                "id"=> 3049,

                "nome"=> "Teófilo Otoni",
                "estado"=> "MG"
            ],
            [
                "id"=> 3050,

                "nome"=> "Timóteo",
                "estado"=> "MG"
            ],
            [
                "id"=> 3051,

                "nome"=> "Tiradentes",
                "estado"=> "MG"
            ],
            [
                "id"=> 3052,

                "nome"=> "Tiros",
                "estado"=> "MG"
            ],
            [
                "id"=> 3053,

                "nome"=> "Tocantins",
                "estado"=> "MG"
            ],
            [
                "id"=> 3054,

                "nome"=> "Tocos do Moji",
                "estado"=> "MG"
            ],
            [
                "id"=> 3055,

                "nome"=> "Toledo",
                "estado"=> "MG"
            ],
            [
                "id"=> 3056,

                "nome"=> "Tombos",
                "estado"=> "MG"
            ],
            [
                "id"=> 3057,

                "nome"=> "Três Corações",
                "estado"=> "MG"
            ],
            [
                "id"=> 3058,

                "nome"=> "Três Marias",
                "estado"=> "MG"
            ],
            [
                "id"=> 3059,

                "nome"=> "Três Pontas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3060,

                "nome"=> "Tumiritinga",
                "estado"=> "MG"
            ],
            [
                "id"=> 3061,

                "nome"=> "Tupaciguara",
                "estado"=> "MG"
            ],
            [
                "id"=> 3062,

                "nome"=> "Turmalina",
                "estado"=> "MG"
            ],
            [
                "id"=> 3063,

                "nome"=> "Turvolândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3064,

                "nome"=> "Ubá",
                "estado"=> "MG"
            ],
            [
                "id"=> 3065,

                "nome"=> "Ubaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 3066,

                "nome"=> "Ubaporanga",
                "estado"=> "MG"
            ],
            [
                "id"=> 3067,

                "nome"=> "Uberaba",
                "estado"=> "MG"
            ],
            [
                "id"=> 3068,

                "nome"=> "Uberlândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3069,

                "nome"=> "Umburatiba",
                "estado"=> "MG"
            ],
            [
                "id"=> 3070,

                "nome"=> "Unaí",
                "estado"=> "MG"
            ],
            [
                "id"=> 3071,

                "nome"=> "União de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3072,

                "nome"=> "Uruana de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3073,

                "nome"=> "Urucânia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3074,

                "nome"=> "Urucuia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3075,

                "nome"=> "Vargem Alegre",
                "estado"=> "MG"
            ],
            [
                "id"=> 3076,

                "nome"=> "Vargem Bonita",
                "estado"=> "MG"
            ],
            [
                "id"=> 3077,

                "nome"=> "Vargem Grande do Rio Pardo",
                "estado"=> "MG"
            ],
            [
                "id"=> 3078,

                "nome"=> "Varginha",
                "estado"=> "MG"
            ],
            [
                "id"=> 3079,

                "nome"=> "Varjão de Minas",
                "estado"=> "MG"
            ],
            [
                "id"=> 3080,

                "nome"=> "Várzea da Palma",
                "estado"=> "MG"
            ],
            [
                "id"=> 3081,

                "nome"=> "Varzelândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3082,

                "nome"=> "Vazante",
                "estado"=> "MG"
            ],
            [
                "id"=> 3083,

                "nome"=> "Verdelândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3084,

                "nome"=> "Veredinha",
                "estado"=> "MG"
            ],
            [
                "id"=> 3085,

                "nome"=> "Veríssimo",
                "estado"=> "MG"
            ],
            [
                "id"=> 3086,

                "nome"=> "Vermelho Novo",
                "estado"=> "MG"
            ],
            [
                "id"=> 3087,

                "nome"=> "Vespasiano",
                "estado"=> "MG"
            ],
            [
                "id"=> 3088,

                "nome"=> "Viçosa",
                "estado"=> "MG"
            ],
            [
                "id"=> 3089,

                "nome"=> "Vieiras",
                "estado"=> "MG"
            ],
            [
                "id"=> 3090,

                "nome"=> "Mathias Lobato",
                "estado"=> "MG"
            ],
            [
                "id"=> 3091,

                "nome"=> "Virgem da Lapa",
                "estado"=> "MG"
            ],
            [
                "id"=> 3092,

                "nome"=> "Virgínia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3093,

                "nome"=> "Virginópolis",
                "estado"=> "MG"
            ],
            [
                "id"=> 3094,

                "nome"=> "Virgolândia",
                "estado"=> "MG"
            ],
            [
                "id"=> 3095,

                "nome"=> "Visconde do Rio Branco",
                "estado"=> "MG"
            ],
            [
                "id"=> 3096,

                "nome"=> "Volta Grande",
                "estado"=> "MG"
            ],
            [
                "id"=> 3097,

                "nome"=> "Wenceslau Braz",
                "estado"=> "MG"
            ],
            [
                "id"=> 3098,

                "nome"=> "Afonso Cláudio",
                "estado"=> "ES"
            ],
            [
                "id"=> 3099,

                "nome"=> "Águia Branca",
                "estado"=> "ES"
            ],
            [
                "id"=> 3100,

                "nome"=> "Água Doce do Norte",
                "estado"=> "ES"
            ],
            [
                "id"=> 3101,

                "nome"=> "Alegre",
                "estado"=> "ES"
            ],
            [
                "id"=> 3102,

                "nome"=> "Alfredo Chaves",
                "estado"=> "ES"
            ],
            [
                "id"=> 3103,

                "nome"=> "Alto Rio Novo",
                "estado"=> "ES"
            ],
            [
                "id"=> 3104,

                "nome"=> "Anchieta",
                "estado"=> "ES"
            ],
            [
                "id"=> 3105,

                "nome"=> "Apiacá",
                "estado"=> "ES"
            ],
            [
                "id"=> 3106,

                "nome"=> "Aracruz",
                "estado"=> "ES"
            ],
            [
                "id"=> 3107,

                "nome"=> "Atilio Vivacqua",
                "estado"=> "ES"
            ],
            [
                "id"=> 3108,

                "nome"=> "Baixo Guandu",
                "estado"=> "ES"
            ],
            [
                "id"=> 3109,

                "nome"=> "Barra de São Francisco",
                "estado"=> "ES"
            ],
            [
                "id"=> 3110,

                "nome"=> "Boa Esperança",
                "estado"=> "ES"
            ],
            [
                "id"=> 3111,

                "nome"=> "Bom Jesus do Norte",
                "estado"=> "ES"
            ],
            [
                "id"=> 3112,

                "nome"=> "Brejetuba",
                "estado"=> "ES"
            ],
            [
                "id"=> 3113,

                "nome"=> "Cachoeiro de Itapemirim",
                "estado"=> "ES"
            ],
            [
                "id"=> 3114,

                "nome"=> "Cariacica",
                "estado"=> "ES"
            ],
            [
                "id"=> 3115,

                "nome"=> "Castelo",
                "estado"=> "ES"
            ],
            [
                "id"=> 3116,

                "nome"=> "Colatina",
                "estado"=> "ES"
            ],
            [
                "id"=> 3117,

                "nome"=> "Conceição da Barra",
                "estado"=> "ES"
            ],
            [
                "id"=> 3118,

                "nome"=> "Conceição do Castelo",
                "estado"=> "ES"
            ],
            [
                "id"=> 3119,

                "nome"=> "Divino de São Lourenço",
                "estado"=> "ES"
            ],
            [
                "id"=> 3120,

                "nome"=> "Domingos Martins",
                "estado"=> "ES"
            ],
            [
                "id"=> 3121,

                "nome"=> "Dores do Rio Preto",
                "estado"=> "ES"
            ],
            [
                "id"=> 3122,

                "nome"=> "Ecoporanga",
                "estado"=> "ES"
            ],
            [
                "id"=> 3123,

                "nome"=> "Fundão",
                "estado"=> "ES"
            ],
            [
                "id"=> 3124,

                "nome"=> "Governador Lindenberg",
                "estado"=> "ES"
            ],
            [
                "id"=> 3125,

                "nome"=> "Guaçuí",
                "estado"=> "ES"
            ],
            [
                "id"=> 3126,

                "nome"=> "Guarapari",
                "estado"=> "ES"
            ],
            [
                "id"=> 3127,

                "nome"=> "Ibatiba",
                "estado"=> "ES"
            ],
            [
                "id"=> 3128,

                "nome"=> "Ibiraçu",
                "estado"=> "ES"
            ],
            [
                "id"=> 3129,

                "nome"=> "Ibitirama",
                "estado"=> "ES"
            ],
            [
                "id"=> 3130,

                "nome"=> "Iconha",
                "estado"=> "ES"
            ],
            [
                "id"=> 3131,

                "nome"=> "Irupi",
                "estado"=> "ES"
            ],
            [
                "id"=> 3132,

                "nome"=> "Itaguaçu",
                "estado"=> "ES"
            ],
            [
                "id"=> 3133,

                "nome"=> "Itapemirim",
                "estado"=> "ES"
            ],
            [
                "id"=> 3134,

                "nome"=> "Itarana",
                "estado"=> "ES"
            ],
            [
                "id"=> 3135,

                "nome"=> "Iúna",
                "estado"=> "ES"
            ],
            [
                "id"=> 3136,

                "nome"=> "Jaguaré",
                "estado"=> "ES"
            ],
            [
                "id"=> 3137,

                "nome"=> "Jerônimo Monteiro",
                "estado"=> "ES"
            ],
            [
                "id"=> 3138,

                "nome"=> "João Neiva",
                "estado"=> "ES"
            ],
            [
                "id"=> 3139,

                "nome"=> "Laranja da Terra",
                "estado"=> "ES"
            ],
            [
                "id"=> 3140,

                "nome"=> "Linhares",
                "estado"=> "ES"
            ],
            [
                "id"=> 3141,

                "nome"=> "Mantenópolis",
                "estado"=> "ES"
            ],
            [
                "id"=> 3142,

                "nome"=> "Marataízes",
                "estado"=> "ES"
            ],
            [
                "id"=> 3143,

                "nome"=> "Marechal Floriano",
                "estado"=> "ES"
            ],
            [
                "id"=> 3144,

                "nome"=> "Marilândia",
                "estado"=> "ES"
            ],
            [
                "id"=> 3145,

                "nome"=> "Mimoso do Sul",
                "estado"=> "ES"
            ],
            [
                "id"=> 3146,

                "nome"=> "Montanha",
                "estado"=> "ES"
            ],
            [
                "id"=> 3147,

                "nome"=> "Mucurici",
                "estado"=> "ES"
            ],
            [
                "id"=> 3148,

                "nome"=> "Muniz Freire",
                "estado"=> "ES"
            ],
            [
                "id"=> 3149,

                "nome"=> "Muqui",
                "estado"=> "ES"
            ],
            [
                "id"=> 3150,

                "nome"=> "Nova Venécia",
                "estado"=> "ES"
            ],
            [
                "id"=> 3151,

                "nome"=> "Pancas",
                "estado"=> "ES"
            ],
            [
                "id"=> 3152,

                "nome"=> "Pedro Canário",
                "estado"=> "ES"
            ],
            [
                "id"=> 3153,

                "nome"=> "Pinheiros",
                "estado"=> "ES"
            ],
            [
                "id"=> 3154,

                "nome"=> "Piúma",
                "estado"=> "ES"
            ],
            [
                "id"=> 3155,

                "nome"=> "Ponto Belo",
                "estado"=> "ES"
            ],
            [
                "id"=> 3156,

                "nome"=> "Presidente Kennedy",
                "estado"=> "ES"
            ],
            [
                "id"=> 3157,

                "nome"=> "Rio Bananal",
                "estado"=> "ES"
            ],
            [
                "id"=> 3158,

                "nome"=> "Rio Novo do Sul",
                "estado"=> "ES"
            ],
            [
                "id"=> 3159,

                "nome"=> "Santa Leopoldina",
                "estado"=> "ES"
            ],
            [
                "id"=> 3160,

                "nome"=> "Santa Maria de Jetibá",
                "estado"=> "ES"
            ],
            [
                "id"=> 3161,

                "nome"=> "Santa Teresa",
                "estado"=> "ES"
            ],
            [
                "id"=> 3162,

                "nome"=> "São Domingos do Norte",
                "estado"=> "ES"
            ],
            [
                "id"=> 3163,

                "nome"=> "São Gabriel da Palha",
                "estado"=> "ES"
            ],
            [
                "id"=> 3164,

                "nome"=> "São José do Calçado",
                "estado"=> "ES"
            ],
            [
                "id"=> 3165,

                "nome"=> "São Mateus",
                "estado"=> "ES"
            ],
            [
                "id"=> 3166,

                "nome"=> "São Roque do Canaã",
                "estado"=> "ES"
            ],
            [
                "id"=> 3167,

                "nome"=> "Serra",
                "estado"=> "ES"
            ],
            [
                "id"=> 3168,

                "nome"=> "Sooretama",
                "estado"=> "ES"
            ],
            [
                "id"=> 3169,

                "nome"=> "Vargem Alta",
                "estado"=> "ES"
            ],
            [
                "id"=> 3170,

                "nome"=> "Venda Nova do Imigrante",
                "estado"=> "ES"
            ],
            [
                "id"=> 3171,

                "nome"=> "Viana",
                "estado"=> "ES"
            ],
            [
                "id"=> 3172,

                "nome"=> "Vila Pavão",
                "estado"=> "ES"
            ],
            [
                "id"=> 3173,

                "nome"=> "Vila Valério",
                "estado"=> "ES"
            ],
            [
                "id"=> 3174,

                "nome"=> "Vila Velha",
                "estado"=> "ES"
            ],
            [
                "id"=> 3175,

                "nome"=> "Vitória",
                "estado"=> "ES"
            ],
            [
                "id"=> 3176,

                "nome"=> "Angra dos Reis",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3177,

                "nome"=> "Aperibé",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3178,

                "nome"=> "Araruama",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3179,

                "nome"=> "Areal",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3180,

                "nome"=> "Armação dos Búzios",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3181,

                "nome"=> "Arraial do Cabo",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3182,

                "nome"=> "Barra do Piraí",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3183,

                "nome"=> "Barra Mansa",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3184,

                "nome"=> "Belford Roxo",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3185,

                "nome"=> "Bom Jardim",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3186,

                "nome"=> "Bom Jesus do Itabapoana",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3187,

                "nome"=> "Cabo Frio",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3188,

                "nome"=> "Cachoeiras de Macacu",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3189,

                "nome"=> "Cambuci",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3190,

                "nome"=> "Carapebus",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3191,

                "nome"=> "Comendador Levy Gasparian",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3192,

                "nome"=> "Campos dos Goytacazes",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3193,

                "nome"=> "Cantagalo",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3194,

                "nome"=> "Cardoso Moreira",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3195,

                "nome"=> "Carmo",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3196,

                "nome"=> "Casimiro de Abreu",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3197,

                "nome"=> "Conceição de Macabu",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3198,

                "nome"=> "Cordeiro",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3199,

                "nome"=> "Duas Barras",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3200,

                "nome"=> "Duque de Caxias",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3201,

                "nome"=> "Engenheiro Paulo de Frontin",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3202,

                "nome"=> "Guapimirim",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3203,

                "nome"=> "Iguaba Grande",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3204,

                "nome"=> "Itaboraí",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3205,

                "nome"=> "Itaguaí",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3206,

                "nome"=> "Italva",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3207,

                "nome"=> "Itaocara",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3208,

                "nome"=> "Itaperuna",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3209,

                "nome"=> "Itatiaia",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3210,

                "nome"=> "Japeri",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3211,

                "nome"=> "Laje do Muriaé",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3212,

                "nome"=> "Macaé",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3213,

                "nome"=> "Macuco",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3214,

                "nome"=> "Magé",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3215,

                "nome"=> "Mangaratiba",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3216,

                "nome"=> "Maricá",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3217,

                "nome"=> "Mendes",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3218,

                "nome"=> "Mesquita",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3219,

                "nome"=> "Miguel Pereira",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3220,

                "nome"=> "Miracema",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3221,

                "nome"=> "Natividade",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3222,

                "nome"=> "Nilópolis",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3223,

                "nome"=> "Niterói",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3224,

                "nome"=> "Nova Friburgo",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3225,

                "nome"=> "Nova Iguaçu",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3226,

                "nome"=> "Paracambi",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3227,

                "nome"=> "Paraíba do Sul",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3228,

                "nome"=> "Paraty",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3229,

                "nome"=> "Paty do Alferes",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3230,

                "nome"=> "Petrópolis",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3231,

                "nome"=> "Pinheiral",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3232,

                "nome"=> "Piraí",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3233,

                "nome"=> "Porciúncula",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3234,

                "nome"=> "Porto Real",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3235,

                "nome"=> "Quatis",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3236,

                "nome"=> "Queimados",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3237,

                "nome"=> "Quissamã",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3238,

                "nome"=> "Resende",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3239,

                "nome"=> "Rio Bonito",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3240,

                "nome"=> "Rio Claro",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3241,

                "nome"=> "Rio das Flores",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3242,

                "nome"=> "Rio das Ostras",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3243,

                "nome"=> "Rio de Janeiro",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3244,

                "nome"=> "Santa Maria Madalena",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3245,

                "nome"=> "Santo Antônio de Pádua",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3246,

                "nome"=> "São Francisco de Itabapoana",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3247,

                "nome"=> "São Fidélis",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3248,

                "nome"=> "São Gonçalo",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3249,

                "nome"=> "São João da Barra",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3250,

                "nome"=> "São João de Meriti",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3251,

                "nome"=> "São José de Ubá",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3252,

                "nome"=> "São José do Vale do Rio Preto",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3253,

                "nome"=> "São Pedro da Aldeia",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3254,

                "nome"=> "São Sebastião do Alto",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3255,

                "nome"=> "Sapucaia",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3256,

                "nome"=> "Saquarema",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3257,

                "nome"=> "Seropédica",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3258,

                "nome"=> "Silva Jardim",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3259,

                "nome"=> "Sumidouro",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3260,

                "nome"=> "Tanguá",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3261,

                "nome"=> "Teresópolis",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3262,

                "nome"=> "Trajano de Moraes",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3263,

                "nome"=> "Três Rios",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3264,

                "nome"=> "Valença",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3265,

                "nome"=> "Varre-Sai",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3266,

                "nome"=> "Vassouras",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3267,

                "nome"=> "Volta Redonda",
                "estado"=> "RJ"
            ],
            [
                "id"=> 3268,

                "nome"=> "Adamantina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3269,

                "nome"=> "Adolfo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3270,

                "nome"=> "Aguaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3271,

                "nome"=> "Águas da Prata",
                "estado"=> "SP"
            ],
            [
                "id"=> 3272,

                "nome"=> "Águas de Lindóia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3273,

                "nome"=> "Águas de Santa Bárbara",
                "estado"=> "SP"
            ],
            [
                "id"=> 3274,

                "nome"=> "Águas de São Pedro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3275,

                "nome"=> "Agudos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3276,

                "nome"=> "Alambari",
                "estado"=> "SP"
            ],
            [
                "id"=> 3277,

                "nome"=> "Alfredo Marcondes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3278,

                "nome"=> "Altair",
                "estado"=> "SP"
            ],
            [
                "id"=> 3279,

                "nome"=> "Altinópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3280,

                "nome"=> "Alto Alegre",
                "estado"=> "SP"
            ],
            [
                "id"=> 3281,

                "nome"=> "Alumínio",
                "estado"=> "SP"
            ],
            [
                "id"=> 3282,

                "nome"=> "Álvares Florence",
                "estado"=> "SP"
            ],
            [
                "id"=> 3283,

                "nome"=> "Álvares Machado",
                "estado"=> "SP"
            ],
            [
                "id"=> 3284,

                "nome"=> "Álvaro de Carvalho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3285,

                "nome"=> "Alvinlândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3286,

                "nome"=> "Americana",
                "estado"=> "SP"
            ],
            [
                "id"=> 3287,

                "nome"=> "Américo Brasiliense",
                "estado"=> "SP"
            ],
            [
                "id"=> 3288,

                "nome"=> "Américo de Campos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3289,

                "nome"=> "Amparo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3290,

                "nome"=> "Analândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3291,

                "nome"=> "Andradina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3292,

                "nome"=> "Angatuba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3293,

                "nome"=> "Anhembi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3294,

                "nome"=> "Anhumas",
                "estado"=> "SP"
            ],
            [
                "id"=> 3295,

                "nome"=> "Aparecida",
                "estado"=> "SP"
            ],
            [
                "id"=> 3296,

                "nome"=> "Aparecida D'Oeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3297,

                "nome"=> "Apiaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3298,

                "nome"=> "Araçariguama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3299,

                "nome"=> "Araçatuba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3300,

                "nome"=> "Araçoiaba da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3301,

                "nome"=> "Aramina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3302,

                "nome"=> "Arandu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3303,

                "nome"=> "Arapeí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3304,

                "nome"=> "Araraquara",
                "estado"=> "SP"
            ],
            [
                "id"=> 3305,

                "nome"=> "Araras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3306,

                "nome"=> "Arco-Íris",
                "estado"=> "SP"
            ],
            [
                "id"=> 3307,

                "nome"=> "Arealva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3308,

                "nome"=> "Areias",
                "estado"=> "SP"
            ],
            [
                "id"=> 3309,

                "nome"=> "Areiópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3310,

                "nome"=> "Ariranha",
                "estado"=> "SP"
            ],
            [
                "id"=> 3311,

                "nome"=> "Artur Nogueira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3312,

                "nome"=> "Arujá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3313,

                "nome"=> "Aspásia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3314,

                "nome"=> "Assis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3315,

                "nome"=> "Atibaia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3316,

                "nome"=> "Auriflama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3317,

                "nome"=> "Avaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3318,

                "nome"=> "Avanhandava",
                "estado"=> "SP"
            ],
            [
                "id"=> 3319,

                "nome"=> "Avaré",
                "estado"=> "SP"
            ],
            [
                "id"=> 3320,

                "nome"=> "Bady Bassitt",
                "estado"=> "SP"
            ],
            [
                "id"=> 3321,

                "nome"=> "Balbinos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3322,

                "nome"=> "Bálsamo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3323,

                "nome"=> "Bananal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3324,

                "nome"=> "Barão de Antonina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3325,

                "nome"=> "Barbosa",
                "estado"=> "SP"
            ],
            [
                "id"=> 3326,

                "nome"=> "Bariri",
                "estado"=> "SP"
            ],
            [
                "id"=> 3327,

                "nome"=> "Barra Bonita",
                "estado"=> "SP"
            ],
            [
                "id"=> 3328,

                "nome"=> "Barra do Chapéu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3329,

                "nome"=> "Barra do Turvo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3330,

                "nome"=> "Barretos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3331,

                "nome"=> "Barrinha",
                "estado"=> "SP"
            ],
            [
                "id"=> 3332,

                "nome"=> "Barueri",
                "estado"=> "SP"
            ],
            [
                "id"=> 3333,

                "nome"=> "Bastos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3334,

                "nome"=> "Batatais",
                "estado"=> "SP"
            ],
            [
                "id"=> 3335,

                "nome"=> "Bauru",
                "estado"=> "SP"
            ],
            [
                "id"=> 3336,

                "nome"=> "Bebedouro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3337,

                "nome"=> "Bento de Abreu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3338,

                "nome"=> "Bernardino de Campos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3339,

                "nome"=> "Bertioga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3340,

                "nome"=> "Bilac",
                "estado"=> "SP"
            ],
            [
                "id"=> 3341,

                "nome"=> "Birigui",
                "estado"=> "SP"
            ],
            [
                "id"=> 3342,

                "nome"=> "Biritiba-Mirim",
                "estado"=> "SP"
            ],
            [
                "id"=> 3343,

                "nome"=> "Boa Esperança do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3344,

                "nome"=> "Bocaina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3345,

                "nome"=> "Bofete",
                "estado"=> "SP"
            ],
            [
                "id"=> 3346,

                "nome"=> "Boituva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3347,

                "nome"=> "Bom Jesus dos Perdões",
                "estado"=> "SP"
            ],
            [
                "id"=> 3348,

                "nome"=> "Bom Sucesso de Itararé",
                "estado"=> "SP"
            ],
            [
                "id"=> 3349,

                "nome"=> "Borá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3350,

                "nome"=> "Boracéia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3351,

                "nome"=> "Borborema",
                "estado"=> "SP"
            ],
            [
                "id"=> 3352,

                "nome"=> "Borebi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3353,

                "nome"=> "Botucatu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3354,

                "nome"=> "Bragança Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3355,

                "nome"=> "Braúna",
                "estado"=> "SP"
            ],
            [
                "id"=> 3356,

                "nome"=> "Brejo Alegre",
                "estado"=> "SP"
            ],
            [
                "id"=> 3357,

                "nome"=> "Brodowski",
                "estado"=> "SP"
            ],
            [
                "id"=> 3358,

                "nome"=> "Brotas",
                "estado"=> "SP"
            ],
            [
                "id"=> 3359,

                "nome"=> "Buri",
                "estado"=> "SP"
            ],
            [
                "id"=> 3360,

                "nome"=> "Buritama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3361,

                "nome"=> "Buritizal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3362,

                "nome"=> "Cabrália Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3363,

                "nome"=> "Cabreúva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3364,

                "nome"=> "Caçapava",
                "estado"=> "SP"
            ],
            [
                "id"=> 3365,

                "nome"=> "Cachoeira Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3366,

                "nome"=> "Caconde",
                "estado"=> "SP"
            ],
            [
                "id"=> 3367,

                "nome"=> "Cafelândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3368,

                "nome"=> "Caiabu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3369,

                "nome"=> "Caieiras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3370,

                "nome"=> "Caiuá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3371,

                "nome"=> "Cajamar",
                "estado"=> "SP"
            ],
            [
                "id"=> 3372,

                "nome"=> "Cajati",
                "estado"=> "SP"
            ],
            [
                "id"=> 3373,

                "nome"=> "Cajobi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3374,

                "nome"=> "Cajuru",
                "estado"=> "SP"
            ],
            [
                "id"=> 3375,

                "nome"=> "Campina do Monte Alegre",
                "estado"=> "SP"
            ],
            [
                "id"=> 3376,

                "nome"=> "Campinas",
                "estado"=> "SP"
            ],
            [
                "id"=> 3377,

                "nome"=> "Campo Limpo Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3378,

                "nome"=> "Campos do Jordão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3379,

                "nome"=> "Campos Novos Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3380,

                "nome"=> "Cananéia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3381,

                "nome"=> "Canas",
                "estado"=> "SP"
            ],
            [
                "id"=> 3382,

                "nome"=> "Cândido Mota",
                "estado"=> "SP"
            ],
            [
                "id"=> 3383,

                "nome"=> "Cândido Rodrigues",
                "estado"=> "SP"
            ],
            [
                "id"=> 3384,

                "nome"=> "Canitar",
                "estado"=> "SP"
            ],
            [
                "id"=> 3385,

                "nome"=> "Capão Bonito",
                "estado"=> "SP"
            ],
            [
                "id"=> 3386,

                "nome"=> "Capela do Alto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3387,

                "nome"=> "Capivari",
                "estado"=> "SP"
            ],
            [
                "id"=> 3388,

                "nome"=> "Caraguatatuba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3389,

                "nome"=> "Carapicuíba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3390,

                "nome"=> "Cardoso",
                "estado"=> "SP"
            ],
            [
                "id"=> 3391,

                "nome"=> "Casa Branca",
                "estado"=> "SP"
            ],
            [
                "id"=> 3392,

                "nome"=> "Cássia dos Coqueiros",
                "estado"=> "SP"
            ],
            [
                "id"=> 3393,

                "nome"=> "Castilho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3394,

                "nome"=> "Catanduva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3395,

                "nome"=> "Catiguá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3396,

                "nome"=> "Cedral",
                "estado"=> "SP"
            ],
            [
                "id"=> 3397,

                "nome"=> "Cerqueira César",
                "estado"=> "SP"
            ],
            [
                "id"=> 3398,

                "nome"=> "Cerquilho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3399,

                "nome"=> "Cesário Lange",
                "estado"=> "SP"
            ],
            [
                "id"=> 3400,

                "nome"=> "Charqueada",
                "estado"=> "SP"
            ],
            [
                "id"=> 3401,

                "nome"=> "Clementina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3402,

                "nome"=> "Colina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3403,

                "nome"=> "Colômbia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3404,

                "nome"=> "Conchal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3405,

                "nome"=> "Conchas",
                "estado"=> "SP"
            ],
            [
                "id"=> 3406,

                "nome"=> "Cordeirópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3407,

                "nome"=> "Coroados",
                "estado"=> "SP"
            ],
            [
                "id"=> 3408,

                "nome"=> "Coronel Macedo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3409,

                "nome"=> "Corumbataí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3410,

                "nome"=> "Cosmópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3411,

                "nome"=> "Cosmorama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3412,

                "nome"=> "Cotia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3413,

                "nome"=> "Cravinhos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3414,

                "nome"=> "Cristais Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3415,

                "nome"=> "Cruzália",
                "estado"=> "SP"
            ],
            [
                "id"=> 3416,

                "nome"=> "Cruzeiro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3417,

                "nome"=> "Cubatão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3418,

                "nome"=> "Cunha",
                "estado"=> "SP"
            ],
            [
                "id"=> 3419,

                "nome"=> "Descalvado",
                "estado"=> "SP"
            ],
            [
                "id"=> 3420,

                "nome"=> "Diadema",
                "estado"=> "SP"
            ],
            [
                "id"=> 3421,

                "nome"=> "Dirce Reis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3422,

                "nome"=> "Divinolândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3423,

                "nome"=> "Dobrada",
                "estado"=> "SP"
            ],
            [
                "id"=> 3424,

                "nome"=> "Dois Córregos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3425,

                "nome"=> "Dolcinópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3426,

                "nome"=> "Dourado",
                "estado"=> "SP"
            ],
            [
                "id"=> 3427,

                "nome"=> "Dracena",
                "estado"=> "SP"
            ],
            [
                "id"=> 3428,

                "nome"=> "Duartina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3429,

                "nome"=> "Dumont",
                "estado"=> "SP"
            ],
            [
                "id"=> 3430,

                "nome"=> "Echaporã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3431,

                "nome"=> "Eldorado",
                "estado"=> "SP"
            ],
            [
                "id"=> 3432,

                "nome"=> "Elias Fausto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3433,

                "nome"=> "Elisiário",
                "estado"=> "SP"
            ],
            [
                "id"=> 3434,

                "nome"=> "Embaúba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3435,

                "nome"=> "Embu das Artes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3436,

                "nome"=> "Embu-Guaçu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3437,

                "nome"=> "Emilianópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3438,

                "nome"=> "Engenheiro Coelho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3439,

                "nome"=> "Espírito Santo do Pinhal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3440,

                "nome"=> "Espírito Santo do Turvo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3441,

                "nome"=> "Estrela D'Oeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3442,

                "nome"=> "Estrela do Norte",
                "estado"=> "SP"
            ],
            [
                "id"=> 3443,

                "nome"=> "Euclides da Cunha Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3444,

                "nome"=> "Fartura",
                "estado"=> "SP"
            ],
            [
                "id"=> 3445,

                "nome"=> "Fernandópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3446,

                "nome"=> "Fernando Prestes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3447,

                "nome"=> "Fernão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3448,

                "nome"=> "Ferraz de Vasconcelos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3449,

                "nome"=> "Flora Rica",
                "estado"=> "SP"
            ],
            [
                "id"=> 3450,

                "nome"=> "Floreal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3451,

                "nome"=> "Flórida Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3452,

                "nome"=> "Florínia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3453,

                "nome"=> "Franca",
                "estado"=> "SP"
            ],
            [
                "id"=> 3454,

                "nome"=> "Francisco Morato",
                "estado"=> "SP"
            ],
            [
                "id"=> 3455,

                "nome"=> "Franco da Rocha",
                "estado"=> "SP"
            ],
            [
                "id"=> 3456,

                "nome"=> "Gabriel Monteiro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3457,

                "nome"=> "Gália",
                "estado"=> "SP"
            ],
            [
                "id"=> 3458,

                "nome"=> "Garça",
                "estado"=> "SP"
            ],
            [
                "id"=> 3459,

                "nome"=> "Gastão Vidigal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3460,

                "nome"=> "Gavião Peixoto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3461,

                "nome"=> "General Salgado",
                "estado"=> "SP"
            ],
            [
                "id"=> 3462,

                "nome"=> "Getulina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3463,

                "nome"=> "Glicério",
                "estado"=> "SP"
            ],
            [
                "id"=> 3464,

                "nome"=> "Guaiçara",
                "estado"=> "SP"
            ],
            [
                "id"=> 3465,

                "nome"=> "Guaimbê",
                "estado"=> "SP"
            ],
            [
                "id"=> 3466,

                "nome"=> "Guaíra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3467,

                "nome"=> "Guapiaçu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3468,

                "nome"=> "Guapiara",
                "estado"=> "SP"
            ],
            [
                "id"=> 3469,

                "nome"=> "Guará",
                "estado"=> "SP"
            ],
            [
                "id"=> 3470,

                "nome"=> "Guaraçaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3471,

                "nome"=> "Guaraci",
                "estado"=> "SP"
            ],
            [
                "id"=> 3472,

                "nome"=> "Guarani D'Oeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3473,

                "nome"=> "Guarantã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3474,

                "nome"=> "Guararapes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3475,

                "nome"=> "Guararema",
                "estado"=> "SP"
            ],
            [
                "id"=> 3476,

                "nome"=> "Guaratinguetá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3477,

                "nome"=> "Guareí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3478,

                "nome"=> "Guariba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3479,

                "nome"=> "Guarujá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3480,

                "nome"=> "Guarulhos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3481,

                "nome"=> "Guatapará",
                "estado"=> "SP"
            ],
            [
                "id"=> 3482,

                "nome"=> "Guzolândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3483,

                "nome"=> "Herculândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3484,

                "nome"=> "Holambra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3485,

                "nome"=> "Hortolândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3486,

                "nome"=> "Iacanga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3487,

                "nome"=> "Iacri",
                "estado"=> "SP"
            ],
            [
                "id"=> 3488,

                "nome"=> "Iaras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3489,

                "nome"=> "Ibaté",
                "estado"=> "SP"
            ],
            [
                "id"=> 3490,

                "nome"=> "Ibirá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3491,

                "nome"=> "Ibirarema",
                "estado"=> "SP"
            ],
            [
                "id"=> 3492,

                "nome"=> "Ibitinga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3493,

                "nome"=> "Ibiúna",
                "estado"=> "SP"
            ],
            [
                "id"=> 3494,

                "nome"=> "Icém",
                "estado"=> "SP"
            ],
            [
                "id"=> 3495,

                "nome"=> "Iepê",
                "estado"=> "SP"
            ],
            [
                "id"=> 3496,

                "nome"=> "Igaraçu do Tietê",
                "estado"=> "SP"
            ],
            [
                "id"=> 3497,

                "nome"=> "Igarapava",
                "estado"=> "SP"
            ],
            [
                "id"=> 3498,

                "nome"=> "Igaratá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3499,

                "nome"=> "Iguape",
                "estado"=> "SP"
            ],
            [
                "id"=> 3500,

                "nome"=> "Ilhabela",
                "estado"=> "SP"
            ],
            [
                "id"=> 3501,

                "nome"=> "Ilha Comprida",
                "estado"=> "SP"
            ],
            [
                "id"=> 3502,

                "nome"=> "Ilha Solteira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3503,

                "nome"=> "Indaiatuba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3504,

                "nome"=> "Indiana",
                "estado"=> "SP"
            ],
            [
                "id"=> 3505,

                "nome"=> "Indiaporã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3506,

                "nome"=> "Inúbia Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3507,

                "nome"=> "Ipaussu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3508,

                "nome"=> "Iperó",
                "estado"=> "SP"
            ],
            [
                "id"=> 3509,

                "nome"=> "Ipeúna",
                "estado"=> "SP"
            ],
            [
                "id"=> 3510,

                "nome"=> "Ipiguá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3511,

                "nome"=> "Iporanga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3512,

                "nome"=> "Ipuã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3513,

                "nome"=> "Iracemápolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3514,

                "nome"=> "Irapuã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3515,

                "nome"=> "Irapuru",
                "estado"=> "SP"
            ],
            [
                "id"=> 3516,

                "nome"=> "Itaberá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3517,

                "nome"=> "Itaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3518,

                "nome"=> "Itajobi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3519,

                "nome"=> "Itaju",
                "estado"=> "SP"
            ],
            [
                "id"=> 3520,

                "nome"=> "Itanhaém",
                "estado"=> "SP"
            ],
            [
                "id"=> 3521,

                "nome"=> "Itaóca",
                "estado"=> "SP"
            ],
            [
                "id"=> 3522,

                "nome"=> "Itapecerica da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3523,

                "nome"=> "Itapetininga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3524,

                "nome"=> "Itapeva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3525,

                "nome"=> "Itapevi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3526,

                "nome"=> "Itapira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3527,

                "nome"=> "Itapirapuã Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3528,

                "nome"=> "Itápolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3529,

                "nome"=> "Itaporanga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3530,

                "nome"=> "Itapuí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3531,

                "nome"=> "Itapura",
                "estado"=> "SP"
            ],
            [
                "id"=> 3532,

                "nome"=> "Itaquaquecetuba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3533,

                "nome"=> "Itararé",
                "estado"=> "SP"
            ],
            [
                "id"=> 3534,

                "nome"=> "Itariri",
                "estado"=> "SP"
            ],
            [
                "id"=> 3535,

                "nome"=> "Itatiba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3536,

                "nome"=> "Itatinga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3537,

                "nome"=> "Itirapina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3538,

                "nome"=> "Itirapuã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3539,

                "nome"=> "Itobi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3540,

                "nome"=> "Itu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3541,

                "nome"=> "Itupeva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3542,

                "nome"=> "Ituverava",
                "estado"=> "SP"
            ],
            [
                "id"=> 3543,

                "nome"=> "Jaborandi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3544,

                "nome"=> "Jaboticabal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3545,

                "nome"=> "Jacareí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3546,

                "nome"=> "Jaci",
                "estado"=> "SP"
            ],
            [
                "id"=> 3547,

                "nome"=> "Jacupiranga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3548,

                "nome"=> "Jaguariúna",
                "estado"=> "SP"
            ],
            [
                "id"=> 3549,

                "nome"=> "Jales",
                "estado"=> "SP"
            ],
            [
                "id"=> 3550,

                "nome"=> "Jambeiro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3551,

                "nome"=> "Jandira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3552,

                "nome"=> "Jardinópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3553,

                "nome"=> "Jarinu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3554,

                "nome"=> "Jaú",
                "estado"=> "SP"
            ],
            [
                "id"=> 3555,

                "nome"=> "Jeriquara",
                "estado"=> "SP"
            ],
            [
                "id"=> 3556,

                "nome"=> "Joanópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3557,

                "nome"=> "João Ramalho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3558,

                "nome"=> "José Bonifácio",
                "estado"=> "SP"
            ],
            [
                "id"=> 3559,

                "nome"=> "Júlio Mesquita",
                "estado"=> "SP"
            ],
            [
                "id"=> 3560,

                "nome"=> "Jumirim",
                "estado"=> "SP"
            ],
            [
                "id"=> 3561,

                "nome"=> "Jundiaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3562,

                "nome"=> "Junqueirópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3563,

                "nome"=> "Juquiá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3564,

                "nome"=> "Juquitiba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3565,

                "nome"=> "Lagoinha",
                "estado"=> "SP"
            ],
            [
                "id"=> 3566,

                "nome"=> "Laranjal Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3567,

                "nome"=> "Lavínia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3568,

                "nome"=> "Lavrinhas",
                "estado"=> "SP"
            ],
            [
                "id"=> 3569,

                "nome"=> "Leme",
                "estado"=> "SP"
            ],
            [
                "id"=> 3570,

                "nome"=> "Lençóis Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3571,

                "nome"=> "Limeira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3572,

                "nome"=> "Lindóia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3573,

                "nome"=> "Lins",
                "estado"=> "SP"
            ],
            [
                "id"=> 3574,

                "nome"=> "Lorena",
                "estado"=> "SP"
            ],
            [
                "id"=> 3575,

                "nome"=> "Lourdes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3576,

                "nome"=> "Louveira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3577,

                "nome"=> "Lucélia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3578,

                "nome"=> "Lucianópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3579,

                "nome"=> "Luís Antônio",
                "estado"=> "SP"
            ],
            [
                "id"=> 3580,

                "nome"=> "Luiziânia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3581,

                "nome"=> "Lupércio",
                "estado"=> "SP"
            ],
            [
                "id"=> 3582,

                "nome"=> "Lutécia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3583,

                "nome"=> "Macatuba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3584,

                "nome"=> "Macaubal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3585,

                "nome"=> "Macedônia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3586,

                "nome"=> "Magda",
                "estado"=> "SP"
            ],
            [
                "id"=> 3587,

                "nome"=> "Mairinque",
                "estado"=> "SP"
            ],
            [
                "id"=> 3588,

                "nome"=> "Mairiporã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3589,

                "nome"=> "Manduri",
                "estado"=> "SP"
            ],
            [
                "id"=> 3590,

                "nome"=> "Marabá Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3591,

                "nome"=> "Maracaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3592,

                "nome"=> "Marapoama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3593,

                "nome"=> "Mariápolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3594,

                "nome"=> "Marília",
                "estado"=> "SP"
            ],
            [
                "id"=> 3595,

                "nome"=> "Marinópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3596,

                "nome"=> "Martinópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3597,

                "nome"=> "Matão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3598,

                "nome"=> "Mauá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3599,

                "nome"=> "Mendonça",
                "estado"=> "SP"
            ],
            [
                "id"=> 3600,

                "nome"=> "Meridiano",
                "estado"=> "SP"
            ],
            [
                "id"=> 3601,

                "nome"=> "Mesópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3602,

                "nome"=> "Miguelópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3603,

                "nome"=> "Mineiros do Tietê",
                "estado"=> "SP"
            ],
            [
                "id"=> 3604,

                "nome"=> "Miracatu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3605,

                "nome"=> "Mira Estrela",
                "estado"=> "SP"
            ],
            [
                "id"=> 3606,

                "nome"=> "Mirandópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3607,

                "nome"=> "Mirante do Paranapanema",
                "estado"=> "SP"
            ],
            [
                "id"=> 3608,

                "nome"=> "Mirassol",
                "estado"=> "SP"
            ],
            [
                "id"=> 3609,

                "nome"=> "Mirassolândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3610,

                "nome"=> "Mococa",
                "estado"=> "SP"
            ],
            [
                "id"=> 3611,

                "nome"=> "Mogi das Cruzes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3612,

                "nome"=> "Mogi Guaçu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3613,

                "nome"=> "Moji Mirim",
                "estado"=> "SP"
            ],
            [
                "id"=> 3614,

                "nome"=> "Mombuca",
                "estado"=> "SP"
            ],
            [
                "id"=> 3615,

                "nome"=> "Monções",
                "estado"=> "SP"
            ],
            [
                "id"=> 3616,

                "nome"=> "Mongaguá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3617,

                "nome"=> "Monte Alegre do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3618,

                "nome"=> "Monte Alto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3619,

                "nome"=> "Monte Aprazível",
                "estado"=> "SP"
            ],
            [
                "id"=> 3620,

                "nome"=> "Monte Azul Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3621,

                "nome"=> "Monte Castelo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3622,

                "nome"=> "Monteiro Lobato",
                "estado"=> "SP"
            ],
            [
                "id"=> 3623,

                "nome"=> "Monte Mor",
                "estado"=> "SP"
            ],
            [
                "id"=> 3624,

                "nome"=> "Morro Agudo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3625,

                "nome"=> "Morungaba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3626,

                "nome"=> "Motuca",
                "estado"=> "SP"
            ],
            [
                "id"=> 3627,

                "nome"=> "Murutinga do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3628,

                "nome"=> "Nantes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3629,

                "nome"=> "Narandiba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3630,

                "nome"=> "Natividade da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3631,

                "nome"=> "Nazaré Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3632,

                "nome"=> "Neves Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3633,

                "nome"=> "Nhandeara",
                "estado"=> "SP"
            ],
            [
                "id"=> 3634,

                "nome"=> "Nipoã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3635,

                "nome"=> "Nova Aliança",
                "estado"=> "SP"
            ],
            [
                "id"=> 3636,

                "nome"=> "Nova Campina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3637,

                "nome"=> "Nova Canaã Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3638,

                "nome"=> "Nova Castilho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3639,

                "nome"=> "Nova Europa",
                "estado"=> "SP"
            ],
            [
                "id"=> 3640,

                "nome"=> "Nova Granada",
                "estado"=> "SP"
            ],
            [
                "id"=> 3641,

                "nome"=> "Nova Guataporanga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3642,

                "nome"=> "Nova Independência",
                "estado"=> "SP"
            ],
            [
                "id"=> 3643,

                "nome"=> "Novais",
                "estado"=> "SP"
            ],
            [
                "id"=> 3644,

                "nome"=> "Nova Luzitânia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3645,

                "nome"=> "Nova Odessa",
                "estado"=> "SP"
            ],
            [
                "id"=> 3646,

                "nome"=> "Novo Horizonte",
                "estado"=> "SP"
            ],
            [
                "id"=> 3647,

                "nome"=> "Nuporanga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3648,

                "nome"=> "Ocauçu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3649,

                "nome"=> "Óleo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3650,

                "nome"=> "Olímpia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3651,

                "nome"=> "Onda Verde",
                "estado"=> "SP"
            ],
            [
                "id"=> 3652,

                "nome"=> "Oriente",
                "estado"=> "SP"
            ],
            [
                "id"=> 3653,

                "nome"=> "Orindiúva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3654,

                "nome"=> "Orlândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3655,

                "nome"=> "Osasco",
                "estado"=> "SP"
            ],
            [
                "id"=> 3656,

                "nome"=> "Oscar Bressane",
                "estado"=> "SP"
            ],
            [
                "id"=> 3657,

                "nome"=> "Osvaldo Cruz",
                "estado"=> "SP"
            ],
            [
                "id"=> 3658,

                "nome"=> "Ourinhos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3659,

                "nome"=> "Ouroeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3660,

                "nome"=> "Ouro Verde",
                "estado"=> "SP"
            ],
            [
                "id"=> 3661,

                "nome"=> "Pacaembu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3662,

                "nome"=> "Palestina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3663,

                "nome"=> "Palmares Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3664,

                "nome"=> "Palmeira D'Oeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3665,

                "nome"=> "Palmital",
                "estado"=> "SP"
            ],
            [
                "id"=> 3666,

                "nome"=> "Panorama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3667,

                "nome"=> "Paraguaçu Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3668,

                "nome"=> "Paraibuna",
                "estado"=> "SP"
            ],
            [
                "id"=> 3669,

                "nome"=> "Paraíso",
                "estado"=> "SP"
            ],
            [
                "id"=> 3670,

                "nome"=> "Paranapanema",
                "estado"=> "SP"
            ],
            [
                "id"=> 3671,

                "nome"=> "Paranapuã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3672,

                "nome"=> "Parapuã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3673,

                "nome"=> "Pardinho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3674,

                "nome"=> "Pariquera-Açu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3675,

                "nome"=> "Parisi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3676,

                "nome"=> "Patrocínio Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3677,

                "nome"=> "Paulicéia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3678,

                "nome"=> "Paulínia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3679,

                "nome"=> "Paulistânia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3680,

                "nome"=> "Paulo de Faria",
                "estado"=> "SP"
            ],
            [
                "id"=> 3681,

                "nome"=> "Pederneiras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3682,

                "nome"=> "Pedra Bela",
                "estado"=> "SP"
            ],
            [
                "id"=> 3683,

                "nome"=> "Pedranópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3684,

                "nome"=> "Pedregulho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3685,

                "nome"=> "Pedreira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3686,

                "nome"=> "Pedrinhas Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3687,

                "nome"=> "Pedro de Toledo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3688,

                "nome"=> "Penápolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3689,

                "nome"=> "Pereira Barreto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3690,

                "nome"=> "Pereiras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3691,

                "nome"=> "Peruíbe",
                "estado"=> "SP"
            ],
            [
                "id"=> 3692,

                "nome"=> "Piacatu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3693,

                "nome"=> "Piedade",
                "estado"=> "SP"
            ],
            [
                "id"=> 3694,

                "nome"=> "Pilar do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3695,

                "nome"=> "Pindamonhangaba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3696,

                "nome"=> "Pindorama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3697,

                "nome"=> "Pinhalzinho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3698,

                "nome"=> "Piquerobi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3699,

                "nome"=> "Piquete",
                "estado"=> "SP"
            ],
            [
                "id"=> 3700,

                "nome"=> "Piracaia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3701,

                "nome"=> "Piracicaba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3702,

                "nome"=> "Piraju",
                "estado"=> "SP"
            ],
            [
                "id"=> 3703,

                "nome"=> "Pirajuí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3704,

                "nome"=> "Pirangi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3705,

                "nome"=> "Pirapora do Bom Jesus",
                "estado"=> "SP"
            ],
            [
                "id"=> 3706,

                "nome"=> "Pirapozinho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3707,

                "nome"=> "Pirassununga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3708,

                "nome"=> "Piratininga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3709,

                "nome"=> "Pitangueiras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3710,

                "nome"=> "Planalto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3711,

                "nome"=> "Platina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3712,

                "nome"=> "Poá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3713,

                "nome"=> "Poloni",
                "estado"=> "SP"
            ],
            [
                "id"=> 3714,

                "nome"=> "Pompéia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3715,

                "nome"=> "Pongaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3716,

                "nome"=> "Pontal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3717,

                "nome"=> "Pontalinda",
                "estado"=> "SP"
            ],
            [
                "id"=> 3718,

                "nome"=> "Pontes Gestal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3719,

                "nome"=> "Populina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3720,

                "nome"=> "Porangaba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3721,

                "nome"=> "Porto Feliz",
                "estado"=> "SP"
            ],
            [
                "id"=> 3722,

                "nome"=> "Porto Ferreira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3723,

                "nome"=> "Potim",
                "estado"=> "SP"
            ],
            [
                "id"=> 3724,

                "nome"=> "Potirendaba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3725,

                "nome"=> "Pracinha",
                "estado"=> "SP"
            ],
            [
                "id"=> 3726,

                "nome"=> "Pradópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3727,

                "nome"=> "Praia Grande",
                "estado"=> "SP"
            ],
            [
                "id"=> 3728,

                "nome"=> "Pratânia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3729,

                "nome"=> "Presidente Alves",
                "estado"=> "SP"
            ],
            [
                "id"=> 3730,

                "nome"=> "Presidente Bernardes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3731,

                "nome"=> "Presidente Epitácio",
                "estado"=> "SP"
            ],
            [
                "id"=> 3732,

                "nome"=> "Presidente Prudente",
                "estado"=> "SP"
            ],
            [
                "id"=> 3733,

                "nome"=> "Presidente Venceslau",
                "estado"=> "SP"
            ],
            [
                "id"=> 3734,

                "nome"=> "Promissão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3735,

                "nome"=> "Quadra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3736,

                "nome"=> "Quatá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3737,

                "nome"=> "Queiroz",
                "estado"=> "SP"
            ],
            [
                "id"=> 3738,

                "nome"=> "Queluz",
                "estado"=> "SP"
            ],
            [
                "id"=> 3739,

                "nome"=> "Quintana",
                "estado"=> "SP"
            ],
            [
                "id"=> 3740,

                "nome"=> "Rafard",
                "estado"=> "SP"
            ],
            [
                "id"=> 3741,

                "nome"=> "Rancharia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3742,

                "nome"=> "Redenção da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3743,

                "nome"=> "Regente Feijó",
                "estado"=> "SP"
            ],
            [
                "id"=> 3744,

                "nome"=> "Reginópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3745,

                "nome"=> "Registro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3746,

                "nome"=> "Restinga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3747,

                "nome"=> "Ribeira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3748,

                "nome"=> "Ribeirão Bonito",
                "estado"=> "SP"
            ],
            [
                "id"=> 3749,

                "nome"=> "Ribeirão Branco",
                "estado"=> "SP"
            ],
            [
                "id"=> 3750,

                "nome"=> "Ribeirão Corrente",
                "estado"=> "SP"
            ],
            [
                "id"=> 3751,

                "nome"=> "Ribeirão do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3752,

                "nome"=> "Ribeirão dos Índios",
                "estado"=> "SP"
            ],
            [
                "id"=> 3753,

                "nome"=> "Ribeirão Grande",
                "estado"=> "SP"
            ],
            [
                "id"=> 3754,

                "nome"=> "Ribeirão Pires",
                "estado"=> "SP"
            ],
            [
                "id"=> 3755,

                "nome"=> "Ribeirão Preto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3756,

                "nome"=> "Riversul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3757,

                "nome"=> "Rifaina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3758,

                "nome"=> "Rincão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3759,

                "nome"=> "Rinópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3760,

                "nome"=> "Rio Claro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3761,

                "nome"=> "Rio das Pedras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3762,

                "nome"=> "Rio Grande da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3763,

                "nome"=> "Riolândia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3764,

                "nome"=> "Rosana",
                "estado"=> "SP"
            ],
            [
                "id"=> 3765,

                "nome"=> "Roseira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3766,

                "nome"=> "Rubiácea",
                "estado"=> "SP"
            ],
            [
                "id"=> 3767,

                "nome"=> "Rubinéia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3768,

                "nome"=> "Sabino",
                "estado"=> "SP"
            ],
            [
                "id"=> 3769,

                "nome"=> "Sagres",
                "estado"=> "SP"
            ],
            [
                "id"=> 3770,

                "nome"=> "Sales",
                "estado"=> "SP"
            ],
            [
                "id"=> 3771,

                "nome"=> "Sales Oliveira",
                "estado"=> "SP"
            ],
            [
                "id"=> 3772,

                "nome"=> "Salesópolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3773,

                "nome"=> "Salmourão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3774,

                "nome"=> "Saltinho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3775,

                "nome"=> "Salto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3776,

                "nome"=> "Salto de Pirapora",
                "estado"=> "SP"
            ],
            [
                "id"=> 3777,

                "nome"=> "Salto Grande",
                "estado"=> "SP"
            ],
            [
                "id"=> 3778,

                "nome"=> "Sandovalina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3779,

                "nome"=> "Santa Adélia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3780,

                "nome"=> "Santa Albertina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3781,

                "nome"=> "Santa Bárbara D'Oeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3782,

                "nome"=> "Santa Branca",
                "estado"=> "SP"
            ],
            [
                "id"=> 3783,

                "nome"=> "Santa Clara D'Oeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3784,

                "nome"=> "Santa Cruz da Conceição",
                "estado"=> "SP"
            ],
            [
                "id"=> 3785,

                "nome"=> "Santa Cruz da Esperança",
                "estado"=> "SP"
            ],
            [
                "id"=> 3786,

                "nome"=> "Santa Cruz das Palmeiras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3787,

                "nome"=> "Santa Cruz do Rio Pardo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3788,

                "nome"=> "Santa Ernestina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3789,

                "nome"=> "Santa Fé do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3790,

                "nome"=> "Santa Gertrudes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3791,

                "nome"=> "Santa Isabel",
                "estado"=> "SP"
            ],
            [
                "id"=> 3792,

                "nome"=> "Santa Lúcia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3793,

                "nome"=> "Santa Maria da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3794,

                "nome"=> "Santa Mercedes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3795,

                "nome"=> "Santana da Ponte Pensa",
                "estado"=> "SP"
            ],
            [
                "id"=> 3796,

                "nome"=> "Santana de Parnaíba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3797,

                "nome"=> "Santa Rita D'Oeste",
                "estado"=> "SP"
            ],
            [
                "id"=> 3798,

                "nome"=> "Santa Rita do Passa Quatro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3799,

                "nome"=> "Santa Rosa de Viterbo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3800,

                "nome"=> "Santa Salete",
                "estado"=> "SP"
            ],
            [
                "id"=> 3801,

                "nome"=> "Santo Anastácio",
                "estado"=> "SP"
            ],
            [
                "id"=> 3802,

                "nome"=> "Santo André",
                "estado"=> "SP"
            ],
            [
                "id"=> 3803,

                "nome"=> "Santo Antônio da Alegria",
                "estado"=> "SP"
            ],
            [
                "id"=> 3804,

                "nome"=> "Santo Antônio de Posse",
                "estado"=> "SP"
            ],
            [
                "id"=> 3805,

                "nome"=> "Santo Antônio do Aracanguá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3806,

                "nome"=> "Santo Antônio do Jardim",
                "estado"=> "SP"
            ],
            [
                "id"=> 3807,

                "nome"=> "Santo Antônio do Pinhal",
                "estado"=> "SP"
            ],
            [
                "id"=> 3808,

                "nome"=> "Santo Expedito",
                "estado"=> "SP"
            ],
            [
                "id"=> 3809,

                "nome"=> "Santópolis do Aguapeí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3810,

                "nome"=> "Santos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3811,

                "nome"=> "São Bento do Sapucaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3812,

                "nome"=> "São Bernardo do Campo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3813,

                "nome"=> "São Caetano do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3814,

                "nome"=> "São Carlos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3815,

                "nome"=> "São Francisco",
                "estado"=> "SP"
            ],
            [
                "id"=> 3816,

                "nome"=> "São João da Boa Vista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3817,

                "nome"=> "São João das Duas Pontes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3818,

                "nome"=> "São João de Iracema",
                "estado"=> "SP"
            ],
            [
                "id"=> 3819,

                "nome"=> "São João do Pau D'Alho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3820,

                "nome"=> "São Joaquim da Barra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3821,

                "nome"=> "São José da Bela Vista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3822,

                "nome"=> "São José do Barreiro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3823,

                "nome"=> "São José do Rio Pardo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3824,

                "nome"=> "São José do Rio Preto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3825,

                "nome"=> "São José dos Campos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3826,

                "nome"=> "São Lourenço da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3827,

                "nome"=> "São Luís do Paraitinga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3828,

                "nome"=> "São Manuel",
                "estado"=> "SP"
            ],
            [
                "id"=> 3829,

                "nome"=> "São Miguel Arcanjo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3830,

                "nome"=> "São Paulo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3831,

                "nome"=> "São Pedro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3832,

                "nome"=> "São Pedro do Turvo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3833,

                "nome"=> "São Roque",
                "estado"=> "SP"
            ],
            [
                "id"=> 3834,

                "nome"=> "São Sebastião",
                "estado"=> "SP"
            ],
            [
                "id"=> 3835,

                "nome"=> "São Sebastião da Grama",
                "estado"=> "SP"
            ],
            [
                "id"=> 3836,

                "nome"=> "São Simão",
                "estado"=> "SP"
            ],
            [
                "id"=> 3837,

                "nome"=> "São Vicente",
                "estado"=> "SP"
            ],
            [
                "id"=> 3838,

                "nome"=> "Sarapuí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3839,

                "nome"=> "Sarutaiá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3840,

                "nome"=> "Sebastianópolis do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3841,

                "nome"=> "Serra Azul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3842,

                "nome"=> "Serrana",
                "estado"=> "SP"
            ],
            [
                "id"=> 3843,

                "nome"=> "Serra Negra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3844,

                "nome"=> "Sertãozinho",
                "estado"=> "SP"
            ],
            [
                "id"=> 3845,

                "nome"=> "Sete Barras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3846,

                "nome"=> "Severínia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3847,

                "nome"=> "Silveiras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3848,

                "nome"=> "Socorro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3849,

                "nome"=> "Sorocaba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3850,

                "nome"=> "Sud Mennucci",
                "estado"=> "SP"
            ],
            [
                "id"=> 3851,

                "nome"=> "Sumaré",
                "estado"=> "SP"
            ],
            [
                "id"=> 3852,

                "nome"=> "Suzano",
                "estado"=> "SP"
            ],
            [
                "id"=> 3853,

                "nome"=> "Suzanápolis",
                "estado"=> "SP"
            ],
            [
                "id"=> 3854,

                "nome"=> "Tabapuã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3855,

                "nome"=> "Tabatinga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3856,

                "nome"=> "Taboão da Serra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3857,

                "nome"=> "Taciba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3858,

                "nome"=> "Taguaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3859,

                "nome"=> "Taiaçu",
                "estado"=> "SP"
            ],
            [
                "id"=> 3860,

                "nome"=> "Taiúva",
                "estado"=> "SP"
            ],
            [
                "id"=> 3861,

                "nome"=> "Tambaú",
                "estado"=> "SP"
            ],
            [
                "id"=> 3862,

                "nome"=> "Tanabi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3863,

                "nome"=> "Tapiraí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3864,

                "nome"=> "Tapiratiba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3865,

                "nome"=> "Taquaral",
                "estado"=> "SP"
            ],
            [
                "id"=> 3866,

                "nome"=> "Taquaritinga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3867,

                "nome"=> "Taquarituba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3868,

                "nome"=> "Taquarivaí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3869,

                "nome"=> "Tarabai",
                "estado"=> "SP"
            ],
            [
                "id"=> 3870,

                "nome"=> "Tarumã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3871,

                "nome"=> "Tatuí",
                "estado"=> "SP"
            ],
            [
                "id"=> 3872,

                "nome"=> "Taubaté",
                "estado"=> "SP"
            ],
            [
                "id"=> 3873,

                "nome"=> "Tejupá",
                "estado"=> "SP"
            ],
            [
                "id"=> 3874,

                "nome"=> "Teodoro Sampaio",
                "estado"=> "SP"
            ],
            [
                "id"=> 3875,

                "nome"=> "Terra Roxa",
                "estado"=> "SP"
            ],
            [
                "id"=> 3876,

                "nome"=> "Tietê",
                "estado"=> "SP"
            ],
            [
                "id"=> 3877,

                "nome"=> "Timburi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3878,

                "nome"=> "Torre de Pedra",
                "estado"=> "SP"
            ],
            [
                "id"=> 3879,

                "nome"=> "Torrinha",
                "estado"=> "SP"
            ],
            [
                "id"=> 3880,

                "nome"=> "Trabiju",
                "estado"=> "SP"
            ],
            [
                "id"=> 3881,

                "nome"=> "Tremembé",
                "estado"=> "SP"
            ],
            [
                "id"=> 3882,

                "nome"=> "Três Fronteiras",
                "estado"=> "SP"
            ],
            [
                "id"=> 3883,

                "nome"=> "Tuiuti",
                "estado"=> "SP"
            ],
            [
                "id"=> 3884,

                "nome"=> "Tupã",
                "estado"=> "SP"
            ],
            [
                "id"=> 3885,

                "nome"=> "Tupi Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3886,

                "nome"=> "Turiúba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3887,

                "nome"=> "Turmalina",
                "estado"=> "SP"
            ],
            [
                "id"=> 3888,

                "nome"=> "Ubarana",
                "estado"=> "SP"
            ],
            [
                "id"=> 3889,

                "nome"=> "Ubatuba",
                "estado"=> "SP"
            ],
            [
                "id"=> 3890,

                "nome"=> "Ubirajara",
                "estado"=> "SP"
            ],
            [
                "id"=> 3891,

                "nome"=> "Uchoa",
                "estado"=> "SP"
            ],
            [
                "id"=> 3892,

                "nome"=> "União Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3893,

                "nome"=> "Urânia",
                "estado"=> "SP"
            ],
            [
                "id"=> 3894,

                "nome"=> "Uru",
                "estado"=> "SP"
            ],
            [
                "id"=> 3895,

                "nome"=> "Urupês",
                "estado"=> "SP"
            ],
            [
                "id"=> 3896,

                "nome"=> "Valentim Gentil",
                "estado"=> "SP"
            ],
            [
                "id"=> 3897,

                "nome"=> "Valinhos",
                "estado"=> "SP"
            ],
            [
                "id"=> 3898,

                "nome"=> "Valparaíso",
                "estado"=> "SP"
            ],
            [
                "id"=> 3899,

                "nome"=> "Vargem",
                "estado"=> "SP"
            ],
            [
                "id"=> 3900,

                "nome"=> "Vargem Grande do Sul",
                "estado"=> "SP"
            ],
            [
                "id"=> 3901,

                "nome"=> "Vargem Grande Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3902,

                "nome"=> "Várzea Paulista",
                "estado"=> "SP"
            ],
            [
                "id"=> 3903,

                "nome"=> "Vera Cruz",
                "estado"=> "SP"
            ],
            [
                "id"=> 3904,

                "nome"=> "Vinhedo",
                "estado"=> "SP"
            ],
            [
                "id"=> 3905,

                "nome"=> "Viradouro",
                "estado"=> "SP"
            ],
            [
                "id"=> 3906,

                "nome"=> "Vista Alegre do Alto",
                "estado"=> "SP"
            ],
            [
                "id"=> 3907,

                "nome"=> "Vitória Brasil",
                "estado"=> "SP"
            ],
            [
                "id"=> 3908,

                "nome"=> "Votorantim",
                "estado"=> "SP"
            ],
            [
                "id"=> 3909,

                "nome"=> "Votuporanga",
                "estado"=> "SP"
            ],
            [
                "id"=> 3910,

                "nome"=> "Zacarias",
                "estado"=> "SP"
            ],
            [
                "id"=> 3911,

                "nome"=> "Chavantes",
                "estado"=> "SP"
            ],
            [
                "id"=> 3912,

                "nome"=> "Estiva Gerbi",
                "estado"=> "SP"
            ],
            [
                "id"=> 3913,

                "nome"=> "Abatiá",
                "estado"=> "PR"
            ],
            [
                "id"=> 3914,

                "nome"=> "Adrianópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 3915,

                "nome"=> "Agudos do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3916,

                "nome"=> "Almirante Tamandaré",
                "estado"=> "PR"
            ],
            [
                "id"=> 3917,

                "nome"=> "Altamira do Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 3918,

                "nome"=> "Altônia",
                "estado"=> "PR"
            ],
            [
                "id"=> 3919,

                "nome"=> "Alto Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 3920,

                "nome"=> "Alto Piquiri",
                "estado"=> "PR"
            ],
            [
                "id"=> 3921,

                "nome"=> "Alvorada do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3922,

                "nome"=> "Amaporã",
                "estado"=> "PR"
            ],
            [
                "id"=> 3923,

                "nome"=> "Ampére",
                "estado"=> "PR"
            ],
            [
                "id"=> 3924,

                "nome"=> "Anahy",
                "estado"=> "PR"
            ],
            [
                "id"=> 3925,

                "nome"=> "Andirá",
                "estado"=> "PR"
            ],
            [
                "id"=> 3926,

                "nome"=> "Ângulo",
                "estado"=> "PR"
            ],
            [
                "id"=> 3927,

                "nome"=> "Antonina",
                "estado"=> "PR"
            ],
            [
                "id"=> 3928,

                "nome"=> "Antônio Olinto",
                "estado"=> "PR"
            ],
            [
                "id"=> 3929,

                "nome"=> "Apucarana",
                "estado"=> "PR"
            ],
            [
                "id"=> 3930,

                "nome"=> "Arapongas",
                "estado"=> "PR"
            ],
            [
                "id"=> 3931,

                "nome"=> "Arapoti",
                "estado"=> "PR"
            ],
            [
                "id"=> 3932,

                "nome"=> "Arapuã",
                "estado"=> "PR"
            ],
            [
                "id"=> 3933,

                "nome"=> "Araruna",
                "estado"=> "PR"
            ],
            [
                "id"=> 3934,

                "nome"=> "Araucária",
                "estado"=> "PR"
            ],
            [
                "id"=> 3935,

                "nome"=> "Ariranha do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 3936,

                "nome"=> "Assaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 3937,

                "nome"=> "Assis Chateaubriand",
                "estado"=> "PR"
            ],
            [
                "id"=> 3938,

                "nome"=> "Astorga",
                "estado"=> "PR"
            ],
            [
                "id"=> 3939,

                "nome"=> "Atalaia",
                "estado"=> "PR"
            ],
            [
                "id"=> 3940,

                "nome"=> "Balsa Nova",
                "estado"=> "PR"
            ],
            [
                "id"=> 3941,

                "nome"=> "Bandeirantes",
                "estado"=> "PR"
            ],
            [
                "id"=> 3942,

                "nome"=> "Barbosa Ferraz",
                "estado"=> "PR"
            ],
            [
                "id"=> 3943,

                "nome"=> "Barracão",
                "estado"=> "PR"
            ],
            [
                "id"=> 3944,

                "nome"=> "Barra do Jacaré",
                "estado"=> "PR"
            ],
            [
                "id"=> 3945,

                "nome"=> "Bela Vista da Caroba",
                "estado"=> "PR"
            ],
            [
                "id"=> 3946,

                "nome"=> "Bela Vista do Paraíso",
                "estado"=> "PR"
            ],
            [
                "id"=> 3947,

                "nome"=> "Bituruna",
                "estado"=> "PR"
            ],
            [
                "id"=> 3948,

                "nome"=> "Boa Esperança",
                "estado"=> "PR"
            ],
            [
                "id"=> 3949,

                "nome"=> "Boa Esperança do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 3950,

                "nome"=> "Boa Ventura de São Roque",
                "estado"=> "PR"
            ],
            [
                "id"=> 3951,

                "nome"=> "Boa Vista da Aparecida",
                "estado"=> "PR"
            ],
            [
                "id"=> 3952,

                "nome"=> "Bocaiúva do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3953,

                "nome"=> "Bom Jesus do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3954,

                "nome"=> "Bom Sucesso",
                "estado"=> "PR"
            ],
            [
                "id"=> 3955,

                "nome"=> "Bom Sucesso do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3956,

                "nome"=> "Borrazópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 3957,

                "nome"=> "Braganey",
                "estado"=> "PR"
            ],
            [
                "id"=> 3958,

                "nome"=> "Brasilândia do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3959,

                "nome"=> "Cafeara",
                "estado"=> "PR"
            ],
            [
                "id"=> 3960,

                "nome"=> "Cafelândia",
                "estado"=> "PR"
            ],
            [
                "id"=> 3961,

                "nome"=> "Cafezal do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3962,

                "nome"=> "Califórnia",
                "estado"=> "PR"
            ],
            [
                "id"=> 3963,

                "nome"=> "Cambará",
                "estado"=> "PR"
            ],
            [
                "id"=> 3964,

                "nome"=> "Cambé",
                "estado"=> "PR"
            ],
            [
                "id"=> 3965,

                "nome"=> "Cambira",
                "estado"=> "PR"
            ],
            [
                "id"=> 3966,

                "nome"=> "Campina da Lagoa",
                "estado"=> "PR"
            ],
            [
                "id"=> 3967,

                "nome"=> "Campina do Simão",
                "estado"=> "PR"
            ],
            [
                "id"=> 3968,

                "nome"=> "Campina Grande do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3969,

                "nome"=> "Campo Bonito",
                "estado"=> "PR"
            ],
            [
                "id"=> 3970,

                "nome"=> "Campo do Tenente",
                "estado"=> "PR"
            ],
            [
                "id"=> 3971,

                "nome"=> "Campo Largo",
                "estado"=> "PR"
            ],
            [
                "id"=> 3972,

                "nome"=> "Campo Magro",
                "estado"=> "PR"
            ],
            [
                "id"=> 3973,

                "nome"=> "Campo Mourão",
                "estado"=> "PR"
            ],
            [
                "id"=> 3974,

                "nome"=> "Cândido de Abreu",
                "estado"=> "PR"
            ],
            [
                "id"=> 3975,

                "nome"=> "Candói",
                "estado"=> "PR"
            ],
            [
                "id"=> 3976,

                "nome"=> "Cantagalo",
                "estado"=> "PR"
            ],
            [
                "id"=> 3977,

                "nome"=> "Capanema",
                "estado"=> "PR"
            ],
            [
                "id"=> 3978,

                "nome"=> "Capitão Leônidas Marques",
                "estado"=> "PR"
            ],
            [
                "id"=> 3979,

                "nome"=> "Carambeí",
                "estado"=> "PR"
            ],
            [
                "id"=> 3980,

                "nome"=> "Carlópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 3981,

                "nome"=> "Cascavel",
                "estado"=> "PR"
            ],
            [
                "id"=> 3982,

                "nome"=> "Castro",
                "estado"=> "PR"
            ],
            [
                "id"=> 3983,

                "nome"=> "Catanduvas",
                "estado"=> "PR"
            ],
            [
                "id"=> 3984,

                "nome"=> "Centenário do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3985,

                "nome"=> "Cerro Azul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3986,

                "nome"=> "Céu Azul",
                "estado"=> "PR"
            ],
            [
                "id"=> 3987,

                "nome"=> "Chopinzinho",
                "estado"=> "PR"
            ],
            [
                "id"=> 3988,

                "nome"=> "Cianorte",
                "estado"=> "PR"
            ],
            [
                "id"=> 3989,

                "nome"=> "Cidade Gaúcha",
                "estado"=> "PR"
            ],
            [
                "id"=> 3990,

                "nome"=> "Clevelândia",
                "estado"=> "PR"
            ],
            [
                "id"=> 3991,

                "nome"=> "Colombo",
                "estado"=> "PR"
            ],
            [
                "id"=> 3992,

                "nome"=> "Colorado",
                "estado"=> "PR"
            ],
            [
                "id"=> 3993,

                "nome"=> "Congonhinhas",
                "estado"=> "PR"
            ],
            [
                "id"=> 3994,

                "nome"=> "Conselheiro Mairinck",
                "estado"=> "PR"
            ],
            [
                "id"=> 3995,

                "nome"=> "Contenda",
                "estado"=> "PR"
            ],
            [
                "id"=> 3996,

                "nome"=> "Corbélia",
                "estado"=> "PR"
            ],
            [
                "id"=> 3997,

                "nome"=> "Cornélio Procópio",
                "estado"=> "PR"
            ],
            [
                "id"=> 3998,

                "nome"=> "Coronel Domingos Soares",
                "estado"=> "PR"
            ],
            [
                "id"=> 3999,

                "nome"=> "Coronel Vivida",
                "estado"=> "PR"
            ],
            [
                "id"=> 4000,

                "nome"=> "Corumbataí do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4001,

                "nome"=> "Cruzeiro do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4002,

                "nome"=> "Cruzeiro do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4003,

                "nome"=> "Cruzeiro do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4004,

                "nome"=> "Cruz Machado",
                "estado"=> "PR"
            ],
            [
                "id"=> 4005,

                "nome"=> "Cruzmaltina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4006,

                "nome"=> "Curitiba",
                "estado"=> "PR"
            ],
            [
                "id"=> 4007,

                "nome"=> "Curiúva",
                "estado"=> "PR"
            ],
            [
                "id"=> 4008,

                "nome"=> "Diamante do Norte",
                "estado"=> "PR"
            ],
            [
                "id"=> 4009,

                "nome"=> "Diamante do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4010,

                "nome"=> "Diamante D'Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4011,

                "nome"=> "Dois Vizinhos",
                "estado"=> "PR"
            ],
            [
                "id"=> 4012,

                "nome"=> "Douradina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4013,

                "nome"=> "Doutor Camargo",
                "estado"=> "PR"
            ],
            [
                "id"=> 4014,

                "nome"=> "Enéas Marques",
                "estado"=> "PR"
            ],
            [
                "id"=> 4015,

                "nome"=> "Engenheiro Beltrão",
                "estado"=> "PR"
            ],
            [
                "id"=> 4016,

                "nome"=> "Esperança Nova",
                "estado"=> "PR"
            ],
            [
                "id"=> 4017,

                "nome"=> "Entre Rios do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4018,

                "nome"=> "Espigão Alto do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4019,

                "nome"=> "Farol",
                "estado"=> "PR"
            ],
            [
                "id"=> 4020,

                "nome"=> "Faxinal",
                "estado"=> "PR"
            ],
            [
                "id"=> 4021,

                "nome"=> "Fazenda Rio Grande",
                "estado"=> "PR"
            ],
            [
                "id"=> 4022,

                "nome"=> "Fênix",
                "estado"=> "PR"
            ],
            [
                "id"=> 4023,

                "nome"=> "Fernandes Pinheiro",
                "estado"=> "PR"
            ],
            [
                "id"=> 4024,

                "nome"=> "Figueira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4025,

                "nome"=> "Floraí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4026,

                "nome"=> "Flor da Serra do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4027,

                "nome"=> "Floresta",
                "estado"=> "PR"
            ],
            [
                "id"=> 4028,

                "nome"=> "Florestópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4029,

                "nome"=> "Flórida",
                "estado"=> "PR"
            ],
            [
                "id"=> 4030,

                "nome"=> "Formosa do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4031,

                "nome"=> "Foz do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4032,

                "nome"=> "Francisco Alves",
                "estado"=> "PR"
            ],
            [
                "id"=> 4033,

                "nome"=> "Francisco Beltrão",
                "estado"=> "PR"
            ],
            [
                "id"=> 4034,

                "nome"=> "Foz do Jordão",
                "estado"=> "PR"
            ],
            [
                "id"=> 4035,

                "nome"=> "General Carneiro",
                "estado"=> "PR"
            ],
            [
                "id"=> 4036,

                "nome"=> "Godoy Moreira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4037,

                "nome"=> "Goioerê",
                "estado"=> "PR"
            ],
            [
                "id"=> 4038,

                "nome"=> "Goioxim",
                "estado"=> "PR"
            ],
            [
                "id"=> 4039,

                "nome"=> "Grandes Rios",
                "estado"=> "PR"
            ],
            [
                "id"=> 4040,

                "nome"=> "Guaíra",
                "estado"=> "PR"
            ],
            [
                "id"=> 4041,

                "nome"=> "Guairaçá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4042,

                "nome"=> "Guamiranga",
                "estado"=> "PR"
            ],
            [
                "id"=> 4043,

                "nome"=> "Guapirama",
                "estado"=> "PR"
            ],
            [
                "id"=> 4044,

                "nome"=> "Guaporema",
                "estado"=> "PR"
            ],
            [
                "id"=> 4045,

                "nome"=> "Guaraci",
                "estado"=> "PR"
            ],
            [
                "id"=> 4046,

                "nome"=> "Guaraniaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4047,

                "nome"=> "Guarapuava",
                "estado"=> "PR"
            ],
            [
                "id"=> 4048,

                "nome"=> "Guaraqueçaba",
                "estado"=> "PR"
            ],
            [
                "id"=> 4049,

                "nome"=> "Guaratuba",
                "estado"=> "PR"
            ],
            [
                "id"=> 4050,

                "nome"=> "Honório Serpa",
                "estado"=> "PR"
            ],
            [
                "id"=> 4051,

                "nome"=> "Ibaiti",
                "estado"=> "PR"
            ],
            [
                "id"=> 4052,

                "nome"=> "Ibema",
                "estado"=> "PR"
            ],
            [
                "id"=> 4053,

                "nome"=> "Ibiporã",
                "estado"=> "PR"
            ],
            [
                "id"=> 4054,

                "nome"=> "Icaraíma",
                "estado"=> "PR"
            ],
            [
                "id"=> 4055,

                "nome"=> "Iguaraçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4056,

                "nome"=> "Iguatu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4057,

                "nome"=> "Imbaú",
                "estado"=> "PR"
            ],
            [
                "id"=> 4058,

                "nome"=> "Imbituva",
                "estado"=> "PR"
            ],
            [
                "id"=> 4059,

                "nome"=> "Inácio Martins",
                "estado"=> "PR"
            ],
            [
                "id"=> 4060,

                "nome"=> "Inajá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4061,

                "nome"=> "Indianópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4062,

                "nome"=> "Ipiranga",
                "estado"=> "PR"
            ],
            [
                "id"=> 4063,

                "nome"=> "Iporã",
                "estado"=> "PR"
            ],
            [
                "id"=> 4064,

                "nome"=> "Iracema do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4065,

                "nome"=> "Irati",
                "estado"=> "PR"
            ],
            [
                "id"=> 4066,

                "nome"=> "Iretama",
                "estado"=> "PR"
            ],
            [
                "id"=> 4067,

                "nome"=> "Itaguajé",
                "estado"=> "PR"
            ],
            [
                "id"=> 4068,

                "nome"=> "Itaipulândia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4069,

                "nome"=> "Itambaracá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4070,

                "nome"=> "Itambé",
                "estado"=> "PR"
            ],
            [
                "id"=> 4071,

                "nome"=> "Itapejara D'Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4072,

                "nome"=> "Itaperuçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4073,

                "nome"=> "Itaúna do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4074,

                "nome"=> "Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4075,

                "nome"=> "Ivaiporã",
                "estado"=> "PR"
            ],
            [
                "id"=> 4076,

                "nome"=> "Ivaté",
                "estado"=> "PR"
            ],
            [
                "id"=> 4077,

                "nome"=> "Ivatuba",
                "estado"=> "PR"
            ],
            [
                "id"=> 4078,

                "nome"=> "Jaboti",
                "estado"=> "PR"
            ],
            [
                "id"=> 4079,

                "nome"=> "Jacarezinho",
                "estado"=> "PR"
            ],
            [
                "id"=> 4080,

                "nome"=> "Jaguapitã",
                "estado"=> "PR"
            ],
            [
                "id"=> 4081,

                "nome"=> "Jaguariaíva",
                "estado"=> "PR"
            ],
            [
                "id"=> 4082,

                "nome"=> "Jandaia do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4083,

                "nome"=> "Janiópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4084,

                "nome"=> "Japira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4085,

                "nome"=> "Japurá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4086,

                "nome"=> "Jardim Alegre",
                "estado"=> "PR"
            ],
            [
                "id"=> 4087,

                "nome"=> "Jardim Olinda",
                "estado"=> "PR"
            ],
            [
                "id"=> 4088,

                "nome"=> "Jataizinho",
                "estado"=> "PR"
            ],
            [
                "id"=> 4089,

                "nome"=> "Jesuítas",
                "estado"=> "PR"
            ],
            [
                "id"=> 4090,

                "nome"=> "Joaquim Távora",
                "estado"=> "PR"
            ],
            [
                "id"=> 4091,

                "nome"=> "Jundiaí do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4092,

                "nome"=> "Juranda",
                "estado"=> "PR"
            ],
            [
                "id"=> 4093,

                "nome"=> "Jussara",
                "estado"=> "PR"
            ],
            [
                "id"=> 4094,

                "nome"=> "Kaloré",
                "estado"=> "PR"
            ],
            [
                "id"=> 4095,

                "nome"=> "Lapa",
                "estado"=> "PR"
            ],
            [
                "id"=> 4096,

                "nome"=> "Laranjal",
                "estado"=> "PR"
            ],
            [
                "id"=> 4097,

                "nome"=> "Laranjeiras do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4098,

                "nome"=> "Leópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4099,

                "nome"=> "Lidianópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4100,

                "nome"=> "Lindoeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4101,

                "nome"=> "Loanda",
                "estado"=> "PR"
            ],
            [
                "id"=> 4102,

                "nome"=> "Lobato",
                "estado"=> "PR"
            ],
            [
                "id"=> 4103,

                "nome"=> "Londrina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4104,

                "nome"=> "Luiziana",
                "estado"=> "PR"
            ],
            [
                "id"=> 4105,

                "nome"=> "Lunardelli",
                "estado"=> "PR"
            ],
            [
                "id"=> 4106,

                "nome"=> "Lupionópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4107,

                "nome"=> "Mallet",
                "estado"=> "PR"
            ],
            [
                "id"=> 4108,

                "nome"=> "Mamborê",
                "estado"=> "PR"
            ],
            [
                "id"=> 4109,

                "nome"=> "Mandaguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4110,

                "nome"=> "Mandaguari",
                "estado"=> "PR"
            ],
            [
                "id"=> 4111,

                "nome"=> "Mandirituba",
                "estado"=> "PR"
            ],
            [
                "id"=> 4112,

                "nome"=> "Manfrinópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4113,

                "nome"=> "Mangueirinha",
                "estado"=> "PR"
            ],
            [
                "id"=> 4114,

                "nome"=> "Manoel Ribas",
                "estado"=> "PR"
            ],
            [
                "id"=> 4115,

                "nome"=> "Marechal Cândido Rondon",
                "estado"=> "PR"
            ],
            [
                "id"=> 4116,

                "nome"=> "Maria Helena",
                "estado"=> "PR"
            ],
            [
                "id"=> 4117,

                "nome"=> "Marialva",
                "estado"=> "PR"
            ],
            [
                "id"=> 4118,

                "nome"=> "Marilândia do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4119,

                "nome"=> "Marilena",
                "estado"=> "PR"
            ],
            [
                "id"=> 4120,

                "nome"=> "Mariluz",
                "estado"=> "PR"
            ],
            [
                "id"=> 4121,

                "nome"=> "Maringá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4122,

                "nome"=> "Mariópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4123,

                "nome"=> "Maripá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4124,

                "nome"=> "Marmeleiro",
                "estado"=> "PR"
            ],
            [
                "id"=> 4125,

                "nome"=> "Marquinho",
                "estado"=> "PR"
            ],
            [
                "id"=> 4126,

                "nome"=> "Marumbi",
                "estado"=> "PR"
            ],
            [
                "id"=> 4127,

                "nome"=> "Matelândia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4128,

                "nome"=> "Matinhos",
                "estado"=> "PR"
            ],
            [
                "id"=> 4129,

                "nome"=> "Mato Rico",
                "estado"=> "PR"
            ],
            [
                "id"=> 4130,

                "nome"=> "Mauá da Serra",
                "estado"=> "PR"
            ],
            [
                "id"=> 4131,

                "nome"=> "Medianeira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4132,

                "nome"=> "Mercedes",
                "estado"=> "PR"
            ],
            [
                "id"=> 4133,

                "nome"=> "Mirador",
                "estado"=> "PR"
            ],
            [
                "id"=> 4134,

                "nome"=> "Miraselva",
                "estado"=> "PR"
            ],
            [
                "id"=> 4135,

                "nome"=> "Missal",
                "estado"=> "PR"
            ],
            [
                "id"=> 4136,

                "nome"=> "Moreira Sales",
                "estado"=> "PR"
            ],
            [
                "id"=> 4137,

                "nome"=> "Morretes",
                "estado"=> "PR"
            ],
            [
                "id"=> 4138,

                "nome"=> "Munhoz de Melo",
                "estado"=> "PR"
            ],
            [
                "id"=> 4139,

                "nome"=> "Nossa Senhora das Graças",
                "estado"=> "PR"
            ],
            [
                "id"=> 4140,

                "nome"=> "Nova Aliança do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4141,

                "nome"=> "Nova América da Colina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4142,

                "nome"=> "Nova Aurora",
                "estado"=> "PR"
            ],
            [
                "id"=> 4143,

                "nome"=> "Nova Cantu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4144,

                "nome"=> "Nova Esperança",
                "estado"=> "PR"
            ],
            [
                "id"=> 4145,

                "nome"=> "Nova Esperança do Sudoeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4146,

                "nome"=> "Nova Fátima",
                "estado"=> "PR"
            ],
            [
                "id"=> 4147,

                "nome"=> "Nova Laranjeiras",
                "estado"=> "PR"
            ],
            [
                "id"=> 4148,

                "nome"=> "Nova Londrina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4149,

                "nome"=> "Nova Olímpia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4150,

                "nome"=> "Nova Santa Bárbara",
                "estado"=> "PR"
            ],
            [
                "id"=> 4151,

                "nome"=> "Nova Santa Rosa",
                "estado"=> "PR"
            ],
            [
                "id"=> 4152,

                "nome"=> "Nova Prata do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4153,

                "nome"=> "Nova Tebas",
                "estado"=> "PR"
            ],
            [
                "id"=> 4154,

                "nome"=> "Novo Itacolomi",
                "estado"=> "PR"
            ],
            [
                "id"=> 4155,

                "nome"=> "Ortigueira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4156,

                "nome"=> "Ourizona",
                "estado"=> "PR"
            ],
            [
                "id"=> 4157,

                "nome"=> "Ouro Verde do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4158,

                "nome"=> "Paiçandu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4159,

                "nome"=> "Palmas",
                "estado"=> "PR"
            ],
            [
                "id"=> 4160,

                "nome"=> "Palmeira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4161,

                "nome"=> "Palmital",
                "estado"=> "PR"
            ],
            [
                "id"=> 4162,

                "nome"=> "Palotina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4163,

                "nome"=> "Paraíso do Norte",
                "estado"=> "PR"
            ],
            [
                "id"=> 4164,

                "nome"=> "Paranacity",
                "estado"=> "PR"
            ],
            [
                "id"=> 4165,

                "nome"=> "Paranaguá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4166,

                "nome"=> "Paranapoema",
                "estado"=> "PR"
            ],
            [
                "id"=> 4167,

                "nome"=> "Paranavaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4168,

                "nome"=> "Pato Bragado",
                "estado"=> "PR"
            ],
            [
                "id"=> 4169,

                "nome"=> "Pato Branco",
                "estado"=> "PR"
            ],
            [
                "id"=> 4170,

                "nome"=> "Paula Freitas",
                "estado"=> "PR"
            ],
            [
                "id"=> 4171,

                "nome"=> "Paulo Frontin",
                "estado"=> "PR"
            ],
            [
                "id"=> 4172,

                "nome"=> "Peabiru",
                "estado"=> "PR"
            ],
            [
                "id"=> 4173,

                "nome"=> "Perobal",
                "estado"=> "PR"
            ],
            [
                "id"=> 4174,

                "nome"=> "Pérola",
                "estado"=> "PR"
            ],
            [
                "id"=> 4175,

                "nome"=> "Pérola D'Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4176,

                "nome"=> "Piên",
                "estado"=> "PR"
            ],
            [
                "id"=> 4177,

                "nome"=> "Pinhais",
                "estado"=> "PR"
            ],
            [
                "id"=> 4178,

                "nome"=> "Pinhalão",
                "estado"=> "PR"
            ],
            [
                "id"=> 4179,

                "nome"=> "Pinhal de São Bento",
                "estado"=> "PR"
            ],
            [
                "id"=> 4180,

                "nome"=> "Pinhão",
                "estado"=> "PR"
            ],
            [
                "id"=> 4181,

                "nome"=> "Piraí do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4182,

                "nome"=> "Piraquara",
                "estado"=> "PR"
            ],
            [
                "id"=> 4183,

                "nome"=> "Pitanga",
                "estado"=> "PR"
            ],
            [
                "id"=> 4184,

                "nome"=> "Pitangueiras",
                "estado"=> "PR"
            ],
            [
                "id"=> 4185,

                "nome"=> "Planaltina do Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 4186,

                "nome"=> "Planalto",
                "estado"=> "PR"
            ],
            [
                "id"=> 4187,

                "nome"=> "Ponta Grossa",
                "estado"=> "PR"
            ],
            [
                "id"=> 4188,

                "nome"=> "Pontal do Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 4189,

                "nome"=> "Porecatu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4190,

                "nome"=> "Porto Amazonas",
                "estado"=> "PR"
            ],
            [
                "id"=> 4191,

                "nome"=> "Porto Barreiro",
                "estado"=> "PR"
            ],
            [
                "id"=> 4192,

                "nome"=> "Porto Rico",
                "estado"=> "PR"
            ],
            [
                "id"=> 4193,

                "nome"=> "Porto Vitória",
                "estado"=> "PR"
            ],
            [
                "id"=> 4194,

                "nome"=> "Prado Ferreira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4195,

                "nome"=> "Pranchita",
                "estado"=> "PR"
            ],
            [
                "id"=> 4196,

                "nome"=> "Presidente Castelo Branco",
                "estado"=> "PR"
            ],
            [
                "id"=> 4197,

                "nome"=> "Primeiro de Maio",
                "estado"=> "PR"
            ],
            [
                "id"=> 4198,

                "nome"=> "Prudentópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4199,

                "nome"=> "Quarto Centenário",
                "estado"=> "PR"
            ],
            [
                "id"=> 4200,

                "nome"=> "Quatiguá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4201,

                "nome"=> "Quatro Barras",
                "estado"=> "PR"
            ],
            [
                "id"=> 4202,

                "nome"=> "Quatro Pontes",
                "estado"=> "PR"
            ],
            [
                "id"=> 4203,

                "nome"=> "Quedas do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4204,

                "nome"=> "Querência do Norte",
                "estado"=> "PR"
            ],
            [
                "id"=> 4205,

                "nome"=> "Quinta do Sol",
                "estado"=> "PR"
            ],
            [
                "id"=> 4206,

                "nome"=> "Quitandinha",
                "estado"=> "PR"
            ],
            [
                "id"=> 4207,

                "nome"=> "Ramilândia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4208,

                "nome"=> "Rancho Alegre",
                "estado"=> "PR"
            ],
            [
                "id"=> 4209,

                "nome"=> "Rancho Alegre D'Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4210,

                "nome"=> "Realeza",
                "estado"=> "PR"
            ],
            [
                "id"=> 4211,

                "nome"=> "Rebouças",
                "estado"=> "PR"
            ],
            [
                "id"=> 4212,

                "nome"=> "Renascença",
                "estado"=> "PR"
            ],
            [
                "id"=> 4213,

                "nome"=> "Reserva",
                "estado"=> "PR"
            ],
            [
                "id"=> 4214,

                "nome"=> "Reserva do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4215,

                "nome"=> "Ribeirão Claro",
                "estado"=> "PR"
            ],
            [
                "id"=> 4216,

                "nome"=> "Ribeirão do Pinhal",
                "estado"=> "PR"
            ],
            [
                "id"=> 4217,

                "nome"=> "Rio Azul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4218,

                "nome"=> "Rio Bom",
                "estado"=> "PR"
            ],
            [
                "id"=> 4219,

                "nome"=> "Rio Bonito do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4220,

                "nome"=> "Rio Branco do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4221,

                "nome"=> "Rio Branco do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4222,

                "nome"=> "Rio Negro",
                "estado"=> "PR"
            ],
            [
                "id"=> 4223,

                "nome"=> "Rolândia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4224,

                "nome"=> "Roncador",
                "estado"=> "PR"
            ],
            [
                "id"=> 4225,

                "nome"=> "Rondon",
                "estado"=> "PR"
            ],
            [
                "id"=> 4226,

                "nome"=> "Rosário do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4227,

                "nome"=> "Sabáudia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4228,

                "nome"=> "Salgado Filho",
                "estado"=> "PR"
            ],
            [
                "id"=> 4229,

                "nome"=> "Salto do Itararé",
                "estado"=> "PR"
            ],
            [
                "id"=> 4230,

                "nome"=> "Salto do Lontra",
                "estado"=> "PR"
            ],
            [
                "id"=> 4231,

                "nome"=> "Santa Amélia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4232,

                "nome"=> "Santa Cecília do Pavão",
                "estado"=> "PR"
            ],
            [
                "id"=> 4233,

                "nome"=> "Santa Cruz de Monte Castelo",
                "estado"=> "PR"
            ],
            [
                "id"=> 4234,

                "nome"=> "Santa Fé",
                "estado"=> "PR"
            ],
            [
                "id"=> 4235,

                "nome"=> "Santa Helena",
                "estado"=> "PR"
            ],
            [
                "id"=> 4236,

                "nome"=> "Santa Inês",
                "estado"=> "PR"
            ],
            [
                "id"=> 4237,

                "nome"=> "Santa Isabel do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4238,

                "nome"=> "Santa Izabel do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4239,

                "nome"=> "Santa Lúcia",
                "estado"=> "PR"
            ],
            [
                "id"=> 4240,

                "nome"=> "Santa Maria do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4241,

                "nome"=> "Santa Mariana",
                "estado"=> "PR"
            ],
            [
                "id"=> 4242,

                "nome"=> "Santa Mônica",
                "estado"=> "PR"
            ],
            [
                "id"=> 4243,

                "nome"=> "Santana do Itararé",
                "estado"=> "PR"
            ],
            [
                "id"=> 4244,

                "nome"=> "Santa Tereza do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4245,

                "nome"=> "Santa Terezinha de Itaipu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4246,

                "nome"=> "Santo Antônio da Platina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4247,

                "nome"=> "Santo Antônio do Caiuá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4248,

                "nome"=> "Santo Antônio do Paraíso",
                "estado"=> "PR"
            ],
            [
                "id"=> 4249,

                "nome"=> "Santo Antônio do Sudoeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4250,

                "nome"=> "Santo Inácio",
                "estado"=> "PR"
            ],
            [
                "id"=> 4251,

                "nome"=> "São Carlos do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4252,

                "nome"=> "São Jerônimo da Serra",
                "estado"=> "PR"
            ],
            [
                "id"=> 4253,

                "nome"=> "São João",
                "estado"=> "PR"
            ],
            [
                "id"=> 4254,

                "nome"=> "São João do Caiuá",
                "estado"=> "PR"
            ],
            [
                "id"=> 4255,

                "nome"=> "São João do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4256,

                "nome"=> "São João do Triunfo",
                "estado"=> "PR"
            ],
            [
                "id"=> 4257,

                "nome"=> "São Jorge D'Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4258,

                "nome"=> "São Jorge do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4259,

                "nome"=> "São Jorge do Patrocínio",
                "estado"=> "PR"
            ],
            [
                "id"=> 4260,

                "nome"=> "São José da Boa Vista",
                "estado"=> "PR"
            ],
            [
                "id"=> 4261,

                "nome"=> "São José das Palmeiras",
                "estado"=> "PR"
            ],
            [
                "id"=> 4262,

                "nome"=> "São José dos Pinhais",
                "estado"=> "PR"
            ],
            [
                "id"=> 4263,

                "nome"=> "São Manoel do Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 4264,

                "nome"=> "São Mateus do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4265,

                "nome"=> "São Miguel do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4266,

                "nome"=> "São Pedro do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4267,

                "nome"=> "São Pedro do Ivaí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4268,

                "nome"=> "São Pedro do Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 4269,

                "nome"=> "São Sebastião da Amoreira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4270,

                "nome"=> "São Tomé",
                "estado"=> "PR"
            ],
            [
                "id"=> 4271,

                "nome"=> "Sapopema",
                "estado"=> "PR"
            ],
            [
                "id"=> 4272,

                "nome"=> "Sarandi",
                "estado"=> "PR"
            ],
            [
                "id"=> 4273,

                "nome"=> "Saudade do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4274,

                "nome"=> "Sengés",
                "estado"=> "PR"
            ],
            [
                "id"=> 4275,

                "nome"=> "Serranópolis do Iguaçu",
                "estado"=> "PR"
            ],
            [
                "id"=> 4276,

                "nome"=> "Sertaneja",
                "estado"=> "PR"
            ],
            [
                "id"=> 4277,

                "nome"=> "Sertanópolis",
                "estado"=> "PR"
            ],
            [
                "id"=> 4278,

                "nome"=> "Siqueira Campos",
                "estado"=> "PR"
            ],
            [
                "id"=> 4279,

                "nome"=> "Sulina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4280,

                "nome"=> "Tamarana",
                "estado"=> "PR"
            ],
            [
                "id"=> 4281,

                "nome"=> "Tamboara",
                "estado"=> "PR"
            ],
            [
                "id"=> 4282,

                "nome"=> "Tapejara",
                "estado"=> "PR"
            ],
            [
                "id"=> 4283,

                "nome"=> "Tapira",
                "estado"=> "PR"
            ],
            [
                "id"=> 4284,

                "nome"=> "Teixeira Soares",
                "estado"=> "PR"
            ],
            [
                "id"=> 4285,

                "nome"=> "Telêmaco Borba",
                "estado"=> "PR"
            ],
            [
                "id"=> 4286,

                "nome"=> "Terra Boa",
                "estado"=> "PR"
            ],
            [
                "id"=> 4287,

                "nome"=> "Terra Rica",
                "estado"=> "PR"
            ],
            [
                "id"=> 4288,

                "nome"=> "Terra Roxa",
                "estado"=> "PR"
            ],
            [
                "id"=> 4289,

                "nome"=> "Tibagi",
                "estado"=> "PR"
            ],
            [
                "id"=> 4290,

                "nome"=> "Tijucas do Sul",
                "estado"=> "PR"
            ],
            [
                "id"=> 4291,

                "nome"=> "Toledo",
                "estado"=> "PR"
            ],
            [
                "id"=> 4292,

                "nome"=> "Tomazina",
                "estado"=> "PR"
            ],
            [
                "id"=> 4293,

                "nome"=> "Três Barras do Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 4294,

                "nome"=> "Tunas do Paraná",
                "estado"=> "PR"
            ],
            [
                "id"=> 4295,

                "nome"=> "Tuneiras do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4296,

                "nome"=> "Tupãssi",
                "estado"=> "PR"
            ],
            [
                "id"=> 4297,

                "nome"=> "Turvo",
                "estado"=> "PR"
            ],
            [
                "id"=> 4298,

                "nome"=> "Ubiratã",
                "estado"=> "PR"
            ],
            [
                "id"=> 4299,

                "nome"=> "Umuarama",
                "estado"=> "PR"
            ],
            [
                "id"=> 4300,

                "nome"=> "União da Vitória",
                "estado"=> "PR"
            ],
            [
                "id"=> 4301,

                "nome"=> "Uniflor",
                "estado"=> "PR"
            ],
            [
                "id"=> 4302,

                "nome"=> "Uraí",
                "estado"=> "PR"
            ],
            [
                "id"=> 4303,

                "nome"=> "Wenceslau Braz",
                "estado"=> "PR"
            ],
            [
                "id"=> 4304,

                "nome"=> "Ventania",
                "estado"=> "PR"
            ],
            [
                "id"=> 4305,

                "nome"=> "Vera Cruz do Oeste",
                "estado"=> "PR"
            ],
            [
                "id"=> 4306,

                "nome"=> "Verê",
                "estado"=> "PR"
            ],
            [
                "id"=> 4307,

                "nome"=> "Alto Paraíso",
                "estado"=> "PR"
            ],
            [
                "id"=> 4308,

                "nome"=> "Doutor Ulysses",
                "estado"=> "PR"
            ],
            [
                "id"=> 4309,

                "nome"=> "Virmond",
                "estado"=> "PR"
            ],
            [
                "id"=> 4310,

                "nome"=> "Vitorino",
                "estado"=> "PR"
            ],
            [
                "id"=> 4311,

                "nome"=> "Xambrê",
                "estado"=> "PR"
            ],
            [
                "id"=> 4312,

                "nome"=> "Abdon Batista",
                "estado"=> "SC"
            ],
            [
                "id"=> 4313,

                "nome"=> "Abelardo Luz",
                "estado"=> "SC"
            ],
            [
                "id"=> 4314,

                "nome"=> "Agrolândia",
                "estado"=> "SC"
            ],
            [
                "id"=> 4315,

                "nome"=> "Agronômica",
                "estado"=> "SC"
            ],
            [
                "id"=> 4316,

                "nome"=> "Água Doce",
                "estado"=> "SC"
            ],
            [
                "id"=> 4317,

                "nome"=> "Águas de Chapecó",
                "estado"=> "SC"
            ],
            [
                "id"=> 4318,

                "nome"=> "Águas Frias",
                "estado"=> "SC"
            ],
            [
                "id"=> 4319,

                "nome"=> "Águas Mornas",
                "estado"=> "SC"
            ],
            [
                "id"=> 4320,

                "nome"=> "Alfredo Wagner",
                "estado"=> "SC"
            ],
            [
                "id"=> 4321,

                "nome"=> "Alto Bela Vista",
                "estado"=> "SC"
            ],
            [
                "id"=> 4322,

                "nome"=> "Anchieta",
                "estado"=> "SC"
            ],
            [
                "id"=> 4323,

                "nome"=> "Angelina",
                "estado"=> "SC"
            ],
            [
                "id"=> 4324,

                "nome"=> "Anita Garibaldi",
                "estado"=> "SC"
            ],
            [
                "id"=> 4325,

                "nome"=> "Anitápolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4326,

                "nome"=> "Antônio Carlos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4327,

                "nome"=> "Apiúna",
                "estado"=> "SC"
            ],
            [
                "id"=> 4328,

                "nome"=> "Arabutã",
                "estado"=> "SC"
            ],
            [
                "id"=> 4329,

                "nome"=> "Araquari",
                "estado"=> "SC"
            ],
            [
                "id"=> 4330,

                "nome"=> "Araranguá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4331,

                "nome"=> "Armazém",
                "estado"=> "SC"
            ],
            [
                "id"=> 4332,

                "nome"=> "Arroio Trinta",
                "estado"=> "SC"
            ],
            [
                "id"=> 4333,

                "nome"=> "Arvoredo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4334,

                "nome"=> "Ascurra",
                "estado"=> "SC"
            ],
            [
                "id"=> 4335,

                "nome"=> "Atalanta",
                "estado"=> "SC"
            ],
            [
                "id"=> 4336,

                "nome"=> "Aurora",
                "estado"=> "SC"
            ],
            [
                "id"=> 4337,

                "nome"=> "Balneário Arroio do Silva",
                "estado"=> "SC"
            ],
            [
                "id"=> 4338,

                "nome"=> "Balneário Camboriú",
                "estado"=> "SC"
            ],
            [
                "id"=> 4339,

                "nome"=> "Balneário Barra do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4340,

                "nome"=> "Balneário Gaivota",
                "estado"=> "SC"
            ],
            [
                "id"=> 4341,

                "nome"=> "Bandeirante",
                "estado"=> "SC"
            ],
            [
                "id"=> 4342,

                "nome"=> "Barra Bonita",
                "estado"=> "SC"
            ],
            [
                "id"=> 4343,

                "nome"=> "Barra Velha",
                "estado"=> "SC"
            ],
            [
                "id"=> 4344,

                "nome"=> "Bela Vista do Toldo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4345,

                "nome"=> "Belmonte",
                "estado"=> "SC"
            ],
            [
                "id"=> 4346,

                "nome"=> "Benedito Novo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4347,

                "nome"=> "Biguaçu",
                "estado"=> "SC"
            ],
            [
                "id"=> 4348,

                "nome"=> "Blumenau",
                "estado"=> "SC"
            ],
            [
                "id"=> 4349,

                "nome"=> "Bocaina do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4350,

                "nome"=> "Bombinhas",
                "estado"=> "SC"
            ],
            [
                "id"=> 4351,

                "nome"=> "Bom Jardim da Serra",
                "estado"=> "SC"
            ],
            [
                "id"=> 4352,

                "nome"=> "Bom Jesus",
                "estado"=> "SC"
            ],
            [
                "id"=> 4353,

                "nome"=> "Bom Jesus do Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4354,

                "nome"=> "Bom Retiro",
                "estado"=> "SC"
            ],
            [
                "id"=> 4355,

                "nome"=> "Botuverá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4356,

                "nome"=> "Braço do Norte",
                "estado"=> "SC"
            ],
            [
                "id"=> 4357,

                "nome"=> "Braço do Trombudo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4358,

                "nome"=> "Brunópolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4359,

                "nome"=> "Brusque",
                "estado"=> "SC"
            ],
            [
                "id"=> 4360,

                "nome"=> "Caçador",
                "estado"=> "SC"
            ],
            [
                "id"=> 4361,

                "nome"=> "Caibi",
                "estado"=> "SC"
            ],
            [
                "id"=> 4362,

                "nome"=> "Calmon",
                "estado"=> "SC"
            ],
            [
                "id"=> 4363,

                "nome"=> "Camboriú",
                "estado"=> "SC"
            ],
            [
                "id"=> 4364,

                "nome"=> "Capão Alto",
                "estado"=> "SC"
            ],
            [
                "id"=> 4365,

                "nome"=> "Campo Alegre",
                "estado"=> "SC"
            ],
            [
                "id"=> 4366,

                "nome"=> "Campo Belo do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4367,

                "nome"=> "Campo Erê",
                "estado"=> "SC"
            ],
            [
                "id"=> 4368,

                "nome"=> "Campos Novos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4369,

                "nome"=> "Canelinha",
                "estado"=> "SC"
            ],
            [
                "id"=> 4370,

                "nome"=> "Canoinhas",
                "estado"=> "SC"
            ],
            [
                "id"=> 4371,

                "nome"=> "Capinzal",
                "estado"=> "SC"
            ],
            [
                "id"=> 4372,

                "nome"=> "Capivari de Baixo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4373,

                "nome"=> "Catanduvas",
                "estado"=> "SC"
            ],
            [
                "id"=> 4374,

                "nome"=> "Caxambu do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4375,

                "nome"=> "Celso Ramos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4376,

                "nome"=> "Cerro Negro",
                "estado"=> "SC"
            ],
            [
                "id"=> 4377,

                "nome"=> "Chapadão do Lageado",
                "estado"=> "SC"
            ],
            [
                "id"=> 4378,

                "nome"=> "Chapecó",
                "estado"=> "SC"
            ],
            [
                "id"=> 4379,

                "nome"=> "Cocal do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4380,

                "nome"=> "Concórdia",
                "estado"=> "SC"
            ],
            [
                "id"=> 4381,

                "nome"=> "Cordilheira Alta",
                "estado"=> "SC"
            ],
            [
                "id"=> 4382,

                "nome"=> "Coronel Freitas",
                "estado"=> "SC"
            ],
            [
                "id"=> 4383,

                "nome"=> "Coronel Martins",
                "estado"=> "SC"
            ],
            [
                "id"=> 4384,

                "nome"=> "Corupá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4385,

                "nome"=> "Correia Pinto",
                "estado"=> "SC"
            ],
            [
                "id"=> 4386,

                "nome"=> "Criciúma",
                "estado"=> "SC"
            ],
            [
                "id"=> 4387,

                "nome"=> "Cunha Porã",
                "estado"=> "SC"
            ],
            [
                "id"=> 4388,

                "nome"=> "Cunhataí",
                "estado"=> "SC"
            ],
            [
                "id"=> 4389,

                "nome"=> "Curitibanos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4390,

                "nome"=> "Descanso",
                "estado"=> "SC"
            ],
            [
                "id"=> 4391,

                "nome"=> "Dionísio Cerqueira",
                "estado"=> "SC"
            ],
            [
                "id"=> 4392,

                "nome"=> "Dona Emma",
                "estado"=> "SC"
            ],
            [
                "id"=> 4393,

                "nome"=> "Doutor Pedrinho",
                "estado"=> "SC"
            ],
            [
                "id"=> 4394,

                "nome"=> "Entre Rios",
                "estado"=> "SC"
            ],
            [
                "id"=> 4395,

                "nome"=> "Ermo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4396,

                "nome"=> "Erval Velho",
                "estado"=> "SC"
            ],
            [
                "id"=> 4397,

                "nome"=> "Faxinal dos Guedes",
                "estado"=> "SC"
            ],
            [
                "id"=> 4398,

                "nome"=> "Flor do Sertão",
                "estado"=> "SC"
            ],
            [
                "id"=> 4399,

                "nome"=> "Florianópolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4400,

                "nome"=> "Formosa do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4401,

                "nome"=> "Forquilhinha",
                "estado"=> "SC"
            ],
            [
                "id"=> 4402,

                "nome"=> "Fraiburgo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4403,

                "nome"=> "Frei Rogério",
                "estado"=> "SC"
            ],
            [
                "id"=> 4404,

                "nome"=> "Galvão",
                "estado"=> "SC"
            ],
            [
                "id"=> 4405,

                "nome"=> "Garopaba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4406,

                "nome"=> "Garuva",
                "estado"=> "SC"
            ],
            [
                "id"=> 4407,

                "nome"=> "Gaspar",
                "estado"=> "SC"
            ],
            [
                "id"=> 4408,

                "nome"=> "Governador Celso Ramos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4409,

                "nome"=> "Grão Pará",
                "estado"=> "SC"
            ],
            [
                "id"=> 4410,

                "nome"=> "Gravatal",
                "estado"=> "SC"
            ],
            [
                "id"=> 4411,

                "nome"=> "Guabiruba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4412,

                "nome"=> "Guaraciaba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4413,

                "nome"=> "Guaramirim",
                "estado"=> "SC"
            ],
            [
                "id"=> 4414,

                "nome"=> "Guarujá do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4415,

                "nome"=> "Guatambú",
                "estado"=> "SC"
            ],
            [
                "id"=> 4416,

                "nome"=> "Herval D'Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4417,

                "nome"=> "Ibiam",
                "estado"=> "SC"
            ],
            [
                "id"=> 4418,

                "nome"=> "Ibicaré",
                "estado"=> "SC"
            ],
            [
                "id"=> 4419,

                "nome"=> "Ibirama",
                "estado"=> "SC"
            ],
            [
                "id"=> 4420,

                "nome"=> "Içara",
                "estado"=> "SC"
            ],
            [
                "id"=> 4421,

                "nome"=> "Ilhota",
                "estado"=> "SC"
            ],
            [
                "id"=> 4422,

                "nome"=> "Imaruí",
                "estado"=> "SC"
            ],
            [
                "id"=> 4423,

                "nome"=> "Imbituba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4424,

                "nome"=> "Imbuia",
                "estado"=> "SC"
            ],
            [
                "id"=> 4425,

                "nome"=> "Indaial",
                "estado"=> "SC"
            ],
            [
                "id"=> 4426,

                "nome"=> "Iomerê",
                "estado"=> "SC"
            ],
            [
                "id"=> 4427,

                "nome"=> "Ipira",
                "estado"=> "SC"
            ],
            [
                "id"=> 4428,

                "nome"=> "Iporã do Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4429,

                "nome"=> "Ipuaçu",
                "estado"=> "SC"
            ],
            [
                "id"=> 4430,

                "nome"=> "Ipumirim",
                "estado"=> "SC"
            ],
            [
                "id"=> 4431,

                "nome"=> "Iraceminha",
                "estado"=> "SC"
            ],
            [
                "id"=> 4432,

                "nome"=> "Irani",
                "estado"=> "SC"
            ],
            [
                "id"=> 4433,

                "nome"=> "Irati",
                "estado"=> "SC"
            ],
            [
                "id"=> 4434,

                "nome"=> "Irineópolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4435,

                "nome"=> "Itá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4436,

                "nome"=> "Itaiópolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4437,

                "nome"=> "Itajaí",
                "estado"=> "SC"
            ],
            [
                "id"=> 4438,

                "nome"=> "Itapema",
                "estado"=> "SC"
            ],
            [
                "id"=> 4439,

                "nome"=> "Itapiranga",
                "estado"=> "SC"
            ],
            [
                "id"=> 4440,

                "nome"=> "Itapoá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4441,

                "nome"=> "Ituporanga",
                "estado"=> "SC"
            ],
            [
                "id"=> 4442,

                "nome"=> "Jaborá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4443,

                "nome"=> "Jacinto Machado",
                "estado"=> "SC"
            ],
            [
                "id"=> 4444,

                "nome"=> "Jaguaruna",
                "estado"=> "SC"
            ],
            [
                "id"=> 4445,

                "nome"=> "Jaraguá do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4446,

                "nome"=> "Jardinópolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4447,

                "nome"=> "Joaçaba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4448,

                "nome"=> "Joinville",
                "estado"=> "SC"
            ],
            [
                "id"=> 4449,

                "nome"=> "José Boiteux",
                "estado"=> "SC"
            ],
            [
                "id"=> 4450,

                "nome"=> "Jupiá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4451,

                "nome"=> "Lacerdópolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4452,

                "nome"=> "Lages",
                "estado"=> "SC"
            ],
            [
                "id"=> 4453,

                "nome"=> "Laguna",
                "estado"=> "SC"
            ],
            [
                "id"=> 4454,

                "nome"=> "Lajeado Grande",
                "estado"=> "SC"
            ],
            [
                "id"=> 4455,

                "nome"=> "Laurentino",
                "estado"=> "SC"
            ],
            [
                "id"=> 4456,

                "nome"=> "Lauro Muller",
                "estado"=> "SC"
            ],
            [
                "id"=> 4457,

                "nome"=> "Lebon Régis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4458,

                "nome"=> "Leoberto Leal",
                "estado"=> "SC"
            ],
            [
                "id"=> 4459,

                "nome"=> "Lindóia do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4460,

                "nome"=> "Lontras",
                "estado"=> "SC"
            ],
            [
                "id"=> 4461,

                "nome"=> "Luiz Alves",
                "estado"=> "SC"
            ],
            [
                "id"=> 4462,

                "nome"=> "Luzerna",
                "estado"=> "SC"
            ],
            [
                "id"=> 4463,

                "nome"=> "Macieira",
                "estado"=> "SC"
            ],
            [
                "id"=> 4464,

                "nome"=> "Mafra",
                "estado"=> "SC"
            ],
            [
                "id"=> 4465,

                "nome"=> "Major Gercino",
                "estado"=> "SC"
            ],
            [
                "id"=> 4466,

                "nome"=> "Major Vieira",
                "estado"=> "SC"
            ],
            [
                "id"=> 4467,

                "nome"=> "Maracajá",
                "estado"=> "SC"
            ],
            [
                "id"=> 4468,

                "nome"=> "Maravilha",
                "estado"=> "SC"
            ],
            [
                "id"=> 4469,

                "nome"=> "Marema",
                "estado"=> "SC"
            ],
            [
                "id"=> 4470,

                "nome"=> "Massaranduba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4471,

                "nome"=> "Matos Costa",
                "estado"=> "SC"
            ],
            [
                "id"=> 4472,

                "nome"=> "Meleiro",
                "estado"=> "SC"
            ],
            [
                "id"=> 4473,

                "nome"=> "Mirim Doce",
                "estado"=> "SC"
            ],
            [
                "id"=> 4474,

                "nome"=> "Modelo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4475,

                "nome"=> "Mondaí",
                "estado"=> "SC"
            ],
            [
                "id"=> 4476,

                "nome"=> "Monte Carlo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4477,

                "nome"=> "Monte Castelo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4478,

                "nome"=> "Morro da Fumaça",
                "estado"=> "SC"
            ],
            [
                "id"=> 4479,

                "nome"=> "Morro Grande",
                "estado"=> "SC"
            ],
            [
                "id"=> 4480,

                "nome"=> "Navegantes",
                "estado"=> "SC"
            ],
            [
                "id"=> 4481,

                "nome"=> "Nova Erechim",
                "estado"=> "SC"
            ],
            [
                "id"=> 4482,

                "nome"=> "Nova Itaberaba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4483,

                "nome"=> "Nova Trento",
                "estado"=> "SC"
            ],
            [
                "id"=> 4484,

                "nome"=> "Nova Veneza",
                "estado"=> "SC"
            ],
            [
                "id"=> 4485,

                "nome"=> "Novo Horizonte",
                "estado"=> "SC"
            ],
            [
                "id"=> 4486,

                "nome"=> "Orleans",
                "estado"=> "SC"
            ],
            [
                "id"=> 4487,

                "nome"=> "Otacílio Costa",
                "estado"=> "SC"
            ],
            [
                "id"=> 4488,

                "nome"=> "Ouro",
                "estado"=> "SC"
            ],
            [
                "id"=> 4489,

                "nome"=> "Ouro Verde",
                "estado"=> "SC"
            ],
            [
                "id"=> 4490,

                "nome"=> "Paial",
                "estado"=> "SC"
            ],
            [
                "id"=> 4491,

                "nome"=> "Painel",
                "estado"=> "SC"
            ],
            [
                "id"=> 4492,

                "nome"=> "Palhoça",
                "estado"=> "SC"
            ],
            [
                "id"=> 4493,

                "nome"=> "Palma Sola",
                "estado"=> "SC"
            ],
            [
                "id"=> 4494,

                "nome"=> "Palmeira",
                "estado"=> "SC"
            ],
            [
                "id"=> 4495,

                "nome"=> "Palmitos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4496,

                "nome"=> "Papanduva",
                "estado"=> "SC"
            ],
            [
                "id"=> 4497,

                "nome"=> "Paraíso",
                "estado"=> "SC"
            ],
            [
                "id"=> 4498,

                "nome"=> "Passo de Torres",
                "estado"=> "SC"
            ],
            [
                "id"=> 4499,

                "nome"=> "Passos Maia",
                "estado"=> "SC"
            ],
            [
                "id"=> 4500,

                "nome"=> "Paulo Lopes",
                "estado"=> "SC"
            ],
            [
                "id"=> 4501,

                "nome"=> "Pedras Grandes",
                "estado"=> "SC"
            ],
            [
                "id"=> 4502,

                "nome"=> "Penha",
                "estado"=> "SC"
            ],
            [
                "id"=> 4503,

                "nome"=> "Peritiba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4504,

                "nome"=> "Pescaria Brava",
                "estado"=> "SC"
            ],
            [
                "id"=> 4505,

                "nome"=> "Petrolândia",
                "estado"=> "SC"
            ],
            [
                "id"=> 4506,

                "nome"=> "Balneário Piçarras",
                "estado"=> "SC"
            ],
            [
                "id"=> 4507,

                "nome"=> "Pinhalzinho",
                "estado"=> "SC"
            ],
            [
                "id"=> 4508,

                "nome"=> "Pinheiro Preto",
                "estado"=> "SC"
            ],
            [
                "id"=> 4509,

                "nome"=> "Piratuba",
                "estado"=> "SC"
            ],
            [
                "id"=> 4510,

                "nome"=> "Planalto Alegre",
                "estado"=> "SC"
            ],
            [
                "id"=> 4511,

                "nome"=> "Pomerode",
                "estado"=> "SC"
            ],
            [
                "id"=> 4512,

                "nome"=> "Ponte Alta",
                "estado"=> "SC"
            ],
            [
                "id"=> 4513,

                "nome"=> "Ponte Alta do Norte",
                "estado"=> "SC"
            ],
            [
                "id"=> 4514,

                "nome"=> "Ponte Serrada",
                "estado"=> "SC"
            ],
            [
                "id"=> 4515,

                "nome"=> "Porto Belo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4516,

                "nome"=> "Porto União",
                "estado"=> "SC"
            ],
            [
                "id"=> 4517,

                "nome"=> "Pouso Redondo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4518,

                "nome"=> "Praia Grande",
                "estado"=> "SC"
            ],
            [
                "id"=> 4519,

                "nome"=> "Presidente Castello Branco",
                "estado"=> "SC"
            ],
            [
                "id"=> 4520,

                "nome"=> "Presidente Getúlio",
                "estado"=> "SC"
            ],
            [
                "id"=> 4521,

                "nome"=> "Presidente Nereu",
                "estado"=> "SC"
            ],
            [
                "id"=> 4522,

                "nome"=> "Princesa",
                "estado"=> "SC"
            ],
            [
                "id"=> 4523,

                "nome"=> "Quilombo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4524,

                "nome"=> "Rancho Queimado",
                "estado"=> "SC"
            ],
            [
                "id"=> 4525,

                "nome"=> "Rio das Antas",
                "estado"=> "SC"
            ],
            [
                "id"=> 4526,

                "nome"=> "Rio do Campo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4527,

                "nome"=> "Rio do Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4528,

                "nome"=> "Rio dos Cedros",
                "estado"=> "SC"
            ],
            [
                "id"=> 4529,

                "nome"=> "Rio do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4530,

                "nome"=> "Rio Fortuna",
                "estado"=> "SC"
            ],
            [
                "id"=> 4531,

                "nome"=> "Rio Negrinho",
                "estado"=> "SC"
            ],
            [
                "id"=> 4532,

                "nome"=> "Rio Restadoino",
                "estado"=> "SC"
            ],
            [
                "id"=> 4533,

                "nome"=> "Riqueza",
                "estado"=> "SC"
            ],
            [
                "id"=> 4534,

                "nome"=> "Rodeio",
                "estado"=> "SC"
            ],
            [
                "id"=> 4535,

                "nome"=> "Romelândia",
                "estado"=> "SC"
            ],
            [
                "id"=> 4536,

                "nome"=> "Salete",
                "estado"=> "SC"
            ],
            [
                "id"=> 4537,

                "nome"=> "Saltinho",
                "estado"=> "SC"
            ],
            [
                "id"=> 4538,

                "nome"=> "Salto Veloso",
                "estado"=> "SC"
            ],
            [
                "id"=> 4539,

                "nome"=> "Sangão",
                "estado"=> "SC"
            ],
            [
                "id"=> 4540,

                "nome"=> "Santa Cecília",
                "estado"=> "SC"
            ],
            [
                "id"=> 4541,

                "nome"=> "Santa Helena",
                "estado"=> "SC"
            ],
            [
                "id"=> 4542,

                "nome"=> "Santa Rosa de Lima",
                "estado"=> "SC"
            ],
            [
                "id"=> 4543,

                "nome"=> "Santa Rosa do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4544,

                "nome"=> "Santa Terezinha",
                "estado"=> "SC"
            ],
            [
                "id"=> 4545,

                "nome"=> "Santa Terezinha do Progresso",
                "estado"=> "SC"
            ],
            [
                "id"=> 4546,

                "nome"=> "Santiago do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4547,

                "nome"=> "Santo Amaro da Imperatriz",
                "estado"=> "SC"
            ],
            [
                "id"=> 4548,

                "nome"=> "São Bernardino",
                "estado"=> "SC"
            ],
            [
                "id"=> 4549,

                "nome"=> "São Bento do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4550,

                "nome"=> "São Bonifácio",
                "estado"=> "SC"
            ],
            [
                "id"=> 4551,

                "nome"=> "São Carlos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4552,

                "nome"=> "São Cristovão do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4553,

                "nome"=> "São Domingos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4554,

                "nome"=> "São Francisco do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4555,

                "nome"=> "São João do Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4556,

                "nome"=> "São João Batista",
                "estado"=> "SC"
            ],
            [
                "id"=> 4557,

                "nome"=> "São João do Itaperiú",
                "estado"=> "SC"
            ],
            [
                "id"=> 4558,

                "nome"=> "São João do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4559,

                "nome"=> "São Joaquim",
                "estado"=> "SC"
            ],
            [
                "id"=> 4560,

                "nome"=> "São José",
                "estado"=> "SC"
            ],
            [
                "id"=> 4561,

                "nome"=> "São José do Cedro",
                "estado"=> "SC"
            ],
            [
                "id"=> 4562,

                "nome"=> "São José do Cerrito",
                "estado"=> "SC"
            ],
            [
                "id"=> 4563,

                "nome"=> "São Lourenço do Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4564,

                "nome"=> "São Ludgero",
                "estado"=> "SC"
            ],
            [
                "id"=> 4565,

                "nome"=> "São Martinho",
                "estado"=> "SC"
            ],
            [
                "id"=> 4566,

                "nome"=> "São Miguel da Boa Vista",
                "estado"=> "SC"
            ],
            [
                "id"=> 4567,

                "nome"=> "São Miguel do Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4568,

                "nome"=> "São Pedro de Alcântara",
                "estado"=> "SC"
            ],
            [
                "id"=> 4569,

                "nome"=> "Saudades",
                "estado"=> "SC"
            ],
            [
                "id"=> 4570,

                "nome"=> "Schroeder",
                "estado"=> "SC"
            ],
            [
                "id"=> 4571,

                "nome"=> "Seara",
                "estado"=> "SC"
            ],
            [
                "id"=> 4572,

                "nome"=> "Serra Alta",
                "estado"=> "SC"
            ],
            [
                "id"=> 4573,

                "nome"=> "Siderópolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4574,

                "nome"=> "Sombrio",
                "estado"=> "SC"
            ],
            [
                "id"=> 4575,

                "nome"=> "Sul Brasil",
                "estado"=> "SC"
            ],
            [
                "id"=> 4576,

                "nome"=> "Taió",
                "estado"=> "SC"
            ],
            [
                "id"=> 4577,

                "nome"=> "Tangará",
                "estado"=> "SC"
            ],
            [
                "id"=> 4578,

                "nome"=> "Tigrinhos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4579,

                "nome"=> "Tijucas",
                "estado"=> "SC"
            ],
            [
                "id"=> 4580,

                "nome"=> "Timbé do Sul",
                "estado"=> "SC"
            ],
            [
                "id"=> 4581,

                "nome"=> "Timbó",
                "estado"=> "SC"
            ],
            [
                "id"=> 4582,

                "nome"=> "Timbó Grande",
                "estado"=> "SC"
            ],
            [
                "id"=> 4583,

                "nome"=> "Três Barras",
                "estado"=> "SC"
            ],
            [
                "id"=> 4584,

                "nome"=> "Treviso",
                "estado"=> "SC"
            ],
            [
                "id"=> 4585,

                "nome"=> "Treze de Maio",
                "estado"=> "SC"
            ],
            [
                "id"=> 4586,

                "nome"=> "Treze Tílias",
                "estado"=> "SC"
            ],
            [
                "id"=> 4587,

                "nome"=> "Trombudo Central",
                "estado"=> "SC"
            ],
            [
                "id"=> 4588,

                "nome"=> "Tubarão",
                "estado"=> "SC"
            ],
            [
                "id"=> 4589,

                "nome"=> "Tunápolis",
                "estado"=> "SC"
            ],
            [
                "id"=> 4590,

                "nome"=> "Turvo",
                "estado"=> "SC"
            ],
            [
                "id"=> 4591,

                "nome"=> "União do Oeste",
                "estado"=> "SC"
            ],
            [
                "id"=> 4592,

                "nome"=> "Urubici",
                "estado"=> "SC"
            ],
            [
                "id"=> 4593,

                "nome"=> "Urupema",
                "estado"=> "SC"
            ],
            [
                "id"=> 4594,

                "nome"=> "Urussanga",
                "estado"=> "SC"
            ],
            [
                "id"=> 4595,

                "nome"=> "Vargeão",
                "estado"=> "SC"
            ],
            [
                "id"=> 4596,

                "nome"=> "Vargem",
                "estado"=> "SC"
            ],
            [
                "id"=> 4597,

                "nome"=> "Vargem Bonita",
                "estado"=> "SC"
            ],
            [
                "id"=> 4598,

                "nome"=> "Vidal Ramos",
                "estado"=> "SC"
            ],
            [
                "id"=> 4599,

                "nome"=> "Videira",
                "estado"=> "SC"
            ],
            [
                "id"=> 4600,

                "nome"=> "Vitor Meireles",
                "estado"=> "SC"
            ],
            [
                "id"=> 4601,

                "nome"=> "Witmarsum",
                "estado"=> "SC"
            ],
            [
                "id"=> 4602,

                "nome"=> "Xanxerê",
                "estado"=> "SC"
            ],
            [
                "id"=> 4603,

                "nome"=> "Xavantina",
                "estado"=> "SC"
            ],
            [
                "id"=> 4604,

                "nome"=> "Xaxim",
                "estado"=> "SC"
            ],
            [
                "id"=> 4605,

                "nome"=> "Zortéa",
                "estado"=> "SC"
            ],
            [
                "id"=> 4606,

                "nome"=> "Balneário Rincão",
                "estado"=> "SC"
            ],
            [
                "id"=> 4607,

                "nome"=> "Aceguá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4608,

                "nome"=> "Água Santa",
                "estado"=> "RS"
            ],
            [
                "id"=> 4609,

                "nome"=> "Agudo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4610,

                "nome"=> "Ajuricaba",
                "estado"=> "RS"
            ],
            [
                "id"=> 4611,

                "nome"=> "Alecrim",
                "estado"=> "RS"
            ],
            [
                "id"=> 4612,

                "nome"=> "Alegrete",
                "estado"=> "RS"
            ],
            [
                "id"=> 4613,

                "nome"=> "Alegria",
                "estado"=> "RS"
            ],
            [
                "id"=> 4614,

                "nome"=> "Almirante Tamandaré do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4615,

                "nome"=> "Alpestre",
                "estado"=> "RS"
            ],
            [
                "id"=> 4616,

                "nome"=> "Alto Alegre",
                "estado"=> "RS"
            ],
            [
                "id"=> 4617,

                "nome"=> "Alto Feliz",
                "estado"=> "RS"
            ],
            [
                "id"=> 4618,

                "nome"=> "Alvorada",
                "estado"=> "RS"
            ],
            [
                "id"=> 4619,

                "nome"=> "Amaral Ferrador",
                "estado"=> "RS"
            ],
            [
                "id"=> 4620,

                "nome"=> "Ametista do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4621,

                "nome"=> "André da Rocha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4622,

                "nome"=> "Anta Gorda",
                "estado"=> "RS"
            ],
            [
                "id"=> 4623,

                "nome"=> "Antônio Prado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4624,

                "nome"=> "Arambaré",
                "estado"=> "RS"
            ],
            [
                "id"=> 4625,

                "nome"=> "Araricá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4626,

                "nome"=> "Aratiba",
                "estado"=> "RS"
            ],
            [
                "id"=> 4627,

                "nome"=> "Arroio do Meio",
                "estado"=> "RS"
            ],
            [
                "id"=> 4628,

                "nome"=> "Arroio do Sal",
                "estado"=> "RS"
            ],
            [
                "id"=> 4629,

                "nome"=> "Arroio do Padre",
                "estado"=> "RS"
            ],
            [
                "id"=> 4630,

                "nome"=> "Arroio dos Ratos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4631,

                "nome"=> "Arroio do Tigre",
                "estado"=> "RS"
            ],
            [
                "id"=> 4632,

                "nome"=> "Arroio Grande",
                "estado"=> "RS"
            ],
            [
                "id"=> 4633,

                "nome"=> "Arvorezinha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4634,

                "nome"=> "Augusto Pestana",
                "estado"=> "RS"
            ],
            [
                "id"=> 4635,

                "nome"=> "Áurea",
                "estado"=> "RS"
            ],
            [
                "id"=> 4636,

                "nome"=> "Bagé",
                "estado"=> "RS"
            ],
            [
                "id"=> 4637,

                "nome"=> "Balneário Pinhal",
                "estado"=> "RS"
            ],
            [
                "id"=> 4638,

                "nome"=> "Barão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4639,

                "nome"=> "Barão de Cotegipe",
                "estado"=> "RS"
            ],
            [
                "id"=> 4640,

                "nome"=> "Barão do Triunfo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4641,

                "nome"=> "Barracão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4642,

                "nome"=> "Barra do Guarita",
                "estado"=> "RS"
            ],
            [
                "id"=> 4643,

                "nome"=> "Barra do Quaraí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4644,

                "nome"=> "Barra do Ribeiro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4645,

                "nome"=> "Barra do Rio Azul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4646,

                "nome"=> "Barra Funda",
                "estado"=> "RS"
            ],
            [
                "id"=> 4647,

                "nome"=> "Barros Cassal",
                "estado"=> "RS"
            ],
            [
                "id"=> 4648,

                "nome"=> "Benjamin Constant do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4649,

                "nome"=> "Bento Gonçalves",
                "estado"=> "RS"
            ],
            [
                "id"=> 4650,

                "nome"=> "Boa Vista das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4651,

                "nome"=> "Boa Vista do Buricá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4652,

                "nome"=> "Boa Vista do Cadeado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4653,

                "nome"=> "Boa Vista do Incra",
                "estado"=> "RS"
            ],
            [
                "id"=> 4654,

                "nome"=> "Boa Vista do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4655,

                "nome"=> "Bom Jesus",
                "estado"=> "RS"
            ],
            [
                "id"=> 4656,

                "nome"=> "Bom Princípio",
                "estado"=> "RS"
            ],
            [
                "id"=> 4657,

                "nome"=> "Bom Progresso",
                "estado"=> "RS"
            ],
            [
                "id"=> 4658,

                "nome"=> "Bom Retiro do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4659,

                "nome"=> "Boqueirão do Leão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4660,

                "nome"=> "Bossoroca",
                "estado"=> "RS"
            ],
            [
                "id"=> 4661,

                "nome"=> "Bozano",
                "estado"=> "RS"
            ],
            [
                "id"=> 4662,

                "nome"=> "Braga",
                "estado"=> "RS"
            ],
            [
                "id"=> 4663,

                "nome"=> "Brochier",
                "estado"=> "RS"
            ],
            [
                "id"=> 4664,

                "nome"=> "Butiá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4665,

                "nome"=> "Caçapava do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4666,

                "nome"=> "Cacequi",
                "estado"=> "RS"
            ],
            [
                "id"=> 4667,

                "nome"=> "Cachoeira do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4668,

                "nome"=> "Cachoeirinha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4669,

                "nome"=> "Cacique Doble",
                "estado"=> "RS"
            ],
            [
                "id"=> 4670,

                "nome"=> "Caibaté",
                "estado"=> "RS"
            ],
            [
                "id"=> 4671,

                "nome"=> "Caiçara",
                "estado"=> "RS"
            ],
            [
                "id"=> 4672,

                "nome"=> "Camaquã",
                "estado"=> "RS"
            ],
            [
                "id"=> 4673,

                "nome"=> "Camargo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4674,

                "nome"=> "Cambará do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4675,

                "nome"=> "Campestre da Serra",
                "estado"=> "RS"
            ],
            [
                "id"=> 4676,

                "nome"=> "Campina das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4677,

                "nome"=> "Campinas do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4678,

                "nome"=> "Campo Bom",
                "estado"=> "RS"
            ],
            [
                "id"=> 4679,

                "nome"=> "Campo Novo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4680,

                "nome"=> "Campos Borges",
                "estado"=> "RS"
            ],
            [
                "id"=> 4681,

                "nome"=> "Candelária",
                "estado"=> "RS"
            ],
            [
                "id"=> 4682,

                "nome"=> "Cândido Godói",
                "estado"=> "RS"
            ],
            [
                "id"=> 4683,

                "nome"=> "Candiota",
                "estado"=> "RS"
            ],
            [
                "id"=> 4684,

                "nome"=> "Canela",
                "estado"=> "RS"
            ],
            [
                "id"=> 4685,

                "nome"=> "Canguçu",
                "estado"=> "RS"
            ],
            [
                "id"=> 4686,

                "nome"=> "Canoas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4687,

                "nome"=> "Canudos do Vale",
                "estado"=> "RS"
            ],
            [
                "id"=> 4688,

                "nome"=> "Capão Bonito do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4689,

                "nome"=> "Capão da Canoa",
                "estado"=> "RS"
            ],
            [
                "id"=> 4690,

                "nome"=> "Capão do Cipó",
                "estado"=> "RS"
            ],
            [
                "id"=> 4691,

                "nome"=> "Capão do Leão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4692,

                "nome"=> "Capivari do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4693,

                "nome"=> "Capela de Santana",
                "estado"=> "RS"
            ],
            [
                "id"=> 4694,

                "nome"=> "Capitão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4695,

                "nome"=> "Carazinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4696,

                "nome"=> "Caraá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4697,

                "nome"=> "Carlos Barbosa",
                "estado"=> "RS"
            ],
            [
                "id"=> 4698,

                "nome"=> "Carlos Gomes",
                "estado"=> "RS"
            ],
            [
                "id"=> 4699,

                "nome"=> "Casca",
                "estado"=> "RS"
            ],
            [
                "id"=> 4700,

                "nome"=> "Caseiros",
                "estado"=> "RS"
            ],
            [
                "id"=> 4701,

                "nome"=> "Catuípe",
                "estado"=> "RS"
            ],
            [
                "id"=> 4702,

                "nome"=> "Caxias do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4703,

                "nome"=> "Centenário",
                "estado"=> "RS"
            ],
            [
                "id"=> 4704,

                "nome"=> "Cerrito",
                "estado"=> "RS"
            ],
            [
                "id"=> 4705,

                "nome"=> "Cerro Branco",
                "estado"=> "RS"
            ],
            [
                "id"=> 4706,

                "nome"=> "Cerro Grande",
                "estado"=> "RS"
            ],
            [
                "id"=> 4707,

                "nome"=> "Cerro Grande do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4708,

                "nome"=> "Cerro Largo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4709,

                "nome"=> "Chapada",
                "estado"=> "RS"
            ],
            [
                "id"=> 4710,

                "nome"=> "Charqueadas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4711,

                "nome"=> "Charrua",
                "estado"=> "RS"
            ],
            [
                "id"=> 4712,

                "nome"=> "Chiapetta",
                "estado"=> "RS"
            ],
            [
                "id"=> 4713,

                "nome"=> "Chuí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4714,

                "nome"=> "Chuvisca",
                "estado"=> "RS"
            ],
            [
                "id"=> 4715,

                "nome"=> "Cidreira",
                "estado"=> "RS"
            ],
            [
                "id"=> 4716,

                "nome"=> "Ciríaco",
                "estado"=> "RS"
            ],
            [
                "id"=> 4717,

                "nome"=> "Colinas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4718,

                "nome"=> "Colorado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4719,

                "nome"=> "Condor",
                "estado"=> "RS"
            ],
            [
                "id"=> 4720,

                "nome"=> "Constantina",
                "estado"=> "RS"
            ],
            [
                "id"=> 4721,

                "nome"=> "Coqueiro Baixo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4722,

                "nome"=> "Coqueiros do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4723,

                "nome"=> "Coronel Barros",
                "estado"=> "RS"
            ],
            [
                "id"=> 4724,

                "nome"=> "Coronel Bicaco",
                "estado"=> "RS"
            ],
            [
                "id"=> 4725,

                "nome"=> "Coronel Pilar",
                "estado"=> "RS"
            ],
            [
                "id"=> 4726,

                "nome"=> "Cotiporã",
                "estado"=> "RS"
            ],
            [
                "id"=> 4727,

                "nome"=> "Coxilha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4728,

                "nome"=> "Crissiumal",
                "estado"=> "RS"
            ],
            [
                "id"=> 4729,

                "nome"=> "Cristal",
                "estado"=> "RS"
            ],
            [
                "id"=> 4730,

                "nome"=> "Cristal do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4731,

                "nome"=> "Cruz Alta",
                "estado"=> "RS"
            ],
            [
                "id"=> 4732,

                "nome"=> "Cruzaltense",
                "estado"=> "RS"
            ],
            [
                "id"=> 4733,

                "nome"=> "Cruzeiro do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4734,

                "nome"=> "David Canabarro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4735,

                "nome"=> "Derrubadas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4736,

                "nome"=> "Dezesseis de Novembro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4737,

                "nome"=> "Dilermando de Aguiar",
                "estado"=> "RS"
            ],
            [
                "id"=> 4738,

                "nome"=> "Dois Irmãos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4739,

                "nome"=> "Dois Irmãos das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4740,

                "nome"=> "Dois Lajeados",
                "estado"=> "RS"
            ],
            [
                "id"=> 4741,

                "nome"=> "Dom Feliciano",
                "estado"=> "RS"
            ],
            [
                "id"=> 4742,

                "nome"=> "Dom Pedro de Alcântara",
                "estado"=> "RS"
            ],
            [
                "id"=> 4743,

                "nome"=> "Dom Pedrito",
                "estado"=> "RS"
            ],
            [
                "id"=> 4744,

                "nome"=> "Dona Francisca",
                "estado"=> "RS"
            ],
            [
                "id"=> 4745,

                "nome"=> "Doutor Maurício Cardoso",
                "estado"=> "RS"
            ],
            [
                "id"=> 4746,

                "nome"=> "Doutor Ricardo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4747,

                "nome"=> "Eldorado do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4748,

                "nome"=> "Encantado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4749,

                "nome"=> "Encruzilhada do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4750,

                "nome"=> "Engenho Velho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4751,

                "nome"=> "Entre-Ijuís",
                "estado"=> "RS"
            ],
            [
                "id"=> 4752,

                "nome"=> "Entre Rios do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4753,

                "nome"=> "Erebango",
                "estado"=> "RS"
            ],
            [
                "id"=> 4754,

                "nome"=> "Erechim",
                "estado"=> "RS"
            ],
            [
                "id"=> 4755,

                "nome"=> "Ernestina",
                "estado"=> "RS"
            ],
            [
                "id"=> 4756,

                "nome"=> "Herval",
                "estado"=> "RS"
            ],
            [
                "id"=> 4757,

                "nome"=> "Erval Grande",
                "estado"=> "RS"
            ],
            [
                "id"=> 4758,

                "nome"=> "Erval Seco",
                "estado"=> "RS"
            ],
            [
                "id"=> 4759,

                "nome"=> "Esmeralda",
                "estado"=> "RS"
            ],
            [
                "id"=> 4760,

                "nome"=> "Esperança do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4761,

                "nome"=> "Espumoso",
                "estado"=> "RS"
            ],
            [
                "id"=> 4762,

                "nome"=> "Estação",
                "estado"=> "RS"
            ],
            [
                "id"=> 4763,

                "nome"=> "Estância Velha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4764,

                "nome"=> "Esteio",
                "estado"=> "RS"
            ],
            [
                "id"=> 4765,

                "nome"=> "Estrela",
                "estado"=> "RS"
            ],
            [
                "id"=> 4766,

                "nome"=> "Estrela Velha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4767,

                "nome"=> "Eugênio de Castro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4768,

                "nome"=> "Fagundes Varela",
                "estado"=> "RS"
            ],
            [
                "id"=> 4769,

                "nome"=> "Farroupilha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4770,

                "nome"=> "Faxinal do Soturno",
                "estado"=> "RS"
            ],
            [
                "id"=> 4771,

                "nome"=> "Faxinalzinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4772,

                "nome"=> "Fazenda Vilanova",
                "estado"=> "RS"
            ],
            [
                "id"=> 4773,

                "nome"=> "Feliz",
                "estado"=> "RS"
            ],
            [
                "id"=> 4774,

                "nome"=> "Flores da Cunha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4775,

                "nome"=> "Floriano Peixoto",
                "estado"=> "RS"
            ],
            [
                "id"=> 4776,

                "nome"=> "Fontoura Xavier",
                "estado"=> "RS"
            ],
            [
                "id"=> 4777,

                "nome"=> "Formigueiro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4778,

                "nome"=> "Forquetinha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4779,

                "nome"=> "Fortaleza dos Valos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4780,

                "nome"=> "Frederico Westphalen",
                "estado"=> "RS"
            ],
            [
                "id"=> 4781,

                "nome"=> "Garibaldi",
                "estado"=> "RS"
            ],
            [
                "id"=> 4782,

                "nome"=> "Garruchos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4783,

                "nome"=> "Gaurama",
                "estado"=> "RS"
            ],
            [
                "id"=> 4784,

                "nome"=> "General Câmara",
                "estado"=> "RS"
            ],
            [
                "id"=> 4785,

                "nome"=> "Gentil",
                "estado"=> "RS"
            ],
            [
                "id"=> 4786,

                "nome"=> "Getúlio Vargas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4787,

                "nome"=> "Giruá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4788,

                "nome"=> "Glorinha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4789,

                "nome"=> "Gramado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4790,

                "nome"=> "Gramado dos Loureiros",
                "estado"=> "RS"
            ],
            [
                "id"=> 4791,

                "nome"=> "Gramado Xavier",
                "estado"=> "RS"
            ],
            [
                "id"=> 4792,

                "nome"=> "Gravataí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4793,

                "nome"=> "Guabiju",
                "estado"=> "RS"
            ],
            [
                "id"=> 4794,

                "nome"=> "Guaíba",
                "estado"=> "RS"
            ],
            [
                "id"=> 4795,

                "nome"=> "Guaporé",
                "estado"=> "RS"
            ],
            [
                "id"=> 4796,

                "nome"=> "Guarani das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4797,

                "nome"=> "Harmonia",
                "estado"=> "RS"
            ],
            [
                "id"=> 4798,

                "nome"=> "Herveiras",
                "estado"=> "RS"
            ],
            [
                "id"=> 4799,

                "nome"=> "Horizontina",
                "estado"=> "RS"
            ],
            [
                "id"=> 4800,

                "nome"=> "Hulha Negra",
                "estado"=> "RS"
            ],
            [
                "id"=> 4801,

                "nome"=> "Humaitá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4802,

                "nome"=> "Ibarama",
                "estado"=> "RS"
            ],
            [
                "id"=> 4803,

                "nome"=> "Ibiaçá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4804,

                "nome"=> "Ibiraiaras",
                "estado"=> "RS"
            ],
            [
                "id"=> 4805,

                "nome"=> "Ibirapuitã",
                "estado"=> "RS"
            ],
            [
                "id"=> 4806,

                "nome"=> "Ibirubá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4807,

                "nome"=> "Igrejinha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4808,

                "nome"=> "Ijuí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4809,

                "nome"=> "Ilópolis",
                "estado"=> "RS"
            ],
            [
                "id"=> 4810,

                "nome"=> "Imbé",
                "estado"=> "RS"
            ],
            [
                "id"=> 4811,

                "nome"=> "Imigrante",
                "estado"=> "RS"
            ],
            [
                "id"=> 4812,

                "nome"=> "Independência",
                "estado"=> "RS"
            ],
            [
                "id"=> 4813,

                "nome"=> "Inhacorá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4814,

                "nome"=> "Ipê",
                "estado"=> "RS"
            ],
            [
                "id"=> 4815,

                "nome"=> "Ipiranga do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4816,

                "nome"=> "Iraí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4817,

                "nome"=> "Itaara",
                "estado"=> "RS"
            ],
            [
                "id"=> 4818,

                "nome"=> "Itacurubi",
                "estado"=> "RS"
            ],
            [
                "id"=> 4819,

                "nome"=> "Itapuca",
                "estado"=> "RS"
            ],
            [
                "id"=> 4820,

                "nome"=> "Itaqui",
                "estado"=> "RS"
            ],
            [
                "id"=> 4821,

                "nome"=> "Itati",
                "estado"=> "RS"
            ],
            [
                "id"=> 4822,

                "nome"=> "Itatiba do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4823,

                "nome"=> "Ivorá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4824,

                "nome"=> "Ivoti",
                "estado"=> "RS"
            ],
            [
                "id"=> 4825,

                "nome"=> "Jaboticaba",
                "estado"=> "RS"
            ],
            [
                "id"=> 4826,

                "nome"=> "Jacuizinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4827,

                "nome"=> "Jacutinga",
                "estado"=> "RS"
            ],
            [
                "id"=> 4828,

                "nome"=> "Jaguarão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4829,

                "nome"=> "Jaguari",
                "estado"=> "RS"
            ],
            [
                "id"=> 4830,

                "nome"=> "Jaquirana",
                "estado"=> "RS"
            ],
            [
                "id"=> 4831,

                "nome"=> "Jari",
                "estado"=> "RS"
            ],
            [
                "id"=> 4832,

                "nome"=> "Jóia",
                "estado"=> "RS"
            ],
            [
                "id"=> 4833,

                "nome"=> "Júlio de Castilhos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4834,

                "nome"=> "Lagoa Bonita do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4835,

                "nome"=> "Lagoão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4836,

                "nome"=> "Lagoa dos Três Cantos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4837,

                "nome"=> "Lagoa Vermelha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4838,

                "nome"=> "Lajeado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4839,

                "nome"=> "Lajeado do Bugre",
                "estado"=> "RS"
            ],
            [
                "id"=> 4840,

                "nome"=> "Lavras do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4841,

                "nome"=> "Liberato Salzano",
                "estado"=> "RS"
            ],
            [
                "id"=> 4842,

                "nome"=> "Lindolfo Collor",
                "estado"=> "RS"
            ],
            [
                "id"=> 4843,

                "nome"=> "Linha Nova",
                "estado"=> "RS"
            ],
            [
                "id"=> 4844,

                "nome"=> "Machadinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4845,

                "nome"=> "Maçambará",
                "estado"=> "RS"
            ],
            [
                "id"=> 4846,

                "nome"=> "Mampituba",
                "estado"=> "RS"
            ],
            [
                "id"=> 4847,

                "nome"=> "Manoel Viana",
                "estado"=> "RS"
            ],
            [
                "id"=> 4848,

                "nome"=> "Maquiné",
                "estado"=> "RS"
            ],
            [
                "id"=> 4849,

                "nome"=> "Maratá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4850,

                "nome"=> "Marau",
                "estado"=> "RS"
            ],
            [
                "id"=> 4851,

                "nome"=> "Marcelino Ramos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4852,

                "nome"=> "Mariana Pimentel",
                "estado"=> "RS"
            ],
            [
                "id"=> 4853,

                "nome"=> "Mariano Moro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4854,

                "nome"=> "Marques de Souza",
                "estado"=> "RS"
            ],
            [
                "id"=> 4855,

                "nome"=> "Mata",
                "estado"=> "RS"
            ],
            [
                "id"=> 4856,

                "nome"=> "Mato Castelhano",
                "estado"=> "RS"
            ],
            [
                "id"=> 4857,

                "nome"=> "Mato Leitão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4858,

                "nome"=> "Mato Queimado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4859,

                "nome"=> "Maximiliano de Almeida",
                "estado"=> "RS"
            ],
            [
                "id"=> 4860,

                "nome"=> "Minas do Leão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4861,

                "nome"=> "Miraguaí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4862,

                "nome"=> "Montauri",
                "estado"=> "RS"
            ],
            [
                "id"=> 4863,

                "nome"=> "Monte Alegre dos Campos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4864,

                "nome"=> "Monte Belo do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4865,

                "nome"=> "Montenegro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4866,

                "nome"=> "Mormaço",
                "estado"=> "RS"
            ],
            [
                "id"=> 4867,

                "nome"=> "Morrinhos do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4868,

                "nome"=> "Morro Redondo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4869,

                "nome"=> "Morro Reuter",
                "estado"=> "RS"
            ],
            [
                "id"=> 4870,

                "nome"=> "Mostardas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4871,

                "nome"=> "Muçum",
                "estado"=> "RS"
            ],
            [
                "id"=> 4872,

                "nome"=> "Muitos Capões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4873,

                "nome"=> "Muliterno",
                "estado"=> "RS"
            ],
            [
                "id"=> 4874,

                "nome"=> "Não-Me-Toque",
                "estado"=> "RS"
            ],
            [
                "id"=> 4875,

                "nome"=> "Nicolau Vergueiro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4876,

                "nome"=> "Nonoai",
                "estado"=> "RS"
            ],
            [
                "id"=> 4877,

                "nome"=> "Nova Alvorada",
                "estado"=> "RS"
            ],
            [
                "id"=> 4878,

                "nome"=> "Nova Araçá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4879,

                "nome"=> "Nova Bassano",
                "estado"=> "RS"
            ],
            [
                "id"=> 4880,

                "nome"=> "Nova Boa Vista",
                "estado"=> "RS"
            ],
            [
                "id"=> 4881,

                "nome"=> "Nova Bréscia",
                "estado"=> "RS"
            ],
            [
                "id"=> 4882,

                "nome"=> "Nova Candelária",
                "estado"=> "RS"
            ],
            [
                "id"=> 4883,

                "nome"=> "Nova Esperança do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4884,

                "nome"=> "Nova Hartz",
                "estado"=> "RS"
            ],
            [
                "id"=> 4885,

                "nome"=> "Nova Pádua",
                "estado"=> "RS"
            ],
            [
                "id"=> 4886,

                "nome"=> "Nova Palma",
                "estado"=> "RS"
            ],
            [
                "id"=> 4887,

                "nome"=> "Nova Petrópolis",
                "estado"=> "RS"
            ],
            [
                "id"=> 4888,

                "nome"=> "Nova Prata",
                "estado"=> "RS"
            ],
            [
                "id"=> 4889,

                "nome"=> "Nova Ramada",
                "estado"=> "RS"
            ],
            [
                "id"=> 4890,

                "nome"=> "Nova Roma do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4891,

                "nome"=> "Nova Santa Rita",
                "estado"=> "RS"
            ],
            [
                "id"=> 4892,

                "nome"=> "Novo Cabrais",
                "estado"=> "RS"
            ],
            [
                "id"=> 4893,

                "nome"=> "Novo Hamburgo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4894,

                "nome"=> "Novo Machado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4895,

                "nome"=> "Novo Tiradentes",
                "estado"=> "RS"
            ],
            [
                "id"=> 4896,

                "nome"=> "Novo Xingu",
                "estado"=> "RS"
            ],
            [
                "id"=> 4897,

                "nome"=> "Novo Barreiro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4898,

                "nome"=> "Osório",
                "estado"=> "RS"
            ],
            [
                "id"=> 4899,

                "nome"=> "Paim Filho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4900,

                "nome"=> "Palmares do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4901,

                "nome"=> "Palmeira das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4902,

                "nome"=> "Palmitinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4903,

                "nome"=> "Panambi",
                "estado"=> "RS"
            ],
            [
                "id"=> 4904,

                "nome"=> "Pantano Grande",
                "estado"=> "RS"
            ],
            [
                "id"=> 4905,

                "nome"=> "Paraí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4906,

                "nome"=> "Paraíso do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4907,

                "nome"=> "Pareci Novo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4908,

                "nome"=> "Parobé",
                "estado"=> "RS"
            ],
            [
                "id"=> 4909,

                "nome"=> "Passa Sete",
                "estado"=> "RS"
            ],
            [
                "id"=> 4910,

                "nome"=> "Passo do Sobrado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4911,

                "nome"=> "Passo Fundo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4912,

                "nome"=> "Paulo Bento",
                "estado"=> "RS"
            ],
            [
                "id"=> 4913,

                "nome"=> "Paverama",
                "estado"=> "RS"
            ],
            [
                "id"=> 4914,

                "nome"=> "Pedras Altas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4915,

                "nome"=> "Pedro Osório",
                "estado"=> "RS"
            ],
            [
                "id"=> 4916,

                "nome"=> "Pejuçara",
                "estado"=> "RS"
            ],
            [
                "id"=> 4917,

                "nome"=> "Pelotas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4918,

                "nome"=> "Picada Café",
                "estado"=> "RS"
            ],
            [
                "id"=> 4919,

                "nome"=> "Pinhal",
                "estado"=> "RS"
            ],
            [
                "id"=> 4920,

                "nome"=> "Pinhal da Serra",
                "estado"=> "RS"
            ],
            [
                "id"=> 4921,

                "nome"=> "Pinhal Grande",
                "estado"=> "RS"
            ],
            [
                "id"=> 4922,

                "nome"=> "Pinheirinho do Vale",
                "estado"=> "RS"
            ],
            [
                "id"=> 4923,

                "nome"=> "Pinheiro Machado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4924,

                "nome"=> "Pinto Bandeira",
                "estado"=> "RS"
            ],
            [
                "id"=> 4925,

                "nome"=> "Pirapó",
                "estado"=> "RS"
            ],
            [
                "id"=> 4926,

                "nome"=> "Piratini",
                "estado"=> "RS"
            ],
            [
                "id"=> 4927,

                "nome"=> "Planalto",
                "estado"=> "RS"
            ],
            [
                "id"=> 4928,

                "nome"=> "Poço das Antas",
                "estado"=> "RS"
            ],
            [
                "id"=> 4929,

                "nome"=> "Pontão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4930,

                "nome"=> "Ponte Preta",
                "estado"=> "RS"
            ],
            [
                "id"=> 4931,

                "nome"=> "Portão",
                "estado"=> "RS"
            ],
            [
                "id"=> 4932,

                "nome"=> "Porto Alegre",
                "estado"=> "RS"
            ],
            [
                "id"=> 4933,

                "nome"=> "Porto Lucena",
                "estado"=> "RS"
            ],
            [
                "id"=> 4934,

                "nome"=> "Porto Mauá",
                "estado"=> "RS"
            ],
            [
                "id"=> 4935,

                "nome"=> "Porto Vera Cruz",
                "estado"=> "RS"
            ],
            [
                "id"=> 4936,

                "nome"=> "Porto Xavier",
                "estado"=> "RS"
            ],
            [
                "id"=> 4937,

                "nome"=> "Pouso Novo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4938,

                "nome"=> "Presidente Lucena",
                "estado"=> "RS"
            ],
            [
                "id"=> 4939,

                "nome"=> "Progresso",
                "estado"=> "RS"
            ],
            [
                "id"=> 4940,

                "nome"=> "Protásio Alves",
                "estado"=> "RS"
            ],
            [
                "id"=> 4941,

                "nome"=> "Putinga",
                "estado"=> "RS"
            ],
            [
                "id"=> 4942,

                "nome"=> "Quaraí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4943,

                "nome"=> "Quatro Irmãos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4944,

                "nome"=> "Quevedos",
                "estado"=> "RS"
            ],
            [
                "id"=> 4945,

                "nome"=> "Quinze de Novembro",
                "estado"=> "RS"
            ],
            [
                "id"=> 4946,

                "nome"=> "Redentora",
                "estado"=> "RS"
            ],
            [
                "id"=> 4947,

                "nome"=> "Relvado",
                "estado"=> "RS"
            ],
            [
                "id"=> 4948,

                "nome"=> "Restinga Seca",
                "estado"=> "RS"
            ],
            [
                "id"=> 4949,

                "nome"=> "Rio dos Índios",
                "estado"=> "RS"
            ],
            [
                "id"=> 4950,

                "nome"=> "Rio Grande",
                "estado"=> "RS"
            ],
            [
                "id"=> 4951,

                "nome"=> "Rio Pardo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4952,

                "nome"=> "Riozinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4953,

                "nome"=> "Roca Sales",
                "estado"=> "RS"
            ],
            [
                "id"=> 4954,

                "nome"=> "Rodeio Bonito",
                "estado"=> "RS"
            ],
            [
                "id"=> 4955,

                "nome"=> "Rolador",
                "estado"=> "RS"
            ],
            [
                "id"=> 4956,

                "nome"=> "Rolante",
                "estado"=> "RS"
            ],
            [
                "id"=> 4957,

                "nome"=> "Ronda Alta",
                "estado"=> "RS"
            ],
            [
                "id"=> 4958,

                "nome"=> "Rondinha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4959,

                "nome"=> "Roque Gonzales",
                "estado"=> "RS"
            ],
            [
                "id"=> 4960,

                "nome"=> "Rosário do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4961,

                "nome"=> "Sagrada Família",
                "estado"=> "RS"
            ],
            [
                "id"=> 4962,

                "nome"=> "Saldanha Marinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 4963,

                "nome"=> "Salto do Jacuí",
                "estado"=> "RS"
            ],
            [
                "id"=> 4964,

                "nome"=> "Salvador das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4965,

                "nome"=> "Salvador do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4966,

                "nome"=> "Sananduva",
                "estado"=> "RS"
            ],
            [
                "id"=> 4967,

                "nome"=> "Santa Bárbara do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4968,

                "nome"=> "Santa Cecília do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4969,

                "nome"=> "Santa Clara do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4970,

                "nome"=> "Santa Cruz do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4971,

                "nome"=> "Santa Maria",
                "estado"=> "RS"
            ],
            [
                "id"=> 4972,

                "nome"=> "Santa Maria do Herval",
                "estado"=> "RS"
            ],
            [
                "id"=> 4973,

                "nome"=> "Santa Margarida do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4974,

                "nome"=> "Santana da Boa Vista",
                "estado"=> "RS"
            ],
            [
                "id"=> 4975,

                "nome"=> "Sant'Ana do Livramento",
                "estado"=> "RS"
            ],
            [
                "id"=> 4976,

                "nome"=> "Santa Rosa",
                "estado"=> "RS"
            ],
            [
                "id"=> 4977,

                "nome"=> "Santa Tereza",
                "estado"=> "RS"
            ],
            [
                "id"=> 4978,

                "nome"=> "Santa Vitória do Palmar",
                "estado"=> "RS"
            ],
            [
                "id"=> 4979,

                "nome"=> "Santiago",
                "estado"=> "RS"
            ],
            [
                "id"=> 4980,

                "nome"=> "Santo Ângelo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4981,

                "nome"=> "Santo Antônio do Palma",
                "estado"=> "RS"
            ],
            [
                "id"=> 4982,

                "nome"=> "Santo Antônio da Patrulha",
                "estado"=> "RS"
            ],
            [
                "id"=> 4983,

                "nome"=> "Santo Antônio das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4984,

                "nome"=> "Santo Antônio do Planalto",
                "estado"=> "RS"
            ],
            [
                "id"=> 4985,

                "nome"=> "Santo Augusto",
                "estado"=> "RS"
            ],
            [
                "id"=> 4986,

                "nome"=> "Santo Cristo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4987,

                "nome"=> "Santo Expedito do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4988,

                "nome"=> "São Borja",
                "estado"=> "RS"
            ],
            [
                "id"=> 4989,

                "nome"=> "São Domingos do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 4990,

                "nome"=> "São Francisco de Assis",
                "estado"=> "RS"
            ],
            [
                "id"=> 4991,

                "nome"=> "São Francisco de Paula",
                "estado"=> "RS"
            ],
            [
                "id"=> 4992,

                "nome"=> "São Gabriel",
                "estado"=> "RS"
            ],
            [
                "id"=> 4993,

                "nome"=> "São Jerônimo",
                "estado"=> "RS"
            ],
            [
                "id"=> 4994,

                "nome"=> "São João da Urtiga",
                "estado"=> "RS"
            ],
            [
                "id"=> 4995,

                "nome"=> "São João do Polêsine",
                "estado"=> "RS"
            ],
            [
                "id"=> 4996,

                "nome"=> "São Jorge",
                "estado"=> "RS"
            ],
            [
                "id"=> 4997,

                "nome"=> "São José das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 4998,

                "nome"=> "São José do Herval",
                "estado"=> "RS"
            ],
            [
                "id"=> 4999,

                "nome"=> "São José do Hortêncio",
                "estado"=> "RS"
            ],
            [
                "id"=> 5000,

                "nome"=> "São José do Inhacorá",
                "estado"=> "RS"
            ],
            [
                "id"=> 5001,

                "nome"=> "São José do Norte",
                "estado"=> "RS"
            ],
            [
                "id"=> 5002,

                "nome"=> "São José do Ouro",
                "estado"=> "RS"
            ],
            [
                "id"=> 5003,

                "nome"=> "São José do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5004,

                "nome"=> "São José dos Ausentes",
                "estado"=> "RS"
            ],
            [
                "id"=> 5005,

                "nome"=> "São Leopoldo",
                "estado"=> "RS"
            ],
            [
                "id"=> 5006,

                "nome"=> "São Lourenço do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5007,

                "nome"=> "São Luiz Gonzaga",
                "estado"=> "RS"
            ],
            [
                "id"=> 5008,

                "nome"=> "São Marcos",
                "estado"=> "RS"
            ],
            [
                "id"=> 5009,

                "nome"=> "São Martinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 5010,

                "nome"=> "São Martinho da Serra",
                "estado"=> "RS"
            ],
            [
                "id"=> 5011,

                "nome"=> "São Miguel das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 5012,

                "nome"=> "São Nicolau",
                "estado"=> "RS"
            ],
            [
                "id"=> 5013,

                "nome"=> "São Paulo das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 5014,

                "nome"=> "São Pedro da Serra",
                "estado"=> "RS"
            ],
            [
                "id"=> 5015,

                "nome"=> "São Pedro das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 5016,

                "nome"=> "São Pedro do Butiá",
                "estado"=> "RS"
            ],
            [
                "id"=> 5017,

                "nome"=> "São Pedro do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5018,

                "nome"=> "São Sebastião do Caí",
                "estado"=> "RS"
            ],
            [
                "id"=> 5019,

                "nome"=> "São Sepé",
                "estado"=> "RS"
            ],
            [
                "id"=> 5020,

                "nome"=> "São Valentim",
                "estado"=> "RS"
            ],
            [
                "id"=> 5021,

                "nome"=> "São Valentim do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5022,

                "nome"=> "São Valério do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5023,

                "nome"=> "São Vendelino",
                "estado"=> "RS"
            ],
            [
                "id"=> 5024,

                "nome"=> "São Vicente do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5025,

                "nome"=> "Sapiranga",
                "estado"=> "RS"
            ],
            [
                "id"=> 5026,

                "nome"=> "Sapucaia do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5027,

                "nome"=> "Sarandi",
                "estado"=> "RS"
            ],
            [
                "id"=> 5028,

                "nome"=> "Seberi",
                "estado"=> "RS"
            ],
            [
                "id"=> 5029,

                "nome"=> "Sede Nova",
                "estado"=> "RS"
            ],
            [
                "id"=> 5030,

                "nome"=> "Segredo",
                "estado"=> "RS"
            ],
            [
                "id"=> 5031,

                "nome"=> "Selbach",
                "estado"=> "RS"
            ],
            [
                "id"=> 5032,

                "nome"=> "Senador Salgado Filho",
                "estado"=> "RS"
            ],
            [
                "id"=> 5033,

                "nome"=> "Sentinela do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5034,

                "nome"=> "Serafina Corrêa",
                "estado"=> "RS"
            ],
            [
                "id"=> 5035,

                "nome"=> "Sério",
                "estado"=> "RS"
            ],
            [
                "id"=> 5036,

                "nome"=> "Sertão",
                "estado"=> "RS"
            ],
            [
                "id"=> 5037,

                "nome"=> "Sertão Santana",
                "estado"=> "RS"
            ],
            [
                "id"=> 5038,

                "nome"=> "Sete de Setembro",
                "estado"=> "RS"
            ],
            [
                "id"=> 5039,

                "nome"=> "Severiano de Almeida",
                "estado"=> "RS"
            ],
            [
                "id"=> 5040,

                "nome"=> "Silveira Martins",
                "estado"=> "RS"
            ],
            [
                "id"=> 5041,

                "nome"=> "Sinimbu",
                "estado"=> "RS"
            ],
            [
                "id"=> 5042,

                "nome"=> "Sobradinho",
                "estado"=> "RS"
            ],
            [
                "id"=> 5043,

                "nome"=> "Soledade",
                "estado"=> "RS"
            ],
            [
                "id"=> 5044,

                "nome"=> "Tabaí",
                "estado"=> "RS"
            ],
            [
                "id"=> 5045,

                "nome"=> "Tapejara",
                "estado"=> "RS"
            ],
            [
                "id"=> 5046,

                "nome"=> "Tapera",
                "estado"=> "RS"
            ],
            [
                "id"=> 5047,

                "nome"=> "Tapes",
                "estado"=> "RS"
            ],
            [
                "id"=> 5048,

                "nome"=> "Taquara",
                "estado"=> "RS"
            ],
            [
                "id"=> 5049,

                "nome"=> "Taquari",
                "estado"=> "RS"
            ],
            [
                "id"=> 5050,

                "nome"=> "Taquaruçu do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5051,

                "nome"=> "Tavares",
                "estado"=> "RS"
            ],
            [
                "id"=> 5052,

                "nome"=> "Tenente Portela",
                "estado"=> "RS"
            ],
            [
                "id"=> 5053,

                "nome"=> "Terra de Areia",
                "estado"=> "RS"
            ],
            [
                "id"=> 5054,

                "nome"=> "Teutônia",
                "estado"=> "RS"
            ],
            [
                "id"=> 5055,

                "nome"=> "Tio Hugo",
                "estado"=> "RS"
            ],
            [
                "id"=> 5056,

                "nome"=> "Tiradentes do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5057,

                "nome"=> "Toropi",
                "estado"=> "RS"
            ],
            [
                "id"=> 5058,

                "nome"=> "Torres",
                "estado"=> "RS"
            ],
            [
                "id"=> 5059,

                "nome"=> "Tramandaí",
                "estado"=> "RS"
            ],
            [
                "id"=> 5060,

                "nome"=> "Travesseiro",
                "estado"=> "RS"
            ],
            [
                "id"=> 5061,

                "nome"=> "Três Arroios",
                "estado"=> "RS"
            ],
            [
                "id"=> 5062,

                "nome"=> "Três Cachoeiras",
                "estado"=> "RS"
            ],
            [
                "id"=> 5063,

                "nome"=> "Três Coroas",
                "estado"=> "RS"
            ],
            [
                "id"=> 5064,

                "nome"=> "Três de Maio",
                "estado"=> "RS"
            ],
            [
                "id"=> 5065,

                "nome"=> "Três Forquilhas",
                "estado"=> "RS"
            ],
            [
                "id"=> 5066,

                "nome"=> "Três Palmeiras",
                "estado"=> "RS"
            ],
            [
                "id"=> 5067,

                "nome"=> "Três Passos",
                "estado"=> "RS"
            ],
            [
                "id"=> 5068,

                "nome"=> "Trindade do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5069,

                "nome"=> "Triunfo",
                "estado"=> "RS"
            ],
            [
                "id"=> 5070,

                "nome"=> "Tucunduva",
                "estado"=> "RS"
            ],
            [
                "id"=> 5071,

                "nome"=> "Tunas",
                "estado"=> "RS"
            ],
            [
                "id"=> 5072,

                "nome"=> "Tupanci do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5073,

                "nome"=> "Tupanciretã",
                "estado"=> "RS"
            ],
            [
                "id"=> 5074,

                "nome"=> "Tupandi",
                "estado"=> "RS"
            ],
            [
                "id"=> 5075,

                "nome"=> "Tuparendi",
                "estado"=> "RS"
            ],
            [
                "id"=> 5076,

                "nome"=> "Turuçu",
                "estado"=> "RS"
            ],
            [
                "id"=> 5077,

                "nome"=> "Ubiretama",
                "estado"=> "RS"
            ],
            [
                "id"=> 5078,

                "nome"=> "União da Serra",
                "estado"=> "RS"
            ],
            [
                "id"=> 5079,

                "nome"=> "Unistalda",
                "estado"=> "RS"
            ],
            [
                "id"=> 5080,

                "nome"=> "Uruguaiana",
                "estado"=> "RS"
            ],
            [
                "id"=> 5081,

                "nome"=> "Vacaria",
                "estado"=> "RS"
            ],
            [
                "id"=> 5082,

                "nome"=> "Vale Verde",
                "estado"=> "RS"
            ],
            [
                "id"=> 5083,

                "nome"=> "Vale do Sol",
                "estado"=> "RS"
            ],
            [
                "id"=> 5084,

                "nome"=> "Vale Real",
                "estado"=> "RS"
            ],
            [
                "id"=> 5085,

                "nome"=> "Vanini",
                "estado"=> "RS"
            ],
            [
                "id"=> 5086,

                "nome"=> "Venâncio Aires",
                "estado"=> "RS"
            ],
            [
                "id"=> 5087,

                "nome"=> "Vera Cruz",
                "estado"=> "RS"
            ],
            [
                "id"=> 5088,

                "nome"=> "Veranópolis",
                "estado"=> "RS"
            ],
            [
                "id"=> 5089,

                "nome"=> "Vespasiano Correa",
                "estado"=> "RS"
            ],
            [
                "id"=> 5090,

                "nome"=> "Viadutos",
                "estado"=> "RS"
            ],
            [
                "id"=> 5091,

                "nome"=> "Viamão",
                "estado"=> "RS"
            ],
            [
                "id"=> 5092,

                "nome"=> "Vicente Dutra",
                "estado"=> "RS"
            ],
            [
                "id"=> 5093,

                "nome"=> "Victor Graeff",
                "estado"=> "RS"
            ],
            [
                "id"=> 5094,

                "nome"=> "Vila Flores",
                "estado"=> "RS"
            ],
            [
                "id"=> 5095,

                "nome"=> "Vila Lângaro",
                "estado"=> "RS"
            ],
            [
                "id"=> 5096,

                "nome"=> "Vila Maria",
                "estado"=> "RS"
            ],
            [
                "id"=> 5097,

                "nome"=> "Vila Nova do Sul",
                "estado"=> "RS"
            ],
            [
                "id"=> 5098,

                "nome"=> "Vista Alegre",
                "estado"=> "RS"
            ],
            [
                "id"=> 5099,

                "nome"=> "Vista Alegre do Prata",
                "estado"=> "RS"
            ],
            [
                "id"=> 5100,

                "nome"=> "Vista Gaúcha",
                "estado"=> "RS"
            ],
            [
                "id"=> 5101,

                "nome"=> "Vitória das Missões",
                "estado"=> "RS"
            ],
            [
                "id"=> 5102,

                "nome"=> "Westfalia",
                "estado"=> "RS"
            ],
            [
                "id"=> 5103,

                "nome"=> "Xangri-lá",
                "estado"=> "RS"
            ],
            [
                "id"=> 5104,

                "nome"=> "Água Clara",
                "estado"=> "MS"
            ],
            [
                "id"=> 5105,

                "nome"=> "Alcinópolis",
                "estado"=> "MS"
            ],
            [
                "id"=> 5106,

                "nome"=> "Amambai",
                "estado"=> "MS"
            ],
            [
                "id"=> 5107,

                "nome"=> "Anastácio",
                "estado"=> "MS"
            ],
            [
                "id"=> 5108,

                "nome"=> "Anaurilândia",
                "estado"=> "MS"
            ],
            [
                "id"=> 5109,

                "nome"=> "Angélica",
                "estado"=> "MS"
            ],
            [
                "id"=> 5110,

                "nome"=> "Antônio João",
                "estado"=> "MS"
            ],
            [
                "id"=> 5111,

                "nome"=> "Aparecida do Taboado",
                "estado"=> "MS"
            ],
            [
                "id"=> 5112,

                "nome"=> "Aquidauana",
                "estado"=> "MS"
            ],
            [
                "id"=> 5113,

                "nome"=> "Aral Moreira",
                "estado"=> "MS"
            ],
            [
                "id"=> 5114,

                "nome"=> "Bandeirantes",
                "estado"=> "MS"
            ],
            [
                "id"=> 5115,

                "nome"=> "Bataguassu",
                "estado"=> "MS"
            ],
            [
                "id"=> 5116,

                "nome"=> "Batayporã",
                "estado"=> "MS"
            ],
            [
                "id"=> 5117,

                "nome"=> "Bela Vista",
                "estado"=> "MS"
            ],
            [
                "id"=> 5118,

                "nome"=> "Bodoquena",
                "estado"=> "MS"
            ],
            [
                "id"=> 5119,

                "nome"=> "Bonito",
                "estado"=> "MS"
            ],
            [
                "id"=> 5120,

                "nome"=> "Brasilândia",
                "estado"=> "MS"
            ],
            [
                "id"=> 5121,

                "nome"=> "Caarapó",
                "estado"=> "MS"
            ],
            [
                "id"=> 5122,

                "nome"=> "Camapuã",
                "estado"=> "MS"
            ],
            [
                "id"=> 5123,

                "nome"=> "Campo Grande",
                "estado"=> "MS"
            ],
            [
                "id"=> 5124,

                "nome"=> "Caracol",
                "estado"=> "MS"
            ],
            [
                "id"=> 5125,

                "nome"=> "Cassilândia",
                "estado"=> "MS"
            ],
            [
                "id"=> 5126,

                "nome"=> "Chapadão do Sul",
                "estado"=> "MS"
            ],
            [
                "id"=> 5127,

                "nome"=> "Corguinho",
                "estado"=> "MS"
            ],
            [
                "id"=> 5128,

                "nome"=> "Coronel Sapucaia",
                "estado"=> "MS"
            ],
            [
                "id"=> 5129,

                "nome"=> "Corumbá",
                "estado"=> "MS"
            ],
            [
                "id"=> 5130,

                "nome"=> "Costa Rica",
                "estado"=> "MS"
            ],
            [
                "id"=> 5131,

                "nome"=> "Coxim",
                "estado"=> "MS"
            ],
            [
                "id"=> 5132,

                "nome"=> "Deodápolis",
                "estado"=> "MS"
            ],
            [
                "id"=> 5133,

                "nome"=> "Dois Irmãos do Buriti",
                "estado"=> "MS"
            ],
            [
                "id"=> 5134,

                "nome"=> "Douradina",
                "estado"=> "MS"
            ],
            [
                "id"=> 5135,

                "nome"=> "Dourados",
                "estado"=> "MS"
            ],
            [
                "id"=> 5136,

                "nome"=> "Eldorado",
                "estado"=> "MS"
            ],
            [
                "id"=> 5137,

                "nome"=> "Fátima do Sul",
                "estado"=> "MS"
            ],
            [
                "id"=> 5138,

                "nome"=> "Figueirão",
                "estado"=> "MS"
            ],
            [
                "id"=> 5139,

                "nome"=> "Glória de Dourados",
                "estado"=> "MS"
            ],
            [
                "id"=> 5140,

                "nome"=> "Guia Lopes da Laguna",
                "estado"=> "MS"
            ],
            [
                "id"=> 5141,

                "nome"=> "Iguatemi",
                "estado"=> "MS"
            ],
            [
                "id"=> 5142,

                "nome"=> "Inocência",
                "estado"=> "MS"
            ],
            [
                "id"=> 5143,

                "nome"=> "Itaporã",
                "estado"=> "MS"
            ],
            [
                "id"=> 5144,

                "nome"=> "Itaquiraí",
                "estado"=> "MS"
            ],
            [
                "id"=> 5145,

                "nome"=> "Ivinhema",
                "estado"=> "MS"
            ],
            [
                "id"=> 5146,

                "nome"=> "Japorã",
                "estado"=> "MS"
            ],
            [
                "id"=> 5147,

                "nome"=> "Jaraguari",
                "estado"=> "MS"
            ],
            [
                "id"=> 5148,

                "nome"=> "Jardim",
                "estado"=> "MS"
            ],
            [
                "id"=> 5149,

                "nome"=> "Jateí",
                "estado"=> "MS"
            ],
            [
                "id"=> 5150,

                "nome"=> "Juti",
                "estado"=> "MS"
            ],
            [
                "id"=> 5151,

                "nome"=> "Ladário",
                "estado"=> "MS"
            ],
            [
                "id"=> 5152,

                "nome"=> "Laguna Carapã",
                "estado"=> "MS"
            ],
            [
                "id"=> 5153,

                "nome"=> "Maracaju",
                "estado"=> "MS"
            ],
            [
                "id"=> 5154,

                "nome"=> "Miranda",
                "estado"=> "MS"
            ],
            [
                "id"=> 5155,

                "nome"=> "Mundo Novo",
                "estado"=> "MS"
            ],
            [
                "id"=> 5156,

                "nome"=> "Naviraí",
                "estado"=> "MS"
            ],
            [
                "id"=> 5157,

                "nome"=> "Nioaque",
                "estado"=> "MS"
            ],
            [
                "id"=> 5158,

                "nome"=> "Nova Alvorada do Sul",
                "estado"=> "MS"
            ],
            [
                "id"=> 5159,

                "nome"=> "Nova Andradina",
                "estado"=> "MS"
            ],
            [
                "id"=> 5160,

                "nome"=> "Novo Horizonte do Sul",
                "estado"=> "MS"
            ],
            [
                "id"=> 5161,

                "nome"=> "Paraíso das Águas",
                "estado"=> "MS"
            ],
            [
                "id"=> 5162,

                "nome"=> "Paranaíba",
                "estado"=> "MS"
            ],
            [
                "id"=> 5163,

                "nome"=> "Paranhos",
                "estado"=> "MS"
            ],
            [
                "id"=> 5164,

                "nome"=> "Pedro Gomes",
                "estado"=> "MS"
            ],
            [
                "id"=> 5165,

                "nome"=> "Ponta Porã",
                "estado"=> "MS"
            ],
            [
                "id"=> 5166,

                "nome"=> "Porto Murtinho",
                "estado"=> "MS"
            ],
            [
                "id"=> 5167,

                "nome"=> "Ribas do Rio Pardo",
                "estado"=> "MS"
            ],
            [
                "id"=> 5168,

                "nome"=> "Rio Brilhante",
                "estado"=> "MS"
            ],
            [
                "id"=> 5169,

                "nome"=> "Rio Negro",
                "estado"=> "MS"
            ],
            [
                "id"=> 5170,

                "nome"=> "Rio Verde de Mato Grosso",
                "estado"=> "MS"
            ],
            [
                "id"=> 5171,

                "nome"=> "Rochedo",
                "estado"=> "MS"
            ],
            [
                "id"=> 5172,

                "nome"=> "Santa Rita do Pardo",
                "estado"=> "MS"
            ],
            [
                "id"=> 5173,

                "nome"=> "São Gabriel do Oeste",
                "estado"=> "MS"
            ],
            [
                "id"=> 5174,

                "nome"=> "Sete Quedas",
                "estado"=> "MS"
            ],
            [
                "id"=> 5175,

                "nome"=> "Selvíria",
                "estado"=> "MS"
            ],
            [
                "id"=> 5176,

                "nome"=> "Sidrolândia",
                "estado"=> "MS"
            ],
            [
                "id"=> 5177,

                "nome"=> "Sonora",
                "estado"=> "MS"
            ],
            [
                "id"=> 5178,

                "nome"=> "Tacuru",
                "estado"=> "MS"
            ],
            [
                "id"=> 5179,

                "nome"=> "Taquarussu",
                "estado"=> "MS"
            ],
            [
                "id"=> 5180,

                "nome"=> "Terenos",
                "estado"=> "MS"
            ],
            [
                "id"=> 5181,

                "nome"=> "Três Lagoas",
                "estado"=> "MS"
            ],
            [
                "id"=> 5182,

                "nome"=> "Vicentina",
                "estado"=> "MS"
            ],
            [
                "id"=> 5183,

                "nome"=> "Acorizal",
                "estado"=> "MT"
            ],
            [
                "id"=> 5184,

                "nome"=> "Água Boa",
                "estado"=> "MT"
            ],
            [
                "id"=> 5185,

                "nome"=> "Alta Floresta",
                "estado"=> "MT"
            ],
            [
                "id"=> 5186,

                "nome"=> "Alto Araguaia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5187,

                "nome"=> "Alto Boa Vista",
                "estado"=> "MT"
            ],
            [
                "id"=> 5188,

                "nome"=> "Alto Garças",
                "estado"=> "MT"
            ],
            [
                "id"=> 5189,

                "nome"=> "Alto Paraguai",
                "estado"=> "MT"
            ],
            [
                "id"=> 5190,

                "nome"=> "Alto Taquari",
                "estado"=> "MT"
            ],
            [
                "id"=> 5191,

                "nome"=> "Apiacás",
                "estado"=> "MT"
            ],
            [
                "id"=> 5192,

                "nome"=> "Araguaiana",
                "estado"=> "MT"
            ],
            [
                "id"=> 5193,

                "nome"=> "Araguainha",
                "estado"=> "MT"
            ],
            [
                "id"=> 5194,

                "nome"=> "Araputanga",
                "estado"=> "MT"
            ],
            [
                "id"=> 5195,

                "nome"=> "Arenápolis",
                "estado"=> "MT"
            ],
            [
                "id"=> 5196,

                "nome"=> "Aripuanã",
                "estado"=> "MT"
            ],
            [
                "id"=> 5197,

                "nome"=> "Barão de Melgaço",
                "estado"=> "MT"
            ],
            [
                "id"=> 5198,

                "nome"=> "Barra do Bugres",
                "estado"=> "MT"
            ],
            [
                "id"=> 5199,

                "nome"=> "Barra do Garças",
                "estado"=> "MT"
            ],
            [
                "id"=> 5200,

                "nome"=> "Bom Jesus do Araguaia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5201,

                "nome"=> "Brasnorte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5202,

                "nome"=> "Cáceres",
                "estado"=> "MT"
            ],
            [
                "id"=> 5203,

                "nome"=> "Campinápolis",
                "estado"=> "MT"
            ],
            [
                "id"=> 5204,

                "nome"=> "Campo Novo do Parecis",
                "estado"=> "MT"
            ],
            [
                "id"=> 5205,

                "nome"=> "Campo Verde",
                "estado"=> "MT"
            ],
            [
                "id"=> 5206,

                "nome"=> "Campos de Júlio",
                "estado"=> "MT"
            ],
            [
                "id"=> 5207,

                "nome"=> "Canabrava do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5208,

                "nome"=> "Canarana",
                "estado"=> "MT"
            ],
            [
                "id"=> 5209,

                "nome"=> "Carlinda",
                "estado"=> "MT"
            ],
            [
                "id"=> 5210,

                "nome"=> "Castanheira",
                "estado"=> "MT"
            ],
            [
                "id"=> 5211,

                "nome"=> "Chapada dos Guimarães",
                "estado"=> "MT"
            ],
            [
                "id"=> 5212,

                "nome"=> "Cláudia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5213,

                "nome"=> "Cocalinho",
                "estado"=> "MT"
            ],
            [
                "id"=> 5214,

                "nome"=> "Colíder",
                "estado"=> "MT"
            ],
            [
                "id"=> 5215,

                "nome"=> "Colniza",
                "estado"=> "MT"
            ],
            [
                "id"=> 5216,

                "nome"=> "Comodoro",
                "estado"=> "MT"
            ],
            [
                "id"=> 5217,

                "nome"=> "Confresa",
                "estado"=> "MT"
            ],
            [
                "id"=> 5218,

                "nome"=> "Conquista D'Oeste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5219,

                "nome"=> "Cotriguaçu",
                "estado"=> "MT"
            ],
            [
                "id"=> 5220,

                "nome"=> "Cuiabá",
                "estado"=> "MT"
            ],
            [
                "id"=> 5221,

                "nome"=> "Curvelândia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5222,

                "nome"=> "Denise",
                "estado"=> "MT"
            ],
            [
                "id"=> 5223,

                "nome"=> "Diamantino",
                "estado"=> "MT"
            ],
            [
                "id"=> 5224,

                "nome"=> "Dom Aquino",
                "estado"=> "MT"
            ],
            [
                "id"=> 5225,

                "nome"=> "Feliz Natal",
                "estado"=> "MT"
            ],
            [
                "id"=> 5226,

                "nome"=> "Figueirópolis D'Oeste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5227,

                "nome"=> "Gaúcha do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5228,

                "nome"=> "General Carneiro",
                "estado"=> "MT"
            ],
            [
                "id"=> 5229,

                "nome"=> "Glória D'Oeste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5230,

                "nome"=> "Guarantã do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5231,

                "nome"=> "Guiratinga",
                "estado"=> "MT"
            ],
            [
                "id"=> 5232,

                "nome"=> "Indiavaí",
                "estado"=> "MT"
            ],
            [
                "id"=> 5233,

                "nome"=> "Ipiranga do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5234,

                "nome"=> "Itanhangá",
                "estado"=> "MT"
            ],
            [
                "id"=> 5235,

                "nome"=> "Itaúba",
                "estado"=> "MT"
            ],
            [
                "id"=> 5236,

                "nome"=> "Itiquira",
                "estado"=> "MT"
            ],
            [
                "id"=> 5237,

                "nome"=> "Jaciara",
                "estado"=> "MT"
            ],
            [
                "id"=> 5238,

                "nome"=> "Jangada",
                "estado"=> "MT"
            ],
            [
                "id"=> 5239,

                "nome"=> "Jauru",
                "estado"=> "MT"
            ],
            [
                "id"=> 5240,

                "nome"=> "Juara",
                "estado"=> "MT"
            ],
            [
                "id"=> 5241,

                "nome"=> "Juína",
                "estado"=> "MT"
            ],
            [
                "id"=> 5242,

                "nome"=> "Juruena",
                "estado"=> "MT"
            ],
            [
                "id"=> 5243,

                "nome"=> "Juscimeira",
                "estado"=> "MT"
            ],
            [
                "id"=> 5244,

                "nome"=> "Lambari D'Oeste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5245,

                "nome"=> "Lucas do Rio Verde",
                "estado"=> "MT"
            ],
            [
                "id"=> 5246,

                "nome"=> "Luciara",
                "estado"=> "MT"
            ],
            [
                "id"=> 5247,

                "nome"=> "Vila Bela da Santíssima Trindade",
                "estado"=> "MT"
            ],
            [
                "id"=> 5248,

                "nome"=> "Marcelândia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5249,

                "nome"=> "Matupá",
                "estado"=> "MT"
            ],
            [
                "id"=> 5250,

                "nome"=> "Mirassol D'Oeste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5251,

                "nome"=> "Nobres",
                "estado"=> "MT"
            ],
            [
                "id"=> 5252,

                "nome"=> "Nortelândia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5253,

                "nome"=> "Nossa Senhora do Livramento",
                "estado"=> "MT"
            ],
            [
                "id"=> 5254,

                "nome"=> "Nova Bandeirantes",
                "estado"=> "MT"
            ],
            [
                "id"=> 5255,

                "nome"=> "Nova Nazaré",
                "estado"=> "MT"
            ],
            [
                "id"=> 5256,

                "nome"=> "Nova Lacerda",
                "estado"=> "MT"
            ],
            [
                "id"=> 5257,

                "nome"=> "Nova Santa Helena",
                "estado"=> "MT"
            ],
            [
                "id"=> 5258,

                "nome"=> "Nova Brasilândia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5259,

                "nome"=> "Nova Canaã do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5260,

                "nome"=> "Nova Mutum",
                "estado"=> "MT"
            ],
            [
                "id"=> 5261,

                "nome"=> "Nova Olímpia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5262,

                "nome"=> "Nova Ubiratã",
                "estado"=> "MT"
            ],
            [
                "id"=> 5263,

                "nome"=> "Nova Xavantina",
                "estado"=> "MT"
            ],
            [
                "id"=> 5264,

                "nome"=> "Novo Mundo",
                "estado"=> "MT"
            ],
            [
                "id"=> 5265,

                "nome"=> "Novo Horizonte do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5266,

                "nome"=> "Novo São Joaquim",
                "estado"=> "MT"
            ],
            [
                "id"=> 5267,

                "nome"=> "Paranaíta",
                "estado"=> "MT"
            ],
            [
                "id"=> 5268,

                "nome"=> "Paranatinga",
                "estado"=> "MT"
            ],
            [
                "id"=> 5269,

                "nome"=> "Novo Santo Antônio",
                "estado"=> "MT"
            ],
            [
                "id"=> 5270,

                "nome"=> "Pedra Preta",
                "estado"=> "MT"
            ],
            [
                "id"=> 5271,

                "nome"=> "Peixoto de Azevedo",
                "estado"=> "MT"
            ],
            [
                "id"=> 5272,

                "nome"=> "Planalto da Serra",
                "estado"=> "MT"
            ],
            [
                "id"=> 5273,

                "nome"=> "Poconé",
                "estado"=> "MT"
            ],
            [
                "id"=> 5274,

                "nome"=> "Pontal do Araguaia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5275,

                "nome"=> "Ponte Branca",
                "estado"=> "MT"
            ],
            [
                "id"=> 5276,

                "nome"=> "Pontes e Lacerda",
                "estado"=> "MT"
            ],
            [
                "id"=> 5277,

                "nome"=> "Porto Alegre do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5278,

                "nome"=> "Porto dos Gaúchos",
                "estado"=> "MT"
            ],
            [
                "id"=> 5279,

                "nome"=> "Porto Esperidião",
                "estado"=> "MT"
            ],
            [
                "id"=> 5280,

                "nome"=> "Porto Estrela",
                "estado"=> "MT"
            ],
            [
                "id"=> 5281,

                "nome"=> "Poxoréo",
                "estado"=> "MT"
            ],
            [
                "id"=> 5282,

                "nome"=> "Primavera do Leste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5283,

                "nome"=> "Querência",
                "estado"=> "MT"
            ],
            [
                "id"=> 5284,

                "nome"=> "São José dos Quatro Marcos",
                "estado"=> "MT"
            ],
            [
                "id"=> 5285,

                "nome"=> "Reserva do Cabaçal",
                "estado"=> "MT"
            ],
            [
                "id"=> 5286,

                "nome"=> "Ribeirão Cascalheira",
                "estado"=> "MT"
            ],
            [
                "id"=> 5287,

                "nome"=> "Ribeirãozinho",
                "estado"=> "MT"
            ],
            [
                "id"=> 5288,

                "nome"=> "Rio Branco",
                "estado"=> "MT"
            ],
            [
                "id"=> 5289,

                "nome"=> "Santa Carmem",
                "estado"=> "MT"
            ],
            [
                "id"=> 5290,

                "nome"=> "Santo Afonso",
                "estado"=> "MT"
            ],
            [
                "id"=> 5291,

                "nome"=> "São José do Povo",
                "estado"=> "MT"
            ],
            [
                "id"=> 5292,

                "nome"=> "São José do Rio Claro",
                "estado"=> "MT"
            ],
            [
                "id"=> 5293,

                "nome"=> "São José do Xingu",
                "estado"=> "MT"
            ],
            [
                "id"=> 5294,

                "nome"=> "São Pedro da Cipa",
                "estado"=> "MT"
            ],
            [
                "id"=> 5295,

                "nome"=> "Rondolândia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5296,

                "nome"=> "Rondonópolis",
                "estado"=> "MT"
            ],
            [
                "id"=> 5297,

                "nome"=> "Rosário Oeste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5298,

                "nome"=> "Santa Cruz do Xingu",
                "estado"=> "MT"
            ],
            [
                "id"=> 5299,

                "nome"=> "Salto do Céu",
                "estado"=> "MT"
            ],
            [
                "id"=> 5300,

                "nome"=> "Santa Rita do Trivelato",
                "estado"=> "MT"
            ],
            [
                "id"=> 5301,

                "nome"=> "Santa Terezinha",
                "estado"=> "MT"
            ],
            [
                "id"=> 5302,

                "nome"=> "Santo Antônio do Leste",
                "estado"=> "MT"
            ],
            [
                "id"=> 5303,

                "nome"=> "Santo Antônio do Leverger",
                "estado"=> "MT"
            ],
            [
                "id"=> 5304,

                "nome"=> "São Félix do Araguaia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5305,

                "nome"=> "Sapezal",
                "estado"=> "MT"
            ],
            [
                "id"=> 5306,

                "nome"=> "Serra Nova Dourada",
                "estado"=> "MT"
            ],
            [
                "id"=> 5307,

                "nome"=> "Sinop",
                "estado"=> "MT"
            ],
            [
                "id"=> 5308,

                "nome"=> "Sorriso",
                "estado"=> "MT"
            ],
            [
                "id"=> 5309,

                "nome"=> "Tabaporã",
                "estado"=> "MT"
            ],
            [
                "id"=> 5310,

                "nome"=> "Tangará da Serra",
                "estado"=> "MT"
            ],
            [
                "id"=> 5311,

                "nome"=> "Tapurah",
                "estado"=> "MT"
            ],
            [
                "id"=> 5312,

                "nome"=> "Terra Nova do Norte",
                "estado"=> "MT"
            ],
            [
                "id"=> 5313,

                "nome"=> "Tesouro",
                "estado"=> "MT"
            ],
            [
                "id"=> 5314,

                "nome"=> "Torixoréu",
                "estado"=> "MT"
            ],
            [
                "id"=> 5315,

                "nome"=> "União do Sul",
                "estado"=> "MT"
            ],
            [
                "id"=> 5316,

                "nome"=> "Vale de São Domingos",
                "estado"=> "MT"
            ],
            [
                "id"=> 5317,

                "nome"=> "Várzea Grande",
                "estado"=> "MT"
            ],
            [
                "id"=> 5318,

                "nome"=> "Vera",
                "estado"=> "MT"
            ],
            [
                "id"=> 5319,

                "nome"=> "Vila Rica",
                "estado"=> "MT"
            ],
            [
                "id"=> 5320,

                "nome"=> "Nova Guarita",
                "estado"=> "MT"
            ],
            [
                "id"=> 5321,

                "nome"=> "Nova Marilândia",
                "estado"=> "MT"
            ],
            [
                "id"=> 5322,

                "nome"=> "Nova Maringá",
                "estado"=> "MT"
            ],
            [
                "id"=> 5323,

                "nome"=> "Nova Monte Verde",
                "estado"=> "MT"
            ],
            [
                "id"=> 5324,

                "nome"=> "Abadia de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5325,

                "nome"=> "Abadiânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5326,

                "nome"=> "Acreúna",
                "estado"=> "GO"
            ],
            [
                "id"=> 5327,

                "nome"=> "Adelândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5328,

                "nome"=> "Água Fria de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5329,

                "nome"=> "Água Limpa",
                "estado"=> "GO"
            ],
            [
                "id"=> 5330,

                "nome"=> "Águas Lindas de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5331,

                "nome"=> "Alexânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5332,

                "nome"=> "Aloândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5333,

                "nome"=> "Alto Horizonte",
                "estado"=> "GO"
            ],
            [
                "id"=> 5334,

                "nome"=> "Alto Paraíso de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5335,

                "nome"=> "Alvorada do Norte",
                "estado"=> "GO"
            ],
            [
                "id"=> 5336,

                "nome"=> "Amaralina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5337,

                "nome"=> "Americano do Brasil",
                "estado"=> "GO"
            ],
            [
                "id"=> 5338,

                "nome"=> "Amorinópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5339,

                "nome"=> "Anápolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5340,

                "nome"=> "Anhanguera",
                "estado"=> "GO"
            ],
            [
                "id"=> 5341,

                "nome"=> "Anicuns",
                "estado"=> "GO"
            ],
            [
                "id"=> 5342,

                "nome"=> "Aparecida de Goiânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5343,

                "nome"=> "Aparecida do Rio Doce",
                "estado"=> "GO"
            ],
            [
                "id"=> 5344,

                "nome"=> "Aporé",
                "estado"=> "GO"
            ],
            [
                "id"=> 5345,

                "nome"=> "Araçu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5346,

                "nome"=> "Aragarças",
                "estado"=> "GO"
            ],
            [
                "id"=> 5347,

                "nome"=> "Aragoiânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5348,

                "nome"=> "Araguapaz",
                "estado"=> "GO"
            ],
            [
                "id"=> 5349,

                "nome"=> "Arenópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5350,

                "nome"=> "Aruanã",
                "estado"=> "GO"
            ],
            [
                "id"=> 5351,

                "nome"=> "Aurilândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5352,

                "nome"=> "Avelinópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5353,

                "nome"=> "Baliza",
                "estado"=> "GO"
            ],
            [
                "id"=> 5354,

                "nome"=> "Barro Alto",
                "estado"=> "GO"
            ],
            [
                "id"=> 5355,

                "nome"=> "Bela Vista de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5356,

                "nome"=> "Bom Jardim de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5357,

                "nome"=> "Bom Jesus de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5358,

                "nome"=> "Bonfinópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5359,

                "nome"=> "Bonópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5360,

                "nome"=> "Brazabrantes",
                "estado"=> "GO"
            ],
            [
                "id"=> 5361,

                "nome"=> "Britânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5362,

                "nome"=> "Buriti Alegre",
                "estado"=> "GO"
            ],
            [
                "id"=> 5363,

                "nome"=> "Buriti de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5364,

                "nome"=> "Buritinópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5365,

                "nome"=> "Cabeceiras",
                "estado"=> "GO"
            ],
            [
                "id"=> 5366,

                "nome"=> "Cachoeira Alta",
                "estado"=> "GO"
            ],
            [
                "id"=> 5367,

                "nome"=> "Cachoeira de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5368,

                "nome"=> "Cachoeira Dourada",
                "estado"=> "GO"
            ],
            [
                "id"=> 5369,

                "nome"=> "Caçu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5370,

                "nome"=> "Caiapônia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5371,

                "nome"=> "Caldas Novas",
                "estado"=> "GO"
            ],
            [
                "id"=> 5372,

                "nome"=> "Caldazinha",
                "estado"=> "GO"
            ],
            [
                "id"=> 5373,

                "nome"=> "Campestre de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5374,

                "nome"=> "Campinaçu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5375,

                "nome"=> "Campinorte",
                "estado"=> "GO"
            ],
            [
                "id"=> 5376,

                "nome"=> "Campo Alegre de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5377,

                "nome"=> "Campo Limpo de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5378,

                "nome"=> "Campos Belos",
                "estado"=> "GO"
            ],
            [
                "id"=> 5379,

                "nome"=> "Campos Verdes",
                "estado"=> "GO"
            ],
            [
                "id"=> 5380,

                "nome"=> "Carmo do Rio Verde",
                "estado"=> "GO"
            ],
            [
                "id"=> 5381,

                "nome"=> "Castelândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5382,

                "nome"=> "Catalão",
                "estado"=> "GO"
            ],
            [
                "id"=> 5383,

                "nome"=> "Caturaí",
                "estado"=> "GO"
            ],
            [
                "id"=> 5384,

                "nome"=> "Cavalcante",
                "estado"=> "GO"
            ],
            [
                "id"=> 5385,

                "nome"=> "Ceres",
                "estado"=> "GO"
            ],
            [
                "id"=> 5386,

                "nome"=> "Cezarina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5387,

                "nome"=> "Chapadão do Céu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5388,

                "nome"=> "Cidade Ocidental",
                "estado"=> "GO"
            ],
            [
                "id"=> 5389,

                "nome"=> "Cocalzinho de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5390,

                "nome"=> "Colinas do Sul",
                "estado"=> "GO"
            ],
            [
                "id"=> 5391,

                "nome"=> "Córrego do Ouro",
                "estado"=> "GO"
            ],
            [
                "id"=> 5392,

                "nome"=> "Corumbá de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5393,

                "nome"=> "Corumbaíba",
                "estado"=> "GO"
            ],
            [
                "id"=> 5394,

                "nome"=> "Cristalina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5395,

                "nome"=> "Cristianópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5396,

                "nome"=> "Crixás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5397,

                "nome"=> "Cromínia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5398,

                "nome"=> "Cumari",
                "estado"=> "GO"
            ],
            [
                "id"=> 5399,

                "nome"=> "Damianópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5400,

                "nome"=> "Damolândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5401,

                "nome"=> "Davinópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5402,

                "nome"=> "Diorama",
                "estado"=> "GO"
            ],
            [
                "id"=> 5403,

                "nome"=> "Doverlândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5404,

                "nome"=> "Edealina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5405,

                "nome"=> "Edéia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5406,

                "nome"=> "Estrela do Norte",
                "estado"=> "GO"
            ],
            [
                "id"=> 5407,

                "nome"=> "Faina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5408,

                "nome"=> "Fazenda Nova",
                "estado"=> "GO"
            ],
            [
                "id"=> 5409,

                "nome"=> "Firminópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5410,

                "nome"=> "Flores de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5411,

                "nome"=> "Formosa",
                "estado"=> "GO"
            ],
            [
                "id"=> 5412,

                "nome"=> "Formoso",
                "estado"=> "GO"
            ],
            [
                "id"=> 5413,

                "nome"=> "Gameleira de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5414,

                "nome"=> "Divinópolis de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5415,

                "nome"=> "Goianápolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5416,

                "nome"=> "Goiandira",
                "estado"=> "GO"
            ],
            [
                "id"=> 5417,

                "nome"=> "Goianésia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5418,

                "nome"=> "Goiânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5419,

                "nome"=> "Goianira",
                "estado"=> "GO"
            ],
            [
                "id"=> 5420,

                "nome"=> "Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5421,

                "nome"=> "Goiatuba",
                "estado"=> "GO"
            ],
            [
                "id"=> 5422,

                "nome"=> "Gouvelândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5423,

                "nome"=> "Guapó",
                "estado"=> "GO"
            ],
            [
                "id"=> 5424,

                "nome"=> "Guaraíta",
                "estado"=> "GO"
            ],
            [
                "id"=> 5425,

                "nome"=> "Guarani de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5426,

                "nome"=> "Guarinos",
                "estado"=> "GO"
            ],
            [
                "id"=> 5427,

                "nome"=> "Heitoraí",
                "estado"=> "GO"
            ],
            [
                "id"=> 5428,

                "nome"=> "Hidrolândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5429,

                "nome"=> "Hidrolina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5430,

                "nome"=> "Iaciara",
                "estado"=> "GO"
            ],
            [
                "id"=> 5431,

                "nome"=> "Inaciolândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5432,

                "nome"=> "Indiara",
                "estado"=> "GO"
            ],
            [
                "id"=> 5433,

                "nome"=> "Inhumas",
                "estado"=> "GO"
            ],
            [
                "id"=> 5434,

                "nome"=> "Ipameri",
                "estado"=> "GO"
            ],
            [
                "id"=> 5435,

                "nome"=> "Ipiranga de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5436,

                "nome"=> "Iporá",
                "estado"=> "GO"
            ],
            [
                "id"=> 5437,

                "nome"=> "Israelândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5438,

                "nome"=> "Itaberaí",
                "estado"=> "GO"
            ],
            [
                "id"=> 5439,

                "nome"=> "Itaguari",
                "estado"=> "GO"
            ],
            [
                "id"=> 5440,

                "nome"=> "Itaguaru",
                "estado"=> "GO"
            ],
            [
                "id"=> 5441,

                "nome"=> "Itajá",
                "estado"=> "GO"
            ],
            [
                "id"=> 5442,

                "nome"=> "Itapaci",
                "estado"=> "GO"
            ],
            [
                "id"=> 5443,

                "nome"=> "Itapirapuã",
                "estado"=> "GO"
            ],
            [
                "id"=> 5444,

                "nome"=> "Itapuranga",
                "estado"=> "GO"
            ],
            [
                "id"=> 5445,

                "nome"=> "Itarumã",
                "estado"=> "GO"
            ],
            [
                "id"=> 5446,

                "nome"=> "Itauçu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5447,

                "nome"=> "Itumbiara",
                "estado"=> "GO"
            ],
            [
                "id"=> 5448,

                "nome"=> "Ivolândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5449,

                "nome"=> "Jandaia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5450,

                "nome"=> "Jaraguá",
                "estado"=> "GO"
            ],
            [
                "id"=> 5451,

                "nome"=> "Jataí",
                "estado"=> "GO"
            ],
            [
                "id"=> 5452,

                "nome"=> "Jaupaci",
                "estado"=> "GO"
            ],
            [
                "id"=> 5453,

                "nome"=> "Jesúpolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5454,

                "nome"=> "Joviânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5455,

                "nome"=> "Jussara",
                "estado"=> "GO"
            ],
            [
                "id"=> 5456,

                "nome"=> "Lagoa Santa",
                "estado"=> "GO"
            ],
            [
                "id"=> 5457,

                "nome"=> "Leopoldo de Bulhões",
                "estado"=> "GO"
            ],
            [
                "id"=> 5458,

                "nome"=> "Luziânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5459,

                "nome"=> "Mairipotaba",
                "estado"=> "GO"
            ],
            [
                "id"=> 5460,

                "nome"=> "Mambaí",
                "estado"=> "GO"
            ],
            [
                "id"=> 5461,

                "nome"=> "Mara Rosa",
                "estado"=> "GO"
            ],
            [
                "id"=> 5462,

                "nome"=> "Marzagão",
                "estado"=> "GO"
            ],
            [
                "id"=> 5463,

                "nome"=> "Matrinchã",
                "estado"=> "GO"
            ],
            [
                "id"=> 5464,

                "nome"=> "Maurilândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5465,

                "nome"=> "Mimoso de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5466,

                "nome"=> "Minaçu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5467,

                "nome"=> "Mineiros",
                "estado"=> "GO"
            ],
            [
                "id"=> 5468,

                "nome"=> "Moiporá",
                "estado"=> "GO"
            ],
            [
                "id"=> 5469,

                "nome"=> "Monte Alegre de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5470,

                "nome"=> "Montes Claros de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5471,

                "nome"=> "Montividiu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5472,

                "nome"=> "Montividiu do Norte",
                "estado"=> "GO"
            ],
            [
                "id"=> 5473,

                "nome"=> "Morrinhos",
                "estado"=> "GO"
            ],
            [
                "id"=> 5474,

                "nome"=> "Morro Agudo de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5475,

                "nome"=> "Mossâmedes",
                "estado"=> "GO"
            ],
            [
                "id"=> 5476,

                "nome"=> "Mozarlândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5477,

                "nome"=> "Mundo Novo",
                "estado"=> "GO"
            ],
            [
                "id"=> 5478,

                "nome"=> "Mutunópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5479,

                "nome"=> "Nazário",
                "estado"=> "GO"
            ],
            [
                "id"=> 5480,

                "nome"=> "Nerópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5481,

                "nome"=> "Niquelândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5482,

                "nome"=> "Nova América",
                "estado"=> "GO"
            ],
            [
                "id"=> 5483,

                "nome"=> "Nova Aurora",
                "estado"=> "GO"
            ],
            [
                "id"=> 5484,

                "nome"=> "Nova Crixás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5485,

                "nome"=> "Nova Glória",
                "estado"=> "GO"
            ],
            [
                "id"=> 5486,

                "nome"=> "Nova Iguaçu de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5487,

                "nome"=> "Nova Roma",
                "estado"=> "GO"
            ],
            [
                "id"=> 5488,

                "nome"=> "Nova Veneza",
                "estado"=> "GO"
            ],
            [
                "id"=> 5489,

                "nome"=> "Novo Brasil",
                "estado"=> "GO"
            ],
            [
                "id"=> 5490,

                "nome"=> "Novo Gama",
                "estado"=> "GO"
            ],
            [
                "id"=> 5491,

                "nome"=> "Novo Planalto",
                "estado"=> "GO"
            ],
            [
                "id"=> 5492,

                "nome"=> "Orizona",
                "estado"=> "GO"
            ],
            [
                "id"=> 5493,

                "nome"=> "Ouro Verde de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5494,

                "nome"=> "Ouvidor",
                "estado"=> "GO"
            ],
            [
                "id"=> 5495,

                "nome"=> "Padre Bernardo",
                "estado"=> "GO"
            ],
            [
                "id"=> 5496,

                "nome"=> "Palestina de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5497,

                "nome"=> "Palmeiras de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5498,

                "nome"=> "Palmelo",
                "estado"=> "GO"
            ],
            [
                "id"=> 5499,

                "nome"=> "Palminópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5500,

                "nome"=> "Panamá",
                "estado"=> "GO"
            ],
            [
                "id"=> 5501,

                "nome"=> "Paranaiguara",
                "estado"=> "GO"
            ],
            [
                "id"=> 5502,

                "nome"=> "Paraúna",
                "estado"=> "GO"
            ],
            [
                "id"=> 5503,

                "nome"=> "Perolândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5504,

                "nome"=> "Petrolina de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5505,

                "nome"=> "Pilar de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5506,

                "nome"=> "Piracanjuba",
                "estado"=> "GO"
            ],
            [
                "id"=> 5507,

                "nome"=> "Piranhas",
                "estado"=> "GO"
            ],
            [
                "id"=> 5508,

                "nome"=> "Pirenópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5509,

                "nome"=> "Pires do Rio",
                "estado"=> "GO"
            ],
            [
                "id"=> 5510,

                "nome"=> "Planaltina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5511,

                "nome"=> "Pontalina",
                "estado"=> "GO"
            ],
            [
                "id"=> 5512,

                "nome"=> "Porangatu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5513,

                "nome"=> "Porteirão",
                "estado"=> "GO"
            ],
            [
                "id"=> 5514,

                "nome"=> "Portelândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5515,

                "nome"=> "Posse",
                "estado"=> "GO"
            ],
            [
                "id"=> 5516,

                "nome"=> "Professor Jamil",
                "estado"=> "GO"
            ],
            [
                "id"=> 5517,

                "nome"=> "Quirinópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5518,

                "nome"=> "Rialma",
                "estado"=> "GO"
            ],
            [
                "id"=> 5519,

                "nome"=> "Rianápolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5520,

                "nome"=> "Rio Quente",
                "estado"=> "GO"
            ],
            [
                "id"=> 5521,

                "nome"=> "Rio Verde",
                "estado"=> "GO"
            ],
            [
                "id"=> 5522,

                "nome"=> "Rubiataba",
                "estado"=> "GO"
            ],
            [
                "id"=> 5523,

                "nome"=> "Sanclerlândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5524,

                "nome"=> "Santa Bárbara de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5525,

                "nome"=> "Santa Cruz de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5526,

                "nome"=> "Santa Fé de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5527,

                "nome"=> "Santa Helena de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5528,

                "nome"=> "Santa Isabel",
                "estado"=> "GO"
            ],
            [
                "id"=> 5529,

                "nome"=> "Santa Rita do Araguaia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5530,

                "nome"=> "Santa Rita do Novo Destino",
                "estado"=> "GO"
            ],
            [
                "id"=> 5531,

                "nome"=> "Santa Rosa de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5532,

                "nome"=> "Santa Tereza de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5533,

                "nome"=> "Santa Terezinha de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5534,

                "nome"=> "Santo Antônio da Barra",
                "estado"=> "GO"
            ],
            [
                "id"=> 5535,

                "nome"=> "Santo Antônio de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5536,

                "nome"=> "Santo Antônio do Descoberto",
                "estado"=> "GO"
            ],
            [
                "id"=> 5537,

                "nome"=> "São Domingos",
                "estado"=> "GO"
            ],
            [
                "id"=> 5538,

                "nome"=> "São Francisco de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5539,

                "nome"=> "São João D'Aliança",
                "estado"=> "GO"
            ],
            [
                "id"=> 5540,

                "nome"=> "São João da Paraúna",
                "estado"=> "GO"
            ],
            [
                "id"=> 5541,

                "nome"=> "São Luís de Montes Belos",
                "estado"=> "GO"
            ],
            [
                "id"=> 5542,

                "nome"=> "São Luíz do Norte",
                "estado"=> "GO"
            ],
            [
                "id"=> 5543,

                "nome"=> "São Miguel do Araguaia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5544,

                "nome"=> "São Miguel do Passa Quatro",
                "estado"=> "GO"
            ],
            [
                "id"=> 5545,

                "nome"=> "São Patrício",
                "estado"=> "GO"
            ],
            [
                "id"=> 5546,

                "nome"=> "São Simão",
                "estado"=> "GO"
            ],
            [
                "id"=> 5547,

                "nome"=> "Senador Canedo",
                "estado"=> "GO"
            ],
            [
                "id"=> 5548,

                "nome"=> "Serranópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5549,

                "nome"=> "Silvânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5550,

                "nome"=> "Simolândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5551,

                "nome"=> "Sítio D'Abadia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5552,

                "nome"=> "Taquaral de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5553,

                "nome"=> "Teresina de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5554,

                "nome"=> "Terezópolis de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5555,

                "nome"=> "Três Ranchos",
                "estado"=> "GO"
            ],
            [
                "id"=> 5556,

                "nome"=> "Trindade",
                "estado"=> "GO"
            ],
            [
                "id"=> 5557,

                "nome"=> "Trombas",
                "estado"=> "GO"
            ],
            [
                "id"=> 5558,

                "nome"=> "Turvânia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5559,

                "nome"=> "Turvelândia",
                "estado"=> "GO"
            ],
            [
                "id"=> 5560,

                "nome"=> "Uirapuru",
                "estado"=> "GO"
            ],
            [
                "id"=> 5561,

                "nome"=> "Uruaçu",
                "estado"=> "GO"
            ],
            [
                "id"=> 5562,

                "nome"=> "Uruana",
                "estado"=> "GO"
            ],
            [
                "id"=> 5563,

                "nome"=> "Urutaí",
                "estado"=> "GO"
            ],
            [
                "id"=> 5564,

                "nome"=> "Valparaíso de Goiás",
                "estado"=> "GO"
            ],
            [
                "id"=> 5565,

                "nome"=> "Varjão",
                "estado"=> "GO"
            ],
            [
                "id"=> 5566,

                "nome"=> "Vianópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5567,

                "nome"=> "Vicentinópolis",
                "estado"=> "GO"
            ],
            [
                "id"=> 5568,

                "nome"=> "Vila Boa",
                "estado"=> "GO"
            ],
            [
                "id"=> 5569,

                "nome"=> "Vila Propício",
                "estado"=> "GO"
            ],
            [
                "id"=> 5570,

                "nome"=> "Brasília",
                "estado"=> "DF"
            ]
        ]);
    }
}
