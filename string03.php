<?php 
//find position of a string
$name = "Hello World!";
echo strpos($name, "World");
echo strpos($name, "world");
echo strpos($name, "o");
echo strpos($name, "o", 5);
echo strpos($name, "o", 6);
echo strpos($name, "o", 7);

if(strpos($name, "World") !== false){
    echo "Found";
}else{
    echo "Not Found";
}