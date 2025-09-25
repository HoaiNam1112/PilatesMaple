<?php
include('../page/connect.php');

if (!isset($_GET['id'])) {
    header("Location: manage_courses.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM courses WHERE id=$id");
$course = mysqli_fetch_assoc($result);

if (!$course) {
    echo "Khóa học không tồn tại!";
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Sửa Khóa học</title>
  <link rel="stylesheet" href="../css/edit_course.css">
</head>
<body class="bg-light">
  <div class="container mt-4">
    <h2> Sửa Khóa học</h2>
    <form method="POST" action="process_update_course.php">
      <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
      <div class="mb-3">
        <label>Tên khóa học</label>
        <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($course['title']); ?>" required>
      </div>
      <div class="mb-3">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"><?php echo htmlspecialchars($course['description']); ?></textarea>
      </div>
      <div class="mb-3">
        <label>Giá</label>
        <input type="number" step="0.01" name="price" class="form-control" value="<?php echo $course['price']; ?>" required>
      </div>
      <button type="submit" class="btn btn-success">Lưu</button>
      <a href="../admin/manager_course.php" class="btn ">Hủy</a>
    </form>
  </div>
</body>
</html>
