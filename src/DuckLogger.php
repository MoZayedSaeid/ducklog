<?php

namespace Mosaeid\Ducklog;

class DuckLogger
{
    protected static $logFile = 'duck.log';

    public static function log($variable)
    {
        $date = date('Y-m-d H:i:s');
        $type = gettype($variable);
        $content = self::formatContent($variable);

        $logEntry = "[$date] [$type] $content" . PHP_EOL;

        // Append to file, locking it to prevent concurrency issues
        file_put_contents(self::$logFile, $logEntry, FILE_APPEND | LOCK_EX);
    }

    protected static function formatContent($variable)
    {
        if (is_array($variable) || is_object($variable)) {
            return print_r($variable, true);
        } elseif (is_bool($variable)) {
            return $variable ? 'true' : 'false';
        } elseif (is_null($variable)) {
            return 'null';
        }

        return (string) $variable;
    }
}
