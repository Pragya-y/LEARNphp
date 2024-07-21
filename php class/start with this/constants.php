<?php 
//variables are those containers in which we can change the value at any time
$x = 10;
$x= 20; //updated value

//constants: containers to store values/data and who's value can not be changed

define('ROI',15); //ROI and its value is 15 and it can not be changed

//ACCOUNT NUMBER
define('ACCOUNT_NUMBER',11256454);

echo ACCOUNT_NUMBER * ROI;
?>
