<?php
/* . Product Listing (Basic)
You have an array of product objects, each with properties name , price ,
and rating . Write a function to sort the array by price in ascending
order.
*/ 
function CustomSort($array, $desiredTarget="price", $order="ASC") {
    $desiredTargets = array();

    // Corrected foreach loop to populate $desiredTargets array
    foreach($array as $arr) {
        $desiredTargets[] = $arr[$desiredTarget];
    }
    var_dump($array);
    echo "Array before the change in order:<br>";
    

    // Sort the array based on the desired target and order
    if($order == "ASC") {
        array_multisort($desiredTargets, SORT_ASC, $array);
    } else {
        array_multisort($desiredTargets, SORT_DESC, $array);
    }
    var_dump($array);
    echo "The array after changes being made via - $desiredTarget - and by this order - $order:<hr>";
    
}

$products = array(
    array("name" => "phone", "price" => 345, "rating" => 5),
    array("name" => "tv", "price" => 22345, "rating" => 4),
    array("name" => "microwave", "price" => 3645, "rating" => 3),
    array("name" => "watch", "price" => 55345, "rating" => 2)
);

CustomSort($products, "price", "ASC");
CustomSort($products, "price", "DESC");
CustomSort($products, "name", "ASC");
CustomSort($products, "rating", "DESC");

/* 2. Product Listing (Advanced)
Extend the previous function to sort by multiple criteria: first by rating in
descending order, then by price in ascending order if ratings are equal. */
/*3. Student Grades (Basic)
You have an array of student objects, each with properties name and 
grades (an array of numbers). Write a function to sort the students by
their average grade in descending order.
 */
function SortGrade($array,$arrangement="grade"){
    echo"array before arrangement-";
    var_dump($array);
    $grades=array();
    foreach($array as $arr){
        $grades[]=$arr[$arrangement];
    }
    array_multisort($grades, SORT_ASC, $array);
    
    echo"array after arranging  it in ascending order according to $arrangement";
    var_dump($array);
}
$student=array(
    array("name" => "shubh", "grade" => "A", "marks" => 93),
    array("name" => "mangal", "grade" => "F", "marks" => 15),
    array("name" => "Saman", "grade" => "E", "marks" => 44),
    array("name" => "mary", "grade" => "B", "marks" => 88),
    array("name" => "aman", "grade" => "C", "marks" => 75),
    array("name" => "diya", "grade" => "A", "marks" => 95)

);
echo"<hr>";
SortGrade($student);
echo"<hr>";echo"<hr>";
/*. Employee Records (Basic)
You have an array of employee objects, each with properties name , 
department , and salary . Write a function to sort the array by department
alphabetically.
6. Employee Records (Advanced)
Modify the function to then sort by salary within each department in
descending order */


function Sortt($array,$order="ASC",$arrangement="department"){
    echo"array before arrangement-";
    var_dump($array);
    $dept=array();
    foreach($array as $arr){
        $dept[]=$arr[$arrangement];
    }
    if($order=="ASC"){
    array_multisort($dept, SORT_ASC, $array);
    }else{
    array_multisort($dept, SORT_DESC, $array);
    }
    
    echo"array after arranging  it in ascending order according to $arrangement";
    var_dump($array);
}

$employee=array(
    array("name" => "shubh", "department" => "IT", "salary" => 40000),
    array("name" => "mangal", "department" => "HR", "salary" => 50000),
    array("name" => "Saman", "department" => "Manager", "salary" => 6700),
    array("name" => "mary", "department" => "Data Analyst", "salary" => 2000),
    array("name" => "aman","department" => "Analyst", "salary" => 77000),
    array("name" => "diya", "department" => "IT", "salary" => 9900)

);
Sortt($employee,"ASC");
Sortt($employee,"DESC","salary");

echo"<hr><hr>";
/*Regular Expressions
1. Email Validation (Basic)
Write a function that takes an email address as input and uses a regular
expression to validate whether it is in a proper format.
 */

$email =["abs@gmail.com","simple@example.com","mnhft",123578,"very.common@example.com",
"long.email-address-with-hyphens@and.subdomains.example.com"];
echo"<ol>";
for($i=0;$i<count($email);$i++){
    
    if(filter_var($email[$i],FILTER_VALIDATE_EMAIL)){
        echo" <li>the email is valid duh $email[$i] </li>";
    }
    else{
        echo" <li>the email is no valid duh  $email[$i]</li>";

    }
    
}
echo"</ol><hr><hr>";

/*hone Number Formatting (Basic)
Write a function that takes a phone number as input and uses a regular
expression to format it in a standard way (e.g., (123) 456-7890). */

$phoneNum=["(123) 456-7890", "123-456-7890","(123) 456 7890", "(123) 456-7890"];
$exp= '/^\(\d{3}\) \d{3}-\d{4}$/';
echo"<ul>";
for($i= 0;$i<count($phoneNum);$i++){
    if(preg_match($exp,$phoneNum[$i])){
        echo " <li> number is valid $phoneNum[$i]</li>";
    }else{
        echo" <li>number is not valid $phoneNum[$i]</li>";
    }

}

echo"</ul><hr><hr>";
/*forEach Loop on Associative Arrays
1. User Permissions (Basic)
You have an associative array (object) representing user permissions,
where keys are user IDs and values are arrays of permission strings.
Use a forEach loop to print each user ID and their permissions.
2. User Permissions (Advanced)
Modify the function to count how many users have a specific
permission (e.g., 'admin') and log the count. */


$userPermissions = [
    'user1' => ['read', 'write', 'delete'],
    'user2' => ['read', 'write'],
    'user3' => ['read'],
    'user4' => ['admin', 'read', 'write'],
];
echo"<ul>";
    foreach($userPermissions as $userID=> $permission){
        echo "<li> user Id $userID has this many permission ".sizeof($permission)."  </li>";
        foreach($permission as $per){
        echo "<li> user Id $userID has  $per </li>";
        }
        

    }
echo"</ul><hr><hr>";

/*3. Shopping Cart (Basic)
You have an associative array (object) representing a shopping cart,
where keys are product IDs and values are quantities. Use a forEach
loop to calculate the total number of items in the cart.
4. Shopping Cart (Advanced)
Modify the function to also calculate the total cost of the items in the
cart, given an array of product objects with id , name , and price
Class 9 PHP Assignment 3
propertie */

$ShoppingCart=[
    ["product"=> "aata","price"=>123],
    ["product"=> "buiscuit","price"=>23],
    ["product"=> "rice","price"=>623],
    ["product"=> "chocolate","price"=>50]
];
$sum=0;
echo"the total number of itemn in the cart is ".sizeof($ShoppingCart)."<br>";
foreach ($ShoppingCart as $item) {
    echo "Item in cart: " . $item["product"] . " => " . $item["price"] . "<br>";
    $sum += $item["price"];
}
echo "the tota value of the cart is $sum <hr><hr>";






?>