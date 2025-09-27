<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <?php
    include('../page/connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
    $userName = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE username = '$userName' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION["username"] = $userName;
        $_SESSION["role"] = $user["role"];

        // Phân quyền và điều hướng
        if ($user['role'] == 'admin') {
            header('Location: ../admin/dashboard.php'); 
        } else {
            header('Location:../page/home.php'); 
        }
        exit();
    } else {
        $error = " Tên đăng nhập hoặc mật khẩu không chính xác.";
    }
}

    ?>
    <div class="login-container">
      <form class="login-form"  action="login.php" method="POST">
        <h2>Đăng nhập</h2>
        <div class="input-group">
          <label for="username">Tên đăng nhập</label>
          <input type="text" name="username" id="username" required />
        </div>
        <div class="input-group">
          <label for="password">Mật khẩu</label>
          <input type="password" name="password" id="password" required />
        </div>
        <button type="submit">Đăng nhập</button>
        <p class="message">
          Chưa có tài khoản? <a href="../manager/register.php">Đăng ký</a>
        </p>
        <a href="../page/home.php">Trang chủ</a> <br>

         <?php if (isset($error)) : ?>
      <p style="color:red; font-weight:bold; font-size:14px;"><?php echo $error; ?></p>
      <?php endif; ?>

      </form>
    </div>
  </body>
</html>
<!--  -->