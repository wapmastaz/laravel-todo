@extends('layouts.app')

@section('title')

{{ $todo->title }}

@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 mx-auto">
    <h1 class="text-center mb-3">Laravel Todos</h1>
    <div class="card">
      <div class="card-header">
        Details
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $todo->title }}</h5>
        <p class="card-text">{{ $todo->description }}</p>
      </div>
      <div class="card-footer">
        <a href="/todos/edit/{{ $todo->id }}" class="btn btn-warning">Edit Todo</a>
        <a href="/todos/delete/{{ $todo->id }}" class="btn btn-danger ml-4">Delete Todo</a>
      </div>
    </div>
  </div>
</div>


@endsection