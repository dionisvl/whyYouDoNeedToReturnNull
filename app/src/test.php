<?php

declare(strict_types=1);

use App\Invokers\NullInvokerFromUserInterface;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../vendor/autoload.php';




$invoker = new NullInvokerFromUserInterface();

echo PHP_EOL;
echo $invoker->getResult() . PHP_EOL;