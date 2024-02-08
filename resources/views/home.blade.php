<h1>Trang chu Unicode</h1>
<h2>{{ !empty(request()->keyword)?request()->keyword: 'Khong co gi'}}</h2>
<div class="container">
    {!! !empty($content)?$content:false !!}
</div>
<hr>

@for ($i = 1; $i<=10; $i++)
    @if ($i==5)
        @continue
    @endif
    <p>Phan tu thu: {{$i}}</p>
@endfor