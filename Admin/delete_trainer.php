<?php
include '../page/connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Dùng prepared statement để an toàn hơn
    $stmt = $conn->prepare("DELETE FROM trainers WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: trainer.php?msg=deleted");
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
    $stmt->close();
} else {
    echo "Không tìm thấy ID huấn luyện viên cần xóa.";
}
$conn->close();
?>
<!--  -->