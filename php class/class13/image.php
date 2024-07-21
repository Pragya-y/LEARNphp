<?php 

var_dump($_FILES["DP"]);
/*  vardump pe ye sara attributes aaye   
    'name' => string 'xestro.jpg' (length=10)
    'full_path' => string 'xestro.jpg' (length=10)
    'type' => string 'image/jpeg' (length=10)
    'tmp_name' => string 'C:\wamp64\tmp\php4D27.tmp' (length=25)
*/
$temp=$_FILES["DP"]["tmp_name"];//temporary file on server
$name = basename($_FILES['DP']['name']);
echo "The base name of the uploaded file is: " . $name . "<br>";//first name of the file
$name = str_replace(' ', '-', $name);//replacing the space
echo "The base name of the uploaded file after replacing spaces with hyphens: " . $name . "<br>";

$extension=pathinfo($name,PATHINFO_EXTENSION);//extension opf the file
echo $extension."<br>";
$allowed_extensions=array("jpg" ,"jpeg","png","svg","webp");//valid extension
echo"name of the file before the uploading process $name and the extension $extension <br>";

if(in_array($extension,$allowed_extensions)){
$name=$name.rand(1,20).".".$extension;
echo $name."<br>";
if(move_uploaded_file("$temp","image/". $name)==True){
    echo "file is uploaded successpully in image folder <br> <hr>";

}else{
    echo "even tho the file is image its not uplaoded <br>";
}
}else{
    echo "file is not image chap <br>";
}
?>