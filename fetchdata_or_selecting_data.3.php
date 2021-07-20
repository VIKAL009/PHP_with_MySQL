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
$sql = "SELECT * FROM `tt1` WHERE nam='123'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo "<br>";
echo $num;
echo "records found in the database<br>";
if($num>0){
   
//    $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    while($row=mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        // echo $row['sno']."hello".$row['name']." ".$row['concern'].$row['dt'];
        // echo "<br>";
        // echo $row['sno.']."hello".$row['nam'] ;
        // echo "<br>";
      
    }

}
?>