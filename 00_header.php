<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./utils/reset.css" />
  <link rel="stylesheet" href="./utils/hamburger.css" />
  <link rel="stylesheet" href="./style/00_header.css" />
</head>

<body>
  <!-- header start -->
  <header>
    <!-- logo -->
    <div class="header-row">
      <div class="header-logo">
        <img class="header-logo-mobile" src="./images/00_icon/icon_mobile.png" alt="" />
        <img class="header-logo-tab" src="./images/00_icon/icon_tab.png" alt="" />
      </div>
    </div>
    <!-- 手機版右側選單 -->
    <div class="header-right">
      <img class="header-icon" src="./images/00_icon/icon_search.png" alt="搜尋" />
      <a href="">
        <img class="header-icon" src="./images/00_icon/icon_member.png" alt="會員中心" />
      </a>
      <img class="header-icon cart-btn" src="./images/00_icon/icon_cart.png" alt="購物車" />
      <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
    <div class="cart-list">
      <button class="btn-close">X</button>
      <div class="list-container">
        <div class="products-list">
          <!-- 商品資訊 -->
        </div>
        <button class="btn-checkout">結帳</button>
      </div>
    </div>
    <div class="hamburger-list">
      <div>
        <button class="btn-special"><a href="">優惠專區</a></button>
        <button class="btn-special"><a href="">品牌聯名</a></button>
        <button class="btn-special"><a href="">特別企劃</a></button>
      </div>
      <div>
        <button class="btn-list"><a href="">全部商品</a></button>
        <button class="btn-list"><a href="">品牌故事</a></button>
        <button class="btn-list"><a href="">購物說明</a></button>
      </div>
      <div class="hamburger-list-bottom">
        <div class="t">
          <img src="./images/00_icon/icon_member.png" alt="">
          <a href="">會員中心</a>
        </div>
        <p>|</p>
        <div class="t"><img src="./images/00_icon/icon_cart.png" alt=""><a href="">購物車</a></div>
      </div>
    </div>
    <!-- 平板版navbar選單 -->
    <div class="header-row2">
      <a href="">最新商品</a>
      <p>|</p>
      <a href="">上身</a>
      <p>|</p>
      <a href="">下身</a>
      <p>|</p>
      <a href="">飾品</a>
      <p>|</p>
      <a href="">配件</a>
    </div>
  </header>
  <!-- header end -->
  <script src="./js/00_header.js"></script>
</body>

</html>