<?php

// TO send emails in PHP by creating a contact form that sends basic text emails and handle 
// file uploads securely by creating a file upload form ,
//  validating file types and sizes, and ensuring secure handling of uploaded files.


$to = "skshubhamskkr@gmail.com "; //to whom we are sending the email
$subject = "Activity 9 mail"; //subject of the email
$message = "testing"; //message of the email
$from = "abc@gmail.com"; //from whom the email is sent
$headers = "From: $from"; //header of the email
$check = mail($to,$subject,$message,$headers); //mail function to send the email

if($check == true){
    echo "Mail sent successfully";
}else{
    echo "Mail not sent";
}


// now we will create a contact form that sends basic text emails and handle file uploads securely by creating a file upload form ,
//  validating file types and sizes, and ensuring secure handling of uploaded files.

?>
<html>
<body>
    <h2>FILE UPLOADING FORM</h2>
    
    <form action="" method="POST" enctype="multipart/form-data">
        NAME: <input type="text" name="name" required><br><br>
        EMAIL: <input type="email" name="email" required><br><br>
        UPLOAD FILE: <input type="file" name="file" required><br><br>
        <input type="submit" name="submit" value="Submit">    
    </form>
        
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle file upload
    if (!empty($_FILES['file']['name'])) {
        $uploadDir = 'uploads/';
        $filePath = $uploadDir . basename($_FILES['file']['name']);

        // Create upload directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Move uploaded file
        if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
            echo "File uploaded successfully: " . $filePath;
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "No file uploaded.";
    }
}
?>