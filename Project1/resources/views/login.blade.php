@extends('base')

@section('content')



        

<div class="form-container">

    <form  action="{{route('userlogin')}}" method="POST">
       
        @csrf
      
       <p style="padding-top:1em; font-size:2em; margin-bottom:0px;" class="login">Login</p>
   

<div class="form-group d-flex">
        <input type="email" class='form-input' 
            placeholder="Email" 
            name="email" 
            value="{{old('email')}}" 
        >
    </div>
    @if ($errors)
    @error('email')
    <p class='error'>{{$message}}</p>

        
    @enderror
@endif
<div class="form-group d-flex">
    <input type="password"
        placeholder="password"
        name="password"
    
        >
</div>
@if ($errors)
@error('password')
<p class="error">{{$message}}</p>
    
@enderror
@endif
    <div class="form-group d-flex">
    <button type="submit" class="form-submit">Login</button>
    
    </div>  
    </form>
    {{--  --}}

    </div>
   
@endsection