<?php


// credentials
$servername="localhost";
$username="root";
$password="";
$dbName="demoDb";

// create a connection
$conn= mysqli_connect($servername,$username,$password,$dbName);

// checking if it is connected
if(!$conn){
    die("Sorry! failed to connect. ". mysqli_connect_error());
}else{
    echo "Connected !!!";
}
echo "<br>";
echo "<br>";







// create a table in demoDB
$sql= "CREATE TABLE students ( Name VARCHAR(30) NOT NULL ,
                            SchNo VARCHAR(30) NOT NULL PRIMARY KEY,
                            Email VARCHAR(30) NOT NULL,
                            Password VARCHAR(30) NOT NULL )";

$result = mysqli_query($conn,$sql);

if($result){
    echo "The table is created successfully !!!";
}else{
    echo "Sorry !!! Error : ". mysqli_error($conn);
}
echo "<br>";
echo "<br>";







// insert entries into table students in demoDB
$sql= "INSERT INTO students ( Name,SchNo,Email,Password ) VALUES ( 'Nilam' , '1815127', 'nilamkk54438@gmail.com', 'nkk1234')";
$result= mysqli_query($conn,$sql);

if($result){
    echo "The record is inserted into the table !!!";
}else{
    echo "Sorry !!! Error: ". mysqli_error($conn);
}
echo "<br>";
echo "<br>";





?>