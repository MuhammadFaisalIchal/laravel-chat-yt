<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

// Harus implement ShouldBroadcast
class Message implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username, $message)
    {
        $this->$username = $username;
        $this->$message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     * Untuk mendengarkan ke chanel yang bernama 'chat',
     * atas apapun pesan yang diterima
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chat');
    }

    /**
     * Untuk menyebarkan pesan sebagai nama 'message'
     */
    public function broadcastAs() {
        return 'message';
    }
}
