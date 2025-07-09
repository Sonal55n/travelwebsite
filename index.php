<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ignite kashmir tour & travel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background:#FDFAF5;
      z-index: 1000;
      position: relative;
    }

    .logo {
      height: 80px; /* Increased size */
    }

    .menu {
      font-size: 30px;
      cursor: pointer;
    }

    .get-itinerary {
      background: black;
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      text-decoration: none;
      font-size: 14px;
    }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      width: 0;
      position: fixed;
      top: 0;
      right: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.3s;
      padding-top: 60px;
      z-index: 2000;
    }

    .sidebar a {
      padding: 10px 30px;
      text-decoration: none;
      font-size: 20px;
      color: white;
      display: block;
      transition: 0.2s;
    }

    .sidebar a:hover {
      background-color: #575757;
    }

    .closebtn {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 30px;
      color: white;
      cursor: pointer;
    }

    .swiper {
      width: 100%;
      height: 300px;
    }

    .swiper-slide {
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .slider-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 28px;
      font-weight: bold;
      text-shadow: 1px 1px 5px #000;
      text-align: center;
    }

    .section {
      padding: 20px;
      text-align: center;
    }

    .icons {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .icons div {
      text-align: center;
      margin: 10px;
    }

    .icons img {
      width: 40px;
      height: 40px;
      margin-bottom: 10px;
    }
    .whatsapp{
        position:fixed;
        top:85%;
        left:25px;
        z-index:5;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div id="mySidebar" class="sidebar">
    <span class="closebtn" onclick="closeNav()">×</span>
    <a href="index.php">Home</a>
    <a href="about.php">About us</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact Us</a>
  </div>

  <!-- Header -->
  <div class="header">
    <a href="booking.php" class="get-itinerary">Get Itinerary</a>
    <img src="photos/logo.jpg" alt="Logo" class="logo" />
    <div class="menu" onclick="openNav()">&#9776;</div>
  </div>

  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url('photos/im-2.jpg')">
        <div class="slider-text">NATURAL BEAUTY</div>
      </div>
      <div class="swiper-slide" style="background-image:url('photos/im-1.jpg')">
        <div class="slider-text">ADVENTURE TIME</div>
      </div>
      <div class="swiper-slide" style="background-image:url('photos/im-4.jpeg')">
        <div class="slider-text">SKI TRIPS</div>
      </div>
      <div class="swiper-slide" style="background-image:url('photos/im-3.jpg')">
        <div class="slider-text">UNMATCHED HOSPITALITY</div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="section">
    <h2>Waiting for Adventures?<br>Don’t miss them</h2><br>
    <p>Are you looking for some adventure to spice up your life or a much needed holiday to connect with nature?</p>
    <p>We have just the right trip ideas for you!</p>
    <div class="icons">
      <div>
        <img src="photos/tent.png" alt="Camping" />
        <p><strong>Camping</strong></p>
      </div>
      <div>
        <img src="photos/trailhead.png" alt="Trekking" />
        <p><strong>Trekking</strong></p>
      </div>
      <div>
        <img src="photos/adventure.png" alt="Adventure" />
        <p><strong>Adventure</strong></p>
      </div>
      <div>
        <img src="photos/kangaroo.png" alt="Wildlife" />
        <p><strong>Wildlife</strong></p>
      </div>
    </div>
  </div>
  
  <div class="whatsapp">
     <a href="https://wa.me/919596485543"> <img src="whatsapp.png" style="height:60px;width:60px;"></a>
  </div>
  
  <div class="section">
      <h2>Kashmir Invites the Curious</h2>
      <p>Kashmir Voyager offers the best tourism holiday packages for Jammu & Kashmir that are tastefully designed for offering the best family tour, romantic honeymoon </p>
  </div>
  <?php
  include("first.php");
  ?>
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url('photos/dal.jpg')">
        <div class="slider-text">Dal lake</div>
      </div>
      <div class="swiper-slide" style="background-image:url('photos/gurez.jpg')">
        <div class="slider-text">Gurez valley</div>
      </div>
      <div class="swiper-slide" style="background-image:url('photos/zanskar.jpeg')">
        <div class="slider-text">Zanskar</div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  
  <!-- Explore With Your Interest Section -->
<section style="padding: 40px 20px; text-align: center;">
  <h2 style="font-size: 2rem; font-weight: bold; margin-bottom: 10px;">Explore With Your Interest</h2>
  <p style="font-size: 1rem; color: #555;">See the top culture of Kashmir</p>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 30px;">
    <!-- Wazwan -->
    <div style="width: 250px; height: 250px; background-image: url('photos/wazwan.jpg'); background-size: cover; background-position: center; position: relative; border: 2px solid white; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
      <span style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold; font-size: 18px; text-shadow: 1px 1px 3px rgba(0,0,0,0.6);">Wazwan</span>
    </div>

    <!-- Gardens -->
    <div style="width: 250px; height: 250px; background-image: url('photos/gardens.jpg'); background-size: cover; background-position: center; position: relative; border: 2px solid white; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
      <span style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold; font-size: 18px; text-shadow: 1px 1px 3px rgba(0,0,0,0.6);">Gardens</span>
    </div>

    <!-- Art & Handicraft -->
    <div style="width: 250px; height: 250px; background-image: url('photos/art.jpg'); background-size: cover; background-position: center; position: relative; border: 2px solid white; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
      <span style="position: absolute; bottom: 10px; left: 10px; color: white; font-weight: bold; font-size: 18px; text-shadow: 1px 1px 3px rgba(0,0,0,0.6);">Art & Handicraft</span>
    </div>
  </div>
</section>

<?php
include("second.php");
?>
<?php
include("fotter.php");
?>


  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true
    });

    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
    }
  </script>
</body>
</html>
