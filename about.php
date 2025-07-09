<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Ignite Kashmir Tour & Travel</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f9f9f9;
      color: #333;
    }

    .hero {
      position: relative;
      width: 100%;
      height: 60vh;
      background-image: url('photos/about.jpg'); /* Kashmir Image */
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-overlay {
      background-color: rgba(0, 0, 0, 0.5);
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero h1 {
      color: #fff;
      font-size: 3rem;
      text-align: center;
      text-shadow: 2px 2px 10px rgba(0,0,0,0.6);
    }

    .about-section {
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .about-section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    .about-section p {
      line-height: 1.8;
      font-size: 1.1rem;
      color: #555;
    }

    .about-section span {
      color: #16a085;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
        padding: 0 20px;
      }

      .about-section {
        margin: 20px auto;
      }
    }
  </style>
</head>
<body>

  <section class="hero">
    <div class="hero-overlay">
      <h1>Welcome to Ignite Kashmir Tour & Travel</h1>
    </div>
  </section>

  <section class="about-section">
    <h2>About Us</h2>
    <p>
      <span>Ignite Kashmir Tour & Travel</span> is your trusted companion in exploring the enchanting beauty of Kashmir. 
      Our travel agency is based in the heart of the valley, run by a passionate team of local experts dedicated to offering authentic experiences. 
      Whether it’s the snow-covered peaks of Gulmarg, the tranquil waters of Dal Lake, or the charming meadows of Pahalgam, we ensure your journey is magical, safe, and memorable.
    </p>
    <br />
    <p>
      With customized travel packages, expert guides, and 24/7 support, we aim to make your Kashmir dreams come true. 
      Join us to experience the true essence of paradise on earth. Let us help you <span>ignite your adventure</span> in the land of beauty and serenity.
    </p>
  </section>

</body>
</html>
