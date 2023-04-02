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

// function getAuthor()
// {
//     return "Charles Dickens";
// }

// $authorName = getAuthor();
// bookByAuthorYear($authorName);


// String creation

// $currency = "penny";

// $sampleString = "A $currency saved is a $currency earned.\n"; // Adds variable into string

// echo $sampleString;

// $var = 2;

// //echo $var."nd place";
// echo "{$var}nd place";
// echo "\n";
/*
// String built-in functions

$quote = "To be or not to be?, that is the question.";
echo $quote;
echo "\n";


//$quote = strtoupper($quote);

// length of string
$length = strlen($quote);
echo $length;
echo "\n";

// position inside string
echo strpos($quote,"be",5);
echo "\n";

// replace string

$replaced = str_replace("be", "know", $quote,$count);
echo $replaced;
echo "\n";
echo $count;
echo "\n";

// substring

$substring = substr($quote,2,-4);
echo $substring;
echo "\n";

///// Arrays

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");
$books = ["Little Women", "Jane Eyre", "Richard III"];

print_r($books);
print_r($authors);



$authors = array(
        "quarky" => "Charles Dickens",
        "brillian" => "Jane Austin",
        "poetic" => "William Shakespeare"
);

print_r($authors); 


$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain");

array_push($authors, "Louisa May Alcott");
$authors[] = "L.M. Montgomery";

$last_value = array_pop($authors);

echo $last_value;
print_r($authors);

*/

///  For each loop

$authors = array(
    "quarky" => "Charles Dickens",
    "brillian" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

foreach($authors as $key => $val)
{
    echo $val."(".$key.")\n";
}
