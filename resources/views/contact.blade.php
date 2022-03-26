@extends("layouts.master")

@section('title')
page de contact
@endsection

@section("contenu")

<form action="{{ route('contact.store') }}" method = "post">
    @csrf
   
<div id="contact" class="content-section"
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title  btn-primary">Contact</h1>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center bigger-text">
                    <p> pour  avoir plus d'information sur nos produits ,veillez remplir ce formulaire pour etre notifier sur des nouveaux produits</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div id="map">
                    </div>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">
                    
                    <div class="row contact-form">
                    
                        <fieldset class="col-md-6 col-sm-6">
                            <input id="nom" type="text" name="nom" placeholder="Nom">
                        </fieldset>
                        <fieldset class="col-md-6 col-sm-6">
                            <input type="email" name="email" id="email" placeholder="Email">
                        </fieldset>
                        <fieldset class="col-md-12">
                            <input type="text" name="sujet" id="sujet" placeholder="Sujet">
                        </fieldset>
                        <fieldset class="col-md-12">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </fieldset>
                        <fieldset class="col-md-12">
                            <input type="submit" name="send" value="Send Message" id="submit" class="button">
                        </fieldset>
                     
                    </div> <!-- /.contact-form -->
                    
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /#products -->
</form>
@endsection
