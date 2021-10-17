<?php

$name= "Nilam";

echo "My name is ".$name;
echo "<br>";

echo "The length of $name is ". strlen($name); 
echo "<br>";

echo "The no of word in 'I am Nilam' is ". str_word_count("I am Nilam");
echo "<br>";

echo "Hello ". strrev($name);
echo "<br>";

echo "The pos of Nilam in 'Hola I am $name' is ".strpos("Hola I am $name","Nilam");
echo "<br>";

echo str_replace("Nilam","Kuldip","I am $name !!!");
echo "<br>";

echo str_repeat("Nil ",5);
echo "<br>";

echo ltrim("      There were spaces in the left side!!!");
echo "<br>";

?>