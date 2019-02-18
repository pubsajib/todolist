@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">Go Back</a>
    <h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
    <div class="label label-danger">{{$todo->due}}</div>
    <hr>
    <p>{{$todo->body}}</p>
    <br><br>
    <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-default">Edit</a>
    <form class="float-right" action="{{ route('todo.destroy', $todo->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection