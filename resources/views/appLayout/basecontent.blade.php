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

                        <div class="columns">
                            <aside id="nav_menu-3" class="widget clearfix widget_nav_menu">
                                <div class="body">
                                    <h4 class="widget-title">&nbsp;</h4>
                                    <div class="menu-footer-menu-2-container">
                                        <ul id="menu-footer-menu-2" class="menu">
                                            <li class="menu-item"><a href="single-product.html">Printers &#038; Ink</a></li>
                                            <li class="menu-item "><a href="single-product.html">Software</a></li>
                                            <li  class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2742"><a href="single-product.html">Office Supplies</a></li>
                                            <li  class="menu-item "><a href="single-product.html">Computer Components</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div><!-- /.columns -->

                        <div class="columns">
                            <aside id="nav_menu-4" class="widget clearfix widget_nav_menu">
                                <div class="body">
                                    <h4 class="widget-title">Customer Care</h4>
                                    <div class="menu-footer-menu-3-container">
                                        <ul id="menu-footer-menu-3" class="menu">
                                            <li class="menu-item"><a href="single-product.html">My Account</a></li>
                                            <li class="menu-item"><a href="single-product.html">Track your Order</a></li>
                                            <li class="menu-item"><a href="single-product.html">Wishlist</a></li>
                                            <li class="menu-item"><a href="single-product.html">Customer Service</a></li>
                                            <li class="menu-item"><a href="single-product.html">Returns/Exchange</a></li>
                                            <li class="menu-item"><a href="single-product.html">FAQs</a></li>
                                            <li class="menu-item"><a href="hsingle-product.html">Product Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div><!-- /.columns -->

                    </div><!-- /.col -->

                    <div class="footer-contact col-xs-12 col-sm-12 col-md-5 col-md-pull-7">
                        <div class="footer-logo">
                            <svg version="1.1" x="0px" y="0px" width="156px"
                                 height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z"/>
                            </svg>
                        </div><!-- /.footer-contact -->

                        <div class="footer-call-us">
                            <div class="media">
                                <span class="media-left call-us-icon media-middle"><i class="ec ec-support"></i></span>
                                <div class="media-body">
                                    <span class="call-us-text">Got Questions ? Call us 24/7!</span>
                                    <span class="call-us-number">(800) 8001-8588, (0600) 874 548</span>
                                </div>
                            </div>
                        </div><!-- /.footer-call-us -->


                        <div class="footer-address">
                            <strong class="footer-address-title">Contact Info</strong>
                            <address>17 Princess Road, London, Greater London NW1 8JR, UK</address>
                        </div><!-- /.footer-address -->

                        <div class="footer-social-icons">
                            <ul class="social-icons list-unstyled">
                                <li><a class="fa fa-facebook" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-twitter" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-pinterest" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-linkedin" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-google-plus" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-tumblr" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-instagram" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-youtube" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                <li><a class="fa fa-rss" href="#"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright-bar">
            <div class="container">
                <div class="pull-left flip copyright">&copy; <a href="http://demo2.transvelo.in/html/electro/">Electro</a> - All Rights Reserved</div>
                <div class="pull-right flip payment">
                    <div class="footer-payment-logo">
                        <ul class="cash-card card-inline">
                            <li class="card-item"><img src="{{ asset('images/footer/payment-icon/1.png') }}" alt="" width="52"></li>
                            <li class="card-item"><img src="{{ asset('images/footer/payment-icon/2.png') }}" alt="" width="52"></li>
                            <li class="card-item"><img src="{{ asset('images/footer/payment-icon/3.png') }}" alt="" width="52"></li>
                            <li class="card-item"><img src="{{ asset('images/footer/payment-icon/4.png') }}" alt="" width="52"></li>
                            <li class="card-item"><img src="{{ asset('images/footer/payment-icon/5.png') }}" alt="" width="52"></li>
                        </ul>
                    </div><!-- /.payment-methods -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.copyright-bar -->
    </footer><!-- #colophon -->

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