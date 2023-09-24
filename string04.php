<?php 
//search and replace
$name = "Hello World!";
echo str_replace("World", "PHP", $name);
echo str_replace("o", "O", $name);
echo str_replace("o", "O", $name, $count);
echo $count;

//replace all vowels with *
echo str_replace(array("a", "e", "i", "o", "u"), "*", $name);

//replace a character single time
echo substr_replace($name, "O", 4, 1);
echo substr_replace($name, "O", -6, 1);

//replace all
echo strtr($name, "o", "O");