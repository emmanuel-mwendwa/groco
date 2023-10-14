<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Groco</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- custom css file link  -->
  <link rel="stylesheet" href="../css/style.css" />

</head>

<body>
  <!-- header section starts  -->

  <header class="header">
    <a href="#" class="logo">
      <i class="fas fa-shopping-basket"></i> Groco
    </a>

    <nav class="navbar">
      <a href="index.php">home</a>
      <a href="#features">features</a>
      <a href="#products">products</a>
      <a href="#categories">categories</a>
      <a href="#review">review</a>
    </nav>

    <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="search-btn"></div>
      <a href="cart.php"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>
    </div>

    <form action="" class="search-form">
      <input type="search" id="search-box" placeholder="search here..." />
      <label for="search-box" class="fas fa-search"></label>
    </form>

    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>

    <?php

    if (isset($_SESSION['cart'])) {
      $count = count($_SESSION['cart']);
      echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
    } else {
      echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
    }

    ?>

  </header>

  <!-- header section ends -->
  <script src="../js/script.js"></script>

</body>

</html>