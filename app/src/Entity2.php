<?php

declare(strict_types=1);

namespace App;

class Entity2 extends AbstractEntity
{
    public function returnSomething(): ?string
    {
        return __CLASS__ . PHP_EOL;
    }
}