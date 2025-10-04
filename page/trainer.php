<?php
$servername = "localhost";
$username = "root";     
$password = "";       
$dbname = "btl_pilates";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đội Ngũ Huấn Luyện Viên</title>
  <link rel="stylesheet" href="../css/huanluyen.css">
</head>
<body>
    <?php include 'header.php'; ?>   
  <div class="banner">
  <img src="../pic/bnhlv.jpg" alt="Banner Huấn Luyện Viên">
  <div class="banner-text">
    <h1>ĐỘI NGŨ HUẤN LUYỆN VIÊN MAPLE PILATES</h1>
  </div>
</div>

<div class="trainer-video">
  <video width="100%" controls autoplay muted loop>
    <source src="../pic/gioithieu.mp4" type="video/mp4">
    Trình duyệt của bạn không hỗ trợ video.
  </video>
</div>

  <div class="team-photo">
    <img src="../pic/team.jpg" alt="Đội ngũ huấn luyện viên">
    <p class="team-caption">Đội ngũ huấn luyện viên tận tâm và giàu kinh nghiệm tại Maple Pilates.</p>
  </div>

  <div class="trainer-grid">
    <?php
    $sql = "SELECT * FROM trainers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0):
      while($row = $result->fetch_assoc()):
    ?>
      <div class="trainer-card">
        <img src="<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
        <div class="trainer-info">
          <span class="trainer-name"><?php echo strtoupper($row['name']); ?></span>
          <ul>
            <li>Kinh nghiệm: <?php echo $row['experience']; ?></li>
            <li><?php echo $row['certifications']; ?></li>
          </ul>
          <button class="detail-btn" onclick="openModal(<?php echo $row['id']; ?>)">Xem chi tiết</button>
        </div>
      </div>
    <?php
      endwhile;
    endif;
    $sql2 = "SELECT * FROM static_trainers";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0):
      while($row = $result2->fetch_assoc()):
    ?>
      <div class="trainer-card static-card">
        <img src="<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
        <div class="trainer-info">
          <span class="trainer-name"><?php echo strtoupper($row['name']); ?></span>
          <p><?php echo $row['certified']; ?></p>
        </div>
      </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>
  <div id="trainerModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div id="modal-body"></div>
    </div>
  </div>

  <script>
    function openModal(id) {
      fetch("trainer_detail.php?id=" + id)
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
<?php 
include 'footer.php';
$conn->close();
?>
