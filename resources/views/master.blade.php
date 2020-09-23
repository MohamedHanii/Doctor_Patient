<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }} ">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title> @yield('title') </title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  

  <nav class="navbar navbar-expand-md nav-style">
    <div class="container">
      <a href="{{ url('/') }}" class="navbar-brand text-color">Clinic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
          <ul class="navbar-nav ml-auto">
            @if(Auth::guard('web')->check()|| Auth::guard('doctor')->check())
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-color" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  @if(Auth::guard('doctor')->check()){{Auth::guard('doctor')->user()->first_name}}@else {{Auth::guard('web')->user()->first_name}}@endif <span class="caret"></span>
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
               <span class="logo">LOGO</span>
             </div>
             
             <div class="col-md-4 col-sm-6 col-xs-12">
                 <ul class="menu">
                      <span>Menu</span>    
                      <li>
                         <a href="#">Home</a>
                       </li>
                            
                       <li>
                          <a href="#">About</a>
                       </li>
                            
                       <li>
                         <a href="#">Blog</a>
                       </li>
                            
                       <li>
                          <a href="#">Gallery </a>
                       </li>
                  </ul>
             </div>
        
             <div class="col-md-4 col-sm-6 col-xs-12">
               <ul class="address">
                     <span>Contact</span>       
                     <li>
                        <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">Phone</a>
                     </li>
                     <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a>
                     </li> 
                     <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a>
                     </li> 
                </ul>
            </div>
        
        
        </div> 
     </div>
 </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>