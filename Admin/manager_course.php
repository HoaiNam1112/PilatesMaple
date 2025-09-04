<?php
session_start();
include('../page/connect.php');

// // Kiểm tra quyền admin
// if (!isset($_SESSION['admin_logged_in']) || $_SESSION['role'] !== 'admin') {
//     header("Location: ../manager/login.php");
//     exit();
// }

// === Thêm khóa học ===
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO courses (title, description, price) VALUES ('$title', '$description', '$price')";
    mysqli_query($conn, $sql);
    header("Location: manage_courses.php");
    exit();
}

// === Sửa khóa học ===
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE courses SET title='$title', description='$description', price='$price' WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: manage_courses.php");
    exit();
}

// === Xóa khóa học ===
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM courses WHERE id=$id");
    header("Location: manage_courses.php");
    exit();
}

// Lấy danh sách khóa học
$result = mysqli_query($conn, "SELECT * FROM courses ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý khóa học</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
        }
        .form-section {
            margin-bottom: 20px;
        }
        form input, form button {
            padding: 8px;
            margin: 5px 0;
        }
        form button {
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form button:hover {
            background: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background: #007bff;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        .btn-danger {
            color: white;
            background: #dc3545;
            padding: 6px 10px;
            border-radius: 4px;
        }
        .btn-danger:hover {
            background: #c82333;
        }
        .btn-edit {
            background: #ffc107;
            color: black;
            padding: 6px 10px;
            border-radius: 4px;
        }
        .btn-edit:hover {
            background: #e0a800;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🎓 Quản lý khóa học</h2>
        <p><a href="index.php">⬅ Quay lại Dashboard</a></p>
        <hr>

        <!-- Form thêm -->
        <div class="form-section">
            <h3>➕ Thêm khóa học</h3>
            <form method="POST">
                <input type="text" name="title" placeholder="Tên khóa học" required><br>
                <input type="text" name="description" placeholder="Mô tả"><br>
                <input type="number" name="price" placeholder="Giá" required><br>
                <button type="submit" name="add">Thêm</button>
            </form>
        </div>
        <hr>

        <!-- Danh sách -->
        <h3>📋 Danh sách khóa học</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo number_format($row['price'], 0, ',', '.'); ?> đ</td>
                <td><?php echo $row['created_at']; ?></td>
                <td>
                    <!-- Form sửa -->
                    <form method="POST" style="display:inline-block;">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="text" name="title" value="<?php echo $row['title']; ?>">
                        <input type="text" name="description" value="<?php echo $row['description']; ?>">
                        <input type="number" name="price" value="<?php echo $row['price']; ?>">
                        <button type="submit" name="update" class="btn-edit">Lưu</button>
                    </form>
                    <a href="manage_courses.php?delete=<?php echo $row['id']; ?>" class="btn-danger" onclick="return confirm('Xóa khóa học này?')">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
