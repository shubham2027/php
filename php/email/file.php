<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UPLOAD YOUR FILE: </h1>
    <form action="" method="post" enctype="multipart/form-data">
        Upload your file: <input type="file" name="fileupload">
<br>
        <input type="submit" value="Upload" name="submit">

    </form>
                <?php
                print_r($_FILES["fileupload"]);
                
                $filename = $_FILES["fileupload"]["name"];
                $filesize = $_FILES["fileupload"]["size"];
                $filetype = $_FILES["fileupload"]["type"];
                $filetmpname = $_FILES["fileupload"]["tmp_name"];
                $fileerror = $_FILES["fileupload"]["error"];

                $file_ext = pathinfo($filename, PATHINFO_EXTENSION);

                echo "<br>File Name: $filename";
                echo "<br>File Size: $filesize";
                echo "<br>File Type: $filetype";
                echo "<br>File Temp Name: $filetmpname";
                echo "<br>File Error: $fileerror";
                echo "<br>File Extension: $file_ext";




$file_ext  =  pathinfo($filename, PATHINFO_EXTENSION);

if(!is_dir("DIR_name")){
    mkdir("DIR_name",0777);
}

if(move_uploaded_file($filetmpname, "DIR_name/$filename")){
    echo "<br>File uploaded successfully";
}else{
    echo "<br>File not uploaded on the server";
}

$allowed_file_type = ['jpg' , 'png' , 'jpeg' , 'gif'];

if(in_array($file_ext, $allowed_file_type)){

    echo "<br>File is of allowed type";
} 

                ?>
</body>
</html>