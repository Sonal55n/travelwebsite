<?php
// Include the database connection file
include('connection.php');

// Handle image upload
if (isset($_POST['upload'])) {
    if ($_FILES['image']['name']) {
        $target_dir = "uploads/";
        $file_name = basename($_FILES['image']['name']);
        $target_file = $target_dir . $file_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $query = "INSERT INTO gallery (image) VALUES ('$file_name')";
            mysqli_query($conn, $query);
            header("Location: index.php");
            exit;
        } else {
            echo "Error uploading the file.";
        }
    }
}

// Handle image deletion
if (isset($_POST['delete'])) {
    $image_id = $_POST['image_id'];
    
    // Fetch the image name from the database
    $query = "SELECT image FROM gallery WHERE id = $image_id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    
    // Delete the image file from the server
    $image_path = "uploads/" . $row['image'];
    if (file_exists($image_path)) {
        unlink($image_path);
    }

    // Delete the image entry from the database
    $delete_query = "DELETE FROM gallery WHERE id = $image_id";
    mysqli_query($conn, $delete_query);

    // Redirect back to the index page
    header("Location: gallery.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            margin-top: 20px;
        }
        .upload-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        input[type="file"] {
            margin-bottom: 15px;
        }
        .gallery {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .gallery-item {
            position: relative;
            margin: 10px;
        }
        .gallery img {
            width: 150px;
            height: 150px;
            border-radius: 8px;
            object-fit: cover;
        }
        .delete-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Upload an Image to Gallery</h1>

<div class="upload-form">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <br>
        <button type="submit" name="upload">Upload Image</button>
    </form>
</div>

<div class="gallery">
    <?php
    // Fetch images from the gallery table
    $query = "SELECT * FROM gallery";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="gallery-item">
            <img src="uploads/' . $row['image'] . '" alt="Gallery Image">
            <form method="POST" style="display:inline;">
                <input type="hidden" name="image_id" value="' . $row['id'] . '">
                <button type="submit" name="delete" class="delete-btn">&times;</button>
            </form>
        </div>';
    }
    ?>
</div>

</body>
</html>
