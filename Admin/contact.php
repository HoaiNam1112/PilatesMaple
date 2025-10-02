<?php
session_start();
include 'check_admin.php';
include '../page/connect.php';
include 'sidebar.php';

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
  <link rel="stylesheet" href="../css/admin.css" />
  <style>
    .btn {
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 4px;
    font-size: 13px;
    display: inline-block;
    transition: 0.3s;
  }
  .btn-primary {
    background: #1dae66;
    color: #fff;
  }
  .btn-primary:hover {
    background: #14834d;
  }
  .text-muted {
    color: #777;
    font-style: italic;
  }
  .text-center {
    text-align: center;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="banner">
    Danh sách liên hệ
  </div>
    <table>
      <thead>
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
                  <a href="?mark_viewed=<?= $row['contact_id'] ?>" class="btn btn-primary">Mới</a>
                <?php } else { ?>
                  <span class="text-muted">Đã xem</span>
                <?php } ?>
              </td>
            </tr>
      <?php } } else {
          echo "<tr><td colspan='5' class='text-center'>Chưa có liên hệ nào</td></tr>";
      } ?>
      </tbody>
    </table>
  </div>
</body>
</html>
<!--  -->