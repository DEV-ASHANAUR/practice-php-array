<!-- 
    array_slice($array,start,lenght,false); by default false use for new array start index from 0  
    array_slice($array,start,lenght,true); use for new array actual index number
-->


<?php

$name = ['ashanur','rahman','rakib','tamim'];
//positive value count from start 
// $newArray = array_slice($name,1,2);
//negitive value count from end 
$newArray = array_slice($name,-2,2,true);
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>