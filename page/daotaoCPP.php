<?php
require('header.php');
echo '<form method="post" action="">';
require "connect.php";
mysqli_set_charset($conn, 'UTF8');
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <link rel="stylesheet" href="../css/daotaoCPP.css">
</head>

<body>
  <div class="banner">
    <img src="../pic/young.jpg" alt="Banner Huấn Luyện Viên">

    <div class="banner-1">
      Khóa Đào Tạo
    </div>

    <div class="banner-text">
      STOTT PILATES® Intensive Cadillac, Chair & Barrels (ICCB) 2024
    </div>

    <div class="ladi-group">
      <h3 class="ladi-headline">Từ STOTT PILATES® - Số 1 Thế Giới</h3>
    </div>
  </div>

  <section class="course-wrapper">
    <div class="course-section">
      <div class="course-container">
        <!-- Hình ảnh bên trái -->
        <div class="course-image">
          <img src="../pic/cadilac.png" alt="Intensive Cadillac (ICAD)">
        </div>

        <!-- Nội dung bên phải -->
        <div class="course-content">
          <h2>Intensive Cadillac (ICAD)</h2>
          <p>
            Xây dựng trên nền tảng kiến thức của khóa học <strong>IMP</strong> hoặc <strong>IR</strong>
            bạn sẽ học cách thiết kế và dẫn dắt các buổi tập học viên trên chiếc máy
            <strong>Cadillac/Trapeze Table</strong>.
          </p>
          <p>
            <strong>125</strong> bài tập ứng dụng trên máy <strong>Cadillac/Trapeze Table</strong>.
          </p>

        </div>
      </div>

      <!-- Phần dưới ảnh -->
      <div class="course-learn">
        <h3>Bạn sẽ học được những gì?</h3>
        <ul>
          <li>Mỗi loạt các bài tập được thực hiện trên Bảng Trapeze Cadillac thông qua các phần trình diễn đầy đủ ở mức Cơ bản và Trung cấp.</li>
          <li>Dễ dàng quan tâm tới khung Cadillac như một công cụ để tạo ra các bài tập hoàn chỉnh hoặc như một phần bổ sung cho các định quen đồ Matwork và các thiết bị khác.</li>
          <li>Đề quan sát sự vận động nhiều nhất bài tập sử dụng các tính năng của Cadillac bao gồm Roll-Down Bar, Push-Thru Bar, Trapeze, Leg and Arm Springs.</li>
          <li>Mục tiêu của mỗi bài tập, cơ sinh học và sự liên kết, chỉnh sửa gợi ý và điều chỉnh để đảm bảo an toàn và hiệu quả.</li>
          <li>Cách áp dụng Năm nguyên tắc cơ bản của <strong>STOTT PILATES</strong> cho nhiều bài tập, biến thể và sửa đổi khác nhau.</li>
          <li>Trở nên quen thuộc với các nguyên tắc an toàn và ứng dụng của thiết bị cho nhiều nhóm khách hàng.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- HTML -->
  <section class="time-module">
    <h2>Tổng thời gian module: <span>60 giờ</span></h2>
    <div class="time-boxes">
      <div class="time-box">
        <div class="icon">📖</div>
        <h3>25 giờ</h3>
        <p>Học trực tiếp với giảng viên hàng đầu</p>
      </div>
      <div class="time-box">
        <div class="icon">💪</div>
        <h3>25 giờ</h3>
        <p>Luyện tập</p>
      </div>
      <div class="time-box">
        <div class="icon">👁️</div>
        <h3>10 giờ</h3>
        <p>Quan sát</p>
      </div>
      <div class="time-box">
        <div class="icon">🎤</div>
        <h3>10 giờ</h3>
        <p>Thực hành giảng dạy</p>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const boxes = document.querySelectorAll(".time-box");

      const revealOnScroll = () => {
        const triggerBottom = window.innerHeight * 0.85;

        boxes.forEach((box, i) => {
          const boxTop = box.getBoundingClientRect().top;
          if (boxTop < triggerBottom) {
            setTimeout(() => {
              box.classList.add("show");
            }, i * 200); // delay lần lượt từng box
          }
        });
      };

      window.addEventListener("scroll", revealOnScroll);
      revealOnScroll(); // chạy 1 lần khi load
    });
  </script>

  <!-- HTML -->
  <section class="accordion-section">
    <div class="accordion-item">
      <div class="accordion-header">
        Quan sát, dạy thực hành và đánh giá thể chất <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Tất cả các khóa học đều phải có số giờ quan sát, giảng dạy thực hành và đánh giá thể chất tối thiểu và phải hoàn thành giữa các buổi hướng dẫn tại bất kỳ cơ sở STOTT PILATES nào. Học viên có thể được yêu cầu đào tạo bổ sung để có thể đạt chuẩn trước khi chứng nhận. Số lượng giờ dạy thực hành, ôn tập thể chất phải được ghi lại thông tin ngoài giờ lên lớp. Nhật ký thực hành phải được nộp vào ngày thi của bạn (thi viết hoặc thi thực hành). Nếu học sinh không nộp tất cả các bản nhật ký thực hành này trong vòng 7 ngày kể từ phần cuối cùng của bài kiểm tra, toàn bộ bài kiểm tra sẽ bị hủy.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Quan sát <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Số giờ quan sát có thể được ghi lại trong bài tập về nhà của khóa học có liên quan hoặc sau khóa học STOTT PILATES và có thể được tích lũy bằng cách xem Người hướng dẫn/Người hướng dẫn được chứng nhận của STOTT PILATES dạy cho khách hàng (trực tiếp hoặc trực tuyến), cũng như xem các video về khóa học có liên quan trên DVD hoặc thông qua Merrithew Connect™. Chúng tôi khuyên bạn nên hoàn thành 50-80% số giờ của mình bằng cách xem Người hướng dẫn/Người hướng dẫn được chứng nhận. Vui lòng đảm bảo rằng bạn đã nhận được sự cho phép từ Trung tâm Đào tạo Merrithew và/hoặc trình bày trước với Người hướng dẫn.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Đánh giá thể chất <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Giờ ôn luyện thể chất có nghĩa là thực hiện thể chất các bài tập đã học trên lớp. Việc xem xét thực tế tài liệu là rất quan trọng để đảm bảo bạn hiểu đầy đủ trong chính cơ thể mình trước khi cố gắng dạy người khác. Điều cũng rất quan trọng vì nó đảm bảo cơ thể của bạn được chuẩn bị cho thử thách ngày càng tăng ở mỗi cấp độ tiết mục khi bạn chuyển qua Khóa đào tạo dành để trở thành huấn luyện viên STOTT PILATES. Tham gia một lớp học với Người hướng dẫn/Người hướng dẫn được chứng nhận STOTT PILATES hoặc tập luyện với các video khóa học có liên quan trên DVD hoặc thông qua Merrithew Connect có thể được coi là giờ đánh giá thể chất và có thể được hoàn thành riêng lẻ hoặc với các học viên khác.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Thực hành giảng dạy <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Thực hành Giờ dạy có thể được hoàn thành bằng cách dạy các tiết mục của khóa học STOTT PILATES cho gia đình, bạn học, bạn bè hoặc khách hàng, gợi ý và sửa lỗi cho họ thông qua một bài tập. Thực hành Giảng dạy có thể được thực hiện trực tiếp hoặc bằng cách sử dụng chương trình họp mặt trực tuyến, chẳng hạn như Skype hoặc Zoom.
        </p>
      </div>
    </div>
  </section>
  <!-- JS -->
  <script>
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach(header => {
      header.addEventListener("click", () => {
        const content = header.nextElementSibling;
        const icon = header.querySelector(".icon");

        header.classList.toggle("active");

        if (header.classList.contains("active")) {
          content.style.maxHeight = content.scrollHeight + "px";
          icon.textContent = "−";
        } else {
          content.style.maxHeight = 0;
          icon.textContent = "+";
        }
      });
    });
  </script>


  <section class="course-wrapper">
    <div class="course-section">
      <div class="course-container-1">
        <!-- Hình ảnh bên trái -->
        <div class="course-image">
          <img src="../pic/cadillac1.png" alt="Intensive Cadillac (ICAD)">
        </div>

        <!-- Nội dung bên phải -->
        <div class="course-content">
          <h2>Intensive Stability Chair™ (ICHR)</h2>
          <p>
            Xây dựng trên nền tảng kiến thức của khóa học <strong>IMP</strong> hoặc <strong>IR</strong> bạn sẽ học cách thiết kế và dẫn dắt các bài tập cho học viên trên chiếc máy <strong> Stability Chair STOTT PILATES </strong> trình độ Cơ bản và Trung cấp Cấp độ 1 cho cài đặt đào tạo cá nhân hoặc nhóm cho nhiều khách hàng.
          </p>
        </div>
      </div>

      <!-- Phần dưới ảnh -->
      <div class="course-learn">
        <h3>Bạn sẽ học được những gì?</h3>
        <ul>
          <li>Các bài tập chức năng nhằm phát triển sức mạnh phần cơ lõi chống lại lực cản của lò xo ở nhiều tư thế, bao gồm đứng, ngồi, nằm sấp và nằm nghiêng</li>
          <li>Cách áp dụng Năm nguyên tắc cơ bản của STOTT * PILATES cho các bài tập Stability Chair ở mức độ cơ bản và trung cấp</li>
          <li>Hiểu rõ hơn về bản chất chuyển động và mục tiêu tập luyện, thực hiện đúng cách và kích hoạt cơ bắp</li>
          <li>Cách cải thiện độ ổn định cơ lõi lõi, tăng sức mạnh ngoại vi và tăng cường tính di động trên một thiết bị</li>
          <li>Cách tùy chọn cho bàn đạp tách biến đổi các bài tập bằng cách tăng sức cản một bên, hai bên và sự qua lại giữa siức mạnh và cân bằng.</li>
          <li>Chữa và điều chỉnh để đảm bảo an toàn và hiệu quả</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- HTML -->
  <section class="time-module">
    <h2>Tổng thời gian module: <span>40 giờ</span></h2>
    <div class="time-boxes">
      <div class="time-box">
        <div class="icon">📖</div>
        <h3>15 giờ</h3>
        <p>Học trực tiếp với giảng viên hàng đầu</p>
      </div>
      <div class="time-box">
        <div class="icon">💪</div>
        <h3>05 giờ</h3>
        <p>Luyện tập</p>
      </div>
      <div class="time-box">
        <div class="icon">👁️</div>
        <h3>10 giờ</h3>
        <p>Quan sát</p>
      </div>
      <div class="time-box">
        <div class="icon">🎤</div>
        <h3>10 giờ</h3>
        <p>Thực hành giảng dạy</p>
      </div>
    </div>
  </section>


  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const boxes = document.querySelectorAll(".time-box");

      const revealOnScroll = () => {
        const triggerBottom = window.innerHeight * 0.85;

        boxes.forEach((box, i) => {
          const boxTop = box.getBoundingClientRect().top;
          if (boxTop < triggerBottom) {
            setTimeout(() => {
              box.classList.add("show");
            }, i * 200); // delay lần lượt từng box
          }
        });
      };

      window.addEventListener("scroll", revealOnScroll);
      revealOnScroll(); // chạy 1 lần khi load
    });
  </script>

  <!-- HTML -->
  <section class="accordion-section">
    <div class="accordion-item">
      <div class="accordion-header">
        Quan sát, dạy thực hành và đánh giá thể chất <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Tất cả các khóa học đều phải có số giờ quan sát, giảng dạy thực hành và đánh giá thể chất tối thiểu và phải hoàn thành giữa các buổi hướng dẫn tại bất kỳ cơ sở STOTT PILATES nào. Học viên có thể được yêu cầu đào tạo bổ sung để có thể đạt chuẩn trước khi chứng nhận. Số lượng giờ dạy thực hành, ôn tập thể chất phải được ghi lại thông tin ngoài giờ lên lớp. Nhật ký thực hành phải được nộp vào ngày thi của bạn (thi viết hoặc thi thực hành). Nếu học sinh không nộp tất cả các bản nhật ký thực hành này trong vòng 7 ngày kể từ phần cuối cùng của bài kiểm tra, toàn bộ bài kiểm tra sẽ bị hủy.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Quan sát <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Số giờ quan sát có thể được ghi lại trong bài tập về nhà của khóa học có liên quan hoặc sau khóa học STOTT PILATES và có thể được tích lũy bằng cách xem Người hướng dẫn/Người hướng dẫn được chứng nhận của STOTT PILATES dạy cho khách hàng (trực tiếp hoặc trực tuyến), cũng như xem các video về khóa học có liên quan trên DVD hoặc thông qua Merrithew Connect™. Chúng tôi khuyên bạn nên hoàn thành 50-80% số giờ của mình bằng cách xem Người hướng dẫn/Người hướng dẫn được chứng nhận. Vui lòng đảm bảo rằng bạn đã nhận được sự cho phép từ Trung tâm Đào tạo Merrithew và/hoặc trình bày trước với Người hướng dẫn.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Đánh giá thể chất <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Giờ ôn luyện thể chất có nghĩa là thực hiện thể chất các bài tập đã học trên lớp. Việc xem xét thực tế tài liệu là rất quan trọng để đảm bảo bạn hiểu đầy đủ trong chính cơ thể mình trước khi cố gắng dạy người khác. Điều cũng rất quan trọng vì nó đảm bảo cơ thể của bạn được chuẩn bị cho thử thách ngày càng tăng ở mỗi cấp độ tiết mục khi bạn chuyển qua Khóa đào tạo dành để trở thành huấn luyện viên STOTT PILATES. Tham gia một lớp học với Người hướng dẫn/Người hướng dẫn được chứng nhận STOTT PILATES hoặc tập luyện với các video khóa học có liên quan trên DVD hoặc thông qua Merrithew Connect có thể được coi là giờ đánh giá thể chất và có thể được hoàn thành riêng lẻ hoặc với các học viên khác.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Thực hành giảng dạy <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Thực hành Giờ dạy có thể được hoàn thành bằng cách dạy các tiết mục của khóa học STOTT PILATES cho gia đình, bạn học, bạn bè hoặc khách hàng, gợi ý và sửa lỗi cho họ thông qua một bài tập. Thực hành Giảng dạy có thể được thực hiện trực tiếp hoặc bằng cách sử dụng chương trình họp mặt trực tuyến, chẳng hạn như Skype hoặc Zoom.
        </p>
      </div>
    </div>
  </section>
  <!-- JS -->
  <script>
    const accordionHeaders1 = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach(header => {
      header.addEventListener("click", () => {
        const content = header.nextElementSibling;
        const icon = header.querySelector(".icon");

        header.classList.toggle("active");

        if (header.classList.contains("active")) {
          content.style.maxHeight = content.scrollHeight + "px";
          icon.textContent = "−";
        } else {
          content.style.maxHeight = 0;
          icon.textContent = "+";
        }
      });
    });
  </script>

  <section class="course-wrapper">
    <div class="course-section">
      <div class="course-container">
        <!-- Hình ảnh bên trái -->
        <div class="course-image">
          <img src="../pic/stability.png" alt="Intensive Cadillac (ICAD)">
        </div>

        <!-- Nội dung bên phải -->
        <div class="course-content">
          <h2>Intensive Barrels (IBRL)</h2>
          <p>
            Dựa trên kiến ​​thức ngành của bạn và tài liệu học được trong IMP hoặc IR, bạn học cách thiết kế và hướng dẫn các tiết mục <strong>STOTT PILATES Ladder Barrel, Spine Corrector và Arc Barrel</strong> cho cấp độ 1 Cơ bản và Trung cấp cho các thiết lập đào tạo cá nhân hoặc nhóm cho nhiều khách hàng.

          </p>

        </div>
      </div>

      <!-- Phần dưới ảnh -->
      <div class="course-learn">
        <h3>Bạn sẽ học được những gì?</h3>
        <ul>
          <li>Cách áp dụng Năm nguyên tắc cơ bản của STOTT PILATES vào các bài tập trên Arc Barrel, Spine Corrector và Ladder Barrel.</li>
          <li>Các bài tập được trình diễn trực tiếp của STOTT PILATES Cơ bản và Trung cấp.</li>
          <li>Để hiểu bản chất chuyển động và mục tiêu tập thể dục</li>
          <li>Làm thế nào để hỗ trợ cột sống uốn cong, uốn cong sang bên hoặc duỗi thẳng, nhắm mục tiêu vào các nhóm cơ chính và ngoại vi, và điều chỉnh các bài tập cho phù hợp các loại cơ thể cụ thể</li>
          <li>Cách kết hợp các thanh barrel vào một chương trình và tập luyện toàn thân cho các loại cơ thể cự thể, các vấn đề về tư thế và điều kiện cụ thể</li>
          <li>Để phát triển các kỹ năng quan sát và giao tiếp hiệu quả, gợi ý bằng lời nói và hình ảnh để nâng cao hiệu suất và động lực của khách hàng</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- HTML -->
  <section class="time-module">
    <h2>Tổng thời gian module: <span>30 giờ</span></h2>
    <div class="time-boxes">
      <div class="time-box">
        <div class="icon">📖</div>
        <h3>10 giờ</h3>
        <p>Học trực tiếp với giảng viên hàng đầu</p>
      </div>
      <div class="time-box">
        <div class="icon">💪</div>
        <h3>05 giờ</h3>
        <p>Luyện tập</p>
      </div>
      <div class="time-box">
        <div class="icon">👁️</div>
        <h3>10 giờ</h3>
        <p>Quan sát</p>
      </div>
      <div class="time-box">
        <div class="icon">🎤</div>
        <h3>05 giờ</h3>
        <p>Thực hành giảng dạy</p>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const boxes = document.querySelectorAll(".time-box");

      const revealOnScroll = () => {
        const triggerBottom = window.innerHeight * 0.85;

        boxes.forEach((box, i) => {
          const boxTop = box.getBoundingClientRect().top;
          if (boxTop < triggerBottom) {
            setTimeout(() => {
              box.classList.add("show");
            }, i * 200); // delay lần lượt từng box
          }
        });
      };

      window.addEventListener("scroll", revealOnScroll);
      revealOnScroll(); // chạy 1 lần khi load
    });
  </script>

  <!-- HTML -->
  <section class="accordion-section">
    <div class="accordion-item">
      <div class="accordion-header">
        Quan sát, dạy thực hành và đánh giá thể chất <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Tất cả các khóa học đều phải có số giờ quan sát, giảng dạy thực hành và đánh giá thể chất tối thiểu và phải hoàn thành giữa các buổi hướng dẫn tại bất kỳ cơ sở STOTT PILATES nào. Học viên có thể được yêu cầu đào tạo bổ sung để có thể đạt chuẩn trước khi chứng nhận. Số lượng giờ dạy thực hành, ôn tập thể chất phải được ghi lại thông tin ngoài giờ lên lớp. Nhật ký thực hành phải được nộp vào ngày thi của bạn (thi viết hoặc thi thực hành). Nếu học sinh không nộp tất cả các bản nhật ký thực hành này trong vòng 7 ngày kể từ phần cuối cùng của bài kiểm tra, toàn bộ bài kiểm tra sẽ bị hủy.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Quan sát <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Số giờ quan sát có thể được ghi lại trong bài tập về nhà của khóa học có liên quan hoặc sau khóa học STOTT PILATES và có thể được tích lũy bằng cách xem Người hướng dẫn/Người hướng dẫn được chứng nhận của STOTT PILATES dạy cho khách hàng (trực tiếp hoặc trực tuyến), cũng như xem các video về khóa học có liên quan trên DVD hoặc thông qua Merrithew Connect™. Chúng tôi khuyên bạn nên hoàn thành 50-80% số giờ của mình bằng cách xem Người hướng dẫn/Người hướng dẫn được chứng nhận. Vui lòng đảm bảo rằng bạn đã nhận được sự cho phép từ Trung tâm Đào tạo Merrithew và/hoặc trình bày trước với Người hướng dẫn.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Đánh giá thể chất <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Giờ ôn luyện thể chất có nghĩa là thực hiện thể chất các bài tập đã học trên lớp. Việc xem xét thực tế tài liệu là rất quan trọng để đảm bảo bạn hiểu đầy đủ trong chính cơ thể mình trước khi cố gắng dạy người khác. Điều cũng rất quan trọng vì nó đảm bảo cơ thể của bạn được chuẩn bị cho thử thách ngày càng tăng ở mỗi cấp độ tiết mục khi bạn chuyển qua Khóa đào tạo dành để trở thành huấn luyện viên STOTT PILATES. Tham gia một lớp học với Người hướng dẫn/Người hướng dẫn được chứng nhận STOTT PILATES hoặc tập luyện với các video khóa học có liên quan trên DVD hoặc thông qua Merrithew Connect có thể được coi là giờ đánh giá thể chất và có thể được hoàn thành riêng lẻ hoặc với các học viên khác.
        </p>
      </div>
    </div>

    <div class="accordion-item">
      <div class="accordion-header">
        Thực hành giảng dạy <span class="icon">+</span>
      </div>
      <div class="accordion-content">
        <p>
          Thực hành Giờ dạy có thể được hoàn thành bằng cách dạy các tiết mục của khóa học STOTT PILATES cho gia đình, bạn học, bạn bè hoặc khách hàng, gợi ý và sửa lỗi cho họ thông qua một bài tập. Thực hành Giảng dạy có thể được thực hiện trực tiếp hoặc bằng cách sử dụng chương trình họp mặt trực tuyến, chẳng hạn như Skype hoặc Zoom.
        </p>
      </div>
    </div>
  </section>
  <!-- JS -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const accordionHeaders = document.querySelectorAll(".accordion-header");

      accordionHeaders.forEach(header => {
        header.addEventListener("click", () => {
          const content = header.nextElementSibling;
          const icon = header.querySelector(".icon");

          header.classList.toggle("active");

          if (header.classList.contains("active")) {
            content.style.maxHeight = content.scrollHeight + "px";
            icon.textContent = "−";
          } else {
            content.style.maxHeight = 0;
            icon.textContent = "+";
          }
        });
      });
    });
  </script>



</body>

</html>

<?php
require('footer.php');
?>