@extends('default')

@section('content')
<h1>{{$title}}</h1>
<form action="{{route('search')}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <label for="searc">search</label>
  
  <input type="text" id="search" name="search" @if(isset($search)) value="{{$search}}"@endif>
 
  

  <button class="btn btn-default">search</button>
</form>
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
        <td><a href="{{action('MainController@about',['id'=>$posts->id])}}">{{$posts->name}}</a></td>
        <td><img src="{{ asset($posts->img) }}" alt="img" style="width:104px;height:150px;" class="rounded float-left"></td>
        <td>{{$posts->price}}</td>
        @if($posts->category)
        <td><em>{{$posts->category->name}}</em></td>
        @endif 
    </tr>
    @endforeach
  </tbody>
</table>
<h2><a href="{{route('login')}}">login as admin</a></h2>
@endsection