@extends('base')
@section('content')
<div class=" info-form">
    <div class="img-container d-flex">
        <img src="{{asset('storage/'.$student['image'])}}">
    </div>
   <div class="info">
    <li>Firstname:<span class="pd-2">{{$student['firstname']}}</span></li>
    <li>Lastname:<span class="pd-2">{{$student['lastname']}}</span></li>
    <li>Email:<span class="pd-2">{{$student['email']}}</span></li>
    <li>Phone:<span class="pd-2">{{$student['phone']}}</span></li>
    <li>Address:<span class="pd-2">{{$student['address']}}</span></li>
    
   </div>
       



   
@endsection