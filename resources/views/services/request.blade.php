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
            <h2 class="h1">Demander un service - {{$service->name}}</h2>
        </header>

        @if($service)
        <div class="woocommerce columns-4">
            <div class="col-md-8">
                <p >
                    {{$service->description}}
                </p>

                <form  class="form" action="{{route('requestservice_store')}}" method="POST" >
                    {{csrf_field()}}
                    <input name="service_id" hidden value="{{$service->id}}">
                    <p class="form-row ">
                        <label for="description">Description<span class="required">*</span></label>
                        <textarea  class="input-text" name="description" id="description" value=""></textarea>
                    </p>
                    <p class="form-row ">
                        <label for="pays">Pays<span class="required">*</span></label>
                        <select type="text" class="input-text" name="pays" id="pays" value="">
                            @include('other.countries')
                        </select>
                    </p>


                    <p class="form-row ">
                        <label for="email">Email de contact<span class="required">*</span></label>
                        <input class="input-text" type="email" name="email" id="email">
                    </p>
                    <p class="form-row ">
                        <label for="phone">Telephone de contact<span class="required"></span></label>
                        <input class="input-text" type="text" name="phone" id="phone">
                    </p>

                    <p class="form-row ">
                        <label for="userType">Type d'utilisateur<span class="required">*</span></label>
                        <select id="userType" name="userType" class="input-text">
                            <option value="societe">Société</option>
                            <option value="particulier">Particulier</option>
                        </select>
                    </p>

                    <p class="form-row from-row-wide">
                        <input class="button" type="submit" value="Ajouter" name="Ajouter">
                    </p>


                </form>
            </div>


        </div>
            @endif
    </section>
@endsection()

@section('products')
@endsection()