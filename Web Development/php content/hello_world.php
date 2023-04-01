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

    //var_dump((bool)$hasValue);

//Define constants

//    define('NEW_CONSTANT', "Hello World");

//    echo NEW_CONSTANT;

//Functions

    function listOfBooks()
    {
        echo "Hamlet\n";
        echo "Shakespeare, William\n";
    }

//listOfBooks();

//  function bookByAuthor($AuthorName)
//  {
//     echo $AuthorName;
//  }

//  bookByAuthor("William Shakespeare");

//  $authorName = "William Shakespeare.";

//  bookByAuthor($authorName);

 //function with defined parameter

 function bookByAuthorYear($tempAuthorName,$tempYear = 1910)
 {
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
    echo "\n";
 }

//  $year = 1920;
//  $authorName = "William Shakespeare";

//  bookByAuthorYear($authorName);

// Return value from function

function getAuthor()
{
    return "Charles Dickens";
}

$authorName = getAuthor();
bookByAuthorYear($authorName);
