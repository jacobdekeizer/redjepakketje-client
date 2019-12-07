<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class CutOffTime implements Dto
{
    use FromArray;

    /**
     * @var string|null
     */
    private $zipcode;

    /**
     * @var string|null
     */
    private $cutOffTime;

    /**
     * @param null|string $zipcode
     * @return CutOffTime
     */
    public function setZipcode(?string $zipcode): CutOffTime
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * @param null|string $cutOffTime
     * @return CutOffTime
     */
    public function setCutOffTime(?string $cutOffTime): CutOffTime
    {
        $this->cutOffTime = $cutOffTime;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCutOffTime(): ?string
    {
        return $this->cutOffTime;
    }
}