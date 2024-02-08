<h1>Trang chu Unicode</h1>
<h2>{{ !empty(request()->keyword)?request()->keyword: 'Khong co gi'}}</h2>
<div class="container">
    {!! !empty($content)?$content:false !!}
</div>
<hr>

{{-- @php
$total = 0;
@endphp
@for ($index = 0; $index<10; $index++)
@php
$total+=$index;
@endphp
<p>Phan tu: {{$index}}</p>
@endfor
<h3>Tong: {{$total}}</h3> --}}
<hr>
<?php
// for ($index = 0; $index<10; $index++){
    // echo '<p>Phan tu: '.$index.'</p>';
//}
?>

@php
//for ($index = 0; $index<10; $index++){
    // echo '<p>Phan tu: '.$index.'</p>';
//}
@endphp

{{-- @overbatim
<div class="container">
    Hello, {{className}}
</div>
<script>
    Hello, {{name}}
    Hi, {{age}}
</script>
@endverbatim --}}

@php
//$message = 'Dat hang thanh cong';
@endphp
@include('parts.notice');
