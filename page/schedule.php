<?php
require "connect.php";
mysqli_set_charset($conn, 'UTF8');
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lịch Tập Maple</title>
  <link rel="stylesheet" href="../css/schedule.css">
</head>
<body>
      <?php include 'header.php'; ?>   

  <div class="container-lichtap">
    <div class="lich-header">
        <h1>LỊCH TẬP TẠI MAPLE</h1>
    </div>
    <div class="level-selector">
      <form method="GET">
        <label for="level">Chọn trình độ:</label>
        <select name="level" id="level" onchange="this.form.submit()">
          <option value="">Tất cả</option>
          <option value="Beginner" <?php if(isset($_GET['level']) && $_GET['level']=="Beginner") echo "selected"; ?>>Beginner</option>
          <option value="Intermediate" <?php if(isset($_GET['level']) && $_GET['level']=="Intermediate") echo "selected"; ?>>Intermediate</option>
          <option value="Advanced" <?php if(isset($_GET['level']) && $_GET['level']=="Advanced") echo "selected"; ?>>Advanced</option>
        </select>
      </form>
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

      <?php
      $level = isset($_GET['level']) ? $_GET['level'] : '';

      $sql = "SELECT * FROM schedule";
      if ($level != '') {
          $sql .= " WHERE level = '" . mysqli_real_escape_string($conn, $level) . "'";
      }

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                      <td>{$row['day']}</td>
                      <td>{$row['time']}</td>
                      <td>{$row['class']}</td>
                      <td>{$row['trainer']}</td>
                      <td>{$row['level']}</td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='5'>Không có lịch cho trình độ này</td></tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>

<?php
require('footer.php');
?>
