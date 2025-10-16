<?php
session_start();
include '../page/connect.php';
include 'check_admin.php';
include 'sidebar.php';

// Xử lý cập nhật role (nếu có)
if (isset($_GET['update_role'])) {
    $user_id = intval($_GET['id']);
    $new_role = $_GET['role'];
    $session_id = $_SESSION['id'] ?? 0;

    // Không cho đổi quyền của chính mình
    if ($user_id != $session_id) {
        $sql = "UPDATE users SET role='$new_role' WHERE id=$user_id";
        $conn->query($sql);
    }

    header("Location: admin.php");
    exit();
}

// Lấy danh sách user
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Phân quyền người dùng</title>
  <link rel="stylesheet" href="../css/admin.css">
  <style>
    select {
      padding: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
  </style>
  <script>
    function confirmRoleChange(select, userId) {
      const newRole = select.value;
      if (confirm("Bạn có chắc muốn thay đổi quyền người dùng này thành '" + newRole + "' không?")) {
        // Điều hướng để cập nhật role
        window.location.href = "admin.php?update_role=1&id=" + userId + "&role=" + newRole;
      } else {
        // Hủy → reload để khôi phục giá trị cũ
        window.location.reload();
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="banner">Phân quyền người dùng</div>
    <table>
      <tr>
        <th>Tên đăng nhập</th>
        <th>Quyền hiện tại</th>
        <th>Đổi quyền</th>
      </tr>
      <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?= htmlspecialchars($row['username']) ?></td>
          <td><?= htmlspecialchars($row['role']) ?></td>
          <td>
            <?php if ($row['role'] !== 'admin') { ?>
              <select onchange="confirmRoleChange(this, <?= $row['id'] ?>)">
                <option value="user" <?= $row['role']=='user'?'selected':'' ?>>User</option>
                <option value="admin" <?= $row['role']=='admin'?'selected':'' ?>>Admin</option>
              </select>
            <?php } else { ?>
              <span style="color: gray;">(Không thể đổi)</span>
            <?php } ?>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
