<?php

namespace jacobdekeizer\Exceptions;

use Exception;
use Throwable;

class RedJePakketjeException extends Exception
{
    /**
     * @param string $message
     * @param Throwable $throwable
     * @return RedJePakketjeException
     */
    public static function fromPrevious(string $message, Throwable $throwable): self
    {
        return new self($message, $throwable->getCode(), $throwable);
    }
}