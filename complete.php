

<?php

// echo '<h1>Welcome to oops</h1>';
// echo "Lets understand oops";

// class player {
//       // public $name;
//       // public $speed = 5;
//       public $running=false;
//       function setname($name){
//             $this->name=$name;
//       }
//       function getname(){
//             return $this->name;
//       }
//       function run() {
//             $this->running=true;
//       }
//       function stoprun() {
//             $this->running=false;
//       }
// }

// $player1 = new player();
// $player2 = new player();
// $player1->setname("vikal kumar");
// echo '<br>';
// echo $player1->getname();
// echo '<br>';
// $player2->name="vimalkk";
// echo $player2->getname();



// ----------------------------------------------------------------------------------------------------------------------------------------------------------->>


// echo "<h4>Welcome to scope of varibles :</h4>";
// $a=40;
// function add(){
//      global $a;
//       $b=20;
//       echo $b;
//       echo "<br>";
//       echo $a;
// }
// add();
// echo "<br>";
// echo $a;
// echo "<br>";








////////////////////////
//////////////lecture 10------>

// echo "<h4>Welcome to the world of 2D arrays : <h4>";

// $a = array(
//            array(1,2,3,4),
//            array(4,5,6,5),
//            array(6,7,8,3),
//            array(1,2,3,4)
// );

// //echo var_dump($a);
// //echo $a[1][2];
// //echo count($a);
// for($i=0;$i<count($a);$i++){
//     for($j=0;$j<count($a[$i]);$j++){
//         echo $a[$i][$j];
//         echo "        ";
//     }
//     echo "<br>";
// }




// echo "<h4>Welcome to the world of Associated array :</h4>"; 
// $a = array("1"=>"vikal","2"=>"vimal","3"=>"abdhesh");
// //echo $a["7"];
// foreach($a as $c=>$b){
//     echo "the name at $c is $b";
//     echo "<br>";
// }










//////////////lecture 9------>



// echo "<h4>Welcome to dates in PHP :</h4>";
// echo  date("l jS \of F Y h:i:s A");
// echo "<br>";
// $q=date('l \t\h\e jS');
// $year = date ("Y");
// echo "Copyright $year | All rights are reserved :";
// // echo date('l \t\h\e jS');
// echo "<br>";
// echo "<br>";
// echo $q;
// echo "<br>";
// echo "<br>";
// echo date("l");
// echo "<br>";
// echo date("d");
// echo "<br>";
// echo date("D");
// echo "<br>";
// echo date("s");
// echo "<br>";
// echo date("y");
// echo "<br>";
// echo date("Y");
// echo "<br>";
// echo date("A");
// echo "<br>";
// echo date("M");
// echo "<br>";
// echo date("m");
// echo "<br>";
// echo date("ds");
// echo "<br>";








//////////////lecture 8------>


// $a =array(1,2,3,4,5);
// $a=[1,2,3,4,5];
// function add($a){
//     $sum=0;
//     foreach($a as $b){
//        $sum+=$b;
//     }
//     return $sum;
// }
// function avg($a){
//     $sum=0;
//     $i=0;
//     foreach($a as $b){
//        $sum+=$b;
//        $i++;
//     }
//     return $sum/$i;
// }


// echo add($a);
// echo "<br>";
// echo avg($a);








//////////lecture 7------>


// function add( int $a,int $b){
//      return  $a+$b;
// }

// echo "the sum is : " . add(3,8);



// echo "<h4>Welcome to loops in PHP :</h4>";

// $a=array("vikal","vimal","abdhesh","vikal","vimal","abdhesh");
// foreach($a as $b){
//     echo "<br> print : ".$b;
// }






///////lecture 6------>




// $i=0;
// do{
//     echo "<br> print : " .$i;
//     $i++;
// }while($i<4);



// echo "<br>";
// for($i=0;$i<5;$i++){
//     echo "<br> the value of i is : ";
//     echo $i;
// }



// echo "<br>";
// echo "<br>";
// //while loop :
//     $i=0;
//    while($i<5){
//     echo "The value of i is : " . ($i+1);
//    // echo ($i+1);
//     echo "<br>";
//     $i++;
// }





////lecture 5------>


// $age=4;

// switch($age){
//     case 12:
//         echo "<br> you are 12 years old :";
//       break;
//     case 25:
//         echo "<br> you are 25 years old :";
//       break;
//     case 40:
//         echo "<br> you are old baby :";
//       break;  
//     default:
//         echo "<br> you are new born baby :";
//       break;  
// }









////lecture 4------>


// $age=14;

// if($age>18){
//     echo "you can drink bear";
// }
// elseif($age>13){
//     echo "you can drink tea";
// }else{
//     echo "you can drink water only";
// }


// if($age>18){
//     echo "<br>you can drink bear";
// }
// if($age>13){
//     echo "<br>you can drink tea";
// }else{
//     echo "<br>you can drink water only";
// }






////lecture 3---->



// $a=array(1,2,3,4,5);
// echo var_dump($a[0]);
// $x=false;
// $y=true;
// echo "<br>";
// echo var_dump($x);
// echo "<br>";
// echo var_dump($y);
// echo "<br>";

// //arithmetic operators
// $a=5;
// $b=4;
// echo "the value of a+b is ". ($a+$b)."<br>";
// echo "the value of a+b is ". ($a+$b)."<br>";
// echo "the value of a-b is ".($a-$b)."<br>";
// echo "the value of a/b is ".($a/$b)."<br>";
// echo "the value of a%b is ".($a%$b)."<br>";
// echo "the value of a**b is ".($a**$b)."<br>";









//////lecture 2------>


// $b="abcd";
// echo $b;
// $a="vikal is a good boy";
// echo "<br>";
// echo $a;
// echo "<br>";
// echo "the length"." of string is "  . '67' . strlen($a) . 88 ."57 . 01" ;
// echo "<br>";
// echo str_word_count($a);
// echo "<br>";
// echo strrev($b);
// echo "<br>";
// echo strpos($a,"good");
// echo "<br>";

// echo str_replace("vikal","vimal",$a);
// echo "<br>";
// echo str_repeat($a,4);
// echo "<br>";
// echo "<pre>";
// echo rtrim("          my name is allahabad        ");
// echo "<br>";
// echo "</pre>";
// echo ltrim("      my name is");
// echo "<br>";
// echo "<pre>";
// echo "          my name is allahabad m       m";
// echo "</pre>";








//////lecture 1 PHP------->


// Echo "this is tut 5<br>";
// echo "this is tut 5<br>";
// //variables are case sensitive while echo is not:
// $name="anurag";
// $namE='vikal';
// $income=20.9;
// echo "my name is $name and my income is $income rs<br>";
// echo "$namE is a good boy<br>";
// echo "$namE is a real gangstar<br>";
// echo "vikal '$name'";
// echo "<br>";
// echo var_dump($name);
// echo "<br>";
// $a = array("vikal","vimal","abdhesh");
// echo var_dump($a);
// echo "<br>";
// echo $a[0];
// echo "<br>";
// echo $a[0];
// echo "<br>";
// echo $a[1];
// echo "<br>";
// echo $a[2];$name=NULL;
// echo "<br>";
// echo var_dump($name);

?>