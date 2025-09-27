<?php
session_start();
include '../page/connect.php';

// Lấy ID từ URL
if (!isset($_GET['id'])) {
    die("Thiếu ID huấn luyện viên.");
}
$id = intval($_GET['id']);

// Lấy thông tin HLV từ DB
$sql = "SELECT * FROM trainers WHERE id=$id";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    die("Không tìm thấy huấn luyện viên.");
}
$trainer = $result->fetch_assoc();

// Nếu submit form cập nhật
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $certifications = $_POST['certifications']; // đúng tên biến
    $experience = $_POST['experience'];
    $quote = $_POST['quote'];

    $sqlUpdate = "UPDATE trainers 
                  SET name='$name', certifications='$certifications',
                      experience='$experience', quote='$quote'
                  WHERE id=$id";

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
    <style>
        body {
            background-color: rgba(237, 230, 192, 1);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }
        .edit-box {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 500px;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 6px;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
        }
        .btn-row {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s;
        }
        .btn-secondary {
            background: #ccc;
            color: #000;
        }
        .btn-secondary:hover {
            background: #aaa;
        }
        .btn-primary {
            background: #66a777ff;
            color: #fff;
        }
        .btn-primary:hover {
            background: #3fe785ff;
        }
    </style>
</head>
<body>
    <div class="edit-box">
        <h3>Sửa thông tin HLV</h3>
        <form method="post">
            <div class="form-group">
                <label>Tên:</label>
                <input type="text" name="name" value="<?= $trainer['name'] ?>" required>
            </div>
            <div class="form-group">
                <label>Chuyên môn:</label>
                <input type="text" name="certifications" value="<?= $trainer['certifications'] ?>" required>
            </div>
            <div class="form-group">
                <label>Kinh nghiệm:</label>
                <input type="text" name="experience" value="<?= $trainer['experience'] ?>" required>
            </div>
            <div class="form-group">
                <label>Bio:</label>
                <textarea name="quote" rows="3"><?= $trainer['quote'] ?></textarea>
            </div>
            <div class="btn-row">
                <a href="trainer.php" class="btn btn-secondary">Hủy</a>
                <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</body>
</html>
<!--  -->