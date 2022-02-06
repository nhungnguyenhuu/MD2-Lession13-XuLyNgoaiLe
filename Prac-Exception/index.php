<?php
include_once "DivideByZeroException.php";

function divide($numerator, $denominator){
    if($denominator ===0){
        throw new DivideByZeroException();
    }
    return $numerator/$denominator;
}
try{

    $result = divide(10, 5);
    echo $result;
    echo "<br>";

    $result = divide(10, 0);
    echo $result;
} catch (DivideByZeroException $exception){
    echo 'Co loi xay ra: '.$exception;
}
