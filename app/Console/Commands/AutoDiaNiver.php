<?php

namespace App\Console\Commands;

use App\Mail\DiaNiver;
use Illuminate\Console\Command;
use App\Models\User;
use Mail;

class AutoDiaNiver extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:dianiver';

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
     * @return int
     */
    public function handle()
    {
        $users = User::whereMonth('nascdata', date('m'))
                    ->whereDay('nascdata', date('d'))
                    ->get();
  
        if ($users->count() > 0) {
            foreach ($users as $user) {
                Mail::to($user)->send(new DiaNiver($user));
            }
        }
        return 0;
    }
}
