<?php
include '../page/connect.php';

// Lấy dữ liệu huấn luyện viên
if (isset($_GET['trainer_id'])) {
    $id = intval($_GET['trainer_id']);
    $sql = "SELECT * FROM trainer WHERE trainer_id=$id";
    $result = $conn->query($sql);
    $trainer = $result->fetch_assoc();
}

// Cập nhật khi submit
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $experience = $_POST['experience_years'];
    $bio = $_POST['bio'];

    $sql = "UPDATE trainer  phone='$phone', email='$email', experience_years='$experience', bio='$bio'
            WHERE trainer_id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: trainer.php");
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Huấn luyện viên</title>
</head>
<body>
    <h2 style="text-align:center;">Sửa thông tin Huấn luyện viên</h2>
    <form method="post" style="width:400px; margin:auto;">
        <label>Tên:</label><br>
        <input type="text" name="name" value="<?php echo $trainer['name']; ?>"><br><br>

        <label>Chuyên môn:</label><br>
        <input type="text" name="specialization" value="<?php echo $trainer['specialization']; ?>"><br><br>

        <label>Kinh nghiệm (năm):</label><br>
        <input type="number" name="experience_years" value="<?php echo $trainer['experience_years']; ?>"><br><br>

        <label>Giới thiệu (Bio):</label><br>
        <textarea name="bio" rows="3"><?php echo $trainer['bio']; ?></textarea><br><br>

        <button type="submit" name="update">Cập nhật</button>
    </form>
</body>
</html>
