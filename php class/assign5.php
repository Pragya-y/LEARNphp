<?php
//Write a PHP script that uses the logical AND operator (&&) to check if a variable $age is greater 
//than 18 and a variable $country is equal to "USA". Used in a website registration form where this might 
//be used to check if the user is an adult and resides in the USA.

$ages = [21, 33, 18];
$countries = ["USA", "INDIA", "USA"];

for ($i = 0; $i < count($ages); $i++) {
    $age = $ages[$i];
    $country = $countries[$i];

    if ($age >= 18 && $country === "USA") {
        echo "User is adult and resides in USA<br>";
    } else {
        echo "Not adult and reside in $country<br>";
    }
}
echo("<br>");
//Write a PHP script that uses the logical OR operator (||) to check if a variable $temperature 
//is less than 0 or greater than 35. Used in a weather monitoring system where this might be used to 
//issue alerts for extreme temperatures.

$temperature =[-1,23,44,11,50];
for ($i = 0; $i < count($temperature); $i++) {
    $temp=$temperature[$i];
    if ($temp < 0 || $temp > 35){
        echo"allert alert alert!  as temperatire is ".$temp."<br>";
        
    }else{
        echo"no allerts as temperatire is ".$temp."<br>";
    }
}
echo("<br>");
//cWrite a PHP script that uses the logical NOT operator (!) to check if a variable $loggedIn is false. 
//Used in an authentication system where this might be used to redirect users who are not logged in.

$loggedIn = ["true","false","true","false","false"];

for ($i = 0; $i < count($loggedIn); $i++) {
    $log=$loggedIn[$i];
    if ($log != "true"){
        echo"allert alert alert!  deny access as loggin = ".$log."<br>";
        
    }else{
        echo"no allerts as login= ".$log."<br>";
    }
}
echo("<br>");
//Write a PHP script that uses the string concatenation operator (.) to combine the first name and last name 
//of a user into a full name. Used in a customer management system where this might be used to display the user's 
//full name.

$fname="pragya";
$lname="yadav";
$fullname=$fname." ".$lname;
echo strtoupper($fullname." - upper".("<br>"));
echo ucwords($fullname." - uc words".("<br>"));
echo ucfirst($fullname." - uc first".("<br>"));
echo strtolower($fullname." - lower".("<br>"));
echo ($fullname." - normal".("<br>"));
echo("<br>");
//Write a PHP script that uses the string concatenation assignment operator (.=) to append a string 
//"Welcome!" to an existing greeting message. Used in a personalized email system where this might be used 
//to append a message to a greeting.
$a= "poonam";
$a.=" bhatt";
echo "welcome ".$a."<br>";

//Write a PHP script that uses the ternary operator to set a variable $status to "active" if a variable $isActive 
//is true, otherwise set it to "inactive". Used in a user management system where this might be used to display 
//the user's status.
//doubt

//Write a PHP script that uses the logical AND operator (&&) to check if a variable $username is not empty 
//and a variable $password is not empty. Used in a login form where this might be used to ensure both fields 
//are filled out.

$password="pass@123";
$username="reena123T";
if ($password!="" && $username!=""){
    echo "Valid User"."<br>";
}else{
    echo"not valid user"."<br>";
}
echo"<br>";
//Write a PHP script that uses the logical OR operator (||) to check if a variable $balance is less than 
//0 or a variable $overdraft is true. Used in a banking application where this might be used to check if 
//an account is overdrawn.
$balance=[-35,0,-2,10];
$overdraft=["TRUE","FALSE","TRUE","FALSE"];
for($i=0;$i<count($balance);$i++){
    $b=$balance[$i];
    $o=$overdraft[$i];
    if(0 < $b || $o=="TRUE"){
        echo"account overdrawn"."<br>";

    }else{
        echo"Not overdrawn"."<br>";
    }
}echo ("<br>");

//Write a PHP script that uses the logical NOT operator (!) to check if a variable $isAdmin is false.
// Used in an access control system where this might be used to restrict access to certain features for non-admin users.
$isAdmin = false;
if ($isAdmin!= true){
    echo "restrict acess"."<br>";
}else{
    echo "no restrict"."<br>";
}
echo ("<br>");
//Write a PHP script that uses the ternary operator to set a variable $discount to 20 if a variable 
//$isMember is true, otherwise set it to 5. Used in a retail application where this might be used to apply 
//different discounts for members and non-members.
$isMember = true; 

$discount = $isMember ? 20 : 5;

echo "The discount is: $discount"."<br>";
echo ("<br>");

//Write a PHP script that checks if a variable $temperature is below 0. If true, print "It's freezing.
//" Otherwise, print "The temperature is above freezing." Used in a weather forecasting application.

$temperature=0;
if($temperature<0){
    echo "its freezing";
}else{
    echo "not freezing";
}

echo ("<br>");
//Write a PHP script that checks if a variable $grade is "A". If true, print "Excellent!" If 
//it's "B", print "Good job!" Otherwise, print "Keep trying!" Used in a student grading system.
$grade=["A","B","C"];

for($i=0;$i<count($grade);$i++){
    $g=$grade[$i];
    if($g=="A"){
        echo"Excellent!"."<br>";

    }elseif($g=="B"){
        echo"Good job!"."<br>";
    }else{
        echo "KEEP TRYING!!"."<br>";
    }
}echo ("<br>");

//Write a PHP script that checks if a variable $status is "active". If true, print "Account is active." 
//Otherwise, print "Account is inactive." Used in a user management system.

$status="active";
if($status=="active"){
    echo "Account is active.";
}else{
    echo "Account is inactive.";
}

echo ("<br>");
//Write a PHP script that checks if a variable $role is "admin". If true, print "Welcome, Admin!" If
 //it's "user", print "Welcome, User!" Otherwise, print "Welcome, Guest!" Used in a web application 
 //with different user roles.

 $role="admin";
 if($role=="admin"){
    echo"Welcome, Admin!"."<br>";

}elseif($g=="user"){
    echo"Good job!"."<br>";
}else{
    echo "Welcome, Guest!"."<br>";
}
echo ("<br>");

//Write a PHP script that checks if a variable $hour is less than 12. If true, print "Good morning!" 
//Otherwise, print "Good afternoon!" Used in a digital clock application.
$hour=1;
if($hour<12){
   echo"Good morning!" ."<br>";

}else{
   echo "Good afternoon!"."<br>";
}
echo ("<br>");

//Write a PHP script that checks if a variable $day is "Monday". If true, print "Start of the work week."
// If it's "Friday", print "End of the work week." Otherwise, print "Midweek." Used in a weekly planner application.

$day=["Monday","Friday","WEDNESDAY"];
for($i=0;$i<count($day);$i++){
$d=$day[$i];
    if($d=="Monday"){
        echo"Start of the work week."."<br>";

    }elseif($d=="Friday"){
        echo"End of the work week."."<br>";
    }else{
        echo "Midweek."."<br>";
    }
}
echo ("<br>");

//Write a PHP script that uses a switch statement to check the value of a variable $trafficLight. If it's "red", print 
//"Stop". If it's "yellow", print "Caution". If it's "green", print "Go". Used in a traffic control system.


$trafficLight = "yellow"; 

switch ($trafficLight) {
    case "red":
        echo "Stop";
        break;
    case "yellow":
        echo "Caution";
        break;
    case "green":
        echo "Go";
        break;
    default:
        echo "Invalid traffic light color";
        break;
}
echo("<br>");

//Write a PHP script that uses a switch statement to check the value of a variable $dayOfWeek. If it's "Saturday" 
//or "Sunday", print "Weekend". Otherwise, print "Weekday". Used in a calendar application.

$dayOfWeek=["Sunday","Monday","Saturday" ,"Friday","WednesdaY"];
for ($i=0;$i<count($dayOfWeek);$i++){
$day=$dayOfWeek[$i];
switch($day){
    case "Monday";
        echo "Weekday"."<br>";
        break;
    case "Tuseday";
        echo "Weekday"."<br>";
        break;
    case "WednesdaY";
        echo "Weekday"."<br>";
        break;
    case "Thursday";
        echo "Weekday"."<br>";
        break;
    case "Friday";
        echo "Weekday"."<br>";
        break;
    case "Saturday";
        echo "Weekend"."<br>";
        break;
    case "Sunday";
        echo "Weekehnd"."<br>";
        break;
}
}
echo("<br>");

//Write a PHP script that checks if a variable $totalPurchase is greater than 100. If true, apply a 10% discount 
//and print the discounted total. Otherwise, print the original total. Used in a shopping cart application.
$totalPurchase=110;
if($totalPurchase>100){
    $discount=($totalPurchase*0.1);
    $Purchase= $totalPurchase-$discount;
    echo "price after discoumt ".$Purchase."<br>";
}else {
    echo "no discount as ammmount is".$Purchase."<br>";
}
echo("<br>");
//Write a PHP script that uses a switch statement to check the value of a variable $browser. If it's "Chrome", 
//print "You are using Chrome". If it's "Firefox", print "You are using Firefox". If it's "Safari", print 
//"You are using Safari". Otherwise, print "Unknown browser.  Used in a web application that customizes content 
//based on the user's browser.
$browser=[ "Chrome","Firefox","Safari","Mns"];
for($i=0;$i<count($browser);$i++){
    $b=$browser[$i];
    switch($b){
        case "Chrome";
            echo "You are using Chrome"."<br>";break;
        case "Firefox";
            echo "You are using Firefox"."<br>";break;
        case "Safari";
            echo "You are using Safari"."<br>";break;
        default:
            echo "Unknown browser"."<br>";break;

    }
}
echo ("<br>");
//Write a PHP script that checks if a variable $orderStatus is "shipped". If true, print 
//"Your order has been shipped." If it's "processing", print "Your order is being processed." 
//If it's "cancelled", print "Your order has been cancelled." Otherwise, print "Order status unknown." 
//Used in an order tracking system for an e-commerce application.


$browser=[ "shipped","processing","cancelled",""];
for($i=0;$i<count($browser);$i++){
    $b=$browser[$i];
    switch($b){
        case "shipped";
            echo "Your order has been shipped."."<br>";break;
        case "processing";
            echo "Your order is being processed."."<br>";break;
        case "cancelled";
            echo "Your order has been cancelled."."<br>";break;
        default:
            echo "Order status unknown." ."<br>";break;

    }
}


?>
