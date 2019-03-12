@extends('appLayout.basecontent')
@section('body_class')
    blog blog-list page-template-template-homepage-v3 full-color-background
@endsection()
@section('content')
    <section >


        <div class="woocommerce" style="margin-top: 5em;">
            <div class="col-md-8">
                @foreach($artisants as $artisant)
                    <article class="post format-gallery hentry ">

                        <div class="media-attachment">
                            <a href="blog-single.html">
                                <img width="430" height="245" src="{{ asset($artisant->image_url) }}" class="wp-post-image" alt="1" /></a>
                        </div><!-- .media-attachment -->

                        <div class="content-body">
                            <header class="entry-header">
                                <h1 class="entry-title" itemprop="name headline">
                                    <a href="blog-single.html" rel="bookmark">{{$artisant->name}}</a>
                                </h1>

                                <div class="entry-meta">
            								<span class="cat-links">
                                                @foreach($artisant->categories as $multicat)
                                                    <span>{{$multicat->name}}</span>
                                                @endforeach()


            								</span>

                                    <i class="posted-on">
                                        {{$artisant->updated_at}}
                                    </i>
                                </div>
                            </header><!-- .entry-header -->

                            <div class="entry-content">

                                <p>{{$artisant->description}}</p>
                            </div><!-- .entry-content -->
                            <div>

                            </div>

                            <div class="post-readmore">
                                <a href="{{route('show_artisan',['id'=>$artisant->id])}}" class="btn btn-primary">Consulter</a>

                    </article><!-- #post-## -->

                @endforeach
            </div>

        </div>



    </section>
@endsection()
@section('products')
@endsection()