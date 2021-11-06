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

## Shipments

### List shipments

```php
// todo document
```

### Get shipment

```php
// todo document
```

### Update shipment

```php
// todo document
```

### Create shipment

```php
// todo document
```

### Cancel shipment

```php
// todo document
```

### Get label of a shipment

```php
// todo document
```

## Return shipments

### List return shipments

```php
// todo document
```

### Get return shipment

```php
// todo document
```

### Create return shipment

```php
// todo document
```

### Cancel return shipment

```php
// todo document
```

## Senders

### List senders

```php
// todo document
```

### Get sender

```php
// todo document
```

### Update sender

```php
// todo document
```

### Create sender

```php
// todo document
```

### Deactivate sender

```php
// todo document
```

## Pick-up Locations

### List pick-up locations

```php
// todo document
```

### Get pick-up location

```php
// todo document
```

### Create pick-up location

```php
// todo document
```

### Update pick-up location

```php
// todo document
```

## Pick-up rules

### List pick-up rules

```php
// todo document
```

### Get pick-up rule

```php
// todo document
```

### Create pick-up rule

```php
// todo document
```

### Update pick-up rule

```php
// todo document
```

### Delete pick-up rule

```php
// todo document
```

## Contacts

### List contacts

```php
// todo document
```

### Get contact

```php
// todo document
```

### Create contact

```php
// todo document
```

### Update contact

```php
// todo document
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
