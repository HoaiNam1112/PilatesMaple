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
  <?php
  include '../page/header.php';
  ?>
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
          <th>Stt</th>
          <th>Tên</th>
          <th>Chuyên môn</th>
          <th>Năm</th>
          <th>Tiểu sử</th>
          <th>Ảnh</th>
          <th>Sửa</th>
          <th>Xóa</th>
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
                        <a href='edit_trainer.php?id=".$row['trainer_id']."' class='modal fade' id='editModal' tabindex='-1'>Sửa</a>
                    </td>
                    <td>
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
  
  <!-- Modal thêm HLV -->
<div class="modal fade" id="addTrainerModal" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" action="add_trainer.php" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title">Thêm Huấn luyện viên</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-2">
          <label>Tên</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-2">
          <label>Chuyên môn</label>
          <input type="text" name="specialization" class="form-control" required>
        </div>
        <div class="mb-2">
          <label>Kinh nghiệm (năm)</label>
          <input type="number" name="experience_years" class="form-control" required>
        </div>
        <div class="mb-2">
          <label>Tiểu sử</label>
          <textarea name="bio" class="form-control"></textarea>
        </div>
        <div class="mb-2">
          <label>Ảnh</label>
          <input type="file" name="image" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Lưu</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
      </div>
    </form>
  </div>
</div>

<!-- Modal sửa -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="update_trainer.php">
        <div class="modal-header">
          <h5 class="modal-title">Sửa Huấn luyện viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="trainer_id" id="edit-id">

          <label>Tên:</label>
          <input type="text" name="name" id="edit-name" class="form-control">

          <label class="mt-2">Chuyên môn:</label>
          <input type="text" name="specialization" id="edit-specialization" class="form-control">

          <label class="mt-2">Kinh nghiệm (năm):</label>
          <input type="number" name="experience_years" id="edit-experience" class="form-control">

          <label class="mt-2">Bio:</label>
          <textarea name="bio" id="edit-bio" class="form-control"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
          <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include '../page/footer.php';
?>

</body>