<?php
session_start();
include 'check_admin.php';
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../css/admin.css" />
  <style>
    /* Main */
    .main {
      margin-left: 220px;
      padding: 20px;
      width: calc(100% - 220px);
    }
    h1 {
      color: #2c3e50;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      margin-top: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    th {
      background: #1dae66;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    .description { width: 400px; }
    img { width: 120px; height: 80px; }
    .btn {
      text-decoration: none;
      font-weight: bold;
      padding: 6px 10px;
      margin: 2px;
      border-radius: 6px;
      display: inline-block;
    }
    .btn-add {
      background: #1dae66;
      color: white;
    }
    .btn-add:hover { background: #14834d; }
   .btn-edit {
  color: #ab102c;
  border-radius: 5px; 
  text-decoration :none;
}
    .btn-update:hover { background: #217dbb; }
   .btn-delete {

  color: #dfc710ff;
 border-radius: 1px; 
   text-decoration :none;
}
    .btn-delete:hover { background: darkred; }
  </style>
</head>
<body>
  <!-- Main content -->
  <div class="main">
    <h1>Danh sách </h1>
    <a class="btn btn-add" href="../admin/add_course.php">➕ Thêm khóa học</a>
    <table>
      <tr>
        <th>Mã khóa học</th>
        <th>Tên</th>
        <th>Mô tả</th>
        <th>Giá</th>
        <th>Chức năng</th>
      </tr>
      <?php
        include('../page/connect.php');
        $sql = "SELECT * FROM `courses`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
      ?>
      <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo htmlspecialchars($row['title']); ?></td>
          <td><?php echo htmlspecialchars($row['description']); ?></td>
          <td><?php echo number_format($row['price'], 0, ',', '.'); ?> đ</td>
          <td>
            <a href="edit_course.php?id=<?php echo $row['id']; ?>" class="btn-edit">Sửa</a>
            <a href="delete_course.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
