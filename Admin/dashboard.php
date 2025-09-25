<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      display: flex;
    }
    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #1dae66;
      color: white;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 20px;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      background: #14834d;
    }
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
      text-align: left;        /* chữ căn trái */
      vertical-align: top;  
      
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
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Admin</h2>
    <a href="manager_schedule.php"> Quản lí lịch học</a>
    <a href="ql_form_lien_he.php"> Quản lí form liên hệ</a>
    <a href="ql_phan_quyen.php"> Quản lí phân quyền</a>
     <div class="add"><a href="../page/home.php"> Trang chủ</a></div>
  </div>

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
          <td><?php echo number_format($row['price'], 0, ',', '.'); ?> </td>
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
