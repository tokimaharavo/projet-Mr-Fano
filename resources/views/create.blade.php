@extends('default')

@section('content')
<h1>entrer le nouveau produit</h1>

<form action="">
    <div class="form-group">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label for="name">name</label>
    <input type="text" id="name" name="url" class="form-control">
    <label for="price">price</label>
    <input type="text" id="price" name="price" class="form-control">
    <label for="name">name</label>
    <input type="qty" id="name" name="qty" class="form-control">
    <label for="name">name</label>
    <input type="text" id="name" name="url" class="form-control">
    </div>

    <div class="form-group">
        <button class=""btn btn-primary>ajouter</button>
    </div>
</form>
@endsection