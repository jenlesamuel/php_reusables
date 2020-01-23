<?php

declare(strict_types=1);

namespace Reusables\ValueObjects;

abstract class ValueObject
{
    protected $value;

    public function serialize()
    {
        return $this->value;
    }

}