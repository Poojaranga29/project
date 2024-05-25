@extends('layouts.app')

@section('content')
<form method ="post" action= "/category">
  @csrf
  <div class="mb-3">
    <label for="name">product name</label>
    <input type="text" class="form-control" name="name" id="name" requried placeholder="Enter product name">
  </div>
  <div class="mb-3">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price" id="price" requried placeholder="Enter Price">
  </div>
  <div class="mb-3">
    <label for="discount">Discount</label>
    <input type="number" class="form-control" name="discount" id="discount"  placeholder="Discount">
  </div>
  <div class="mb-3">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" id="description"  placeholder="Description">
  </div>
  <div class="mb-3 text-center">
  <button class="btn btn-success">save</button>
  </div>
</form>
@endsection