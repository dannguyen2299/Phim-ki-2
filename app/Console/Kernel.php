<?php

namespace App\Console;

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
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        //* Du lieu chay that
        $schedule->command('dayView:reset')->daily();
        $schedule->command('monthView:reset')->monthly();
        $schedule->command('yearView:reset')->yearly();

        //* Du lieu chay thu
        // $schedule->command('dayView:reset')->everyMinute();
        // $schedule->command('monthView:reset')->everyTwoMinutes();
        // $schedule->command('yearView:reset')->everyThreeMinutes();
    }

    protected function scheduleTimezone()
    {
        return 'Asia/Ho_Chi_Minh';
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
