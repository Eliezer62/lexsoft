<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $advogado =  Auth::user();
        $qtd_tarefas = Tarefa::where('responsavel', $advogado->id)
                        ->whereNotIn('status', ['sem solução', 'resolvido'])
                        ->where('deleted_at', null)
                        ->get()->count();
        $processos = $advogado->processos()->get();
        $qtd_atendimentos = DB::select('
        SELECT COUNT(*)
        FROM atendimentos at
        WHERE DATE_PART(\'month\', data) >= DATE_PART(\'month\', CURRENT_DATE) AND DATE_PART(\'month\', data) <= DATE_PART(\'month\', CURRENT_DATE)
        AND deleted_at IS NULL
        ');
        $produtividade = DB::select('
        SELECT e.data, COUNT(*) as quantidade
        FROM eventos e
        JOIN representa r ON e.processo = r.processo
        WHERE r.advogado = :adv AND  DATE_PART(\'month\', e.data) >= DATE_PART(\'month\', CURRENT_DATE)
          AND DATE_PART(\'month\', e.data) <= DATE_PART(\'month\', CURRENT_DATE)
		GROUP BY e.data ORDER BY e.data ASC;
        ', ['adv'=>$advogado->id]);

        $ultimos_processos = collect(DB::select('
        SELECT p.xid, p.numero, e.descricao
        FROM eventos e
        JOIN representa r ON e.processo = r.processo
        JOIN processos p ON e.processo = p.id
        WHERE r.advogado = :adv AND e.deleted_at IS NULL
        ORDER BY e.data DESC LIMIT 4
        ', ['adv'=>$advogado->id]))->toArray();


        return response()->json([
            'estatistica'=>[
                'qtd_tarefas' => $qtd_tarefas,
                'qtd_processos' => $processos->count(),
                'qtd_atendimentos' => $qtd_atendimentos[0]->count
            ],
            'produtividade'=>$produtividade,
            'processos'=>$ultimos_processos
        ], 200);
    }

    public function prazos($mes, $ano)
    {
        if(!($mes >= 1 && $mes <= 12)){
            return response()->json(['msg'=>'data inválidas'], 501);
        }
        $prazos =DB::select('
            SELECT p.fim as data,
            \'Fim do prazo: \' || COALESCE(
                (SELECT CONCAT(\'processo \', proc.numero,\' evento \',e.descricao) as descricao FROM eventos e JOIN processos proc ON proc.id = e.processo WHERE p.evento = e.id),
                 (SELECT \'tarefa \'||t.assunto FROM tarefas t WHERE t.id = p.tarefa)
            ) as descricao
            FROM prazos p
            WHERE DATE_PART(\'month\', p.fim) = :mes AND DATE_PART(\'year\', p.fim) = :ano
            AND p.deleted_at IS NULL
        ', ['mes'=>$mes,'ano'=>$ano]);

        return response()->json($prazos, 200);
    }
}
