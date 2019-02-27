<div class="home-v3-ads-block animate-in-view fadeIn animated" data-animation=" animated fadeIn">

    <div class="ads-block row">
        <header class="entry-header">
            <h1 class="entry-title">Nos partenaires</h1>
        </header>
@foreach($entreprises as $entrepris)
<div class=" ad col-xs-9 col-sm-6">
            <div class="media">
                <div class="media-left media-middle">
                    <img src="{{$entrepris->image_url}}" alt="">
                </div>
                <div class="media-body media-middle">
                    <div class="">
                        <strong>{{ $entrepris->name }}</strong>
                    </div>
                    <p>
                        {{str_limit($entrepris->description,100)}}
                    </p>


                    <div class="ad-action">

                        <a href="#">Savoir plus</a>
                    </div>
                </div>
            </div>
        </div><!-- /.col -->

@endforeach
</div>
</div>