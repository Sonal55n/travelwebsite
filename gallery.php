<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kashmir Petal Paths Tour & Travels - Gallery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Travel Gallery" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }

        .gallery-section {
            padding: 60px 20px;
            background-color: #fff;
        }

        .gallery-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .gallery-title h1 {
            font-weight: 700;
            color: #343a40;
        }

        .gallery-card {
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .gallery-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .gallery-card:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 576px) {
            .gallery-card img {
                height: 200px;
            }
        }
    </style>
</head>

<body>

    <?php include("nav.php"); ?>

    <div class="gallery-section">
        <div class="container">
            <div class="gallery-title">
                <h1>Explore Our Travel Moments</h1>
            </div>
            <div class="row">
                <?php
                include("connection.php");
                $query = "SELECT * FROM `gallery` ORDER BY id DESC";
                $sql = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($sql)) {
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="gallery-card">
                            <img src="uploads/<?php echo $row['image']; ?>" alt="Gallery Image" class="img-fluid">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
