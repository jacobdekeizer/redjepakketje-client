<?php

namespace jacobdekeizer\Contracts;

interface ToRequest
{
    /**
     * @return array
     */
    public function toRequest(): array;
}