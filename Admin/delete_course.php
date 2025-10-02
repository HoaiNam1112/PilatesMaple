<?php
include('../page/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM courses WHERE id=$id");

    echo "<script>
            alert('Xóa khóa học thành công!');
            window.location.href='dashboard.php';
          </script>";
}
?>
<!--  -->