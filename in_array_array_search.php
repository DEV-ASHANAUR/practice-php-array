<!-- in_array() method return 0 or 1 if value is existing  -->
<!-- array_search() method return index/key if value is existing  -->

<?php
    $item = ['apple','bannana','mango'];

    echo in_array('apple',$item); // its return 1
    echo array_search('mango',$item); // its return index number



?>