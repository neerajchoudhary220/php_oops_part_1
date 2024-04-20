<?php

namespace App\Helper\Log;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\FirePHPHandler as HandlerFirePHPHandler;
use Monolog\Handler\StreamHandler as HandlerStreamHandler;

class Log
{
    public  $logger;
    public function __construct()
    {
        $this->logger = new Logger('my_logger');
        $this->logger->pushHandler(new HandlerStreamHandler(__DIR__.'/myl_log.log', Level::Debug));
        $this->logger->pushHandler(new HandlerFirePHPHandler());
    }
    public static function error($message)
    {
       return $message;
    }
}
