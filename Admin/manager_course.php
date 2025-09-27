
<?php
include('../page/connect.php');
include 'sidebar.php';
// Lấy danh sách khóa học
$result = mysqli_query($conn, "SELECT * FROM courses ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý Khóa học</title>
  <link rel="stylesheet" href="../css/manager_course.css">
</head>
<body class="bg-light">
  <div class="container mt-4">
    <h2> Quản lý Khóa học</h2>
    <a href="add_course.php" class="btn-add"> Thêm Khóa học</a> <br> <br>
     
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Tên khóa học</th>
          <th>Mô tả</th>
          <th>Giá</th>
          <th>Ngày tạo</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo htmlspecialchars($row['title']); ?></td>
          <td><?php echo htmlspecialchars($row['description']); ?></td>
          <td><?php echo number_format($row['price'], 0, ',', '.'); ?> đ</td>
          <td><?php echo $row['created_at']; ?></td>
          <td>
            <a href="edit_course.php?id=<?php echo $row['id']; ?>" class="btn-edit">Sửa</a>
            <a href="delete_course.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
