<!-- php array -->

<!-- An array stores multiple values in one single variable: -->

<!-- Create an Array in PHP -->

<!-- In PHP, the array() function is used to create an array: -->

<!-- In PHP, there are three types of arrays: -->


    <!-- 1.Indexed arrays - Arrays with a numeric index
         2.Associative arrays - Arrays with named keys
         3.Multidimensional arrays - Arrays containing one or more arrays -->


         <!-- PHP Indexed Arrays -->
         <!-- There are two ways to create indexed arrays:
            The index can be assigned automatically (index always starts at 0), like this: -->

<?php
    $cars = array("Volvo", "BMW", "Toyota");
    // echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
 

// or the index can be assigned manually:

    // $cars[0] = "Volvo";
    // $cars[1] = "BMW";
    // $cars[2] = "Toyota";

    // Loop Through an Indexed Array

    $arrlen = count($cars);
    // echo $arrlen;
    for($i = 0; $i < $arrlen; $i++){
        echo $cars[$i]."<br>";
    }


?>