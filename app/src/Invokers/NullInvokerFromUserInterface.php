<?php

declare(strict_types=1);

namespace App\Invokers;

use App\Entity3;
use App\Entity5;
use Exception;
use ReflectionClass;
use ReflectionException;
use RuntimeException;

class NullInvokerFromUserInterface
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
//        $class_name = 'App\Entity' . random_int(1, 3);
//        $class_name = 'App\Entity' . 3;
//        $class = new ReflectionClass($class_name);
//        return $class->newInstance()->returnSomething();

        return (new Entity5())->returnSomething();
    }
}