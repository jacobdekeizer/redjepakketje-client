<?php

namespace jacobdekeizer\Parameters\Shipments;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Contracts\HasLabelFormat;
use jacobdekeizer\Contracts\Parameter;
use jacobdekeizer\Traits\FromArray;
use jacobdekeizer\Traits\Query;

class GetLabel implements Dto, Parameter, HasLabelFormat
{
    use FromArray, Query;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $pagesize;

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
        $this->pagesize = self::LABEL_SIZE_A6;
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
     * @param string $pagesize
     * @return GetLabel
     */
    public function setPagesize(string $pagesize): GetLabel
    {
        $this->pagesize = $pagesize;
        return $this;
    }

    /**
     * @return string
     */
    public function getPagesize(): string
    {
        return $this->pagesize;
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
        $query = '';

        $this->addPropertyToQuery($query, 'format');
        $this->addPropertyToQuery($query, 'pagesize');
        $this->addOptionalPropertyToQuery($query, 'offset_x');
        $this->addOptionalPropertyToQuery($query, 'offset_y');
        $this->addOptionalPropertyToQuery($query, 'dpi');
        $this->addOptionalPropertyToQuery($query, 'embedded');
        $this->addOptionalPropertyToQuery($query, 'inverted');

        return $query;
    }
}