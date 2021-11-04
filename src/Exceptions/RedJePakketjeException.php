<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Exceptions;

use Exception;
use Throwable;

class RedJePakketjeException extends Exception
{
    public static function fromPrevious(string $message, Throwable $throwable): self
    {
        return new self($message, $throwable->getCode(), $throwable);
    }
}
