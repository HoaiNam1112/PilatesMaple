<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btl_pilates";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Lỗi kết nối DB: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM trainers WHERE id = $id";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    echo "<div class='trainer-detail'>";
    echo "<h2>" . htmlspecialchars($row['name']) . "</h2>";
    echo "<p><strong>Trích dẫn:</strong> " . htmlspecialchars($row['quote']) . "</p>";
    echo "<p><strong>Kinh nghiệm:</strong> " . htmlspecialchars($row['experience']) . "</p>";
    echo "<p><strong>Chứng chỉ:</strong> " . htmlspecialchars($row['certifications']) . "</p>";
    echo "</div>";
} else {
    echo "Không tìm thấy thông tin huấn luyện viên.";
}

$conn->close();
?>
