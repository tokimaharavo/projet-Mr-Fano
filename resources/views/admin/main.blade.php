@extends('default')

@section('content')

<div class="container-fluid">
  <div class="card bg-default m-2">
    <div class="card-body">
      <h1>{{$title}}</h1>
    </div>
  </div>
  <div class="card m-2">
    <div class="card-header">
      <h2>liste des produits disponible</h2>
    </div>
    <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">photo</th>
      <th scope="col" class="text-center">price</th>
      <th scope="col">category</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($post as $posts)
    <tr>
        <td><a class="nav-link" href="{{action('AdminMainController@about',['id'=>$posts->id])}}">{{$posts->name}}</a></td>
        <td><img src="{{ asset($posts->img) }}" alt="img" style="width:100px;height:auto;" class="rounded float-left img-thumbnail"></td>
        <td class="text-center">{{$posts->price}}</td>
        @if($posts->category)
        <td><em>{{$posts->category->name}}</em></td>
        @endif
        <td><a class="btn btn-danger" href="{{action('AdminMainController@edit',['id'=>$posts->id])}}"><i class="fa fa-edit"></i></a></td>
        <td><a class="btn btn-primary" href="{{action('AdminMainController@delete',['id'=>$posts->id])}}"><i class="fa fa-trash"></i></a></td>
        
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
<div class='insert'>
  <a href="{{action('AdminMainController@create')}}" class="btn btn-primary">new product</a>
</div>
</div>
@endsection
