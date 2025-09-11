<?php include 'header.php'?>
<?php include '../page/connect.php';
$sql = "SELECT * FROM baivietdata WHERE id BETWEEN 1 AND 6";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baiviet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .search-box {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .sidebar {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        
        .recent-posts  {
            list-style: none;
            padding: 0;
        }
        .recent-posts a {
            text-decoration: none;
            color: #000;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .post-card {
            margin-top: 10px;
            background-color: white;
            padding: 20px;
            height: 100%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .post-card:hover {
            transform: translateY(-5px);
        }
        .post-category {
            color: #6f42c1;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .card-link {
            text-decoration: none;
            color: #000;
        }
      
        .main-content {
            padding-left: 30px;
        }
        @media (max-width: 768px) {
            .main-content {
                padding-left: 15px;
                padding-top: 20px;
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
        
        .search-container {
            background: white;
            border-radius: 5px;
            padding: 10px;
            margin: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn btn-outline-primary" type="button">Search</button>
                    </div>
                </div>
                <div class="sidebar">
                    <h5>Recent Post</h5>
                    <ul class="recent-posts">
                        <li><a href="baiviet1.php" >Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</a></li>
                        <li><a href="baiviet2.php">Vì sao dân văn phòng nên tập Pilates? [chuyên gia giải đáp]</a></li>
                        <li><a href="baiviet3.php">Một buổi đào tạo HLV pilates diễn ra thế nào?</a></li>
                        <li><a href="baiviet4.php">Mất bao lâu để trở thành huấn luyện viên Pilates?</a ></li>
                        <li><a href="baiviet5.php">Những sai lầm cần tránh khi luyện tập Pilates bạn cần biết.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 main-content">
            <div class="row">
                      
                        <?php
                        if ($result->num_rows > 0) {
    echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
        echo '
    
                <div class="col-md-6 mb-4">
                <div class="post-card">
                <img src="'.$row['img'].'" class="card-img-top" alt="'.$row['name'].'">
                <div class="card-body">
                    <h5 class="card-title">'.$row['name'].'</h5>
                    <p class="card-text">'.mb_substr($row['noidung'], 0, 100).'...</p>
                    <a href="baiviet.php?id='.$row['id'].'" class="btn btn-primary">Xem chi tiết</a>
                </div>
                </div>
                </div>
            
        ';
    }
    echo '</div>'; // đóng row
} else {
    echo "Không có bài viết nào.";
}

$conn->close();
?>
            </div>
        </div>
    </div>      
    </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php'?>