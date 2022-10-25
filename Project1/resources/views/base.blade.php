<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/index.css')}}"> 
    <link rel="stylesheet" href="{{url('css/form.css')}}"> 
    <link rel="stylesheet" href="{{url('css/uploadimage.css')}}">
    <link rel="stylesheet" href="{{url('css/userinfo.css')}}"> 
    <title>Document</title>
</head>
<body>
    <div class="container m-width">
        <header>
            <nav class='d-flex'>
                <p class="Logo"><a href="{{url('/')}}"><img src="{{url('img/laravel.png')}}"></a></p>

                <ul class="link-items d-flex">
                    @auth
                        
                  
                    <li class="after"><a href="{{route('index')}}">Index</a></li>
                   
                    <form action="{{route('logout')}} " method="POST">
                        @csrf
                        <button type="submit">logout</button>
                    </form>
                
       
                    @else
                    <li><a href="{{route('create')}}">Register</a></li>
                    {{-- <li><a href="{{route('edit')}}">Edit</a></li> --}}
                    <li><a href="{{'login'}}">Login</a></li>
                    @endauth
                    {{-- <li><a href="">Register</a> --}}
                </ul>

            </nav>

        </header>

        @yield('content')
    </div>

  
</body>
</html>