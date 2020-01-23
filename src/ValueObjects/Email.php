<?php

declare(strict_types=1);

namespace Reusables\ValueObjects;

use Reusables\ValueObjects\Exceptions\InvalidEmailException;

class Email extends ValueObject
{
    /**
     * Email constructor.
     *
     * @param string $value
     * @throws InvalidEmailException
     */
    public function __construct(string $value)
    {
        if (! filter_var($value, FILTER_VALIDATE_EMAIL))
            throw new InvalidEmailException("Email ({$value}) is invalid");

        $this->value = $value;
    }
}

