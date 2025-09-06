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

    $sql = "UPDATE trainer experience_years='$experience', bio='$bio'
            WHERE trainer_id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: trainer.php");
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
