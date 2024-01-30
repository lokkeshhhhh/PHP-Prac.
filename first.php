<?php

// echo "hello";

$LOKESH = 19;

$lOKESH = '19';

if($lOKESH==$LOKESH){
    // echo "Lokesh";
}


// $lOKESH===$LOKESH ?echo "A": echo "B";

// echo str_word_count("lokesh kumawat is a good boy!");

// echo var_dump((array) 23)

$array = array(1,2,3,4);
// $array[5] = 9;

for($i=0;$i<count($array);$i++){
    // echo $array[$i];
}
$i=1;
do {
    
    if($i==5){ $i++; break;}
// echo "<br> $i";
$i++;
} while ($i<=10);




$array = array(2, 3, 4, 5);

foreach ($array as $x => $y){
    // echo " <div style='color:darkgreen;'>$x : $y <br><br></div>" ;
}


// destructuring

$myArray = array(11,22,33,44,55,66);
[$a, $b, $c, $d, $e, $f] = $myArray;
// echo $f;

// multidimensional array

$lArray = array(1,[2,3,4],5,6);

// echo $lArray[1][0];


// var_dump($lArray);

$ad = array("Lokesh" => "Kumawat");
array_push($ad, "Anushka");
// echo $ad["lokesh"];

foreach($ad as $key=>$value){
    // echo "<div style='color:blue;cursor:pointer'>$key  $value</div>";
}


$myArray02= [1,2,3,4,5, "lokesh"=>"Anushka"];

// echo $myArray02["lokesh"];





























































?>
