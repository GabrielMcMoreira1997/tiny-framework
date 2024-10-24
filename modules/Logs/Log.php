<?php

class Log
{
    use LogToFile;

    // Static function to log error messages
    public static function error($message)
    {
        self::logMessage('error', $message);
    }

    // Static function to log success messages
    public static function success($message)
    {
        self::logMessage('success', $message);
    }

    // Static function to log info messages
    public static function info($message)
    {
        self::logMessage('info', $message);
    }

    // Static function to log warning messages
    public static function warning($message)
    {
        self::logMessage('warning', $message);
    }
    // Static function to log danger messages
    public static function danger($message)
    {
        self::logMessage('danger', $message);
    }
}
