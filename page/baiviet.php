<?php include '../page/connect.php';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baiviet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="../css/baiviet.css" />

</head>
<body>
    <?php include 'header.php'?>

    <div class="banner">
    <img src="../pic/bnhlv.jpg" alt="Banner Huấn Luyện Viên">
  <div class="banner-text">
    <h1>BÀI VIẾT</h1>
  </div>
    </div>
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
                    <li><a href="baiviet' . $row['id'] . '.php" >' . $row['name'] . '</a></li>
                    ';
            
            }
            echo '</ul></div>';
        } else {
            echo '<div class="sidebar"><h5>không có kết quả</h5><ul class="recent-posts"></div>';
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

    $noidung = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $noidung = trim($_POST['noidung'] ?? '');
    }
    if ($noidung === '') {
        $sql = "SELECT * FROM baivietdata WHERE id BETWEEN 1 AND 6";
    } else {
        $sql = "SELECT * FROM baivietdata WHERE name LIKE '%$noidung%'";
    }

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo '<div class="row">';
    while ($row = $result->fetch_assoc()) {
        echo '
            <div class="col-md-6 mb-4">
                <div class="post-card">
                    <img src="'.$row['img'].'" class="card-img-top" alt="'.$row['name'].'">
                    <div class="card-body">
                        <a href="baiviet'.$row['id'].'.php" style="text-decoration: none; color: black;">
                            <h5 class="card-title">'.$row['name'].'</h5>
                        </a>
                        <p class="card-text">'.mb_substr($row['noidung'], 0, 100).'...</p>
                    </div>
                </div>
            </div>
        ';
    }
    echo '</div>';
} else {
    echo '<div class="col-md-6 mb-4"><h5>không có kết quả</h5><ul class="recent-posts"></div>';
}

$conn->close();
?>
            </div>
        </div>
    </div>      
    </div>
</body>
</html>
<?php include 'footer.php'?>