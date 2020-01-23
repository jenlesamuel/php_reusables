<?php

declare(strict_types=1);

namespace Reusables\ValueObjects;

use Reusables\ValueObjects\Exceptions\InvalidUUIDException;

class UUID extends ValueObject
{
    /**
     * UUID constructor.
     * @param string $value
     * @throws InvalidUUIDException
     */
    public function __construct(string $value)
    {
        $this->validate($value);

        $this->value = $value;
    }

    /**
     * @param string $value
     * @throws InvalidUUIDException
     */
    public function validate(string $value)
    {
        // Source https://gist.github.com/Joel-James/3a6201861f12a7acf4f2
        if (!is_string($value) || (preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/', $value) !== 1))
            throw new InvalidUUIDException("UUID ({$value}) is invalid");
    }
}

