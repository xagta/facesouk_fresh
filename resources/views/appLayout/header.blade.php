
    <div class="top-bar">
        <div class="container">
            <nav>
                <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">

                        <li class="spaced">
                            <a class="fa fa-2x fa-facebook" href="http://themeforest.net/user/shaikrilwan/portfolio"></a>
                            <a class="fa fa-2x fa-twitter" href="http://themeforest.net/user/shaikrilwan/portfolio"></a>
                            <a class="fa fa-2x fa-instagram" href="http://themeforest.net/user/shaikrilwan/portfolio"></a>
                            <a class="fa fa-2x fa-youtube" href="http://themeforest.net/user/shaikrilwan/portfolio"></a>
                        </li>


                </ul>
            </nav>

            <nav>
                <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
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

                <form class="navbar-search" method="post" action="{{route('search')}}">
                    {{csrf_field()}}
                    <label class="sr-only screen-reader-text" for="search">Search for:</label>
                    <div class="input-group">

                        <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                        <div class="input-group-addon search-categories">
                            <select name='category' id='product_cat' class='postform resizeselect' >
                                <option value='0' selected='selected'>All Categories</option>
                                @foreach($cats_artisanat as $cat)
                                    <option value='{{$cat->slug}}' >{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group-btn">
                            <input type="hidden" id="search-param" name="post_type" value="product" />
                            <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                        </div>
                    </div>
                </form>

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

            <div class=" collapse navbar-toggleable-xs" id="header-v3">
                <ul class="yamm nav navbar-nav ">
                    <li class="menu-item"><a title="Acceuil" href="{{route('home')}}"  >{{strtoupper('acceuil')}}</a>

                    <li class=" menu-item"><a title="EXPORT" href="{{route('export.index')}}"  >{{strtoupper('export')}}</a>

                    </li>

                    <li class=" menu-item dropdown animate-dropdown ">
                        <a title="{{strtoupper("OpportunitÉs d'affaires")}}" href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{strtoupper("OpportunitÉs d'affaires")}}</a>
                        <ul class="dropdown-menu">
                            <li class="menu-item"><a href="{{route('opportunities.index')}}">Consulter les opportunités</a></li>
                            <li class="nav-divider"></li>
                            <li class="menu-item"><a href="{{route('opportunities.create')}}">Ajouter une opportunité</a></li>


                        </ul>
                    </li>
                    <li class="menu-item"><a title="artisanat" href="{{route('artisanat_index')}}"  >{{strtoupper('artisanat')}}</a></li>
                    <li class="menu-item dropdown"><a title="SERVICES" href="{{route('services_index',['category'=>'none'])}}" class="dropdown-toggle" data-hover="dropdown" >{{strtoupper('services')}}</a>

                        <ul class="dropdown-menu">
                            @foreach($services as $service)
                            <li class="menu-item"><a href="{{route('requestservice_create',['service_id'=>$service->id])}}">{{$service->name}}</a></li>
                            <li class="nav-divider"></li>
                                @endforeach

                        </ul>
                    </li>

                    <li class="menu-item dropdown"><a title="developpement informatique" href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">{{strtoupper('dÉveloppement informatique')}}</a>
                        <ul class="dropdown-menu">
                            @foreach($services_informatique as $service_info)
                                <li class="menu-item"><a href="{{route('requestservice_create',['service_id'=>$service_info->id])}}">{{$service_info->name}}</a></li>
                                <li class="nav-divider"></li>
                            @endforeach

                        </ul>
                    </li>
                    <li class=" menu-item"><a title="FINANCEMENT" href="#"  >{{strtoupper('financement')}}</a>


                </ul>

            </div><!-- /.collpase -->
        </div><!-- /.-container -->
    </nav><!-- /.navbar -->
