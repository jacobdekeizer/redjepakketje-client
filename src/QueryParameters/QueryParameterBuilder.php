<?php

namespace JacobDeKeizer\RedJePakketje\QueryParameters;

use JacobDeKeizer\RedJePakketje\Contracts\QueryParameter;

class QueryParameterBuilder implements QueryParameter
{
    /**
     * @var QueryParameter[]
     */
    private $parameters = [];

    /**
     * @param string $parameter
     * @param string|int|bool|null $value
     * @return QueryParameterBuilder
     */
    public function addOptionalParameter(string $parameter, $value): QueryParameterBuilder
    {
        $this->parameters[] = new QueryParameterOptional($parameter, $value);
        return $this;
    }

    /**
     * @param string $parameter
     * @param string|int|bool $value
     * @return QueryParameterBuilder
     */
    public function addRequiredParameter(string $parameter, $value): QueryParameterBuilder
    {
        $this->parameters[] = new QueryParameterRequired($parameter, $value);
        return $this;
    }

    /**
     * @param string $parameter
     * @param string|null $column
     * @param string|null $direction
     * @return QueryParameterBuilder
     */
    public function addSortQueryParameter(string $parameter, ?string $column = null, ?string $direction = null): QueryParameterBuilder
    {
        $this->parameters[] = new QueryParameterSort($parameter, $column, $direction);
        return $this;
    }

    /**
     * {@inheritDoc}
     */
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

    /**
     * @param string $queryString
     * @param string $queryStringToAdd
     * @return string
     */
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