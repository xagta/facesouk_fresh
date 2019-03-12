@extends('appLayout.basecontent')
@section('body_class')
    blog blog-list page-template-template-homepage-v3 full-color-background
@endsection()
@section('content')
    <section >
        <nav class="navbar navbar-primary second-nav" style="margin-top: 0.5em;">
            <div class="container">
                <div class=" collapse navbar-toggleable-xs" >
                    <ul class="yamm nav navbar-nav ">
                        @foreach($cats as $cat)

                            <li class="menu-item"><a title="{{$cat->name}}" href="#"  class="dropdown-toggle" data-toggle="dropdown">{{strtoupper($cat->name)}}</a>

                                @if($cat->children)
                                    <ul class="dropdown-menu">
                                        @foreach ($cat->children as $child)
                                            <li class="nav-title menu-item"><a href="{{route('filterbycat',['cat_id'=>  $child->id])}}">{{$child->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif

                            </li>


                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>


        <div class="woocommerce" style="margin-top: 5em;">
            <div class="col-md-8">
                @foreach($entreprises as $entrepris)
                    <article class="post format-gallery hentry ">

                        <div class="media-attachment">
                            <a href="blog-single.html">
                                <img width="430" height="245" src="{{ asset($entrepris->image_url) }}" class="wp-post-image" alt="1" /></a>
                        </div><!-- .media-attachment -->

                        <div class="content-body">
                            <header class="entry-header">
                                <h1 class="entry-title" itemprop="name headline">
                                    <a href="blog-single.html" rel="bookmark">{{$entrepris->name}}</a>
                                </h1>

                                <div class="entry-meta">
            								<span class="cat-links">
                                                @foreach($entrepris->categories as $multicat)
                                                    <span>{{$multicat->name}}</span>
                                                    @endforeach()


            								</span>

                                    <i class="posted-on">
                                        {{$entrepris->updated_at}}
                                    </i>
                                </div>
                            </header><!-- .entry-header -->

                            <div class="entry-content">

                                <p>{{$entrepris->description}}</p>
                            </div><!-- .entry-content -->
                            <div>

                            </div>

                            <div class="post-readmore">
                                <a href="blog-single.html" class="btn btn-primary">Consulter</a>

                    </article><!-- #post-## -->

                @endforeach
            </div>

        </div>



    </section>
    @endsection()
@section('products')
    @endsection()