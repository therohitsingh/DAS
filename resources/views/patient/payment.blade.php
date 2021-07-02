@extends('dashboard.master') @section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card" style="background-image: linear-gradient( 109.6deg,  rgba(238,58,136,1) 11.2%, rgba(128,162,245,1) 91.1% );
">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{asset('/ass/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0"> Hi, {{ Auth::user()->name }}</h4>
                                <p class="mb-0 font-weight-normal d-none d-sm-block">You have to Pay ! </p>
                            </div>

                            <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">


                <tbody>
                <h1><center><span>₹{{$data+$data1}}</span></center></h1>
                <br>
                <br>
                <center> <td><a class="btn  btn-danger" href="{{url('/doctor/deleteappointment/')}}">Pay</a></td></center>
                </tbody>
            </div>
        </div>
    </div>
</div>
@endsection
