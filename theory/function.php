<?php declare(strict_types=1); // strict requirement; This must be on the very first line of the PHP file.

// 1. Function with arguments
// NOTE: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.
function printB($name){
    echo "<br>********* ";   
    echo "The name sent is ".$name;
    echo " *********<br>";
}
printB("Nilam");


//2. default argument values
function printBDef($name="XXX"){
    echo "<br>********* ";   
    echo "The name sent is ".$name;
    echo " *********<br>";
}
printBDef("Nilam");
printBDef();


//3. pass by reference
$num=3;
echo "<br>Old number is $num <br>";
function addTwo(& $n){
    $n+=2;
}
addTwo($num);
echo "<br>New number is $num <br>";



//4. strict mode arguments
function addNumbers(int $a, int $b) {
    return $a + $b;
}
// echo addNumbers(5, "5 days");  // It will give error in strict mode
echo "<br>";
echo "The added numbers are: ". addNumbers(5, 5);
echo "<br>";



//5. specify return type
function addNumbersFloat(float $a, float $b) : float {
    return $a + $b;
}
echo "<br>";
echo "The added numbers are: ". addNumbersFloat(1.2, 5.2);
echo "<br>";




?>
