<?php

namespace App\Listeners;

use App\Events\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class SendEmail
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
     * @param  User  $event
     * @return void
     */
    public function handle(User $event)
    {
        $user = $event->user;
        Log::info('用户事件触发发送邮件给:'.json_encode($user));

    }
}
