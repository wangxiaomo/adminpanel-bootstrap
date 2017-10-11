<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Models\User;

class UserScoreUpdateEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    const SAMPLE_EVENT = 1;

    public $user, $event;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $event)
    {
        $this->user = $user;
        $this->event = $event;
    }

    public static function get_event_step($event) {
        switch($event){
            case UserScoreUpdateEvent::SAMPLE_EVENT: return 1;
        }
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['luo-channel'];
    }
}
