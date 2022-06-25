<?php

declare(strict_types=1);

namespace App;


use RuntimeException;

class Entity4 extends AbstractEntity
{
    public function returnSomething(): string
    {
        $result = '4';

        if ($result === null) {
            throw new RuntimeException('Something went wrong');
        }

        return $result;
    }
}