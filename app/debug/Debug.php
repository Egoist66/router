<?php


namespace App\debug;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class Debug
{
    /**
     * Monitors app crashes and errors
     * @return void
     */
    final public static function watch(): void {
        $whoops = new Run;
        $whoops->pushHandler(new PrettyPageHandler);
        $whoops->register();
    }
}