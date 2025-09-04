<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maple_pilates";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Lỗi kết nối DB"); }

$id = intval($_GET['id']);
$sql = "SELECT * FROM trainers WHERE id = $id";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
    echo "<h2>" . $row['name'] . "</h2>";
    echo "<img src='" . $row['photo'] . "' alt='" . $row['name'] . "'>";
    echo "<p><strong>Trích dẫn:</strong> " . $row['quote'] . "</p>";
    echo "<p><strong>Kinh nghiệm:</strong> " . $row['experience'] . "</p>";
    echo "<p><strong>Chứng chỉ:</strong> " . $row['certifications'] . "</p>";
} else {
    echo "Không tìm thấy thông tin huấn luyện viên.";
}
$conn->close();
?>
