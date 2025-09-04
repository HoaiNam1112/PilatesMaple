<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng ký nhận thông tin & Liên hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="lienhe.css" />
    <style>
     
    </style>
  </head>
  <body>
   
      
        <h1>Kết Nối Với Chúng Tôi</h1>
     
     <div class="container">
      <!-- Sử dụng flexbox để tạo hai cột bằng nhau -->
      <div class="form-row-wrapper equal-height">
        <section class="form-section">
          <h2>
            <span class="form-icon"><i class="fas fa-envelope"></i></span> 
            Đăng Ký Nhận Thông Tin
          </h2>
          <div class="form-content">
            <form id="registrationForm">
              <div class="form-group">
                <label for="email" class="required">Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="email@example.com"
                />
                <div class="error" id="emailError">
                  Vui lòng nhập địa chỉ email hợp lệ
                </div>
              </div>

              <div class="form-group">
                <label for="fullname" class="required">Họ và tên</label>
                <input
                  type="text"
                  id="fullname"
                  name="fullname"
                  placeholder="Nguyễn Văn A"
                />
                <div class="error" id="nameError">Vui lòng nhập họ và tên</div>
              </div>
            
<div class="d-flex justify-content-center">
  <button type="submit">
                <i class="fas fa-paper-plane"></i> Đăng Ký Ngay
              </button>
</div>
              <div class="success-message" id="registrationSuccess">
                <i class="fas fa-check-circle"></i> Cảm ơn bạn đã đăng ký! Chúng
                tôi sẽ gửi thông tin mới nhất đến bạn.
              </div>
            </form>
          </div>
        </section>

        <section class="form-section">
          <h2>
            <span class="form-icon"><i class="fas fa-phone-alt"></i></span> 
            Liên Hệ Với Chúng Tôi
          </h2>
          <div class="form-content">
            <form id="contactForm">
              <div class="form-group">
                <label for="fullname" class="required">Họ và tên</label>
                <input
                  type="text"
                  id="fullname"
                  name="fullname"
                  placeholder="Nguyễn Văn A"
                />
                <div class="error" id="nameError">Vui lòng nhập họ và tên</div>
              </div>

              <div class="form-group">
                <label for="contactEmail" class="required">Email</label>
                <input
                  type="email"
                  id="contactEmail"
                  name="contactEmail"
                  placeholder="email@example.com"
                />
                <div class="error" id="contactEmailError">
                  Vui lòng nhập địa chỉ email hợp lệ
                </div>
              </div>

              <div class="form-group">
                <label for="content" class="required">Nội dung liên hệ</label>
                <textarea
                  id="content"
                  name="content"
                  placeholder="Xin vui lòng mô tả chi tiết nội dung bạn cần hỗ trợ..."
                ></textarea>
                <div class="error" id="contentError">
                  Vui lòng nhập nội dung liên hệ
                </div>
              </div>

              
<div class="d-flex justify-content-center">
  <button type="submit">
                <i class="fas fa-paper-plane"></i> Gửi Liên Hệ
              </button>
</div>
              <div class="success-message" id="contactSuccess">
                <i class="fas fa-check-circle"></i> Cảm ơn bạn đã liên hệ! Chúng
                tôi sẽ phản hồi sớm nhất có thể.
              </div>
            </form>
          </div>
        </section>

   
  </body>
</html>