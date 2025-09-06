<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài viết Pilates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        
       
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
    <div class="header">
            <h1 class="text-center banner">BÀI VIẾT</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                  <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="search-container d-flex justify-content-between align-items-center">
                <input type="text" class="flex-grow-1" placeholder="Search">
                <button><i class="fas fa-search"></i></button>
            </div>
                <div class="sidebar sticky-top">
                    <h3 class="section-title">I. Recent Post</h3>
                    <ul class="article-list">
                        <li><a href="#">Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</a></li>
                        <li><a href="#">Vì sao dân văn phòng nên tập Pilates? [Chuyên gia giải đáp]</a></li>
                        <li><a href="#">Một buổi đào tạo HIV pilates diễn ra thế nào?</a></li>
                        <li><a href="#">Mặt bao lâu để trở thành huấn luyện viên Pilates?</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
            </div>

          
            <div class="col-md-8">
                <div class="row">
                   
                    <div class="col-md-6 mb-4">
                        <div class="card product-card">
                    <img
                src="https://paragate.vn/wp-content/uploads/2024/12/nen-tap-pilates-vao-luc-nao-1.jpg"
                class="card-img-top"
                alt="Sản phẩm 1"
              />
              <div class="card-body">
                <h2 class="card-title">Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</h2>
                <p class="card-text">
Việc lựa chọn thời điểm tập Pilates phù hợp sẽ giúp bạn tối ưu hóa hiệu quả tập luyện và nhanh chóng đạt được mục tiêu đề ra. Trong bài viết này, chúng tôi sẽ phân tích những khung giờ tập luyện tốt nhất trong ngày dựa trên nhịp sinh học cơ thể.                </p>
                <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
              </div>
                    </div>

                 
                    <div class="col-md-6 mb-4">
                       <div class="card product-card">
                    <img
                src="https://paragate.vn/wp-content/uploads/2024/12/nen-tap-pilates-vao-luc-nao-1.jpg"
                class="card-img-top"
                alt="Sản phẩm 1"
              />
              <div class="card-body">
                <h2 class="card-title">Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</h2>
                <p class="card-text">
Việc lựa chọn thời điểm tập Pilates phù hợp sẽ giúp bạn tối ưu hóa hiệu quả tập luyện và nhanh chóng đạt được mục tiêu đề ra. Trong bài viết này, chúng tôi sẽ phân tích những khung giờ tập luyện tốt nhất trong ngày dựa trên nhịp sinh học cơ thể.                </p>
                <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
              </div>
                    </div>
                </div>
           
                   
                    <div class="col-md-6 mb-4">
                        <div class="card product-card">
                    <img
                src="https://paragate.vn/wp-content/uploads/2024/12/nen-tap-pilates-vao-luc-nao-1.jpg"
                class="card-img-top"
                alt="Sản phẩm 1"
              />
              <div class="card-body">
                <h2 class="card-title">Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</h2>
                <p class="card-text">
Việc lựa chọn thời điểm tập Pilates phù hợp sẽ giúp bạn tối ưu hóa hiệu quả tập luyện và nhanh chóng đạt được mục tiêu đề ra. Trong bài viết này, chúng tôi sẽ phân tích những khung giờ tập luyện tốt nhất trong ngày dựa trên nhịp sinh học cơ thể.                </p>
                <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
              </div>
                    </div>

   

    <script>
        document.querySelectorAll('.search-container button').forEach(button => {
            button.addEventListener('click', function() {
                const searchInput = this.parentElement.querySelector('input');
                if (searchInput.value.trim() !== '') {
                    alert('Đang tìm kiếm: ' + searchInput.value);
                    searchInput.value = '';
                }
            });
        });
        document.querySelectorAll('.search-container input').forEach(input => {
            input.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    if (this.value.trim() !== '') {
                        alert('Đang tìm kiếm: ' + this.value);
                        this.value = '';
                    }
                }
            });
        });
    </script>
</body>
</html>
<?php include 'footer.php'?>