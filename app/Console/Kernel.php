<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Middleware\ValidateSignature; // Make sure to include the namespace for the middleware

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // ...
        \Illuminate\Cookie\Middleware\EncryptCookies::class,
        // Add the ValidateSignature middleware here:
        ValidateSignature::class,
        // ...
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        // ...
    ];

    // ...
}
