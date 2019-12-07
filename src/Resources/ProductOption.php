<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Contracts\ToRequest;
use jacobdekeizer\Traits;

class ProductOption implements Dto, ToRequest
{
    use Traits\FromArray, Traits\ToRequest;

    public const OPTION_ALLOW_NEIGHBOURS = 'allow_neighbours';
    public const OPTION_REQUIRE_SIGNATURE = 'require_signature';
    public const OPTION_AGE_CHECK_18 = 'age_check_18';
    public const OPTION_PERISHABLE = 'perishable';

    /**
     * @var string|null
     */
    public $option;

    /**
     * @var bool
     */
    public $value;

    /**
     * @var int|null
     */
    public $maxAttempts;

    /**
     * @param null|string $option
     * @return ProductOption
     */
    public function setOption(?string $option): ProductOption
    {
        $this->option = $option;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getOption(): ?string
    {
        return $this->option;
    }

    /**
     * @param bool $value
     * @return ProductOption
     */
    public function setValue(bool $value): ProductOption
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValue(): bool
    {
        return $this->value ?? false;
    }

    /**
     * @param int|null $maxAttempts
     * @return ProductOption
     */
    public function setMaxAttempts(?int $maxAttempts): ProductOption
    {
        $this->maxAttempts = $maxAttempts;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxAttempts(): ?int
    {
        return $this->maxAttempts;
    }
}