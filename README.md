# DuckLogger 🦆

A simple, zero-config PHP logger that behaves like `console.log()` but writes to a file named `duck.log`.

## Installation

You can install the package via composer:

```bash
composer require mosaeid/ducklog
```

## Usage

Use the global `duck()` helper function to log any variable. The logger handles strings, arrays, objects, booleans, and null values automatically.

```php
// Log a string
duck("Hello World");

// Log an array
duck(['user_id' => 1, 'role' => 'admin']);

// Log an object
duck($userObject);

// Log boolean or null
duck(true);
duck(null);
```

BEWARE: The log output is appended to `duck.log` in your project root.

## Output Format

The log entries are formatted with a timestamp, the data type, and the content:

```text
[2024-03-20 15:30:00] [string] Hello World
[2024-03-20 15:30:01] [array] Array
(
    [user_id] => 1
    [role] => admin
)
```

## Features

- 🕒 **Timestamped**: Every entry is timestamped.
- 📦 **Type Aware**: Automatically detects and labels the variable type.
- 🚀 **Zero Config**: Just install and use `duck()`.
- 🔒 **Concurrency Safe**: Uses file locking to prevent write conflicts.
