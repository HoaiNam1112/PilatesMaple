<?php 
   include('../page/connect.php');
   ?>

<?php
// Bắt đầu session để kiểm tra đăng nhập
session_start();
// Kiểm tra nếu chưa đăng nhập thì quay về trang login
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ Admin - Pilates Maple</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Thanh điều hướng -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Admin Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="manage_content.php">Quản lý nội dung</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_courses.php">Quản lý khóa học</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_schedule.php">Quản lý lịch học</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_trainers.php">Quản lý huấn luyện viên</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_forms.php">Quản lý form liên hệ & đăng ký</a></li>
                    <li class="nav-item"><a class="nav-link" href="manage_users.php">Phân quyền quản trị</a></li>
                </ul>
                <a class="btn btn-danger" href="logout.php">Đăng xuất</a>
            </div>
        </div>
    </nav>

    <!-- Nội dung chính -->
    <div class="container mt-4">
        <h2>Xin chào, Admin 👋</h2>
        <p>Chào mừng bạn đến với trang quản trị hệ thống Pilates Maple.</p>

        <div class="row">
            <!-- Card quản lý nội dung -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">📄 Quản lý nội dung</h5>
                        <p class="card-text">Thêm, sửa, xóa bài viết hoặc dịch vụ.</p>
                        <a href="manage_content.php" class="btn btn-primary">Truy cập</a>
                    </div>
                </div>
            </div>
            
            <!-- Card quản lý khóa học -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">🎓 Quản lý khóa học</h5>
                        <p class="card-text">Tạo, chỉnh sửa hoặc xóa các khóa học.</p>
                        <a href="manage_courses.php" class="btn btn-primary">Truy cập</a>
                    </div>
                </div>
            </div>

            <!-- Card quản lý lịch học -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">📅 Quản lý lịch học</h5>
                        <p class="card-text">Lập lịch học với lịch dạng Calendar + CRUD.</p>
                        <a href="manage_schedule.php" class="btn btn-primary">Truy cập</a>
                    </div>
                </div>
            </div>

            <!-- Card quản lý huấn luyện viên -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">👩‍🏫 Quản lý huấn luyện viên</h5>
                        <p class="card-text">Quản lý danh sách HLV, thêm/sửa/xóa.</p>
                        <a href="manage_trainers.php" class="btn btn-primary">Truy cập</a>
                    </div>
                </div>
            </div>

            <!-- Card quản lý form -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">📨 Quản lý form liên hệ & đăng ký</h5>
                        <p class="card-text">Xem danh sách form khách hàng gửi.</p>
                        <a href="manage_forms.php" class="btn btn-primary">Truy cập</a>
                    </div>
                </div>
            </div>

            <!-- Card phân quyền -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title">🔑 Phân quyền quản trị</h5>
                        <p class="card-text">Quản lý tài khoản admin và phân quyền.</p>
                        <a href="manage_users.php" class="btn btn-primary">Truy cập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
