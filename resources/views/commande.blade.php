@extends("layouts.master")
@section('title')
page des commandes
@endsection
@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
   <h1 class="border-bottom pb-2">liste des commandes</h1>
 <div class="mt-4">
  <div  class="d-flex justify-content-between mb-4">
        {{ $commandes->links() }}
        <div><a href="{{ route('commande.create') }}" class="btn btn-primary">ajouter une nouvelle commande</a></div>
 </div>
 @if (session()->has("successDelete"))
             <div class="alert alert-success">
             <h3>{{session()->get("successDelete")}}</h3>
             </div>
 @endif 
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
      <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet commande?'))
      {document.getElementById('form-{{$commande->id}}').submit()}">Supprimer</a>
      <form id="form-{{$commande->id}}"  action="{{route('commande.supprimer', ['commande'=>$commande->id])}}" method="post">
          @csrf
          <input type="hidden" name="_method" value="delete">
      </form>
 </td>  
  </tr> 
  @endforeach
 </tbody> 
 
 </table>
 </div>
</div>
@endsection