<?php
session_start();
include '../page/connect.php';
include 'sibebar.php';

// Nếu admin muốn xóa đăng ký
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM newsletter_subscription WHERE subscription_id=$id");
}

// Nếu admin muốn đánh dấu đã xem
if (isset($_GET['mark_viewed'])) {
    $id = intval($_GET['mark_viewed']);
    $conn->query("UPDATE newsletter_subscription SET status='viewed' WHERE subscription_id=$id");
}

// Lấy danh sách đăng ký (mới trước)
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
<<<<<<< HEAD
  <link rel="stylesheet" href="../css/admin.css?v=2" />
=======
>>>>>>> e38a70a85c1ae0de381300c091185318f0b9c8a2
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 1000px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
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
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: left;
    }
    th {
      background: #333;
      color: #fff;
    }
    tr:nth-child(even) {
      background: #f9f9f9;
    }
    tr:hover {
      background: #f1f1f1;
    }
    .btn {
      padding: 6px 12px;
      text-decoration: none;
      border-radius: 4px;
      font-size: 14px;
      display: inline-block;
    }
    .btn-danger {
      background: #dc3545;
      color: #fff;
    }
    .btn-danger:hover {
      background: #b52a37;
    }
    .btn-primary {
      background: #007bff;
      color: #fff;
    }
    .btn-primary:hover {
      background: #0056b3;
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
  <div class="banner"> Danh sách đăng ký nhận tin </div>
  <div class="container">
    <table>
      <thead>
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
                   class="btn btn-danger"
                   onclick="return confirm('Bạn có chắc chắn muốn xóa đăng ký này?');">Xóa</a>
              </td>
              <td>
                <?php if ($row['status'] == 'new') { ?>
                  <a href="?mark_viewed=<?= $row['subscription_id'] ?>" class="btn btn-primary">Mới</a>
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
</body>
</html>
