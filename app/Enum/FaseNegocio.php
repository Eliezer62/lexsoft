<?php

namespace App\Enum;

enum FaseNegocio:string
{
    case Inicial = 'inicial';
    case Qualificacao = 'qualificacao';
    case Avaliacao = 'avaliacao';
    case Proposta = 'proposta';
    case Negociacao = 'negociacao';
    case Fechado = 'fechado';
    case Perdido = 'perdido';
}
