@extends('appLayout.app')
@section('body_class')
    home page-template page-template-template-homepage-v3 full-color-background
    @endsection()
@section('header')
    @include('appLayout.header')
    @endsection
@section('content')
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="home-v3-slider" >
                <!-- ========================================== SECTION – HERO : END========================================= -->

                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                    <div class="item" style="background-image: url(images/slider/banner-3.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="caption vertical-center text-left">
                                        <div class="hero-subtitle-v2 fadeInDown-1">
                                            shop to get what you loves
                                        </div>

                                        <div class="hero-2 fadeInDown-2">
                                            Timepieces that make a statement up to <strong>40% Off</strong>
                                        </div>

                                        <div class="hero-action-btn fadeInDown-3">
                                            <a href="single-product.html" class="big le-button ">Start Buying</a>
                                        </div>
                                    </div><!-- /.caption -->
                                </div><!-- /.col -->
                            </div>
                        </div><!-- /.container -->
                    </div><!-- /.item -->

                    <div class="item" style="background-image: url(images/slider/banner-1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="caption vertical-center text-left">
                                        <div class="hero-subtitle-v2 fadeInDown-1">
                                            shop to get what you loves
                                        </div>

                                        <div class="hero-2 fadeInDown-2">
                                            Timepieces that make a statement up to <strong>40% Off</strong>
                                        </div>

                                        <div class="hero-action-btn fadeInDown-3">
                                            <a href="single-product.html" class="big le-button ">Start Buying</a>
                                        </div>
                                    </div><!-- /.caption -->
                                </div>
                            </div>
                        </div><!-- /.container -->
                    </div><!-- /.item -->

                    <div class="item" style="background-image: url(images/slider/banner-2.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="caption vertical-center text-left">
                                        <div class="hero-subtitle-v2 fadeInDown-1">
                                            shop to get what you loves
                                        </div>

                                        <div class="hero-2 fadeInDown-2">
                                            Timepieces that make a statement up to <strong>40% Off</strong>
                                        </div>

                                        <div class="hero-action-btn fadeInDown-3">
                                            <a href="single-product.html" class="big le-button ">Start Buying</a>
                                        </div>
                                    </div><!-- /.caption -->
                                </div>
                            </div>
                        </div><!-- /.container -->
                    </div><!-- /.item -->


                </div><!-- /.owl-carousel -->

                <!-- ========================================= SECTION – HERO : END ========================================= -->


            </div><!-- /.home-v1-slider -->
            <div class="home-v3-features-block animate-in-view fadeIn animated" data-animation="fadeIn">
                <div class="features-list columns-5">
                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-transport"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>Free Delivery</strong> from $50
                            </div>
                        </div>
                    </div><!-- .feature -->

                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-customers"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>99% Positive</strong> Feedbacks
                            </div>
                        </div>
                    </div><!-- .feature -->

                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-returning"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>365 days</strong> for free return
                            </div>
                        </div>
                    </div><!-- .feature -->

                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-payment"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>Payment</strong> Secure System
                            </div>
                        </div>
                    </div><!-- .feature -->

                    <div class="feature">
                        <div class="media">
                            <div class="media-left media-middle feature-icon">
                                <i class="ec ec-tag"></i>
                            </div>
                            <div class="media-body media-middle feature-text">
                                <strong>Only Best</strong> Brands
                            </div>
                        </div>
                    </div><!-- .feature -->
                </div><!-- .features-list -->
            </div><!-- .home-v3-features-block -->
            <div class="home-v3-ads-block animate-in-view fadeIn animated" data-animation=" animated fadeIn">
                <div class="ads-block row">
                    <div class="ad col-xs-12 col-sm-6">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img data-echo="images/banner/cameras.jpg" src="images/blank.gif" alt="">
                            </div>
                            <div class="media-body media-middle">
                                <div class="ad-text">
                                    Catch Hottest <strong>Deals</strong> in Cameras Category
                                </div>
                                <div class="ad-action">
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->

                    <div class="ad col-xs-12 col-sm-6">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img data-echo="images/banner/DesktopPC.jpg" src="images/blank.gif" alt="">
                            </div>
                            <div class="media-body media-middle">
                                <div class="ad-text">
                                    Tablets, Smartphones <br><strong>and more</strong>
                                </div>
                                <div class="ad-action">
                                    <a href="#"><span class="from"><span class="prefix">From</span><span class="value"><sup>$</sup>749</span><span class="suffix">99</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.home-v3-ads-block -->
            <section class="products-carousel-tabs animate-in-view fadeIn animated" data-animation="fadeIn">
                <h2 class="sr-only">Product Carousel Tabs</h2>
                <ul class="nav nav-inline text-xs-left">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tab-products-2" data-toggle="tab">On Sale</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tab-products-3" data-toggle="tab">Top Rated</a>
                    </li>
                </ul><!-- /.nav -->

                <div class="tab-content">
                    <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                        <section class="section-products-carousel" >
                            <div class="home-v3-owl-carousel-tabs">
                                <div class="woocommerce columns-4">


                                    <div class="products owl-carousel home-carousel-tabs products-carousel columns-4">


                                        <div class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Wireless Audio System Multiroom 360</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/3.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/1.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Purple Solo 2 Wireless</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/5.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/2.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>White Solo 2 Wireless</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/6.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Smartphone 6S 32GB LTE</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/4.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->
                                    </div><!-- /.products -->
                                </div>
                            </div>
                        </section>
                    </div><!-- /.tab-pane -->

                    <div class="tab-pane" id="tab-products-2" role="tabpanel">
                        <section class="section-products-carousel">
                            <div class="home-v3-owl-carousel-tabs">
                                <div class="woocommerce columns-4">


                                    <div class="products owl-carousel home-carousel-tabs products-carousel columns-4">


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Wireless Audio System Multiroom 360</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/3.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/1.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Purple Solo 2 Wireless</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/5.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/2.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>White Solo 2 Wireless</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/6.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Smartphone 6S 32GB LTE</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/4.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->
                                    </div><!-- /.products -->
                                </div>
                            </div>
                        </section>
                    </div><!-- /.tab-pane -->

                    <div class="tab-pane" id="tab-products-3" role="tabpanel">
                        <section class="section-products-carousel">
                            <div class="home-v3-owl-carousel-tabs">
                                <div class="woocommerce columns-4">


                                    <div class="products owl-carousel home-carousel-tabs products-carousel columns-4">


                                        <div class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Wireless Audio System Multiroom 360</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/3.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/1.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Purple Solo 2 Wireless</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/5.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product last">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/2.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>White Solo 2 Wireless</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/6.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->


                                        <div class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Smartphone 6S 32GB LTE</h3>
                                                        <div class="product-thumbnail">
                                                            <img src="images/blank.gif" data-echo="images/products/4.jpg" class="img-responsive" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                            <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </div><!-- /.product -->
                                    </div><!-- /.products -->

                                </div>
                            </div>
                        </section>
                    </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
            </section><!-- /.products-carousel-tabs -->
            <section class="products-carousel-with-image animate-in-view fadeIn animated" style="background-size: cover; background-position: center center; background-image: url( images/home-v3-bg.jpg );" data-animation="fadeIn">
                <h2 class="sr-only">Products Carousel</h2>
                <div class="container">
                    <div class="row">
                        <div class="image-block col-xs-12 col-sm-6">
                            <img data-echo="images/ad-banner-3.png" src="images/blank.gif" alt="">
                        </div><!-- /.image-block -->

                        <div class="products-carousel-block col-xs-12 col-sm-6">
                            <section class="home-v2-categories-products-carousel section-products-carousel" >

                                <header>
                                    <h2 class="h1">Home Entertainment</h2>
                                    <div class="owl-nav">
                                        <a href="#products-carousel-prev" data-target="#products-carousel-with-umage" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                        <a href="#products-carousel-next" data-target="#products-carousel-with-umage" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                    </div>

                                </header>

                                <div id="products-carousel-with-umage">
                                    <div class="woocommerce columns-4">


                                        <div class="products owl-carousel home-carousel-tabs products-carousel columns-4">


                                            <div class="product ">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                        <a href="single-product.html">
                                                            <h3>Wireless Audio System Multiroom 360</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="images/blank.gif" data-echo="images/products/3.jpg" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                                                                    <del><span class="amount">$2,299.00</span></del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                            </span>
                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.product -->


                                            <div class="product last">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                        <a href="single-product.html">
                                                            <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="images/blank.gif" data-echo="images/products/1.jpg" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount"> </span></ins>
                                                                                    <span class="amount"> $1,999.00</span>
                                                                                </span>
                                                                            </span>
                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.product -->


                                            <div class="product first">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                        <a href="single-product.html">
                                                            <h3>Purple Solo 2 Wireless</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="images/blank.gif" data-echo="images/products/5.jpg" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                                                                    <del><span class="amount">$2,299.00</span></del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                            </span>
                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.product -->


                                            <div class="product ">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Laptops</a></span>
                                                        <a href="single-product.html">
                                                            <h3>Tablet Red EliteBook  Revolve 810 G2</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="images/blank.gif" data-echo="images/products/2.jpg" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount"> </span></ins>
                                                                                    <span class="amount"> $1,999.00</span>
                                                                                </span>
                                                                            </span>
                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.product -->


                                            <div class="product ">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Headphones</a></span>
                                                        <a href="single-product.html">
                                                            <h3>White Solo 2 Wireless</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="images/blank.gif" data-echo="images/products/6.jpg" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                                                                    <del><span class="amount">$2,299.00</span></del>
                                                                                    <span class="amount"> </span>
                                                                                </span>
                                                                            </span>
                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.product -->


                                            <div class="product last">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                        <a href="single-product.html">
                                                            <h3>Smartphone 6S 32GB LTE</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="images/blank.gif" data-echo="images/products/4.jpg" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount"> </span></ins>
                                                                                    <span class="amount"> $1,999.00</span>
                                                                                </span>
                                                                            </span>
                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                                <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.product -->
                                        </div><!-- /.products -->
                                    </div>
                                </div>
                            </section>
                        </div><!-- /.iproducts-carousel-block -->
                    </div><!-- /.row -->
                </div><!-- /.conainer -->
            </section><!-- /.products-carousel-with-image-->
            <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">
                <header>
                    <h2 class="h1">Laptops &amp; Computers</h2>

                    <div class="owl-nav">
                        <a href="#products-cards-carousel-prev" data-target="#homev3-products-cards-carousel" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                        <a href="#products-cards-carousel-next" data-target="#homev3-products-cards-carousel" class="slider-next"><i class="fa fa-angle-right"></i></a>
                    </div>
                </header><!-- /header-->


                <div id="homev3-products-cards-carousel">
                    <div class="woocommerce home-v3 columns-2 product-cards-carousel owl-carousel">

                        <ul class="products columns-2">
                            <li class="product product-card first">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/6.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Peripherals</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>External SSD USB 3.1  750 GB</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $600</span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                            <li class="product product-card last">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/4.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">TVs</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>Widescreen 4K SUHD TV</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $800</span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                            <li class="product product-card first">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/5.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Printers</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>Full Color LaserJet Pro  M452dn</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                            <li class="product product-card last">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/1.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>Notebook Purple G752VT-T7008T</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                        </ul>
                        <ul class="products columns-2">
                            <li class="product product-card first">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/3.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>Notebook Purple G752VT-T7008T</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                            <li class="product product-card last">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/2.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Headphone Cases</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>Universal Headphones Case in Black</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $1500</span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                            <li class="product product-card first">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/1.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Smartphones</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>Tablet Thin EliteBook  Revolve 810 G6</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                            <li class="product product-card last">

                                <div class="product-outer">
                                    <div class="media product-inner">

                                        <a class="media-left" href="single-product.html" title="Pendrive USB 3.0 Flash 64 GB">
                                            <img class="img-responsive media-object wp-post-image" src="images/blank.gif" data-echo="images/product-cards/5.jpg" alt="">

                                        </a>

                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Printers</a>
                                                            </span>

                                            <a href="single-product.html">
                                                <h3>Full Color LaserJet Pro  M452dn</h3>
                                            </a>

                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $500</span>
                                                                    </span>
                                                                </span>

                                                <a href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">

                                                    <a href="#" class="add_to_wishlist">
                                                        Wishlist</a>

                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->

                            </li><!-- /.products -->
                        </ul>

                    </div>
                </div><!-- /#homev3-products-cards-carousel-->

            </section><!-- /.section-product-cards-carousel-->
            <section class="products-6-1 animate-in-view fadeIn animated" data-animation="fadeIn">
                <div class="container">
                    <header>
                        <h2 class="h1">Bestsellers</h2>
                        <ul class="nav nav-inline">
                            <li class="nav-item active">
                                <span class="nav-link">Top 7</span>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="product-category.html">Smart Phones &amp; Tablets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product-category.html">Laptops &amp; Computers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product-category.html">Video Cameras</a>
                            </li>
                        </ul>
                    </header>

                    <div class="columns-6-1">
                        <ul class="products exclude-auto-height products-6">
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="images/products/2.jpg" src="images/blank.gif" alt="">


                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                </span>
                                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
                                                    Wishlist</a>

                                                <a href="compare.html" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="images/products/6.jpg" src="images/blank.gif" alt="">


                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                </span>
                                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
                                                    Wishlist</a>

                                                <a href="compare.html" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="images/products/2.jpg" src="images/blank.gif" alt="">


                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                </span>
                                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
                                                    Wishlist</a>

                                                <a href="compare.html" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="images/products/5.jpg" src="images/blank.gif" alt="">


                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                </span>
                                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
                                                    Wishlist</a>

                                                <a href="compare.html" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="images/products/3.jpg" src="images/blank.gif" alt="">


                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                </span>
                                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
                                                    Wishlist</a>

                                                <a href="compare.html" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                        <a href="single-product.html">
                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                            <div class="product-thumbnail">

                                                <img data-echo="images/products/1.jpg" src="images/blank.gif" alt="">


                                            </div>
                                        </a>

                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                </span>
                                                            </span>
                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
                                                    Wishlist</a>

                                                <a href="compare.html" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                        </ul>

                        <ul class="products exclude-auto-height product-main-6-1">
                            <li class="first product">

                                <div class="product-outer">
                                    <div class="product-inner">
                                                        <span class="loop-product-categories">
                                                            <a href="product-category.html" rel="tag">Game Consoles</a>
                                                        </span>

                                        <a href="single-product.html">
                                            <h3>Game Console Controller <br/>+ USB 3.0 Cable</h3>
                                            <div class="product-thumbnail">
                                                <img src="images/blank.gif" data-echo="images/products/6-1.jpg" class="wp-post-image" alt="">
                                            </div>
                                        </a>

                                        <div class="thumbnails columns-3">
                                            <a href="images/products/thumb1.jpg" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]">
                                                <img src="images/blank.gif" data-echo="images/products/thumb1.jpg"  alt="">
                                            </a>
                                            <a href="images/products/thumb2.jpg" class="zoom" title="" data-rel="prettyPhoto[product-gallery]">
                                                <img src="images/blank.gif" data-echo="images/products/thumb2.jpg"  alt="">
                                            </a>
                                            <a href="images/products/thumb3.jpg" class="zoom last" title="" data-rel="prettyPhoto[product-gallery]">
                                                <img src="images/blank.gif" data-echo="images/products/thumb3.jpg"  alt="">
                                            </a>
                                        </div>

                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price"><ins><span class="amount">&#36;79.00</span></ins> <del><span class="amount">&#36;99.00</span></del></span>
                                                            </span>

                                            <a rel="nofollow" href="cart.html" class="button add_to_cart_button">Add to cart</a>
                                        </div><!-- /.price-add-to-cart -->

                                        <div class="hover-area">
                                            <div class="action-buttons">

                                                <a href="/electro/?add_to_wishlist=2933" rel="nofollow" class="add_to_wishlist">
                                                    Wishlist</a>

                                                <a href="compare.html" class="add-to-compare-link">Compare</a>
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li><!-- /.product -->
                        </ul><!-- /.products-->
                    </div><!-- /.columns-6-1 -->
                </div><!-- /.container-->
            </section><!-- /.products-6-1 -->
            <section class="home-list-categories animate-in-view fadeIn animated" data-animation="fadeIn">
                <header>
                    <h2 class="h1">Top Categories this Month</h2>
                </header>
                <ul class="categories">
                    <li class="category">
                        <div class="media">
                            <a class="media-left" href="product-category.html">
                                <img data-echo="images/products/1.jpg" src="images/blank.gif" alt="">
                            </a><!-- /.media-left -->

                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-category.html">Smart Phones & Tablets</a></h4>
                                <ul class="sub-categories list-unstyled">
                                    <li class="cat-item">
                                        <a href="product-category.html" >Accessories</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Chargers</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Powerbanks</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Smartphones</a>
                                    </li>
                                </ul>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <a class="see-all" href="#">See all</a>
                    </li>
                    <li class="category">
                        <div class="media">
                            <a class="media-left" href="product-category.html">
                                <img data-echo="images/products/2.jpg" src="images/blank.gif" alt="">
                            </a><!-- /.media-left -->

                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-category.html">Video Games & Consoles</a></h4>
                                <ul class="sub-categories list-unstyled">
                                    <li class="cat-item">
                                        <a href="product-category.html" >Accessories</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Chargers</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Powerbanks</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Smartphones</a>
                                    </li>
                                </ul>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <a class="see-all" href="#">See all</a>
                    </li>
                    <li class="category">
                        <div class="media">
                            <a class="media-left" href="product-category.html">
                                <img data-echo="images/products/3.jpg" src="images/blank.gif" alt="">
                            </a><!-- /.media-left -->

                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-category.html">Gadgets</a></h4>
                                <ul class="sub-categories list-unstyled">
                                    <li class="cat-item">
                                        <a href="product-category.html" >Accessories</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Chargers</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Powerbanks</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Smartphones</a>
                                    </li>
                                </ul>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <a class="see-all" href="#">See all</a>
                    </li>
                    <li class="category">
                        <div class="media">
                            <a class="media-left" href="product-category.html">
                                <img data-echo="images/products/4.jpg" src="images/blank.gif" alt="">
                            </a><!-- /.media-left -->

                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-category.html">Home Entertainment</a></h4>
                                <ul class="sub-categories list-unstyled">
                                    <li class="cat-item">
                                        <a href="product-category.html" >Accessories</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Chargers</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Powerbanks</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Smartphones</a>
                                    </li>
                                </ul>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <a class="see-all" href="#">See all</a>
                    </li>
                    <li class="category">
                        <div class="media">
                            <a class="media-left" href="product-category.html">
                                <img data-echo="images/products/5.jpg" src="images/blank.gif" alt="">
                            </a><!-- /.media-left -->

                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-category.html">Laptops & Computers</a></h4>
                                <ul class="sub-categories list-unstyled">
                                    <li class="cat-item">
                                        <a href="product-category.html" >Accessories</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Chargers</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Powerbanks</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Smartphones</a>
                                    </li>
                                </ul>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <a class="see-all" href="#">See all</a>
                    </li>
                    <li class="category">
                        <div class="media">
                            <a class="media-left" href="product-category.html">
                                <img data-echo="images/products/6.jpg" src="images/blank.gif" alt="">
                            </a><!-- /.media-left -->

                            <div class="media-body">
                                <h4 class="media-heading"><a href="product-category.html">Accessories</a></h4>
                                <ul class="sub-categories list-unstyled">
                                    <li class="cat-item">
                                        <a href="product-category.html" >Accessories</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Chargers</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Powerbanks</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="product-category.html" >Smartphones</a>
                                    </li>
                                </ul>
                            </div><!-- /.media-body -->
                        </div><!-- /.media -->
                        <a class="see-all" href="#">See all</a>
                    </li>
                </ul>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

@endsection()
@section('products')

    <section class="brands-carousel">
        <h2 class="sr-only">Brands Carousel</h2>
        <div class="container">
            <div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">

                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Acer</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/1.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Apple</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/2.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Asus</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/3.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Dell</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/4.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Gionee</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/5.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>HP</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/6.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>HTC</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/3.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>IBM</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/5.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Lenova</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/2.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>LG</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/1.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Micromax</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/6.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Microsoft</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="images/blank.gif" data-echo="images/brands/4.png" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


            </div><!-- /.owl-carousel -->

        </div>
    </section>


@endsection()
@section('footer')
    <!--
    <footer id="colophon" class="site-footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <h5 class="newsletter-title">Sign up to Newsletter</h5>
                        <span class="newsletter-marketing-text">...and receive <strong>$20 coupon for first shopping</strong></span>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button">Sign Up</button>
                                        </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-md-push-5">
                        <div class="columns">
                            <aside id="nav_menu-2" class="widget clearfix widget_nav_menu">
                                <div class="body">
                                    <h4 class="widget-title">Find It Fast</h4>
                                    <div class="menu-footer-menu-1-container">
                                        <ul id="menu-footer-menu-1" class="menu">
                                            <li class="menu-item"><a href="single-product.html">Laptops &#038; Computers</a></li>
                                            <li class="menu-item"><a href="single-product.html">Cameras &#038; Photography</a></li>
                                            <li class="menu-item"><a href="single-product.html">Smart Phones &#038; Tablets</a></li>
                                            <li class="menu-item"><a href="single-product.html">Video Games &#038; Consoles</a></li>
                                            <li class="menu-item"><a href="single-product.html">TV &#038; Audio</a></li>
                                            <li class="menu-item"><a href="single-product.html">Gadgets</a></li>
                                            <li class="menu-item "><a href="single-product.html">Car Electronic &#038; GPS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div><!-- /.columns -->


    -->

    @endsection()
@section('scripts')

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/echo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/electro.js') }}"></script>
    @endsection('')