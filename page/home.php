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
  <link rel="stylesheet" href="../css/home.css">


  <title>Paragate Pilates</title>
</head>

<body>
  <!-- Banner Slider -->
  <!-- Banner Slider -->
  <div class="slider">
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
  </div>



  <script src="../js/home.js"></script>

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