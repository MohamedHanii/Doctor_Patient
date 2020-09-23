
@extends('master')

@section('content')
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

    @endsection