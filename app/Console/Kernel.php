<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define los comandos de la aplicación.
     */
    protected $commands = [
        // \App\Console\Commands\CloseAuctions::class,
    ];

    /**
     * Define el scheduler de la aplicación.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('auctions:close')->everyMinute();
    }

    /**
     * Registra los comandos de la aplicación.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
    }
}
