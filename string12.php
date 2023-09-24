<?php 
//openssl encrypt and decrypt
$name = "Hello World!";
$encrypted = openssl_encrypt($name, "AES-128-ECB", "password");
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "AES-128-ECB", "password");
echo $decrypted;

//aes256
$encrypted = openssl_encrypt($name, "AES-256-ECB", "password");
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "AES-256-ECB", "password");
echo $decrypted;

//ecnrypt with salt and IV
//create iv
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length("AES-256-CBC"));

//create iv from salt
$salt = openssl_random_pseudo_bytes(8);

$encrypted = openssl_encrypt($name, "AES-256-CBC", "password", 0, $iv);
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "AES-256-CBC", "password", 0, $iv);
echo $decrypted;


//list all ciphers
// print_r(openssl_get_cipher_methods());

//list all cipher algorithms
// print_r(openssl_get_cipher_methods(true));

//des3 
// $encrypted = openssl_encrypt($name, "DES-EDE3", "password");
echo $encrypted;

$decrypted = openssl_decrypt($encrypted, "DES-EDE3", "password");
echo $decrypted;
