<!-- array_push() use for add value to the array at end  -->

<?php
    $a = ['apple','banana','guava'];

    array_push($a,'orange','lichi');

    echo '<pre>';
    print_r($a);
    echo '</pre>';

    //array pop() use for deleteing value to the array at end

    $b = ['red','green','blue'];

    array_pop($b);
    
    echo '<pre>';
    print_r($b);
    echo '</pre>';

?>