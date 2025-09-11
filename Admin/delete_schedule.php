<?php
include('../page/connect.php');
$id = $_GET['id'];

$sql = "DELETE FROM schedules WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: manager_schedule.php");
    exit;
} else {
    echo "Lỗi: " . mysqli_error($conn);
}
?>
