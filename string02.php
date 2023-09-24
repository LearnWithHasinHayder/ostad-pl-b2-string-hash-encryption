<?php 
//accessing charecters in a string
$name = "Hello World!";
echo $name[0];
echo $name[1];
echo $name[2];

//length of a string
echo strlen($name);

//access part of a string
echo substr($name, 0, 5);
echo substr($name, 6, 5);
echo substr($name, 6);
echo substr($name, -6);
echo substr($name, -6, 3);  

