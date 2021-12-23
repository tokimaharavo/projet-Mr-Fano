@extends('default')

@section('content')
<div class="row">
  <div class="col-6">
    <h1>{{$title}}</h1>
  </div>
  <div class="col-6">
    <h2 class="text-right"><a href="{{route('login')}}">login as admin</a></h2>
  </div>
</div>

<div class="row mt-3">
  <div class="col-9"></div>
  <div class="col-3">
  <form action="{{route('search')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="input-group mb-3">
      <input class="form-control" placeholder="search" type="text" id="search" name="search" @if(isset($search)) value="{{$search}}"@endif>
      <div class="input-group-append">
        <button class="btn btn-default"><i class="fa fa-search"></i></button>
      </div>
    </div>
</form>
  </div>
</div>
<div class="card">
  <div class="card-header">
    <H2>liste des produits disponible</H2>
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">category</th>
    </tr>
  </thead>
  <tbody>
    @foreach($post as $posts)
    <tr>
        <td><a class="nav-link" href="{{action('MainController@about',['id'=>$posts->id])}}">{{$posts->name}}</a></td>
        <td><img src="{{ asset($posts->img) }}" alt="img" style="width:100px;height:auto;" class="rounded float-left img-thumbnail"></td>
        <td>{{$posts->price}}</td>
        @if($posts->category)
        <td><em>{{$posts->category->name}}</em></td>
        @endif 
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</div>

@endsection