<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng ký nhận thông tin & Liên hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<style>
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
      .btn-primary {
    background-color: #333;
    border-color:  #fff;
}

.btn-primary:hover {
    background-color: #333;
    border-color:  #fff;
}
      
</style>

<body class="bg-light">
    
        <h1 class="banner text-center mb-4">Kết Nối Với Chúng Tôi</h1>
        <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Form Đăng Ký -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h2 class="card-title h4 border-bottom pb-2">
                            <i class="fas fa-envelope me-2 "style="  color: #333;"></i>Đăng Ký Nhận Thông Tin
                        </h2>
                        <form method="post" id="registrationForm" class="mt-3">
                            <div class="mb-3">
                                <label for="regEmail" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="regEmail" name="email" placeholder="email@example.com">
                                <div class="text-danger small mt-1" id="regEmailError">Vui lòng nhập địa chỉ email hợp lệ</div>
                            </div>

                            <div class="mb-3">
                                <label for="regFullname" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="regFullname" name="fullname" placeholder="Nguyễn Văn A">
                                <div class="text-danger small mt-1" id="regNameError">Vui lòng nhập họ và tên</div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i> Đăng Ký Ngay
                                </button>
                            </div>
                            
                            <div class="alert alert-success mt-3" id="registrationSuccess">
                                <i class="fas fa-check-circle me-2"></i> Cảm ơn bạn đã đăng ký! Chúng tôi sẽ gửi thông tin mới nhất đến bạn.
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>

            <!-- Form Liên Hệ -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h2 class="card-title h4 border-bottom pb-2">
                            <i class="fas fa-phone-alt me-2" style="  color: #333;"></i>Liên Hệ Với Chúng Tôi
                        </h2>
                        <form id="contactForm" class="mt-3">
                            <div class="mb-3">
                                <label for="contactFullname" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="contactFullname" name="fullname" placeholder="Nguyễn Văn A">
                                <div class="text-danger small mt-1" id="contactNameError">Vui lòng nhập họ và tên</div>
                            </div>

                            <div class="mb-3">
                                <label for="contactEmail" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="email@example.com">
                                <div class="text-danger small mt-1" id="contactEmailError">Vui lòng nhập địa chỉ email hợp lệ</div>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Nội dung liên hệ <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="content" name="content" rows="4" placeholder="Xin vui lòng mô tả chi tiết nội dung bạn cần hỗ trợ..."></textarea>
                                <div class="text-danger small mt-1" id="contentError">Vui lòng nhập nội dung liên hệ</div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2" ></i> Gửi Liên Hệ
                                </button>
                            </div>
                            
                            <div class="alert alert-success mt-3" id="contactSuccess">
                                <i class="fas fa-check-circle me-2"></i> Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất có thể.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ẩn tất cả thông báo lỗi và thành công khi trang được tải
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.text-danger').forEach(function(el) {
                el.style.display = 'none';
            });
            
            document.querySelectorAll('.alert-success').forEach(function(el) {
                el.style.display = 'none';
            });
        });

        // Xử lý form đăng ký
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;
            
            // Validate email
            const email = document.getElementById('regEmail').value;
            const emailError = document.getElementById('regEmailError');
            if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                emailError.style.display = 'block';
                isValid = false;
            } else {
                emailError.style.display = 'none';
            }
            
            // Validate tên
            const name = document.getElementById('regFullname').value;
            const nameError = document.getElementById('regNameError');
            if (!name) {
                nameError.style.display = 'block';
                isValid = false;
            } else {
                nameError.style.display = 'none';
            }
            
            if (isValid) {
                document.getElementById('registrationSuccess').style.display = 'block';
                this.reset();
                
                // Ẩn thông báo sau 5 giây
                setTimeout(function() {
                    document.getElementById('registrationSuccess').style.display = 'none';
                }, 5000);
            }
        });
        
        // Xử lý form liên hệ
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;
            
            // Validate tên
            const name = document.getElementById('contactFullname').value;
            const nameError = document.getElementById('contactNameError');
            if (!name) {
                nameError.style.display = 'block';
                isValid = false;
            } else {
                nameError.style.display = 'none';
            }
            
            // Validate email
            const email = document.getElementById('contactEmail').value;
            const emailError = document.getElementById('contactEmailError');
            if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                emailError.style.display = 'block';
                isValid = false;
            } else {
                emailError.style.display = 'none';
            }
            
            // Validate nội dung
            const content = document.getElementById('content').value;
            const contentError = document.getElementById('contentError');
            if (!content) {
                contentError.style.display = 'block';
                isValid = false;
            } else {
                contentError.style.display = 'none';
            }
            
            if (isValid) {
                document.getElementById('contactSuccess').style.display = 'block';
                this.reset();
                
                // Ẩn thông báo sau 5 giây
                setTimeout(function() {
                    document.getElementById('contactSuccess').style.display = 'none';
                }, 5000);
            }
        });
    </script>
</body>
</html>
<?php include 'footer.php'?>