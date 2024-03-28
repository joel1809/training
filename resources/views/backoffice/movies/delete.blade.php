@extends('backoffice.layouts.master')
@section('title','Delete a movie | '.$movie['title']. ' | '.
$movie['year'])
@section('sidebar')
 @parent
@endsection
@section('content')
@section('main_title','Delete a movie : '.$movie['title']. ' ( '.
$movie['year'] .' ) ')
<div class="alert alert-warning" role="warning">
 <h4 class="alert-heading">Are you sure you want to delete this movie ?</h4>
</div>
<form>
 <button type="submit" value="delete" class="btn btn-danger">Delete</button>
</form>
<ul class="list-inline list-unstyled mt-5">
    <a href="{{ route('backoffice.movies.show', [ 'id' => $movie['id']])}}" class="btn btn-outline-secondary btn-sm btn-sm">Afficher</a>
    <a href="{{ route('backoffice.movies.delete', [ 'id' => $movie['id']]) }}" class="btn btn-outline-secondary btn-sm btn-sm">Supprimer</a>
    <a href="{{ route('backoffice.movies.index') }}" class="btn btn-outline-secondary btn-sm btn-sm">Retour à liste</a>
   </ul>
@endsection
