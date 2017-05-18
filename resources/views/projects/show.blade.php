@extends('app')
 
@section('content')
    <h2>Tasks under {{ $data->name }} </h2>
    <span style="margin-left: 2%"><b>■ <a href="../taskcreate/{{ $data->slug }}">create new task</a> ■</b></span>
    @if ( !$task->count() )
        You have no tasks
    @else
        <ul>
            @foreach( $task as $task )
            <li><a href="{{ route('tasks.show', [ $task->slug]) }}">{{ $task->name }}</a> [<a href="../taskdelete/{{ $task->slug }}">delete</a>]</li>
                
            @endforeach
        </ul>
    @endif
@endsection