@extends('base')

@section('content')

welcome back, {{auth()->user()->firstname}}

@if (session()->has('success'))

<p class="success" id="success">{{session('success')}}</p>    
@endif
<table clas="styled-table">
    <thead>
        <tr>
            <th>s/n</th>
        <th>Firstname</th>
        <th>Lastname</th> 
        <th>Email</th>
        <th>phone</th>

        <th>Address</th>

        <th>Edit</th>

        <th>Delete</th>
        <th>Details</th>
        </tr>
    </thead>
    @foreach ($student as $item)

    <tr class="active-row">

        <td> {{$item['id']}}</td>
        <td> {{$item['firstname']}}</td>
        <td> {{$item['lastname']}}</td>
        <td> {{$item['email']}}</td>
        <td> {{$item['phone']}}</td>
        <td> {{$item['address']}}</td>
        <td><a href="{{route('edit',$item['id'])}}">Edit</a></td>
        <td><a href="{{route('delete',$item['id'])}}"
            onclick="return confirm('Are you sure, you want to delete')"
            >Delete</a>
        </td>
        <td><a href="{{route('userinfo',$item['id'])}}">View</a></td>
    </tr>
    @endforeach
</table>
<script>
function show(){
    document.getElementById("success").style.display="none";

}
setTimeout("show()",4000);
    </script>


{{$student->links()}}
@endsection