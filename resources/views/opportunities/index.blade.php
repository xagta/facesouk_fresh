@extends('appLayout.basecontent')
@section('body_class')
    blog blog-list page-template-template-homepage-v3 full-color-background
@endsection()
@section('content')
    <nav class="woocommerce-breadcrumb">
        <a href="{{route('home')}}">Acceuil</a>
        <span class="delimiter">
                            <i class="fa fa-angle-right"></i>
                        </span>Opportunités
    </nav>
    <section >
        <header>
            <h2 class="h1">Opportunités d'affaires</h2>
        </header>

        <div class="woocommerce columns-4">
            <div class="col-md-8">
                @foreach($opps as $opp)
                <article class="post format-gallery hentry ">

                    <div class="media-attachment">
                        <a href="blog-single.html">
                            <img width="430" height="245" src="{{ asset('images/blog/blog-1.jpg') }}" class="wp-post-image" alt="1" /></a>
                    </div><!-- .media-attachment -->

                    <div class="content-body">
                        <header class="entry-header">
                            <h1 class="entry-title" itemprop="name headline">
                                <a href="blog-single.html" rel="bookmark">{{$opp->title}}</a>
                            </h1>

                            <div class="entry-meta">
            								<span class="cat-links">
            									<span> {{$opp->owner->name}}</span>
            									<i> {{$opp->pays}}</i>

            								</span>

                                <i class="posted-on">
            									{{$opp->updated_at}}
            								</i>
                                <i class="price_opp"> {{$opp->price.'  '.'TND'}}</i>
                            </div>
                        </header><!-- .entry-header -->

                        <div class="entry-content">

                            <p>{{$opp->description}}</p>
                        </div><!-- .entry-content -->
                        <div>

                        </div>

                        <div class="post-readmore">
                            <a href="blog-single.html" class="btn btn-primary">Consulter</a>
                        </div><!-- .post-readmore -->
                        <a class="price_opp"  data-placement="left">
                            @if($opp->type=='vente')
                                <span class="label label-success">{{$opp->type}}</span>
                            @elseif($opp->type=='achat')
                                <span class="label label-danger">{{$opp->type}}</span>
                            @elseif($opp->type=='partenaire')
                                <span class="label label-info">{{$opp->type}}</span>

                            @endif
                        </a>


                    </div><!-- .content-body -->
                </article><!-- #post-## -->

                    @endforeach
            </div>


    </section>
@endsection()

@section('products')
@endsection()