<?php
  

  // while loop 


$i=1;
while($i<10){
    echo $i." "."Print i";
    echo "<br>";
    $i++;
}



echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";


   // do while loop 



$i=1;
do{
    echo $i;
    $i++;
}while($i<=10);



echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

// $i=12;
// do{
//     echo $i;
//     $i++;
// }while($i>10);


echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";


// For loop 


for($i=1; $i<=10; $i++){
    echo "<br>";
    echo $i;
}


echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

// forEach loop

$arr=array("Memoon"," ", "Ali");

foreach($arr as $a){

echo $a;
}

echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";


// Replace function

$name=("Memoon Ali");

$name=str_replace("Ali","Zulfiqar", $name);

echo $name;