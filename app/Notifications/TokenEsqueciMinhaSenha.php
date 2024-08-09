<?php

namespace App\Notifications;

use App\Models\Advogado;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TokenEsqueciMinhaSenha extends Notification
{
    use Queueable;

    private $advogado;
    /**
     * Create a new notification instance.
     */
    public function __construct(Advogado $advogado, string $token)
    {
        $this->advogado = $advogado;
        $this->token = $token;
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
                    ->subject('Esqueci minha senha Lexsoft')
                    ->greeting('Olá, '.$this->advogado->nome)
                    ->line('Seu token de troca de senha está aqui, ele tem duração de 30 minutos após a solicitação')
                    ->action('Esqueci minha senha', url(env('APP_URL').'/esqueci-senha/'.$this->token))
                    ->line('Se você não solicitou, apenas ignore este email.');
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
