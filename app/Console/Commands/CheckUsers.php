<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CheckUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:users';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get count of users on the platform';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo User::count() . "\n";
    }
}
