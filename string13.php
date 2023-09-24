<?php 
// The data you want to encrypt
$data = "Sensitive Data";

// The encryption method you want to use
$method = 'AES-256-CBC';

// A secure encryption key. The key should be stored securely and never exposed.
$key = openssl_random_pseudo_bytes(32);  // Generate a random 256-bit key

// A randomly generated IV
$iv_length = openssl_cipher_iv_length($method);
$iv = openssl_random_pseudo_bytes($iv_length);

// Encrypt the data
$encrypted_data = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
echo base64_encode($encrypted_data) . PHP_EOL;
// The $encrypted_data and $iv should be stored securely. The $key should be stored in a secure location.

// To decrypt the data, use the same key and IV
$decrypted_data = openssl_decrypt($encrypted_data, $method, $key, OPENSSL_RAW_DATA, $iv);

// Output the decrypted data
echo $decrypted_data;  // Output: Sensitive Data