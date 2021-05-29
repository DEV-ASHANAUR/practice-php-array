<!-- PHP Associative Arrays -->

<!-- Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array:  -->
<?php
    //one way
    // $age = array('peter'=>'25','ben'=>'24','joe'=>'25');
    // print_r($age);

    //another way

    // $age['peter'] = '25';
    // $age['ben'] = '24';
    // $age['joe'] = '25';

    // print_r($age);

    // Loop Through an Associative Array

    $age = array('peter'=>'25','ben'=>'24','joe'=>'32');
    $arrlen = count($age);

    //foreach 

    foreach($age as $key => $value){
        echo $key." is ".$value." years old <br>";
    }




?>