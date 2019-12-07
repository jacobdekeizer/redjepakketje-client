<?php

namespace jacobdekeizer\Traits;

use jacobdekeizer\Support\Str;

trait Query
{
    /**
     * @param string $query
     * @param string $param
     * @return void
     */
    protected function addPropertyToQuery(string &$query, string $param): void
    {
        $studlyParam = Str::camel($param);
        $query .= $this->determineQueryOperator($query) . $param . '=' . $this->$studlyParam;
    }

    /**
     * @param string $query
     * @param string $param
     * @return void
     */
    protected function addOptionalPropertyToQuery(string &$query, string $param): void
    {
        $studlyParam = Str::camel($param);

        if ($this->$studlyParam === null) {
            return;
        }

        $this->addPropertyToQuery($query, $param);
    }

    /**
     * @param string $query
     * @param string $queryParam
     * @return void
     */
    protected function addRawToQuery(string &$query, string $queryParam): void
    {
        $query .= $this->determineQueryOperator($query) . $queryParam;
    }

    /**
     * @param string $query
     * @return string
     */
    private function determineQueryOperator(string $query): string
    {
        if ($query === '') {
            return '?';
        }

        return '&';
    }
}