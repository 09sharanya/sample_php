<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$appName = $_ENV['APP_NAME'] ?? 'App';
$greeting = $_ENV['GREETING'] ?? 'Hi';

echo "<h1>$greeting, welcome to $appName!</h1>";
echo "<h1>sharanya, welcome to $appName</h1>";
echo "<h1>hey kavya , this is $appName</h1>";
echo "<h1>$greeting , this is testinggg for $appName</h1>";
echo "<h1>$greeting kavya ans sharanya , this is testinggg for $appName</h1>";