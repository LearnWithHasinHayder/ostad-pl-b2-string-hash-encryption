<?php 
//encrypt string by shifting letters
function encrypt($string, $shift){
    $encrypted = "";
    $length = strlen($string);
    for($i = 0; $i < $length; $i++){
        $ascii = ord($string[$i]);
        $ascii += $shift;
        $encrypted .= chr($ascii);
    }
    return $encrypted;
}

//decrypt string by shifting letters
function decrypt($string, $shift){
    $decrypted = "";
    $length = strlen($string);
    for($i = 0; $i < $length; $i++){
        $ascii = ord($string[$i]);
        $ascii -= $shift;
        $decrypted .= chr($ascii);
    }
    return $decrypted;
}

$name = "Hello World!";
$encrypted = encrypt($name, 1);
echo $encrypted;

$decrypted = decrypt($encrypted, 1);
echo $decrypted;
