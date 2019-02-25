@extends('appLayout.basecontent')
@section('content')
    <nav class="woocommerce-breadcrumb">
        <a href="{{route('home')}}">Acceuil</a>
        <span class="delimiter">
                            <i class="fa fa-angle-right"></i>
                        </span>Ajouter une opportunité
    </nav>
    <section xmlns="http://www.w3.org/1999/html">
            <header>
                <h2 class="h1">Ajouter une opportunité</h2>
            </header>

            <div class="woocommerce columns-4">
                <div class="col-md-8">

        <form  class="form" action="{{route('opportunities.store')}}" method="POST" >
            {{csrf_field()}}


            <p class="form-row ">
                <label for="titre">Titre:<span class="required">*</span></label>
                <input type="text" class="input-text" name="titre" id="titre" value="">
            </p>
            <p class="form-row ">
                <label for="pays">Pays<span class="required">*</span></label>
                <select type="text" class="input-text" name="pays" id="pays" value="">
                    @include('other.countries')
                </select>
            </p>
            <p class="form-row ">
                <label for="description">Description<span class="required">*</span></label>
                <textarea  class="input-text" name="description" id="description" value=""></textarea>
            </p>


            <p class="form-row ">
                <label for="price">Prix<span class="required">*</span></label>
                <input type="number"  class="input-text" name="price" id="price" value=""></input>
            </p>
            <p class="form-row ">
                <label for="quantity">Quantité<span class="required">*</span></label>
                <input class="input-text" type="number" name="quantity" id="quantity">
            </p>
            <p class="form-row ">
                <label for="userType">Type d'utilisateur<span class="required">*</span></label>
                <select id="userType" name="userType" class="input-text">
                    <option value="societe">Société</option>
                    <option value="particulier">Particulier</option>
                </select>
            </p>
            <p class="form-row ">
                <label for="pays">Type d'opportunité<span class="required">*</span></label>
                <select type="text" class="input-text" name="type" id="type" value="">
                    <option value="achat">Achat</option>
                    <option value="vente">Vente</option>
                    <option value="partenaire">Partenaire</option>
                </select>
            </p>


            <p class="form-row from-row-wide">
                <input class="button" type="submit" value="Ajouter" name="Ajouter">
            </p>


        </form>
                </div>


    </section>
    @endsection()

@section('products')
    @endsection()