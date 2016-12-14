<?php

namespace App\Console;

use App\Block;
use App\Blocktypes;
use App\Materials;
use App\Materialtypes;
use App\Primesilo;
use App\Waste;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//        $schedule->command('inspire')
//                 ->hourly();

//        $schedule->command('inspire')
//            ->dailyAt('23:00');
//        $schedule->call(function() {
//            $blocktypes = Blocktypes::all();
//            $blocks = Block::all();
//            $materials = Materials::all();
//            $materialtypes = Materialtypes::all();
//            $primesilo = Primesilo::all();
//            $waste = Waste::all();
//
//        });
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
