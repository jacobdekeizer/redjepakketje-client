<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Enums;

interface ReturnShipmentStatus
{
    public const STATUS_PRE_TRANSIT = 'pre_transit';
    public const STATUS_WAITING_FOR_PICKUP = 'waiting_for_pickup';
    public const STATUS_IN_TRANSIT = 'in_transit';
    public const STATUS_IN_TRANSIT_DEPOT = 'in_transit_depot';
    public const STATUS_OUT_FOR_DELIVERY = 'out_for_delivery';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_FAILED_TO_PICK_UP = 'failed_to_pick_up';
    public const STATUS_FAILED_TO_DELIVERY = 'failed_to_delivery';
    public const STATUS_NOT_AVAILABLE = 'not_available';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_CANCELLED_FAILED_PICKUP = 'cancelled_failed_pickup';
}
