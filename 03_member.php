<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./utils/reset.css" />
  <link rel="stylesheet" href="./style/03_member.css" />
</head>

<body>
  <?php
  require('./00_header.php')
  ?>
  <div class="member-rebate-order">
    <div class="category">
      <h2 id="member-info">會員資料</h2>
      <h2 id="rebate">購物金</h2>
      <h2 id="order-tracking">訂單查詢</h2>
    </div>
    <div class="data-area"></div>

    <script src="./js/03_member.js"></script>
  </div>
  <?php
  require('./00_footer.php')
  ?>
</body>

</html>