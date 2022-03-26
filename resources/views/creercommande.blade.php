@extends("layouts.master")
@section('title')
page des commandes
@endsection
@section("contenu")
<main class="card mt-10 text-center ">   
        <div>
            <h3 class="fw-bold ">passer votre commande a travers ce formulaire</h3>
        </div>
        <div class="card-body ">
            <form action="{{ route('commande.store') }}" method="post" >
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="article_commander" name="article_commander" placeholder="Article_commander">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="ModeDePaiement" name="ModeDePaiement" placeholder="ModeDePaiement">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix de l'article">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="votre email">
                </div>

                 <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            <p><a href="{{ route('accueil') }}"> souhaiter vous revenir a la page d'accueil ?</a></p>
        </div>
</main>
 @endsection