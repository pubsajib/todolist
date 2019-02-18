@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="{{ route('todo.edit', $todo->id) }}">Go Back</a>
    <h1>Edit Todo</h1>
    <form action="{{ route('todo.update', $todo->id) }}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="text" value="{{ $todo->text }}">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="body" cols="30" rows="10">{{ $todo->body }}</textarea>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="due" value="{{ $todo->due }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection