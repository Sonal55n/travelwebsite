<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Destination Slider</title>

  <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

  <style>
    /* Container */
    .destination-slider-section {
      width: 100%;
      padding: 30px 10px;
    }

    /* Swiper slide wrapper */
    .destination-swiper .swiper-slide {
      display: flex;
      justify-content: center;
    }

    /* Destination card */
    .destination-card {
      width: 250px;
      height: 250px;
      border-radius: 12px;
      background-size: cover;
      background-position: center;
      position: relative;
      color: white;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 15px;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
    }

    .destination-card h2 {
      margin: 0;
      font-size: 18px;
    }

    .destination-card button {
      margin-top: 6px;
      padding: 6px 12px;
      background: transparent;
      border: 1px solid white;
      color: white;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <!-- ✅ Destination Swiper Section -->
  <div class="destination-slider-section">
    <div class="swiper destination-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="destination-card" style="background-image: url('photos/srinagar.jpg');">
            <h2>Srinagar</h2>
            <button onclick="view()">View</button>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="destination-card" style="background-image: url('photos/doodh.jpg');">
            <h2>Patnitop</h2>
            <button onclick="view()">View</button>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="destination-card" style="background-image: url('photos/pahalgam.jpg');">
            <h2>Pahalgam</h2>
            <button onclick="view()">View</button>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="destination-card" style="background-image: url('photos/nubra.jpg');">
            <h2>Nubra Valley</h2>
            <button onclick="view()">View</button>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="destination-card" style="background-image: url('photos/gulmarg.jpg');">
            <h2>Gulmarg</h2>
            <button onclick="view()">View</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ✅ Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    new Swiper('.destination-swiper', {
      slidesPerView: 2,
      spaceBetween: 15,
      breakpoints: {
        640: { slidesPerView: 3 },
        768: { slidesPerView: 4 },
        1024: { slidesPerView: 5 },
      },
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });
    
    function view(){
        window.location.href="booking.php";
    }
  </script>

</body>
</html>
