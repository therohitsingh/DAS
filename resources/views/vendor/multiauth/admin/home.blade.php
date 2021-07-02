@extends('multiauth::layouts.masterhome')
@section('content')
    @if(auth('admin')->user()->specialization == null )
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card corona-gradient-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3 col-xl-2">
                                        <img src="{{asset('/ass/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                                        <h4 class="mb-1 mb-sm-0">Hey {{ auth('admin')->user()->name }}, How Are You Today ?</h4>
                                        <p class="mb-0 font-weight-normal d-none d-sm-block">With Great Power Comes Great Responsibilty !</p>
                                    </div>
                                    <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0"><a href="/doctor/register" style="color: white;">Add Doctor</a></h2>
                                            <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Add Doctor</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <img src="https://www.flaticon.com/svg/static/icons/svg/607/607414.svg" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0"><a href="/doctor/patientinfos" style="color: white;">Patients </a></h2>
                                            <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Get Patient Detials</h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <img src="https://www.flaticon.com/svg/static/icons/svg/3034/3034851.svg" class="gradient-corona-img img-fluid" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0"><a href="/doctor/joininfos" style="color: white;"> Joinings</a></h2>
                                            <p class="text-success ml-2 mb-0 font-weight-medium"> </p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">Requested Doctor Joining Detials </h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <img src="https://www.flaticon.com/svg/static/icons/svg/2641/2641491.svg" class="gradient-corona-img img-fluid" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



    @else
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card corona-gradient-card">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="{{asset('/ass/images/dashboard/Group126@2x.png')}}" style="height: 120px" class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Hey {{ auth('admin')->user()->name }}, How Are You Today ?</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Check out your Appointments And Treatments History!</p>
                                </div>
                                <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"><a href="/doctor/appointmenthistory" style="color: white;">Appointments</a></h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+2</p>
                            </div>
                            <h6 class="text-muted font-weight-normal">  Appointments List</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/2464/2464486.svg" class="gradient-corona-img img-fluid" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"><a href="/doctor/search" style="color: white;">Patients</a> </h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                            </div>
                            <h6 class="text-muted font-weight-normal">Patients Detials</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/3034/3034851.svg" class="gradient-corona-img img-fluid" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"><a href="/doctor/search" style="color: white;">Treatments</a></h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+4 </p>
                            </div>
                            <h6 class="text-muted font-weight-normal">Treatment Requests</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/2464/2464568.svg" class="gradient-corona-img img-fluid" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            @endif

<br>
            <br>
            <div class="row">


                <div class="col-md-6 col-xl-7 grid-margin stretch-card">
                    <div class="card">


                            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
                                <div class="item">
                                    <img src="{{ asset('https://image.freepik.com/free-vector/thank-you-doctors-nurses-concept_52683-36541.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('https://image.freepik.com/free-vector/doctors-concept-illustration_114360-1515.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('https://image.freepik.com/free-vector/online-doctor-with-computer_23-2148525681.jpg') }}" alt="">
                                </div>
                            </div>


                    </div>
                </div>
                <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To do list</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" style="color: white;" placeholder="Enter task..">
                                <button class="add btn btn-primary todo-list-add-btn">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Create invoice </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Meeting with Alita </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li class="completed">
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Covid Update</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-us"></i>
                                                </td>
                                                <td>USA</td>
                                                <td class="text-right"> 1500 </td>
                                                <td class="text-right font-weight-medium"> 56.35% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-in"></i>
                                                </td>
                                                <td>India</td>
                                                <td class="text-right"> 800 </td>
                                                <td class="text-right font-weight-medium"> 33.25% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-au"></i>
                                                </td>
                                                <td>Australia</td>
                                                <td class="text-right"> 760 </td>
                                                <td class="text-right font-weight-medium"> 15.45% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-gb"></i>
                                                </td>
                                                <td>United Kingdom</td>
                                                <td class="text-right"> 450 </td>
                                                <td class="text-right font-weight-medium"> 25.00% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-ro"></i>
                                                </td>
                                                <td>Romania</td>
                                                <td class="text-right"> 620 </td>
                                                <td class="text-right font-weight-medium"> 10.25% </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="flag-icon flag-icon-br"></i>
                                                </td>
                                                <td>Brasil</td>
                                                <td class="text-right"> 230 </td>
                                                <td class="text-right font-weight-medium"> 75.00% </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div id="audience-map" class="vector-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
