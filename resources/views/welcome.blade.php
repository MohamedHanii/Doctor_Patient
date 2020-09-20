@extends('master')

@section('title','Home')
    
@section('content')


<section class="section section-search">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <div class="row">
                <div class=" col banner-header text-center">
                    <h1>Search Doctor, Make an Appointment</h1>
                    <p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
                </div>
            </div>
            <div clas="row search-box mt-2">
            <form action="" method="GET">
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="form-group col-sm-12 col-md-3">
                            <select class="custom-select my-1 mr-sm-2" id="price-filter">
                                <option selected>Price</option>
                                @foreach($prices as  $price)
                                    <option value="{{$price}}">{{$price}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-12 col-md-3">
                            <select class="custom-select my-1 mr-sm-2" id="spec-filter">
                                <option selected>Specilization</option>
                                @foreach($specs as $key => $spec)
                                    <option value="{{$spec}}">{{$spec}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-12 col-md-3">
                            <select class="custom-select my-1 mr-sm-2" id="location-filter">
                                <option selected>Location</option>
                                @foreach($locations as $location)
                                    <option value="{{$location}}">{{$location}}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class=" col-sm-12 col-md-3">
                            <button type="submit" class="btn btn-primary search-btn  my-1 mr-sm-2"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="info-section">
    <div class="empty-space col-md-b100 col-xs-b40"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="empty-space col-md-b0 col-xs-b30"></div>
                <div class="tm-icon-box">
                    <div class="tm-icon"><i class="fa fa-user-md"></i></div>
                    <h2 class="tm-icon-box-title">Qualified Doctors</h2>
                    <p class="tm-icon-box-text">Our doctors have a wide range of clinical experience ranging from newly qualified junior doctors to senior consultants.</p>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="empty-space col-md-b0 col-xs-b30"></div>
                <div class="tm-icon-box">
                    <div class="tm-icon"><i class="fa fa-ambulance"></i></div>
                    <h2 class="tm-icon-box-title">Emergency Care
                    </h2>
                    <p class="tm-icon-box-text">Our centers provide convenient and high-quality care for a variety of common illnesses and injuries.</p>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="empty-space col-md-b0 col-xs-b30"></div>
                <div class="tm-icon-box">
                    <div class="tm-icon"><i class="fa fa-hospital-o"></i></div>
                    <h2 class="tm-icon-box-title">24 Hours Service</h2>
                    <p class="tm-icon-box-text">Our technical team is available for 24/7, We always prepared any emergency situation with 10 ambulances.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="empty-space col-md-b100 col-xs-b70"></div>

    <div class="tm-section-heading text-center">
        <h2>Our Top Rated doctors</h2>
        <div class="tm-section-seperator stars"><span></span></div>
        <div class="empty-space col-md-b60 col-xs-b40 "></div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">

            <div class="col mb-4">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>

            <div class="col mb-4">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            
          </div>
    </div>


</section>


@endsection