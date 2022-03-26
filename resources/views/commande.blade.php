@extends("layouts.master")
@section('title')
page des commandes
@endsection
@section("contenu")

<h1 class="border-bottom pb-2">liste des commandes</h1>
<div>
    <div>
        <a href="{{ route('commande') }}" class="btn btn-primary d-flex justify-content-end">ajouter une nouvelle commande</a>
    </div>
<table class="table table-bordered table-hover"> 
   <thead> <!-- En-tête du tableau --> 
  <tr> 
  <th scope="col">#</th>
  <th scope="col">prix</th>
  <th scope="col">ModeDePaiement</th>
  <th scope="col">Article_commander</th> 
  <th scope="col">Email</th> 
  <th scope="col">Action</th> 
  </tr> 
  </thead> 
  <tbody> <!-- Corps du tableau --> 
  @foreach($commandes as $commande)
  <tr> 
  <th scope="row">{{ $loop->index+1 }}</th>
  <td>{{ $commande->prix }}</td> 
  <td>{{ $commande->ModeDePaiement }}</td>
  <td>{{ $commande->article_commander }}</td> 
  <td>{{ $commande->email }}</td>
  <td><a href="#" class="btn btn-info">Editer</a>
      <a href="#" class="btn btn-danger">Supprimer</a>
 </td>  
  </tr> 
  @endforeach
 </tbody> 
 </table>
</div>
@endsection