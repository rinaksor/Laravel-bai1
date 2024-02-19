@extends('layout.client');
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent
    <h3>Home sidebar</h3>
@endsection

@section('content')
    <h1>Trang chu</h1>
    
    @include('clients.contents.slide')
    @include('clients.contents.about')

    @env('production')
    <p>Moi truong Production</p>
    @elseenv('test')
    <p>Moi truong test</p>
    @elseenv
    <p>Moi truong dev</p>
    @endenv
    
    <x-alert type="info" :content="$message" data-icon="youtube"/>

    {{-- <x-inputs.button /> --}}

    {{-- <x-form-button/> --}}

    {{-- <x-forms.button /> --}}
@endsection

@section('css')

@endsection

@section('js')

@endsection