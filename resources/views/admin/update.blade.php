@extends('default')

@section('content')
<h1>update</h1>

<form action="{{route('update',$post)}}" method="post">
    <div class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name">name</label>
    <input type="text" id="name" name="name" class="form-control" value="{{$post->name}}">
    <label for="price">price</label>
    <input type="text" id="price" name="price" class="form-control" value="{{$post->price}}">
    <label for="category_id">category</label>
    <select name="category_id" id="category_id"  >
    @foreach($categories as $categorie)
    <option value="{{$categorie->id}}" @if ( $categorie->id == $post->category_id) selected @endif>{{$categorie->name}}</option>
    @endforeach
    </select>
    <br>
    <label for="qty">qty</label>
    <input type="text" id="qty" name="qty" class="form-control" value="{{$post->qty}}">
    <label for="img">img</label>
    <input type="text" id="img" name="img" class="form-control" value="{{$post->img}}">
    </div>

    <div class="form-group">
    <button class="btn btn-primary">editer</button>
    </div>
</form>
@endsection