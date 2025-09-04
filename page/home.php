<?php
require('header.php');
echo '<form method="post" action="">'; require "connect.php";
mysqli_set_charset($conn, 'UTF8'); ?>


<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragate Pilates</title>
  <style>
    .slider {
      position: relative;
      width: 100%;
      max-width: 1600px;
      margin: auto;
      overflow: hidden;
    }

    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }

    .slide img {
      width: 100%;
      height: 500px;
      /* Đặt chiều cao banner cố định */
      object-fit: cover;
      /* Crop ảnh cho đẹp */
      display: block;
    }

    /* Nút mũi tên */
    .arrow {
      position: absolute;
      top: 50%;
      /* căn giữa theo chiều cao slider */
      transform: translateY(-50%);
      /* dịch đúng giữa */
      background: rgba(0, 0, 0, 0.5);
      color: #fff;
      border: none;
      font-size: 30px;
      padding: 10px;
      cursor: pointer;
      border-radius: 50%;
      z-index: 10;
    }

    .arrow.left {
      left: 20px;
    }

    .arrow.right {
      right: 20px;
    }
  </style>
</head>

<body>
  <!-- Banner Slider -->
  <div class="slides">
    <div class="slide">
      <img src="../pic/banner.jpg" alt="Banner 1">
    </div>
    <div class="slide">
      <img src="../pic/paragate-pilates-website-banner-web-scaled.jpg" alt="Banner 2">
    </div>
    <div class="slide">
      <img src="../pic/paragate-web-02-scaled.jpg" alt="Banner 3">
    </div>
  </div>


  <!-- Nút mũi tên -->
  <button class="arrow left" onclick="prevSlide()">&#10094;</button>
  <button class="arrow right" onclick="nextSlide()">&#10095;</button>
  </div>

  <script>
    let currentIndex = 0;
    const slides = document.querySelector(".slides");
    const totalSlides = document.querySelectorAll(".slide").length;

    function updateSlide() {
      slides.style.transform = `translateX(${-currentIndex * 100}%)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlide();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateSlide();
    }

    // Tự động chạy sau 2 giây
    setInterval(nextSlide, 5000);
  </script>
</body>



</html>
<?php
require('footer.php');
?>