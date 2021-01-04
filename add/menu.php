<?
    $menuAsosi = '<li class="drop"><a href="index.html">Асоси</a></li>';
    $menuPortfolio = '
            <li class="drop"><a href="portfolio-card-box-2.html">Суратхо</a>
                <ul class="dropdown ul_menu">
                    <li><a href="portfolio-card-box-2.html">Сурат 1</a></li>
                    <li><a href="single-portfolio.html">Сурат 2</a></li>
                </ul>
            </li>
        ';
    $menuPages = '
            <li class="drop"><a href="#">pages</a>
                <ul class="dropdown ul_menu" >
                    <li><a href="about.html">about</a></li>
                    <li><a href="#">testimonials <span><i class="zmdi zmdi-chevron-right"></i></span></a>
                        <ul class="lavel-dropdown ul_menu">
                            <li><a href="customer-review.html">customer review</a></li>
                        </ul>
                    </li>
                    <li><a href="shop.html">shop</a></li>
                    <li><a href="shop-sidebar.html">shop sidebar</a></li>
                    <li><a href="product-details.html">product details</a></li>
                    <li><a href="cart.html">cart</a></li>
                    <li><a href="wishlist.html">wishlist</a></li>
                    <li><a href="checkout.html">checkout</a></li>
                    <li><a href="team.html">team</a></li>
                    <li><a href="login-register.html">login & register</a></li>
                </ul>
            </li>';
    $menuContact = '<li class="drop"><a href="contact.html">Контакт</a></li>';
    $menuBlog = '<li class="drop"><a href="blog.html">Блог</a>
                    <ul class="dropdown ul_menu">
                        <li><a href="blog.html">blog 3 column</a></li>
                        <li><a href="blog-details.html">Blog details</a></li>
                    </ul>
                </li>';


/*
    ===================================
        SHOP
    ===================================
*/
    $allShop = [
        'menuTop' =>
            '<a href="shop.html">Аксесуар</a>',
        'cat_1' =>
            '<a class="mega__title" href="shop.html">Маниторҳо</a>',
        'cat_2' =>
            '<a href="shop.html">Наушник</a>',
        'AllHref_1' =>
            '<a href="shop.html">LG</a>',
        'AllHref_2' =>
            '<a href="shop.html">LG</a>',
        'AllHref_3' =>
            '<a href="shop.html">LG</a>',
        'AllHref_4' =>
            '<a href="shop.html">LG</a>',
        'AllHref_5' =>
            '<a href="shop.html">LG</a>',
        'AllHref_6' =>
            '<a href="shop.html">LG</a>',

    ];




?>




<!--
    ===================================
        Main menu
    ===================================
 -->
<div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
    <nav class="mainmenu__nav hidden-xs hidden-sm">
        <ul class="main__menu">
            <?=$menuAsosi?>
            <?=$menuPortfolio?>
            <?=$menuBlog?>

            <li class="drop"> <?=$allShop['menuTop']?>
                <ul class="dropdown mega_dropdown" class="ul_menu">
                    <!-- Start Single Mega MEnu -->
                    <li>
                        <?=$allShop['cat_1']?>
                        <ul class="mega__item" >
                            <li><?=$allShop['AllHref_1']?></li>
                            <li><?=$allShop['AllHref_2']?></li>
                            <li><?=$allShop['AllHref_3']?></li>

                        </ul>
                    </li>
                    <!-- End Single Mega MEnu -->
                    <!-- Start Single Mega MEnu -->
                    <li>
                        <?=$allShop['cat_2']?>
                        <ul class="mega__item">
                            <li><?=$allShop['AllHref_4']?></li>
                            <li><?=$allShop['AllHref_5']?></li>
                            <li><?=$allShop['AllHref_6']?></li>

                        </ul>
                    </li>

                    <!-- End Single Mega MEnu -->
                    <!-- Start Single Mega MEnu -->
                    <li>
                        <ul class="mega__item">
                            <li>
                                <div class="mega-item-img">
                                    <a href="shop.html">
                                        <img src="public/images/feature-img/3.png" alt="">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- End Single Mega MEnu -->
                </ul>
            </li> <!-- End Shop -->

            <?=$menuPages?>
            <?=$menuContact?>
        </ul>
    </nav>




<!--
    ===================================
        Mobile menu
    ===================================
 -->
    <div class="mobile-menu clearfix visible-xs visible-sm">
        <nav id="mobile_dropdown">
            <ul>

                <?=$menuAsosi?>
                <?=$menuPortfolio?>

                <li  class="drop"><?=$allShop['menuTop']?>
                    <ul class=" dropdown ul_menu">
                        <li><?=$allShop['cat_1']?>
                            <ul class="dropdown ul_menu">
                                <li><?=$allShop['AllHref_1']?></li>
                                <li><?=$allShop['AllHref_2']?></li>
                                <li><?=$allShop['AllHref_3']?></li>
                            </ul>
                        </li>
                        <li><?=$allShop['cat_2']?>
                            <ul class="dropdown ul_menu">
                                <li><?=$allShop['AllHref_4']?></li>
                                <li><?=$allShop['AllHref_5']?></li>
                                <li><?=$allShop['AllHref_6']?></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <?=$menuPages?>
                <?=$menuContact?>
            </ul>
        </nav>
    </div> <!-- End <div class="mobile-menu clearfix visible-xs visible-sm"> -->



</div> <!--  End <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6"> -->