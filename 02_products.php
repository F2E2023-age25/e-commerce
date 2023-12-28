<?php
include('./utils/conn.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./utils/bootstrap.min.css" />
  <link rel="stylesheet" href="./style/02_products.css" />
</head>

<body>
  <?php
  require('./00_header.php')
  ?>
  <div class="products-main">
    <div class="products-search d-flex justify-content-end">
      <!-- 清單列表模式 -->
      <div class="list-mode d-flex">
        <div>img1</div>
        <div>img2</div>
        <!-- <img src="" alt=""> -->
        <!-- <img src="" alt=""> -->
      </div>
      <!-- 排序、進階功能 -->
      <div class="search-function d-flex">
        <div>排序</div>
        <div>進階選項</div>
      </div>
    </div>
    <!-- 商品列表 -->
    <div class="products-content d-flex flex-wrap">
      <div class="product-list">
        <div class="center">
          <ul>
            <li><a href="">上身</a></li>
            <li><a href="">　　　秋季針織</a></li>
            <li><a href="">　　　各式襯衫</a></li>
            <li><a href="">　　　好多外套</a></li>
            <li><a href="">　　　冬季長袖</a></li>
            <li><a href="">　　　都是套裝</a></li>
            <li><a href="">　　　時尚連身</a></li>
            <li><a href="">　　　仙女洋裝</a></li>
            <li><a href="">　　　夏季短袖</a></li>
            <li><a href="">　　　涼感背心</a></li>
            <li><a href="">　　　舒適內衣</a></li>
          </ul>
          <ul>
            <li><a href="">下身</a></li>
            <li><a href="">　　　修身長褲</a></li>
            <li><a href="">　　　辣妹短褲</a></li>
            <li><a href="">　　　優雅裙類</a></li>
            <li><a href="">　　　舒適內褲</a></li>
          </ul>
          <ul>
            <li><a href="">飾品</a></li>
            <li><a href="">　　　耳飾耳飾</a></li>
            <li><a href="">　　　戒指戒指</a></li>
            <li><a href="">　　　項鍊項鍊</a></li>
            <li><a href="">　　　髮飾髮飾</a></li>
          </ul>
          <ul>
            <li><a href="">配件</a></li>
            <li><a href="">　　　包包包包</a></li>
            <li><a href="">　　　帽子帽子</a></li>
            <li><a href="">　　　眼鏡眼鏡</a></li>
            <li><a href="">　　　圍巾圍巾</a></li>
            <li><a href="">　　　皮帶皮帶</a></li>
            <li><a href="">　　　襪子襪子</a></li>
            <li><a href="">　　　鞋子鞋子</a></li>
          </ul>
        </div>
      </div>
      <div class="what01">
        <div class="what02 d-flex flex-wrap">
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
          <div class="product">
            <img src="./images/02_products/product01.jpg" alt="" />
            <div class="d-flex justify-content-between">
              <div class="product-text">
                <a href="" class="item-name">清霧紗感透肌小尖領襯衫</a>
                <p class="price">NT.590</p>
              </div>
              <div class="favorite">
                <img src="./icon_collect.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Paginator -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </div>
  <?php
  require('./00_footer.php')
  ?>
</body>

</html>