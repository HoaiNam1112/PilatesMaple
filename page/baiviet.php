<?php include 'header.php'?>
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
                        <button class="btn btn-outline-primary" type="button">search</button>
                    </div>
                </div>
                <div class="sidebar">
                    <h5>Recent Post</h5>
                    <ul class="recent-posts">
                        <li><a href="baiviet1.php" >Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</a></li>
                        <li><a href="baiviet2.php">Vì sao dân văn phòng nên tập Pilates? [Chuyên gia giải đáp]</a></li>
                        <li><a href="baiviet3.php">Một buổi đào tạo HLV pilates diễn ra thế nào?</a></li>
                        <li><a href="baiviet4.php">Mất bao lâu để trở thành huấn luyện viên Pilates?</a ></li>
                        <li><a href="baiviet5.php">Những sai lầm cần tránh khi luyện tập Pilates bạn cần biết.</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 main-content">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <img
                            src="https://paragate.vn/wp-content/uploads/2024/12/nen-tap-pilates-vao-luc-nao-1.jpg"
                            class="card-img-top"
                            alt="Sản phẩm 2"
                            />
                            <div class="post-category">Pilates</div>
                            <a href="baiviet1.php" class="card-link">
                                <h4>Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</h4>
                            </a>
                            <p>Việc lựa chọn thời điểm tập Pilates phù hợp sẽ giúp bạn tối ưu hóa hiệu quả tập luyện và.</p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <img
                            src="https://paragate.vn/wp-content/uploads/2024/12/vi-sao-dan-van-phong-nen-tap-pilates-2.jpg" 
                            class="card-img-top">                                                                           
                            <div class="post-category">Pilates</div>
                            <a href="baiviet2.php" class="card-link">
                                <h4>Vì sao dân văn phòng nên tập Pilates? [Chuyên gia giải đáp]</h4>
                            </a>
                            <p>Vì sao dân văn phòng nên tập Pilates là câu hỏi được nhiều người quan tâm khi muốn tìm giải.</p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <img
                            src="https://paragate.vn/wp-content/uploads/2024/12/mot-buoi-dao-tao-hlv-pilates-dien-ra-nhu-the-nao-3.jpg"
                            class="card-img-top">
                            <div class="post-category">Pilates</div>
                            <a href="baiviet3.php" class="card-link">
                                <h4>Một buổi đào tạo HLV pilates diễn ra thế nào?</h4>
                            </a>
                            
                            <p>Một buổi đào tạo HLV Pilates diễn ra thế nào là thắc mắc của nhiều người khi muốn theo đuổi.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <img
                            src="https://paragate.vn/wp-content/uploads/2024/12/mat-bao-lau-de-tro-thanh-huan-luyen-vien-pilates-3.jpg"
                            class="card-img-top">
                            <div class="post-category">Pilates</div>
                            <a href="baiviet4.php" class="card-link">
                                <h4>Mất bao lâu để trở thành huấn luyện viên Pilates?</h4>
                            </a>
                            
                            <p>Trở thành huấn luyện viên Pilates đang là xu hướng được nhiều người quan tâm, đặc biệt trong.</p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <img
                            src="https://paragate.vn/wp-content/uploads/2024/12/nhung-sai-lam-khi-thuc-hien-pilates-4.jpg"
                            class="card-img-top">
                            <div class="post-category">Pilates</div>
                            <a href="baiviet5.php" class="card-link">
                                <h4>Những sai lầm cần tránh khi luyện tập Pilates</h4>
                            </a>
                            
                            <p>Khi mới bắt đầu tập Pilates, nhiều người thường mắc phải những sai lầm cơ bản làm giảm hiệu quả.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card">
                            <img
                            src="https://paragate.vn/wp-content/uploads/2024/12/loi-ich-cua-pilates-doi-voi-suc-khoe-3.jpg"
                            class="card-img-top">
                            <div class="post-category">Pilates</div>
                            <a href="baiviet6.php" class="card-link">
                                <h4>Lợi ích của Pilates đối với sức khỏe tinh thần</h4>
                            </a>
                            
                            <p>Ngoài những lợi ích về thể chất, Pilates còn mang lại nhiều tác động tích cực đến sức khỏe tinh thần.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include 'footer.php'?>