<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\QueryParameters;

use JacobDeKeizer\RedJePakketje\Contracts\QueryParameter;

class QueryParameterBuilder implements QueryParameter
{
    /**
     * @var QueryParameter[]
     */
    private array $parameters = [];

    public function addOptionalParameter(string $parameter, string|int|bool|null $value): static
    {
        $this->parameters[] = new QueryParameterOptional($parameter, $value);
        return $this;
    }

    public function addRequiredParameter(string $parameter, string|int|bool $value): static
    {
        $this->parameters[] = new QueryParameterRequired($parameter, $value);
        return $this;
    }

    public function addSortQueryParameter(string $parameter, ?string $column = null, ?string $direction = null): static
    {
        $this->parameters[] = new QueryParameterSort($parameter, $column, $direction);
        return $this;
    }

    public function toQueryString(): ?string
    {
        $queryString = '';

        foreach ($this->parameters as $parameter) {
            if (($paramQueryString = $parameter->toQueryString()) === null) {
                continue;
            }

            $queryString = $this->appendToQueryString($queryString, $paramQueryString);
        }

        return $queryString;
    }

    private function appendToQueryString(string $queryString, string $queryStringToAdd): string
    {
        if ($queryStringToAdd === '') {
            return $queryString;
        }

        if ($queryString === '') {
            return '?' . $queryStringToAdd;
        }

        return $queryString . '&' . $queryStringToAdd;
    }
}
