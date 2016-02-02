<?php

// File: app.php
//
// Author: Dior Gardner diorgardner@gmail.com
// version: 0.1
// 2016.02.02


//Function to accept a number and return a Fibonacci sequence
function processFib ($number) {
    $x = 0;
    $y = 1;

    $numbers = array();
    for($i = 0; $i <= $number; $i++) {
        $z = $x + $y;

        array_push($numbers, $z);

        $x = $y;
        $y = $z;
    }
    return $numbers;
}

//Function to validate input number, call the Fibonacci function, and return the result.
function handleRequest ($param) {

    if (!is_numeric($param)) {
        return array('error' => 'You must pass a number');
    }

    $number = intval($param);
    if ($number < 1) {
        return array('error' => 'You must pass a number greater than 0');
    }

    $result = processFib($number);
    return array('result' => $result);
}
?>
