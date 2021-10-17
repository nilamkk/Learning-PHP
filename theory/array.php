<?php

// 1. indexed array
// Creat
$names= array("Nilam", "Kuldip","Binod");
// access
echo "The first element in the list is $names[0] <br>";
// Traverse (can also be done with length loop )
forEach($names as $name){
    echo $name."<br>";
}
// count
echo "The length of the names array is ". count($names). "<br>";
echo "<br>";
echo "<br>";
echo "<br>";







// 2. associative array
// create
$nameAge=array("Nilam"=>21, "Kuldip"=>17);
// access
echo "The first element in the list is " . $nameAge['Nilam'] . "<br>";
// traverse
forEach($nameAge as $na => $ag){
    echo "$na is $ag years old. <br>";
}
// count
echo "The length of the nameAge array is ". count($nameAge). "<br>";
echo "<br>";
echo "<br>";
echo "<br>";








function printArray($arr, $type="associative"){
    echo "<br>******** ";
    if( $type=="indexed"){
        forEach($arr as $val){
            echo $val." ";
        }
    }else{
        forEach($arr as $key => $val){
            echo "$key has value $val   ";
        }
    }
    echo "********<br>";
}






//3. sorting arrays
// sort() - sort arrays in ascending order
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
printArray($cars,"indexed");
// rsort() - sort arrays in descending order
rsort($cars);
printArray($cars,"indexed");


// asort() - sort associative arrays in ascending order, according to the value
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
printArray($age);
// ksort() - sort associative arrays in ascending order, according to the key
ksort($age);
printArray($age);
// arsort() - sort associative arrays in descending order, according to the value
arsort($age);
printArray($age);
// krsort() - sort associative arrays in descending order, according to the key
krsort($age);
printArray($age);

echo "<br>";
echo "<br>";
echo "<br>";






//4. multi dimensional array
// create
$carsTwo = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
// access
echo $carsTwo[0][0].": In stock: ".$carsTwo[0][1].", sold: ".$carsTwo[0][2].".<br>";

?>