<?php

namespace App\Notifications;

use App\Models\Advogado;
use App\Models\Tarefa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificarFimdoPrazoTarefa extends Notification
{
    use Queueable;

    private $tarefa;
    private $advogado;
    /**
     * Create a new notification instance.
     */
    public function __construct(Tarefa $tarefa, Advogado $advogado)
    {
        $this->tarefa = $tarefa;
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
        return (new MailMessage)
                    ->subject('Tarefa com prazo vencendo')
                    ->greeting('Olá, '.$this->advogado->nome)
                    ->line("A tarefa {$this->tarefa->assunto} está com o prazo vencendo.")
                    ->action('Visualizar tarefas', url(env('APP_URL').'/tarefas'));
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
