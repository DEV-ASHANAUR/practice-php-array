<!-- array_splice(array-1,start,length,array-2); 
    array_splice() use for different useses
-->

<?php

$color = ['red','green','blue','yellow'];

$fruit = ['orange','banana'];

//array_splice($array,start_index) delete all value to the starting index

// array_splice($color,1);

// array_splice($color,1,-1); // delete value index 1 to before last

// array_splice($color,0,2,$fruit); //replice value
array_splice($color,1,0,$fruit); //add value

echo "<pre>";
print_r($color);
echo "</pre>";



?>