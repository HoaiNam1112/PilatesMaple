<?php
require('header.php');
echo '<form method="post" action="">'; require "connect.php";
mysqli_set_charset($conn, 'UTF8'); ?>


<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

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
  .class-section {
  display: flex;
  width: 100%;
  max-width: 1600px;
  margin: 50px auto;
  gap: 20px;
}

.class-box {
  position: relative;
  width: 50%;
  overflow: hidden;
  cursor: pointer;
  border-radius: 10px;
}

.class-box img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.class-box:hover img {
  transform: scale(1.1); /* Zoom nhẹ khi hover */
}

.label {
  position: absolute;
  bottom: 20px;
  left: 20px;
  font-size: 2em;
  color: white;
  font-weight: bold;
  text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
}

.class-footer {
  background-color: #e0e0e0; /* màu xám nhạt */
  text-align: center;
  font-size: 2.5em;
  font-weight: bold;
  padding: 40px 0;
  margin-top: 50px;
  color: #333;
  letter-spacing: 2px;
}

/* Card slider container */
.pp-card-slider-wrapper {
  max-width: 800px;
  margin: 0 auto;
  position: relative;
}

/* Slide item */
.pp-card-slider-item {
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
}

/* Image styling */
.pp-card-slider-image img {
  width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.pp-card-slider-image img:hover {
  transform: scale(1.03);
}

/* Content wrap */
.pp-card-slider-content-wrap {
  margin-top: 15px;
  font-family: 'Segoe UI', sans-serif;
}

/* Meta icon and text */
.pp-card-slider-date {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-weight: bold;
  color: #444;
}

.pp-card-slider-meta-icon i {
  color: #f57c00;
}

/* Description */
.pp-card-slider-content p {
  margin-top: 8px;
  font-size: 1rem;
  color: #666;
}

/* Pagination bullets */
.swiper-pagination-bullet {
  background: #ccc;
  opacity: 1;
  margin: 0 6px !important;
  transition: background 0.3s ease;
}

.swiper-pagination-bullet-active {
  background: #f57c00;
}

.flipbox-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 24px;
  margin: 40px auto;
}

.pp-flipbox {
  width: 240px;
  height: 320px;
  perspective: 1000px;
}

.pp-flipbox-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.6s ease;
  transform-style: preserve-3d;
}

.pp-flipbox:hover .pp-flipbox-inner {
  transform: rotateY(180deg);
}

.pp-flipbox-front, .pp-flipbox-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  text-align: center;
}

.pp-flipbox-front {
  background: #fff;
}

.pp-flipbox-front img {
  width: 100%;
  height: 220px;
  object-fit: cover;
}

.pp-flipbox-front .title {
  padding: 12px;
  font-size: 16px;
  font-weight: bold;
  color: #333;
}

.pp-flipbox-back {
  background-color: #222;
  color: #fff;
  transform: rotateY(180deg);
  padding: 20px;
  justify-content: center;
}

.pp-flipbox-back h3 {
  font-size: 16px;
  margin-bottom: 10px;
}

.pp-flipbox-back p {
  font-size: 14px;
  line-height: 1.5;
}

.pp-flipbox-back a {
  margin-top: 12px;
  color: #f57c00;
  text-decoration: underline;
  font-weight: bold;
}

@media (max-width: 768px) {
  .pp-flipbox {
    width: 160px;
    height: 240px;
  }

  .pp-flipbox-front img {
    height: 160px;
  }

  .pp-flipbox-front .title {
    font-size: 14px;
    padding: 8px;
  }

  .pp-flipbox-back {
    padding: 15px;
    font-size: 12px;
  }
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

  <!-- Phần giới thiệu lớp học Yoga & Pilates -->
<div class="class-section">
  <div class="class-box">
    <img src="../pic/khoa-hoc-yoga-1.jpg" alt="Yoga">
    <div class="label">YOGA</div>
  </div>
  <div class="class-box">
    <img src="../pic/pilates.jpg" alt="Pilates">
    <div class="label">PILATES</div>
  </div>
</div>

<div class="class-footer">ĐỊA CHỈ LỚP HỌC</div>


<div class="pp-card-slider-wrapper swiper-container-wrap">
  <div class="pp-card-slider pp-swiper-slider swiper-container-fade" 
       data-slider-settings='{
         "direction":"horizontal",
         "speed":400,
         "effect":"fade",
         "slidesPerView":1,
         "grabCursor":false,
         "autoHeight":false,
         "loop":true,
         "fadeEffect":{"crossFade":true},
         "autoplay":{"delay":3000,"disableOnInteraction":false},
         "pagination":{"el":".swiper-pagination","type":"bullets","clickable":true}
       }'>
       
    <div class="swiper-wrapper">

      <!-- Slide 1: Hà Nội -->
      <div class="pp-card-slider-item swiper-slide">
        <div class="pp-card-slider-image">
          <a href="https://paragate.vn/wp-content/uploads/2023/09/Paragate_Ha_Noi.jpg" class="elementor-clickable">
            <img src="../pic/cơ_sở_trichsai.jpg" alt="Cơ sở Hà Nội" />
          </a>
        </div>
        <div class="pp-card-slider-content-wrap">
          <div class="pp-card-slider-date">
            <span class="pp-card-slider-meta-icon pp-icon"><i class="fas fa-calendar-alt"></i></span>
            <span class="pp-card-slider-meta-text">Cơ sở Hà Nội</span>
          </div>
          <div class="pp-card-slider-content">
            <p>35/52 Tô Ngọc Vân – Tây Hồ, Hà Nội</p>
          </div>
        </div>
      </div>

      <!-- Slide 2: Đà Nẵng -->
      <div class="pp-card-slider-item swiper-slide">
        <div class="pp-card-slider-image">
          <a href="https://paragate.vn/wp-content/uploads/2023/09/Paragate_Da_Nang-1.jpg" class="elementor-clickable">
            <img src="../pic/cơ_sở_danang.jpg" alt="Cơ sở Đà Nẵng" />
          </a>
        </div>
        <div class="pp-card-slider-content-wrap">
          <div class="pp-card-slider-date">
            <span class="pp-card-slider-meta-icon pp-icon"><i class="fas fa-calendar-alt"></i></span>
            <span class="pp-card-slider-meta-text">Cơ sở Đà Nẵng (CS nhượng quyền)</span>
          </div>
          <div class="pp-card-slider-content">
            <p>59A Lê Lợi, Thạch Thang, Quận Hải Châu, Tp Đà Nẵng</p>
          </div>
        </div>
      </div>

      <!-- Slide 3: Hồ Chí Minh -->
      <div class="pp-card-slider-item swiper-slide">
        <div class="pp-card-slider-image">
          <a href="https://paragate.vn/wp-content/uploads/2025/03/z6441397725213_025c4335871c0b85f41b825100dc75fe.jpg" class="elementor-clickable">
            <img src="../pic/cơ_sở_hcm.jpg" alt="Cơ sở Hồ Chí Minh" />
          </a>
        </div>
        <div class="pp-card-slider-content-wrap">
          <div class="pp-card-slider-date">
            <span class="pp-card-slider-meta-icon pp-icon"><i class="fas fa-calendar-alt"></i></span>
            <span class="pp-card-slider-meta-text">Cơ sở Hồ Chí Minh (CS nhượng quyền)</span>
          </div>
          <div class="pp-card-slider-content">
            <p>Tầng 2, Safomec Building, 7/1 Thành Thái, Quận 10, Hồ Chí Minh</p>
          </div>
        </div>
      </div>

      <!-- Slide 4: Hội An -->
      <div class="pp-card-slider-item swiper-slide">
        <div class="pp-card-slider-image">
          <a href="https://paragate.vn/wp-content/uploads/2023/09/Paragate_Hoi_An.jpg" class="elementor-clickable">
            <img src="../pic/cơ_sở_2.jpg" alt="Cơ sở Hội An" />
          </a>
        </div>
        <div class="pp-card-slider-content-wrap">
          <div class="pp-card-slider-date">
            <span class="pp-card-slider-meta-icon pp-icon"><i class="fas fa-calendar-alt"></i></span>
            <span class="pp-card-slider-meta-text">Cơ sở Hội An</span>
          </div>
          <div class="pp-card-slider-content">
            <p>Đường Nguyễn Phúc Chu, Phường Minh An, TP Hội An</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sliderEl = document.querySelector(".pp-swiper-slider");

    if (sliderEl) {
      const settings = JSON.parse(sliderEl.getAttribute("data-slider-settings"));

      new Swiper(sliderEl, {
        ...settings,
        on: {
          init: function () {
            console.log("Swiper đã khởi tạo thành công!");
          }
        }
      });
    }
  });
</script>

<div class="class-footer">Các Lớp Học </div>

<div class="flipbox-container">
  <!-- Flipbox 1: Yoga Thảm -->
  <div class="pp-flipbox">
    <div class="pp-flipbox-inner">
      <div class="pp-flipbox-front">
        <img src="../pic/yoga_thảm.jpg" alt="Yoga Thảm">
        <h3>YOGA THẢM</h3>
      </div>
      <div class="pp-flipbox-back">
        <h3>YOGA THẢM</h3>
        <p>Lớp Yoga tập trung vào việc thực hành các tư thế Yoga truyền thống, phương pháp thở và sự chú tâm.</p>
        <a href="/lich-tap-tai-paragate/">Xem lịch tập</a>
      </div>
    </div>
  </div>

  <!-- Flipbox 2: Yoga Bay -->
  <div class="pp-flipbox">
    <div class="pp-flipbox-inner">
      <div class="pp-flipbox-front">
        <img src="../pic/yoga_bay.png" alt="Yoga Bay">
        <h3>YOGA BAY</h3>
      </div>
      <div class="pp-flipbox-back">
        <h3>YOGA BAY</h3>
        <p>
						Yoga Bay là các động tác Yoga được ứng dụng cùng dải dây lụa được treo lên từ độ cao khoảng 3m. </p>
        <a href="/lich-tap-tai-paragate/">Xem lịch tập</a>
      </div>
    </div>
  </div>

  <!-- Flipbox 3: Pilates Thảm -->
  <div class="pp-flipbox">
    <div class="pp-flipbox-inner">
      <div class="pp-flipbox-front">
        <img src="../pic/phamhuong.jpg" alt="Pilates Thảm">
        <h3>PILATES THẢM</h3>
      </div>
      <div class="pp-flipbox-back">
        <h3>PILATES THẢM</h3>
        <p>	Các lớp Pilates tập trung vào sự phối hợp của toàn bộ cơ thể. </p>
        <a href="/lich-tap-tai-paragate/">Xem lịch tập</a>
      </div>
    </div>
  </div>

  <!-- Flipbox 4: Pilates Reformer -->
  <div class="pp-flipbox">
    <div class="pp-flipbox-inner">
      <div class="pp-flipbox-front">
        <img src="../pic/pilates.jpg" alt="Pilates Reformer">
        <h3>PILATES REFORMER</h3>
      </div>
      <div class="pp-flipbox-back">
        <h3>PILATES REFORMER</h3>
        <p>Các lớp Pilates kết hợp sử dụng máy Pilates Reformer. </p>
        <a href="/lich-tap-tai-paragate/">Xem lịch tập</a>
      </div>
    </div>
  </div>
</div>




</body>



</html>
<?php
require('footer.php');
?>