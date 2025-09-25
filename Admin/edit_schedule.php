<?php
include('../page/connect.php');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM schedules WHERE id=$id");
$schedule = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $day = $_POST['day_of_week'];
    $time = $_POST['time'];
    $class = $_POST['class_name'];
    $trainer = $_POST['trainer'];
    $level = $_POST['level'];

    $sql = "UPDATE schedules 
            SET day_of_week='$day', time='$time', class_name='$class', trainer='$trainer', level='$level'
            WHERE id=$id";
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
  <title>Sửa Lịch học</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="card shadow-lg p-4">
    <h2 class="mb-4 text-center">Sửa Lịch học</h2>
    <form method="post">
      <!-- Ngày -->
      <div class="mb-3">
        <label class="form-label">Ngày</label>
        <select name="day_of_week" class="form-select" required>
          <option value="Thứ 2" <?php if($schedule['day_of_week']=="Thứ 2") echo "selected"; ?>>Thứ 2</option>
          <option value="Thứ 3" <?php if($schedule['day_of_week']=="Thứ 3") echo "selected"; ?>>Thứ 3</option>
          <option value="Thứ 4" <?php if($schedule['day_of_week']=="Thứ 4") echo "selected"; ?>>Thứ 4</option>
          <option value="Thứ 5" <?php if($schedule['day_of_week']=="Thứ 5") echo "selected"; ?>>Thứ 5</option>
          <option value="Thứ 6" <?php if($schedule['day_of_week']=="Thứ 6") echo "selected"; ?>>Thứ 6</option>
          <option value="Thứ 7" <?php if($schedule['day_of_week']=="Thứ 7") echo "selected"; ?>>Thứ 7</option>
          <option value="Chủ Nhật" <?php if($schedule['day_of_week']=="Chủ Nhật") echo "selected"; ?>>Chủ Nhật</option>
        </select>
      </div>

      <!-- Giờ -->
      <div class="mb-3">
        <label class="form-label">Giờ</label>
        <input type="text" name="time" class="form-control" value="<?php echo $schedule['time']; ?>" required>
      </div>

      <!-- Lớp -->
      <div class="mb-3">
        <label class="form-label">Lớp</label>
        <select name="class_name" class="form-select" required>
          <option value="Pilates Reformer" <?php if($schedule['class_name']=="Pilates Reformer") echo "selected"; ?>>Pilates Reformer</option>
          <option value="Pilates Mat" <?php if($schedule['class_name']=="Pilates Mat") echo "selected"; ?>>Pilates Mat</option>
          <option value="Yoga Vinyasa" <?php if($schedule['class_name']=="Yoga Vinyasa") echo "selected"; ?>>Yoga Vinyasa</option>
        </select>
      </div>

      <!-- Huấn luyện viên -->
      <div class="mb-3">
        <label class="form-label">Huấn luyện viên</label>
        <input type="text" name="trainer" class="form-control" value="<?php echo $schedule['trainer']; ?>" required>
      </div>

      <!-- Trình độ -->
      <div class="mb-3">
        <label class="form-label">Trình độ</label>
        <select name="level" class="form-select" required>
          <option value="Beginner" <?php if($schedule['level']=="Beginner") echo "selected"; ?>>Beginner</option>
          <option value="Intermediate" <?php if($schedule['level']=="Intermediate") echo "selected"; ?>>Intermediate</option>
          <option value="Advanced" <?php if($schedule['level']=="Advanced") echo "selected"; ?>>Advanced</option>
        </select>
      </div>

      <div class="d-flex justify-content-between">
        <a href="manager_schedule.php" class="btn btn-secondary">Hủy</a>
        <button type="submit" class="btn btn-success">Cập nhật</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
