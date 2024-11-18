<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
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
            
            <!-- contact map area start -->
            <section class="contact__area">
                <div class="container-fluid p-0">
                    <div class="row gx-0">
                        <div class="col-xxl-12">
                            <div class="contact__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.00977788454!2d90.34928580896482!3d23.780777744508946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1639716493055!5m2!1sbn!2sbd" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact map area end -->

            <!-- contact area start -->
            <section class="contact__area box-plr-90 pt-55 pb-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-5">
                            <div class="contact__info">
                                <h3 class="contact__title">Our Main Office.</h3>
                                <p class="contact__text">Topico is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>

                                <div class="contact__hotline d-flex align-items-center mb-35">
                                    <div class="contact__hotline-icon mr-20">
                                        <i class="fal fa-headset"></i>
                                    </div>
                                    <div class="contact__hotline-info">
                                        <span>Hotline Free 24/7:</span>
                                        <h6><a href="tel:06-900-6789-00">(+100) 123 456 7890</a></h6>
                                    </div>
                                </div>
                                <div class="contact__address mb-20">
                                    <ul>
                                        <li>
                                            <p><span>Add:</span> 1234 Heaven Stress, Beverly Hill, Melbourne, USA.</p>
                                        </li>
                                        <li>
                                            <p><span>Email:</span>info@thebuesky.com</p>
                                        </li>
                                        <li>
                                            <p><span>Fax:</span><a href="tel:06-900-6789-00">(+100) 123 456 7890</a> - <a href="tel:06-900-6789-00">(+100) 123 456 7891</a></p>
                                        </li>
                                        <li>
                                            <p><span>Business Phone: </span><a href="tel:06-900-6789-00">(+100) 123 456 7890</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact__social">
                                    <span>Social Share:</span>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fal fa-basketball-ball"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-7">
                            <div class="contact__form">
                                <h3 class="contact__title">Our Main Office.</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact__input">
                                                <span>Name</span>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact__input">
                                                <span>Email</span>
                                                <input type="email">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__input">
                                                <span>Phone Number</span>
                                                <input type="tel">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__input">
                                                <span>What’s on your mind?</span>
                                                <textarea></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="contact__btn">
                                                <button type="submit" class="t-y-btn">send message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact area end -->

            <!-- brand area start -->
            <section class="brand__area">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                        <div class="brand__slider owl-carousel">
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-1.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-2.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-3.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-4.jpg" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- brand area end -->

 
        </main>

        <?php include('fragments/footer.php'); ?>

        <!-- JS here -->
        <?php include('fragments/js.php'); ?>
    </body>
</html>
