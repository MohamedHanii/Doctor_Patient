@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                     Hi there, regular user {{Auth::user()->first_name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection