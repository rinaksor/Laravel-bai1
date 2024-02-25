@extends('layouts.client');
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent
    <h3>Products sidebar</h3>
@endsection

@section('content')
    <h1>SAN PHAM</h1>
    <x-package-alert/></x-package-alert>
    @push('scripts')
    <script>
        console.log('Push lan 2');
    </script>
@endpush

@endsection

@section('css')

@endsection

@section('js')

@endsection

@prepend('scripts')
    <script>
        console.log('Push lan 1');
    </script>
@endprepend

8:30