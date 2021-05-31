<?php
    $marks = [
        'Ashanur' => ['physics' => 70, 'math' => 80],
        'rasel' => ['physics' => 65, 'math' => 70],
        'nur' => ['physics' => 75, 'math' => 86],
    ];
    // echo "<pre>";
    //     print_r($marks);
    // echo "<pre>";
            
        foreach($marks as $key => $value){
            echo $key ." ";

            foreach ($value as $key => $v1) {
                echo $v1 ." ";
            }
            echo "<br>";
        }
    echo "</table>";    

?>

