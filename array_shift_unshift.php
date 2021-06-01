<?php
    //array_shift() use for delete a value at first index or key

    $a = ['red','green','blue'];

    array_shift($a);

    echo '<pre>';
    print_r($a);
    echo '</pre>';

    //array_unshift() use for add  value at first index or key

    $b = ['red','green','blue'];

    array_unshift($b,"yellow");

    echo '<pre>';
    print_r($b);
    echo '</pre>';




?>