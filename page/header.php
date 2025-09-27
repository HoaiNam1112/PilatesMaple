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
  <link rel="stylesheet" href="../css/header.css">
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
            <li><a href="trainer.php">Đội ngũ huấn luyện viên</a></li>
          </ul>
        </li>
        <li>
          <a href="#">KHÓA HỌC ▾</a>
          <ul>
            <li><a href="daotaoCPP.php">KHÓA ĐÀO TẠO CPP</a></li>
            <li><a href="khoadaotaojr.php">KHÓA ĐÀO TẠO JR</a></li>
            <li><a href="khoadaotaoipm.php">KHÓA ĐÀO TẠO IPM</a></li>
          </ul>
        </li>
        <li>
          <a href="#">LỊCH HỌC ▾</a>
          <a href="trainer.php">HUẤN LUYỆN VIÊN</a>
        </li>
        <li>
          <a href="#">KHÓA HỌC</a>
          <ul>
            <li><a href="daotaoCPP.php">KHÓA ĐÀO TẠO CPP</a></li>
            <li><a href="course2.php">KHÓA ĐÀO TẠO 2</a></li>
            <li><a href="course3.php">KHÓA ĐÀO TẠO 3</a></li>
          </ul>
        </li>
        <li>
          <a href="#">LỊCH HỌC</a>
          <ul>
            <li><a href="schedule.php">Lịch học tại Maple</a></li>
            <li><a href="level.php">Trình độ các lớp tập</a></li>
          </ul>
        </li>
        <li><a href="baiviet.php">BÀI VIẾT</a></li>
        <li><a href="lienhe.php">LIÊN HỆ</a></li>
      </ul>

      <ul class="menu-right">
        <?php if (isset($_SESSION['username'])): ?>
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
 

