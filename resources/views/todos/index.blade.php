@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(!$items->isEmpty())
        @foreach($items as $item)
            <div class="well">
                <h3><a href="todo/{{$item->id}}">{{$item->text}}</a> <span class="label label-danger">{{$item->due}}</span></h3>
            </div>
        @endforeach
    @endif
@endsection