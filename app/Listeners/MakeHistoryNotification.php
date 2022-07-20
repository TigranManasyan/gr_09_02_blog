<?php

namespace App\Listeners;

use App\Events\MakeHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class MakeHistoryNotification
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
     * @param  \App\Events\MakeHistory  $event
     * @return void
     */
    public function handle(MakeHistory $event)
    {
      DB::table("history")->insert( $event->details);
    }
}
