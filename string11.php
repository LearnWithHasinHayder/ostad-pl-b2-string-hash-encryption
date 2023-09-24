<?php 
$key = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$shuffled = str_shuffle($key);

function encrypt($text, $shuffledKey) {
    $key = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $encryptedText = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        $pos = strpos($key, $char);
        if ($pos !== false) {
            $encryptedText .= $shuffledKey[$pos];
        } else {
            $encryptedText .= $char;  // leave character unchanged if it's not found in the key
        }
    }
    return $encryptedText;
}

function decrypt($encryptedText, $shuffledKey) {
    $key = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $decryptedText = '';
    for ($i = 0; $i < strlen($encryptedText); $i++) {
        $char = $encryptedText[$i];
        $pos = strpos($shuffledKey, $char);
        if ($pos !== false) {
            $decryptedText .= $key[$pos];
        } else {
            $decryptedText .= $char;  // leave character unchanged if it's not found in the shuffled key
        }
    }
    return $decryptedText;
}

$text = "hello world!";
$encryptedText = encrypt($text, $shuffled);
echo $encryptedText . PHP_EOL;  // Outputs the encrypted text

$decryptedText = decrypt($encryptedText, $shuffled);
echo $decryptedText . PHP_EOL;  // Outputs "hello world"