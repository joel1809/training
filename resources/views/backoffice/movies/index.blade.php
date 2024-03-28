@extends('backoffice.layouts.master')
@section('title', 'List of movies')
@section('sidebar')
    @parent
@endsection
@section('content')
@section('main_title', 'List of movies')
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Year</th>
            <th>Running time</th>
            <th>Rating</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie['id'] }}</td>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['year'] }}</td>
                <td>{{ $movie['running_time'] }}</td>
                <td>{{ $movie['rating'] }}</td>
                <td>{{ $movie['created_at']->format('d/m/Y') }}</td>
                <td>{{ $movie['updated_at']->format('d/m/Y') }}</td>
                <td>
                <ul class="list-inline list-unstyled">
                   <li class="list-inline-item"><a class="btn btn-success" href="{{route('backoffice.movies.show',['id'=> $movie['id']])}}">show</a></li>
                   <li class="list-inline-item"><a class="btn btn-warning" href="{{route('backoffice.movies.edite',['id'=> $movie['id']])}}">edite</a></li>
                   <li class="list-inline-item"><a class="btn btn-danger" href="{{route('backoffice.movies.delete',['id'=> $movie['id']])}}">delete</a></li>
                </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-primary" href="{{route('backoffice.movies.create')}}">Ajouter un Film</a>
@endsection

