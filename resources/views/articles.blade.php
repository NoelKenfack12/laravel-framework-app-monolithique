@extends('template')
 
@section('titre')
    Les articles
@endsection
 
@section('contenu')
    <div>
        <h3>Titre article 1</h3>
        <div>Description</div>
        <a href="{{ route('detailarticle_article', ['n'=> 1]) }}">Détail</a>
    </div>
    <div>
        <h3>Titre article 2</h3>
        <div>Description</div>
        <a href="{{ route('detailarticle_article', ['n'=> 2]) }}">Détail</a>
    </div>
@endsection
