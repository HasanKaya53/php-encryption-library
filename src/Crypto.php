<?php

namespace LuckyStar\Crypto;

class Crypto
{
	private  $secret_key = '00cccxxx55';
	private  $secret_iv = '00cccskmmx55';

	private  $encrypt_method = 'AES-256-CBC';


	private $output = false;


	public  function setSecretKey($key) {
		$this->secret_key = $key;
		return $this;
	}

	public function setSecretIv($iv) {
		$this->secret_iv = $iv;
		return $this;
	}

	public function setEncryptMethod($method) {
		$this->encrypt_method = $method;
		return $this;
	}

	public  function encrypt($string) {
		$this->encrypt_decrypt($string, 1);
		return $this;
	}

	public  function decrypt($string) {
		return $this->encrypt_decrypt($string, 0);
	}
	private  function encrypt_decrypt($string, $action = 1) {
		$output = false;
		$encrypt_method = $this->encrypt_method;
		$secret_key = $this->secret_key;
		$secret_iv = $this->secret_iv;
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);

		if ($action == 1) {
			$output = @base64_encode(openssl_encrypt(gzcompress($string), $encrypt_method, $key, 0, $iv));
		} elseif ($action == 0) {
			$output = @gzuncompress(openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv));
		}

		if(empty($output)) return false;

		$this->output = $output;

		return $output;
	}

	public function getOutput() {
		return $this->output;
	}

	public function createSecretKey() {
		return bin2hex(random_bytes(16));
	}

	public function createSecretIv() {
		return bin2hex(random_bytes(8));
	}


	public function createRandomString($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}

	public function createRandomNumber($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
	}

	public function createRandomHex($length = 10) {
		return bin2hex(random_bytes($length));
	}

	public function createUuid(){
		$uuid = md5(uniqid(mt_rand(), true));
		$formatted_uuid = sprintf(
			'%s-%s-%s-%s-%s',
			substr($uuid, 0, 8),
			substr($uuid, 8, 4),
			substr($uuid, 12, 4),
			substr($uuid, 16, 4),
			substr($uuid, 20, 12)
		);
		return $formatted_uuid;
	}


	public function createRandomPassword($length = 10, $useLowercase = true, $useUppercase = true, $useNumbers = true, $useSymbols = true, $customChars = '!@#$%^&*()_+') {
		// List of characters
		$chars = '';
		// Lowercase letters
		if ($useLowercase) {
			$chars .= 'abcdefghijklmnopqrstuvwxyz';
		}
		// Uppercase letters
		if ($useUppercase) {
			$chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		}
		// Numbers
		if ($useNumbers) {
			$chars .= '0123456789';
		}
		// Symbols
		if ($useSymbols) {
			$chars .= $customChars;
		}

		// Generate the password
		$password = '';
		for ($i = 0; $i < $length; $i++) {
			$password .= $chars[mt_rand(0, strlen($chars) - 1)];
		}
		return $password;
	}
}