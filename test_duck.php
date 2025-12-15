<?php

require __DIR__ . '/vendor/autoload.php';

echo "Testing duck logger..." . PHP_EOL;

// Test string
duck("Hello World");

// Test integer
duck(12345);

// Test array
duck(['key' => 'value', 'nested' => [1, 2, 3]]);

// Test object
$obj = new stdClass();
$obj->prop = 'property value';
duck($obj);

// Test null
duck(null);

echo "Check duck.log for results." . PHP_EOL;
