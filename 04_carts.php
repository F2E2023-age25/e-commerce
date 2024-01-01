<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SHINJIN</title>
  <link rel="stylesheet" href="./utils/reset.css">
  <link rel="stylesheet" href="./utils/bootstrap.min.css" />
  <link rel="stylesheet" href="./style/04_carts.css" />
</head>

<body>
  <?php
  require('./00_header.php')
  ?>
  <div class="cart-main">
    <!-- 頁籤 -->
    <div class="tabs d-flex">
      <div class="cart-option">購物車(<span>2</span>)</div>
      <div class="wishlist-option">Wishlist</div>
    </div>
    <div></div>
    <!-- 購物車內容 -->
    <div class="cart-content">
      <!-- 放進購物車的商品 -->
      <div class="cart-product">
        <div class="product-info d-flex">
          <img class="product-img" src="./images/03_cart/cart01.jpg" alt="" />
          <div class="product-details">
            <p class="product-name">開襟坑條針織上衣</p>
            <p class="product-number">MG1A001970903</p>
            <br />
            <span>顏色：</span><span class="product-color">米白</span><br />
            <span>尺寸：</span><span class="product-size">M</span><br />
            <span>單價：NT.</span><span class="product-price">590</span><br />
            <span>數量：</span>
            <select name="number" id="number">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <br />
            <br />
            <span>折扣價：NT.</span><span class="discount-price">531</span><br />
            <span>小計：　NT.</span><span class="final-price">531</span>
          </div>
        </div>
        <button><a class="next-time-btn" href="">下次買</a></button>
        <button class="delete-btn">X</button>
      </div>
      <div class="cart-product">
        <div class="product-info d-flex">
          <img class="product-img" src="./images/03_cart/cart02.jpg" alt="" />
          <div class="product-details">
            <p class="product-name">休閒感抽身直筒裙</p>
            <p class="product-number">MG1A001970903</p>
            <br />
            <span>顏色：</span><span class="product-color">米白</span><br />
            <span>尺寸：</span><span class="product-size">M</span><br />
            <span>單價：NT.</span><span class="product-price">890</span><br />
            <span>數量：</span>
            <select name="number" id="number">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <br />
            <br />
            <span>折扣價：NT.</span><span class="discount-price">890</span><br />
            <span>小計：　NT.</span><span class="final-price">890</span>
          </div>
        </div>
        <button><a class="next-time-btn" href="">下次買</a></button>
        <button class="delete-btn">X</button>
      </div>
    </div>
    <!-- 折價券 -->
    <div class="coupon">
      <span>折價券代碼：</span><input class="carts-input" type="text" />
      <br />
      <button class="coupon-btn"><a href="">Coupon</a></button>
      <p>單筆訂單限折抵一張折價券</p>
    </div>
    <!-- 付款方式、運送方式 -->
    <div class="payment-delivery">
      <!-- 付款方式 -->
      <div class="payment-method">
        <p class="method-title">付款方式</p>
        <form action="" name="form1">
          <div>
            <input type="checkbox" class="carts-input payment-input" id="credit-card" name="payment" onclick="return chk(this)" />
            <label for="credit-card">信用卡線上刷卡</label>
          </div>
          <div>
            <input type="checkbox" class="carts-input payment-input" id="cash-on-store-delivery" name="payment" onclick="return chk(this)" />
            <label for="cash-on-store-delivery">超商貨到付款</label>
          </div>
          <div>
            <input type="checkbox" class="carts-input payment-input" id="ATM" name="payment" onclick="return chk(this)" />
            <label for="ATM">ATM轉帳</label>
          </div>
          <div>
            <input type="checkbox" class="carts-input payment-input" id="line-pay" name="payment" onclick="return chk(this)" />
            <label for="line-pay">LINE Pay(可用LINE POINTS折抵)</label>
          </div>
          <div>
            <input type="checkbox" class="carts-input payment-input" id="cash-on-home-delivery" name="payment" onclick="return chk(this)" />
            <label for="cash-on-home-delivery">貨到付款(宅配)</label>
          </div>
        </form>
      </div>
      <!-- 運送方式 -->
      <div class="delivery-method">
        <p class="method-title">運送方式</p>
        <div>
          <input type="radio" class="carts-input delivery-input" id="7-eleven" name="delivery" />
          <label for="7-eleven">7-11超商取貨(滿$2000免運)</label>
        </div>
        <div>
          <input type="radio" class="carts-input delivery-input" id="family-mart" name="delivery" />
          <label for="family-mart">全家超商取貨(滿$2000免運)</label>
        </div>
        <div>
          <input type="radio" class="carts-input delivery-input" id="home-delivery" name="delivery" />
          <label for="home-delivery">宅配</label>
        </div>
      </div>
      <!-- 選擇門市 -->
      <div class="store-option">
        <span>尚未選擇門市</span><button class="choose-btn"><a href="">選擇門市</a></button>
      </div>
      <div class="reminder">
        <p>※ 提醒您 ：</p>
        <p>
          當包裹送達您指定之7-11門市時，隔日將會發送簡訊到貨通知。門市純取貨之訂單，收件人務必填寫與身分證上相符的姓名，並攜帶證件至門市領取包裹。
        </p>
      </div>
    </div>
    <!-- 結帳資訊 -->
    <div class="sum">
      <!-- 運費提醒 -->
      <div class="shipping-reminder">
        <p>Free Shipping</p>
        <p>商品金額只差NT $ <span>579</span>即可享NT $ 2000免運</p>
      </div>
      <!-- 帳單各項總計 -->
      <div class="payment-details">
        <div class="d-flex justify-content-between">
          <span>小計</span>
          <div><span>NT$ </span><span>1421</span></div>
        </div>
        <div class="d-flex justify-content-between">
          <span>加價購</span>
          <div><span>NT$ </span><span>0</span></div>
        </div>
        <div class="d-flex justify-content-between">
          <span>運費</span>
          <div><span>NT$ </span><span>80</span></div>
        </div>
        <div class="d-flex justify-content-between">
          <span>折價券</span>
          <div><span>- NT$ </span><span>0</span></div>
        </div>
        <div class="d-flex justify-content-between">
          <span>購物金</span>
          <div><span>- NT$ </span><span>0</span></div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <span>總金額</span>
          <div><span>NT$ </span><span>1501</span></div>
        </div>
      </div>
    </div>
    <div class="next">
      <button class="next-btn"><a href="">下一步</a></button>
    </div>
  </div>
  <?php
  require('./00_footer.php')
  ?>
  <script src="./js/04_carts.js"></script>
</body>

</html>