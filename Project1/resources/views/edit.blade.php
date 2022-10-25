@extends('base')

@section('content')
<div class="form-container pdt-2">
  
    <form  method="POST" action="{{route('update',$student['id'])}}" enctype="multipart/form-data">
        @csrf
        <div class="img-con">
            <img src="{{asset('storage/'.$student['image'])}}" id="preview">
        
        </div>
        <input type="file" value="Add" name="image" id="file">
    
     
       <h1>Edit</h1>
       <p></p>
       
    <div class="form-group d-flex">
        <input type="text" class='form-input' 
            placeholder="Firstname" 
            value="{{$student['firstname']}}" 
            name="firstname"
        >
    </div>
    <div class="form-group d-flex">
        <input type="text" class='form-input' 
            placeholder="lastname" 
            value="{{$student['lastname']}}"  
            name="lastname"
        >
    </div>

<div class="form-group d-flex">
        <input type="email" class='form-input' 
            placeholder="Email" 
            value="{{$student['email']}}" 
            name="email"
        >
    </div>
    
<div class="form-group d-flex">
        <input type="text" class='form-input' 
            placeholder="phone"
            value="{{$student['phone']}}"
            name="phone"
        >
</div>
<div class="form-group d-flex">
    <input type="text" class='form-input' 
        placeholder="Address" 
        value="{{$student['address']}}"
        name="address"
    >
</div>

    
    <div class="form-group d-flex">
    <button type="submit" class="form-submit">Edit</button>
    
    </div>
       
    </form>
   
    </div>
  
    <script src="js/index.js"></script>
@endsection