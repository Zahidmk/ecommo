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
                    <img src="assets/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-2 fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

        <main>
            
            <!-- breadcrumb area start -->
            <section class="breadcrumb__area box-plr-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Login</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- login Area Strat-->
            <section class="login-area pb-100">
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                            <div class="basic-login">
                            <h3 class="text-center mb-60">Login From Here</h3>
                            <form action="#">
                                <label for="name">Email Address <span>**</span></label>
                                <input id="name" type="text" placeholder="Email address..." />
                                <label for="pass">Password <span>**</span></label>
                                <input id="pass" type="password" placeholder="Enter password..." />
                                <div class="login-action mb-20 fix">
                                        <span class="log-rem f-left">
                                        <input id="remember" type="checkbox" />
                                        <label for="remember">Remember me!</label>
                                        </span>
                                        <span class="forgot-login f-right">
                                        <a href="#">Lost your password?</a>
                                        </span>
                                </div>
                                <button class="t-y-btn w-100">Login Now</button>
                                <div class="or-divide"><span>or</span></div>
                                <a href="register.html" class="t-y-btn t-y-btn-grey w-100">Register Now</a>
                            </form>
                            </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- login Area End-->
 
        </main>

        <?php include('fragments/footer.php'); ?>

        <!-- JS here -->
        <?php include('fragments/js.php'); ?>
    </body>
</html>
