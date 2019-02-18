@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    <form action="{{ route('todo.store') }}" method="post">
        @method('POST')
        @csrf
        <div class="form-group">
            <input type="text" name="text" class="form-control" value="{{ old('text') }}">
        </div>
        <div class="form-group">
            <textarea name="body" cols="30" rows="10" class="form-control">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
            <input type="text" name="due" class="form-control" value="{{ old('due') }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection