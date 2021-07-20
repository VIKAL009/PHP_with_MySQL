<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password);

//"DROP DATABASE `vk61`"

$sql="CREATE DATABASE vk1";
$return = mysqli_query($conn,$sql);

echo "<br>";
echo "the result is : ";
echo var_dump($return);
echo "<br>";
if($return){
    echo "the db was created successfully";
}else{
    echo "the db was not created successfully----> ".mysqli_error($conn);

}
echo "<br>";

// if(!$conn){
//     die("sorry we are failed to connect: ".mysqli_connect_error());
// }else{
//     echo "Connection was succcessful: ";
// }


?>