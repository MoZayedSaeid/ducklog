<?php

use Mosaeid\Ducklog\DuckLogger;

if (!function_exists('duck')) {
    function duck($variable)
    {
        DuckLogger::log($variable);
    }
}
