<?php 

//Write a PHP function named calculateArea that takes the radius of a circle as a parameter and returns the 
//area of the circle. Used in: A geometry calculation tool.

function calculateArea($r=10){
    $area=pi()*($r*$r);
    return $area;

}

echo "area of the circle defualt  -  ".calculateArea()."<br>";
echo "area of circle wghen the parameter 20 is passed  -  ".calculateArea(20)."<br>"."<br>";

//Write a PHP function named greetUser that takes a user's name as a parameter and prints "Hello, [name]!". 
//Used in: A personalized greeting system on a website.

function greeter($name= "jerad"){
    echo "Hello, $name!"."<br>";
}

echo greeter();
echo greeter("mimi")."<br>";

//Write a PHP function named sumNumbers that takes two numbers as parameters and returns their sum. 
//Used in: A simple calculator application.
function  sumNumbers($a=2,$b=3){
    $sum=$a+$b;
    return $sum;
}

echo sumNumbers()." default answer"."<br>";
echo sumNumbers(5,5)." parameter sent answer"."<br>"."<br>";

//Write a PHP function named isEven that takes a number as a parameter and returns true if the number 
//is even and false otherwise. Used in: A number validation tool.

function isEven($e=7){
    if ($e%2==0){
        return true;
    }else{
        return false;
    }
}
echo isEven()." defualt answeerr <br>";
echo isEven(2)." parameter answeerr <br>"."<br>";

//Write a PHP function named generatePassword that takes an optional parameter for the length of the 
//password (default to 8) and returns a random password of the specified length. Used in: An account creation system.
//dpubt

//Write a PHP function named convertToUpperCase that takes a string as a parameter and returns the string in uppercase. Used in: A text formatting tool.

function convertToUpperCase($t="mkasjdhasfhg"){
    echo strtoupper($t)."  answer after conversion to upper case"."<br>";
}
convertToUpperCase("takes a string as a parameter"); 
convertToUpperCase("A number validation tool");echo("<br>");

//Write a PHP function named calculateDiscount that takes the original price and the discount percentage as 
//parameters and returns the discounted price. Used in: An e-commerce platform for applying discounts.

function calculateDiscount($price=100,$d=0.10){
    $afterD=$price-($price*$d);
    return $afterD;
}
echo "giver original price and discaopunt as parameter"."<br>";
echo "defualt - ".calculateDiscount()."<br>";
echo "parametr 400,0.25 -".calculateDiscount(400,0.25)."<br>";
echo "parametr 100,(30/100) -".calculateDiscount(100,(30/100))."<br>"."<br>";

//Write a PHP function named isPalindrome that takes a string as a parameter and returns true if the 
//string is a palindrome and false otherwise. Used in: A word game application.

function  isPalindrome($pali="tat"){
    if($pali==strrev($pali)){
        echo $pali." - yes palindrom duh"."<br>";
    }else{
        echo $pali."-  not palindrom duh"."<br>";
    }
} 
isPalindrome();
isPalindrome("mummy");
isPalindrome("caliimng");
isPalindrome("malayalam");

echo("<br>");

//Write a PHP function named getFullName that takes two parameters, first name and last name, and 
//returns the full name. Used in: A user profile management system.

function getFullName($fn="pri",$ln=" shi"){
    $fullname = ucwords($fn." ".$ln);
    return "Hello"." ".$fullname;
}

echo getFullName();echo("<br>");
echo getFullName("pragya","yadav");echo("<br>");
echo getFullName("tia","Sharma");
echo("<br>");echo("<br>");

//Write a PHP function named findMax that takes an array of numbers as a parameter and returns the largest number. 
//Used in: A statistical analysis tool.

function findMax($m=[2,34,11,55,67]){
    $max= max($m);
    return $max;
}
echo findMax()."defualt anwser"."<br>";
echo findMax([22,33,44,55,66,11])." parameter passed anwer"."<br>";
echo findMax([100,12,222,333,452])." parameter passed anwser"."<br>"."<br>";

//Write a PHP function named calculateBMI that takes weight (kg) and height (m) as parameters and returns the 
//Body Mass Index (BMI). Used in: A health and fitness application.

function calculateBMI($height=1.64,$weight=75){
    $BMI= $height/($weight*$weight);
    if($BMI>25){
        echo "overweight"."<br>";
    }elseif(18<$BMI && $BMI <25){
        echo "Helathy"."<br>";
    }else {
        echo "underrweight"."<br>";
    }
    return $BMI;

}

echo "the bmi is ".calculateBMI()." defualt answer"."<br>";
echo "the bmi is ".calculateBMI(1.70,80)." parameter answer"."<br>";
echo "the bmi is ".calculateBMI(1.50,80)." parameter answer"."<br>";
echo "the bmi is ".calculateBMI(1.59,45)." parameter answer"."<br>"."<br>";

//some fault
//Write a PHP function named sendEmail that takes recipient email, subject, and message as parameters 
//and sends an email. Used in: An automated email notification system.

//Write a PHP function named convertToFahrenheit that takes a temperature in Celsius as a parameter 
//and returns the temperature in Fahrenheit. Used in: A weather forecasting application.

function convertToFahrenheit($c=0){
    $fahrenheit=($c * 9/5) + 32;
    return $fahrenheit;

}
echo convertToFahrenheit()." default on 0. degree celcius"."<br>";
echo convertToFahrenheit(15)." - parameter"."<br>";
echo convertToFahrenheit(100)."<br>"."<br>";

//Write a PHP function named applyTax that takes an amount and an optional tax rate (default to 0.05) as 
//parameters and returns the total amount after applying tax. Used in: A billing system.

function applyTax($ammount=100,$TaxRate=0.05){
    $totalAmount = $ammount +($ammount*$TaxRate);
    return $totalAmount;
}
echo applyTax()." tax ammount <br><br>";

//Write a PHP function named reverseString that takes a string as a parameter and returns the reversed 
//string. Used in: A text manipulation tool.

function reverseString($s="manipulation"){
    return strrev($s);

}

echo reverseString()."<br>";
echo reverseString("function")."<br><br>";

//Write a PHP function named calculateAverage that takes an array of numbers as a parameter and returns the 
//average. Used in: A student grading system.

function calculateAverage($t = [2, 3, 4, 5, 6, 7, 8, 9, 10]) {
    $avg = 0;
    for ($i = 0; $i < count($t); $i++) {
        $avg += $t[$i];
    }
    $average = $avg / count($t);
    
    return $average; 
}

echo "The average of the numbers is: " . calculateAverage() . "<br><br>";

//Write a PHP function named formatDate that takes a date string and returns the date in "Y-m-d" format. 
//Used in: A date formatting tool.

//Write a PHP function named isPrime that takes a number as a parameter and returns true if the number 
//is prime and false otherwise. Used in: A mathematical computation tool.
function isPrime($num=3) {
    // Edge cases: 0, 1, and negative numbers are not prime
    if ($num <= 1) {
        echo "the number is less tha 1= $num <br>";
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            echo "the number is not prime $num <br>";
        }else{
            echo "the number is \prime $num <br>";


        }
    }
}
isPrime(3);
isPrime(6);
echo"<br>";
//Write a PHP function named getGreeting that takes an optional parameter for the time of day (default to "day") and 
//returns a greeting message based on the time of day. Used in: A dynamic greeting message system on a website.


//Write a PHP function named calculateCompoundInterest that takes principal amount, annual interest rate, number of 
//times interest applied per year, and number of years as parameters and returns the compound interest. Used in: A financial calculator for investment planning.

function calculateCompoundInterest($principal=520,$intrestrate=0.35,$time=2,$numOfYear=12){
    $C =$principal * pow((1 + ($intrestrate/$numOfYear)),($numOfYear*$time));
    return $C;

}
 echo calculateCompoundInterest()." deafault answer compound intrest <br>";
 echo calculateCompoundInterest(1200,0.068,6,1)." compound intrest <br>";
 echo calculateCompoundInterest(6000,0.09,2,1)." compound intrest <br><br>";

//Write a PHP function named generateInvoiceNumber that takes an optional prefix (default to "INV") and returns a unique 
//invoice number using the current timestamp and a random number. Used in: An invoicing system.

function generateInvoiceNumber($prefix = "INV") {
    $timestamp = time(); 
    $random_number = rand(1, 1000); 
    $invoice_number = $prefix . "-" . $timestamp . "-" . $random_number;
    return $invoice_number;
}

echo generateInvoiceNumber()." invoice <br><br>";

//Write a PHP function named sortArray that takes an array of integers and an optional parameter for the sorting order 
//("asc" for ascending, "desc" for descending, default to "asc"), and returns the sorted array. Used in: A data processing tool.

function sortArray($arr=[12,4,5,22,67], $order = "asc") {
    if ($order == "asc") {
        return sort($arr);
    } elseif ($order == "desc") {
        return array_reverse(sort($arr));
    } else {
        return $arr;
    }
}

echo sortArray([12,4,5,22,67],"asc")."<br><br>";//faulty

/*
- Write a PHP function named `parseCSV` that takes a CSV string as a parameter and returns a multidimensional array representing the CSV data. Used in: A data import system for spreadsheets.
- Write a PHP function named `getFileExtension` that takes a filename as a parameter and returns the file extension. Used in: A file management system for validating file types.
- Write a PHP function named `flattenArray` that takes a multidimensional array as a parameter and returns a flattened array. Used in: A data transformation tool for simplifying nested data structures.*/


?>