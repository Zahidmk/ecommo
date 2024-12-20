<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marka Souq </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include('fragments/css.php'); ?>
    </head>
    <body>



  <style>
    

    /* Categories Section Styles */
    .category-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      margin: 20px;
    }

    .category {
      text-align: center;
      background: #fff;
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease-in-out;
    }

    .category:hover {
      transform: scale(1.05);
    }

    .category i {
      font-size: 24px;
      margin-bottom: 5px;
      color: black;
    }

    /* Sticky Bottom Navbar */
    .mobile-bottom-nav {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: #fff;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      display: flex;
      justify-content: space-around;
      padding: 10px 0;
    }

    .mobile-bottom-nav .nav-item {
      text-align: center;
      flex-grow: 1;
    }

    .mobile-bottom-nav .nav-item a {
      color: #333;
      text-decoration: none;
      font-size: 14px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .mobile-bottom-nav .nav-item a.active {
      color: #007bff;
    }

    .mobile-bottom-nav .nav-item i {
      font-size: 20px;
    }
  </style>
</head>
<body>

<?php include('fragments/header.php'); ?>

<!-- Categories Section -->
<div class="container">
  
  <div class="category-grid">
    <div class="category">
      <i class="fas fa-mobile-alt"></i>
      <p>Mobile & Tablet</p>
    </div>
    <div class="category">
      <i class="fas fa-laptop"></i>
      <p>Computers & Gaming</p>
    </div>
    <div class="category">
      <i class="fas fa-tv"></i>
      <p>Electronics</p>
    </div>
    <div class="category">
      <i class="fas fa-couch"></i>
      <p>Home & Kitchen</p>
    </div>
    <div class="category">
      <i class="fas fa-tshirt"></i>
      <p>Fashion</p>
    </div>
    <div class="category">
      <i class="fas fa-heartbeat"></i>
      <p>Health & Beauty</p>
    </div>
    <div class="category">
      <i class="fas fa-car"></i>
      <p>Offroad & Automotives</p>
    </div>
    <div class="category">
      <i class="fas fa-futbol"></i>
      <p>Sports Goods</p>
    </div>
  </div>
</div>

<!-- Sticky Bottom Navbar -->
<div class="mobile-bottom-nav">
  <div class="nav-item">
    <a href="index.php">
      <i class="fas fa-home"></i>
      <span>Home</span>
    </a>
  </div>
  <div class="nav-item">
    <a href="categories.php" class="active">
      <i class="fas fa-th-large"></i>
      <span>Categories</span>
    </a>
  </div>
  <div class="nav-item">
    <a href="login.php">
      <i class="fas fa-user"></i>
      <span>Sign In</span>
    </a>
  </div>
  <div class="nav-item">
    <a href="cart.php">
      <i class="fas fa-shopping-cart"></i>
      <span>Cart</span>
    </a>
  </div>
</div>



        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

            <!-- back to top btn area end -->

 
        </main>

        <?php include('fragments/footer.php'); ?>

        <!-- JS here -->
        <?php include('fragments/js.php'); ?>
    </body>
</html>
