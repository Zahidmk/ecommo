<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marka Souq </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include('fragments/css.php'); ?>
        <style>

          

            .banner__content {
  position: absolute;
  top: 20px;
  left: 20px;
  color: white;
  
  padding: 15px;
  border-radius: 8px;
}

.shop-now-btn {
  display: inline-block;
  margin-top: 10px;
  padding: 8px 15px;
  background-color: black;
  color: #fff;
  border-radius: 5px;
  text-decoration: none;
  transition: transparent 0.3s;
}

.shop-now-btn:hover {
  background-color: transparent;
  border: 1px solid black;
}







    .product-img {
      width: 80px; /* Small image */
      height: auto;
    }

    .sale-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      z-index: 10;
    }

    .product-details {
      margin-left: 20px; /* Space between image and content */
      flex-grow: 1; /* Keeps content within bounds */
    }

    .card-content-wrapper {
      display: flex;
      align-items: center; /* Align content vertically */
    }


    .section-header {
      color: white;
      border-radius: 8px;
      padding: 40px;
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .section-header.blue {
      background-image: url('https://via.placeholder.com/400x150/003366/FFFFFF?text=');
    }
    .section-header.green {
      background-image: url('https://via.placeholder.com/400x150/007f5f/FFFFFF?text=');
    }
    .section-header.orange {
      background-image: url('https://via.placeholder.com/400x150/ff9800/FFFFFF?text');
    }

    /* Product List Styling */
    .product-list {
      margin-top: 15px;
    }

    /* Product Card Styling */
    .product-card {
      display: flex;
      gap: 15px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 15px; /* Spacing between cards */
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      background-color: #fff;
    }
    .product-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Image Styling */
    .product-image {
      width: 80px;
      height: 80px;
      object-fit: contain;
    }

    /* Product Details Styling */

    .product{
      display: flex;
      gap: 15px;
      padding: 15px;
   
      border-radius: 8px;
   
      margin-bottom: 15px; /* Spacing between cards */
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      background-color: #fff;
    }
    .product:hover {
      transform: translateY(-1px);
      
    }
    .product-details {
      flex-grow: .5;
    }
    .product-name {
      font-weight: bold;
      margin-bottom: 5px;
    }
    .price {
      color: #28a745;
      font-weight: bold;
    }
    .old-price {
      text-decoration: line-through;
      color: #999;
      font-size: 14px;
    }


    .logo-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 40px;
      margin-bottom: 20px;
      padding: 50px;
    }

    .logo {
      width: 150px; /* Adjust width as needed */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .logo:hover {
      transform: scale(1.6); /* Slightly enlarge on hover */
   
    }

            </style>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- preloader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->


        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header area start -->
       
        <?php include('fragments/header.php'); ?>

        <!-- header area end -->

        <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                        <h1> OSKAR </h1>
                    <!-- <img src="assets/img/logo/logo-black.png" alt="logo"> -->
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

        <main>

           

         
            <!-- slider area satrt -->
            <!-- slider area satrt -->
            <section class="slider__area pt-30 pb-30">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-xxl-2">

                        </div>
                        <div class="col-xxl-12 col-xl-12 offset-xxl-0 offset-xl-3 col-lg-12">
                            <div class="row">
                                <div class="col-xxl-8 col-lg-12 col-md-8 mb-20">
                                    <div class="slider__inner slider-active">
                                        <div class="single-slider single-slider-4 w-img" >
                                            <img src="assets/img/hero1 (2).webp" alt="slider">
                                        </div>
                                        <div class="single-slider single-slider-4 w-img">
                                            <img src="assets/img/hero2.webp" alt="slider">
                                        </div>
                                        <div class="single-slider single-slider-4 w-img">
                                            <img src="assets/img/hero1 (2).webp" alt="slider">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-12 col-md-4 col-sm-12">
                                    <div class="banner__area">
                                        <div class="row">
                                            <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                <div class="banner__item mb-20 w-img">
                                                    <a href="product-details.html"><img src="assets/img/hero1 (2).webp" alt=""></a>
                                                </div>
                                            </div>
                                           
                                            <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                <div class="banner__item w-img">
                                                    <a href="product-details.html"><img src="assets/img/hero1 (2).webp" style=" margin-top:-7px" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider area end -->
          
           


            <img src="assets/img/free-delivery.webp" alt="slider" class="img-fluid"> 


            <section class="py-5">
                    <div class="container">
                        <h2 class="text-center mb-4">Love our categories</h2>
                        <div class="row">
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-phone category-icon"></i>
                                </div>
                                <div class="category-title">Phones</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-headphones category-icon"></i>
                                </div>
                                <div class="category-title">Headphones</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-laptop category-icon"></i>
                                </div>
                                <div class="category-title">Laptops</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-tv category-icon"></i>
                                </div>
                                <div class="category-title">TVs</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-tablet category-icon"></i>
                                </div>
                                <div class="category-title">Tablets</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-camera category-icon"></i>
                                </div>
                                <div class="category-title">Cameras</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-watch category-icon"></i>
                                </div>
                                <div class="category-title">Watches</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-watch category-icon"></i>
                                </div>
                                <div class="category-title">Watches</div>
                            </div>
                            <div class="col-1 category-item">
                                <div class="category-circle">
                                    <i class="bi bi-speaker category-icon"></i>
                                </div>
                                <div class="category-title">Speakers</div>
                            </div>
                        </div>
                    </div>
                </section>
            




            <!-- banner area start -->
            <section class="banner__area pt-20 pb-10 grey-bg-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="banner__item w-img mb-30 position-relative">
                    <a href="product-details.html"><img src="assets/img/img-1.webp" alt=""></a>
                    <div class="banner__content">
                        <h3>Top Deals on Electronics</h3>
                        <p>Get the best prices on your favorite electronic devices and gadgets.</p>
                        <a href="product-details.html" class="shop-now-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="banner__item mb-30 w-img position-relative">
                    <a href="product-details.html"><img src="assets/img/img-2.webp" alt=""></a>
                    <div class="banner__content">
                        <h3>Upgrade Your Gear</h3>
                        <p>Discover high-performance laptops, tablets, and more for your needs.</p>
                        <a href="product-details.html" class="shop-now-btn">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="banner__item mb-30 w-img position-relative">
                    <a href="product-details.html"><img src="assets/img/img-3.webp" alt=""></a>
                    <div class="banner__content">
                        <h3>Smart TVs & Accessories</h3>
                        <p>Experience the best in entertainment with our range of smart TVs.</p>
                        <a href="product-details.html" class="shop-now-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <!-- banner area end -->

            <!-- best selling area start -->
            <section class="best__sell pt-15 pb-40 grey-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-md-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>Best Selling<span>Products</span></h3>
                                </div>
                                <div class="product__nav-tab mr-75">
                                    <ul class="nav nav-tabs" id="best-sell-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="true">New Arrival</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="false">Featured</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="hot-tab" data-bs-toggle="tab" data-bs-target="#hot" type="button" role="tab" aria-controls="hot" aria-selected="false">Hot Sale</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="random-tab" data-bs-toggle="tab" data-bs-target="#random" type="button" role="tab" aria-controls="random" aria-selected="false">Random</button>
                                        </li>
                                      </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content" id="best-sell">
                                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="product__slider owl-carousel">
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$500.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$560.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$450.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blink Home Security <br> Camera System 01   </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL)   </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative" >
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blink Home Security Camera <br> System 01   </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                    <div class="product__slider owl-carousel">
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$500.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$560.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$450.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL)    </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative" >
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                                    <div class="product__slider owl-carousel">
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-2.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$500.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$560.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$450.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL)    </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative" >
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="random" role="tabpanel" aria-labelledby="random-tab">
                                    <div class="product__slider owl-carousel">
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-2.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$500.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$560.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$450.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL)    </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative" >
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best selling area end -->

            <section class="promo-section" style="background: url('assets/img/special-deal.jpg') no-repeat center center/cover; padding: 150px; text-align: center; position: relative;">

    <div class="promo-content">
        <h4 style="font-size: 16px; color: #333; font-weight: 600; margin-bottom: 10px;">EXCLUSIVE DEALS ON ELECTRONICS</h4>
        <h1 style="font-size: 36px; font-weight: bold; margin-bottom: 20px;">Get up to 30% off on mobile gadgets!</h1>
        <div class="countdown-timer" style="font-size: 24px; font-weight: 500; display: flex; justify-content: center; gap: 15px; margin-bottom: 20px;">
            <div class="countdown-item">00 <br><span style="font-size: 14px; color: #666;">DAYS</span></div>
            <div class="countdown-item">00 <br><span style="font-size: 14px; color: #666;">HOURS</span></div>
            <div class="countdown-item">00 <br><span style="font-size: 14px; color: #666;">MINUTES</span></div>
            <div class="countdown-item">00 <br><span style="font-size: 14px; color: #666;">SECONDS</span></div>
        </div>
        <button class="promo-button" style="background-color: #000; color: #fff; padding: 12px 30px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
            SHOP NOW!
        </button>
    </div>
    <!-- Sample decorative mobile images -->
    <div class="promo-images" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: -1; opacity: 0.3;">
        <img src="path/to/electronic-image-1.png" alt="Electronic Device 1" style="position: absolute; top: 20px; left: 30px; width: 150px;">
        <img src="path/to/electronic-image-2.png" alt="Electronic Device 2" style="position: absolute; bottom: 30px; right: 40px; width: 150px;">
    </div>
</section>


 <!-- features area start -->
 <section class="features__area grey-bg-2 pt-40 pb-20 pl-10 pr-10">
                <div class="container">
                    <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-rocket-launch"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Free Shipping</h6>
                                    <p>Free Shipping On All Order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-sync"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Money Guarantee</h6>
                                    <p>30 Day Money Back Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-user-headset"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Online Support 24/7</h6>
                                    <p>Technical Support Stand By</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-thumbs-up"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Secure Payment</h6>
                                    <p>All Payment Method are accepted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="features__item features__item-last d-flex white-bg">
                                <div class="features__icon mr-15">
                                    <i class="fal fa-badge-dollar"></i>
                                </div>
                                <div class="features__content">
                                    <h6>Member Discount</h6>
                                    <p>Upto 40% Discount All Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features area end -->

<section>


<div class="container my-5" >
  <div class="row g-4">
  <div class="container">
                    <div class="row">
                        <div class="col-xl-12"></div>
                            <div class="section__title text-center mb-40">
                                <h3>Todays special deals</h3>
                            </div>
    <!-- Product 1 -->
    <div class="col-md-3" >
      <div class="product-card position-relative p-5">
        <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 44%</div>
        <div class="card-content-wrapper ">
          <img src="assets/img/grosery-product-11.webp" alt="Product Image" class="product-img mt-5">
          <div class="product-details">
            <h6 class="fw-bold text-uppercase text-secondary">ACME</h6>
            <h5 class="text-truncate mb-2">Saffola healthy <br> classic masala oats</h5>
            <p class="mb-1 fs-5 fw-bold text-success">Rs. 4,400.00 <span class="text-decoration-line-through text-muted fs-6">Rs. 7,800.00</span></p>
            <p class="text-muted mb-3">Available: <span class="fw-bold">586 Products</span></p>
            <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-3">
      <div class="product-card position-relative p-5">
        <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 19%</div>
        <div class="card-content-wrapper">
          <img src="assets/img/grosery-product-12.webp" alt="Product Image" class="product-img">
          <div class="product-details">
            <h6 class="fw-bold text-uppercase text-secondary">HAMOFY</h6>
            <h5 class="text-truncate mb-2">Yoga bar chunk nut, <br> Yoga bar nutty bar</h5>
            <p class="mb-1 fs-5 fw-bold text-success">Rs. 2,600.00 <span class="text-decoration-line-through text-muted fs-6">Rs. 3,200.00</span></p>
            <p class="text-muted mb-3">Available: <span class="fw-bold">2063 Products</span></p>
            <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-3">
      <div class="product-card position-relative p-5">
        <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 29%</div>
        <div class="card-content-wrapper">
          <img src="assets/img/grosery-product-13.webp" alt="Product Image" class="product-img">
          <div class="product-details">
            <h6 class="fw-bold text-uppercase text-secondary">HURRY</h6>
            <h5 class="text-truncate mb-2">Milk chocolate + <br> Pancake mix combo</h5>
            <p class="mb-1 fs-5 fw-bold text-success">Rs. 3,500.00 <span class="text-decoration-line-through text-muted fs-6">Rs. 4,900.00</span></p>
            <p class="text-muted mb-3">Available: <span class="fw-bold">29088 Products</span></p>
            <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-3">
      <div class="product-card position-relative p-5">
        <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 23%</div>
        <div class="card-content-wrapper">
          <img src="assets/img/grosery-product-14.webp" alt="Product Image" class="product-img">
          <div class="product-details">
            <h6 class="fw-bold text-uppercase text-secondary">MASSIVE</h6>
            <h5 class="text-truncate mb-2">Yoga bar protein <br> nutrition bar combo</h5>
            <p class="mb-1 fs-5 fw-bold text-success">Rs. 1,700.00 <span class="text-decoration-line-through text-muted fs-6">Rs. 2,200.00</span></p>
            <p class="text-muted mb-3">Available: <span class="fw-bold">593 Products</span></p>
            <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
</div>

</section>

            <!-- banner area start -->
            <section class="banner__area pt-20 grey-bg-2">
    <div class="container">
        <div class="row">
            <!-- First Banner: Mobile -->
            <div class="col-xl-6 col-lg-6">
                <div class="banner__item mb-30 w-img position-relative" style=" border-radius: 10px; padding: 20px; text-align: center;">
                    <img src="assets/img/special-deal.jpg" alt="Mobile Offer" style="width: 100%; height:300px; border-radius: 10px;">
                    <div class="banner__content position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <p style="font-size: 16px; font-weight: bold;">SAVE UP TO 30% OFF</p>
                        <h3 style="font-size: 24px; font-weight: bold; margin: 10px 0;">Latest Smartphones</h3>
                        <p style="font-size: 16px;">ONLY <span style="font-size: 24px; font-weight: bold;">$499</span></p>
                        <a href="product-details.html" class="btn btn-dark" style="border-radius: 30px; padding: 10px 20px; font-size: 16px;">SHOP NOW →</a>
                    </div>
                </div>
            </div>
            <!-- Second Banner: Electronics -->
            <div class="col-xl-6 col-lg-6">
                <div class="banner__item mb-30 w-img position-relative" style=" border-radius: 10px; padding: 20px; text-align: center;">
                    <img src="assets/img/special-deal.jpg" alt="Electronics Offer" style="width: 100%; height:300px; border-radius: 10px;">
                    <div class="banner__content position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <p style="font-size: 16px; font-weight: bold;">SAVE UP TO 20% OFF</p>
                        <h3 style="font-size: 24px; font-weight: bold; margin: 10px 0;">Top Electronics</h3>
                        <p style="font-size: 16px;">ONLY <span style="font-size: 24px; font-weight: bold;">$299</span></p>
                        <a href="product-details.html" class="btn btn-dark" style="border-radius: 30px; padding: 10px 20px; font-size: 16px;">SHOP NOW →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- best selling area start -->
<section class="best__sell pt-15 pb-40 grey-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section__head d-md-flex justify-content-between mb-40">
                                <div class="section__title">
                                    <h3>New<span>Arrivals</span></h3>
                                </div>
                                <div class="product__nav-tab mr-75">
                                  
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tab-content" id="best-sell">
                                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="product__slider owl-carousel">
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$500.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$560.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$450.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blink Home Security <br> Camera System 01   </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL)   </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative" >
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB  </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg">
                                            <div class="product__thumb p-relative">
                                                <a href="product-details.html" class="w-img">
                                                    <img src="assets/img/product.webp" alt="product">
                                                    <img class="second-img" src="assets/img/product.webp" alt="product">
                                                </a>
                                                <div class="product__action p-absolute">
                                                    <ul>
                                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__content text-center">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="product-details.html"> Blink Home Security Camera <br> System 01   </a>
                                                </h6>
                                                <div class="rating">
                                                    <ul>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="price">$720.00</span>
                                            </div>
                                            <div class="product__add-btn">
                                                <button type="button">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

           
            <!-- Flash sell area end -->

            <!-- banner area start -->
           
            <!-- banner area end -->

            <!-- onsale product area start -->
            
            <!-- onsale product area end -->


            <div class="container my-5">
  <div class="row g-4" >
    <!-- Section 1 -->
    <div class="col-md-4"  >
     
      <div class="product-list  "  style= " box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); " >
      <div class="section-header blue">SAVE UP TO 20% OFF<br>Top selling products</div>
        <!-- Product 1 -->
        <div class="product p-4 ">
          <img src="assets/img/grosery-product-11.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Nescafe gold blend coffee</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 1,300.00 <span class="old-price">Rs. 1,600.00</span></div>
          </div>
        </div>
        <!-- Product 2 -->
        <div class="product p-4">
          <img src="assets/img/grosery-product-12.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Carnitos nacho crisps</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 600.00 <span class="old-price">Rs. 700.00</span></div>
          </div>
        </div>
        <!-- Product 3 -->
        <div class="product p-4">
          <img src="assets/img/grosery-product-13.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Organic quinoa flour</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 1,300.00 <span class="old-price">Rs. 1,700.00</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="col-md-4">
     
      <div class="product-list  "  style= " box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); " >
      <div class="section-header green">GET 10% OFF ON ALL<br>Top rated products</div>
        <!-- Product 1 -->
        <div class="product p-4 ">
          <img src="assets/img/grosery-product-11.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Nescafe gold blend coffee</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 1,300.00 <span class="old-price">Rs. 1,600.00</span></div>
          </div>
        </div>
        <!-- Product 2 -->
        <div class="product p-4">
          <img src="assets/img/grosery-product-12.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Carnitos nacho crisps</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 600.00 <span class="old-price">Rs. 700.00</span></div>
          </div>
        </div>
        <!-- Product 3 -->
        <div class="product p-4">
          <img src="assets/img/grosery-product-13.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Organic quinoa flour</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 1,300.00 <span class="old-price">Rs. 1,700.00</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 3 -->
    <div class="col-md-4">
     
      <div class="product-list  "  style= " box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); " >
      <div class="section-header orange">RECEIVE 20% OFF<br>Featured products</div>
        <!-- Product 1 -->
        <div class="product p-4 ">
          <img src="assets/img/grosery-product-11.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Nescafe gold blend coffee</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 1,300.00 <span class="old-price">Rs. 1,600.00</span></div>
          </div>
        </div>
        <!-- Product 2 -->
        <div class="product p-4">
          <img src="assets/img/grosery-product-12.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Carnitos nacho crisps</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 600.00 <span class="old-price">Rs. 700.00</span></div>
          </div>
        </div>
        <!-- Product 3 -->
        <div class="product p-4">
          <img src="assets/img/grosery-product-13.webp" alt="Product Image" class="product-image">
          <div class="product-details">
            <div class="product-name">Organic quinoa flour</div>
            <div class="text-warning">★★★★★</div>
            <div class="price">Rs. 1,300.00 <span class="old-price">Rs. 1,700.00</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="logo-container">
    <img src="assets/img/logo-1.png" alt="Kellogg's Logo" class="logo">
    <img src="assets/img/logo-2.png" alt="Nature's Way Logo" class="logo">
    <img src="assets/img/logo-3.png" alt="Nestlé Logo" class="logo">
    <img src="assets/img/logo-4.png" alt="Fresh Logo" class="logo">
    <img src="assets/img/logo-5.png" alt="Libby's Logo" class="logo">
    <img src="assets/img/logo-6.png" alt="Tropicana Logo" class="logo">
  </div>
            
            <!-- subscribe area end -->

            <!-- back to top btn area start -->
            <section class="back-btn-top">
                <div class="container-fluid p-0">
                    <div class="row gx-0">
                        <div class="col-xl-12">
                            <div id="scroll" class="back-to-top-btn text-center">
                                <a href="javascript:void(0);">back to top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- back to top btn area end -->

    		

            <!-- shop modal start -->
            <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                    <div class="modal-content">
                        <div class="product__modal-wrapper p-relative">
                            <div class="product__modal-close p-absolute">
                                <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                            </div>
                            <div class="product__modal-inner">
                                <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-box">
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                                <div class="product__modal-img w-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-4.jpg" alt="">
                                                </div>
                                            </div>
                                          </div>
                                        <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-1.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                                <img src="assets/img/shop/product/quick-view/nav/quick-nav-2.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                                <img src="assets/img/shop/product/quick-view/nav/quick-nav-3.jpg" alt="">
                                              </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                              <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                                <img src="assets/img/shop/product/quick-view/nav/quick-nav-4.jpg" alt="">
                                              </button>
                                            </li>
                                          </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product__modal-content">
                                        <h4><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                        <div class="product__modal-des mb-40">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                        </div>
                                        <div class="product__stock">
                                            <span>Availability :</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="product__stock sku mb-30">
                                            <span>SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>
                                        <div class="product__review d-sm-flex">
                                            <div class="rating rating__shop mb-15 mr-35">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            </div>
                                            <div class="product__add-review mb-15">
                                            <span><a href="#">1 Review</a></span>
                                            <span><a href="#">Add Review</a></span>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <span>$560.00</span>
                                        </div>
                                        <div class="product__modal-form mb-30">
                                            <form action="#">
                                            <div class="pro-quan-area d-lg-flex align-items-center">
                                                <div class="product-quantity mr-20 mb-25">
                                                    <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                                </div>
                                                <div class="pro-cart-btn mb-25">
                                                    <button class="t-y-btn" type="submit">Add to cart</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="product__modal-links">
                                            <ul>
                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                            
                                            <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                            <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop modal end -->
 
 
        </main>

        <?php include('fragments/footer.php'); ?>

		<!-- JS here -->
        <?php include('fragments/js.php'); ?>
      

    </body>
</html>
