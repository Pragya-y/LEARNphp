<?php 
var_dump($_FILES["CV"]);
/*
array (size=6)
  'name' => string 'Class_9_PHP_Assignment.pdf' (length=26)
  'full_path' => string 'Class_9_PHP_Assignment.pdf' (length=26)
  'type' => string 'application/pdf' (length=15)
  'tmp_name' => string 'C:\wamp64\tmp\php2A7C.tmp' (length=25) 
*/
$name=basename($_FILES["CV"]["name"]);
echo $name." name before uploading<br>";
$extension= pathinfo($_FILES["CV"]["name"],PATHINFO_EXTENSION);
echo $extension." this is extension<br>";
$allowed_extensions=array("pdf","doc","docx");
$temp=$_FILES["CV"]["tmp_name"];
if(in_array($extension,$allowed_extensions)){
    $name=$name.rand(1,10).".".$extension;
    if(move_uploaded_file($temp,"resume/".$name)==True){
            echo "this file". $name ."uploadesdd in resume folder<br>";
    }else{
        echo "this file". $name ." evemn tho type ios right not uplaoded<br>";

    }
}else{
    echo"file is not corre ct format <br>";
}
?>