<!DOCTYPE html>
<html lang="en">
<head>
<title>Little Closet</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="./styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="./styles/responsive.css">
<link rel="stylesheet" type="text/css" href="./styles/cart.css">
<link rel="stylesheet" type="text/css" href="./styles/cart_responsive.css">
</head>
<body>

<!-- Menu -->

<!-- Search, Navigation, Contact Info -->

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="#">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="./images/logo_1.png" alt=""></div>
                        <div>Little Closet</div>
                    </div>
                </a>    
            </div>

            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">

                <!-- Cart -->
                <div class="cart"><a href="checkout.php"><div><img class="svg" src="./images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
                <!-- Phone -->
                <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                    <div><div><img src="./images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                    <div>+380731111111</div>
                </div>
            </div>

        </div>
    </header>

        <div class="cart_section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cart_container">
                            
                            <!-- Cart Items -->
                            <div class="cart_items">
                                <ul class="cart_items_list">

                                    <!-- Cart Item -->
                                    <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start" style="width: 50%;">
                                        <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                            <div><div class="product_image"><img src="./images/product_1.jpg" alt=""></div></div>
                                            <div class="product_name_container">
                                                <div class="product_name"><a href="#">Cool Flufy Clothing without Stripes</a></div>
                                                <div class="product_text">Second line for additional info</div>
                                            </div>
                                        </div>
                                        <div class="product_price product_text">5.99</div>
                                    </li>
                                    <hr>
                                   <!-- Cart Item -->

                                </ul>
                            </div>
                            <!-- Cart Buttons -->
                            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                                <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <div class="button button_clear trans_200"><a href="#">clear</a></div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>                  

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">
                        
                        <!-- About -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo">
                                    <a href="#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_logo_icon"><img src="./images/logo_2.png" alt=""></div>
                                            <div>Little Closet</div>
                                        </div>
                                    </a>        
                                </div>
                                <div class="footer_about_text" style="text-align: justify;">
                                    <p>Little Closet - небольшой магазин стильный и универсальных вещей на каждый день. Мы позаботились о том, чтобы любой наш покупатель остался доволен нашими ценамами, качеством товаров и сервисом обслуживания.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Links -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Оставайтесь на связи</div>
                                <div class="newsletter">
                                    <form action="" method="" id="newsletter_form" class="newsletter_form">
                                        <input type="text" name="newsletter_input_message" class="newsletter_input message" placeholder="Ваше сообщение">
                                        <input type="text" name="newsletter_input_email" class="newsletter_input email" placeholder="Ваш контакт(email, skype,...)">
                                        <br>
                                        <button type="button" class="newsletter_button">></button><br>
                                        <span class="result_to_email">&nbsp;</span>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_contact">
                                    <div class="footer_title">Social</div>
                                    <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                <div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">WEB-STUDIO "25one"</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
        
</div>

<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./styles/bootstrap-4.1.2/popper.js"></script>
<script src="./styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="./plugins/greensock/TweenMax.min.js"></script>
<script src="./plugins/greensock/TimelineMax.min.js"></script>
<script src="./plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./plugins/greensock/animation.gsap.min.js"></script>
<script src="./plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="./plugins/easing/easing.js"></script>
<script src="./plugins/progressbar/progressbar.min.js"></script>
<script src="./plugins/parallax-js-master/parallax.min.js"></script>
<script src="./js/custom.js"></script>
<script src="./js/main.js"></script>
</body>
</html>