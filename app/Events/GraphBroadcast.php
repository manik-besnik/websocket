<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GraphBroadcast implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public function __construct(public array $data)
    {

    }

    public function broadcastOn(): Channel
    {
        return new Channel('graph');
    }

    public function broadcastWith(): array
    {

        return ['data' => $this->data];
    }
}
