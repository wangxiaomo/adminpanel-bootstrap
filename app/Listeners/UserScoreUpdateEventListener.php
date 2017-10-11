<?php

namespace App\Listeners;

use App\Events\UserScoreUpdateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserScoreUpdateEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserScoreUpdateEvent  $event
     * @return void
     */
    public function handle(UserScoreUpdateEvent $event)
    {
        $user = $event->user;
        $step = UserScoreUpdateEvent::get_event_step($event->event);
        $user->update_score($step, $event->event);
    }
}
