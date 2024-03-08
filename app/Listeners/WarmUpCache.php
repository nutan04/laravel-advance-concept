<?php

namespace App\Listeners;

use App\Event\ClearCache;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WarmUpCache
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ClearCache $event): void
    {
        if (isset($event->cache_keys) && count($event->cache_keys)) {
            foreach ($event->cache_keys as $cache_key) {
                // generate cache for this key
                // warm_up_cache($cache_key)
                echo $cache_key ."\n";
            }
        }
    }
}
