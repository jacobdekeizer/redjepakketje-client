# Red je Pakketje api client

[![Latest Stable Version](https://poser.pugx.org/jacobdekeizer/redjepakketje-client/v/stable)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
[![License](https://poser.pugx.org/jacobdekeizer/redjepakketje-client/license)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)


[Red je Pakketje API documentation](https://redjepakketje.docs.apiary.io)

## Installation

Get it with composer

```
composer require jacobdekeizer/redjepakketje-client
```

## Usage

Create the client

```php
$client = new \jacobdekeizer\Client();

$client->setApiKey('api_key');
```

### Create shipment

```php
$shipment = (new \jacobdekeizer\Resources\Shipment())
    ->setCompanyName('Boeren BV')
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
    ->setName('My Company')
    ->setDeliveryDate(date('Y-m-d'))
    ->setProduct(\jacobdekeizer\Resources\Shipment::PRODUCT_SAME_DAY_PARCEL_STANDARD)
    ->setPickUpPoint('pick_up_point_uuid');

$shipmentResponse = $client->shipments()->create(
    $shipment,
    new \jacobdekeizer\Parameters\Shipments\Create() // optional
);

$label = $shipmentResponse->getLabel();
```

### List shipments

```php
$shipmentsList = $client->shipments()->all(
    new \jacobdekeizer\Parameters\Shipments\All() // optional
);
```

### Get shipment

```php
$shipmentResponse = $client->shipments()->get(
    'your_tracking_code',
    new \jacobdekeizer\Parameters\Shipments\GetLabel() // optional
);
```

### Get label

```php
$labelContents = $client->shipments()->getLabel(
    'your_tracking_code',
    new \jacobdekeizer\Parameters\Shipments\GetLabel() // optional
);
```

### Create return shipments

```php
$returnShipment = (new \jacobdekeizer\Resources\ReturnShipment())
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
    ->setProduct(\jacobdekeizer\Resources\ReturnShipment::PRODUCT_SAME_DAY_PARCEL_STANDARD)
    ->setNote('some text');

$returnShipmentResponse = $client->returns()->create($returnShipment);
```

### List return shipments

```php
$returnShipmentsList = $client->returns()->all(
    new \jacobdekeizer\Parameters\Returns\All() // optional
);
```

### Get return shipment

```php
$returnShipment = $client->returns()->get('return_shipment_uuid');
```

### List pick up points

```php
$pickUpPoints = $client->pickUps()->all();
```

### Get pick up point

```php
$pickUpPoint = $client->pickUps()->get('pick_up_point_uuid');
```

### Create contact

```php
$contact = (new \jacobdekeizer\Resources\Contact())
    ->setFirstName('John')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com')
    ->setTelephone('+31612345678')
    ->setGender(\jacobdekeizer\Resources\Contact::GENDER_MALE)
    ->setReference('abcdefg');

$contactResponse = $client->contacts()->create($contact);
```

### List all contacts

```php
$contacts = $client->contacts()->all();
```

### Get contact

```php
$contact = $client->contacts()->get('3c8a9435-8b68-4d06-847d-4d1cd5f7c27a');
```

### Update contact

```php
$contact = (new \jacobdekeizer\Resources\Contact())
    ->setUuid('uuid_of_contact')
    ->setFirstName('Jane')
    ->setLastName('Doe')
    ->setEmail('john.doe@example.com')
    ->setTelephone('+31612345678')
    ->setGender(\jacobdekeizer\Resources\Contact::GENDER_FEMALE)
    ->setReference('abcdefg');

$contactResponse = $client->contacts()->update($contact);
```

### Get cut off time

```php
$cutOffTime = $client->cutOffTimes()->get('1102AB');
```
