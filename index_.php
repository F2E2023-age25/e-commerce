<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHINJIN</title>
  <link rel="stylesheet" href="./utils/reset.css">
  <link rel="stylesheet" href="./style/01_homepage.css">
</head>

<body>
  <?php
  require('./00_header.php')
  ?>
  <div class="home-banner">
    <video src="./images/01_homepage/homepage-banner.mp4" autoplay="true" type="video/mp4" muted="true"></video>
  </div>
  <div class="home-category">
    <div class="home-category-left">
      <img src="./images/01_homepage/bottoms.png" alt="">
      <img src="./images/01_homepage/fittings.png" alt="">
      <img src="./images/01_homepage/others.png" alt="">
    </div>
    <div class="home-category-right">
      <img src="./images/01_homepage/tops.png" alt="">
      <img src="./images/01_homepage/accessories.png" alt="">
      <img src="./images/01_homepage/new-products.png" alt="">
    </div>
  </div>
  <?php
  require('./00_footer.php')
  ?>
</body>

</html>