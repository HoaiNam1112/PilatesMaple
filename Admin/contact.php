<?php
session_start();
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
  <style>
  body {
    font-family: Arial, sans-serif;
    background: #f9f9f9;
    margin: 0;
    padding: 0;
  }
  .container {
    margin-left: 240px; /* chừa khoảng cho sidebar */
    padding: 20px;
  }
  .banner {
    width: auto;
    background: #1dae66;
    text-align: center;
    padding: 25px 20px;
    font-size: 28px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
  }
  table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
  th, td {
    border: 1px solid #eee;
    padding: 12px;
    text-align: left;
  }
  th {
    background: #1dae66;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 0.5px;
  }
  tr:nth-child(even) {
    background: #f9f9f9;
  }
  tr.table-warning {
    background: #fffbe6;
  }
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
