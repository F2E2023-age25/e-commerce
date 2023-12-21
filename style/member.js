// 在網頁載入完成時顯示 memberInfo 的內容
document.addEventListener("DOMContentLoaded", function () {
  memberInfo.click(); // 模擬點擊 memberInfo 元素
});

// 使用 querySelector 選取了相應的元素
const memberInfo = document.querySelector("#member-info");
const rebate = document.querySelector("#rebate");
const orderTracking = document.querySelector("#order-tracking");
const dataArea = document.querySelector(".data-area");

// 在F12看控制台有沒有選到節點
console.log(memberInfo);
console.log(rebate);
console.log(orderTracking);
console.log(dataArea);

// 用變數方式設定要出現的內容
let memberInfoHTML = `<div class="member-section">
<!-- 會員資料start -->
<div class="info">
  <h2 class="active">會員資料</h2>
  <form method="post" action="#">
    <!-- 表單數據將提交到當前頁面，不會導致頁面的刷新，而是觸發 JavaScript 函數或使用 AJAX 技術進行處理。 -->
    <label for="username">會員姓名</label>
    <!-- for="username" 屬性表示這個 <label> 與表單中 id="username" 的元素相關聯。 -->

    <input
      type="text"
      id="username"
      name="username"
      placeholder="Shin Jin"
      required
    />
    <!-- type="text" 表示這是一個文本輸入框  -->
    <!-- id="username"是在頁面中唯一標識元素，方便通過JavaScript或CSS進行操作。 -->
    <!-- name="username"是用於提交表單時該字段的名稱，這個名稱將與輸入框中用戶輸入的實際數據一起被發送到伺服器，伺服器可以通過這個名稱來識別和處理用戶名稱數據。 -->
    <!-- placeholder屬性被用來提供輸入框的引導文字 -->

    <label for="account">會員帳號</label>
    <input
      type="text"
      id="account"
      name="account"
      placeholder="shinjin@gmail.com"
      required
    />

    <label for="birthday">生日(填寫後即無法自行修改)</label>
    <input type="date" name="birthday" id="birthday" required />

    <p>運送地址</p>
    <div class="selects">
      <div class="select_city">
        <select id="select_city">
          <option value="default">請選擇縣市</option>
          <option value="Yilan">宜蘭縣</option>
          <option value="Keelung">基隆市</option>
          <option value="Taipei">臺北市</option>
          <option value="New_Taipei">新北市</option>
          <option value="Taoyuan">桃園市</option>
          <option value="Hsinchu_County">新竹縣</option>
          <option value="Hsinchu_City">新竹市</option>
          <option value="Miaoli">苗栗縣</option>
          <option value="Changhua">彰化縣</option>
          <option value="Taichung">臺中市</option>
          <option value="Nantou">南投縣</option>
          <option value="Yunlin">雲林縣</option>
          <option value="Chiayi_County">嘉義縣</option>
          <option value="Chiayi_City">嘉義市</option>
          <option value="Tainan">臺南市</option>
          <option value="Kaohsiung">高雄市</option>
          <option value="Pingtung">屏東縣</option>
          <option value="Taitung">臺東縣</option>
          <option value="Hualien">花蓮縣</option>
          <option value="Penghu">澎湖縣</option>
          <option value="Kinmen">金門縣</option>
          <option value="Lianjiang">連江縣</option>
        </select>
      </div>

      <div class="select_area">
        <select id="select_area">
          <option>請選擇區域</option>
          <!-- <option>松山區</option>
            <option>信義區</option>
            <option>大安區</option>
            <option>中山區</option>
            <option>中正區</option>
            <option>大同區</option>
            <option>萬華區</option>
            <option>文山區</option>
            <option>南港區</option>
            <option>內湖區</option>
            <option>士林區</option>
            <option>北投區</option> -->
        </select>
      </div>
    </div>

    <label for="address"></label>
    <input
      type="text"
      id="address"
      name="address"
      placeholder="請輸入地址"
      required
    />

    <button class="button">確定修改</button>
  </form>
</div>
<!-- 會員資料end -->
<div>
  <div class="hierarchy">
    <h2 class="active">會員級別</h2>
    <h3>您為 一般會員</h3>
    <h4>
      2023/12/31前單筆消費滿15,000元，或累積消費滿20,000元，將升等為VIP會員，即可享有9折優惠折扣唷！
    </h4>
  </div>

  <!-- 修改密碼start -->
  <div class="revise">
    <h2 class="active">修改密碼</h2>
    <form method="post" action="#">
      <!-- 表單數據將提交到當前頁面，不會導致頁面的刷新，而是觸發 JavaScript 函數或使用 AJAX 技術進行處理。 -->
      <label for="old-password">請輸入舊密碼</label>
      <!-- for="old-password" 屬性表示這個 <label> 與表單中 id="old-password" 的元素相關聯。 -->

      <input
        type="text"
        id="old-password"
        name="old-password"
        placeholder=""
        required
      />
      <!-- type="text" 表示這是一個文本輸入框  -->
      <!-- id="old-password"是在頁面中唯一標識元素，方便通過JavaScript或CSS進行操作。 -->
      <!-- name="old-password"是用於提交表單時該字段的名稱，這個名稱將與輸入框中用戶輸入的實際數據一起被發送到伺服器，伺服器可以通過這個名稱來識別和處理用戶名稱數據。 -->
      <!-- placeholder屬性被用來提供輸入框的引導文字 -->

      <label for="new-password">請輸入新密碼</label>
      <input
        type="text"
        id="new-password"
        name="new-password"
        placeholder="請設定8位以上英數字"
        required
      />

      <label for="again-password">請再次輸入新密碼</label>
      <input
        type="text"
        id="again-password"
        name="again-password"
        placeholder="請再次輸入新密碼"
        required
      />
      <button class="button">確定修改</button>
    </form>
  </div>
  <!-- 修改密碼end -->
</div>
</div> `;

let rebateHTML = ` <div class="b">
<div class="rebate-detail">
  <div class="rebate-item">
  <div class="rebate-item-sub">
    <h4>購物金： 0元</h4>
    </div>
    <button class="account-detail">帳戶明細</button>
  </div>
  <div class="rebate-item">
  <div class="rebate-item-sub">
      <h4>折價券： 0張</h4>
      </div>
      <button class="account-detail">Coupon明細</button>
  </div>
  <div class="rebate-item">
  <div class="rebate-item-sub">
      <h4>LINE會員帳號</h4>
      </div>
      <button class="account-detail">立即綁定</button>
  </div>
  <button class="button">回到會員資料</button>
</div>
</div>`;

let orderTrackingHTML = ` <div class="c">
<div class="order">
  <h2 class="active">待出貨</h2>
  <div class="add-title">
    <p class="overall-item">訂購日期</p>
    <p class="overall-item2">訂單編號</p>
    <p class="overall-item">處理進度</p>
    <p class="overall-item">訂單金額</p>
    <p class="overall-item">客服紀錄</p>
    <p class="overall-item">取消/退貨</p>
  </div>

  <div class="every-order">
    <div class="overall">
      <div class="overall-item">
        <h4 class="reduce">訂單日期：</h4>
        <h4>2023/12/11</h4>
      </div>
      <div class="overall-item2">
        <h4 class="reduce">訂單編號：</h4>
        <h4>2023121100001</h4>
      </div>

      <!-- 在螢幕寬度大於576px時顯示這個 -->
      <div class="distinguish-screen-l">
        <div
          class="overall-item"
          style="align-items: center; display: none"
          id="largeScreen"
        >
          <!-- <h4 style="white-space: nowrap;">撿貨中</h4> -->
          <button class="account-detail reduce">取消訂單</button>
        </div>
      </div>

      <div class="distinguish-screen-s">
        <!-- 在螢幕寬度小於等於576px時顯示這個 -->
        <div id="smallScreen">
          <div class="rebate-item">
            <h4 style="white-space: nowrap">訂單狀態：撿貨中</h4>
            <button class="account-detail reduce">取消訂單</button>
          </div>
        </div>
      </div>

      <div class="add overall-sub">
        <div class="add-item" style="white-space: nowrap">
          <h4 style="white-space: nowrap">撿貨中</h4>
        </div>
        <div>
          <h4 style="margin-left: -7rem;">NT.1,501</h4>
        </div>
        <div class="add-item" style="white-space: nowrap">
          <h4 style="margin-left: -12rem;">詢問/紀錄</h4>
        </div>
      </div>
      <div class="add-item">
        <button class="add-button">取消訂單</button>
      </div>
    </div>
    <hr />

    <div class="buy-title">
      <p class="overall-item2">商品資訊</p>
      <p class="overall-item">顏色</p>
      <p class="overall-item">尺寸</p>
      <p class="overall-item">數量</p>
    </div>

    <div class="buy-title2">
      <p class="overall-item2" style="white-space: nowrap">
        開襟坑條針織上衣
      </p>
      <p class="overall-item">米白</p>
      <p class="overall-item">M</p>
      <p class="overall-item">1</p>
      <div class="overall-item">
        <button class="add-button">再次購買</button>
      </div>
    </div>

    <div class="buy-title2">
      <p class="overall-item2" style="white-space: nowrap">
        立體褶線直筒西裝裙
      </p>
      <p class="overall-item">米杏</p>
      <p class="overall-item">M</p>
      <p class="overall-item">1</p>
      <div class="overall-item">
        <button class="add-button">再次購買</button>
      </div>
    </div>

    <hr />
    <button class="account-detail add">查看完整訂單</button>
    <div class="rebate-item">
      <h3 class="reduce">訂單金額：1,501 元</h3>
      <button class="account-detail reduce">查看完整訂單</button>
    </div>
  </div>
</div>
</div>`;
// 在螢幕寬度大於576px時隱藏小螢幕的部分
// if (window.innerWidth > 576) {
//   document.getElementById("smallScreen").style.display = "none";
//   document.getElementById("largeScreen").style.display = "flex";
// } else {
//   document.getElementById("smallScreen").style.display = "flex";
//   document.getElementById("largeScreen").style.display = "none";
// }

// 監聽視窗大小變化事件，動態調整顯示內容
// window.addEventListener("resize", function () {
//   if (window.innerWidth > 576) {
//     document.getElementById("smallScreen").style.display = "none";
//     document.getElementById("largeScreen").style.display = "flex";
//   } else {
//     document.getElementById("smallScreen").style.display = "flex";
//     document.getElementById("largeScreen").style.display = "none";
//   }
// });

// 添加點擊事件監聽器
memberInfo.addEventListener("click", function () {
  resetBorders(); // 重置所有元素的邊框樣式
  memberInfo.classList.add("active"); //   將一個或多個類別名稱加到元素的class屬性中➝套用到css中的樣式
  dataArea.innerHTML = memberInfoHTML;
});
rebate.addEventListener("click", function () {
  resetBorders();
  rebate.classList.add("active");
  dataArea.innerHTML = rebateHTML;
});
orderTracking.addEventListener("click", function () {
  resetBorders();
  orderTracking.classList.add("active");
  dataArea.innerHTML = orderTrackingHTML;
});

// 重置所有邊框樣式
function resetBorders() {
  memberInfo.classList.remove("active"); //   從元素的class屬性中移除一個或多個類別名稱
  rebate.classList.remove("active");
  orderTracking.classList.remove("active");
}

// 地址start

document.addEventListener("DOMContentLoaded", function () {
  // 當頁面載入完成後執行

  // 獲取 select_city 和 select_area 的 DOM 元素
  var selectcity = document.getElementById("select_city");
  var selectarea = document.getElementById("select_area");

  // 監聽 select_city 的變化
  selectcity.addEventListener("change", function () {
    selectarea.innerHTML = "";
    // 清空 select_area 的所有選項

    // 獲取選擇的縣市值
    var selectedCity = selectcity.value;

    // 根據選擇的縣市值動態生成對應的行政區選項
    switch (selectedCity) {
      case "Taipei":
        addOption(selectarea, "選擇區域");
        addOption(selectarea, "松山區");
        addOption(selectarea, "信義區");
        addOption(selectarea, "大安區");
        addOption(selectarea, "中山區");
        addOption(selectarea, "中正區");
        addOption(selectarea, "大同區");
        addOption(selectarea, "萬華區");
        addOption(selectarea, "文山區");
        addOption(selectarea, "南港區");
        addOption(selectarea, "內湖區");
        addOption(selectarea, "士林區");
        addOption(selectarea, "北投區");
        break;

      case "Yilan":
        addOption(selectarea, "選擇區域");
        addOption(selectarea, "頭城鎮");
        addOption(selectarea, "礁溪鄉");
        addOption(selectarea, "員山鄉");
        addOption(selectarea, "宜蘭市");
        addOption(selectarea, "壯圍鄉");
        addOption(selectarea, "大同鄉");
        addOption(selectarea, "三星鄉");
        addOption(selectarea, "羅東鎮");
        addOption(selectarea, "五結鄉");
        addOption(selectarea, "冬山鄉");
        addOption(selectarea, "蘇澳鎮");
        addOption(selectarea, "南澳鄉");
        break;

      // 其他縣市的 case...
      default:
        addOption(selectarea, "請選擇區域");
        break;
    }
  });

  // 添加選項的輔助函數
  function addOption(select, optionText) {
    var option = document.createElement("option");
    option.text = optionText;
    select.add(option);
  }
});

// 地址end
