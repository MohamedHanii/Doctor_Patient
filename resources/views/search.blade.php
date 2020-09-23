<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-color: white;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- End Of Navbar -->

    <div class="container">
        <div class="row pt-5 pb-3" style="background-color:yellow; ">
            <div class="col-12">
                <form  action="{{route('result')}}" method="GET" style="width:100% float:right;">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <select name="spec_filter" class="custom-select my-1 mr-sm-2" id="spec-filter">
                                    <option selected>Specilization</option>
                                    {{-- @foreach($specs as $key => $spec)
                                        <option value="{{$spec}}">{{$spec}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <select name="price_filter" class="custom-select my-1 mr-sm-2" id="price-filter">
                                    <option selected>Price</option>
                                    {{-- @foreach($prices as  $price)
                                        <option value="{{$price}}">{{$price}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <select name="location_filter" class="custom-select my-1 mr-sm-2" id="location-filter">
                                    <option selected>Location</option>
                                    {{-- @foreach($locations as $location)
                                        <option value="{{$location}}">{{$location}}</option>
                                    @endforeach --}}
                                    </select>
                            </div>
                        </div>
                        <div class="col-5">
                        <input name="query" id= "query" type="text" class="form-control my-1 mr-sm-2" value="{{request()->query('query')}}" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc" >
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary search-btn  my-1 mr-sm-2"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    

        <div class="row">
            <div class="col col-lg-2" style="background-color: grey;">
                <div style="background-color:blue">
                    <p> Filters </p>
                </div>
                <div style="background-color: white">
                    <div>
                        <button>Gender</button>
                        <div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col col-lg-10 pl-4 pr-0 " style=" width:100%; background-color: green">
                
                <div class="p-3 pr-2 pl-2">
                    <h5> {{request()->spec_filter}} <small>{{$searchResult->count()}}</small></h5>
                </div>
                <div class="mb-2" >
                    <div class="card mb-3" style="width: 100%;">
                        <div class="row no-gutters" style=" width: 100%;">
                            @foreach ($searchResult as $doctor)
                            <div class="col-md-3" style="  width: auto;
                            height: 100%;
                            padding-left:35px;
                            padding-top: 15px;
                            ">
                                <img src="filming-event-videography-served-tables-600w-782216446.jpg" class=" " alt="..." style="  
                                width: 150px;
                                height: 150px;
                                overflow: hidden;
                                border-radius: 50%;">
                            </div>

                            <div class="col-md-9">
                                <div class="card-body">
                                <h5 class="card-title mb-0" >Doctor <a href="#">{{$doctor->first_name}} {{$doctor->last_name}}</a> </h5>
                                <small>{{$doctor->specilization}}</small>
                                    <p class="card-text mt-2" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                        Deserunt quibusdam sequi natus adipisci, nulla in iure ut deleniti atqu
                                        e dolorum enim voluptatum magnam! Veritatis reiciendis necessitatibus dist
                                        inctio iste expedita fugit.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero corporis 
                                    sint, ipsa maxime ut explicabo voluptatibus delectus, nobis eaque voluptatum e
                                    veniet minima dicta perspiciatis soluta voluptas ullam provident optio alias?</p>
                                </div>
                            </div>
                            @endforeach
                            {{$searchResult->appends(request()->input())->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>