<?php   
session_start();
if(isset( $_SESSION['username'])){
    echo "welcome" . $_SESSION['username'];
    echo "<br> Your favorite category  is " . $_SESSION['favcat'];
}
else{
    echo "Please login to continue";
}

?>