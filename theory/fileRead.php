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

// reading character by character till * is encountered
$content=fread($fptr,filesize("assests/myFile.txt"));
echo $content;

fclose($fptr);




?>