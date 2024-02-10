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
    <button type="button" class="show">Show</button>
@endsection

@section('css')
    {{-- header{
        background: blue;
        color: #fff;
    } --}}

    <style>
        header{
        background: blue;
        color: #fff;
        }
    </style>
@endsection

@section('js')
    {{-- document.querySelector('.show').onclick = function(){
        alert('Thanh cong');
    } --}}
    <script>
        document.querySelector('.show').onclick = function(){
        alert('Thanh cong');
        }
    </script>
@endsection