# DataFactory LA API Client

[![Build Status](https://scrutinizer-ci.com/g/mauro-moreno/datafactory-client/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mauro-moreno/datafactory-client/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mauro-moreno/datafactory-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mauro-moreno/datafactory-client/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/mauro-moreno/datafactory-client/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mauro-moreno/datafactory-client/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/mauro-moreno/datafactory-client/v/stable)](https://packagist.org/packages/mauro-moreno/datafactory-client)
[![Total Downloads](https://poser.pugx.org/mauro-moreno/datafactory-client/downloads)](https://packagist.org/packages/mauro-moreno/datafactory-client)
[![License](https://poser.pugx.org/mauro-moreno/datafactory-client/license)](https://packagist.org/packages/mauro-moreno/datafactory-client)

DataFactory LA API client

## Installation

```bash
composer require mauro-moreno/datafactory-client
```

## Usage

```php
<?php

// Instantiate client
$client = new \MauroMoreno\DataFactory\Client();

// Call get channels resource
$content = $client->getChannels();

// Instantiate serializer with configurations.
$serializer = \JMS\Serializer\SerializerBuilder::create()
   ->addMetadataDir(__DIR__ . '/resources/config/serializer')
   ->build();

// Instantiate document
$document = new \MauroMoreno\DataFactory\Document($serializer);

// Parse resource contents
$document->parseChannels($content);
```
