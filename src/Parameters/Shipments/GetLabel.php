<?php

namespace JacobDeKeizer\RedJePakketje\Parameters\Shipments;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Contracts\HasLabelFormat;
use JacobDeKeizer\RedJePakketje\Contracts\Parameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class GetLabel implements Dto, Parameter, HasLabelFormat
{
    use FromArray;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $pageSize;

    /**
     * @var int|null
     */
    private $offsetX;

    /**
     * @var int|null
     */
    private $offsetY;

    /**
     * @var int|null
     */
    private $dpi;

    /**
     * @var boolean|null
     */
    private $embedded;

    /**
     * @var boolean|null
     */
    private $inverted;

    public function __construct()
    {
        $this->format = self::LABEL_TYPE_PDF;
        $this->pageSize = self::LABEL_SIZE_A6;
    }

    /**
     * @param string $format
     * @return GetLabel
     */
    public function setFormat(string $format): GetLabel
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $pageSize
     * @return GetLabel
     */
    public function setPageSize(string $pageSize): GetLabel
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageSize(): string
    {
        return $this->pageSize;
    }

    /**
     * @param int|null $offsetX
     * @return GetLabel
     */
    public function setOffsetX(?int $offsetX): GetLabel
    {
        $this->offsetX = $offsetX;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOffsetX(): ?int
    {
        return $this->offsetX;
    }

    /**
     * @param int|null $offsetY
     * @return GetLabel
     */
    public function setOffsetY(?int $offsetY): GetLabel
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOffsetY(): ?int
    {
        return $this->offsetY;
    }

    /**
     * @param int|null $dpi
     * @return GetLabel
     */
    public function setDpi(?int $dpi): GetLabel
    {
        $this->dpi = $dpi;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDpi(): ?int
    {
        return $this->dpi;
    }

    /**
     * @param bool|null $embedded
     * @return GetLabel
     */
    public function setEmbedded(?bool $embedded): GetLabel
    {
        $this->embedded = $embedded;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEmbedded(): ?bool
    {
        return $this->embedded;
    }

    /**
     * @param bool|null $inverted
     * @return GetLabel
     */
    public function setInverted(?bool $inverted): GetLabel
    {
        $this->inverted = $inverted;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getInverted(): ?bool
    {
        return $this->inverted;
    }

    /**
     * @return string
     */
    public function toQuery(): string
    {
        return (new QueryParameterBuilder)
            ->addRequiredParameter('format', $this->getFormat())
            ->addRequiredParameter('pagesize', $this->getPageSize())
            ->addOptionalParameter('offset_x', $this->getOffsetX())
            ->addOptionalParameter('offset_y', $this->getOffsetY())
            ->addOptionalParameter('dpi', $this->getDpi())
            ->addOptionalParameter('embedded', $this->getEmbedded())
            ->addOptionalParameter('inverted', $this->getInverted())
            ->toQueryString();
    }
}