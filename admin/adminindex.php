<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <a href="#home">home</a>
      <a href="viewUsers.php">View Users</a>
      <a href="addProducts.php">Add Products</a>
      <a href="../php/index.php">Customer</a>


    </nav>

    <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="search-btn"></div>
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
    </div>

    <form action="" class="search-form">
      <input type="search" id="search-box" placeholder="search here..." />
      <label for="search-box" class="fas fa-search"></label>
    </form>


    <?php

    if (isset($_SESSION["adminUsername"])) {

      echo "<h2>Hi! " . $_SESSION['adminUsername'] . "</h2>";
      $_SESSION['profileId'] = "" . $_SESSION['adminUsername'] . "";
      echo "<h2><a href='adminprofile.php'>Profile Page</a></h2>";
      echo "<h3><a href='../includes/logout.inc.php'>Log out</a></h3>";
    } else {
      echo "<h2><a href='login.php'>Log In</a></h2>";
      echo "<h2>Don't Have An Account<a href='signup.php'>  Sign Up</a></h2>";
    }

    ?>

  </header>

  <!-- header section ends -->

  <!-- home section starts  -->


  <section class="home" id="home">
    <div class="content">
      <h3>fresh and <span>organic</span> products for your</h3>
      <p>
        Providing 100% authentic products with the best prices and offering the convenience of shopping form anywhere you are.
      </p>
      <a href="#categories" class="btn">shop now</a>
    </div>
  </section>

  <!-- home section ends -->

  <!-- features section starts  -->

  <section class="features" id="features">
    <h1 class="heading">our <span>features</span></h1>

    <div class="box-container">
      <div class="box">
        <img src="../image/feature-img-1.png" alt="" />
        <h3>fresh and organic</h3>
        <p>
          Straight from the farm to you. Naturally farmed produce from the friendly farmer next door.
        </p>
        <a href="#" class="btn">read more</a>
      </div>

      <div class="box">
        <img src="../image/feature-img-2.png" alt="" />
        <h3>free delivery</h3>
        <p>
          Fast, free and secure. Straight to your doorstep.
        </p>
        <a href="#" class="btn">read more</a>
      </div>

      <div class="box">
        <img src="../image/feature-img-3.png" alt="" />
        <h3>easy payments</h3>
        <p>
          Integrating M-Pesa mobile. With the new SSL ans TLS protocols making payments fast and secure.
        </p>
        <a href="#" class="btn">read more</a>
      </div>
    </div>
  </section>

  <!-- features section ends -->

  <!-- products section starts  -->

  <section class="products" id="products">
    <h1 class="heading">our <span>products</span></h1>

    <div class="swiper product-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <img src="../image/product-1.png" alt="" />
          <h3>fresh orange</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/product-2.png" alt="" />
          <h3>fresh onion</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/product-3.png" alt="" />
          <h3>fresh meat</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/product-4.png" alt="" />
          <h3>fresh cabbage</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper product-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <img src="../image/product-5.png" alt="" />
          <h3>fresh potato</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/product-6.png" alt="" />
          <h3>fresh avocado</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/product-7.png" alt="" />
          <h3>fresh carrot</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/product-8.png" alt="" />
          <h3>green lemon</h3>
          <div class="price">Ksh.49/- - 109/-</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- products section ends -->

  <!-- categories section starts  -->

  <section class="categories" id="categories">
    <h1 class="heading">product <span>categories</span></h1>

    <div class="box-container">
      <div class="box">
        <img src="../image/cat-1.png" alt="" />
        <h3>vegetables</h3>
        <p>upto 45% off</p>
        <a href="products.php" class="btn">shop now</a>
      </div>

      <div class="box">
        <img src="../image/cat-2.png" alt="" />
        <h3>fresh fruits</h3>
        <p>upto 45% off</p>
        <a href="products.php" class="btn">shop now</a>
      </div>

      <div class="box">
        <img src="../image/cat-3.png" alt="" />
        <h3>dairy products</h3>
        <p>upto 45% off</p>
        <a href="products.php" class="btn">shop now</a>
      </div>

      <div class="box">
        <img src="../image/cat-4.png" alt="" />
        <h3>fresh meat</h3>
        <p>upto 45% off</p>
        <a href="products.php" class="btn">shop now</a>
      </div>
    </div>
  </section>

  <!-- categories section ends -->

  <!-- review section starts  -->

  <section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>

    <div class="swiper review-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <img src="../image/pic-1.png" alt="" />
          <p>
            fast delivery
            The discount and convenience
          </p>
          <h3>john deo</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/pic-2.png" alt="" />
          <p>
            Its one of the best places to shop, delivery is on time and the best quality and quantity. Thanks.
          </p>
          <h3>john deo</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/pic-3.png" alt="" />
          <p>
            i like it
            Easy payment and fast delivery
          </p>
          <h3>john deo</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="swiper-slide box">
          <img src="../image/pic-4.png" alt="" />
          <p>
            satisfied
          </p>
          <h3>john deo</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- review section ends -->

  <!-- footer section starts  -->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>grocery store <i class="fas fa-shopping-basket"></i></h3>
        <p>
          Catering for your daily needs of fresh vegetables and groceries.
        </p>
        <div class="share">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin"></a>
        </div>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#" class="links">
          <i class="fas fa-phone"></i> +254-745-657890
        </a>
        <a href="#" class="links">
          <i class="fas fa-phone"></i> +254-742-586034
        </a>
        <a href="#" class="links">
          <i class="fas fa-envelope"></i> random12@gmail.com
        </a>
        <a href="#" class="links">
          <i class="fas fa-map-marker-alt"></i> Kimathi, Nyeri-Kenya
        </a>
        
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="#" class="links">
          <i class="fas fa-arrow-right"></i> home
        </a>
        <a href="#" class="links">
          <i class="fas fa-arrow-right"></i> features
        </a>
        <a href="#" class="links">
          <i class="fas fa-arrow-right"></i> products
        </a>
        <a href="#" class="links">
          <i class="fas fa-arrow-right"></i> categories
        </a>
        <a href="#" class="links">
          <i class="fas fa-arrow-right"></i> review
        </a>
      </div>

      <div class="box">
        <h3>newsletter</h3>
        <p>subscribe for latest updates</p>
        <input type="email" placeholder="your email" class="email" />
        <input type="submit" value="subscribe" class="btn" />
        <img src="../image/payment.png" class="payment-img" alt="" />
      </div>
    </div>
  </section>

  <!-- footer section ends -->

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="../js/script.js"></script>
</body>

</html>