<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../css/register.css" />
    <script src="/scrip.js"></script>
  </head>
  <body>

<?php
    include('../page/connect.php');
    $err = '';
if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_again'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_again = $_POST['password_again'];

  if ($password != $password_again) {
     $err = "Vui lòng nhập lại thông tin cho đúng!";
  } else {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      $err = "Tên đăng nhập đã tồn tại, vui lòng chọn tên khác.";
    } else {
      $sql_res = "INSERT INTO users (`username`, `password`, `role`) VALUES ('$username', '$password', 'user')";
      mysqli_query($conn, $sql_res);
      header('Location: login.php');
      exit();
    }
  }
}
?>

    <div class="register-container">
      <form class="register-form" action="register.php" method="POST">
        <h2>Tạo tài khoản</h2>
        <div class="input-group">
          <label for="username">Tên đăng nhập</label>
          <input type="text" name="username" id="username" required />
        </div>
        <div class="input-group">
          <label for="password">Mật khẩu</label>
          <input type="password" name="password" id="password" required />
        </div>
       <div class="input-group">
          <label for=" password">Nhập lại mật khẩu</label>
          <input type="password" name="password_again" id="password" required />       
       </div>
        <button type="submit">Đăng ký</button>
        <p class="message">
          Đã có tài khoản? <a href="../manager/login.php">Đăng nhập</a>
          <a href="../page/home.php">Trang chủ</a>
        </p>
         <?php if (!empty($err)) echo "<p style='color:red;'>$err</p>"; ?>
      </form>
    </div>
  </body>
</html>