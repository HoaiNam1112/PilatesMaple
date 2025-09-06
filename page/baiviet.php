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
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .search-container {
            background: white;
            border-radius: 5px;
            padding: 10px;
            margin: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 15px;
            color: #2c3e50;
        }
        .article-list {
            list-style: none;
            padding: 0;
        }
        .article-list li {
            padding: 10px 0;
            border-bottom: 1px dashed #ddd;
        }
        .article-list li:last-child {
            border-bottom: none;
        }
        .article-card {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .article-category {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .article-title {
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
        }
    </style>
    
</head>
<body>
    <div class="header">
        <div class="container">
            <h1 class="text-center">BÀI VIẾT</h1>
            
            <div class="search-container d-flex justify-content-between align-items-center">
                <input type="text" class="flex-grow-1" placeholder="Search">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Sidebar với bài viết gần đây -->
            <div class="col-lg-4">
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

            <!-- Nội dung chính -->
            <div class="col-lg-8">
                <!-- Bài viết 1 -->
                <div class="article-card">
                    <div class="p-4">
                        <span class="article-category">Pilates</span>
                        <h2 class="article-title">Nên tập Pilates vào lúc nào để đạt hiệu quả cao nhất?</h2>
                        <p class="article-excerpt">Việc lựa chọn thời điểm tập Pilates phù hợp sẽ giúp bạn tối ưu hóa hiệu quả tập luyện và nhanh chóng đạt được mục tiêu đề ra. Trong bài viết này, chúng tôi sẽ phân tích những khung giờ tập luyện tốt nhất trong ngày dựa trên nhịp sinh học cơ thể.</p>
                        <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Bài viết 2 -->
                <div class="article-card">
                    <div class="p-4">
                        <span class="article-category">Pilates</span>
                        <h2 class="article-title">Vì sao dân văn phòng nên tập Pilates? [Chuyên gia giải đáp]</h2>
                        <p class="article-excerpt">Với đặc thù công việc phải ngồi nhiều giờ liền trước máy tính, dân văn phòng thường đối mặt với nhiều vấn đề sức khỏe như đau lưng, mỏi cổ, vai gáy và tư thế xấu. Pilates chính là giải pháp hoàn hảo để khắc phục những vấn đề này.</p>
                        <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Bài viết 3 -->
                <div class="article-card">
                    <div class="p-4">
                        <span class="article-category">Pilates</span>
                        <h2 class="article-title">Một buổi đào tạo HIV pilates diễn ra thế nào?</h2>
                        <p class="article-excerpt">Chương trình đào tạo HIV Pilates được thiết kế đặc biệt để huấn luyện viên có thể làm việc với những người sống chung với HIV. Bài viết mô tả chi tiết quy trình và nội dung của một buổi đào tạo điển hình.</p>
                        <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Bài viết 4 -->
                <div class="article-card">
                    <div class="p-4">
                        <span class="article-category">Pilates</span>
                        <h2 class="article-title">Mất bao lâu để trở thành huấn luyện viên Pilates?</h2>
                        <p class="article-excerpt">Hành trình trở thành huấn luyện viên Pilates chuyên nghiệp đòi hỏi sự cam kết về thời gian và công sức. Thời gian đào tạo có thể khác nhau tùy thuộc vào loại chứng chỉ, cường độ học và kinh nghiệm cá nhân.</p>
                        <a href="#" class="read-more">Đọc tiếp <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Xử lý tìm kiếm
        document.querySelectorAll('.search-container button').forEach(button => {
            button.addEventListener('click', function() {
                const searchInput = this.parentElement.querySelector('input');
                if (searchInput.value.trim() !== '') {
                    alert('Đang tìm kiếm: ' + searchInput.value);
                    searchInput.value = '';
                }
            });
        });

        // Cho phép tìm kiếm bằng phím Enter
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