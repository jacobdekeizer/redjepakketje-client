# Red je Pakketje api client

[![Packagist Version](https://img.shields.io/packagist/v/jacobdekeizer/redjepakketje-client)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
[![Packagist](https://img.shields.io/packagist/l/jacobdekeizer/redjepakketje-client)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
[![Packagist](https://img.shields.io/packagist/dt/jacobdekeizer/redjepakketje-client)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
[![Packagist](https://img.shields.io/packagist/php-v/jacobdekeizer/redjepakketje-client)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
![Build](https://github.com/jacobdekeizer/redjepakketje-client/workflows/Build/badge.svg?branch=master)

[Red je Pakketje API documentation](https://redjepakketje.docs.apiary.io)

## Installation

Get it with composer

```
composer require jacobdekeizer/redjepakketje-client
```

## Usage

> This readme shows basic usage of this package, for all available options see the class definitions and the api documentation.

Create the client

```php
$client = new \JacobDeKeizer\RedJePakketje\Client();

$client->setApiKey('api_key');
```

## Shipments

### List shipments

```php
$shipmentsList = $client->shipments()->all(
    new \JacobDeKeizer\RedJePakketje\Parameters\Shipments\All() // optional
);
```

### List recently created shipments

Retrieves shipments from the last 7 days.

```php
$shipmentsList = $client->shipments()->allRecentlyCreated();
```

### Get shipment

```php
$shipment = $client->shipments()->get('tracking_code');

// for example check the shipment status
$isDelivered = $shipment->getStatus() === \JacobDeKeizer\RedJePakketje\Models\Shipment\Enums\ShipmentStatus::DELIVERED;
```

### Create shipment

```php
$shipment = (new \JacobDeKeizer\RedJePakketje\Models\Shipment\CreateShipment())
    ->setCompanyName('Boeren BV')
    ->setName('Gijs Boersma')
    ->setStreet('Lange laan')
    ->setHouseNumber(29)
    ->setHouseNumberExtension('a')
    ->setZipcode('9281EM')
    ->setCity('Zevenaar')
    ->setTelephone('0602938172')
    ->setEmail('noreply@example.com')
    ->setNote('Some note')
    ->setDeliveryDate(date('Y-m-d'))
    ->setProduct(\JacobDeKeizer\RedJePakketje\Models\Shipment\Enums\ShipmentProduct::SAME_DAY_PARCEL_STANDARD)
    ->setReference('reference')
    ->setNote('my_note')
    ->setSender('sender_uuid');
    
// optionally set product options
$shipment->setProductOptions(
    (new \JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption())
        ->setOption(\JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption::OPTION_ALLOW_NEIGHBOURS)
        ->setValue(true),
    (new \JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption())
        ->setOption(\JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption::OPTION_REQUIRE_SIGNATURE)
        ->setValue(false),
    (new \JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption())
        ->setOption(\JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption::OPTION_AGE_CHECK_18)
        ->setValue(false),
    (new \JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption())
        ->setOption(\JacobDeKeizer\RedJePakketje\Models\Shipment\ProductOption::OPTION_ALLOW_NEIGHBOURS)
        ->setValue(true)
        ->setMaxAttempts(2)
);

$shipmentResponse = $client->shipments()->create(
    $shipment,
    new \JacobDeKeizer\RedJePakketje\Parameters\Shipments\Create() // optional
);

$label = $shipmentResponse->getLabel();
```

### Update shipment

```php

$shipment = $client->shipments()->update(
    'tracking_code',
    (new \JacobDeKeizer\RedJePakketje\Models\Shipment\UpdateShipment())
        ->setProduct(\JacobDeKeizer\RedJePakketje\Models\Shipment\Enums\ShipmentProduct::NEXT_DAY_PARCEL_LARGE)
);
```

### Cancel shipment

```php
$shipment = $client->shipments()->cancel('tracking_code');
```

### Get label of a shipment

```php
$label = $client->shipments()->getLabel(
    'tracking_code',
    (new \JacobDeKeizer\RedJePakketje\Parameters\Shipments\GetLabel()) // optional
);
```

## Return shipments

### List return shipments

```php
$returnShipmentsList = $client->returnShipments()->all(
    new \JacobDeKeizer\RedJePakketje\Parameters\ReturnShipments\All() // optional
);
```

### Get return shipment

```php
$returnShipment = $client->returnShipments()->get('return_shipment_uuid');
```

### Create return shipment

```php
$returnShipment = (new \JacobDeKeizer\RedJePakketje\Models\ReturnShipment\CreateReturnShipment())
    ->setName('Gijs Boersma')
    ->setStreet('Lange laan')
    ->setHouseNumber(29)
    ->setHouseNumberExtension('a')
    ->setZipcode('9281EM')
    ->setCity('Zevenaar')
    ->setTelephone('0602938172')
    ->setEmail('noreply@example.com')
    ->setReference('Bestelling 123')
    ->setNote('Some note')
    ->setReceiverName('My company')
    ->setProduct(\JacobDeKeizer\RedJePakketje\Models\ReturnShipment\Enums\ReturnShipmentProduct::SAME_DAY_PARCEL_MEDIUM)
    ->setNote('some text')
    ->setSender('sender_uuid');

$returnShipmentResponse = $client->returnShipments()->create($returnShipment);
```

### Cancel return shipment

```php
$returnShipment = $client->returnShipments()->cancel('return_shipment_uuid');
```

## Senders

### List senders

```php
$senderList = $client->senders()->all();
```

### Get sender

```php
$sender = $client->senders()->get('sender_uuid');
```

### Update sender

```php
$sender = $client->senders()->update(
    'sender_uuid',
    (new \JacobDeKeizer\RedJePakketje\Models\Sender\UpdateSender())
        ->setName('My Webshop 123')
        ->setTelephone('+31612345678')
        ->setStreet('Streetname')
        ->setHouseNumber('11')
        ->setZipcode('8327SD')
        ->setCity('Breda')
);
```

### Create sender

```php
$sender = $client->senders()->create(
    (new \JacobDeKeizer\RedJePakketje\Models\Sender\CreateSender())
        ->setReference('A1234567890Q')
        ->setName('My Webshop')
        ->setTelephone('+31612345678')
        ->setStreet('Streetname')
        ->setHouseNumber('11')
        ->setZipcode('8327SD')
        ->setCity('Breda')
);
```

### Deactivate sender

```php
$client->senders()->deactivate(
    'sender_uuid',
    (new \JacobDeKeizer\RedJePakketje\Models\Sender\DeactivateSender())
        ->setInactiveFrom(date('Y-m-d', strtotime('+1 day')))
);
```

## Pick-up Locations

### List pick-up locations

```php
$pickUpLocationsList = $client->pickUpLocations()->all(
    new JacobDeKeizer\RedJePakketje\Parameters\PickUpLocation\All() // optional
);
```

### Get pick-up location

```php
$pickUpLocation = $client->pickUpLocations()->get('pick_up_location_uuid');
```

### Create pick-up location

```php
$pickUpLocation = $client->pickUpLocations()->create(
    (new JacobDeKeizer\RedJePakketje\Models\PickUpLocation\CreatePickUpLocation())
        ->setName('Warehouse')
        ->setStreet('Streetname')
        ->setHouseNumber('11')
        ->setHouseNumberExtension('a')
        ->setZipcode('8327SD')
        ->setCity('Breda')
        ->setAvailableDays([1, 2, 3, 4, 5])
        ->setTypes([\JacobDeKeizer\RedJePakketje\Models\PickUpLocation\Enums\PickUpLocationType::PICK_UP_POINT])
);
```

### Update pick-up location

```php
$pickUpLocation = $client->pickUpLocations()->update(
    'pick_up_location_uuid',
    (new \JacobDeKeizer\RedJePakketje\Models\PickUpLocation\UpdatePickUpLocation())
        ->setAvailableDays([1, 2, 3, 4, 5, 6, 7])
);
```

## Pick-up rules

### List pick-up rules

```php
$pickUpRulesList = $client->pickUpRules()->all('sender_uuid');
```

### Create pick-up rule

```php
$pickUpRule = $client->pickUpRules()->create(
        'sender_uuid',
        (new \JacobDeKeizer\RedJePakketje\Models\PickUpRule\CreatePickUpRule())
            ->setPickUpLocation('pick_up_location_uuid')
            ->setStartDate(date('Y-m-d'))
    );
```

### Update pick-up rule

```php
$pickUpRule = $client->pickUpRules()->update(
    'sender_uuid',
    'pick_up_rule_uuid',
    (new \JacobDeKeizer\RedJePakketje\Models\PickUpRule\UpdatePickUpRule())
        ->setStartDate(date('Y-m-d', strtotime('+1 day')))
);
```

### Delete pick-up rule

```php

$client->pickUpRules()->delete(
    'sender_uuid',
    'pick_up_rule_uuid'
);
```

## Contacts

### List contacts

```php
$contactsList = $client->contacts()->all();
```

### Get contact

```php
$contact = $client->contacts()->get('contact_uuid');
```

### Create contact

```php
$contact = $client->contacts()->create(
    (new \JacobDeKeizer\RedJePakketje\Models\Contact\CreateContact())
        ->setFirstName('John')
        ->setLastName('Doe')
        ->setEmail('john.doe@example.com')
        ->setTelephone('+31612345678')
        ->setGender(\JacobDeKeizer\RedJePakketje\Models\Contact\Enums\Gender::MALE)
        ->setReference('reference')
);
```

### Update contact

```php
$contact = $client->contacts()->update(
    'contact_uuid',
    (new \JacobDeKeizer\RedJePakketje\Models\Contact\UpdateContact())
        ->setFirstName('Jane')
        ->setLastName('Doe')
        ->setEmail('jane.doe@example.com')
        ->setTelephone('+31612345678')
        ->setGender(\JacobDeKeizer\RedJePakketje\Models\Contact\Enums\Gender::FEMALE)
        ->setReference('reference')
);
```

## Exceptions

You can catch the RedJePakketjeException and check if there is a response and response error or if it is a json error:

```php
// example bad call
try {
    $shipmentResponse = $client->shipments()->create(
        (new \JacobDeKeizer\RedJePakketje\Models\Shipment\CreateShipment()),
    );
} catch (\JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException $exception) {
    if ($exception->hasResponse()) {
        var_dump($exception->getResponse());
    }

    if ($exception->hasResponseError()) {
        var_dump($exception->getResponseError()->getErrorCode());
        var_dump($exception->getResponseError()->getErrorMessage());
        var_dump($exception->getResponseError()->getErrorDetails());
    }

    if ($exception->isJsonError()) {
        var_dump($exception->getPrevious());
    }
}
```

## Code sniffer

Check: `composer phpcs`

Autofix: `composer phpcbf`
