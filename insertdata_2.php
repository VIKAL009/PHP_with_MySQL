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
$sql = "INSERT INTO `tt1` (`name`, `email`, `concern`, `dt`)
 VALUES ('vikal', 'v@v', 'desc', current_timestamp())";
$return = mysqli_query($conn,$sql);
if($return){
    echo "the record was inserted successfully";
}else{
    echo "the record was not inserted successfully----> ".mysqli_error($conn);

}





?>