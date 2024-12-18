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
            top: 0px;
            left: 3px;
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







        .product-img-container {
    display: flex;
    align-items: center; /* Vertical centering */
    justify-content: center; /* Optional, centers horizontally too */
    height: 50%; /* Ensure the container has a height */
    margin-top: 50%;
}




        .sale-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 10;
        }

        .product-details {
            margin-left: 20px;
            /* Space between image and content */
            flex-grow: 1;
            /* Keeps content within bounds */
        }

        .card-content-wrapper {
            display: flex;
            align-items: center;
            /* Align content vertically */
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
            margin-bottom: 15px;
            /* Spacing between cards */
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

        .product {
            display: flex;
            gap: 15px;
            padding: 15px;

            border-radius: 8px;

            margin-bottom: 15px;
            /* Spacing between cards */
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
            width: 150px;
            /* Adjust width as needed */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.1);
            /* Slightly enlarge on hover */

        }



        .scroll-container {
            width: 100%;
            /* Adjust width as needed */
            height: 150px;
            /* Adjust height as needed */
            overflow: hidden;
            /* Hide overflow */
            white-space: nowrap;
            /* Prevent line breaks */
            position: relative;
            /* For positioning */
            cursor: grab;
            /* Change cursor to indicate draggable area */
        }

        .logo-container {
            display: inline-block;
            /* Keep logos in a single row */
            transform: translateX(0);
            /* For automatic scrolling */
            transition: transform 0.1s linear;
            /* Smooth movement for auto scroll */
        }

        .logo {
            display: inline-block;
            /* Ensure logos stay in line */
            margin-right: 10px;
            /* Add spacing between logos */
        }



        /* Horizontal Scrolling Row */
        .category-row {
            display: flex;
            overflow-x: auto;
            /* Horizontal scrolling */
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling for mobile devices */
            padding-bottom: 10px;
            gap: 15px;
            /* Optional spacing between items */
            scroll-behavior: smooth;
            /* Smooth scrolling effect */
        }

        /* Hide Scrollbar */
        .category-row::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar in Webkit browsers */
        }

        .category-row {
            scrollbar-width: none;
            /* Hide scrollbar in Firefox */
        }

        /* Scroll Buttons */
        .scroll-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 24px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .scroll-btn.left-btn {
            left: 10px;
        }

        .scroll-btn.right-btn {
            right: 10px;
        }

        .scroll-btn:hover {
            background-color: #0056b3;
        }

        /* Category Item Styling */
        .category-item {
            flex: 0 0 auto;
            /* Prevent items from shrinking and fit to their content */
            text-align: center;
            width: 120px;
            /* Width of each item */
        }

        .category-circle {
            width: 80px;
            height: 80px;
            border: 2px solid #007bff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .category-icon {
            font-size: 30px;
            color: #007bff;
        }

        .category-title {
            font-size: 16px;
            font-weight: 500;
            margin-top: 8px;
        }

        /* Mobile Adjustments */
        @media (max-width: 576px) {
            .category-item {
                width: 50px;
                /* Reduce width on small screens */
            }

            .category-circle {
                width: 60px;
                height: 60px;
            }

            .category-icon {
                font-size: 24px;
            }

            .category-title {
                font-size: 14px;
            }
        }








        .category-card {
            width: 120px;
            /* Fixed width */
            height: 150px;
            /* Fixed height */
            text-align: center;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .category-card img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .category-card p {
            margin: 0;
            font-size: 14px;
            font-weight: bold;
            color: #333;
            text-align: center;
        }

        .row>.col {
            display: flex;
            justify-content: center;
        }



        /* Container Styling */
        .custom-scroll-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-color: #f9f9f9;
            overflow: hidden;
            /* Soft background color */
        }

        /* Row Styling */
        .custom-row {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            /* Space between rows */
        }

        /* Box and Image Styling */
        .custom-row-content {
            display: flex;
            gap: 25px;
            /* Space between boxes */
        }

        .custom-logo {
            width: 200px;
            /* Set uniform width */
            height: 100px;
            /* Set uniform height */
            object-fit: contain;
            /* Maintain aspect ratio within the box */
            border-radius: 8px;
            /* Rounded corners for a modern look */
            background: white;
            /* Background color for logo boxes */
            padding: 10px;
            /* Padding inside each box */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
            /* Soft shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Hover effect transition */
        }

        /* Hover Effect */
        .custom-logo:hover {
            transform: scale(1.1);
            /* Slight zoom effect */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15), 0 3px 6px rgba(0, 0, 0, 0.1);
            /* Stronger shadow */
        }


        .logo-wrapper {
            display: inline-block;
            margin: 0 10px;
            /* Adjust the value to control spacing */
        }

        .custom-row-content {
            display: flex;
            align-items: center;
        }


       /* Grid Container */
.unique-deals-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 5 columns in one row */
    gap: 20px;
    align-items: stretch;
    zoom: 0.9;
}

/* Deal Items and Banner */
.unique-deal-item,
.unique-deal-banner {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow retained */
    text-align: center;
    padding: 15px; /* Ensures consistent padding */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-sizing: border-box; /* Prevents padding from affecting dimensions */
}

/* Banner Adjustments */
.unique-deal-banner {
    grid-column: span 3; /* Spans 3 columns */
    background: url('assets/img/power-bank.jpg') no-repeat center center;
    background-size: cover;
    color: #fff;
    padding: 30px; /* Adequate padding for larger banner */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Reapplies shadow */
}

/* Text Styles */
.unique-deal-store {
    font-size: 12px; /* Smaller, consistent size */
    margin: 5px 0;
    color: #999;
}

.unique-deal-title {
    font-size: 14px; /* Uniform title font size */
    font-weight: 600;
    color: #333;
    margin-top: 10px;
}

.unique-deal-price {
    font-size: 13px;
    font-weight: bold;
    color: #e63946;
    margin: 10px 0;
}

.unique-banner-title {
    color: #e63946;
    font-size: 20px; /* Slightly smaller */
    font-weight: bold;
    margin-bottom: 5px;
}

.unique-banner-description {
    font-size: 14px; /* Consistent with the deal description */
    color: #f0f0f0;
    margin: 5px 0;
}

.unique-banner-code {
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    margin: 10px 0;
}

.unique-banner-button {
    background: #e63946;
    color: #fff;
    padding: 9px 18px; /* Smaller padding for reduced size */
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
    display: inline-block; /* Ensure the button is treated as an inline-block element */
    margin: 0 auto; /* Center alignment if its container uses `text-align: center` */
}


.unique-banner-button:hover {
    background: #c5303d;
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .unique-deals-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns for medium screens */
    }

    .unique-deal-banner {
        grid-column: span 2; /* Banner spans 2 columns */
    }
}

@media (max-width: 576px) {
    .unique-deals-grid {
        grid-template-columns: 1fr; /* Single column for small screens */
    }

    .unique-deal-banner {
        grid-column: span 1; /* Banner spans full width */
    }
}






    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <!-- preloader area start -->
    <!-- <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div> -->
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
                        <button type="submit"><i class="far fa-search"></i></button>
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



        <div class="container pt-4">
            <div class="row g-2">
                <!-- 10 cards -->
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/mobile-tablet.webp" alt="Mobile & Tablet">
                        <p>Mobile & Tablet</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/computer&.webp" alt="Computers & Gaming">
                        <p>Computers & Gaming</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/electronics.webp" alt="Electronics">
                        <p>Electronics</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/home&ki.webp" alt="Home & Kitchen">
                        <p>Home & Kitchen</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/fashion&.webp" alt="Fashion">
                        <p>Fashion</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/health&bue.webp" alt="Health & Beauty">
                        <p>Health & Beauty</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/automative&.webp" alt="Automotives">
                        <p>Automotives</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/toys&.webp" alt="Toys, Games & Kids">
                        <p>Toys, Games & Kids</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/offroad.webp" alt="Offroad">
                        <p>Offroad</p>
                    </div>
                </div>
                <div class="col">
                    <div class="category-card">
                        <img src="assets/img/hotdeals.webp" alt="Hot Deals">
                        <p>Hot Deals</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="promo-section m-4" style="background: url('assets/img/banner-main.webp') no-repeat center center/cover; padding: 120px; text-align: center; position: relative; border-radius:15px; object-fit:cover; ">


        </section>
        <section class="">
            <div class="container">
                <!-- <h2 class="text-center mb-4">Love Our Categories</h2> -->
                <div class="category-row d-flex overflow-auto" style="gap:10px">
                    <!-- Phones -->
                    <div class="category-item text-center me-3" data-video="assets/img/v-1.mp4" data-link="https://youtube.com/shorts/8XUunkGJw4g?si=HK8Jc0juItbaEQFV">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-phone category-icon"></i>
                        </div>
                        <div class="category-title mt-2">Phones</div>
                    </div>
                    <!-- Laptops -->
                    <div class="category-item text-center me-3" data-video="assets/img/v-1.mp4" data-link="assets/videos/laptops.mp4">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-laptop category-icon"></i>
                        </div>
                        <div class="category-title mt-2">Laptops</div>
                    </div>
                    <!-- TVs -->
                    <div class="category-item text-center me-3" data-video="assets/img/v-1.mp4" data-link="assets/videos/tvs.mp4">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-tv category-icon"></i>
                        </div>
                        <div class="category-title mt-2">TVs</div>
                    </div>
                    <!-- Cameras -->
                    <div class="category-item text-center me-3" data-video="assets/img/v-1.mp4" data-link="assets/videos/cameras.mp4">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-camera category-icon"></i>
                        </div>
                        <div class="category-title mt-2">Cameras</div>
                    </div>
                    <!-- Speakers -->
                    <div class="category-item text-center me-3" data-video="assets/img/v-1.mp4" data-link="assets/videos/speakers.mp4">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-speaker category-icon"></i>
                        </div>
                        <div class="category-title mt-2">Speakers</div>
                    </div>
                    <!-- Tablets -->
                    <div class="category-item text-center me-3" data-video="assets/videos/tablets.mp4" data-link="assets/videos/tablets.mp4">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-tablet category-icon"></i>
                        </div>
                        <div class="category-title mt-2">Tablets</div>
                    </div>
                    <!-- Watches -->
                    <div class="category-item text-center me-3" data-video="assets/videos/watches.mp4" data-link="assets/videos/watches.mp4">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-watch category-icon"></i>
                        </div>
                        <div class="category-title mt-2">Watches</div>
                    </div>
                    <!-- Headphones -->
                    <div class="category-item text-center me-3" data-video="assets/videos/headphones.mp4" data-link="product.php">
                        <div class="category-circle mx-auto">
                            <i class="bi bi-headphones category-icon"></i>
                        </div>
                        <div class="category-title mt-2">Headphones</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- slider area satrt -->
        <!-- slider area satrt -->
        <section class="slider__area pt-30 pb-30">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-xxl-2">

                    </div>
                    <!-- <div class="col-xxl-12 col-xl-12 offset-xxl-0 offset-xl-3 col-lg-12">
                        <div class="row">
                            <div class="col-xxl-8 col-lg-12 col-md-8 mb-20">
                                <div class="slider__inner slider-active">
                                    <div class="single-slider single-slider-4 w-img">
                                        <img src="assets/img/hero-2.jpg" alt="slider" style=" border-radius:15px;">
                                    </div>
                                    <div class="single-slider single-slider-4 w-img" style="  border-radius:15px;">
                                        <img src="assets/img/hero-1.jpg" alt="slider">
                                    </div>
                                    <div class="single-slider single-slider-4 w-img" style="  border-radius:15px;">
                                        <img src="assets/img/hero-1.1.jpg" alt="slider">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-12 col-md-4 col-sm-12">
                                <div class="banner__area">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="banner__item mb-20 w-img">
                                                <a href="product-details.html"><img src="assets/img/hero-1.jpg" style=" margin-top:-7px; border-radius:15px;" alt=""></a>
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                            <div class="banner__item w-img">
                                                <a href="product-details.html"><img src="assets/img/hero-1.1.jpg" style=" margin-top:-2px; border-radius:15px;" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xxl-12 col-xl-12 offset-xxl-0 offset-xl-3 col-lg-12">
                        <div class="row">
                            <!-- First Box -->
                            <div class="col-xxl-8 col-lg-12 col-md-8 mb-20">
                                <div class="slider__inner slider-active">
                                    <div class="single-slider single-slider-4 w-img">
                                        <img src="assets/img/hero-2.jpg" alt="slider" style="border-radius:15px;">
                                    </div>
                                    <div class="single-slider single-slider-4 w-img" style="border-radius:15px;">
                                        <img src="assets/img/hero-1.jpg" alt="slider">
                                    </div>
                                    <div class="single-slider single-slider-4 w-img" style="border-radius:15px;">
                                        <img src="assets/img/
                                        " alt="slider">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-12 col-md-4 col-sm-12">
    <div class="banner__item w-img" id="carousel" style="height: 100%; margin-top:-7px; border-radius:15px; overflow: hidden;">
        <a href="product-details.html">
            <img src="assets/img/hero-1.jpg" alt="Image 1" class="carousel-image" style="width: 100%; height: 96%; object-fit: cover; border-radius: 15px; margin-top:8px;">
        </a>
    </div>
</div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- slider area end -->





        <!-- <img src="assets/img/banner-main.webp" alt="slider" class="img-fluid" style= "margin:25px;" >  -->







        <!-- Modal Structure -->
        <div id="storyModal" class="modal">
            <div class="modal-content">
                <div class="modal-video-container">
                    <!-- Profile Icon -->
                    <div class="profile-icon">
                        <img src="https://via.placeholder.com/40" alt="Profile Icon">
                    </div>
                    <!-- Video Controls -->
                    <div class="video-controls">
                        <div class="control-icon" id="playPause">&#9658;</div> <!-- Play Icon -->
                        <div class="control-icon" id="toggleSound">&#128266;</div> <!-- Sound Icon -->
                    </div>
                    <!-- Video Element -->
                    <video id="storyVideo" class="modal-video" autoplay muted loop></video>
                    <!-- Video Progress Bar -->
                    <div id="progressBar" class="progress-bar"></div>
                </div>
                <div class="modal-body">
                    <div class="product-title">Product Title Here</div>
                    <div class="product-description">
                        A short description of the product goes here to give the user more context.
                    </div>
                    <a id="productLink" href="product.php" target="product.php" class="product-link">View Product</a>
                </div>
                <button id="closeModal" class="close-btn">&times;</button>
            </div>
        </div>



        <!-- banner area start -->
        <section class="banner__area pt-20 pb-10 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="banner__item w-img mb-30 position-relative">
                            <a href="product-details.html"><img src="assets/img/top-1.jpg" alt="" style=" border-radius:15px;"></a>
                            <div class="banner__content">
                                <h3>Top Deals on <BR>Electronics</h3>

                                <a href="product-details.php" class="shop-now-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img position-relative">
                            <a href="product-details.html"><img src="assets/img/free-gift.jpg" alt="" style=" border-radius:15px; height:165px;"></a>
                            <div class="banner__content">
                                <!-- <h3>Upgrade <BR> Your Gear</h3>

                                <a href="product-details.php" class="shop-now-btn">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img position-relative">
                            <a href="product-details.html"><img src="assets/img/iphone13.jpg" alt="" style=" border-radius:15px; height:165px;"></a>
                            <div class="banner__content">
                                <!-- <h3>Smart TVs & <BR> Accessories</h3>

                                <a href="product-details.php" class="shop-now-btn">Shop Now</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img position-relative">
                            <a href="product-details.html"><img src="assets/img/top-3.jpg" alt="" style=" border-radius:15px;"></a>
                            <div class="banner__content">
                                <h3>Smart TVs & <BR> Accessories</h3>

                                <a href="product-details.php" class="shop-now-btn">Shop Now</a>
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
                                <h3> Hot<span>Deals</span></h3>
                            </div>
                            <div class="product__nav-tab mr-75">
                                <!-- <ul class="nav nav-tabs" id="best-sell-tab" role="tablist">
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
                                      </ul> -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-xl-12">
                        <div class="tab-content" id="best-sell">
                            <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                <div class="product__slider owl-carousel">
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-1.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-1.webp" alt="product">
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

                                            <span class="price">KWD 500.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-2.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-2.webp" alt="product">
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

                                            <span class="price">KWD 560.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-3.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-3.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus </a>
                                            </h6>

                                            <span class="price">KWD 450.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-4.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-4.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Blink Home Security <br> Camera System 01 </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <img src="assets/img/H-5.webp" alt="product">
                                            <img class="second-img" src="assets/img/H-5.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL) </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-6.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-6.webpp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-7.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-7.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Blink Home Security Camera <br> System 01 </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                <div class="product__slider owl-carousel">
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-8.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-8.webp" alt="product">
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

                                            <span class="price">KWD 500.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/H-9.webp" alt="product">
                                                <img class="second-img" src="assets/img/H-9.webp" alt="product">
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

                                            <span class="price">KWD 560.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus </a>
                                            </h6>

                                            <span class="price">KWD 450.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL) </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                            </h6>

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
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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

                                            <span class="price">$500.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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

                                            <span class="price">$560.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus </a>
                                            </h6>

                                            <span class="price">$450.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                            </h6>

                                            <span class="price">$720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL) </a>
                                            </h6>

                                            <span class="price">$720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB </a>
                                            </h6>

                                            <span class="price">$720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                            </h6>

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
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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

                                            <span class="price">$500.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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

                                            <span class="price">$560.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus </a>
                                            </h6>

                                            <span class="price">$450.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                            </h6>

                                            <span class="price">$720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL) </a>
                                            </h6>

                                            <span class="price">$720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB </a>
                                            </h6>

                                            <span class="price">$720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
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
                                                <a class="product-item-link" href="product-details.html">LG 27UD58: £347.21, <br> Ebuyer.com </a>
                                            </h6>

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
        <!-- new arrival  area start -->
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
                <div class="row pt-3">
                    <div class="col-xl-12">
                        <div class="tab-content" id="best-sell">
                            <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                <div class="product__slider owl-carousel">
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/new-1.webp" alt="product">
                                                <img class="second-img" src="assets/img/new-1.webp" alt="product">
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

                                            <span class="price">KWD 500.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/new-2.webp" alt="product">
                                                <img class="second-img" src="assets/img/new-2.webp" alt="product">
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

                                            <span class="price">KWD 560.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/new-3.webp" alt="product">
                                                <img class="second-img" src="assets/img/new-3.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung C49J89: £875, Debenhams Plus </a>
                                            </h6>

                                            <span class="price">KWD 450.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/new-4.webp" alt="product">
                                                <img class="second-img" src="assets/img/new-4.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Blink Home Security <br> Camera System 01 </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/new-5.webp" alt="product">
                                                <img class="second-img" src="assets/img/new-5.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Blue t-shir for men <br> (X, M, XL, XXL) </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/new-6.webp" alt="product">
                                                <img class="second-img" src="assets/img/new-6.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Samsung A20 Pro Ultra <br> CPU 4/64 GB </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
                                        </div>
                                        <div class="product__add-btn">
                                            <button type="button">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="product__item white-bg" style="  border-radius:15px;">
                                        <div class="product__thumb p-relative">
                                            <a href="product-details.html" class="w-img">
                                                <img src="assets/img/new-7.webp" alt="product">
                                                <img class="second-img" src="assets/img/new-7.webp" alt="product">
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
                                                <a class="product-item-link" href="product-details.html"> Blink Home Security Camera <br> System 01 </a>
                                            </h6>

                                            <span class="price">KWD 720.00</span>
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
        <!-- new arrival area end -->

        <!-- banner area start -->
        <section class="banner__area pt-20 grey-bg-2">
            <div class="container">
                <div class="row">
                    <!-- First Banner: Mobile -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__item mb-30 w-img position-relative" style=" border-radius: 15px;  text-align: center; ">
                            <img src="assets/img/small-banner.webp" alt="Mobile Offer" style="width: 120%; height:300px; border-radius: 15px; margin-right:250px;">
                            <!-- <div class="banner__content position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <p style="font-size: 16px; font-weight: bold;">SAVE UP TO 30% OFF</p>
                        <h3 style="font-size: 24px; font-weight: bold; margin: 10px 0;">Latest Smartphones</h3>
                        <p style="font-size: 16px;">ONLY <span style="font-size: 24px; font-weight: bold;">$499</span></p>
                        <a href="product-details.html" class="btn btn-dark" style="border-radius: 30px; padding: 10px 20px; font-size: 16px;">SHOP NOW →</a>
                    </div> -->
                        </div>
                    </div>
                    <!-- Second Banner: Electronics -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__item mb-30 w-img position-relative" style=" border-radius: 15px;  text-align: center;">
                            <img src="assets/img/small-banner-1.webp" alt="Mobile Offer" style="width: 120%; height:300px; border-radius: 15px;">
                            <!-- <div class="banner__content position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                        <p style="font-size: 16px; font-weight: bold;">SAVE UP TO 30% OFF</p>
                        <h3 style="font-size: 24px; font-weight: bold; margin: 10px 0;">Latest Smartphones</h3>
                        <p style="font-size: 16px;">ONLY <span style="font-size: 24px; font-weight: bold;">$499</span></p>
                        <a href="product-details.html" class="btn btn-dark" style="border-radius: 30px; padding: 10px 20px; font-size: 16px;">SHOP NOW →</a>
                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area area end -->
        <!-- for you  area start -->
        <section class="flash__sell pt-25 pb-40 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-md-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3><span> For You</span></h3>
                            </div>
                            <div class="product__nav-tab">
                                <!-- <ul class="nav nav-tabs" id="flast-sell-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="computer-tab" data-bs-toggle="tab" data-bs-target="#computer" type="button" role="tab" aria-controls="computer" aria-selected="true">computer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="samsung-tab" data-bs-toggle="tab" data-bs-target="#samsung" type="button" role="tab" aria-selected="false">samsung</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="htc-tab" data-bs-toggle="tab" data-bs-target="#htc" type="button" role="tab" aria-selected="false">HTC</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="nokia-tab" data-bs-toggle="tab" data-bs-target="#nokia" type="button" role="tab" aria-selected="false">Nokia</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="cell-tab" data-bs-toggle="tab" data-bs-target="#cell" type="button" role="tab"  aria-selected="false">Cell Phones</button>
                                        </li>
                                      </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="flast-sell-tabContent">
                            <div class="tab-pane fade show active" id="computer" role="tabpanel" aria-labelledby="computer-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for-1.webp" alt="product">
                                                        <img class="second-img" src="assets/img/for-1.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">KWD 720.00</span>
                                                    <span class="price-old"> <del>KWD 800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for-2.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/for-2.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">KWD 350.00</span>
                                                    <span class="price-old"> <del>KWD 400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for700-1.webp" alt="product">
                                                        <img class="second-img" src="assets/img/for700-1.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">KWD 120.00</span>
                                                    <span class="price-old"> <del>KWD 125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for700-2.webp" alt="product">
                                                        <img class="second-img" src="assets/img/for700-2.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">KWD 250.00</span>
                                                    <span class="price-old"> <del>KWD 275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/jbl.webp" alt="product" style="height:628px;">
                                                        <img class="second-img" src="assets/img/jbl.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <!-- <span class="new mb-5">$120.00</span>
                                                        <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                        <div class="add-cart">
                                                            <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                        </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for700-3.webp" alt="product">
                                                        <img class="second-img" src="assets/img/for700-3.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">KWD 90.00</span>
                                                    <span class="price-old"> <del>KWD 105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for-8.jpeg" alt="product">
                                                        <img class="second-img" src="assets/img/for-8.jpeg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">KWD 300.00</span>
                                                    <span class="price-old"> <del>KWD 250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for-6.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/for-6.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">KWD 175.00</span>
                                                    <span class="price-old"> <del>KWD 190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for-7.webp" alt="product">
                                                        <img class="second-img" src="assets/img/for-7.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">KWD 220.00</span>
                                                    <span class="price-old"> <del>KWD 230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="samsung" role="tabpanel" aria-labelledby="samsung-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/for-8.jpeg" alt="product">
                                                        <img class="second-img" src="assets/img/for-8.jpeg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-1.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-1.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="htc" role="tabpanel" aria-labelledby="htc-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-12.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-19.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nokia" role="tabpanel" aria-labelledby="nokia-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-19.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cell" role="tabpanel" aria-labelledby="cell-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-19.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
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
            </div>
        </section>
        <!-- for you area end  -->

        <!-- logos scroll start-->
        <div class="custom-scroll-container">
            <div class="custom-row custom-row-1">
                <div class="custom-row-content">
                    <div class="logo-wrapper"><img src="assets/img/logo/Ahastyle.svg" alt="Ahastyle Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/AMG.svg" alt="AMG Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/apple.svg" alt="Apple Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Belkin.svg" alt="Belkin Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/BMW.svg" alt="BMW Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/devia_logo_nZ2eiVZ.svg" alt="Devia Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Elago_2.svg" alt="Elago Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/ferrari.svg" alt="Ferrari Logo" class="custom-logo"></div>
                </div>
            </div>

            <div class="custom-row custom-row-2">
                <div class="custom-row-content">
                    <div class="logo-wrapper"><img src="assets/img/logo/green-lion.svg" alt="Green Lion Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Guess_0pb0tNK.svg" alt="Guess Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Viva_Madrid-2.svg" alt="Lguard Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/jbl-2.svg" alt="JBL Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Karl.svg" alt="Karl Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Levelo_logo_42vm701.svg" alt="Levelo Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Liberty_Guard.svg" alt="Liberty Guard Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Mercedes-Benz.svg" alt="Mercedes-Benz Logo" class="custom-logo"></div>
                </div>
            </div>

            <div class="custom-row custom-row-3">
                <div class="custom-row-content">
                    <div class="logo-wrapper"><img src="assets/img/logo/pawa.svg" alt="Pawa Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/polo.svg" alt="Polo Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/porodo.svg" alt="Porodo Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/powerology-logo-1wp.svg" alt="Powerology Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/ravpower.svg" alt="Ravpower Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Samsung_wordmark.svg" alt="Samsung Wordmark Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/Viva_Madrid-2.svg" alt="Viva Madrid Logo" class="custom-logo"></div>
                    <div class="logo-wrapper"><img src="assets/img/logo/X-Doria.svg" alt="X-Doria Logo" class="custom-logo"></div>
                </div>
            </div>
        </div>
        <!-- logos scroll end -->

        <!-- special deals start -->
        <section>
            <div class="container my-5">
                <div class="row g-4">
                    <div class="col-xl-12">
                        <div class="section__title text-center mb-40">
                            <h3>Special Deals</h3>
                        </div>
                    </div>

                   



                    <div class="col-md-6 col-lg-3">
                        <div class="product-card position-relative p-4 h-100" style="border-radius:15px;">
                            <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 19%</div>
                            <div class="text-center">
                                <img src="assets/img/grosery-product-11.webp.jpg" alt="Product Image" class="product-img-container img-fluid">
                            </div>
                            <div class="product-details mt-3">
                                <h6 class="fw-bold text-uppercase text-secondary">HAMOFY</h6>
                                <h5 class="text-truncate mb-2">Yoga bar chunk nut, <br> Yoga bar nutty bar</h5>
                                <p class="mb-1 fs-5 fw-bold text-success">2.60 KWD <span class="text-decoration-line-through text-muted fs-6">3.20 KWD</span></p>
                                <p class="text-muted mb-3">Available: <span class="fw-bold">2063 Products</span></p>
                                <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
                            </div>
                        </div>
                    </div>


                    <!-- Product 2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="product-card position-relative p-4 h-100" style="border-radius:15px;">
                            <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 19%</div>
                            <div class="text-center">
                                <img src="assets/img/grosery-product-12.webp.jpg" alt="Product Image" class="product-img-container img-fluid">
                            </div>
                            <div class="product-details mt-3">
                                <h6 class="fw-bold text-uppercase text-secondary">HAMOFY</h6>
                                <h5 class="text-truncate mb-2">Yoga bar chunk nut, <br> Yoga bar nutty bar</h5>
                                <p class="mb-1 fs-5 fw-bold text-success">2.60 KWD <span class="text-decoration-line-through text-muted fs-6">3.20 KWD</span></p>
                                <p class="text-muted mb-3">Available: <span class="fw-bold">2063 Products</span></p>
                                <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="product-card position-relative p-4 h-100" style="border-radius:15px;">
                            <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 29%</div>
                            <div class="text-center">
                                <img src="assets/img/grosery-product-13.webp.jpg" alt="Product Image" class="product-img-container img-fluid">
                            </div>
                            <div class="product-details mt-3">
                                <h6 class="fw-bold text-uppercase text-secondary">HURRY</h6>
                                <h5 class="text-truncate mb-2">Milk chocolate + <br> Pancake mix combo</h5>
                                <p class="mb-1 fs-5 fw-bold text-success">3.50 KWD <span class="text-decoration-line-through text-muted fs-6">4.90 KWD</span></p>
                                <p class="text-muted mb-3">Available: <span class="fw-bold">29088 Products</span></p>
                                <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="product-card position-relative p-4 h-100" style="border-radius:15px;">
                            <div class="sale-badge bg-danger text-white rounded-pill px-3 py-1 small">SALE 23%</div>
                            <div class="text-center">
                                <img src="assets/img/grosery-product-14.webp.jpg" alt="Product Image" class="product-img-container img-fluid">
                            </div>
                            <div class="product-details mt-3">
                                <h6 class="fw-bold text-uppercase text-secondary">MASSIVE</h6>
                                <h5 class="text-truncate mb-2">Yoga bar protein <br> nutrition bar combo</h5>
                                <p class="mb-1 fs-5 fw-bold text-success">1.70 KWD <span class="text-decoration-line-through text-muted fs-6">2.20 KWD</span></p>
                                <p class="text-muted mb-3">Available: <span class="fw-bold">593 Products</span></p>
                                <button class="btn btn-success w-100 fw-bold">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- special deals end -->


        <!-- Lifestyle Gadgets  area start -->
        <section class="flash__sell pt-25 pb-40 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-md-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Lifestyle Gadgets<span> & Smart Gadgets</span></h3>
                            </div>
                            <div class="product__nav-tab">
                                <!-- <ul class="nav nav-tabs" id="flast-sell-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="computer-tab" data-bs-toggle="tab" data-bs-target="#computer" type="button" role="tab" aria-controls="computer" aria-selected="true">computer</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="samsung-tab" data-bs-toggle="tab" data-bs-target="#samsung" type="button" role="tab" aria-selected="false">samsung</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="htc-tab" data-bs-toggle="tab" data-bs-target="#htc" type="button" role="tab" aria-selected="false">HTC</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="nokia-tab" data-bs-toggle="tab" data-bs-target="#nokia" type="button" role="tab" aria-selected="false">Nokia</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="cell-tab" data-bs-toggle="tab" data-bs-target="#cell" type="button" role="tab"  aria-selected="false">Cell Phones</button>
                                        </li>
                                      </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="flast-sell-tabContent">
                            <div class="tab-pane fade show active" id="computer" role="tabpanel" aria-labelledby="computer-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-1.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-1.web" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">KWD 720.00</span>
                                                    <span class="price-old"> <del>KWD 800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-2.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-2.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">KWD 350.00</span>
                                                    <span class="price-old"> <del>KWD 400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-3.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-3.webp" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">KWD 120.00</span>
                                                    <span class="price-old"> <del>KWD 125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-4.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-4.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">KWD 250.00</span>
                                                    <span class="price-old"> <del>KWD 275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px; ">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/jbl.webp" alt="product" style="height:628px;"
                                                        >
                                                        <img class="second-img" src="assets/img/jbl.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <!-- <span class="new mb-5">$120.00</span>
                                                        <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                        <div class="add-cart">
                                                            <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                        </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-5.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-5.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">KWD 90.00</span>
                                                    <span class="price-old"> <del>KWD 105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-6.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-6.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">KWD 300.00</span>
                                                    <span class="price-old"> <del>KWD 250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-7.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-7.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">KWD 175.00</span>
                                                    <span class="price-old"> <del>KWD 190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-8.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-8.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">KWD 220.00</span>
                                                    <span class="price-old"> <del>KWD 230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="samsung" role="tabpanel" aria-labelledby="samsung-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-9.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-9.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/L-1.webp" alt="product">
                                                        <img class="second-img" src="assets/img/L-1.webp" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
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
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="htc" role="tabpanel" aria-labelledby="htc-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-19.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nokia" role="tabpanel" aria-labelledby="nokia-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-19.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="cell" role="tabpanel" aria-labelledby="cell-tab">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Blink Home Security Camera System 01 </a>
                                                    </h6>

                                                    <span class="new">$720.00</span>
                                                    <span class="price-old"> <del>$800.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-19.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
                                                    </h6>

                                                    <span class="new">$350.00</span>
                                                    <span class="price-old"> <del>$400.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function </a>
                                                    </h6>

                                                    <span class="new">$120.00</span>
                                                    <span class="price-old"> <del>$125.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Original Smart Phone for Original for iPhone 6s</a>
                                                    </h6>

                                                    <span class="new">$250.00</span>
                                                    <span class="price-old"> <del>$275.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb product__thumb-big pb-15 p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                                    </h6>

                                                    <span class="new mb-5">$120.00</span>
                                                    <span class="price-old mb-5"> <del>$125.00</del> </span>
                                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod</p>
                                                    <div class="add-cart">
                                                        <button class="t-y-btn t-y-btn-2">add to cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-17.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> TF Camera Clock Support Bt 4.0 for Ios </a>
                                                    </h6>

                                                    <span class="new">$90.00</span>
                                                    <span class="price-old"> <del>$105.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Ipad 2019 6th Gen 64GB Memory </a>
                                                    </h6>

                                                    <span class="new">$300.00</span>
                                                    <span class="price-old"> <del>$250.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-sm-6">
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html">Samsung Note 5 Pro, 4.5Ghz CPU </a>
                                                    </h6>

                                                    <span class="new">$175.00</span>
                                                    <span class="price-old"> <del>$190.00</del> </span>
                                                </div>
                                                <div class="product__add-btn">
                                                    <button type="button">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__item-wrapper mb-20">
                                            <div class="product__item white-bg" style="  border-radius:15px;">
                                                <div class="product__thumb p-relative">
                                                    <a href="product-details.html" class="w-img">
                                                        <img src="assets/img/shop/product/product-24.jpg" alt="product">
                                                        <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    </a>
                                                    <div class="product__action p-absolute">
                                                        <ul>
                                                            <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                                            <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                                            <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product__content text-center">
                                                    <h6 class="product-name">
                                                        <a class="product-item-link" href="product-details.html"> Samsung Grand 2 2/64GB, with Charger </a>
                                                    </h6>

                                                    <span class="new">$220.00</span>
                                                    <span class="price-old"> <del>$230.00</del> </span>
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
            </div>
        </section>
        <!-- Lifestyle Gadgets area end -->

        <!-- trending product area start -->
        <section class="onsell__area pt-15 pb-35 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Trending<span>Products</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sale__slider owl-carousel">
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/L-1.webp" alt="product">
                                            <img class="second-img" src="assets/img/L-1.webp" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                                        </h6>

                                        <span class="new new-2">KWD 720.00</span>
                                        <span class="price-old"> <del>KWD 800.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/L-2.webp" alt="product">
                                            <img class="second-img" src="assets/img/L-2.webp" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">Portable Watch Phone with Blood Pressure Monitor OLED</a>
                                        </h6>

                                        <span class="new new-2">KWD 90.00</span>
                                        <span class="price-old"> <del>KWD 100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/L-3.webp" alt="product">
                                            <img class="second-img" src="assets/img/L-3.webp" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
                                        </h6>

                                        <span class="new new-2">KWD 150.00</span>
                                        <span class="price-old"> <del>KWD 200.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/L-4.webp" alt="product">
                                            <img class="second-img" src="assets/img/L-4.webp" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">Original Mobile Android Dual SIM Smart Phone G3 </a>
                                        </h6>

                                        <span class="new new-2">KWD 90.00</span>
                                        <span class="price-old"> <del>KWD 100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/L-5.webp" alt="product">
                                            <img class="second-img" src="assets/img/L-5.webp" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">TF Camera Clock Support Bt 4.0 for Ios Android Round Watch </a>
                                        </h6>

                                        <span class="new new-2">KWD 400.00</span>
                                        <span class="price-old"> <del>KWD 100.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/L-6.webp" alt="product">
                                            <img class="second-img" src="assets/img/L-6.webp" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> 24 Inch LCD Monitor with Touch Screen for Computer Display </a>
                                        </h6>

                                        <span class="new new-2">KWD 90.00</span>
                                        <span class="price-old"> <del>KWD 100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">Capacitive Touch Screen 22 Inch Advertising LCD Display Monitor </a>
                                        </h6>

                                        <span class="new new-2">KWD 190.00</span>
                                        <span class="price-old"> <del>KWD 200.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html"> Original Smart Phone for Original for iPhone 6s </a>
                                        </h6>

                                        <span class="new new-2">KWD 250.00</span>
                                        <span class="price-old"> <del>KWD 300.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
                                        </h6>

                                        <span class="new new-2">KWD 150.00</span>
                                        <span class="price-old"> <del>KWD 200.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20" style=" border-radius: 15px;">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="product-details.html" class="w-img">
                                            <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="product-details.html">Original Mobile Android Dual SIM Smart Phone G3 </a>
                                        </h6>

                                        <span class="new new-2">$90.00</span>
                                        <span class="price-old"> <del>$100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending product area end -->

        <section class="promo-section m-4" style="background: url('assets/img/center-banner.jpg') no-repeat center center/cover; padding: 150px; text-align: center; position: relative; border-radius:15px; max-height:300px">

            <div class="promo-content d-none d-md-block">
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


            <div class="promo-content d-block d-md-none"
                style="width: 300%; max-width: 320px; text-align: center; position: relative; left: 50%; transform: translateX(-50%);">
                <h4 style="font-size: 10px; color: #333; font-weight: 600; margin-bottom: 5px; word-wrap: break-word;">
                    EXCLUSIVE DEALS ON ELECTRONICS
                </h4>
                <h1 style="font-size: 16px; font-weight: bold; margin-bottom: 10px; word-wrap: break-word;">
                    Get up to 30% off on mobile gadgets!
                </h1>
                <div class="countdown-timer"
                    style="font-size: 14px; font-weight: 500; display: flex; justify-content: space-around; gap: 10px; margin-bottom: 20px;">
                    <div class="countdown-item" style="flex: 1; text-align: center;">
                        00 <br><span style="font-size: 7px; color: #666;">DAYS</span>
                    </div>
                    <div class="countdown-item" style="flex: 1; text-align: center;">
                        00 <br><span style="font-size: 7px; color: #666;">HOURS</span>
                    </div>
                    <div class="countdown-item" style="flex: 1; text-align: center;">
                        00 <br><span style="font-size: 7px; color: #666;">MINUTES</span>
                    </div>
                    <div class="countdown-item" style="flex: 1; text-align: center;">
                        00 <br><span style="font-size: 7px; color: #666;">SECONDS</span>
                    </div>
                </div>
                <button class="promo-button"
                    style="background-color: #000; color: #fff; padding: 8px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer; width: 100%; max-width: 200px; margin: 0 auto;">
                    SHOP NOW!
                </button>
            </div>


            <!-- Sample decorative mobile images -->
            <div class="promo-images" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: -1; opacity: 0.3;">
                <img src="path/to/electronic-image-1.png" alt="Electronic Device 1" style="position: absolute; top: 20px; left: 30px; width: 150px;">
                <img src="path/to/electronic-image-2.png" alt="Electronic Device 2" style="position: absolute; bottom: 30px; right: 40px; width: 150px;">
            </div>
        </section>




















        <!-- onsale product area start -->

        <!-- onsale product area end -->


        <div class="container my-5">
    <div class="row g-4">
        <!-- Section 1 -->
        <div class="col-md-4">
            <div class="product-list" style="box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);">
                <div class="section-header blue">SAVE UP TO 20% OFF<br>Top selling products</div>
                <!-- Product 1 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-11.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Nescafe gold blend coffee</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 1,300.00 <span class="old-price">Rs. 1,600.00</span></div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-12.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Carnitos nacho crisps</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 600.00 <span class="old-price">Rs. 700.00</span></div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-13.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Organic quinoa flour</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 1,300.00 <span class="old-price">Rs. 1,700.00</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="col-md-4">
            <div class="product-list" style="box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);">
                <div class="section-header green">GET 10% OFF ON ALL<br>Top rated products</div>
                <!-- Product 1 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-11.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Nescafe gold blend coffee</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 1,300.00 <span class="old-price">Rs. 1,600.00</span></div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-12.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Carnitos nacho crisps</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 600.00 <span class="old-price">Rs. 700.00</span></div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-13.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Organic quinoa flour</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 1,300.00 <span class="old-price">Rs. 1,700.00</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="col-md-4">
            <div class="product-list" style="box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);">
                <div class="section-header orange">RECEIVE 20% OFF ON <br>Featured products</div>
                <!-- Product 1 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-11.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Nescafe gold blend coffee</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 1,300.00 <span class="old-price">Rs. 1,600.00</span></div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-12.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Carnitos nacho crisps</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 600.00 <span class="old-price">Rs. 700.00</span></div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="product p-4">
                    <a href="product-details.php">
                        <img src="assets/img/grosery-product-13.webp.jpg" alt="Product Image" class="product-image">
                    </a>
                    <div class="product-details">
                        <div class="product-name">Organic quinoa flour</div>
                        <div class="text-warning">★★★★★</div>
                        <div class="price">KWD 1,300.00 <span class="old-price">Rs. 1,700.00</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








        <section class="unique-latest-deals p-4">
            <div class="section__head section__title p-3 ">
                <h3 class="ml-5">Best<span> in Powerbanks</span></h3>
            </div>
            <div class="unique-deals-grid pt-5">
                <!-- Deal Item 1 -->
                <div class="unique-deal-item">
                    <img src="assets/img/power-5.webp" alt="Monster Energy Drink">
                  
                    <h3 class="unique-deal-title">Monster Energy Zero Ultra, Sugar Free Energy Drink, 16 Fl Oz (Pack of 15)</h3>
                    <p class="unique-deal-price">Price: 10.50 KWD</p>
                </div>
                <!-- Deal Item 2 -->
                <div class="unique-deal-item">
                    <img src="assets/img/power-6.webp" alt="Ring Doorbell">
                  
                    <h3 class="unique-deal-title">Ring Battery Doorbell with Ring Indoor Cam 2nd Gen (Black)</h3>
                    <p class="unique-deal-price">Price: 55.75 KWD</p>
                </div>
                <!-- Promo Banner -->
                <div class="unique-deal-banner">
                    <h3 class="unique-banner-title">Daily Deals</h3>
                    <p class="unique-banner-description">Best Offers from UBUY</p>
                    <p class="unique-banner-code">Get Upto 15% off<br>USE CODE: <strong>UBFIRST</strong></p>
                    <button class="unique-banner-button">Shop Now</button>
                </div>
                <!-- Deal Item 3 -->
                <div class="unique-deal-item">
                    <img src="assets/img/power-1.webp" alt="Makeup Vanity Mirror">
              
                    <h3 class="unique-deal-title">Rechargeable Wall Mounted Lighted Makeup Vanity Mirror</h3>
                    <p class="unique-deal-price">Price: 20.00 KWD</p>
                </div>
                <!-- Deal Item 4 -->
                <div class="unique-deal-item">
                    <img src="assets/img/power-2.webp" alt="Red Light Therapy Mask">
               
                    <h3 class="unique-deal-title">LED Facial Mask, Blue Red Light Therapy with Remote Control</h3>
                    <p class="unique-deal-price">Price: 75.00 KWD</p>
                </div>
                <!-- Deal Item 5 -->
                <div class="unique-deal-item">
                    <img src="assets/img/power-3.webp" alt="Amazon Fire HD Tablet">
              
                    <h3 class="unique-deal-title">Amazon Fire HD 10 tablet (newest model) built for relaxation</h3>
                    <p class="unique-deal-price">Price: 45.00 KWD</p>
                </div>
                <!-- Deal Item 6 -->
                <div class="unique-deal-item">
                    <img src="assets/img/power-4.webp" alt="Amazon Kids Tablet">
         
                    <h3 class="unique-deal-title">Amazon Fire 10 Kids tablet with ad-free content and parental controls</h3>
                    <p class="unique-deal-price">Price: 40.00 KWD</p>
                </div>
                <div class="unique-deal-item">
                    <img src="assets/img/power-6.webp" alt="Ring Doorbell">
               
                    <h3 class="unique-deal-title">Ring Battery Doorbell with Ring Indoor Cam 2nd Gen (Black)</h3>
                    <p class="unique-deal-price">Price: 55.75 KWD</p>
                </div>
            </div>
        </section>


        <section class="unique-latest-deals p-4">
            <div class="section__head section__title p-3">
                <h3 class="ml-5">Mobile cases<span> with your Fashion</span></h3>
            </div>
            <div class="unique-deals-grid pt-5">
                <!-- Promo Banner -->
                <div class="unique-deal-banner">
                    <h3 class="unique-banner-title">Daily Deals</h3>
                    <p class="unique-banner-description">Best Offers from UBUY</p>
                    <p class="unique-banner-code">Get Upto 15% off<br>USE CODE: <strong>UBFIRST</strong></p>
                    <button class="unique-banner-button">Shop Now</button>
                </div>
                <!-- Deal Item 1 -->
                <div class="unique-deal-item">
                    <img src="assets/img/cover-1.webp" alt="Monster Energy Drink">
           
                    <h3 class="unique-deal-title">Monster Energy Zero Ultra, Sugar Free Energy Drink, 16 Fl Oz (Pack of 15)</h3>
                    <p class="unique-deal-price">Price: 10.50 KWD</p>
                </div>
                <!-- Deal Item 2 -->
                <div class="unique-deal-item">
                    <img src="assets/img/cover-2.webp" alt="Ring Doorbell">
               
                    <h3 class="unique-deal-title">Ring Battery Doorbell with Ring Indoor Cam 2nd Gen (Black)</h3>
                    <p class="unique-deal-price">Price: 55.75 KWD</p>
                </div>
                <!-- Deal Item 3 -->
                <div class="unique-deal-item">
                    <img src="assets/img/cover-3.webp" alt="Makeup Vanity Mirror">
                
                    <h3 class="unique-deal-title">Rechargeable Wall Mounted Lighted Makeup Vanity Mirror</h3>
                    <p class="unique-deal-price">Price: 20.00 KWD</p>
                </div>
                <!-- Deal Item 4 -->
                <div class="unique-deal-item">
                    <img src="assets/img/cover-4.webp" alt="Red Light Therapy Mask">
            
                    <h3 class="unique-deal-title">LED Facial Mask, Blue Red Light Therapy with Remote Control</h3>
                    <p class="unique-deal-price">Price: 75.00 KWD</p>
                </div>
                <!-- Deal Item 5 -->
                <div class="unique-deal-item">
                    <img src="assets/img/cover-5.webp" alt="Amazon Fire HD Tablet">
                   
                    <h3 class="unique-deal-title">Amazon Fire HD 10 tablet (newest model) built for relaxation</h3>
                    <p class="unique-deal-price">Price: 45.00 KWD</p>
                </div>
                <!-- Deal Item 6 -->
                <div class="unique-deal-item">
                    <img src="assets/img/cover-6.webp" alt="Amazon Kids Tablet">
                 
                    <h3 class="unique-deal-title">Amazon Fire 10 Kids tablet with ad-free content and parental controls</h3>
                    <p class="unique-deal-price">Price: 40.00 KWD</p>
                </div>
                <!-- Deal Item 7 -->
                <div class="unique-deal-item">
                    <img src="assets/img/cover-6.webp" alt="Amazon Kids Tablet">
            
                    <h3 class="unique-deal-title">Amazon Fire 10 Kids tablet with ad-free content and parental controls</h3>
                    <p class="unique-deal-price">Price: 40.00 KWD</p>
                </div>
            </div>
        </section>













        <!-- banner area start -->
        <!-- <section class="banner__area pb-10 grey-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="product-details.html"><img src="assets/img/banner/banner-6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="product-details.html"><img src="assets/img/banner/banner-7.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="banner__item mb-30 w-img">
                                <a href="product-details.html"><img src="assets/img/banner/banner-8.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        <!-- banner area end -->






        <!-- Recommended area start -->
        <!-- <section class="blog__area pb-40 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Recommended <span>For You</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog__slider owl-carousel">
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/R-1.webp" alt="" style=" border-radius: 15px;">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Curabitur Lobortis News</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 01-Jul-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/R-2.webp" alt="" style=" border-radius: 15px;">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">The Brushed Steel</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 05-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/R-3.webp" alt="" style=" border-radius: 15px;">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Koma and Torus</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 15-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/R-4.webp" alt="" style=" border-radius: 15px;">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Grip and Allows</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 20-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-5.jpg" alt="" style=" border-radius: 15px;">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Pitterarum Formas</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 25-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="blog-details.html">Shelving Burgundy</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 02-Sep-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Recommended area end -->

        <!-- subscribe area start -->
        <!-- <section class="subscribe__area pt-35 pb-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="subscribe__content d-sm-flex align-items-center">
                                <div class="subscribe__icon mr-25">
                                    <img src="assets/img/icon/icon_email.png" alt="">
                                </div>
                                <div class="subscribe__text">
                                    <h4>Sign up to Newsletter</h4>
                                    <p>Get email updates about our latest shop...and receive <span>$30 Coupon For First Shopping</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="subscribe__form f-right">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email here...">
                                    <button class="t-y-btn t-y-btn-sub">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


        <!-- subscribe area end -->

        <!-- free shipping area start -->
        <section class="features__area pt-40 pb-20 pl-10 pr-10">
    <div class="container">
        <div class="row gx-3 gy-3 justify-content-center">
            <!-- Free Shipping -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-auto">
                <div class="features__item d-flex align-items-center white-bg">
                    <div class="features__icon mr-15">
                        <i class="fal fa-rocket-launch"></i>
                    </div>
                    <div class="features__content">
                        <h6>Free Shipping</h6>
                        <p>Free Shipping On All Order</p>
                    </div>
                </div>
            </div>
            <!-- Money Guarantee -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-auto">
                <div class="features__item d-flex align-items-center white-bg">
                    <div class="features__icon mr-15">
                        <i class="fal fa-sync"></i>
                    </div>
                    <div class="features__content">
                        <h6>Money Guarantee</h6>
                        <p>30 Day Money Back Guarantee</p>
                    </div>
                </div>
            </div>
            <!-- Online Support -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-auto">
                <div class="features__item d-flex align-items-center white-bg">
                    <div class="features__icon mr-15">
                        <i class="fal fa-user-headset"></i>
                    </div>
                    <div class="features__content">
                        <h6>Online Support 24/7</h6>
                        <p>Technical Support Stand By</p>
                    </div>
                </div>
            </div>
            <!-- Secure Payment -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-auto">
                <div class="features__item d-flex align-items-center white-bg">
                    <div class="features__icon mr-15">
                        <i class="fal fa-thumbs-up"></i>
                    </div>
                    <div class="features__content">
                        <h6>Secure Payment</h6>
                        <p>All Payment Methods Accepted</p>
                    </div>
                </div>
            </div>
            <!-- Member Discount -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-auto">
                <div class="features__item d-flex align-items-center white-bg">
                    <div class="features__icon mr-15">
                        <i class="fal fa-badge-dollar"></i>
                    </div>
                    <div class="features__content">
                        <h6>Member Discount</h6>
                        <p>Upto 40% Discount On All Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- free shipping area end -->

        <!-- back to top btn area start -->
        <!-- <section class="back-btn-top">
            <div class="container-fluid p-0">
                <div class="row gx-0">
                    <div class="col-xl-12">
                        <div id="scroll" class="back-to-top-btn text-center">
                            <a href="javascript:void(0);">back to top</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- back to top btn area end -->



        <!-- shop modal start -->
        <!-- Shop Modal -->
        <div class="modal fade" id="productModalId" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="product__modal-wrapper position-relative">
                        <!-- Close Button -->
                        <div class="product__modal-close position-absolute top-0 end-0 p-3">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="product__modal-inner">
                            <div class="row">
                                <!-- Product Images Column - Reordered for responsiveness -->
                                <div class="col-12 col-md-6 order-md-1">
                                    <div class="product__modal-box">
                                        <!-- Tab Content for Main Images -->
                                        <div class="tab-content" id="modalTabContent">
                                            <div class="tab-pane fade show active" id="nav1" role="tabpanel">
                                                <div class="product__modal-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-1.jpg" alt="Product Image 1" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav2" role="tabpanel">
                                                <div class="product__modal-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-2.jpg" alt="Product Image 2" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav3" role="tabpanel">
                                                <div class="product__modal-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-3.jpg" alt="Product Image 3" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav4" role="tabpanel">
                                                <div class="product__modal-img">
                                                    <img src="assets/img/shop/product/quick-view/quick-view-4.jpg" alt="Product Image 4" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Navigation Thumbnails -->
                                        <ul class="nav nav-tabs mt-3 justify-content-center" id="modalTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav1">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-1.jpg" alt="Thumbnail 1" class="img-thumbnail">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav2">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-2.jpg" alt="Thumbnail 2" class="img-thumbnail">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav3">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-3.jpg" alt="Thumbnail 3" class="img-thumbnail">
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav4">
                                                    <img src="assets/img/shop/product/quick-view/nav/quick-nav-4.jpg" alt="Thumbnail 4" class="img-thumbnail">
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Product Details Column - Reordered for responsiveness -->
                                <div class="col-12 col-md-6 order-md-2">
                                    <div class="product__modal-content p-3">
                                        <h4 class="mb-3"><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>

                                        <div class="product__modal-des mb-3">
                                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt</p>
                                        </div>

                                        <div class="product__stock mb-2">
                                            <span class="fw-bold">Availability:</span>
                                            <span class="text-success">In Stock</span>
                                        </div>

                                        <div class="product__stock sku mb-3">
                                            <span class="fw-bold">SKU:</span>
                                            <span>Samsung C49J89: £875, Debenhams Plus</span>
                                        </div>

                                        <div class="product__review d-flex align-items-center mb-3">
                                            <div class="rating me-3">
                                                <ul class="d-flex">
                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                    <li><i class="fas fa-star text-warning"></i></li>
                                                </ul>
                                            </div>
                                            <div class="product__add-review">
                                                <a href="#" class="me-2">1 Review</a>
                                                <a href="#">Add Review</a>
                                            </div>
                                        </div>

                                        <div class="product__price mb-3">
                                            <span class="h4 text-primary">$560.00</span>
                                        </div>

                                        <div class="product__modal-form mb-3">
                                            <form action="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <input type="number" class="form-control" value="1" min="1" style="width: 80px;">
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-primary" type="submit">Add to cart</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="product__modal-links">
                                            <ul class="d-flex">
                                                <li><a href="#" title="Add to Wishlist" class="text-decoration-none"><i class="far fa-heart"></i> Wishlist</a></li>
                                                <li><a href="#" title="Print" class="text-decoration-none"><i class="fas fa-print"></i> Print</a></li>
                                                <li><a href="#" title="Share" class="text-decoration-none"><i class="fas fa-share-alt"></i> Share</a></li>
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
    <script>
        // Select all custom rows
        const customRows = document.querySelectorAll('.custom-row');

        function infiniteScroll(row, speed) {
            const content = row.querySelector('.custom-row-content');
            const contentWidth = content.offsetWidth;
            const rowWidth = row.offsetWidth;

            // Duplicate the content enough times to cover the visible area + buffer
            const requiredCopies = Math.ceil(rowWidth / contentWidth) + 1;

            for (let i = 0; i < requiredCopies; i++) {
                const clone = content.cloneNode(true);
                row.appendChild(clone);
            }

            let position = 0;

            function animate() {
                position += speed;

                // Reset position for seamless scrolling
                if (speed > 0 && position >= contentWidth) {
                    position = position - contentWidth;
                } else if (speed < 0 && position <= -contentWidth) {
                    position = position + contentWidth;
                }

                row.style.transform = `translateX(${position}px)`;

                // Request the next frame
                requestAnimationFrame(animate);
            }

            // Start the animation
            animate();
        }

        // Apply infinite scrolling to each row with specified speeds
        infiniteScroll(customRows[0], 1); // Row 1 scrolls right
        infiniteScroll(customRows[1], -1); // Row 2 scrolls left
        infiniteScroll(customRows[2], 1); // Row 3 scrolls right
    </script>


<script>
    // Image Array
    const images = [
        "assets/img/hero-1.jpg",
        "assets/img/hero-2.jpg",
        "assets/img/hero-1.1.jpg"
    ];

    let currentImageIndex = 0;
    const carouselElement = document.querySelector("#carousel .carousel-image");

    // Function to change image
    function changeImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        carouselElement.src = images[currentImageIndex];
    }

    // Automatically change image every 3 seconds
    setInterval(changeImage, 3000);
</script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('storyModal');
            const closeModal = document.getElementById('closeModal');
            const storyVideo = document.getElementById('storyVideo');
            const progressBar = document.getElementById('progressBar');
            const playPause = document.getElementById('playPause');
            const toggleSound = document.getElementById('toggleSound');
            const productLink = document.getElementById('productLink');
            const productTitle = document.querySelector('.product-title');
            const productDescription = document.querySelector('.product-description');
            const categoryItems = document.querySelectorAll('.category-item');

            let playing = true; // Track play/pause state
            let muted = true; // Track sound state

            // Play/Pause toggle
            playPause.addEventListener('click', () => {
                if (playing) {
                    storyVideo.pause();
                    playPause.innerHTML = '&#9658;'; // Play icon
                } else {
                    storyVideo.play();
                    playPause.innerHTML = '&#10074;&#10074;'; // Pause icon
                }
                playing = !playing;
            });

            // Mute/Unmute toggle
            toggleSound.addEventListener('click', () => {
                storyVideo.muted = !storyVideo.muted;
                toggleSound.innerHTML = storyVideo.muted ? '&#128263;' : '&#128266;'; // Update icon
            });

            // Update progress bar
            storyVideo.addEventListener('timeupdate', () => {
                const progress = (storyVideo.currentTime / storyVideo.duration) * 100;
                progressBar.style.width = progress + '%';
            });

            // Open modal and set content
            categoryItems.forEach((item) => {
                item.addEventListener('click', () => {
                    const videoSrc = item.getAttribute('data-video');
                    const link = item.getAttribute('data-link');
                    const title = item.querySelector('.category-title').textContent;

                    storyVideo.src = videoSrc; // Set video source
                    productTitle.textContent = title; // Set product title
                    productDescription.textContent = 'A short description of ' + title; // Dynamic description
                    productLink.href = link; // Set product link

                    modal.classList.add('show'); // Show modal
                    storyVideo.play(); // Auto play video
                    storyVideo.muted = muted; // Maintain mute state
                    playing = true;
                    playPause.innerHTML = '&#10074;&#10074;'; // Update play/pause icon
                    toggleSound.innerHTML = muted ? '&#128263;' : '&#128266;'; // Update sound icon
                });
            });

            // Close modal
            closeModal.addEventListener('click', () => {
                modal.classList.remove('show');
                storyVideo.pause();
                storyVideo.currentTime = 0; // Reset video
            });
        });
    </script>

    <script>
        function scrollLeft() {
            const categoryRow = document.getElementById("categoryRow");
            categoryRow.scrollBy({
                left: -200,
                behavior: "smooth"
            });
        }

        function scrollRight() {
            const categoryRow = document.getElementById("categoryRow");
            categoryRow.scrollBy({
                left: 200,
                behavior: "smooth"
            });
        }
    </script>





</body>

</html>