<?php 
//hashing
$name = "Hello World!";
echo md5($name);
echo sha1($name);
echo crypt($name, "salt");

//compare
echo strcmp("Hello", "Hello");
echo strcmp("Hello", "hello");
echo strcmp("hello", "Hello");
echo strcmp("Hello", "Hello World!");
echo strcmp("Hello World!", "Hello");


