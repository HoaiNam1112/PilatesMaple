<?php
include '../page/connect.php';

$sql = "SELECT * FROM trainer";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý Huấn luyện viên</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</html>

<body class="bg-light">
    <div>
        <h2> Quản lý Huấn luyện viên </h2>
    </div>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addTrainerModal">
      + Thêm Huấn luyện viên
    </button>

    <!-- Bảng danh sách HLV -->
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>Tên</th>
          <th>Chuyên môn</th>
          <th>Tiểu sử</th>
          <th>hành động</th>
        </tr>
      </thead>
      <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['trainer_id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['specialization']."</td>
                    <td>".$row['experience_years']." năm</td>
                    <td>".$row['bio']."</td>
                    <td><img src='uploads/".$row['image']."' width='80'></td>
                    <td>
                        <a href='edit_trainer.php?id=".$row['trainer_id']."' class='btn edit'>Sửa</a>
                        <a href='delete_trainer.php?id=".$row['trainer_id']."' class='btn delete' onclick=\"return confirm('Bạn có chắc chắn muốn xóa?');\">Xóa</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Chưa có huấn luyện viên nào</td></tr>";
    }
    ?>
    </table>
  </div>
  

</body>