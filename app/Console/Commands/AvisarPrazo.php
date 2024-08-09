<?php

namespace App\Console\Commands;

use App\Models\Prazo;
use App\Notifications\NotificarFimdoPrazoEvento;
use App\Notifications\NotificarFimdoPrazoTarefa;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AvisarPrazo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:avisar-prazos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envia aviso de emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $prazos = DB::select('SELECT * FROM view_prazos');
        foreach ($prazos as $prazo)
        {
            $prazo = Prazo::find($prazo->id);
            if($prazo->evento)
            {
                $evento = $prazo->evento()->first();
                $advogados = $evento->processo()->first()->advogados;
                foreach ($advogados as $advogado)
                {
                    $advogado->notify(new NotificarFimdoPrazoEvento($evento, $advogado));
                }
            }
            else if($prazo->tarefa)
            {
                $tarefa = $prazo->tarefa()->first();
                $tarefa->responsavel()->first()->notify(new NotificarFimdoPrazoTarefa($tarefa, $tarefa->responsavel()->first()));
            }
        }
        Log::info(message: 'Avisar Prazos: tarefa executado com sucesso');
    }
}
