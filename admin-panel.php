<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel | Ignite Kashmir Tour & Travel</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f7f9;
      color: #2c3e50;
    }

    .admin-wrapper {
      max-width: 1200px;
      margin: 60px auto;
      padding: 20px;
    }

    .header {
      text-align: center;
      margin-bottom: 50px;
    }

    .header h1 {
      font-size: 2.8rem;
      color: #1e3d59;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 30px;
      padding: 20px;
    }

    .card {
      background: white;
      border-radius: 16px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.07);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
    }

    .card i {
      font-size: 3rem;
      color: #16a085;
      margin-bottom: 15px;
    }

    .card h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
    }

    .card p {
      color: #555;
      font-size: 0.95rem;
    }

    .card a {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #16a085;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s ease;
    }

    .card a:hover {
      background: #13856f;
    }

    @media (max-width: 500px) {
      .header h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <div class="admin-wrapper">
    <div class="header">
      <h1>Admin Dashboard</h1>
      <p style="color: #7a7a7a;">Manage Ignite Kashmir Tour & Travel</p>
    </div>

    <div class="card-container">

      <div class="card">
        <i class="bi bi-calendar-check-fill"></i>
        <h3>Booking Data</h3>
        <p>View and manage all customer bookings and travel plans.</p>
        <a href="booking-data.php">View Bookings</a>
      </div>

      <div class="card">
        <i class="bi bi-images"></i>
        <h3>Upload Gallery</h3>
        <p>Add beautiful Kashmir photos to your travel gallery.</p>
        <a href="upload-gallery.php">Upload Now</a>
      </div>

    </div>
  </div>

</body>
</html>
