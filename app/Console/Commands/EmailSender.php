<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class EmailSender extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = array('name' => 'EMPTY');

        Mail::send('emails.welcome', $data, function ($message)
        {

            $message->to('jompol.s@outlook.com')->subject('Hi there!  Laravel sent me!');

        });

        $this->info("Amazon catalog updated!");
        return response()->json(['message' => 'Request completed']);
    }
}
