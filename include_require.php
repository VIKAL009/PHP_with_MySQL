<?php

include '_dbconnect.php';
// require '_dbconnect.php';
echo 'this';

$sql = "SELECT * FROM `tt1`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo "<br>";
echo $num;
echo "records found in the database<br>";


?>