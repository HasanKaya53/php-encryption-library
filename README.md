# php-encryption-library

This is a simple PHP library that provides a simple interface for encrypting and decrypting data using the OpenSSL extension.


## Installation

You can install the library via Composer. Run the following command:

```bash
composer require luckystar/crypto
```

## Usage

```php

use \LuckyStar\Crypto\Crypto;

// Encrypt data

echo $crypto->setSecretIv('00cccskmmx55')
	->setSecretKey('00	cccxxx55')
	->encrypt('Hello, World!')->getOutput();

// Decrypt data

echo $crypto->decrypt('b0lSSVJzeTUwZ1p4WGpmNUY0Zk55NE9janZaZWM1VVhKUEdVUDBSZWh2WT0=')->getOutput();

```