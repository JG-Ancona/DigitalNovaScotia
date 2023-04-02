<?php

/// Class definition

/**
 * Summary of Person
 */
class Person
{
    const AVG_LIFE_SPAN = 79;
    public $firstName;
    public $lastName;
    public $yearBorn;

    // function __construct()
    // {
    //     $firstName = "Samuel Langhorne";
    //     $lastName = "Clemens";
    //     $yearBorn = 1899;
    // }

    function __construct($tempFirst = "",$tempLast = "",$tempBorn = "")
    {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public function getFirtsName()
    {
        return $this->firstName;
    }

    public function setFirtsName($tempName)
    {
        $this->firstName = $tempName;

    }

}

$myObject = new Person("Samuel","Adams",1899);

/*
echo $myObject -> firstName;
echo "\n";

$myObject->firstName = "L.S";
echo $myObject -> firstName;


echo $myObject->setFirtsName("Sam");
*/
echo "\n";
echo $myObject->getFirtsName();