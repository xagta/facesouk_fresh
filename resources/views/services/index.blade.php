@extends('appLayout.basecontent')
@section('content')
    <nav class="woocommerce-breadcrumb">
        <a href="{{route('home')}}">Acceuil</a>
        <span class="delimiter">
                            <i class="fa fa-angle-right"></i>
                        </span>Demander un service
    </nav>
    <section xmlns="http://www.w3.org/1999/html">
        <header>
            <h2 class="h1">List des services</h2>
        </header>

        <div class="woocommerce columns-4">
            <div class="col-md-8">
<table class="table">
                @foreach($services as $service)
                    <tr>
                    <td>
                        {{$service->name}}
                    </td>
                        <td>
                            {{$service->description}}
                        </td>
                        <td>
                            <a href="{{route('requestservice_create',['service_id'=>$service->id])}}"><button>Demander</button></a>

                        </td>
                    </tr>


                    @endforeach
</table>
            </div>


        </div>
    </section>
@endsection()

@section('products')
@endsection()