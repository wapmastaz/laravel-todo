@extends('layouts.app')

@section('title')

Edit: {{ $todo->title }}

@endsection

@section('content')


<div class="row justify-content-center">
  <div class="col-md-6 mx-auto">
    <h1 class="text-center mb-3">Edit Todo</h1>

    <div class="card">

      <div class="card-body">
        <form method="POST" action="/update-todo">

          @csrf

          <input type="hidden" name="todo-id" value="{{ $todo->id }}">

          <div class="form-group">
            <label for="title">Title</label>
            <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title"
              value="{{ old('title') ?? $todo->title }}">
            @error('title')
            <small class="form-text text-danger">
              <strong>{{ $message }}</strong>
            </small>
            @enderror
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror"
              name="description" rows="3">{{ $todo->description }}</textarea>

            @error('description')
            <small class="form-text text-danger">
              <strong>{{ $message }}</strong>
            </small>
            @enderror
          </div>
          <button class="btn btn-primary" type="submit">Update Todo</button>
        </form>
      </div>

    </div>

  </div>
</div>




@endsection