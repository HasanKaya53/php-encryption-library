<?php


use \LuckyStar\Crypto\Crypto;

require_once('vendor/autoload.php');


echo "Welcome to the LuckyStar Crypto Service!\n";


$crypto = new Crypto();

echo $crypto->setSecretIv('00cccskmmx55')
	->setSecretKey('00	cccxxx55')
	->encrypt('Hello, World!')->getOutput();

echo "<br>";

echo $crypto->createRandomString(10);

echo "<br>";

echo $crypto->createRandomNumber(10);


echo "<br>";

echo $crypto->createRandomHex(10);

echo "<br>";

echo $crypto->createUuid();

echo "<br>";

echo $crypto->createRandomPassword(12, true, true, true, true, '!@#$');




