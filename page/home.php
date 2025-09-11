<?php
require('header.php');
echo '<form method="post" action="">';
require "connect.php";
mysqli_set_charset($conn, 'UTF8'); ?>


<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <title>Paragate Pilates</title>
  <style>
    .slider {
      position: relative;
      width: 100%;
      max-width: 1200px;
      /* Giới hạn chiều rộng để không tràn */
      margin: 40px auto;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
      height: auto;
      max-height: 600px;
      /* Tăng chiều cao nếu muốn ảnh to hơn */
      object-fit: cover;
      display: block;
    }


    /* Nút mũi tên */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
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
      left: 30px;
    }

    .arrow.right {
      right: 30px;
    }



    .class-section {
      display: flex;
      justify-content: center;
      /* Căn giữa toàn bộ */
      gap: 20px;
      /* Khoảng cách giữa 2 ảnh */
      margin: 50px auto;
      flex-wrap: wrap;
      /* Đảm bảo responsive nếu cần */
    }

    .class-box {
      position: relative;
      width: 400px;
      height: 300px;
      /* Hình vuông */
      overflow: hidden;
      cursor: pointer;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      /* Đổ bóng nhẹ */
    }

    .class-box img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
      border-radius: 10px;
    }

    .class-box:hover img {
      transform: scale(1.55);
      /* Zoom nhẹ khi hover */
    }

    @media (max-width: 768px) {
      .class-box {
        width: 200px;
        height: 200px;
      }
    }


    .label {
      position: absolute;
      bottom: 20px;
      left: 20px;
      font-size: 2em;
      color: white;
      font-weight: bold;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .class-footer {
      background-color: #F9FAFA;
      text-align: center;
      font-size: 1.85em;
      font-weight: bold;
      padding: 40px 0;
      margin-top: 50px;
      color: #2e2b2bff;
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
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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

    .pp-flipbox-front,
    .pp-flipbox-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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

    .teacher-section {

      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .teacher-header h3 {
      font-size: 1.6em;
      font-weight: 600;
      color: #222;
      margin-bottom: 30px;
      text-align: center;
      letter-spacing: 1px;
    }

    .layout-label {

      top: 15px;
      left: 15px;

      color: #7a7171ff;
      padding: 8px 15px;
      border-radius: 6px;
      font-size: 1em;
      font-weight: 600;
      z-index: 10;
    }

    .teacher-grid {
      position: relative;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    .teacher-card {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    }

    .teacher-card img {
      width: 100%;
      height: 240px;
      object-fit: cover;
      display: block;
      border-radius: 12px;
    }

    /* Khi hiện ra */
    .teacher-card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    @media (max-width: 768px) {
      .teacher-grid {
        grid-template-columns: 1fr;
      }

      .teacher-card img {
        height: auto;
      }
    }

    .article-section {
      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .article-title {
      font-size: 1.6em;
      font-weight: 600;
      color: #222;
      margin-bottom: 30px;
      text-align: center;
      letter-spacing: 1px;
    }

    .article-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .article-card {
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .article-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .article-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }

    .article-card p {
      padding: 15px;
      font-size: 1em;
      color: #333;
      line-height: 1.4;
      font-weight: 500;
    }

    //
    .Layout {
      display: flex;
      justify-content: center;
      /* Căn ngang */
      align-items: center;
      /* Căn dọc */
      min-height: 100vh;
      /* Chiều cao full màn hình */
      margin: 0;
    }

    .square-layout {

      width: 1000px;
      margin: 60px auto;
      padding: 0 15px;

    }

    .layout-title {
      font-size: 1.6em;
      font-weight: 600;
      text-align: center;
      margin-bottom: 30px;
      color: #222;
    }

    .layout-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
      height: 500px;
      border-radius: 12px;
      overflow: hidden;
    }

    .layout-left,
    .top-right,
    .bottom-card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      opacity: 0;
      transform: translateY(30px);
      transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .layout-left img,
    .top-right img,
    .bottom-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
      filter: brightness(0.8);

    }

    .layout-left:hover img,
    .top-right:hover img,
    .bottom-card:hover img {
      transform: scale(1.05);
    }

    .caption {
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);

      position: absolute;
      bottom: 15px;
      left: 15px;
      right: 15px;
      color: #fff;
      font-size: 1.3em;
      /* chữ to hơn */
      font-weight: 650;
      /* đậm hơn */
      line-height: 1.5;
      z-index: 2;
      opacity: 1;
      /* luôn hiện chữ */
      background: none;
      /* không cần nền đen nữa */
    }


    .layout-left:hover .caption,
    .top-right:hover .caption,
    .bottom-card:hover .caption {
      opacity: 1;
    }

    .layout-left {
      height: 100%;
    }

    .layout-right {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .top-right {
      height: 50%;
    }

    .bottom-right {
      display: flex;
      gap: 20px;
      height: 50%;
    }

    .bottom-card {
      flex: 1;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .layout-grid {
        grid-template-columns: 1fr;
        height: auto;
      }

      .layout-right {
        flex-direction: row;
        gap: 15px;
      }

      .top-right,
      .bottom-card {
        height: 200px;
      }

      .bottom-right {
        flex-direction: column;
      }
    }

    //
    .quote-slider {
      width: 100%;
      padding: 40px 20px;
      background: #f9fafa;
      text-align: center;
    }

    .quote-slider p {
      font-size: 1.2em;
      font-style: italic;
      color: #555;
      max-width: 700px;
      margin: 0 auto;
      line-height: 1.6;
    }

    // 
    .training-section {
      width: 90%;
      max-width: 900px;
      margin: 40px auto;
    }

    .training-section.small-box {
      max-width: 1200px;
      margin: 40px auto;
      /* Thu nhỏ riêng khi thêm class small-box */
    }

    .training-title {
      text-align: center;
      font-size: 1.8em;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .training-item {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-bottom: 40px;
    }

    .training-item.reverse {
      flex-direction: row-reverse;
    }

    .training-img {
      flex: 1;
      max-width: 40%;
    }

    .training-img img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .training-content {
      flex: 1;
      max-width: 50%;
    }

    .training-content h3 {
      font-size: 1.2em;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .training-content p {
      margin-bottom: 15px;
      line-height: 1.5;
      color: #444;
      font-size: 0.9em;
    }

    .btn-learn {
      background: #e63946;
      border: none;
      color: white;
      padding: 8px 18px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
      font-size: 0.9em;
    }

    .btn-learn:hover {
      background: #d62828;
    }

    /* --- Animation --- */
    .from-left,
    .from-right {
      opacity: 0;
      transition: all 0.8s ease-out;
    }

    .from-left {
      transform: translateX(-80px);
    }

    .from-right {
      transform: translateX(80px);
    }

    .show {
      opacity: 1;
      transform: translateX(0);
    }

    /* Responsive */
    @media (max-width: 768px) {

      .training-item,
      .training-item.reverse {
        flex-direction: column;
      }

      .training-img,
      .training-content {
        max-width: 100%;
      }
    }

    //

    /* Section chính */
    .testimonial-section {
      text-align: center;
      padding: 50px 20px;
      background: #f9f9f9;
    }

    /* Tiêu đề căn giữa */
    .testimonial-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 40px;
      text-align: center;
    }

    /* Container testimonial */
    .testimonial-container {
      position: relative;
      max-width: 800px;
      margin: 0 auto;
      height: 180px;
      /* hoặc chiều cao phù hợp */
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Testimonial item */
    .testimonial {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
      display: flex;
      flex-direction: row;
      align-items: center;
      gap: 20px;
      justify-content: center;
      pointer-events: none;
    }

    /* Khi active */
    .testimonial.active {
      opacity: 1;
      transform: translateY(0);
      pointer-events: auto;
      z-index: 1;
    }


    /* Ảnh bo tròn */
    .testimonial-img img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
    }

    /* Nội dung */
    .testimonial-content {
      text-align: left;
      max-width: 500px;
    }

    .testimonial-content p {
      font-style: italic;
      color: #555;
      margin-bottom: 10px;
    }

    .testimonial-name {
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    /* Container của dấu chấm */
    .testimonial-dots {
      display: flex;
      justify-content: center;
      /* Căn giữa ngang */
      align-items: center;
      /* Căn giữa dọc nếu cần */
      margin-top: 20px;
      gap: 8px;
    }

    /* Style từng chấm */
    .dot {
      height: 5px;
      width: 5px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .dot.active {
      background-color: #333;
    }


    /* Hiệu ứng fade */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    //
    .testimonial-section {
      display: flex;
      justify-content: center;
      /* Căn giữa ngang */
      align-items: center;
      /* Căn giữa dọc */
      min-height: 200px;
      /* Chiều cao tối thiểu để căn giữa */
      background: #fff;
      /* Nền trắng */
    }

    .follow-section {
      margin: 40px 0;
      text-align: center;
      font-size: 18px;
      color: #5a4636;
      /* màu nâu nhạt */
    }

    .follow-section .brand {
      font-weight: bold;
    }

    .follow-section a {
      color: #1877f2;
      /* màu xanh facebook */
      font-weight: bold;
      text-decoration: none;
    }

    .follow-section a:hover {
      text-decoration: underline;
    }

    //
    .map-section {
      margin: 50px 0;
      /* cách trên dưới */
      text-align: center;
    }

    .map-container {
      max-width: 1686px;
      margin: 0 auto;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
    }

    //
    /* Căn giữa form */
    .center-wrapper {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      /* Không chiếm toàn bộ chiều cao */
      padding-top: 60px;
    }

    /* Form nhỏ gọn */
    .form-container {
      display: flex;
      flex-direction: column;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
      margin: 100px auto;
    }

    /* Tiêu đề */
    .form-container h2 {
      text-align: center;
      color: #e91e63;
      margin-bottom: 20px;
    }

    /* Nhóm form */
    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
    }

    /* Giới tính */
    .form-group.gender {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    .form-group.gender label {
      font-weight: normal;
    }

    /* Nút đăng ký */
    .submit-btn {
      background-color: #e91e63;
      color: white;
      border: none;
      padding: 12px;
      width: 40%;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #d81b60;
    }

    /* Nút đăng ký căn giữa */
    .button-wrapper {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .submit-btn {
      background-color: #e91e63;
      color: white;
      border: none;
      padding: 12px 24px;
      font-size: 16px;
      border-radius: 15px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #d81b60;
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
    document.addEventListener("DOMContentLoaded", function() {
      const sliderEl = document.querySelector(".pp-swiper-slider");

      if (sliderEl) {
        const settings = JSON.parse(sliderEl.getAttribute("data-slider-settings"));

        new Swiper(sliderEl, {
          ...settings,
          on: {
            init: function() {
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
          <p> Các lớp Pilates tập trung vào sự phối hợp của toàn bộ cơ thể. </p>
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


  <section class="teacher-section">
    <div class="teacher-header">
      <h3>ĐỘI NGŨ GIÁO VIÊN</h3>
    </div>
    <div class="layout-label">Tất cả giáo viên</div>
    <div class="teacher-grid">
      <div class="teacher-card"><img src="../pic/hien.jpg" alt="Võ Thị Hiền"></div>
      <div class="teacher-card"><img src="../pic/hai.jpg" alt="Võ Thị Hải"></div>
      <div class="teacher-card"><img src="../pic/hongthuy.png" alt="Hồng Thúy"></div>
      <div class="teacher-card"><img src="../pic/ngocthuy.png" alt="Ngọc Thúy"></div>
      <div class="teacher-card"><img src="../pic/nga.png" alt="Nga Yopi"></div>
      <div class="teacher-card"><img src="../pic/phamhuong.png" alt="Phạm Hướng"></div>
      <div class="teacher-card"><img src="../pic/chiyen.png" alt="Hải Yến"></div>
      <div class="teacher-card"><img src="../pic/dothihuong.jpg" alt="Đỗ Thị Hương"></div>
      <div class="teacher-card"><img src="../pic/hongthuy.png" alt="Hồng Thúy"></div>
      <!-- Thêm bao nhiêu ảnh tùy bạn -->
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.teacher-card');

        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
              observer.unobserve(entry.target);
            }
          });
        }, {
          threshold: 0.2
        });

        cards.forEach(card => observer.observe(card));
      });
    </script>

  </section>


  <section class="square-layout">
    <h3 class="layout-title">KHÁM PHÁ PILATES</h3>
    <div class="Layout">
      <div class="layout-grid">
        <div class="layout-left">
          <img src="../pic/nentap.jpg" alt="Pilates lớn">
          <div class="caption">Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</div>
        </div>

        <div class="layout-right">
          <div class="top-right">
            <img src="../pic/visao.jpg" alt="Pilates nhỏ trên">
            <div class="caption">Một buổi đào tạo HLV Pilates diễn ra thế nào?</div>
          </div>
          <div class="bottom-right">
            <div class="bottom-card">
              <img src="../pic/visao2.jpg" alt="Pilates nhỏ dưới 1">
              <div class="caption">Vì sao dân văn phòng nên tập Pilates?</div>
            </div>
            <div class="bottom-card">
              <img src="../pic/visao3.jpg" alt="Pilates nhỏ dưới 2">
              <div class="caption">Mất bao lâu để trở thành huấn luyện viên Pilates?</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const items = document.querySelectorAll('.layout-left, .top-right, .bottom-card');

        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.style.opacity = 1;
              entry.target.style.transform = 'translateY(0)';
              observer.unobserve(entry.target);
            }
          });
        }, {
          threshold: 0.2
        });

        items.forEach(item => observer.observe(item));
      });
    </script>

  </section>

  <!-- Quote Slider -->
  <div class="quote-slider swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <p>"Hạnh phúc và Bình An không đến từ Thế giới bên ngoài mà nó nằm ở bên trong Chính Bạn."</p>
      </div>
      <div class="swiper-slide">
        <p>"Sức mạnh thực sự đến từ sự kiên trì và niềm tin vào bản thân."</p>
      </div>
      <div class="swiper-slide">
        <p>"Mỗi ngày tập luyện là một bước tiến gần hơn đến phiên bản tốt nhất của bạn."</p>
      </div>
    </div>

    <!-- Dấu chấm điều hướng -->
    <div class="swiper-pagination"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script>
    const swiper = new Swiper(".quote-slider", {
      loop: true,
      autoplay: {
        delay: 5000, // 2 giây
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>


  <section class="training-section small-box">
    <h2 class="training-title">KHÓA ĐÀO TẠO</h2>

    <div class="training-item">
      <div class="training-img from-left">
        <img src="../pic/pilates-classes-7-1.jpeg" alt="Mat Plus">
      </div>
      <div class="training-content from-right">
        <h3>STOTT PILATES® Intensive Mat Plus™</h3>
        <p>
          Khóa đào tạo
          <strong>IMP (STOTT PILATES® Intensive Mat-Plus)</strong> –
          Khóa đào tạo giáo viên thảm Pilates Cơ bản và Trung cấp của STOTT PILATES®
        </p>
        <p class="training-desc">
          Khóa học này dành cho những ai đang làm việc trong lĩnh vực thể dục hoặc vận động,
          cũng như những ai muốn được đào tạo bài bản để trở thành Huấn luyện viên dạy thảm Pilates.
        </p>
        <button class="btn-learn">Xem thêm</button>
      </div>
    </div>

    <div class="training-item reverse">
      <div class="training-img from-right">
        <img src="../pic/pilates-classes-6-1.jpeg" alt="Reformer">
      </div>
      <div class="training-content from-left">
        <h3>STOTT PILATES® Intensive Reformer (IR)</h3>
        <p>
          <strong>Khóa học STOTT PILATES® Intensive Reformer (IR)</strong>
        </p>
        <p>
          Khóa học này dành cho những ai đang làm việc trong lĩnh vực thể dục hoặc vận động,
          cũng như những ai muốn được đào tạo bài bản để trở thành Huấn luyện viên dạy máy Reformer Pilates.
        </p>
        <button class="btn-learn">Xem thêm</button>
      </div>
    </div>

    <div class="training-item">
      <div class="training-img from-left">
        <img src="../pic/pilates-classes-1-1.jpeg" alt="Chair">
      </div>
      <div class="training-content from-right">
        <h3>STOTT PILATES® Intensive Cadillac, Chair & Barrel (ICCB)</h3>
        <p>
          <strong>Khóa học Intensive Cadillac, Chair &amp; Barrel (ICCB)</strong>
          cung cấp cho học viên một Chương trình Đào tạo Pilates Toàn diện số 1 Thế giới.
        </p>
        <p>
          Chương trình gồm 3 modules:
          <strong>Intensive Cadillac (ICAD), Intensive Stability Chair™ (ICHR), Intensive Barrels (IBRL)</strong>.
        </p>
        <button class="btn-learn">Xem thêm</button>
      </div>
    </div>

    <div class="training-item reverse">
      <div class="training-img from-right">
        <img src="../pic/visao3.jpg" alt="Gyrotonic">
      </div>
      <div class="training-content from-left">
        <h3>GYROTONIC® Foundation</h3>
        <p>
          Hãy trở thành <strong>Giáo viên ĐẦU TIÊN TẠI VIỆT NAM</strong>
          giảng dạy về <strong>GYROTONIC® EXPANSION SYSTEM</strong> –
          phương pháp tập luyện nổi tiếng thế giới.
        </p>
        <p>
          Chương trình <strong>Gyrotonic Foundation</strong> dành cho những ai mong muốn làm việc trong lĩnh vực thể dục, vận động và quan tâm đến bộ môn phù hợp cho mọi lứa tuổi, với nhiều thể trạng và bệnh lý khác nhau.
        </p>
        <button class="btn-learn">Xem thêm</button>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const elements = document.querySelectorAll('.from-left, .from-right');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.2
      });

      elements.forEach(el => observer.observe(el));
    });
  </script>


  <section class="testimonial-section">
    <h2 class="testimonial-title">CHIA SẺ CỦA HỌC VIÊN VỀ PĀRAGATE®</h2>

    <div class="testimonial-container">

      <div class="testimonial active">
        <div class="testimonial-img">
          <img src="../pic/hocvien1.jpg" alt="Hoài Hương">
        </div>
        <div class="testimonial-content">
          <p>"Trước đây đã từng tập Yoga nhưng thấy không phù hợp. Đến khi gặp Mrs Yến với môn Yoga Bay mình thấy rất thích và rất hứng thú..."</p>
          <h3 class="testimonial-name">Hoài Hương</h3>
        </div>
      </div>

      <div class="testimonial">
        <div class="testimonial-img">
          <img src="../pic/hocvien2.jpg" alt="Thanh Lan">
        </div>
        <div class="testimonial-content">
          <p>"Mình cảm thấy cơ thể khỏe mạnh và tinh thần thoải mái hơn sau khóa học. Cảm ơn các huấn luyện viên tận tình!"</p>
          <h3 class="testimonial-name">Thanh Lan</h3>
        </div>
      </div>

      <div class="testimonial">
        <div class="testimonial-img">
          <img src="../pic/hocvien3.jpg" alt="Minh Tuấn">
        </div>
        <div class="testimonial-content">
          <p>"Một trải nghiệm tuyệt vời, các bài tập đa dạng và hiệu quả. Rất đáng để tham gia lâu dài."</p>
          <h3 class="testimonial-name">Minh Tuấn</h3>
        </div>
      </div>
    </div>

    <!-- Pagination dots -->
    <div class="testimonial-dots">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

  </section>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let currentIndex = 0;
      const testimonials = document.querySelectorAll(".testimonial");
      const dots = document.querySelectorAll(".dot");

      function showTestimonial(index) {
        testimonials.forEach((t, i) => {
          t.classList.remove("active");
          dots[i].classList.remove("active");
        });
        testimonials[index].classList.add("active");
        dots[index].classList.add("active");
      }

      function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        showTestimonial(currentIndex);
      }

      setInterval(nextTestimonial, 5000);

      dots.forEach((dot, i) => {
        dot.addEventListener("click", () => {
          currentIndex = i;
          showTestimonial(currentIndex);
        });
      });

      showTestimonial(currentIndex);
    });
  </script>


  <section class="testimonial-section">
    <!-- Text follow -->
    <div class="follow-section">
      <p>
        Theo dõi <span class="brand">@PĀRAGATE®</span> trên
        <a href="https://www.facebook.com/yourpage" target="_blank">FACEBOOK</a>
      </p>
    </div>
  </section>

  <section class="map-section">
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4225033987426!2d106.694876!3d10.777054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c8b8fbd8f%3A0xa13e5a2e4c6e89c!2zMTgwQyBIYWkgQsOgIFRyxrBuZywgxJDDoCBrYW8sIFF14bqtbiAxLCBI4buTIENow60gTWluaA!5e0!3m2!1svi!2s!4v1694422012345!5m2!1svi!2s"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

  <div class="center-wrapper">
    <div class="form-container">
      <h2>Đăng Ký Nhận Ưu Đãi</h2>
      <form>
        <div class="form-group">
          <label for="name">Họ và tên</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="phone">Số điện thoại</label>
          <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="address">Địa chỉ</label>
          <input type="text" id="address" name="address">
        </div>

        <div class="form-group">
          <label for="message">Lời nhắn</label>
          <textarea id="message" name="message" rows="4"></textarea>
        </div>
        <div class="button-wrapper">
          <button type="submit" class="submit-btn">ĐĂNG KÝ NGAY</button>
        </div>
      </form>
    </div>
  </div>


</body>



</html>
<?php
require('footer.php');
?>