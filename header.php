<?php
if ( !function_exists( 'WC' ) ) {
    wp_die( sprintf( __( 'Please install <a href="%s"><strong>WooCommerce</strong></a> plugin first', 'dokan' ), 'http://wordpress.org/plugins/woocommerce/' ) );
}
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package dokan
 * @package dokan - 2014 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'dokan' ), max( $paged, $page ) );

        ?></title>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <noscript>
            <link rel="stylesheet" type="text/css" href="<?php print THEMEROOT ?>/assets/css/noscript.css" />
        </noscript>

        <?php wp_head(); ?>
    </head>
    <body class="woocommerce">
        <header>
            <!-- HEADER TOP CONTAINER -->
            <div class="header-top-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="left-header-top-content col-md-6">
                            <div class="header-top-text">24/7 Customer Support (01) 123 456 YOUR STORE</div>
                        </div>
                    </div><!-- end .row -->
                </div><!-- end .container -->
            </div><!-- end .header-top-wrapper -->

            <!-- HEADER MIDDLE WRAPPER -->
            <div class="header-middle-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="logo heading-title"><a href="#"><img src="assets/images/logo.png" alt="Dokan"></a></h1>

                            <div class="header-woo-content">
                                <div class="header-bottom-wishlist selector">
                                                                    
                                    <div class="wc-tini-account-wrapper ">
                                        <div class="wc-tini-account-control ">
                                    
                                            <a href="#" title="My Account" class="test"><span>Login / Register</span></a>    
                                        </div>
                                        
                                        <div class="form_drop_down drop-down-container ">
                                            <div class="form-wrapper">              
                                                <div class="form-wrapper-body">
                                                    <form name="loginform-custom" id="loginform-custom" action="#" method="post">
                                                        <p class="login-username">
                                                            <label for="user-login">Username</label>
                                                            <input type="text" name="log" id="user-login" class="input" value="" size="20">
                                                        </p>
                                                        <p class="login-password">
                                                            <label for="user_pass">Password</label>
                                                            <input type="password" name="pwd" id="user-pass" class="input" value="" size="20">
                                                        </p>
                                                        <p class="login-submit">
                                                            <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Login">
                                                        </p>
                                                    </form>
                                                </div>

                                                <div class="form_wrapper_footer">
                                                    or New to Dokan?<span><a class="button" href="#">Register</a></span>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div><!-- end .header-bottom-wishlist -->
                                
                                <div class="shopping-cart shopping-cart-wrapper selector">
                                    <div class="wc-tini-cart-wrapper">
                                        <ul class="cart-list list-unstyled">
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php printf( __( 'Cart %s', 'dokan' ), '<span class="dokan-cart-amount-top">(' . WC()->cart->get_cart_total() . ')</span>' ); ?> <b class="caret"></b></a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="widget_shopping_cart_content"></div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end .header-woo-content -->
                            
                            <div class="header-search">
                                <form role="search" method="get" id="searchform" action="#">

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                          All Categories
                                          <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Cameras &amp; Camcorders</a></li>
                                            <li><a href="#">Computers &amp; Laptops</a></li>
                                            <li><a href="#">Game &amp; Toys</a></li>
                                            <li><a href="#">Gaming &amp; Consoles</a></li>
                                            <li><a href="#">Home Entertainment</a></li>
                                            <li><a href="#">Smartphones &amp; Tablets</a></li>
                                            <li><a href="#">Televisions</a></li>
                                        </ul>
                                    </div>
            
                                     <div class="wc-search-form">
                                         <label class="screen-reader-text" for="s">Search for:</label>
                                         <input type="text" value="" name="s" id="s" placeholder="Search for products" />
                                         <input type="submit" title="Search" id="searchsubmit" value="Search" />
                                     </div>
                                </form>
                                 <?php // dynamic_sidebar( 'sidebar-header' ) ?>
                            </div><!-- end .header-search -->
                        </div><!-- end .col-md-12 -->
                    </div><!-- end .header-middle-wrapper -->
                </div><!-- end .row -->
            </div><!-- end .container -->

            <!-- HEADER BOTTOM -->
            <div class="header-bottom-wrapper">
                <div class="container">
                    <div class="row">

                        <!-- VERTICAL MENU -->
                        <div class="vertical-menu col-md-3">
                            <div class="cat-shop">Select Shop By Category  <span class="caret pull-right"></span> </div>
                            
                            <!-- Mega Menu -->
                            <div class="mega-menu-wrapper">
                                <aside id="#" class="widget dokan-category-menu">
                                    <?php dokan_category_widget(); ?>
                               </aside>

                            </div><!-- end .mega-menu-wrapper -->
                        </div><!-- end .vertical-menu -->



                        
                        
                        <!-- MAIN MENU -->
                        <div class="main-menu col-md-9">
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'top-left',
                                    'depth'             => 0,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse navbar-top-collapse',
                                    'menu_class'        => 'sf-menu',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                );
                            ?>
                        </div><!-- end .main-menu -->

                    </div><!-- end .row -->
                </div><!-- end .container -->
            </div><!-- end .header-bottom-wrapper -->

        </header>


        <div class="breadcrumb-wrapper container">
            <?php do_action( 'dokan_child_after_header' ); ?>
        </div><!-- end .breadcrumb-wrapper -->