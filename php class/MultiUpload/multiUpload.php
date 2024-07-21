<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a Form to upload multiple files all together</title>
</head>
<body>
    <!-- accept we are showing what all is acceptable as a file here with the mentioned extension but at
    the backend also mentioning  extension is important 2) image [] is imprtant otherwise multiple file wont be submitted-->
    <form action="uploads.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image[]" accept=".jpg,.jpeg,.webp,.png" multiple>
        <button>UPLOAD-></button>
    </form>
  

    
</body>
</html>