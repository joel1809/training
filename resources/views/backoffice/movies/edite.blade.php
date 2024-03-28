@extends('backoffice.layouts.master')
@section('title','Edit a movie | '.$movie['title']. ' | '. $movie['year'])
@section('sidebar')
 @parent
@endsection
@section('content')
@include('backoffice.movies.partials._form', [ 'movie' => $movie ])
<ul class="list-inline list-unstyled mt-5">
    <a href="{{ route('backoffice.movies.show', [ 'id' => $movie['id']])}}" class="btn btn-outline-secondary btn-sm btn-sm">Afficher</a>
    <a href="{{ route('backoffice.movies.delete', [ 'id' => $movie['id']]) }}" class="btn btn-outline-secondary btn-sm btn-sm">Supprimer</a>
    <a href="{{ route('backoffice.movies.index') }}" class="btn btn-outline-secondary btn-sm btn-sm">Retour à liste</a>
   </ul>
@endsection
