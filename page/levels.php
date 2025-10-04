<?php
require('header.php');
require "connect.php";
mysqli_set_charset($conn, 'UTF8');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trình độ các lớp tập</title>
  <link rel="stylesheet" href="../css/levels.css">
</head>
<body>
  <header class="header-levels">
    <h1>TRÌNH ĐỘ CÁC LỚP TẬP</h1>
    <p>Mỗi học viên tại <strong>MAPLE PILATES</strong> đều được các huấn luyện viên tư vấn chọn lớp tập phù hợp với thể trạng và mục tiêu.</p>
  </header>

  <main class="container-levels">
    <section class="level-card">
      <div class="level-text">
        <h2>Trình độ cho người mới bắt đầu (Beginner)</h2>
        <p>
          Các lớp tập này giúp học viên hiểu và vận dụng được các phương pháp Thở đúng trong Yoga, khám phá các tư thế bao gồm các tư thế đứng, ngồi, vặn xoắn, ngả sau, đảo ngược (chuẩn bị cho các tư thế đừng bằng vai và đứng bằng đầu) cũng như các tư thế cơ bản trong chuỗi Chào Mặt Trời (Surya Namaskar - Sun Salutation).
        </p>
      </div>
      <div class="level-img">
        <img src="../pic/lv1.jpg" alt="Beginner class">
      </div>
    </section>

    <section class="level-card reverse">
      <div class="level-text">
        <h2>Trình độ trung cấp (Intermediate)</h2>
        <p>
          Các lớp tập ở trình độ trung cấp là hoàn hảo đối với những hội viên đã hoàn thành các lớp tập ở cấp độ (I) một cách thoải mái và đã sẵn sàng cho một thử thách mới với những chuỗi tư thế toàn diện. Những tư thế đảo ngược như đứng bằng đầu, đứng bằng tay, thăng bằng trên tay, ngả sau, vặn xoắn và các tư thế sẽ được thực hành đều đặn trong lớp để tăng cường sức mạnh, sức bền và sự linh hoạt. Lớp ở trình độ này cho tới những trình độ cao hơn, giáo viên sẽ thường xuyên sử dụng tên gọi các tư thế bằng tiếng Anh hoặc tiếng Phạn.
        </p>
      </div>
      <div class="level-img">
        <img src="../pic/lv2.jpg" alt="Intermediate class">
      </div>
    </section>

    <section class="level-card">
      <div class="level-text">
        <h2>Trình độ nâng cao (Advanced)</h2>
        <p>
          Các lớp tập ở trình độ nâng cao tập trung vào các tư thế khó như thăng bằng trên tay, đảo ngược và các tư thế ngả sau sâu đan xen với những chuỗi tư thế đặc biệt, sáng tạo sẽ thực sự tạo ra thử thách và đưa việc luyện tập của bạn lên một tầm cao mới. Mặc dù bạn không cần thiết phải trở thành bậc thầy trong mọi tư thế, chúng tôi vẫn khuyến khích bạn cố gắng thực hành chúng trong lớp nâng cao này và cùng lúc đó, vẫn đảm bảo sự an toàn cho bản thân mình. Đây là các lớp được khuyến khích dành cho các giáo viên và những người luyện tập có kinh nghiệm.
        </p>
      </div>
      <div class="level-img">
        <img src="../pic/lv3.jpg" alt="Advanced class">
      </div>
    </section>
  </main>
</body>
</html>


<?php
require('footer.php');
?>