<?php

// 1. PHP has three different variable scopes: local, global , static

// 2. local: A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();
// using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";





// 3. global: A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.
$x = 5; // global scope
function myTestG() {
  // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
}
myTestG();
echo "<p>Variable x outside function is: $x</p>";





// 4. The global keyword is used to access a global variable from within a function.
$x = 5;
$y = 10;
function myTestGG() {
  global $x, $y;
  $y = $x + $y;
}
myTestGG();
echo $y; // outputs 15
echo "<br>";
echo "<br>";




// 5. PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
$x = 5;
$y = 10;

function myTestGL() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTestGL();
echo $y; // outputs 15
echo "<br>";
echo "<br>";






// 6. static: static variables are created once and lasts for the entire life of the program
function myTestS() {
    static $x = 0;
    echo $x;
    $x++;
}

myTestS();
echo "<br>";

myTestS();
echo "<br>";

myTestS();
echo "<br>";


?>