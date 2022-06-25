<?php

declare(strict_types=1);

namespace App;


use RuntimeException;

class Entity5 extends AbstractEntity
{
    public function returnSomething(): string
    {
        $result = '5';
        $result = null;

        if ($result === null) {
            throw new RuntimeException('Something went wrong');
        }

        return $result;
    }
}