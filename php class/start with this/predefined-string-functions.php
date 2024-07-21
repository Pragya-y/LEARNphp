<?php 
//string functions:
$name = 'Rohit Sharma hello a'; //5
//echo strlen($name); //used to count the characters in a string
//str_word_count()
// str_word_count($name);//used to count the number of words in string/sentence
// strrev(): string reverse
$name = "ROHIT"; //5
//echo strrev($name);
//0


//array
$arr = [10,20,30];//elements 

//echo $arr[2];

$name = "ROHIT"; //string is an array of characters

//echo $name[4];
echo strpos($name,"Z"); //null

var_dump(strpos($name,"Z"));

//we can't echo null,array, objects, boolean(true or false)


//to print an array we use print_r()
print_r($arr);
//
//var dump can print any type of data type
//var_dump($name);


//echo 
//print_r()
//var_dump()
?>