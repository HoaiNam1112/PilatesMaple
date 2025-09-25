<?php
include('../page/connect.php');

// Lấy danh sách lịch học
$result = mysqli_query($conn, "SELECT * FROM schedules ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý Lịch học</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container mt-4">
    <h2 class="mb-3"> Quản lý Lịch học </h2>
    <a href="add_schedule.php" class="btn btn-success mb-3">+ Thêm Lịch học</a>
    
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Ngày</th>
          <th>Giờ</th>
          <th>Lớp</th>
          <th>Huấn luyện viên</th>
          <th>Trình độ</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo htmlspecialchars($row['day_of_week']); ?></td>
          <td><?php echo htmlspecialchars($row['time']); ?></td>
          <td><?php echo htmlspecialchars($row['class_name']); ?></td>
          <td><?php echo htmlspecialchars($row['trainer']); ?></td>
          <td><?php echo htmlspecialchars($row['level']); ?></td>       
          <td>
            <a href="edit_schedule.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Sửa</a>
            <a href="delete_schedule.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
