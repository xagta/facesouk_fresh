
    <div class="top-bar">
        <div class="container">
            <nav>
                <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome to Worldwide Electronics Store</a></li>
                </ul>
            </nav>

            <nav>
                <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>
                    <li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i class="ec ec-transport"></i>Track Your Order</a></li>
                    <li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i class="ec ec-shopping-bag"></i>Shop</a></li>
                   @auth
                    <li class="menu-item animate-dropdown"><a title="My Account" href="my-account.html"><i class="ec ec-user"></i>My Account</a></li>
                    @endauth
                    @guest
                        <li class="menu-item animate-dropdown"><a title="My Account" href="{{route('login')}}"><i class="ec ec-user"></i>Login / Register</a></li>
                    @endguest()
                </ul>


            </nav>
        </div>
    </div><!-- /.top-bar -->

    <header id="masthead" class="site-header header-v3">
        <div class="container">
            <div class="row">

                <!-- ============================================================= Header Logo ============================================================= -->
                <div class="header-logo">
                    <a href="home.html" class="header-logo-link">
                   <img src="{{ asset('images/logo.png') }}">
                    </a>
                </div>
                <!-- ============================================================= Header Logo : End============================================================= -->

                <form class="navbar-search" method="get" action="/">
                    <label class="sr-only screen-reader-text" for="search">Search for:</label>
                    <div class="input-group">
                        <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                        <div class="input-group-addon search-categories">
                            <select name='product_cat' id='product_cat' class='postform resizeselect' >
                                <option value='0' selected='selected'>All Categories</option>
                                <option class="level-0" value="laptops-laptops-computers">Laptops</option>
                                <option class="level-0" value="ultrabooks-laptops-computers">Ultrabooks</option>
                                <option class="level-0" value="mac-computers-laptops">Mac Computers</option>
                                <option class="level-0" value="all-in-one-laptops-computers">All in One</option>
                                <option class="level-0" value="servers">Servers</option>
                                <option class="level-0" value="peripherals">Peripherals</option>
                                <option class="level-0" value="gaming-laptops-computers">Gaming</option>
                                <option class="level-0" value="accessories-laptops-computers">Accessories</option>
                                <option class="level-0" value="audio-speakers">Audio Speakers</option>
                                <option class="level-0" value="headphones">Headphones</option>
                                <option class="level-0" value="computer-cases">Computer Cases</option>
                                <option class="level-0" value="printers">Printers</option>
                                <option class="level-0" value="cameras">Cameras</option>
                                <option class="level-0" value="smartphones">Smartphones</option>
                                <option class="level-0" value="game-consoles">Game Consoles</option>
                                <option class="level-0" value="power-banks">Power Banks</option>
                                <option class="level-0" value="smartwatches">Smartwatches</option>
                                <option class="level-0" value="chargers">Chargers</option>
                                <option class="level-0" value="cases">Cases</option>
                                <option class="level-0" value="headphone-accessories">Headphone Accessories</option>
                                <option class="level-0" value="headphone-cases">Headphone Cases</option>
                                <option class="level-0" value="tablets">Tablets</option>
                                <option class="level-0" value="tvs">TVs</option>
                                <option class="level-0" value="wearables">Wearables</option>
                                <option class="level-0" value="pendrives">Pendrives</option>
                            </select>
                        </div>
                        <div class="input-group-btn">
                            <input type="hidden" id="search-param" name="post_type" value="product" />
                            <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                        </div>
                    </div>
                </form>
                <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                    <li class="nav-item dropdown">
                        <a href="cart.html" class="nav-link" data-toggle="dropdown">
                            <i class="ec ec-shopping-bag"></i>
                            <span class="cart-items-count count">4</span>
                            <span class="cart-items-total-price total-price"><span class="amount">&#36;1,215.00</span></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-mini-cart">
                            <li>
                                <div class="widget_shopping_cart_content">

                                    <ul class="cart_list product_list_widget ">


                                        <li class="mini_cart_item">
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                            <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart1.jpg" alt="">White lumia 9001&nbsp;
                                            </a>

                                            <span class="quantity">2 × <span class="amount">£150.00</span></span>
                                        </li>


                                        <li class="mini_cart_item">
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                            <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart2.jpg" alt="">PlayStation 4&nbsp;
                                            </a>

                                            <span class="quantity">1 × <span class="amount">£399.99</span></span>
                                        </li>

                                        <li class="mini_cart_item">
                                            <a data-product_sku="" data-product_id="34" title="Remove this item" class="remove" href="#">×</a>
                                            <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart3.jpg" alt="">POV Action Cam HDR-AS100V&nbsp;

                                            </a>

                                            <span class="quantity">1 × <span class="amount">£269.99</span></span>
                                        </li>


                                    </ul><!-- end product list -->


                                    <p class="total"><strong>Subtotal:</strong> <span class="amount">£969.98</span></p>


                                    <p class="buttons">
                                        <a class="button wc-forward" href="cart.html">View Cart</a>
                                        <a class="button checkout wc-forward" href="checkout.html">Checkout</a>
                                    </p>


                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-wishlist nav navbar-nav pull-right flip">
                    <li class="nav-item">
                        <a href="wishlist.html" class="nav-link"><i class="ec ec-favorites"></i></a>
                    </li>
                </ul>
                <ul class="navbar-compare nav navbar-nav pull-right flip">
                    <li class="nav-item">
                        <a href="compare.html" class="nav-link"><i class="ec ec-compare"></i></a>
                    </li>
                </ul>
            </div><!-- /.row -->
        </div>
    </header><!-- #masthead -->

    <nav class="navbar navbar-primary navbar-full yamm">
        <div class="container">
            <div class="clearfix">
                <button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#header-v3">
                    &#9776;
                </button>
            </div>

            <div class="  collapse navbar-toggleable-xs" id="header-v3">
                <ul class="yamm nav navbar-nav ">
                    <li class="menu-item"><a title="acceuil" href="product-category.html">{{strtoupper("acceuil")}}</a></li>
                    <li class=" menu-item"><a title="EXPORT" href="#"  class="dropdown-toggle" data-toggle="dropdown">{{strtoupper('export')}}</a>

                        <ul class="dropdown-menu">
                            <li class="nav-title menu-item"><a href="{{route('opportunities.index')}}">Habillement/ mode</a>
                                <ul>
                                    <a><ul class="menu-item">Bijous / accessoires  </ul></a>
                                    <a><ul class="menu-item">Cuir  </ul></a>
                                    <a> <ul class="menu-item">Habillement enfant / femme&nbsp;&nbsp;</ul></a>
                                    <a><ul class="menu-item">Lingerie </ul></a>
                                    <a><ul class="menu-item">Marquinerie </ul></a>

                                </ul>
                            </li>
                            <li class="nav-title menu-item"><a href="{{route('opportunities.index')}}">Bien d’equipement</a>
                                <ul>
                                    <a><ul class="menu-item">Décoration</ul></a>
                                    <a><ul class="menu-item">High-Tech</ul></a>
                                    <a> <ul class="menu-item">Meubles</ul></a>
                                    <a><ul class="menu-item">Télephonie </ul></a>

                                </ul>
                            </li>
                            <li class="nav-title menu-item"><a href="{{route('opportunities.index')}}">Alimentaire</a>

                            </li>


                        </ul>

                    </li>

                    <li class=" menu-item dropdown animate-dropdown ">
                        <a title="{{strtoupper("OpportunitÉs d'affaires")}}" href="#"  class="dropdown-toggle" data-toggle="dropdown">{{strtoupper("OpportunitÉs d'affaires")}}</a>
                        <ul class="dropdown-menu">
                            <li class="menu-item"><a href="{{route('opportunities.index')}}">Consulter les opportunités</a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Ajouter une opportunité</a></li>


                        </ul>
                    </li>
                    <li class="menu-item"><a title="artisanat" href="product-category.html"  >{{strtoupper('artisanat')}}</a></li>
                    <li class="menu-item dropdown"><a title="SERVICES" href="#" class="dropdown-toggle" data-toggle="dropdown">{{strtoupper('services')}}</a>

                        <ul class="dropdown-menu">
                            <li class="menu-item"><a href="{{route('opportunities.index')}}">Financement</a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Accompagnement </a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Creation des entreprises</a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Coaching</a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Formation</a></li>


                        </ul>
                    </li>

                    <li class="menu-item dropdown"><a title="developpement informatique" href="#" class="dropdown-toggle" data-toggle="dropdown">{{strtoupper('dÉveloppement informatique')}}</a>
                        <ul class="dropdown-menu">
                            <li class="menu-item"><a href="{{route('opportunities.index')}}">Création des sites web</a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Création des applications mobiles</a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Accompagnement numerique</a></li>



                        </ul>
                    </li>
                    <li class="menu-item"><a title="financement" href="product-category.html">{{strtoupper('financement')}}</a></li>

                </ul>

            </div><!-- /.collpase -->
        </div><!-- /.-container -->
    </nav><!-- /.navbar -->
