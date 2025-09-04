<?php
$servername = "localhost";
$username = "root";     
$password = "";       
$dbname = "maple_pilates";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$sql = "SELECT * FROM trainers";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đội Ngũ Huấn Luyện Viên</title>
  <link rel="stylesheet" href="../css/huanluyen.css">
</head>
<body>
  <div class="banner">
    <h1>Đội Ngũ Huấn Luyện Viên Maple Pilates</h1>
  </div>
  <div class="team-photo">
    <img src="../pic/team.jpg" alt="Đội ngũ huấn luyện viên">
  </div>

  <div class="trainer-grid">
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <div class="trainer-card">
          <img src="<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
          <div class="trainer-info">
            <p class="trainer-quote"><?php echo $row['quote']; ?></p>
            <span class="trainer-name"><?php echo strtoupper($row['name']); ?></span>
            <ul>
              <li>Kinh nghiệm: <?php echo $row['experience']; ?></li>
              <li><?php echo $row['certifications']; ?></li>
            </ul>
            <button class="detail-btn" onclick="openModal(<?php echo $row['id']; ?>)">Xem chi tiết</button>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>Chưa có huấn luyện viên nào.</p>
    <?php endif; ?>
  </div>
  <div id="trainerModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div id="modal-body"></div>
    </div>
  </div>

  <script>
    function openModal(id) {
      fetch("huanluyen_detail.php?id=" + id)
        .then(res => res.text())
        .then(data => {
          document.getElementById("modal-body").innerHTML = data;
          document.getElementById("trainerModal").style.display = "flex";
        });
    }
    function closeModal() {
      document.getElementById("trainerModal").style.display = "none";
    }
  </script>
</body>
</html>
<?php $conn->close(); ?>
