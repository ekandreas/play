<?php

namespace App\Console\Commands;

use Filament\Notifications\Notification;
use Illuminate\Console\Command;

class SendNotificationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Just test pusher';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Notification::make('pusher')
            ->success()
            ->title("TEST")
            ->body("It works")
            ->send();

        return Command::SUCCESS;
    }
}
