<?php
include '../page/connect.php';

// Lấy ID từ URL
if (!isset($_GET['id'])) {
    die("Thiếu ID huấn luyện viên.");
}
$id = intval($_GET['id']);

// Lấy thông tin HLV từ DB
$sql = "SELECT * FROM trainer WHERE trainer_id=$id";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    die("Không tìm thấy huấn luyện viên.");
}
$trainer = $result->fetch_assoc();

// Nếu submit form cập nhật
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $experience = $_POST['experience_years'];
    $bio = $_POST['bio'];

    $sqlUpdate = "UPDATE trainer 
                  SET name='$name', specialization='$specialization',
                      experience_years='$experience', bio='$bio'
                  WHERE trainer_id=$id";

    if ($conn->query($sqlUpdate) === TRUE) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5dc; /* nền be */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .edit-box {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 400px;
        }
        h3 { text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="edit-box">
        <h3>Sửa thông tin HLV</h3>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Tên:</label>
                <input type="text" name="name" class="form-control" value="<?= $trainer['name'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Chuyên môn:</label>
                <input type="text" name="specialization" class="form-control" value="<?= $trainer['specialization'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kinh nghiệm (năm):</label>
                <input type="number" name="experience_years" class="form-control" value="<?= $trainer['experience_years'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Bio:</label>
                <textarea name="bio" class="form-control" rows="3"><?= $trainer['bio'] ?></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <a href="trainer.php" class="btn btn-secondary">Hủy</a>
                <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</body>
</html>
