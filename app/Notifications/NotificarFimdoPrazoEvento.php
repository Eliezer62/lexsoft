<?php

namespace App\Notifications;

use App\Models\Advogado;
use App\Models\Evento;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class NotificarFimdoPrazoEvento extends Notification
{
    use Queueable;

    private $evento;
    private $advogado;
    /**
     * Create a new notification instance.
     */
    public function __construct(Evento $evento, Advogado $advogado)
    {
        $this->evento = $evento;
        $this->advogado = $advogado;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $evento = $this->evento;
        $processo = $evento->processo()->first();
        return (new MailMessage)
                    ->subject('Evento de processo com prazo preste a vencer')
                    ->greeting('Olá, '.$this->advogado->nome)
                    ->line("O evento {$evento->descricao} do processo {$processo->numero} está com o prazo preste a vencer.")
                    ->action('Visualizar evento', url(env('APP_URL').'/processos/'.$processo?->xid.'/movimentar'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
