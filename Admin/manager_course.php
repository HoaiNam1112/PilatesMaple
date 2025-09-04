
<?php
session_start();
include('../page/connect.php');

// === Thêm khóa học ===
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO courses (title, description, price) VALUES ('$title', '$description', '$price')";
    mysqli_query($conn, $sql);
   echo "<script> 
                alert('Bạn đã thêm thành công');
                window.location.href ='manager_courses.php'
            </script>";

}

// === Sửa khóa học ===
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE courses SET title='$title', description='$description', price='$price' WHERE id=$id";
    mysqli_query($conn, $sql);
  echo "<script> 
                alert('Bạn đã sửa thành công');
                window.location.href ='manager_courses.php'
            </script>";
}

// === Xóa khóa học ===
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    mysqli_query($conn, "DELETE FROM courses WHERE id=$id");
    echo "<script> 
                alert('Bạn đã xóa thành công');
                window.location.href ='manager_courses.php'
            </script>";
}

// Lấy danh sách khóa học
$result = mysqli_query($conn, "SELECT * FROM courses ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý khóa học</title>
    <link rel="stylesheet" href="../css/manager_courses.css" />
   
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
                <input type="text" name="title" placeholder="Tên khóa học" required>
                <input type="text" name="description" placeholder="Mô tả">
                <input type="number" name="price" placeholder="Giá" required>
                <button type="submit" name="add">Thêm</button>
            </form>
        </div>

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
                <form method="POST">
                    <td><?php echo $row['id']; ?></td>
                    <td><input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>"></td>
                    <td><input type="text" name="description" value="<?php echo htmlspecialchars($row['description']); ?>"></td>
                    <td><input type="number" name="price" value="<?php echo $row['price']; ?>"></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="update" class="btn-edit"> Lưu</button>
                    </form>
                    <form method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc muốn xóa?');">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete" class="btn-danger"> Xóa</button>
                    </form>
                    </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
