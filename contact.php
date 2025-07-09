<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us | Ignite Kashmir Tour & Travel</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #fefefe;
      color: #333;
    }

    .contact-hero {
      background-image: url('https://images.unsplash.com/photo-1519985176271-adb1088fa94c'); /* Replace with any Kashmir photo if you prefer */
      background-size: cover;
      background-position: center;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .contact-hero::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .contact-hero h1 {
      position: relative;
      color: #fff;
      font-size: 3rem;
      text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.7);
    }

    .contact-container {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
    }

    .contact-box {
      background-color: #f4f9f9;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .contact-box h2 {
      color: #2c3e50;
      margin-bottom: 20px;
      font-size: 2rem;
    }

    .contact-info p {
      font-size: 1.1rem;
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .contact-info span {
      font-weight: bold;
      color: #16a085;
    }

    @media (max-width: 768px) {
      .contact-hero h1 {
        font-size: 2rem;
        text-align: center;
        padding: 0 20px;
      }

      .contact-box h2 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <section class="contact-hero">
    <h1>Contact Us</h1>
  </section>

  <section class="contact-container">
    <div class="contact-box">
      <h2>We're Here to Help</h2>
      <div class="contact-info">
        <p><span>Address:</span> Jammu & Kashmir, India</p>
         <p>Bechipora, Tangmarg</p>
        <p><span>Phone1:</span>9596485543</p>
        <p><span>Phone2:</span>9906652724</p>
        <p><span>Email:</span> ignitekashmir@gmail.com</p>
        <p>
          Feel free to reach out for any travel queries, custom packages, or booking assistance. 
          Our team will get back to you shortly!
        </p>
      </div>
    </div>
  </section>

</body>
</html>
