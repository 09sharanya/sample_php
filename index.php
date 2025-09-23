<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$appName = $_ENV['APP_NAME'] ?? 'App';
$greeting = $_ENV['GREETING'] ?? 'Hi';

echo "<h1>$greeting, welcome to $appName!</h1>";
echo "<h1>sharanya, welcome to</h1>";