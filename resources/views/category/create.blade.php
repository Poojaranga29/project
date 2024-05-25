@extends('layouts.app')

@section('content')
<form method ="post" action= "/category">
  @csrf
  <div class="mb-3">
    <label for="name">category name</label>
    <input type="text" class="form-control" name="name" id="name" requried placeholder="Enter category name">
  </div>
  <div class="mb-3 text-center">
  <button class="btn btn-success">save</button>
  </div>
</form>
@endsection