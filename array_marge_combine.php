<!-- 
    array_merge() -> index or accociative array
    array_merge_recursive() => multidimention array
    array_combine() -> index array 
-->
<?php
    
// $a = ['a'=>'ashanur','b'=>'rahman','c'=>'aksh'];
// $b = ['d'=>'nur','shobuj'];

// // array_merge() use for add two or many array

// $newArray = array_merge($a,$b);

// echo '<pre>';
// print_r($newArray);
// echo '</pre>';

// $a = ['a'=>'ashanur','b'=>'rahman','c'=>'aksh'];
// $b = ['b'=> ['color'=>['red','green']],'shobuj'];

// // array_merge_recursive() use for add two or many multidimentional array
// // if have any common index or key it's make multidimention array
// $newArray = array_merge_recursive($a,$b);

// echo '<pre>';
// print_r($newArray);
// echo '</pre>';

// array_combine() use for as a first array would be key and second array would be value;

$name = ['rahim','karim'];
$age = [20,25];

$newArray = array_combine($name,$age);

echo '<pre>';
print_r($newArray);
echo '</pre>';










?>