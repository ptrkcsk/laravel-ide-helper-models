<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'model-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Model test';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        User::find(1);

        return 0;
    }
}
