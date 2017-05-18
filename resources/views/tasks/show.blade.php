@extends('app')
 
@section('content')
    <h2>Tasks</h2>
 
    @if ( !$task->count() )
        You have no tasks
    @else <!--            @foreach( $task as $task )-->
    <table>
        <tr >
           <td style="width:100px">Task Name</td>
           <td style="padding: 3px"><input type="text" value="{{ $task->name }}"></td>
        </tr>
       
        <tr>
            <td>completed</td>
            <td style="padding: 3px"><input type="text" value="{{ $task->completed }}"></td>
        </tr>
        <tr>
            <td>description</td>
            <td style="padding: 3px"><input type="text" value="{{ $task->description }}"></td>
        </tr>
        <tr>   
            <td>created_at</td>
            <td style="padding: 3px"><input type="text" value="{{ $task->created_at }}" disabled></td>
        </tr>
        
        <tr>   
            <td>updated_at</td>
            <td style="padding: 3px"><input type="text" value="{{ $task->updated_at }}" disabled></td>
        </tr>
        <tr>
            <td></td>
            <td  style="padding: 3px ; text-align: center" ><input type="button" value="save"></td>
        </tr>
    </table><!--            @endforeach-->
    @endif
@endsection