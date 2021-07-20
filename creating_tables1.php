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


$sql="CREATE TABLE `tt3` ( `sno` INT(8) NOT NULL AUTO_INCREMENT ,
`marks1` INT(8) NOT NULL , `marks2` INT(8) NOT NULL , PRIMARY KEY (`sno`))";
$return = mysqli_query($conn,$sql);
if($return){
    echo "the table was created successfully";
}else{
    echo "the table was not created successfully----> ".mysqli_error($conn);

}



?>