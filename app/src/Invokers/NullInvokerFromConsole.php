<?php

declare(strict_types=1);

namespace App\Invokers;

use Exception;
use ReflectionClass;
use ReflectionException;
use RuntimeException;

class NullInvokerFromConsole
{
    public function getResult(): string
    {
        try {
            $result = $this->someBusinessLogic();
        } catch (Exception $e) {
            $result = $e->getMessage() . PHP_EOL . $e->getTraceAsString();
        }
        return $result . PHP_EOL;
    }

    /**
     * @throws ReflectionException
     * @throws Exception
     */
    private function someBusinessLogic(): string
    {
        $class_name = 'App\Entity' . random_int(1, 3);
        $class = new ReflectionClass($class_name);

        if ($class->newInstance()->returnSomething() === null) {
            throw new RuntimeException($class_name . ' Null returned');
        }

        return $class->newInstance()->returnSomething();
    }
}