<!-- PHP - Multidimensional Arrays -->

<!-- A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people. -->


<?php
    $emp = [
        [1,"Ashanaur","ceo",70000],
        [2,"shagor","manager",50000,1000],
        [3,"Rasel","designer",30000],
        [2,"rukon","manager",50000,1000],
        [3,"nasim","designer",30000]
    ];

    // echo $emp[0][0]; //we print like this
    // echo count($emp); //count row
    // echo count($emp[1]); //count collumn
    //try this for loop
    // for ($row = 0; $row < count($emp); $row ++) { 
    //     for ($col = 0; $col < count($emp[$row]); $col++) { 
    //             echo $emp[$row][$col]." ";
    //     }
    //     echo "<br>";
    // }
    //try this foreach loop
    foreach ($emp as  $value) {
        foreach ($value as $v1) {
            echo $v1 ." ";
        }
        echo "<br>";
    }




?>