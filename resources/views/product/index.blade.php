@extends('layouts.app')

@section('content')
<div class="container">
  @if($gt=Session::get('grt'))
  <div class="alter alter-success">
    {{$gt}}
</div>
@endif
<a href="/product/create" class="btn btn-success">New Product</a>
  <table class ="table table-striped">
    <thead>
      <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $info)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$info['name']}}</td>
        <td><a href="/product/{{$info['id']}}/edit" class="btn btn-primary">edit</a></td>
        <td>
        <form action="/product/{{$info['id']}}" method="post">
          @csrf
            @method('delete')
            <button class="btn btn-danger">Delete</button>
          </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection