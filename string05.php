<?php 
//trim
$name = "   Hello World!   ";
// echo $name;
// echo trim($name);
// echo trim($name, " !");
// echo ltrim($name);
// echo rtrim($name);

//pad
echo str_pad($name, 20);
echo str_pad($name, 20, "!");
echo str_pad($name, 20, "!", STR_PAD_LEFT);
echo str_pad($name, 20, "!", STR_PAD_BOTH);

//repeat
echo str_repeat($name, 5);

//shuffle
echo str_shuffle($name);

