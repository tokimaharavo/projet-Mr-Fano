@extends('default')

@section('content')
<h1>insert</h1>

<div class="row">
    <div class="col-8 m-auto p-4 bg-info text-white" style="border-radius: 12px;">
        <form enctype="multipart/form-data" action="" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">  
                <label for="name">name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">  
                <label for="price">price</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>
            <div class="form-group">  
                <label for="category_id">category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">  
                <label for="qty">qty</label>
                <input type="text" id="qty" name="qty" class="form-control">
            </div>
            <div class="form-group">
                <label for="img">img</label>
                <input type="file" id="img" name="img" class="form-control-file">
            </div>

            <div class="form-group">
                <button class="btn btn-primary">ajouter</button>
            </div>
        </form>
    </div>
</div>

@endsection