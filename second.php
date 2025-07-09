<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Why Choose Us</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
    }

    .why-choose-container {
      position: relative;
      height: 60vh;
      overflow: hidden;
      color: white;
    }

    .why-choose-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .why-choose-content {
      position: relative;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
      flex-direction: column;
      background: rgba(0, 0, 0, 0.4); /* optional for text contrast */
    }

    .why-choose-content h2 {
      font-size: 2.8rem;
      margin-bottom: 20px;
    }

    .why-choose-content p {
      font-size: 1.2rem;
      max-width: 800px;
      line-height: 1.6;
    }

    .call-btn {
      margin-top: 30px;
      background-color: black;
      border: none;
      padding: 12px 24px;
      color: white;
      font-size: 1rem;
      border-radius: 50px;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
    }

    .call-btn i {
      font-size: 1.2rem;
    }

    .know-more-btn {
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      background-color: black;
      color: white;
      padding: 12px 8px;
      border-radius: 0 15px 15px 0;
      writing-mode: vertical-rl;
      text-orientation: upright;
      font-size: 1rem;
      letter-spacing: 4px;
    }

    @media (max-width: 768px) {
      .why-choose-content h2 {
        font-size: 2rem;
      }

      .why-choose-content p {
        font-size: 1rem;
      }
    }
  </style>

  <!-- Font Awesome for phone icon -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

  <div class="why-choose-container">
    <!-- Background Video -->
    <video autoplay muted loop playsinline>
      <source src="kashmir.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

 

    <!-- Main Content -->
    <div class="why-choose-content">
      <h2>Why Choose Us</h2>
      <p>
        Our tour packages are well designed, keeping in mind practical experience,<br>
        geographical routing and customized considerations. Tell us your needs, and we<br>
        will do the rest…
      </p>
      <button class="call-btn">
        <i class="fas fa-phone"></i> +91-9596485543
      </button>
    </div>
  </div>

</body>
</html>
