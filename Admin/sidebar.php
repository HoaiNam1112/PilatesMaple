<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      display: flex;
    }
    /* Sidebar */
    .sidebar {
      width: 220px;
      background: #1dae66;
      color: white;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 20px;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      background: #14834d;
    } 
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Admin</h2>
    <a href="manager_schedule.php"> Quản lí lịch học</a>
    <a href="trainer.php"> Quản lý huấn luyện viên </a>
    <a href="contact.php"> Quản lí form liên hệ</a>
    <a href="newsletter.php"> Quản lí nhận thông tin</a>
    <a href="admin.php"> Quản lí phân quyền</a>
    <a href="../manager/logout.php"> Đăng xuất </a>
  </div>
</body>
</html>
<!--  -->