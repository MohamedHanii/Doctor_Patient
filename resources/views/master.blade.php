<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }} ">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    
    <title> @yield('title') </title>


</head>
<body>
  
  <nav id="myNav" class="navbar navbar-expand-md  transparent">
    <div class="container">
      <a href="{{ url('/') }}" class="navbar-brand text-color">Clinic</a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar7" id="hamBtn">
          <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
          <ul class="navbar-nav ml-auto">
            @if(Auth::guard('web')->check()|| Auth::guard('doctor')->check())
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-color" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  @if(Auth::guard('doctor')->check())
                    {{Auth::guard('doctor')->user()->first_name}}
                  @else 
                    {{Auth::guard('web')->user()->first_name}}
                  @endif 
                  <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-color" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
            </li>
            @else  
            <li class="nav-item">
              <a class="nav-link text-color" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-color" href="{{ route('register') }}">Sign up</a>
              </li>
          @endif
          </ul>
      </div>
    </div>
  </nav>


    @yield('content')


<div class="m-4"></div>



<footer>
  <div class="container">
    <div class="row">
             <div class="col-md-4 col-sm-6 col-xs-12">
               <span class="logo">Clinic</span>
             </div>
             
             <div class="col-md-4 col-sm-6 col-xs-12">
                 <ul class="menu">
                      <span>Menu</span>    
                      <li>
                         <a href="/">Home</a>
                       </li>
                            
                       <li>
                          <a href="https://github.com/MohamedHanii/Doctor_Patient">About</a>
                       </li>
                  </ul>
             </div>
        </div> 
     </div>
 </footer>

</body>
</html>