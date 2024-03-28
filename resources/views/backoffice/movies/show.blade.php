@extends('backoffice.layouts.master')
@section('title', 'Show a movie | ' . $movie['title'] . ' | ' . $movie['year'])
@section('sidebar')
    @parent
@endsection
@section('content')
@section('main_title', 'Show a movie : ' . $movie['title'] . ' ( ' . $movie['year'] . ' ) ')
<table class="table table-bordered table-sm">
    <tbody>
        <tr>
            <th class="w-25">Id</th>
            <td>{{ $movie['id'] }}</td>
        </tr>
        <tr>
            <th class="w-25">Title</th>
            <td>{{ $movie['title'] }}</td>
        </tr>
        <tr>
            <th class="w-25">Year</th>
            <td>{{ $movie['year'] }}</td>
        </tr>
        <tr>
            <th class="w-25">Synopsis</th>
            <td>{{ $movie['synopsis'] }}</td>
        </tr>
        <tr>
            <th class="w-25">Running time</th>
            <td>{{ $movie['running_time'] }}</td>
        </tr>
        <tr>
            <th class="w-25">Rating</th>
            <td>{{ $movie['rating'] }}</td>
        </tr>
        <tr>
            <th class="w-25">Created At</th>
            <td>{{ $movie['created_at']->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th class="w-25">Updated At</th>
            <td>{{ $movie['updated_at']->format('d/m/Y') }}</td>
        </tr>
    </tbody>
</table>
<ul class="list-inline list-unstyled mt-5">
    <a href="{{ route('backoffice.movies.show', [ 'id' => $movie['id']])}}" class="btn btn-outline-secondary btn-sm btn-sm">Afficher</a>
    <a href="{{ route('backoffice.movies.delete', [ 'id' => $movie['id']]) }}" class="btn btn-outline-secondary btn-sm btn-sm">Supprimer</a>
    <a href="{{ route('backoffice.movies.index') }}" class="btn btn-outline-secondary btn-sm btn-sm">Retour à liste</a>
   </ul>
@endsection
