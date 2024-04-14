# php-encryption-library

This is a simple PHP library that provides a simple interface for encrypting and decrypting data using the OpenSSL extension.


## Installation

You can install the library via Composer. Run the following command:

```bash
composer require luckystar/crypto
```
### Function list

<table>
<tr>
<td>Function</td>
<td>Description</td>
<td>Example</td>
</tr>

<tr>
<td>encrypt</td>
<td>Encrypt the given data</td>
<td>encrypt('Hello, World!')</td>
</tr>

<tr>
<td>decrypt</td>
<td>Decrypt the given data</td>
<td>decrypt('b0lSSVJzeTUwZ1p4WGpmNUY0Zk55NE9janZaZWM1VVhKUEdVUDBSZWh2WT0=')</td>

<tr>
<td>getOutput</td>
<td>Get the output of the encryption or decryption process</td>
<td>getOutput()</td>
</tr>


</tr>

<tr>
<td>setSecretKey</td>
<td>Set the secret key to use for encryption and decryption</td>
<td>setSecretKey('00cccskmmx55')</td>

</tr>
<tr>
<td>setSecretIv</td>
<td>Set the secret iv to use for encryption and decryption</td>
<td>setSecret('00cccskmmx55')</td>
</tr>

<tr>
<td>createSecretKey</td>
<td>Create a secret key</td>
<td>createSecretKey()</td>
</tr>

<tr>
<td>createSecretIv</td>
<td>Create a secret iv</td>
<td>createSecretIv()</td>
</tr>

<tr>
<td>createRandomString</td>
<td>Create a random string</td>
<td>createRandomString($length)</td>
</tr>

<tr>
<td>createRandomNumber</td>
<td>Create a random number</td>
<td>createRandomNumber($length)</td>
</tr>


<tr>
<td>createRandomHex</td>
<td>Create a random hex</td>
<td>createRandomHex($length)</td>

</tr>


<tr>
<td> createUuid </td>
<td> Create a UUID </td>
<td> createUuid() </td>
</tr>

<tr>
<td> createRandomPassword </td>
<td> Create a random password </td>
<td> createRandomPassword($length = 10, $useLowercase = true, $useUppercase = true, $useNumbers = true, $useSymbols = true, $customChars = '!@#$%^&*()_+') </td>
</tr>













</table>




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