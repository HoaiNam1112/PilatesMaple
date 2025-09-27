<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pilates Website</title>
  <style>
    footer {
      background-image: url('../pic/thiennhien.jpg');
      /* ảnh nền */
      background-size: cover;
      background-position: center;
      padding: 100px 80px 60px;
      /* tăng khoảng cách trên */
      font-family: Arial, sans-serif;
      position: relative;
      color: white;
      margin-top: 80px;
      /* tạo khoảng cách với phần body phía trên */
      min-height: 500px;
      /* tăng chiều cao ảnh nền */
    }

    /* lớp phủ mờ dần từ trắng xuống ảnh */
    footer::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.4));
      z-index: 1;
    }

    /* nội dung đè lên ảnh */
    .footer-container {
      position: relative;
      z-index: 2;
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr 1.5fr;
      gap: 40px;
      align-items: start;
      background-color: rgba(255, 255, 255, 0.5);
      padding: 40px;
      border-radius: 20px;
    }

    /* tiêu đề cột */
    .footer-col h4 {
      font-size: 16px;
      margin-bottom: 15px;
      border-bottom: 1px solid #ccc;
      display: inline-block;
      padding-bottom: 5px;
      font-weight: bold;
      color: #0f0f0fff;
    }

    /* danh sách liên kết */
    .footer-col ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .footer-col ul li {
      margin-bottom: 8px;
    }

    .footer-col ul li a {
      text-decoration: none;
      color: #0f0f0fff;
      font-size: 14px;
      transition: color 0.3s;
    }

    .footer-col ul li a:hover {
      color: #0a7f46;
    }

    /* logo và mô tả */
    .about img {
      width: 80px;
      margin-bottom: 15px;
    }

    .about p {
      font-size: 14px;
      line-height: 1.6;
      color: #0f0f0fff;
    }

    /* xóa phần ảnh riêng nếu dùng ảnh nền */
    .footer-banner {
      display: none;
    }
  </style>
</head>
<footer>
  <div class="footer-banner">
    <img src="../pic/thiennhien.jpg" alt="Footer Banner" />
  </div>

  <div class="footer-container">
    <div class="footer-col about">
      <img src="../pic/logo.png" alt="Logo" />
      <p>
        Maple Pilates không chỉ là nơi tập luyện Pilates đẳng cấp nhất về
        <b>CHẤT LƯỢNG</b> mà còn hướng tới mục tiêu đào tạo ra các HLV Pilates
        Quốc tế hàng đầu Thế giới.
      </p>
    </div>
    <div class="footer-col">
      <h4>VỀ CHÚNG TÔI</h4>
      <ul>
        <li><a href="../page/home.php">Giới Thiệu</a></li>
        <li><a href="../page/shcedule.php">Lịch học</a></li>
        <li><a href="../page/lienhe.php">Liên hệ</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>KHÓA HỌC</h4>
      <ul>
        <li><a href="#">Lịch Học Yoga</a></li>
        <li><a href="#">Lịch Học Pilates</a></li>
        <li><a href="#">Trình Độ Các Lớp Tập</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>LIÊN HỆ</h4>
      <ul>
        <li><a href="#">ĐỊA CHỈ</a></li>
        <li><a href="#">ZALO</a></li>
        <li><a href="#">FANPAGE</a></li>
      </ul>
    </div>
  </div>
</footer>

</html>