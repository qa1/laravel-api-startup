<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

abstract class Notification extends \Illuminate\Notifications\Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    abstract public function via($notifiable);

    /**
     * Notification text.
     *
     * @param $notifiable
     *
     * @return mixed
     */
    abstract public function text($notifiable);

    /**
     * Notification lik(uri).
     *
     * @return mixed
     */
    abstract public function uri();

    /**
     * Notification right image url.
     *
     * @return mixed
     */
    abstract public function rightImageUrl();

    /**
     * Notification left image url.
     *
     * @return mixed
     */
    abstract public function leftImageUrl();

    /**
     * Notification title.
     *
     * @param $notifiable
     *
     * @return mixed
     */
    abstract public function title($notifiable);

    /**
     * Notification note.
     *
     * @param $notifiable
     *
     * @return mixed
     */
    abstract public function note($notifiable);

    /**
     * Notification type.
     *
     * @return mixed
     */
    abstract public function type();

    /**
     * Notification point.
     *
     * @return mixed
     */
    abstract public function point();

    /**
     * Notification releated user (Not owner).
     *
     * @return mixed
     */
    abstract public function user();

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'title'             => $this->title($notifiable),
            'text'              => $this->text($notifiable),
            'note'              => $this->note($notifiable),
            'uri'               => $this->uri(),
            'type'              => $this->type(),
            'point'             => $this->point(),
            'left_image_url'    => $this->leftImageUrl(),
        ];
    }
}
