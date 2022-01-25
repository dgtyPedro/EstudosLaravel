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
    <td></td>
    <td><input placeholder=""></td>
    <td><input></td>
    <td><input></td>
    <td><input></td>
  </tr>
</table>


@endsection