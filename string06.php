<?php 
//split and tokenize
$name = "Hello World!";
// echo str_split($name);
print_r(str_split($name));
print_r(str_split($name, 3));

//explode and implode
print_r(explode(" ", $name));
print_r(explode("o", $name));
print_r(explode("o", $name, 2));

$names = array("Hello", "World!");
echo implode(" ", $names);
echo implode("o", $names);

//tokenize
$token = strtok($name, " ");
echo $token;
while($token !== false){
    $token = strtok(" ");
    echo $token;
}
