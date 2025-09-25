<?php
include('../page/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $day = $_POST['day_of_week'];
    $time = $_POST['time'];
    $class = $_POST['class_name'];
    $trainer = $_POST['trainer'];
    $level = $_POST['level'];

    $sql = "INSERT INTO schedules (day_of_week, time, class_name, trainer, level) 
            VALUES ('$day', '$time', '$class', '$trainer', '$level')";
    if (mysqli_query($conn, $sql)) {
        header("Location: manager_schedule.php");
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thêm Lịch học</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <h2 class="mb-4 text-center">Thêm Lịch học</h2>
    <form method="post">
      <!-- Ngày -->
      <div class="mb-3">
        <label class="form-label">Ngày</label>
        <select name="day_of_week" class="form-select" required>
          <option value="Thứ 2">Thứ 2</option>
          <option value="Thứ 3">Thứ 3</option>
          <option value="Thứ 4">Thứ 4</option>
          <option value="Thứ 5">Thứ 5</option>
          <option value="Thứ 6">Thứ 6</option>
          <option value="Thứ 7">Thứ 7</option>
          <option value="Chủ Nhật">Chủ Nhật</option>
        </select>
      </div>

      <!-- Giờ -->
      <div class="mb-3">
        <label class="form-label">Giờ</label>
        <input type="text" name="time" class="form-control" placeholder="07:00 - 08:00" required>
      </div>

      <!-- Lớp -->
      <div class="mb-3">
        <label class="form-label">Lớp</label>
        <select name="class_name" class="form-select" required>
          <option value="Pilates Reformer">Pilates Reformer</option>
          <option value="Pilates Mat">Pilates Mat</option>
          <option value="Yoga Vinyasa">Yoga Vinyasa</option>
        </select>
      </div>

      <!-- Huấn luyện viên -->
      <div class="mb-3">
        <label class="form-label">Huấn luyện viên</label>
        <input type="text" name="trainer" class="form-control" required>
      </div>

      <!-- Trình độ -->
      <div class="mb-3">
        <label class="form-label">Trình độ</label>
        <select name="level" class="form-select" required>
          <option value="Beginner">Beginner</option>
          <option value="Intermediate">Intermediate</option>
          <option value="Advanced">Advanced</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <a href="manager_schedule.php" class="btn btn-secondary">Hủy</a>
        <button type="submit" class="btn btn-primary">Lưu</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<!--  -->