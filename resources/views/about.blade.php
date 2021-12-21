@extends('default')

@section('content')
<div class='container-fluid'>
<div class='text-center'>
<h1>{{$post->name}}£</h1>
<H2>price: {{$post->price}}</H2>

<img src="{{ asset($post->img) }}" alt="img" style="width:300px;height:400px;" class="rounded float-left">
<h2>stock: {{$post->qty}}</h2>
</div>
</div>
@endsection