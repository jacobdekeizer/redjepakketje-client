# Red je Pakketje api client

[![Packagist Version](https://img.shields.io/packagist/v/jacobdekeizer/redjepakketje-client)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
[![Packagist](https://img.shields.io/packagist/l/jacobdekeizer/redjepakketje-client?color=brightgreen)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
[![Packagist](https://img.shields.io/packagist/dt/jacobdekeizer/redjepakketje-client?color=brightgreen)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
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

### Create shipment

```php
$shipment = (new \JacobDeKeizer\RedJePakketje\Resources\Shipment())
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
    ->setProduct(\JacobDeKeizer\RedJePakketje\Resources\Shipment::PRODUCT_SAME_DAY_PARCEL_STANDARD)
    ->setReference('reference')
    ->setNote('my_note')
    ->setPickUpPoint('pick_up_point_uuid');

$shipmentResponse = $client->shipments()->create(
    $shipment,
    new \JacobDeKeizer\RedJePakketje\Parameters\Shipments\Create() // optional
);

$label = $shipmentResponse->getLabel();
```

### Adding product options to a shipment
```php
$shipment->setProductOptions([
    (new ProductOption())->setOption(ProductOption::OPTION_ALLOW_NEIGHBOURS)->setValue(true),
    (new ProductOption())->setOption(ProductOption::OPTION_REQUIRE_SIGNATURE)->setValue(false),
    (new ProductOption())->setOption(ProductOption::OPTION_AGE_CHECK_18)->setValue(false),
    (new ProductOption())->setOption(ProductOption::OPTION_PERISHABLE)->setValue(true)->setMaxAttempts(2),
]);
```

### List shipments

```php
$shipmentsList = $client->shipments()->all(
    new \JacobDeKeizer\RedJePakketje\Parameters\Shipments\All() // optional
);
```

### Get shipment

```php
$shipmentResponse = $client->shipments()->get(
    'your_tracking_code',
    new \JacobDeKeizer\RedJePakketje\Parameters\Shipments\GetLabel() // optional
);

// for example check the shipment status
$isPreTransit = $shipmentResponse->isStatus(\JacobDeKeizer\RedJePakketje\Enums\ShipmentStatus::STATUS_PRE_TRANSIT);
```

### Cancel shipment

```php
$shipmentResponse = $client->shipments()->cancel('your_tracking_code');
```

### Get label

```php
$labelContents = $client->shipments()->getLabel(
    'your_tracking_code',
    new \JacobDeKeizer\RedJePakketje\Parameters\Shipments\GetLabel() // optional
);
```

### Create return shipments

```php
$returnShipment = (new \JacobDeKeizer\RedJePakketje\Resources\ReturnShipment())
    ->setName('Gijs Boersma')
    ->setStreet('Lange laan')
    ->setHouseNumber(29)
    ->setHouseNumberExtension('a')
    ->setZipcode('9281EM')
    ->setCity('Zevenaar')
    ->setTelephone('0602938172')
    ->setEmail('noreply@example.com')
    ->setReference('Bestelling 112')
    ->setNote('Some note')
    ->setReceiverName('My company')
    ->setPickUpPoint('pick_up_point_uuid')
    ->setProduct(\JacobDeKeizer\RedJePakketje\Resources\ReturnShipment::PRODUCT_SAME_DAY_PARCEL_STANDARD)
    ->setNote('some text');

$returnShipmentResponse = $client->returnShipments()->create($returnShipment);
```

### List return shipments

```php
$returnShipmentsList = $client->returnShipments()->all(
    new \JacobDeKeizer\RedJePakketje\Parameters\ReturnShipments\All() // optional
);
```

### Get return shipment

```php
$returnShipment = $client->returnShipments()->get('return_shipment_uuid');

// for example check the return shipment status
$isPreTransit = $returnShipment->isStatus(\JacobDeKeizer\RedJePakketje\Enums\ReturnShipmentStatus::STATUS_PRE_TRANSIT);
```

### List pick up points

```php
$pickUpPoints = $client->pickUpPoints()->all();
```

### Get pick up point

```php
$pickUpPoint = $client->pickUpPoints()->get('pick_up_point_uuid');
```

### Create contact

```php
$contact = (new \JacobDeKeizer\RedJePakketje\Resources\Contact())
    ->setFirstName('John')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com')
    ->setTelephone('+31612345678')
    ->setGender(\JacobDeKeizer\RedJePakketje\Resources\Contact::GENDER_MALE)
    ->setReference('reference');

$contactResponse = $client->contacts()->create($contact);
```

### List all contacts

```php
$contacts = $client->contacts()->all();
```

### Get contact

```php
$contact = $client->contacts()->get('contact_uuid');
```

### Update contact

```php
$contact = (new \JacobDeKeizer\RedJePakketje\Resources\Contact())
    ->setUuid('uuid_of_contact')
    ->setFirstName('Jane')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com')
    ->setTelephone('+31612345678')
    ->setGender(\JacobDeKeizer\RedJePakketje\Resources\Contact::GENDER_FEMALE)
    ->setReference('reference');

$contactResponse = $client->contacts()->update($contact);
```

### Get cut off time

```php
$cutOffTime = $client->cutOffTimes()->get('1102AB');
```

## Code sniffer

Check: `composer phpcs`

Autofix: `composer phpcbf`
