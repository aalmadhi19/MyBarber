<?php

namespace App\Listeners;

use App\Events\ReservationCanceled;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationCancel;

class SendEmail implements ShouldQueue
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
     * @param  ReservationCanceled  $event
     * @return void
     */
    public function handle(ReservationCanceled $event)
    {
        Mail::to($event->userEmail)->send(new ReservationCancel);
    }
}
