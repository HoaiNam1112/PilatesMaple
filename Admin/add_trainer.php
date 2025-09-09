<?php
include '../page/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $experience = $_POST['experience_years'];
    $bio = $_POST['bio'];

    // Xử lý ảnh
    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        $image = time() . "_" . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }

    $sql = "INSERT INTO trainer (name, specialization, experience_years, bio, image) 
            VALUES ('$name', '$specialization', '$experience', '$bio', '$image')";

    if ($conn->query($sql) === TRUE) {
        header("Location: trainer.php");
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
