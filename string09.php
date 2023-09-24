<?php 
//ascii and character
echo ord("A");
echo chr(65);
echo chr(97);
echo chr(48);

//convert to ascii
$name = "Hello World!";
for($i = 0; $i < strlen($name); $i++){
    echo ord($name[$i]) . " ";
}

//convert to character
$ascii = array(72, 101, 108, 108, 111, 32, 87, 111, 114, 108, 100, 33);
for($i = 0; $i < count($ascii); $i++){
    echo chr($ascii[$i]);
}
