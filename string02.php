<?php 
//accessing charecters in a string
$name = "Hello World!";
echo $name[0];
echo $name[1];
echo $name[2];

//length of a string
echo strlen($name);

//loop through a string
for($i = 0; $i < strlen($name); $i++){
    echo $name[$i];
}

//access part of a string
echo substr($name, 0, 5);
echo substr($name, 6, 5);
echo substr($name, 6);
echo substr($name, -6);
echo substr($name, -6, 3);  

