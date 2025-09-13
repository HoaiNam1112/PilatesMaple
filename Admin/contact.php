<?php
session_start();
include '../page/connect.php';
include '../page/header.php';

// Nếu admin bấm "Đánh dấu đã xem"
if (isset($_GET['mark_viewed'])) {
    $id = intval($_GET['mark_viewed']);
    $conn->query("UPDATE contact_form SET status='viewed' WHERE contact_id=$id");
}

// Lấy danh sách liên hệ, ưu tiên cái mới (status='new')
$sql = "SELECT * FROM contact_form ORDER BY 
           FIELD(status, 'new', 'viewed'), 
           created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý liên hệ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
  <div class="container">
    <h2 class="mb-4">Danh sách liên hệ</h2>
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>Họ tên</th>
          <th>Email</th>
          <th>Tin nhắn</th>
          <th>Ngày gửi</th>
          <th>Trạng thái</th>
        </tr>
      </thead>
      <tbody>
      <?php if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) { ?>
            <tr class="<?= $row['status'] == 'new' ? 'table-warning' : '' ?>">
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['message']) ?></td>
              <td><?= $row['created_at'] ?></td>
              <td>
                <?php if ($row['status'] == 'new') { ?>
                  <a href="?mark_viewed=<?= $row['contact_id'] ?>" class="btn btn-sm btn-primary">Mới</a>
                <?php } else { ?>
                  <span class="text-muted">Đã xem</span>
                <?php } ?>
              </td>
            </tr>
      <?php } } else {
          echo "<tr><td colspan='7' class='text-center'>Chưa có liên hệ nào</td></tr>";
      } ?>
      </tbody>
    </table>
  </div>
  <?php
  include '../page/footer.php';
  ?>
</body>
</html>
