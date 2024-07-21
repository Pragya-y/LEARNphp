<?php

/*Write a PHP script to cast the string "1234" to an integer and print the result.
 Explain why type casting might be useful in handling user input.*/

$a ="1234";
$b = (integer) $a;
var_dump ($b);
echo ("<br>");
//Write a PHP script to cast the float 56.78 to an integer and print the result. 
//Discuss a scenario in a shopping application where type casting might be needed.
$c= 56.78;
var_dump((integer) $c);
echo("<br>");
//Use the pi() function to calculate the area of a circle with a radius of 7 units. 
//Write a PHP script to print the area. 
$area= 7*pi();
echo $area;
echo("<br>");
//Write a PHP script that finds and prints the maximum value in the array [23, 54, 32, 67, 99]. 
//It can be useful in an analytics dashboard.
$d=[23, 54, 32, 67, 99];
print_r(max($d));
echo("<br>");
print_r(min($d));
echo("<br>");
//Write a PHP script to find and print the absolute value of -42. 
echo("-42 is" ).(abs(-42));
echo("<br>");
echo("42v is").( abs(42));
//Write a PHP script to round the number 4.567 to the nearest integer. 
//It is important in a billing system where prices need to be rounded to the nearest currency unit.
echo("<br>");
echo("round the number 4.567 =  ").round(4.567);
echo("<br>");
//Write a PHP script to round the number 4.567 down to the nearest integer using floor(). 
//Explain how this might be used in inventory management to ensure whole items.
echo("round the number 4.567 using floor =  ").floor(4.567);
echo("<br>");
//Write a PHP script to generate a random number between 1 and 100. it can be used  in a lottery application.
echo ("<br>");
echo(rand(1,100));
echo("<br>");
//Define a constant named SITE_NAME with the value "MyWebsite". 
//Write a PHP script to print this constant. Generally used  in a large-scale web application.
define("SITE_NAME","MyWebsite");
echo SITE_NAME;
//Write a PHP script to cast the boolean value true to an integer and print the result. It is used in form handling.
$booleanValue = true;
$integerValue = (int) $booleanValue;
echo $integerValue;
//Use the pi() function to calculate the circumference of a circle with a radius of 10 units. Write a PHP script 
//to print the circumference. 
echo("<br>");
echo(2*pi()*10).(" circumference of a circle with a radius of 10 units");

//Write a PHP script to find and print the maximum value from a set of temperatures recorded over a week: [18.5, 20.3, 19.8, 22.1, 21.7]. 
//It also used  in weather forecasting.
echo("<br>");
echo(max([18.5, 20.3, 19.8, 22.1, 21.7])).(" maximum value from a set of temperatures recorded over a week");
// Write a PHP script to find and print the minimum value from a set of prices: [199.99, 149.99, 249.99, 299.99]. 
//Generally used in an e-commerce site for displaying the lowest price of a product.
echo("<br>");
echo(min([199.99, 149.99, 249.99, 299.99])).(" min value [199.99, 149.99, 249.99, 299.99]");
echo("<br>");
//Write a PHP script to find and print the absolute value of a user's account balance, which could be 
//negative due to overdraft. Used in financial reporting.
$acc_balance=121;
echo (abs($acc_balance)).(" acconut balnce in absolute fromat");
//Write a PHP script to round the number 9.876 to one decimal place. Used in scientific data representation 
//where precision is important.
echo("<br>");
echo (round(9.876,1)).(" round the number 9.876 to one decimal place");echo("<br>");
echo (round(9.876)).(" round the number 9.876 ");
//Write a PHP script to round the number 7.89 down to the nearest whole number using floor().
echo("<br>");
echo(floor(7.89)).(" round the number 7.89 down to the nearest whole number using floor()");
echo("<br>");
//Write a PHP script to generate a random number between 1000 and 9999 using rand(). 
//Used in generating OTP (One Time Password) for user authentication.
echo("otp for authentication - ").(rand(1000,9999));echo("<br>");
//Define a constant named MAX_USERS with the value 500. Write a PHP script to print this constant. 
//Used for setting application-wide limits.
define("MAX_USERS",500);
echo (MAX_USERS);
//Write a PHP script to cast the float 123.45 to a string and print the result. 
echo("<br>");
$e=123.45;
var_dump( (string)$e);
//## Based on Operators

//Write a PHP script that uses the assignment operator to assign the value 100 to a variable representing 
//a bank account balance. Then, add 50 to the balance using the addition assignment operator. It is used to 
//update account balances.
$balance=100;
echo($balance).(" balancve before add");echo("<br>");
echo($balance+=50).(" balancve after chnasges");
echo("<br>");
//Write a PHP script that uses the assignment operator to set the price of a product to 25.99. 
//Then, apply a 10% discount using the multiplication assignment operator. Used in e-commerce for applying discounts.
$price=25.99;
echo($price*=0.1).(" =10 % discount");
//Write a PHP script that compares two variables, $currentTemperature and $thresholdTemperature, to check if the current 
//temperature is higher than the threshold temperature. Print a message based on the comparison. Used in an HVAC control 
//system.
echo("<br>");
$currentTemperature = 50;
$thresholdTemperature= 100;
if($currentTemperature >$thresholdTemperature){
    echo ("temperature is higher");
}else{
    echo(" current temperasture not higher");
}
echo("<br>");
echo("$currentTemperature+=100 after this again -  ");
if($currentTemperature+=100 >$thresholdTemperature){
    echo ("temperature is higher");
}else{
    echo(" current temperasture not higher");
}
echo("<br>");
//Write a PHP script that compares two variables, $userAge and $minimumAge, to check if the user is old enough to vote. 
//Print an appropriate message based on the comparison. 
$userAge=21 ;$minimumAge=18;
if($userAge>=$minimumAge){
    echo("old enogh to vote").(" user age $userAge ");
}else{
    echo("cant votwe");
}

echo("<br>");
//Write a PHP script that increments a variable representing a user's loyalty points by 1 each time a purchase is made. 
//Can be used in a customer loyalty program.
//- Write a PHP script that decrements a variable representing the number of items left in stock by 1 each time an item is sold. Can be use in inventory management.
//-------------------------------------------------------------
// Write a PHP script that checks if two variables, `$password1` and `$password2`, are equal. 
//If they are, print a success message; otherwise, print an error message. Used in password confirmation during user
// registration.
$password1=21 ;$password2=21;
if($password1>=$password2){
    echo("`password1` and `password2`, are equal");
}else{
    echo("error message");
}

echo("<br>");
//Write a PHP script that uses the modulus assignment operator to find the remainder when a variable representing
// a total score is divided by 5. Determining pass/fail status in a grading system.

$totalScore = 87; 
$totalScore %= 5;

echo "The remainder when the total score is divided by 5 is: " . $totalScore . "<br>";

if ($totalScore == 0) {
    echo "Pass";
} else {
    echo "Fail";
}
?>

