<?php

namespace App\Enum;

enum TarefaStatus:string
{
    case Nova='nova';
    case EmProgresso='em progresso';
    case Confirmar='confirmar';
    case Resolvido='resolvido';
    case SemSolução='sem solução';
}
