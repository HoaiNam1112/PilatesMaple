
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
    <div class="container-lichtap">
      <div class="lich-header">
          <h1>LỊCH TẬP TẠI MAPLE</h1>
        </div>

        <div class="level-selector">
          <label for="level">Chọn trình độ:</label>
          <select id="level">
            <option>Beginner</option>
            <option>Intermediate </option>
            <option>Advanced</option>
          </select>
        </div>

      <div class="note">
        <strong>[UPDATE] LỊCH TẬP TUẦN 06/09/2025 </strong><br />
        Khởi động tuần mới thật chăm chỉ nha cả nhà<br />
        Lịch tập sẽ cập nhật thường xuyên<br />
      </div>

      <table class="schedule-table">
        <tr>
          <th>Ngày</th>
          <th>Giờ</th>
          <th>Lớp</th>
          <th>Huấn luyện viên</th>
          <th>Trình độ</th>

        </tr>
        <tr>
          <td>Thứ 2</td>
          <td>07:00 - 08:00</td>
          <td>Pilates Reformer</td>
          <td>Tuyết Hạnh</td>
        </tr>
        <tr>
          <td>Thứ 3</td>
          <td>08:00 - 09:00</td>
          <td>Pilates Mat</td>
          <td>Hải Yến</td>
        </tr>
        <tr>
          <td>Thứ 4</td>
          <td>12:00 - 13:00</td>
          <td>Pilates Reformer</td>
          <td>Nga Yopi</td>
        </tr>
        <tr>
          <td>Thứ 5</td>
          <td>18:30 - 19:30</td>
          <td>Yoga Vinyasa</td>
          <td>Bảo Ngọc</td>
        </tr>
        <tr>
          <td>Chủ Nhật</td>
          <td>15:00 - 16:00</td>
          <td>Pilates Mat</td>
          <td>Duy Chinh</td>
        </tr>
      </table>
      <div class="schedule-footer">Hotline: 084 789 6666 Website: maple.vn</div>
    </div>
  </body>
</html>
<?php
require('footer.php');
?>


