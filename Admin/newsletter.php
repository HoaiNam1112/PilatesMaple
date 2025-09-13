<?php
session_start();
include '../page/connect.php';
include '../page/header.php';
// Nếu admin muốn xóa đăng ký
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM newsletter_subscription WHERE subscription_id=$id");
}

if (isset($_GET['mark_viewed'])) {
    $id = intval($_GET['mark_viewed']);
    $conn->query("UPDATE newsletter_subscription SET status='viewed' WHERE subscription_id=$id");
}

// Lấy danh sách đăng ký mới nhất trước
$sql = "SELECT * FROM newsletter_subscription ORDER BY 
           FIELD(status, 'new', 'viewed'), 
           subscribe_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản lý đăng ký nhận tin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
  <div class="container">
    <h2 class="mb-4">Danh sách đăng ký nhận tin</h2>
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>Tên</th>
          <th>Email</th>
          <th>Ngày đăng ký</th>
          <th>Xóa</th>
          <th>Trạng thái</th>
        </tr>
      </thead>
      <tbody>
      <?php if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= $row['subscribe_date'] ?></td>
              <td>
                <a href="?delete=<?= $row['subscription_id'] ?>" 
                   class="btn btn-sm btn-danger"
                   onclick="return confirm('Bạn có chắc chắn muốn xóa đăng ký này?');">Xóa</a>
              </td>
              <td>
                <?php if ($row['status'] == 'new') { ?>
                  <a href="?mark_viewed=<?= $row['subscription_id'] ?>" class="btn btn-sm btn-primary">Mới</a>
                <?php } else { ?>
                  <span class="text-muted">Đã xem</span>
                <?php } ?>
              </td>
            </tr>
      <?php } } else {
          echo "<tr><td colspan='5' class='text-center'>Chưa có đăng ký nào</td></tr>";
      } ?>
      </tbody>
    </table>
  </div>
  <?php
  include '../page/footer.php';
  ?>
</body>
</html>
