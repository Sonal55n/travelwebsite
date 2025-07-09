<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Data - Ignite Kashmir</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f7f9;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 1100px;
      margin: auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      overflow-x: auto;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #1e3d59;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 800px;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
      white-space: nowrap;
    }
    th {
      background-color: #16a085;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    @media(max-width: 768px) {
      .container {
        padding: 15px;
      }
      h1 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Booking Submissions</h1>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Country</th>
          <th>State</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $result = $conn->query("SELECT * FROM booking ORDER BY id DESC");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>" . htmlspecialchars($row['name']) . "</td>
                      <td>" . htmlspecialchars($row['email']) . "</td>
                      <td>" . htmlspecialchars($row['phone']) . "</td>
                      <td>" . htmlspecialchars($row['country']) . "</td>
                      <td>" . htmlspecialchars($row['state']) . "</td>
                      <td>" . htmlspecialchars($row['message']) . "</td>
                    </tr>";
            }
          } else {
            echo "<tr><td colspan='6' style='text-align:center;'>No bookings found</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
