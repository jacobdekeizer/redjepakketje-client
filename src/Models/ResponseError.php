<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models;

class ResponseError extends BaseModel
{
    private int $errorCode;

    private string $errorMessage;

    private array $errorDetails;

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): ResponseError
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): ResponseError
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public function getErrorDetails(): array
    {
        return $this->errorDetails;
    }

    public function setErrorDetails(array $errorDetails): ResponseError
    {
        $this->errorDetails = $errorDetails;
        return $this;
    }
}
