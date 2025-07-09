<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Visit Kashmir </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('your-background.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .form-container {
      background: #fff;
      max-width: 500px;
      margin: 40px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container img {
      width: 120px;
      display: block;
      margin: 0 auto 10px;
    }

    .form-container h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 5px;
    }

    .form-container p.subheading {
      text-align: center;
      font-weight: 500;
      font-size: 14px;
      margin-bottom: 20px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .row {
      display: flex;
      gap: 10px;
    }

    .row input {
      flex: 1;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: black;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color: #333;
    }

    .message {
      text-align: center;
      margin-top: 10px;
      color: green;
    }

    @media(max-width: 600px) {
      .row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

<div class="form-container">
  <img src="photos/logo.jpg" alt="Kashmir">
  <h2>HELLO VISITORS</h2>
  <p class="subheading">To Know more and Customise Packages<br>Please Fill In The Form</p>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $message = $_POST['message'];

      $stmt = $conn->prepare("INSERT INTO booking (name, email, phone, country, state, message) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssss", $name, $email, $phone, $country, $state, $message);

      if ($stmt->execute()) {
        echo '<div class="message">Thanks for submitting! <br> <p>Our team contact you soon.</p></div>';
      } else {
        echo '<div class="message" style="color:red;">Error: ' . $stmt->error . '</div>';
      }
      $stmt->close();
    }
  ?>

  <form method="POST" action="">
    <div class="row">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email *" required>
    </div>
    <input type="text" name="phone" placeholder="Phone">
    <div class="row">
      <input type="text" name="country" placeholder="Country">
      <input type="text" name="state" placeholder="State *" required>
    </div>
    <textarea name="message" rows="4" placeholder="Enter Your Queries Below"></textarea>
    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
