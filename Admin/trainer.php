<?php
//session_start();
include '../page/connect.php';
//include 'check_admin.php';

$sql = "SELECT * FROM trainers";
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
     /* Banner */
    .banner {
      width: auto;
      background: #e1c197ff;
      text-align: center;
      padding: 40px 20px;
      font-size: 40px;
      font-weight: bold;
      color: #333;
      box-shadow: 0 2px 6px rgba(0,0,0,0.3);
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

    /* Nút sửa & xóa */
    .btn-edit, .btn-delete {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 5px;
      color: white;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
    }
    .btn-edit {
      background-color: #ffc107; /* vàng */
    }
    .btn-edit:hover {
      background-color: #e0a800;
    }
    .btn-delete {
      background-color: #dc3545; /* đỏ */
    }
    .btn-delete:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>
  <?php include '../page/header.php'; ?>

  <div class="banner">Quản lý Huấn luyện viên</div>
  <div class="container">
  
    <!-- Nút sang trang thêm -->
    <a href="add_trainer.php" class="btn-add">
      Thêm Huấn luyện viên
    </a>

    <!-- Bảng danh sách -->
    <table>
      <thead>
        <tr>
          <th>STT</th>
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
                      <td><?php echo $row['certifications']; ?></td>
                      <td><?php echo $row['experience']; ?></td>
                      <td><?php echo $row['quote']; ?></td>
                      <td>
                          <img src="../pic/<?php echo $row['photo']; ?>" width="80">
                      </td>
                      <td>
                          <a href="edit_trainer.php?id=<?php echo $row['id']; ?>" class="btn-edit">
                            Sửa
                          </a>
                      </td>
                      <td>
                          <a href="delete_trainer.php?id=<?php echo $row['id']; ?>" 
                            class="btn-delete"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa?');">
                              Xóa
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
