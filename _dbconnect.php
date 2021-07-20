<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vk1";
$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn){
    die("sorry we are failed to connect: ".mysqli_connect_error());
}else{
    echo "Connection was succcessful: ";
}
?>