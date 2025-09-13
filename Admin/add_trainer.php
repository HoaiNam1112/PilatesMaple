<?php
session_start();
include '../page/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $certifications = $_POST['certifications']; // đúng tên biến
    $experience = $_POST['experience'];
    $quote = $_POST['quote'];

    // upload ảnh
    $imageName = "";
    if (!empty($_FILES['photo']['name'])) {
        $targetDir = "../pic/";
        $imageName = time() . "_" . basename($_FILES['photo']['name']); // thêm timestamp tránh trùng
        $targetFile = $targetDir . $imageName;
        move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile);
    }

    $sql = "INSERT INTO trainers (name, certifications, experience, quote, photo)
            VALUES ('$name','$certifications','$experience','$quote','$imageName')";
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
  <title>Thêm Huấn luyện viên</title>
  <style>
    body {
      background-color: #f5f5dc;
      font-family: Arial, sans-serif;
    }
    .container {
      width: 450px;
      margin: 50px auto;
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    h2 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
      color: #333;
    }
    label { font-weight: bold; margin-bottom: 6px; display: block; }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    .btn {
      display: inline-block;
      padding: 10px 15px;
      border: none;
      border-radius: 6px;
      font-size: 15px;
      cursor: pointer;
      margin-right: 10px;
    }
    .btn-save { background-color: #28a745; color: #fff; }
    .btn-save:hover { background-color: #218838; }
    .btn-cancel { background-color: #ccc; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Thêm Huấn luyện viên</h2>
    <form method="POST" enctype="multipart/form-data">
      <label>Tên</label>
      <input type="text" name="name" required>

      <label>Chuyên môn</label>
      <input type="text" name="certifications" required>

      <label>Kinh nghiệm (năm)</label>
      <input type="text" name="experience" required>

      <label>Tiểu sử</label>
      <textarea name="quote"></textarea>

      <label>Ảnh</label>
      <input type="file" name="photo">

      <button type="submit" class="btn btn-save">Lưu</button>
      <a href="trainer.php" class="btn btn-cancel">Hủy</a>
    </form>
  </div>
</body>
</html>
