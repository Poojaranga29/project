@extends('layouts.app')

@section('content')
<form method ="Post" action= "/category/{{$info['id']}}">
  @csrf
  @method('patch')
  <div class="mb-3">
    <label for="name">category name</label>
    <input type="text" class="form-control" name="name" value="{{$info['name']}}" id="name">
  </div>
  <div class="mb-3 text-center">
  <button class="btn btn-success">Update</button>
  </div>
</form>
@endsection