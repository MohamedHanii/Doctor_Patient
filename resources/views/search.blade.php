
@extends('master')

@section('content')
    <div>
        <section class="upper-div"> 
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form  action="{{route('result')}}" method="GET" id="form1">
                            <div class="row">
                                <div class="col-sm-12 col-lg-2">
                                    <div class="form-group">
                                        <select name="spec_filter" class="custom-select my-1 mr-sm-2" id="spec-filter">
                                            <option selected>{{Request()->spec_filter}}</option>
                                            @foreach($specs as $key => $spec)
                                                <option value="{{$spec}}">{{$spec}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <div class="form-group">
                                        <select name="price_filter" class="custom-select my-1 mr-sm-2" id="price-filter">
                                            <option selected>{{Request()->price_filter}}</option>
                                            @foreach($prices as  $price)
                                                <option value="{{$price}}">{{$price}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <div class="form-group">
                                        <select name="location_filter" class="custom-select my-1 mr-sm-2" id="location-filter">
                                            <option selected>{{Request()->location_filter}}</option>
                                            @foreach($locations as $location)
                                                <option value="{{$location}}">{{$location}}</option>
                                            @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-5 ">
                                <input name="query" id= "query" type="text" class="form-control my-1 mr-sm-2" value="{{request()->query('query')}}" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc" >
                                </div>
                                <div class="col-sm-12 col-lg-1">
                                    <button type="submit" id ="submitBtn" class="btn btn-primary search-btn  my-1 mr-sm-2">Find</button>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>
<div class="container-fluid">
        <div class="row">
            <div  id = "sticky" class="col-lg-2 pt-3 d-none d-lg-block">
                    <div class="div-border filter-div ">
                        <p class="m-0"> Filter By </p>
                    </div>
                    <div>
                        <div class="div-border">
                            <p class="filter-text m-0">Gender</p>
                            <hr class="m-0 hr-color">
                            <div class="pl-3 pt-3 pb-2">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="male" name="gender[male]" value="male" onChange="this.form.submit()" {{ request()->filled('gender.male') ? 'checked' :''}}>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                  </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="female" name="gender[female]" value="female" onChange="this.form.submit()" {{ request()->filled('gender.female') ? 'checked' :''}}>
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
                                    <input class="form-check-input" type="checkbox"  id="professor"  name="title[professor]" value="professor" onChange="this.form.submit()" {{ request()->filled('title.professor') ? 'checked' :''}}>
                                    <label class="form-check-label" for="professor">
                                        Professor
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="lecturer" name="title[lecturer]" value="lecturer" onChange="this.form.submit()" {{ request()->filled('title.lecturer') ? 'checked' :''}}>
                                    <label class="form-check-label" for="lecturer">
                                        Lecturer
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"  id="consultant" name="title[consultant]" value="consultant" onChange="this.form.submit()" {{ request()->filled('title.consultant') ? 'checked' :''}}>
                                    <label class="form-check-label" for="consultant">
                                        Consultant
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"  id="specialist" name="title[specialist]" value="specialist" onChange="this.form.submit()" {{ request()->filled('title.specialist') ? 'checked' :''}}>
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
                                    <input class="form-check-input" type="checkbox"  id="anyday" name="available[anyday]" value="anyday" onChange="this.form.submit()" {{ request()->filled('available.anyday') ? 'checked' :''}}>
                                    <label class="form-check-label" for="anyday">
                                        Any Day
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"  id="today" name="available[today]" value="today" onChange="this.form.submit()" {{ request()->filled('available.today') ? 'checked' :''}}>
                                    <label class="form-check-label" for="today">
                                        Today
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox"  id="tomorrow" name="available[tomorrow]" value="tomorrow" onChange="this.form.submit()" {{ request()->filled('available.tomorrow') ? 'checked' :''}} >
                                    <label class="form-check-label" for="tomorrow">
                                        Tomorrow
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="div-border">
                            <p class="filter-text m-0">Availability</p>
                            <hr class="m-0 hr-color">
                            <div class="pl-3 pt-3 pb-2">
                                <div class="form-check mb-2">
                                    <input id="price1" type="checkbox" name="price[one]" class="form-check-input" value="20" onChange="this.form.submit()" {{ request()->filled('price.one') ? 'checked' :''}}>
                                    <label class="form-check-label" for="price1">
                                        20
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="price[two]" value="100" id="price2" onChange="this.form.submit()" {{ request()->filled('price.two') ? 'checked' :''}}>
                                    <label class="form-check-label" for="price2">
                                        100
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="price[three]" value="300" id="price3"onChange="this.form.submit()"  {{ request()->filled('price.three') ? 'checked' :''}}>
                                    <label class="form-check-label" for="price3">
                                        300
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                    </form>
                </div>
            </div>


            <div class="col-12 col-lg-10 pl-4">
                <div class="p-3 pr-2 pl-2 pt-4">
                    <h5> {{request()->spec_filter}} <small>{{$searchResult->count()}}</small></h5>
                </div>
                <div class="mb-2" >
                    @foreach ($searchResult as $doctor)
                    <div class="card mb-3">
                        <div class="row" >
                            <div class=" col-sm-4 col-md-3 col-lg-3 col-xl-2 img-div" >
                                <img src="https://images.unsplash.com/photo-1588611911587-7bc55b45d588?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=687&q=80" class="doc-img"alt="..." >
                            </div>
                            <div class="col-sm-8 col-md-9 col-lg-7 col-xl-8">
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
                            <div class = "col-sm-12 col-lg-2 ">
                                <a href="#" class="btn btn-danger mt-1 p-2" style="width: 100%">Book</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class ="d-flex justify-content-center">
                        {{$searchResult->appends(request()->input())->links()}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    @endsection