<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\ApplicationCreated;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $applicaion;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Application $applicaion)
    {
        $this->applicaion = $applicaion;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $manager = User::first();

        Mail::to($manager)->send(new ApplicationCreated($this->applicaion));
    }
}
