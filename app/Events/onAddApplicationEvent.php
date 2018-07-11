<?php

namespace App\Events;

use App\Application;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;

class onAddApplicationEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_name;
    public $application_name;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Application $application, User $user)
    {
        $this->user_name = $user->name;
        $this->application_name = $application->name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
