<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment\Enums;

interface ShipmentStatus
{
    public const PRE_TRANSIT = 'pre_transit';
    public const READY_FOR_PICKUP = 'ready_for_pickup';
    public const IN_TRANSIT = 'in_transit';
    public const IN_DEPOT = 'in_depot';
    public const OUT_FOR_DELIVERY = 'out_for_delivery';
    public const DELIVERED = 'delivered';
    public const FAILED_TO_DELIVER = 'failed_to_deliver';
    public const RETURN_TO_SENDER = 'return_to_sender';
    public const RETURNED_TO_SENDER_OUT_FOR_DELIVERY = 'returned_to_sender_out_for_delivery';
    public const RETURNED_TO_SENDER = 'returned_to_sender';
    public const EXPIRED = 'expired';
    public const CANCELLED = 'cancelled';
    public const NOT_AVAILABLE = 'not_available';
    public const LOST = 'lost';
}
