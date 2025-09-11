<?php
include '../page/connect.php';

$sql = "SELECT * FROM trainer";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý Huấn luyện viên</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5dc;
      margin: 0;
      padding: 0;
    }
    .container { margin: auto; padding:20px; }
    .page-title {
      text-align: center;
      font-size: 36px;
      font-weight: bold;
      color: #333;
      background-color: #e1c197ff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
      margin-bottom: 20px;
    }
    .btn-add {
      display: inline-block;
      background-color: #28a745;
      color: white;
      padding: 10px 15px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .btn-add:hover { background-color: #218838; }
    .btn-add i { margin-right: 6px; }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #333;
      color: white;
    }
    tr:nth-child(even) { background-color: #f9f9f9; }
    tr:hover { background-color: #f1f1f1; }
    .icon-btn {
      border: none;
      background: transparent;
      cursor: pointer;
      font-size: 18px;
    }
    .icon-edit { color: #ffc107; }
    .icon-delete { color: #dc3545; }
  </style>
</head>
<body>
  <?php include '../page/header.php'; ?>

  <div class="container">
    <h1 class="page-title">Quản lý Huấn luyện viên</h1>

    <!-- Nút sang trang thêm -->
    <a href="add_trainer.php" class="btn-add">
      <i class="fa fa-user-plus"></i> Thêm Huấn luyện viên
    </a>

    <!-- Bảng danh sách -->
    <table>
      <thead>
        <tr>
          <th>Stt</th>
          <th>Tên</th>
          <th>Chuyên môn</th>
          <th>Kinh nghiệm</th>
          <th>Tiểu sử</th>
          <th>Ảnh</th>
          <th>Sửa</th>
          <th>Xóa</th>
        </tr>
      </thead>
      <tbody>
      <?php
$stt = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $stt++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['specialization']; ?></td>
            <td><?php echo $row['experience_years']; ?> năm</td>
            <td><?php echo $row['bio']; ?></td>
            <td>
                <img src="../pic/<?php echo $row['image']; ?>" width="80">
            </td>
            <td>
                <a href="edit_trainer.php?id=<?php echo $row['trainer_id']; ?>" class="icon-btn">
                    <i class="fa fa-pen icon-edit"></i>
                </a>
            </td>
            <td>
                <a href="delete_trainer.php?id=<?php echo $row['trainer_id']; ?>" 
                   class="icon-btn" 
                   onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                    <i class="fa fa-trash icon-delete"></i>
                </a>
            </td>
        </tr>
<?php }
} else { ?>
    <tr><td colspan="8">Chưa có huấn luyện viên nào</td></tr>
<?php } ?>

      </tbody>
    </table>
  </div>

  <?php include '../page/footer.php'; ?>
</body>
</html>
