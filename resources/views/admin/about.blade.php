@extends('default')

@section('content')
<div class='container-fluid'>
<div class='text-center'>
<h1 style="text-decoration:underline;">{{$post->name}}</h1>
<H3>price: {{$post->price}}£</H3>
<img src="{{ asset($post->img) }}" alt="img" style="width:500px;height:700px;" class="rounded float-left">
<h3>stock: {{$post->qty}}</h3>
</div>
</div>
@endsection