<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE FORM REGISTRATION</title>
</head>
<body>
    <h1>EMPLOYEE FORM REGISTRATION</h1><br>
<?php
/*
if(isset($_POST["submit"])){
    $firstname=$_POST["firstname"];
    if(isset($_POST["firstname"])){
    echo $firstname."<br>";}

    if(isset($_POST["lastName"])){
    $lastName=$_POST["lastName"];
    echo $lastName."<br>";}

    if(isset($_POST["email"])){
    $email=$_POST["email"];
    echo $email." is the email adress of employee<br>";}

    if(isset($_POST["gender"])){
        $gender=$_POST["gender"];
        echo $gender." is the gender <br>";}

    if(isset($_POST["education"])){
    $education=$_POST["education"];
    echo $education." this is the highest education qualification<br>";}

    if(isset($_POST["Designations"])){
        $Designations=$_POST["Designations"];
        if($Designations!= ""){
            echo $Designations."<br>";
        }else{
            echo "Designations not selected <br>";
    }
    }
    $salary=$_POST["salary"];
    echo $salary." this is the expected salary <br>";
    if(isset($_POST["Department"])){
        $Department=$_POST["Department"];
        if($Department!= 0){
            print_r ($Department);echo"<br>";
        }else{
            echo "Department not selected <br>";
    }

}
}*/

?>

<!--
    <form action="" method="POST">
        <label>First Name : </label>
        <input type="text" name="firstname" placeholder="Enter YOur first name" <?php echo(isset($firstname))? $firstname:""; ?>><br><br>
        <label>Last Name : </label>
        <input type="text" name="lastname" placeholder="Enter YOur last name" <?php echo(isset($lastname))? $lastname:""; ?>>
<br><br>
        <label>EMAIL ADDRESS : </label>
        <input type="text" name="email" placeholder="Enter YOur email address"><br><br>
        <label>CHOOSE GENDER : </label>
        <label><input type="radio" name="gender" value="male">Male</label>
        <label><input type="radio" name="gender" value = "female">FeMale</label>
        <br><br>
        <label>Education Qualification : </label>
        <input type="text" name="education" placeholder="Enter YOur highest Education Qualification"><br><br>
        <label>YOUR Designations : </label>
        <select name="Designations">
            <option value="">SELECT YOUR Designations</option>
            <option value="Web Developer" <?php (isset($Designations) && $Designations=="Web Developer")?"selected":"";?>>Web Developer</option>
            <option value="Web Designer" <?php (isset($Designations) && $Designations=="Web Designer")?"selected":"";?>>Web Designer</option>
            <option value="Site Handler" <?php (isset($Designations) && $Designations=="Site Handler")?"selected":"";?>>Site Handler</option>
            <option value="Query Resolver" <?php (isset($Designations) && $Designations=="Query Resolver")?"selected":"";?>>Query Resolver</option>
            <option value="" <?php (isset($Designations) && $Designations=="")?"selected":"";?>></option>
        </select><br><br>
        <label>SALARY : </label>
        <input type="number" name="salary" placeholder="Enter YOur salary expectation">
        <br><br>
        <label>Department : </label>
        <select name="Department[]">
            <option value="" > SElect your Department</option>
            <option value="finance"  <?php (isset($Department) && $Department=="finance")?"selected":"";?>> finance</option>
            <option value="marketing"  <?php (isset($Department) && $Department=="marketing")?"selected":"";?>>marketing </option>
            <option value="operations management"  <?php (isset($Department) && $Department=="operations management")?"selected":"";?>> operations management</option>
            <option value="human resources"  <?php (isset($Department) && $Department=="human resources")?"selected":"";?>>human resources </option>
            <option value="information technology"  <?php (isset($Department) && $Department=="information technology")?"selected":"";?>>information technology </option>
        </select><br><br>
        <label>Click here to submit the form : </label>
        <input type="submit" name="submit">



    </form>-->



<?php 
if(isset($_POST["submit"])){
    $firstname=$_POST["firstname"];
    $lastName=$_POST["lastName"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $education=$_POST["education"];
    $Designations=$_POST["Designations"];
    $salary=$_POST["salary"];
    $Department=$_POST["Department"];
    echo"<table border='1'>";
    echo"<tr><td> firstname </td><td>$firstname</td> </tr>";
    echo"<tr><td> lastName</td><td>$lastName</td> </tr>";
    echo"<tr><td> email</td><td>$email</td> </tr>";
    echo"<tr><td>gender </td><td>$gender</td> </tr>";
    echo"<tr><td> education</td><td>$education</td> </tr>";
    echo"<tr><td>Designations </td><td>$Designations</td> </tr>";
    echo"<tr><td> salary</td><td>$salary</td> </tr>";
    echo"<tr><td>Department </td><td>".implode(",",$Department)."</td> </tr>";
    echo"</tabel>";
    

}


?>
<br><hr>
<form action="" method="POST">
    <table>
        <tr>
            <td><label>First Name : </label></td>
            <td><input type="text" name="firstname" placeholder="Enter YOur first name" ></td>

        </tr> 
        <tr>
            <td><label>Last Name : </label></td>
            <td><input type="text" name="lastname" placeholder="Enter YOur last name" ></td>

        </tr> 
        <tr>
            <td><label>EMAIL ADDRESS : </label></td>
            <td><input type="text" name="email" placeholder="Enter YOur email address"></td>


        </tr> 
        
        <tr>
            <td><label>CHOOSE GENDER : </label></td>
            <td>
                <label><input type="radio" name="gender" value="male">Male</label>
                <label><input type="radio" name="gender" value = "female">FeMale</label>
            </td>

        </tr> 
        <tr>
            <td><label>Education Qualification : </label></td>
            <td><input type="text" name="education" placeholder="Enter YOur highest Education Qualification"></td>

        </tr> 
        <tr>
            <td><label>YOUR Designations : </label>></td>
            <td>
                <select name="Designations">
                    <option value="">SELECT YOUR Designations</option>
                    <option value="Web Developer" >Web Developer</option>
                    <option value="Web Designer" >Web Designer</option>
                    <option value="Site Handler" >Site Handler</option>
                    <option value="Query Resolver">Query Resolver</option>
                    <option value="" ></option>
                </select>
            </td>

        </tr>
        <tr>
            <td><label>SALARY : </label></td>
            <td><input type="number" name="salary" placeholder="Enter YOur salary expectation"></td>

        </tr>
        <tr>
            <td><label>Department : </label></td>
            <td>
                <select name="Department[]">
                    <option value="" > SElect your Department</option>
                    <option value="finance"  > finance</option>
                    <option value="marketing" >marketing </option>
                    <option value="operations management"  > operations management</option>
                    <option value="human resources" >human resources </option>
                    <option value="information technology" >information technology </option>
                </select>
            </td>

        </tr>
        <tr>
            <td><label>Click here to submit the form : </label></td>
            <td colspan="2"><input type="submit" name="submit"> </td>
        </tr> 
    </table>
</form>
</body>
</html>