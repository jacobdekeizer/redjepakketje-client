<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Traits\FromArray;

class ContactsList extends BaseSimpleList
{
    use FromArray;

    /**
     * @param array $data
     * @return Dto
     */
    protected function createDataResourceFromArray(array $data): Dto
    {
        return Contact::fromArray($data);
    }
}