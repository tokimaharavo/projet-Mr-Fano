@extends('default')

@section('content')
<h1>insert</h1>

<form enctype="multipart/form-data" action="" method="post" >
    <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name">name</label>
    <input type="text" id="name" name="name" class="form-control">
    <label for="price">price</label>
    <input type="text" id="price" name="price" class="form-control">
    <label for="category_id">category</label>
    <select name="category_id" id="category_id"  >
    @foreach($categories as $categorie)
    <option value="{{$categorie->id}}" >{{$categorie->name}}</option>
    @endforeach
    </select>
    <br>
    <label for="qty">qty</label>
    <input type="text" id="qty" name="qty" class="form-control">
    <label for="img">img</label>
    <input type="file" id="img" name="img" class="form-control">
    </div>

    <div class="form-group">
        <button class="btn btn-primary">ajouter</button>
    </div>
</form>
@endsection