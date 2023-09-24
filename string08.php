<?php 
//hashing
$name = "Hello World!";
$encrypted = base64_encode($name);
echo $encrypted;

$decrypted = base64_decode($encrypted);
echo $decrypted;

//list all digest methods
print_r(openssl_get_md_methods());

//hashing using openssl
echo openssl_digest($name, "md5");
echo openssl_digest($name, "sha1");
echo openssl_digest($name, "sha256");
echo openssl_digest($name, "sha512");


