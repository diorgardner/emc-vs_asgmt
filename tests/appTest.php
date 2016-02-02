<?php

// File: appTest.php
//
// Author: Dior Gardner diorgardner@gmail.com
// version: 0.1
// 2016.02.02

require realpath(dirname(__FILE__)) . '/../app.php';

class AppTest extends PHPUnit_Framework_TestCase
{
    public function testFib () {
        $excpected = array(1,2,3,5,8,13);
        $actual = processFib(5);
        $this->assertEquals($excpected, $actual);
    }

    public function testHandleRequest () {
        $excpected = array('error' => 'You must pass a number');
        $actual = handleRequest('BadNumber');
        $this->assertEquals($excpected, $actual);

        $excpected = array('error' => 'You must pass a number greater than 0');
        $actual = handleRequest('-1');
        $this->assertEquals($excpected, $actual);

        $excpected = array('result' => array(1,2,3,5,8,13));
        $actual = handleRequest(5);
        $this->assertEquals($excpected, $actual);
    }
}
?>
