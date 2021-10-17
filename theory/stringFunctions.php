<?php

$name= "Nilam";

echo $name;
echo "<br>";

echo "The length is ". strlen($name); 
echo "<br>";

echo "The no of word is ". str_word_count("I am Nilam");
echo "<br>"

echo "Hello ". strrev($name);
echo "<br>";

echo strpos("Hola I am $name","Nilam");
echo "<br>";

echo str_replace("Nilam","Kuldip","I am $name !!!");
echo "<br>";

echo str_repeat("Nil ",5);
echo "<br>";

echo ltrim("      There is space in the left side!!!");
echo "<br>";

?>