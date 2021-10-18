<?php


// credentials
$servername="localhost";
$username="root";
$password="";

// create a connection
$conn= mysqli_connect($servername,$username);

// checking if it is connected
if(!$conn){
    die("Sorry! failed to connect. ". mysqli_connect_error());
}else{
    echo "Connected !!!";
}
echo "<br>";
echo "<br>";






// create a db
$sql="create database demoDb";
$result= mysqli_query($conn, $sql);

if( $result ){
    echo "The database is created successfully !!!";
}else{
    echo "Sorry!! Error: ". mysqli_error($conn);
}
echo "<br>";
echo "<br>";

?>