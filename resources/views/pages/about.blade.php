@extends('index')

@section('title', $title)

@section('content')
    <h1>About</h1>
@endsection

@section('sidebar')
    @parent

    <a href="tel:546465465">5645654654</a>
@endsection

@push('head-scripts')
    <script src="/js/local.js"></script>
@endpush