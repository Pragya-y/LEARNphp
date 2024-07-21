<?php
if(isset($_FILES['image']['name'])){
    var_dump($_FILES['image']);echo'<br>';
    
    $size= sizeof($_FILES['image']['name']);
    echo $size." total number of images uploaded<br>";
    $allowed_extension=array("jpg","jpeg","webp","png","PNG");
//so that we can put each and every image to the folder called images hemnce using loop as it is present in an associative array
    for($i=0;$i<$size;$i++){
        $image = $_FILES['image']['name'][$i];
        echo"name of the file is $image <br>";
        $temporaryPath = $_FILES['image']['tmp_name'][$i];
        $extension=pathinfo( $image, PATHINFO_EXTENSION );
        if(in_array($extension,$allowed_extension)){
            move_uploaded_file($temporaryPath,"uploads/".$image);
            echo "$image has been uploaded to Uploads Folder <br>";

    }else{
        echo "$image has $extension hence not aaplicable <br>";
    }
}

}

?>