<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";
$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("sorry we are failed to connect: ".mysqli_connect_error());
}else{
    echo "Connection was succcessful: ";
}

$sql = "DELETE FROM `contact us2` WHERE `concern` = 'desc' LIMIT 10";
$result = mysqli_query($conn, $sql);
echo var_dump($result);

$aff = mysqli_affected_rows($conn);
echo "<br>the number of rows affected are : $aff";

if($result){
    echo "we deleted the record successfully!";
}else{
    $err = mysqli_error($conn);
    echo "we could not deleted the record successfully! due to error--> $err";   
}


?>