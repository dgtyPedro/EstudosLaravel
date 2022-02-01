@extends('layouts.standard')

@section('content')
<style>

table{
    width: 60vw;
    border: #FF2D20 3px solid;
    border-radius: 3px;
}

td{
    width: 15vw;
    
}

input{
    width: 90%;
    height: 20px;
    border: #FF2D20 2px solid;
    border-radius: 3px;
    background-color: #18141c;
    color: white;
    text-align: center;
}

input::placeholder{
  color: white;
  text-align: center;
}

.button{
  color: #FF2D20;
  font-weight: bold;
  height: 40px;
  background-color: white;
}


</style>

<table style="text-align:center">
  <tr>
    <th>ID</th>
    <th>Subject_Name</th>
    <th>Type</th>
    <th>Time_Expected</th>
    <th>Is_Completed</th>
  </tr>
  <tr>

    @if(count($roadmap) > 0)
        @foreach ($roadmap as $r)
        <form method="GET">
          <td>{{$r->id}}</td>
          <td><input placeholder="{{$r->subject_name}}" name="subject_name"></td>
          <td><input placeholder="{{$r->type}}" name="type"></td>
          <td><input placeholder="{{$r->time_expected}}" name="time_expected"></td>
          <td><input placeholder="{{$r->is_completed}}" name="is_completed"></td>
          <td><input type="submit" class="button" value="Submit Changes"></td>
          <td><a href="edit/"><button class="button">Delete</button></a></td>
        </form>
        @endforeach  
    @else 
      No records found.
    @endif
    
  </tr>
</table>


@endsection