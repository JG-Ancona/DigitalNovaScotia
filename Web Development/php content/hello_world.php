<?php
//Type of variables in php

    $regInt = -1234;

    $octNum = 01234;

    $binaryNum = 0b1000;

    $float = 1.234;

    $scientific = .1234E4;

    $scientific = 1234E-4;

    $bool = false;

    $hasValue = "Hello World";

    var_dump((bool)$hasValue);

//Define constants

    define('NEW_CONSTANT', "Hello World");

    echo NEW_CONSTANT;