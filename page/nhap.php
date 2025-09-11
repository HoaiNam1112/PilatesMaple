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
            background-color: #e0e0e0; /* màu xám nhạt */
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            padding: 40px 0;
            color: #333;
            letter-spacing: 2px;
            }

      .banner h1 {
            margin: 0;
            font-size: 42px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
        <form method="post">
        <div class="search-box">
            <div class="input-group">
                <input type="text" class="form-control" name="noidung" placeholder="Search">
                <button class="btn btn-outline-primary" type="submit" name="btn">
                    <img src="../pic/search1.png" 
                        alt="search" 
                        class="img-fluid" 
                        style="width: 30px; height: 30px;">
                </button>
            </div>
        </div>
        </form>
<?php   
    if (isset($_POST['btn'])) { 
        $noidung = $_POST['noidung'];
        $sqlSearch = "SELECT * FROM baivietdata WHERE name LIKE '%$noidung%' ";
        $resultSearch = $conn->query($sqlSearch);

        if ($resultSearch->num_rows > 0) {
            echo '<div class="sidebar"><h5>Kết quả</h5><ul class="recent-posts">';
            while($row = $resultSearch->fetch_assoc()) {
                    
                    echo '
                    <li><a href="baiviet' . $row['id'] . '.php">' . $row['name'] . '</a></li>
                    ';
            
            }
            echo '</ul></div>';
        } else {
            echo "Không tìm thấy kết quả nào.";
        }
    }
?>
                <div class="sidebar">
                    <h5>Đề Xuất</h5>
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
                    <a href="baiviet'.$row['id'].'.php" class="btn btn-primary">Xem chi tiết</a>
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