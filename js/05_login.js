// 使用 querySelector 選取了相應的元素
const newCustomer = document.querySelector(".new-customer");
const signIn = document.querySelector(".sign-in");
const LoginRegister = document.querySelector(".login-register");

// 在F12看控制台有沒有選到節點
console.log(newCustomer);
console.log(signIn);
console.log(LoginRegister);

// 用變數方式設定要出現的內容
let signInHTML = `
<div class="login-container">
<div class="login-register">
        <form method="post" id="loginForm" action="">
          
          <div class="input-container">
            <!-- <label for="username"></label> -->
            <div class="input-line">
              <input
                type="text"
                id="username"
                name="username"
                required
                placeholder="會員帳號"
              />
            </div>
          </div>
      
          <div class="input-container">
            <!-- <label for="password"></label> -->
            <div class="input-line">
              <input
                type="password"
                id="password"
                name="password"
                required
                placeholder="密碼"
              />
            </div>
          </div>
          <button type="submit" onclick="login()">會員登入</button>
          
          <div class="other-methods">
            <div class="social-icon">
              <img src="./icon/black/logo_ci_fb.png" class="pointer" alt="點選以使用fb帳號登入" />
              <img src="./icon/black/logo_sq_line.png" class="pointer" alt="點選以使用line帳號登入"/>
            </div>
            <div>
              <p class="pointer">忘記密碼</p>
            </div>
          </div>
        </form>
        <p id="loginMessage"></p>
      </div>
      </div>
`;
LoginRegister.innerHTML = signInHTML;
let newCustomerHTML = `
  <div class="login-container">
<div class="login-register">
  <form id="registerForm">
  <div class="input-container">
    <!-- <label for="username"></label> -->
    <div class="input-line">
      <input
        type="text"
        id="username"
        name="username"
        required
        placeholder="會員帳號"
      />
    </div>
  </div>

  <div class="input-container">
    <!-- <label for="password"></label> -->
    <div class="input-line">
      <input
        type="password"
        id="password"
        name="password"
        required
        placeholder="密碼"
      />
    </div>
  </div>
  <div class="input-container">
    <!-- <label for="username"></label> -->
    <!-- type="password" 表示输入框中的文本將被隱藏 -->
    <div class="input-line">
      <input
        type="password"
        id="rePassword"
        name="rePassword"
        required
        placeholder="再次輸入密碼"
      />
    </div>
    <p id="registerMessage"></p>
  </div>
  <div>
    <form action="" class="form-agree">
    <input type="checkbox" id="agreeTerms" id="agreeTerms" required />
      <label for="agreeTerms">我已閱讀並同意會員約定條款說明</label>
    </form>
  </div>
  <button type="submit" onclick="register()">註冊</button>

  <div class="other-methods">
    <div class="social-icon">
      <img src="./icon/black/logo_ci_fb.png" class="pointer" alt="點選以使用fb帳號登入" />
      <img
        src="./icon/black/logo_sq_line.png" class="pointer"
        alt="點選以使用line帳號登入"
      />
    </div>
  </div>
</form>
<p id="registerMessage"></p>
</div>
</div>
</div>
`;

// 使用 innerHTML 將 HTML 內容設定到該元素中
// 將 HTML 內容設定到某個元素中
// (+=：將兩個不同的 HTML 內容追加到同一個元素中。loginHTML 和 signInHTML 的內容都將被追加到 LoginRegister 中。)

// 添加點擊事件監聽器
signIn.addEventListener("click", function () {
  // 在這裡添加頁面切換的邏輯，例如導航到 "New customer" 頁面的代碼
  LoginRegister.innerHTML = signInHTML;
});

newCustomer.addEventListener("click", function () {
  // 在這裡添加頁面切換的邏輯，例如導航到 "New customer" 頁面的代碼
  LoginRegister.innerHTML = newCustomerHTML;
});

// function login() {
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;
//   var loginMessage = document.getElementById("loginMessage");
//   console.log(username);

//   // 處理登入邏輯
//   if (username === "user" && password === "password") {
//     loginMessage.textContent = "Login successful!";
//     loginMessage.style.color = "#28a745";
//   } else {
//     loginMessage.textContent =
//       "Incorrect username or password. Please try again.";
//     loginMessage.style.color = "#dc3545";
//   }
// }

// document.addEventListener("DOMContentLoaded", function () {
//   // 獲取 "New customer" 文字的元素
//   var newCustomerLink = document.getElementById("newCustomerLink");

//   // 添加點擊事件監聽器
//   newCustomerLink.addEventListener("click", function () {
//     // 在這裡添加頁面切換的邏輯，例如導航到 "New customer" 頁面的代碼
//     alert("切換到 New customer 頁面");
//   });

//   var signInLink = document.getElementById("signInLink");

//   signInLink.addEventListener("click", function () {
//     window.location.href = "login.html";
//   });
// });

// // JavaScript 函數，名為 register，用於處理用戶註冊的邏輯。
// function register() {
//   // 獲取用戶輸入的用戶名和密碼、checkbox狀態
//   var username = document.getElementById("username").value;
//   var password = document.getElementById("password").value;
//   var rePassword = document.getElementById("rePassword").value;
//   var agreeTerms = document.getElementById("agreeTerms").checked;

//   // 獲取用於顯示註冊結果消息的 HTML 元素
//   var registerMessage = document.getElementById("registerMessage");

//  // 檢查是否同意條款
//  if (!agreeTerms) {
//   registerMessage.textContent = "我已閱讀並同意會員約定條款說明";
//   registerMessage.style.color = "#dc3545";
//   return; // 中止註冊流程
// }

//   // 如果用戶名和密碼都存在(非空)，則顯示註冊成功的消息，並將消息顏色設置為綠色
//   if (username && password && rePassword && password === rePassword) {
//     registerMessage.textContent = "Registration successful!";
//     registerMessage.style.color = "#28a745";
//   } else {
//     // 如果用戶名或密碼為空，或者密碼不匹配，則顯示提醒用戶填寫用戶名和密碼的消息，並將消息顏色設置為紅色
//     registerMessage.textContent =
//       "Please fill in both username and password.";
//     registerMessage.style.color = "#dc3545";
//   }
// }
