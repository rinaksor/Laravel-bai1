@extends('layouts.client');
@section('title')
    {{$title}}
@endsection

@section('content')
    <h1>Them san pham</h1>
    <form action="" method="POST">
        <input type="text" name="username">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        <button type="submit">Submit</button>

        @csrf
        @method('PUT')
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection