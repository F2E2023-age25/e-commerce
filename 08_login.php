<?php
include('./utils/conn.php');
session_start();
// 檢查是否登入，若有登入重新導向，並依會員等級分流
if(isset($_SESSION["loginMember"]) && ($_SESSION["loginMember"] != "")) {
  // 如會員等級為memeber，導向會員頁面
  if($_SESSION["memberLevel"] == "member") {
    header("Location:03_member.php");
  } else {
    // 如會員等級不為memeber，導向管理頁面
    header("Location:09_admin.php");
  }
}

// 執行會員登入動作
// 如果收到表單傳來帳號及密碼的值
if(isset($_POST["username"]) && isset($_POST["password"])) {
  $query_RecLogin = "SELECT mb_id, mb_level, mb_password FROM member WHERE mb_account=?";
  $stmt = $db_link->prepare($query_RecLogin);
  $stmt->bind_param("s", $_POST["username"]);
  $stmt->execute();

  // 取出帳號密碼的值
  $stmt->bind_result($userid, $level, $password);
  $stmt->fetch();
  $stmt->close();

  // 比對密碼，若成功則呈現登入狀態
  if(password_verify($_POST["password"], $password)) {
    // 設定登入者的名稱及等級
    // 將會員權限變數$level儲存在$_SESSION["memberLevel"]中
    $_SESSION["loginMember"] = $userid;
    $_SESSION["memberLevel"] = $level;
    if($_SESSION["memberLevel"] == "member") {
      header("Location:03_member.php?id=$userid");
    } else {
      header("Location:09_admin.php");
    }
  } else {
    // 若登入失敗，則導回原頁，並帶URL參數?errMsg=1，原頁面接收到此參數後顯示相關訊息
    header("Location: index_.php?errMsg=1");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./utils/reset.css" />
  <link rel="stylesheet" href="./style/06_login.css" />
  <title>Login Page</title>
</head>

<body>
  <?php
  require('./00_header.php')
  ?>
  <div>
    <div class="login-container">
      <div class="login-or-new">
        <div class="sign-in pointer">Sign In</div>
        <div class="switch-container" id="newCustomerLink">
          <div class="new-customer pointer">New customer</div>
        </div>
      </div>
      <div class="login-register">
        <!-- 渲染登入或註冊頁面 -->
      </div>
    </div>

    <?php
    require('./00_footer.php')
    ?>
    <script src="./js/05_login.js"></script>
</body>

</html>