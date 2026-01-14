
<?php
// Directory to store uploaded images
$uploadDir = 'uploads/';

// Ensure the upload directory exists
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Image upload handling
$uploadError = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    
    // Allowed file types
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    
    // Check file type
    if (!in_array($file['type'], $allowedTypes)) {
        $uploadError = 'Invalid file type. Only JPG, PNG, and GIF are allowed.';
    }
    
    // Check file size (3MB = 3 * 1024 * 1024 bytes)
    elseif ($file['size'] > 3 * 1024 * 1024) {
        $uploadError = 'File is too large. Maximum size is 3MB.';
    }
    
    // Move uploaded file
    else {
        // Generate a unique filename to prevent overwriting
        $fileName = uniqid() . '_' . basename($file['name']);
        $uploadPath = $uploadDir . $fileName;
        
        if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
            $uploadError = 'Image uploaded successfully!';
        } else {
            $uploadError = 'Upload failed. Please try again.';
        }
    }
}

// Get list of uploaded images
$images = glob($uploadDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <!-- Upload Form -->
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/jpeg,image/png,image/gif">
        <input type="submit" value="Upload Image">
    </form>

    <!-- Display Upload Error/Success -->
    <?php if ($uploadError): ?>
        <p><?php echo $uploadError; ?></p>
    <?php endif; ?>

    <!-- Image Gallery -->
    <div>
        <h2>Gallery</h2>
        <?php if (count($images) > 0): ?>
            <?php foreach ($images as $image): ?>
                <img src="<?php echo $image; ?>" style="max-width: 200px; margin: 10px;">
            <?php endforeach; ?>
        <?php else: ?>
            <p>No images uploaded yet.</p>
        <?php endif; ?>
    </div>
</body>
</html>