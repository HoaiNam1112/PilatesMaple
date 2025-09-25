<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pilates Website</title>
<<<<<<< HEAD
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
=======
      <link rel="stylesheet" href="../css/header.css">
>>>>>>> 40ee619a7c1cddf1989d156d34067d598231bd0a
  </head>
  <body>
    <header>
      <nav class="navbar-header">
        <div class="logo">
          <img src="../pic/logo.png" alt="Logo" />
        </div>

        <ul class="menu-center">
          <li><a href="../page/home.php">TRANG CHỦ</a></li>
          <li>
            <a href="#">GIỚI THIỆU ▾</a>
            <ul>
              <li><a href="#">Về Maple</a></li>
<<<<<<< HEAD
=======
              <li><a href="#">Các khóa học</a></li>
>>>>>>> 40ee619a7c1cddf1989d156d34067d598231bd0a
              <li><a href="trainer.php">Đội ngũ huấn luyện viên</a></li>
            </ul>
          </li>
          <li><a href="#">LỊCH HỌC ▾</a>
          <ul>
              <li><a href="schedule.php">Lịch học tại Maple</a></li>
<<<<<<< HEAD
              <li><a href="levels.php">Trình độ các lớp tập</a></li>
          </ul>
          </li>
          <li><a href="baiviet.php">BÀI VIẾT</a></li>
          <li><a href="#">LIÊN HỆ</a></li>
=======
              <li><a href="level.php">Trình độ các lớp tập</a></li>
          </ul>
          </li>
          <li><a href="baiviet.php">BÀI VIẾT</a></li>
          <li><a href="lienhe.php">LIÊN HỆ</a></li>
>>>>>>> 40ee619a7c1cddf1989d156d34067d598231bd0a
        </ul>
        <ul class="menu-right">
          <?php if(isset($_SESSION['username'])): ?>
          <li>Xin chào <strong><?php echo $_SESSION['username']; ?></strong></li>
          <li><a href="../manager/logout.php">Đăng xuất</a></li>
           <?php else: ?>
          <li><a href="../manager/login.php">Đăng nhập</a></li>
           <li><a href="../manager/register.php">Đăng kí</a></li>
         <?php endif; ?>
        </ul>
      </nav>
    </header>
  </body>
</html>
