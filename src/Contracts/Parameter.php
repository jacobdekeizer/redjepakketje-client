<?php

namespace jacobdekeizer\Contracts;

interface Parameter
{
    /**
     * @return string
     */
    public function toQuery(): string;
}