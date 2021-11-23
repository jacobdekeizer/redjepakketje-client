<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment\Enums;

interface DeliveryAttemptStatus
{
    public const DELIVERED_NORMAL = 'OK';
    public const DELIVERED_AT_NEIGHBOURS = 'BB';
    public const NOT_AT_HOME_NEITHER_ARE_NEIGHBOURS = 'NT1';
    public const NOT_AT_HOME_NEIGHBOURS_DID_NOT_ACCEPT_SHIPMENT = 'NT2';
    public const COMPANY_CLOSED_ON_DELIVERY = 'BDG';
    public const RECIPIENT_IS_TOO_YOUNG = 'NDA';
    public const ADDRESS_INVALID = 'FTA';
    public const SHIPMENT_NOT_AVAILABLE = 'NA';
    public const NOT_DELIVERED_SEE_NOTE = 'ND';
    public const SORTING_MISTAKE = 'SF';
    public const TIME_SHORTAGE = 'TN';
    public const SHIPMENT_IS_LOST = 'LST';
}
