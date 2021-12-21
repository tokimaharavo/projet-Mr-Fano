@extends('default')

@section('content')
<h1>GOING BEYOUND</h1>
<H2>liste des produits disponible</H2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">img</th>
      <th scope="col">price</th>
      <th scope="col">qty</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($responseBody as $responseBodies)
    <tr>
        <td><a href="">{{$responseBodies->name}}</a></td>
        <td><img src="{{$responseBodies->img_src}}" alt="img" style="width:104px;height:150px;" class="rounded float-left"></td>
        <td>{{$responseBodies->price}}</td>
        <td>{{$responseBodies->qty}}</td>
    @endforeach
    </tr>
  </tbody>
</table>
<h2><a href="{{route('login')}}">login as admin</a></h2>
@endsection