@extends('layouts.app')

@section('title')

Todos List

@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8 mx-auto">
    <h1 class="text-center mb-3">Laravel Todos</h1>
    <ul class="list-group">
      @foreach($todos as $todo)

      <li class="list-group-item">
        {{ $todo->title }}
        <a href="/todos/{{ $todo->id }}" class="btn btn-sm btn-primary float-right">View</a>
        @if(!$todo->completed)
        <a href="/todos/completed/{{ $todo->id }}"
          class="btn mr-2 btn-sm btn-warning text-white float-right">Completed</a>
        @else
        <button type="button" class="btn btn-sm btn-success float-right mr-2">Completed</button>
        @endif
      </li>

      @endforeach

    </ul>
  </div>
</div>

@endsection