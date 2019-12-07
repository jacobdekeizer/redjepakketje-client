<?php

namespace jacobdekeizer\Parameters\Shipments;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Contracts\HasLabelFormat;
use jacobdekeizer\Contracts\Parameter;
use jacobdekeizer\Traits\FromArray;
use jacobdekeizer\Traits\Query;

class Create implements Dto, Parameter, HasLabelFormat
{
    use FromArray, Query;

    /**
     * @var string
     */
    private $label;

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
        $this->label = self::LABEL_TYPE_PDF;
        $this->pagesize = self::LABEL_SIZE_A6;
    }

    /**
     * @param string $label
     * @return Create
     */
    public function setLabel(string $label): Create
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $pagesize
     * @return Create
     */
    public function setPagesize(string $pagesize): Create
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
     * @return Create
     */
    public function setOffsetX(?int $offsetX): Create
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
     * @return Create
     */
    public function setOffsetY(?int $offsetY): Create
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
     * @return Create
     */
    public function setDpi(?int $dpi): Create
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
     * @return Create
     */
    public function setEmbedded(?bool $embedded): Create
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
     * @return Create
     */
    public function setInverted(?bool $inverted): Create
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

        $this->addPropertyToQuery($query, 'label');
        $this->addPropertyToQuery($query, 'pagesize');
        $this->addOptionalPropertyToQuery($query, 'offset_x');
        $this->addOptionalPropertyToQuery($query, 'offset_y');
        $this->addOptionalPropertyToQuery($query, 'dpi');
        $this->addOptionalPropertyToQuery($query, 'embedded');
        $this->addOptionalPropertyToQuery($query, 'inverted');

        return $query;
    }
}