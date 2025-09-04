<?php
require('header.php');
echo '<form method="post" action="">'; require "connect.php";
mysqli_set_charset($conn, 'UTF8'); ?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đội Ngũ Huấn Luyện Viên</title>
    <style>
      body {
        font-family: "Segoe UI", sans-serif;
        margin: 0;
        background: #fafafa;
        color: #333;
      }
      .banner {
        background: linear-gradient(135deg, #d8a58a, #f2e3dc);
        color: #fff;
        text-align: center;
        padding: 80px 20px;
      }
      .banner h1 {
        margin: 0;
        font-size: 42px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
      }
      .team-photo {
        text-align: center;
        margin: 40px 0;
      }
      .team-photo img {
        max-width: 90%;
        border-radius: 20px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
      }
      .trainer-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
        padding: 40px;
        max-width: 1200px;
        margin: auto;
      }
      .trainer-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
        display: flex;
        flex-direction: column;
      }
      .trainer-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
      }
      .trainer-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
      }
      .trainer-info {
        padding: 20px;
      }
      .trainer-quote {
        font-size: 14px;
        color: #777;
        font-style: italic;
        margin-bottom: 12px;
      }
      .trainer-name {
        display: inline-block;
        background: #f1e3dc;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 16px;
        color: #444;
      }
      .trainer-info ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
        font-size: 14px;
        color: #555;
      }
      .trainer-info ul li {
        margin-bottom: 6px;
        padding-left: 18px;
        position: relative;
      }
      .trainer-info ul li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #b87c63;
        font-size: 12px;
      }
      @media (max-width: 1024px) {
        .trainer-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      @media (max-width: 768px) {
        .trainer-grid {
          grid-template-columns: 1fr;
        }
      }
      .modal {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        justify-content: center;
        align-items: center;
        padding: 20px;
      }
      .modal-content {
        background: #fff;
        border-radius: 16px;
        max-width: 700px;
        width: 100%;
        padding: 24px;
        position: relative;
        animation: fadeIn 0.3s ease-in-out;
      }
      @keyframes fadeIn {
        from {
          transform: scale(0.9);
          opacity: 0;
        }
        to {
          transform: scale(1);
          opacity: 1;
        }
      }
      .modal-content img {
        width: 100%;
        border-radius: 12px;
        margin-bottom: 20px;
      }
      .modal-content h2 {
        margin: 0 0 12px;
        color: #444;
      }
      .modal-content p {
        margin: 6px 0;
        color: #555;
      }
      .close-btn {
        position: absolute;
        top: 10px;
        right: 16px;
        font-size: 26px;
        font-weight: bold;
        color: #666;
        cursor: pointer;
      }
      .close-btn:hover {
        color: #000;
      }
    </style>
  </head>
  <body>
    <div class="banner">
      <h1>Đội Ngũ Huấn Luyện Viên Maple Pilates</h1>
    </div>

    <div class="team-photo">
      <img src="team.jpg" alt="Đội ngũ huấn luyện viên Maple Pilates" />
    </div>

    <div class="trainer-grid">
      <div class="trainer-card" onclick="openModal('haiyen')">
        <img src="haiyen.jpg" alt="HLV Hải Yến" />
        <div class="trainer-info">
          <p class="trainer-quote">
            “Contrology is designed to give you suppleness...”
          </p>
          <span class="trainer-name">HẢI YẾN</span>
          <ul>
            <li>STOTT PILATES® Mat Plus, Reformer</li>
            <li>Kinh nghiệm: 5 năm</li>
          </ul>
        </div>
      </div>
      <div class="trainer-card" onclick="openModal('ngayopi')">
        <img src="ngayopi.jpg" alt="HLV Nga Yopi" />
        <div class="trainer-info">
          <p class="trainer-quote">
            “Physical Fitness is the first requisite of happiness”
          </p>
          <span class="trainer-name">NGA YOPI</span>
          <ul>
            <li>STOTT PILATES® Reformer, Cadillac</li>
            <li>Kinh nghiệm: 7 năm</li>
          </ul>
        </div>
      </div>
      <div class="trainer-card" onclick="openModal('phamhuong')">
        <img src="phamhuong.jpg" alt="HLV Phạm Hương" />
        <div class="trainer-info">
          <p class="trainer-quote">“The greatest wealth is health”</p>
          <span class="trainer-name">PHẠM HƯƠNG</span>
          <ul>
            <li>STOTT PILATES® Matwork, Reformer</li>
            <li>Kinh nghiệm: 5 năm</li>
          </ul>
        </div>
      </div>
    </div>
    <div id="modal-haiyen" class="modal">
      <div class="modal-content">
        <span class="close-btn" onclick="closeModal('haiyen')">&times;</span>
        <img src="haiyen.jpg" alt="HLV Hải Yến" />
        <h2>HLV HẢI YẾN</h2>
        <p><strong>Chứng chỉ:</strong> STOTT PILATES® Mat Plus, Reformer</p>
        <p><strong>Kinh nghiệm:</strong> 5 năm giảng dạy</p>
        <p>
          <strong>Điểm mạnh:</strong> Cải thiện tư thế, giảm đau lưng, phát
          triển core.
        </p>
      </div>
    </div>

    <div id="modal-ngayopi" class="modal">
      <div class="modal-content">
        <span class="close-btn" onclick="closeModal('ngayopi')">&times;</span>
        <img src="ngayopi.jpg" alt="HLV Nga Yopi" />
        <h2>HLV NGA YOPI</h2>
        <p><strong>Chứng chỉ:</strong> STOTT PILATES® Reformer, Cadillac</p>
        <p><strong>Kinh nghiệm:</strong> 7 năm huấn luyện</p>
        <p>
          <strong>Điểm mạnh:</strong> Chuyên phục hồi chấn thương, sức mạnh toàn
          thân.
        </p>
      </div>
    </div>

    <div id="modal-phamhuong" class="modal">
      <div class="modal-content">
        <span class="close-btn" onclick="closeModal('phamhuong')">&times;</span>
        <img src="phamhuong.jpg" alt="HLV Phạm Hương" />
        <h2>HLV PHẠM HƯƠNG</h2>
        <p><strong>Chứng chỉ:</strong> STOTT PILATES® Matwork, Reformer</p>
        <p><strong>Kinh nghiệm:</strong> 5 năm</p>
        <p><strong>Điểm mạnh:</strong> Đào tạo thể lực, vóc dáng, sức bền.</p>
      </div>
    </div>
    </script>
  </body>
</html>
<?php
require('footer.php');
?>
