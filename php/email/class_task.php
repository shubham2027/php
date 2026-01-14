<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $target = 'uploads/' . basename($file['name']);

    // Create uploads folder if it doesn't exist
    if (!is_dir('uploads')) {
        mkdir('uploads');
    }

    if (move_uploaded_file($file['tmp_name'], $target)) {
        echo "Image uploaded successfully.<br>";
        echo "<img src='$target' width='200'>";
    } else {
        echo "Failed to upload image.";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
</form>


