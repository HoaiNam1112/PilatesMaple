<?php
include '../page/connect.php';

if (isset($_GET['trainer_id'])) {
    $id = intval($_GET['trainer_id']);
    $sql = "DELETE FROM trainer WHERE trainer_id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: trainer.php");
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
