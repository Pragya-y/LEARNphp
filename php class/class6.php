<?php 
//Write a PHP script using a while loop to print numbers from 1 to 10. Used in a pagination system where you 
//might need to print page numbers.

$i=1;
while($i<11){
    echo "$i"."<br>";
    $i++;
    
}
echo "number from 1 to 10 printed"."<br>"."<br>";
//Write a PHP script using a do while loop to display the numbers from 1 to 5. Used where you might use this 
//loop to ensure at least one execution, such as prompting for user input until it meets certain criteria.
$i=1;
do{
    echo "$i"."<br>";
    $i++;

}while($i<6);

echo "number from 1 to 5 printed"."<br>"."<br>";

//Write a PHP script using a for loop to calculate the sum of the first 50 natural numbers. Used in 
//a financial application where you might need to calculate cumulative totals.
$sum=0;
for($i=0;$i<51;$i++){
    $sum+=$i;
}
echo "the sum of the first 50 natural numbers is = "."$sum"."<br>"."<br>";

//Write a PHP script using a foreach loop to print each element of an array of fruits 
//(["apple", "banana", "cherry"]). Used in a shopping cart system where you need to display each item in the cart.


$fruits = ["apple", "banana", "cherry"];

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo  "<br>";

//Write a PHP script using a while loop to keep adding random numbers to an array until the sum of the array 
//elements is greater than 100. Used in a gaming application where you need to accumulate points until a target is reached.
//doubt

$array=[];
$s=0;
for($i=0;$i<100;$i++){
    $array[$i]=rand(0,50);
    $s+=$array[$i];
    if($s<101){
        break;
    }
    $array[].=$array[$i];
}
for($i=0;$i<count($array);$i++){
    echo $array[$i]."  ";

}
echo "<br>"."this is the array whose sum is less than $s"."<br>"."<br>";

//Write a PHP script using a do while loop to repeatedly prompt the user for a password until the correct password 
//"secret" is entered. Used in authentication system where you need to validate user credentials.
//$password
//do{
//    echo " enter password"."<br>";

//}while($password="secret");


//Write a PHP script using a for loop to print the multiplication table of 5. Used in an 
//educational application where you need to generate and display multiplication tables for students.

$tableOf=12;
for($i=1;$i<11;$i++){
    echo "$tableOf"." x ". $i ." = ". $i*$tableOf ."<br>";

}echo"<br>"."<br>";

//Write a PHP script using a foreach loop to calculate and print the total cost of items in an associative 
//array with item names as keys and prices as values. Used in an e-commerce application where you need to 
//calculate the total cost of items in the cart.

$a=[
    "pen"=> 10,
    "pencil"=>20
];
$totalcost = 0;
foreach($a as $name => $price){
    $totalcost+=$price;
}
echo "totale price of item = ".$totalcost."<br>"."<br>";

//Write a PHP script using a do while loop to generate a random number between 1 and 10 until the 
//number 7 is generated, then print the number of attempts. 

$attempts = 0;

do {
    $b = rand(1, 10);
    $attempts++;
    echo "$b<br>";
} while ($b != 7);

echo "Finally 7 was generated after $attempts attempts.<br>.<br>";

//Write a PHP script using a foreach loop to iterate through an associative array of user
// information (name, email, age) and print each piece of information.

$information =[
    "name"=> "pragya",
    "email"=> "info@gmail.com",
    "age"=> 12
];
foreach($information as $info => $i){
    echo $info ." is ". $i."<br>";
}
echo ("<br>");echo ("<br>");
// Write a PHP script using a do while loop to simulate rolling a die until a 6 is rolled,
// then print the total number of rolls. Used in a gaming application where you need to simulate random events.

$roll=0;
do{
    $dice=rand(1,6);
    $roll++;
    echo "$dice"."<br>";
}while($dice!=6);
    echo "Finally 6 was generated after $roll times.<br>.<br>";

//Write a PHP script using a for loop to iterate through an array of scores and print the highest score. 
//Explain a scenario in a sports application where you need to determine and display the top score.

$score = [1, 34, 22, 65, 19, 38, 100];
$max = $score[0];

echo "The initial max before iterating: $max<br>";

for ($i = 1; $i < count($score); $i++) {
    if ($max < $score[$i]) {
        $max = $score[$i];
    }
}

echo "The max after iterating: $max<br><br>";


//Write a PHP script using a foreach loop to iterate through an associative array of products and apply a 
//10% discount to each price, then print the discounted prices. Used in an e-commerce application where you 
//need to apply discounts to items.


$c=[
    "pen"=> 10,
    "pencil"=>20
];
$cost = 0;
foreach($c as $n => $p){
    $discount= $p*0.1;
    $cost=$p- $discount;
    echo "totale price of item $n  after discount= ".$cost."<br>"."<br>";

}

//Write a PHP script that uses a for loop to print numbers from 1 to 10, but uses the continue statement to 
//skip printing the number 5.

for($i=0;$i<11;$i++){
    if($i==5){
        echo "yup skipped"."<br>";
        continue;
        
    }
    echo $i."<br>";
}







?>