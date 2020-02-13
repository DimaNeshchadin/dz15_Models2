@extends('index')

@section('title', $title)

@section('content')
    <h1>Homepage</h1>
    <p>{{ $abc }}</p>

    @isset($records)
        // $records is defined and is not null...
    @endisset

@endsection