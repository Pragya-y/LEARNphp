<?php

//Suppose you have a username " john_doe_123 ". Remove any leading or trailing whitespace.
$a=" john_doe_123 ";
echo strlen($a);
$b=trim($a);
echo strlen($b);
// You need to store a password securely in a database. 
//Given a password "myPassword123", hash it using SHA-1.
echo ("<br>");
$password ="myPassword123";
$stored_password = sha1($password);
echo $stored_password;
//You're given a string "Hello World". Transform it into an array where each character is a separate element.
echo("<br>");
$c= str_split("Hello World");
var_dump($c);
//You're comparing two strings: "hello" and "HELLO". Determine if they are equal or not.
echo("<br>");
$d="hello" ;
$e="HELLO";
echo strcmp($d,$e);// 'h' (ASCII value 104) is greater than 'H' (ASCII value 72). d is greater*
//Given the string "hello world", capitalize the first letter.
$f="hello world";
echo ucwords($f);
echo("<br>");
//You're provided with a sentence "this is a test sentence". Capitalize the first letter of each word.
$h="this is a test sentence";
echo ucwords($h);
echo("<br>");
//Suppose you have a paragraph with trailing whitespace in each line. Remove the trailing 
//whitespace from each line.

$i = " Suppose you have a paragraph with trailing whitespace in each line . \nRemove the trailing whitespace from each line. ";

// Use preg_replace to remove trailing whitespace from each line
$cleaned = preg_replace('/[ \t]+$/m', '', $i);//t for each line , '' for space , m for milti line mode
// first line the space between the line and dot are not removedd
echo $cleaned;

 //You have a string "###Hello###". Trim the leading and trailing '#' characters.
$A="###Hello###";
echo trim($A,"#");
//Generate a unique hash for the string "php_language" using SHA-1.
$B = "php_language" ;
echo sha1($B);
//Given a string "racecar", determine if it's a palindrome.
$c=str_split("racecar");
$d=str_split(strrev("racecar"));
for ($i=0;$i<7;$i++){
    if($c[$i]==$d[$i]){
        echo("yes palindrome");
    }
    else {
        echo("no palindrome");
    }
}
//You're provided with a username "jane_doe". Ensure it starts with a capital letter.
$E="jane_doe";
echo ucfirst($E);
 //Given the string "hello world", convert it to uppercase except for the first letter.
$F=str_split("hello world");
echo($F[0]);
for($i=1;$i<count($F);$i++){
    echo strtoupper($F[$i]);
}
//Suppose you have a file containing words in lowercase. 
//Capitalize the first letter of each word and save them to another file.
// File??
$G="the first letter of each word and save them to another file.";
echo ucwords($G);
//Convert the string "hello world" to uppercase.
echo strtoupper("hello world" );
//Given a paragraph with leading whitespace in each line, remove the leading whitespace. =use trim or rtrim or ltrim

//Reverse the string "hello".
echo strrev("hello");
//Compare two strings "HELLO" and "hello" and output whether they are equal, ignoring case differences.
$H="HELLO";
$J="hello";
echo strcasecmp($H,$J);//0 means same*
//### Based on type casting

// You have a variable $num with the value 10. Convert it to a string.
$num=10;
var_dump($num);//int
$Num1=(string)$num;
var_dump($Num1);//string



//Suppose you have a variable $floatNum with the value 3.14. Cast it to an integer.
$K=3.14;
$L= (integer) $K;
var_dump($L);
echo($L);
// You're given a string $numericString with the value "123". Convert it to an integer.
$numericString="123";
$M= (integer) $numericString;
var_dump($M);
//Given a boolean variable $boolVar with the value true, cast it to an integer. how????
//Suppose you have an array $array containing the string "5" and the integer 10. 
//Convert both elements to integers.
$array=array("5",10);
$N=(integer)$array[0];
$O=(integer)$array[1];
var_dump($N);
?>