<?php 
//how to use string
//string is a sequence of characters
//string can be declared in 3 ways
//1. single quote
//2. double quote
//3. heredoc syntax
//4. nowdoc syntax
$name = "Ostad";
$name = 'Ostad';

//concatenation
echo "Hello " . $name . "!";
echo "Hello $name!";
echo 'Hello $name!';
echo 'Hello ' . $name . '!';
echo "Hello {$name}!";

$number = 5;
$fruit = "apple";
echo "I have $number {$fruit}s";