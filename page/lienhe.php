<?php
include 'connect.php';
$successMsg = "";
$errorMsg = "";
$contactSuccess = "";
$contactError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register_submit"])) {
    $email = trim($_POST["email"]);
    $fullname = trim($_POST["fullname"]);

    if (!empty($email) && !empty($fullname)) {
        $check = $conn->prepare("SELECT subscription_id FROM newsletter_subscription WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $errorMsg = "Email này đã được đăng ký!";
        } else {
            $stmt = $conn->prepare("INSERT INTO newsletter_subscription (email, name) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $fullname);

            if ($stmt->execute()) {
                $successMsg = "Cảm ơn bạn đã đăng ký!";
            } else {
                $errorMsg = "Lỗi khi lưu dữ liệu: " . $conn->error;
            }
            $stmt->close();
        }
        $check->close();
    } else {
        $errorMsg = "Vui lòng nhập đầy đủ thông tin.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["contact_form"])) {
    $name    = trim($_POST["fullname"]);
    $email   = trim($_POST["contactEmail"]);
    $message = trim($_POST["content"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $check = $conn->prepare("SELECT contact_id FROM contact_form WHERE email = ?");
        if (!$check) {
            die("Lỗi prepare: " . $conn->error);
        }
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $contactError = "Email này đã được sử dụng!";
        } else {
 
            $stmt = $conn->prepare("INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)");
            if (!$stmt) {
                die("Lỗi prepare: " . $conn->error);
            }

            $stmt->bind_param("sss", $name, $email, $message);

            if ($stmt->execute()) {
                $contactSuccess = "Cảm ơn bạn đã liên hệ!";
            } else {
                $contactError = "Lỗi khi lưu dữ liệu: " . $conn->error;
            }

            $stmt->close();
        }
        $check->close();
    } else {
        $contactError = "Vui lòng nhập đầy đủ thông tin.";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng ký nhận thông tin & Liên hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/baiviet.css" />
</head>
<body>
    <?php include 'header.php'?>
    <section class="hero d-flex align-items-center justify-content-center text-center">
        <div class="banner">
            <div class="banner-text">
                <h1>KẾT NỐI VỚI CHÚNG TÔI</h1>
            </div>
        </div>
    </section>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h2 class="card-title h4 border-bottom pb-2">
                            <i class="bi bi-envelope-fill"></i> Đăng Ký Nhận Thông Tin
                        </h2>
                        <?php if (!empty($successMsg)): ?>
                            <div class="alert alert-success mt-3"><?= $successMsg ?></div>
                        <?php endif; ?>

                        <?php if (!empty($errorMsg)): ?>
                            <div class="alert alert-danger mt-3"><?= $errorMsg ?></div>
                        <?php endif; ?>

                        <form method="post" class="mt-3">
                            <div class="mb-3">
                                <label for="regEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="regEmail" name="email" placeholder="email@gmail.com">
                            </div>

                            <div class="mb-3">
                                <label for="regFullname" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="regFullname" name="fullname" placeholder="Nguyễn Văn A">
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-dark" name="register_submit">
                                    <i class="bi bi-send"></i> Đăng Ký Ngay
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h2 class="card-title h4 border-bottom pb-2">
                            <i class="bi bi-envelope-fill"></i> Liên Hệ Với Chúng Tôi
                        </h2>
                        <?php if (!empty($contactSuccess)): ?>
                            <div class="alert alert-success mt-3"><?= $contactSuccess ?></div>
                        <?php endif; ?>

                        <?php if (!empty($contactError)): ?>
                            <div class="alert alert-danger mt-3"><?= $contactError ?></div>
                        <?php endif; ?>

                        <form method="post" class="mt-3">
                            <div class="mb-3">
                                <label for="contactFullname" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="contactFullname" name="fullname" placeholder="Nguyễn Văn A">
                            </div>

                            <div class="mb-3">
                                <label for="contactEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="email@gmail.com">
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Nội dung liên hệ </label>
                                <textarea class="form-control" id="content" name="content" rows="4" placeholder="Xin vui lòng mô tả chi tiết nội dung bạn cần hỗ trợ..."></textarea>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-dark" name="contact_form">
                                    <i class="bi bi-send"></i> Gửi Liên Hệ
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
<?php include 'footer.php'?>
<!-- 1 -->