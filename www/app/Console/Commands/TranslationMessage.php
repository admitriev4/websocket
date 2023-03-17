<?php

namespace App\Console\Commands;

use App\Events\MessageSend;
use Illuminate\Console\Command;

class TranslationMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translation {message}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fire event';

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
        event(new MessageSend(
            $this->argument('message'))
        );
    }
}
