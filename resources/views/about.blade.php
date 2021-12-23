@extends('default')

@section('content')
<div class='container-fluid'>
    
    <div class="card bg-light mt-4">
        <div class="card-header">
            <h1>{{$post->name}}£</h1>
        </div>
        <div class="card-body">
            <img src="{{ asset($post->img) }}" alt="img" style="width:300px;height:auto;" class="rounded float-left img-thumbnail mr-5">
            <H2>price: {{$post->price}}</H2>
            <h2>stock: {{$post->qty}}</h2>
        </div>
    </div>
</div>
@endsection