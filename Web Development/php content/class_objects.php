<?php

/// Class definition

class Person
{
    public $firstName = "Samuel Langhorne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;
}

$myObject = new Person();

echo $myObject -> firstName;
echo "\n";

$myObject->firstName = "L.S";
echo $myObject -> firstName;