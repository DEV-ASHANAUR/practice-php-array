<!-- list() function use for multidimention array -->


<?php
    // $sudents = [
    //     ['ashanur',54,52,65],
    //     ['sakib',54,52,65],
    //     ['rubel',54,52,65],
    //     ['nur',54,52,65],
    //     ['rasel',54,52,65],

    // ];

    // // print_r($sudents);

    // foreach ($sudents as list($name,$physics,$math,$english)) {
    //     echo $name . " -> Physics - ".$physics." Math - ".$math. " English - ".$english."<br>";
    // }

    //now see another example

    $student = [
        [
            'id' => 1,
            'name' => 'Ashanur',
            'math' => 80,
            'english' => 60
        ],
        [
            'id' => 1,
            'name' => 'Rasel',
            'math' => 80,
            'english' => 60
        ],
        [
            'id' => 1,
            'name' => 'Shagor',
            'math' => 80,
            'english' => 60
        ],
    ];

    foreach($student as list('id' => $id, 'name' => $name,'math' => $math, 'english' => $eng)){
        echo $id."."." Name - ".$name." Math - ".$math." english - ".$eng."<br>"; 
    }




?>