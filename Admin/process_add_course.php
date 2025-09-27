<?php
include('../page/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO courses (title, description, price) VALUES ('$title', '$description', '$price')";
    mysqli_query($conn, $sql);

    echo "<script>
            alert('Thêm khóa học thành công!');
            window.location.href='manager_course.php';
          </script>";
}
?>
<!--  -->