@extends("layouts.master")

@section('title')
page d'accueil
@endsection

@section("contenu")
<div class="site-slider ">
        <li>
          <img src="images/slider/slide2.jpg" alt="slider image 2">
                <div class="container caption-wrapper">
                    <div class="slider-caption">
                        <h2>Bienvenue dans mon aplication</h2>
                    </div>
                </div>
            </li>
    </div> <!-- /.site-slider -->
    
    <p>consulter les articles <a href="{{ route('article') }}"> ici</a></p>
    <p>passer votre commande <a href="{{ route('commande.create') }}"> ici</a></p>
    <p>laissez vos contact via ce <a href="{{ route('contact') }}">formulaire</a> pour recevoir des notifications </p>
@endsection