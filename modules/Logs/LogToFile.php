<?php

trait LogToFile
{
    // Function to log messages to tiny.log
    public static function logMessage($type, $message)
    {
        // Define the path to the Logs directory and the log file
        $logFile = __DIR__ . '/Logs/tiny.log';

        // Ensure the Logs directory exists
        if (!file_exists(__DIR__ . '/Logs')) {
            mkdir(__DIR__ . '/Logs', 0777, true);
        }

        // Prepare the message format [date][type] message
        $formattedMessage = '[' . date('Y-m-d H:i:s') . '] [' . strtoupper($type) . '] ' . $message . PHP_EOL;

        // Write the log message to the file
        file_put_contents($logFile, $formattedMessage, FILE_APPEND);
    }
}
