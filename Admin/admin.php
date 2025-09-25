<?php
session_start();
include '../page/connect.php';
include 'check_admin.php';


// Xử lý cập nhật role
if (isset($_POST['update_role'])) {
    $user_id = intval($_POST['id']);
    $new_role = $_POST['role'];

    // Không cho đổi quyền của chính superadmin
    if ($user_id != $_SESSION['id']) {
        $sql = "UPDATE users SET role='$new_role' WHERE id=$user_id";
        $conn->query($sql);
    }
    header("Location: admin.php");
    exit();
}

// Lấy danh sách user
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

include 'sidebar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Phân quyền người dùng</title>
    <link rel="stylesheet" href="../css/admin.css" />
    <style>
        select { 
            padding:5px; 
        }
        button { 
            padding:5px 10px; 
            border:none; 
            border-radius:4px; 
            cursor:pointer; 
            background:#28a745; 
            color:#fff;
        }
        button:hover { 
            background:#218838; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="banner"> Phân quyền người dùng</div>
        <table>
            <tr>
                <th>Tên đăng nhập</th>
                <th>Quyền hiện tại</th>
                <th>Đổi quyền</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['role'] ?></td>
                    <td>
                        <?php if ($row['role'] !== 'admin') { ?>
                            <form method="post" style="margin:0;">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <select name="role">
                                    <option value="user" <?= $row['role']=='user'?'selected':'' ?>>User</option>
                                    <option value="admin" <?= $row['role']=='admin'?'selected':'' ?>>Admin</option>
                                </select>
                                <button type="submit" name="update_role">Cập nhật</button>
                            </form>
                        <?php } else { ?>
                            (Không thể đổi)
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
<!--  -->