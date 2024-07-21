<!--/*Forms - Handling Text Inputs
1. Form Handling - Text Inputs (Basic)
Create a simple HTML form with text inputs for firstName , lastName , and email .
 Write a function to capture the form data and print it to theconsole when the form is submitted.
2. Form Handling - Text Inputs (Advanced)
Extend the function to validate that none of the fields are empty andthat the email is in a valid format.
 Display appropriate error messages
for invalid inputs. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
<!-- 3.
   <form action="submit.php" method="POST">
        <label for="firstName">First Name:</label>
        <input type="text"  name="firstName"><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text"  name="lastName"><br><br>

        <label for="email">Email:</label>
        <input type="text"  name="email"><br><br>

        <input type="submit" value="Submit">
    </form>
   -->   
   
<?php
/*check if the form is submitted
if(isset($_POST['city'])){
    $city = $_POST['city'];
    // if($city==null){
    //     echo "Please select city";   
    // }
    $name = $_POST['name'];
    if($name==null){
        echo "Please enter the name<br>";
    }
    if($city!=null){
        echo $city;
    }else{
        echo "Sorry, you have not selected the city";
    }
}
*/
?>

<!--
   <form action="" method="POST">
    <!-select
    <label for ="name">FULL NAME</label>
    <input type="text" name="name" placeholder="enter your full name" value="<?php echo(isset($name))?$name:""; ?>">

    <Select name="city">
        <option value="">Select your city</option>
        <option value="New Delhi" <?php echo(isset($city)) && $city=="New Delhi" ?"selected":""; ?>>New Delhi</option>
        <option value="Mumbai"<?php echo(isset($city)) && $city=="Mumbai" ?"selected":""; ?>>Mumbai</option>
        <option value="Calcutta"<?php echo(isset($city)) && $city=="Calcutta" ?"selected":""; ?>>Calcutta</option>

    </Select>
    <button type="submit">Submit</button>
   </form>

-->
<?php
/*
if(isset($_POST['$cities'])){
    $cities=$_POST['$cities'];


if($cities!=null){
    echo"<br>";
    print_r($cities);
}else{
    echo "cities not selected <br>";
}}*/
?>
<!--

<form action="" method="POST">
    <label for="cities">SELECT YOUR CITIES</label>
    <select name="cities[]" multiple>
        <option value="New Delhi" <?php echo(isset($city)) && $city=="New Delhi" ?"selected":""; ?>>New Delhi</option>
        <option value="Mumbai"<?php echo(isset($city)) && $city=="Mumbai" ?"selected":""; ?>>Mumbai</option>
        <option value="Calcutta"<?php echo(isset($city)) && $city=="Calcutta" ?"selected":""; ?>>Calcutta</option>
    </select>
    <button>SUBMIT</button>
</form>
-->
<?php
/*
if(isset($_POST["submit"])){
    
    $skills=(isset($_POST['skills']))?$_POST['skills']:array();
    
    if(sizeof($skills)==0){
        echo"no value selected by the user";
    }else{
        print_r($skills);

    }
}*/
?>

<!--checkbox--><!--
<form action="" method="POST">
    <label>SKILLS - </label>
    <label><input type="checkbox" name="skills[]" value="HTML" >HTML</label>
    <label><input type="checkbox" name="skills[]" value="CSS" >CSS</label>
    <label><input type="checkbox" name="skills[]" value="Jquesry" >Jquesry</label>
    <label><input type="checkbox" name="skills[]" value="Java" >Java</label>
    <label><input type="checkbox" name="skills[]" value="PHP" >PHP</label>
    <input type="submit" name="submit" value="submit">

</form>

-->

</body>
</html>

