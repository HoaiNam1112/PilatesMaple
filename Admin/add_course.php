<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thêm Khóa học</title>
  <link rel="stylesheet" href="../css/add_course.css">
</head>
<body class="bg-light">
  <div class="container mt-4">
    <h2> Thêm Khóa học</h2>
    <form method="POST" action="process_add_course.php">
      <div class="mb-3">
        <label>Tên khóa học</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Mô tả</label>
        <textarea name="description" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <label>Giá</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Lưu</button>
      <a href="dashboard.php" class="btn " >Hủy</a>
    </form>
  </div>
</body>
</html>
<!--  -->