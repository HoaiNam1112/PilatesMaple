<?php
include('../page/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE courses SET title='$title', description='$description', price='$price' WHERE id=$id";
    mysqli_query($conn, $sql);

    echo "<script>
            alert('Cập nhật khóa học thành công!');
            window.location.href='dashboard.php';
          </script>";
}
?>
