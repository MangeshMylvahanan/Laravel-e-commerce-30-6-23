<header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
        <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Start Header Logo -->
                        <div class="header-logo">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo/main_logo.jpg" alt=""></a>
                            </div>
                        </div>
                        <!-- End Header Logo -->

                        <!-- Start Header Main Menu -->
                        <div class="main-menu menu-color--black menu-hover-color--golden">
                            <nav>
                                <ul>
                                    <li class="">
                                        <a class="active main-menu-link" href="/">Home <i
                                                class=""></i></a>
                                    </li>
                                    <li class="has-dropdown has-item">
                                        <a href="/shop">Shop <i
                                                class="fa fa-angle-down"></i></a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <ul class="mega-menu-inner">
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Catagories</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="product-details-default.html">Mens</a></li>
                                                        <li><a href="product-details-variable.html">Womens</a></li>
                                                        <li><a href="product-details-affiliate.html">Babies</a></li>
                                                        <li><a href="product-details-group.html">All</a></li>
                                                        
                                                    </ul>
                                                </li>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <?php if(Session::has('user')): ?>
                                    <li class="has-dropdown">
                                        <a href="#"><?php echo e(Session::get('user')['name']); ?><i class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <ul class="sub-menu">
                                            <li><a href="/logout">Logout</a></li>
                                            <li><a href="#">My account</a></li>
                                        </ul>
                                    </li>
                                    <?php else: ?>
                                    <li class="has-dropdown">
                                        <a href="#">Profile<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="/login">Login</a></li>
                                            <li><a href="/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- End Header Main Menu Start -->

                        <!-- Start Header Action Link -->
                        <ul class="header-action-link action-color--black action-hover-color--golden">
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="item-count"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-bag"></i>
                                    <span class="item-count"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#search">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Header Action Link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH C:\Users\Mangesh Mylvahanan\Laravel\Template\resources\views/Includes/header.blade.php ENDPATH**/ ?>