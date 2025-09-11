<?php
include 'connect.php';

// Xử lý form đăng ký nhận thông tin
if (isset($_POST['action']) && $_POST['action'] === 'register') {
    $email = $_POST['email'];
    $name = $_POST['name'];

    $stmt = $conn->prepare("INSERT INTO newsletter_subscription (email, name) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $name);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
}
?>
<?php
// Xử lý form liên hệ
if (isset($_POST['action']) && $_POST['action'] === 'contact') {
    $fullname = $_POST['fullname'];
    $email = $_POST['contactEmail'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO contact_form (fullname, email, content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $content);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
}

$conn->close();
?>
