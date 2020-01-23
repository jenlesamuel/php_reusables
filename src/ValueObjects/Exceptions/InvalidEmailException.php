<?php

declare(strict_types=1);

namespace Reusables\ValueObjects\Exceptions;

class InvalidEmailException extends \Exception
{
    /**
     * InvalidEmailException constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct(string $message, int $code=0)
    {
        parent::__construct($message, $code);
    }
}