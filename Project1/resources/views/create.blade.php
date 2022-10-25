@extends('base')

@section('content')



        

<div class="form-container">

    <form  action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        <div class="img-con">
            <img src="img/placeholder.png" id="preview">
        </div>
        <input type="file" value="Add" name="image" id="file">
    
        @csrf
       <h1 class="mg-bottom">Sign up</h1>
       <p class="">Create an account</p>
    <div class="form-group d-flex">
        <input type="text" class='form-input' 
            placeholder="Firstname" 
            name="firstname" 
            value="{{old('firstname')}}" 
        >
    </div>
    @if ($errors)
        @error('firstname')
        <p class='error'>{{$message}}</p>
        @enderror
    @endif

    <div class="form-group d-flex">
        <input type="text" class='form-input' 
            placeholder="lastname" 
            name="lastname" 
            value="{{old('lastname')}}" 
        >
    </div>
    @if ($errors)
    @error('lastname')
    <p class='error'>{{$message}}</p>
        
    @enderror
@endif

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
        <input type="text" class='form-input' 
            placeholder="phone" 
            name="phone"  
            value="{{old('phone')}}" 
        >
</div>
@if ($errors)
@error('phone')
<p class='error'>{{$message}}</p>
    
@enderror
@endif
<div class="form-group d-flex">

    <input type="text" class='form-input'
         placeholder="Address" 
         name="address" 
         value="{{old('address')}}"
    >
</div>
@if ($errors)
@error('address')
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
    <input type="password"
        name="password_confirmation"
        placeholder="confirm password"
        >
</div>
@if ($errors)
@error('password_confirmation')
<p class="error">{{$message}}</p>
    
@enderror
    
@endif

    <div class="form-group d-flex">
    <button type="submit" class="form-submit">Submit</button>
    
    </div>  
    </form>
    {{--  --}}
    <script src="js/index.js"></script>
    </div>
   
@endsection