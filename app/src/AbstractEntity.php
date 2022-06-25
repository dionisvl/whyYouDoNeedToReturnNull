<?php

declare(strict_types=1);

namespace App;

abstract class AbstractEntity
{
    abstract public function returnSomething(): ?string;

}