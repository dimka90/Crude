@extends('base')

@section('content')

<table clas="styled-table">
    <thead>
        <tr>
        <th>Name</th>
        <th>Email</th> 
        <th>Gender</th>
        </tr>
    </thead>
    @foreach ($data as $item)

    <tr class="active-row"><td> {{$item['Name']}}</td>
        <td> {{$item['Email']}}</td>
        <td> {{$item['Gender']}}</td></tr>
    @endforeach
</table>
       
@endsection