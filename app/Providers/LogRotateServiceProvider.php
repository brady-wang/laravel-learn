<?php
/**
 * Created by PhpStorm.
 * User: costa
 * Date: 2019/3/12
 * Time: 17:01
 */


namespace App\Providers;

use Monolog\Formatter\LineFormatter;
use Illuminate\Support\ServiceProvider;
use Monolog\Handler\RotatingFileHandler;

class LogRotateServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $file = env('LOG_FILE_PATH') ? env('LOG_FILE_PATH') : storage_path('logs/laravel.log');
        $output = "[%datetime%][%channel%][Level:%level_name%][Message:%message% %context% %extra%]\n";
        $handlers[] = (new RotatingFileHandler(env('LOG_PATH' , $file) , env('LOG_MAXFILE' , 5)))
            ->setFormatter(new LineFormatter($output , null , true , true));
        $this->app['log']->setHandlers($handlers);
    }
}