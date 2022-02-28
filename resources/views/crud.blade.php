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
    font-family: 'Montserrat', sans-serif;
    text-align: center;
}

input::placeholder{
  color: grey;
  text-align: center;
}

.button{
  color: #FF2D20;
  font-weight: bold;
  height: 40px;
  background-color: transparent;
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


    @if(count($roadmap) > 0)
        @foreach ($roadmap as $r)
        <tr>
        <form method="POST" action="{{route('crud.edit')}}">
          @csrf  
          @method('POST')
          <input type="hidden" value="{{$r->id}}" name="id" disabled>
          <td>{{$r->id}}</td>
          <td><input value="{{$r->subject_name}}" name="subject_name" disabled></td>
          <td><input value="{{$r->type}}" name="type" disabled></td>
          <td><input value="{{$r->time_expected}}" name="time_expected" disabled></td>
          <td><input value="{{$r->is_completed}}" name="is_completed" disabled></td>
          <td><input type="submit" class="button" value="Submit Changes" disabled></td>
        </form>
        
        {{-- {{route('crud.del') . '?id=' . $r->id}} --}}
        <td><a href="" disabled><button class="button" disabled>Delete</button></a></td>
      </tr>
        @endforeach  
    @else 
      No records found.
    @endif

  <tr>
    <form method="POST" action="{{route('crud.add')}}">
      @csrf  
      @method('POST')
      <td></td>
      <td><input placeholder="Subject_Name" name="subject_name" required disabled></td>
      <td><input placeholder="Type" name="type" required disabled></td>
      <td><input placeholder="Time_Expected" name="time_expected" required disabled></td>
      <td><input placeholder="Is_Completed" name="is_completed" required disabled></td>
      <td><input type="submit" class="button" value="Create" required disabled></td>
    </form>
  </tr>
</table>

<h1 style="

position:absolute;
">DESATIVADO NO HEROKU</h1>


@endsection