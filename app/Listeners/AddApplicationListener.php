<?php

namespace App\Listeners;

use App\Events\onAddApplicationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;

class AddApplicationListener
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
     * @param  onAddApplicationEvent  $event
     * @return void
     */
    public function handle(onAddApplicationEvent $event)
    {
        Log::info('Application added to database ', [$event->user_name => $event->application_name]);
    }
}
