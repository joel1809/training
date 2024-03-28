@extends('backoffice.layouts.master')
@section('title','Ajouter un Film')
@section('sidebar')
 @parent
@endsection
@section('content')
@section('main_title','Ajouter un Film')
@include('backoffice.movies.partials._form')
<ul class="list-inline list-unstyled mt-5">
    <a href="{{ route('backoffice.movies.index') }}" class="btn btn-outline-secondary btn-sm btn-sm">Retour à la liste</a>
   </ul>
@endsection
