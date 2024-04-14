<?php


use \LuckyStar\Crypto\Crypto;

require_once('vendor/autoload.php');


echo "Welcome to the LuckyStar Crypto Service!\n";


$crypto = new Crypto();

echo $crypto->setSecretIv('00cccskmmx55')
	->setSecretKey('00	cccxxx55')
	->encrypt('Hello, World!')->getOutput();




