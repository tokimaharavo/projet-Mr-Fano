@extends('default')

@section('content')

<div class="container">
<h1>{{$title}}</h1>
<H2>liste des produits disponible</H2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">qty</th>
      <th scope="col">category</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($post as $posts)
    <tr>
        <td><a href="{{action('AdminMainController@about',['id'=>$posts->id])}}">{{$posts->name}}</a></td>
        <td><img src="{{ asset($posts->img) }}" alt="img" style="width:104px;height:150px;" class="rounded float-left"></td>
        <td>{{$posts->price}}</td>
        @if($posts->category)
        <td><em>{{$posts->category->name}}</em></td>
        @endif
        <td><a href="{{action('AdminMainController@delete',['id'=>$posts->id])}}">delete</a></td>
        <td><a href="{{action('AdminMainController@edit',['id'=>$posts->id])}}">edit</a></td>
        
    </tr>
    @endforeach
  </tbody>
</table>
<div class='insert'>
  <a href="{{action('AdminMainController@create')}}" class="btn btn-primary">new product</a>
</div>
</div>
@endsection
