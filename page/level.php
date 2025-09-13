
<?php
require('header.php');
echo '<form method="post" action="">'; require "connect.php";
mysqli_set_charset($conn, 'UTF8'); ?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lịch Tập Maple</title>
    <link rel="stylesheet" href="../css/schedule.css">
  </head>
  <body>
  <div class="banner">
    <h1>Đội Ngũ Huấn Luyện Viên Maple Pilates</h1>
  </div>

  <div class="team-photo">
    <img src="../pic/team.jpg" alt="Đội ngũ huấn luyện viên">
  </div>
  </body>
</html>
<?php
require('footer.php');
?>


