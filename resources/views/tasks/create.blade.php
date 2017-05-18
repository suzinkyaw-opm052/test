@extends('app')
 
@section('content')

  <h2>Tasks under {{ $data->name }} </h2>
<table>
      
        <form action = "../taskstore" method = "post">
        <tr >
           <td style="width:100px">Task Name</td>
           <td style="padding: 3px"><input type="text" name="task[name]"></td>
        </tr>
     
        <tr>
            <td>description</td>
            <td style="padding: 3px"><input type="text" name="task[desp]"></td>
        </tr>
   
        
       
        <tr>
            <td></td>
            <td  style="padding: 3px ; text-align: center" ><input type="submit" value="save"></td>
        </tr>
        </form>
    </table>
 

@endsection