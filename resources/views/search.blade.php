
@extends('master')

@section('content')
    <div>
        <section class="upper-div"> 
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form  action="{{route('result')}}" method="GET">
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
                                    <button type="submit" class="btn btn-primary search-btn  my-1 mr-sm-2">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<div class="container-fluid">
        <div class="row">
            <div  id = "sticky" class="col-2 pt-3">
            <form action="{{route('result')}}" method="GET">
                    <div class="div-border filter-div ">
                        <p class="m-0"> Filter By </p>
                    </div>
                    <div>
                        <div class="div-border">
                            <p class="filter-text m-0">Gender</p>
                            <hr class="m-0 hr-color">
                            <div class="pl-3 pt-3 pb-2">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="male">
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                  </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="female">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="div-border">
                            <p class="filter-text m-0">Title</p>
                            <hr class="m-0 hr-color">
                            <div class="pl-3 pt-3 pb-2">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="professor">
                                    <label class="form-check-label" for="professor">
                                        Professor
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="lecturer">
                                    <label class="form-check-label" for="lecturer">
                                        Lecturer
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="consultant">
                                    <label class="form-check-label" for="consultant">
                                        Consultant
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="specialist">
                                    <label class="form-check-label" for="specialist">
                                        Specialist
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="div-border">
                            <p class="filter-text m-0">Availability</p>
                            <hr class="m-0 hr-color">
                            <div class="pl-3 pt-3 pb-2">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="anyday">
                                    <label class="form-check-label" for="anyday">
                                        Any Day
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="today">
                                    <label class="form-check-label" for="today">
                                        Today
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="tomorrow">
                                    <label class="form-check-label" for="tomorrow">
                                        Tomorrow
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="div-border">
                            <p class="filter-text m-0">Availability</p>
                            <hr class="m-0 hr-color">
                            <div class="pl-3 pt-3 pb-2">
                                <div class="form-check mb-2">
                                    <input id="price1" type="checkbox" name="price[twenty]" class="form-check-input" value="20" onChange="this.form.submit()" {{ request()->filled('category_id.samsung') ? 'checked' :''}}>
                                    <label class="form-check-label" for="price1">
                                        20
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="price[]" value="100" id="price2">
                                    <label class="form-check-label" for="price2">
                                        100
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="price[]" value="20" id="price1">
                                    <label class="form-check-label" for="price1">
                                        300
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger"> Filter </button>
                    </form>
                </div>
            </div>


            <div class="col-10 pl-4">
                <div class="p-3 pr-2 pl-2 pt-4">
                    <h5> {{request()->spec_filter}} <small>{{$searchResult->count()}}</small></h5>
                </div>
                <div class="mb-2" >
                    @foreach ($searchResult as $doctor)
                    <div class="card mb-3">
                        <div class="row" >
                            <div class="col-md-2">
                                <img src="https://images.unsplash.com/photo-1600442715397-d9df4afe6229?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="doc-img" alt="..." >
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title mb-0" >Doctor <a href="#">{{$doctor->first_name}} {{$doctor->last_name}}</a> </h5>
                                    <small>{{$doctor->specilization}}</small>
                                    <div class="mt-2">
                                        <div><i class="fa fa-hospital-o colorize-icon"></i><span class="pl-2"> {{$doctor->location}}</span></div>
                                        <div><i class="fa fa-money colorize-icon"></i><span class="pl-2">fees: {{$doctor->price}}</span></div>
                                        <div><i class="fa fa-phone colorize-icon"></i><span class="pl-2">phone: {{$doctor->phone}}</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class = "col-md-1">
                                <a href="#" class="btn btn-danger mt-1 p-2 " style="width:95%">Book</a>
                            </div>
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