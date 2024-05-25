@extends('layouts.app')

@section('content')
<form method ="Post" action= "/product/{{$info['id']}}/edit">
  @csrf
  @method('patch')
  <div class="mb-3">
    <label for="name">product name</label>
    <input type="text" class="form-control" name="name" value="{{$info['name']}}" id="name">
  </div>
  <div class="mb-3">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price" value="{{$info['price']}}" id="price" requried placeholder="Enter Price">
  </div>
  <div class="mb-3">
    <label for="discount">Discount</label>
    <input type="number" class="form-control" name="discount" value="{{$info['discount']}}" id="discount"  placeholder="Discount">
  </div>
  <div class="mb-3">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" value="{{$info['description']}}" id="description"  placeholder="Description">
  </div>
  <div class="mb-3 text-center">
  <button class="btn btn-success">Update</button>
  </div>
</form>
@endsection