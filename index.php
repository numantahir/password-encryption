<?php
header('Content-Type: text/html; charset=utf-8');

require_once("Crypt/Blowfish.php");

	$bf = new Crypt_Blowfish('CBC');
	$bf->setKey( $cipher_key );
	$PasswordOpt = $bf->encrypt("Type Your Password Here", ENCRYPTION_KEY);
	echo $PasswordOpt;
	echo '<br>';
	echo urlencode($PasswordOpt);

	echo '<br>';
	echo '-----------------------------------------------------------';
	echo '<br>';
	echo $bf->decrypt($PasswordOpt, ENCRYPTION_KEY);
  ?>
