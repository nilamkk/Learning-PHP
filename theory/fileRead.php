<?php

$fptr= fopen("assests/myFile.txt","r");
if(!$fptr)
    die("Failed to open the file !!!");

// reading line by line
while($content=fgets($fptr)){
    echo $content;
}
fclose($fptr);

echo "<br>";
echo "<br>";
echo "<br>";


$fptr= fopen("assests/myFile.txt","r");
if(!$fptr)
    die("Failed to open the file !!!");

// reading character by character till * is encountered
while($content=fgetc($fptr)){
    if($content=='*')
        break;
    echo $content;
}
fclose($fptr);

echo "<br>";
echo "<br>";
echo "<br>";



$fptr= fopen("assests/myFile.txt","r");
if(!$fptr)
    die("Failed to open the file !!!");

// reading file given the size of the characters
$content=fread($fptr,filesize("assests/myFile.txt"));
echo $content;

fclose($fptr);

echo "<br>";
echo "<br>";
echo "<br>";



$fptr= fopen("assests/myFileW.txt","w");
if(!$fptr)
    die("Failed to open the file !!!");

// writing to the file
$content=fwrite($fptr,"I am writing these to myFileW.txt\n\n");
echo $content;

fclose($fptr);
echo "<br>";
echo "<br>";
echo "<br>";



$fptr= fopen("assests/myFileW.txt","a");
if(!$fptr)
    die("Failed to open the file !!!");

// appending to the file
$content=fwrite($fptr,"I am appending these to myFileW.txt\n\n");
echo $content;

fclose($fptr);












?>