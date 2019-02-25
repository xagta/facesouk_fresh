<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Electro &#8211; Electronics Ecommerce Theme</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}   " media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}   " media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-electro.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl-carousel.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/orange2.css') }}" media="all" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="{{ asset('images/fav-icon.png') }}">
</head>

<body class="@yield('body_class')">
<div id="page" class="hfeed site">

    @yield('header')


    <div id="content" class="site-content" tabindex="-1">
        <div class="container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    @yield('content')
                    @yield('products')

                </main>
            </div>
        </div>
    </div>

    @yield('footer')

    @yield('scripts')

</div>
</body>
</html>
