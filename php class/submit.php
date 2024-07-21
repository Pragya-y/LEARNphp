<?php

$firstName=$_REQUEST["firstName"];
$lastName=$_REQUEST["lastName"];
$email=$_REQUEST["email"];
if(isset($firstName)){
    echo"$firstName <br>";
}else{
    echo "firstName not typed <br>";
}
if(isset($lastName)){
    echo"$lastName <br>";
}else{
    echo "lastName not typed <br>";
}
if(isset($email)){
    echo"$email<br>";
}else{
    echo "email not typed <br>";
}
//nieghter of the two are working for the same page
//extract($_POST);



?>