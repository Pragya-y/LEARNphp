<?php 

var_dump($_FILES["AD"]);
/*  vardump pe ye sara attributes aaye   
    'name' => string 'xestro.mp3' (length=10)
    'full_path' => string 'xestro.jpg' (length=10)
    'type' => string 'image/jpeg' (length=10)
    'tmp_name' => string 'C:\wamp64\tmp\php4D27.tmp' (length=25)
*/
$temp=$_FILES["AD"]["tmp_name"];//temporary file on server
$name = basename($_FILES['AD']['name']);
echo "The base name of the uploaded file is: " . $name . "<br>";//first name of the file
$name = str_replace(' ', '-', $name);//replacing the space
echo "The base name of the uploaded file after replacing spaces with hyphens: " . $name . "<br>";

$extension=pathinfo($name,PATHINFO_EXTENSION);//extension opf the file
echo $extension."<br>";
$allowed_extensions=array("WAV" ,"mp3","mp4","AAC");//valid extension
echo"name of the file before the uploading process $name and the extension $extension <br>";

if(in_array($extension,$allowed_extensions)){
$name=$name.rand(1,20).".".$extension;
echo $name."<br>";
if(move_uploaded_file("$temp","audio/". $name)==True){
    echo "file is uploaded successpully in audio folder <br> <hr>";

}else{
    echo "even tho the file is audio its not uplaoded <br>";
}
}else{
    echo "file is not audio chap <br>";
}
?>