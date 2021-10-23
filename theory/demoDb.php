<?php

// credentials
$servername="localhost";
$username="root";
$password="";
$dbname="demoDb";

// create a connection
$conn= mysqli_connect($servername,$username,$password,$dbname);

// checking if it is connected
if(!$conn){
    die("Sorry! failed to connect. ". mysqli_connect_error());
}else{
    echo "Connected !!!";
}
echo "<br>";
echo "<br>";

?>