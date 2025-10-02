<?php
session_start();
include '../page/connect.php';
include 'check_admin.php';
include 'sidebar.php';
$sql = "SELECT * FROM trainers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý Huấn luyện viên</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/admin.css" />
  <style>
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
  <div class="container">

  <div class="banner">Quản lý Huấn luyện viên</div>
  
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
                          <img src="<?php echo $row['photo']; ?>" width="80">
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

</body>
</html>
<!--  -->