@extends('layouts.master')

@section('content')
<form action="{{url('create')}}" method="POST">
    @csrf
    Username<input type="text" name='username'><br>
   
    @error('username')
    {{$message}}
@enderror<br>
 
   Email <input type="email" name='email'>
   @error('email')
   {{$message}}
@enderror
<br>
  
    Password<input type="text" name="password"><br>
    @error('password')
        {{$message}}
    @enderror
   confirm password <input type="text" name="passwprd_confirmation"><br>
   @error('password_confirmation')
   {{$message}}
@enderror
   <button type="submit">Submit</button>
</form>
    
@endsection