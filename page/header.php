<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pilates Website</title>
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;

      }

      header {
        background: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
        overflow: visible;
      }

      .navbar-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 28px;
         overflow: visible;
      }

      .logo img {
        height: 50px;
        width: auto;
        display: block;
      }
      .menu-center {
        display: flex;
        flex: 1;
        justify-content: center;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      .menu-center li {
        margin: 0 15px;
        position: relative;
        
      }

      .menu-center li a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
      }

      .menu-center li:hover > ul {
        display: block;
      }

      .menu-center ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: #fff;
        border: 1px solid #ddd;
        list-style: none;
        padding: 10px;
        min-width: 160px;
        z-index: 2000;
      }

      .menu-center ul li {
        margin: 5px 0;
      }

      .menu-center ul li a {
        color: #555;
        font-weight: 400;
      }

      .menu-right {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
      }

      .menu-right li {
        margin-left: 15px;
      }

      .menu-right li a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar-header">
        <div class="logo">
          <img src="../pic/logo.png" alt="Logo" />
        </div>

        <ul class="menu-center">
          <li><a href="home.php">TRANG CHỦ</a></li>
          <li>
            <a href="#">GIỚI THIỆU ▾</a>
            <ul>
              <li><a href="#">Về Maple</a></li>
              <li><a href="#">Các dịch vụ</a></li>
              <li><a href="trainer.php">Đội ngũ huấn luyện viên</a></li>
            </ul>
          </li>
          <li><a href="#">LỊCH HỌC ▾</a>
          <ul>
              <li><a href="schedule.php">Lịch học tại Maple</a></li>
              <li><a href="#">Trình độ các lớp tập</a></li>
          </ul>
          </li>
          <li><a href="#">BÀI VIẾT</a></li>
          <li><a href="lienhe.php">LIÊN HỆ</a></li>
        </ul>
        <ul class="menu-right">
          <li><a href="#">ĐĂNG NHẬP</a></li>
          <li><a href="#">ĐĂNG KÍ</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>
