@extends('template')
 
@section('titre')
    Les articles
@endsection

@section('contenu')
    <form action="{{ url('users') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer !">
    </form>
@endsection