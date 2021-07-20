<?php


// $a = readfile("myfiles.txt");
// echo $a;

// readfile("myfiles.txt");
// readfile("vk1.png");
// readfile("vk.html");




// $fptr = fopen("myfiles.txt","r");
// // echo var_dump($fptr);
// if(!$fptr){
    //     die("unable to open this file.Please enter a valid filename");
    
    // }
    // $content = fread($fptr,filesize("myfiles.txt")); 
    // fclose($fptr);
    // echo $content;
    
    
    
    // $fptr = fopen("myfiles.txt","r");-------------------------------------------------------------------key__--->
    // echo fgets($fptr);
    // echo fgets($fptr);
    // echo fgets($fptr);
    // echo var_dump(fgets($fptr));

//     echo '<br>';

// while($a=fgets($fptr)){
//     echo $a;
// }

// echo "End of the file has been reached";
// 


//     echo '<br>';
// echo fgetc($fptr);
// while($a=fgetc($fptr)){
//     echo $a;
//     // break;
// }

// echo "End of the file has been reached";



// while($a=fgetc($fptr)){
//     echo $a;
//     if($a=="."){
//         break;
//     }
// }

// fclose($fptr);

// echo "Welcome vikal";
// $fptr = fopen("myfiles2.txt","w");---------------------------------------------key----->

// fwrite($fptr,"This is best file on this planet. Please dont argue with me on this topic.\n");
// fwrite($fptr,"<br>this is another content\n");
// fwrite($fptr,"<br>this is another content12345\n");

// fclose($fptr);


$fptr = fopen("myfiles2.txt","a");
fwrite($fptr,"This is being appended to th file\n");


fclose($fptr);







?>


