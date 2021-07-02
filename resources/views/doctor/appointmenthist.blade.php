@extends('multiauth::layouts.masterhome') @section('content')

    <div class="main-panel">
        <div class="content-wrapper">

                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(153,103,186,1) 41.2%, rgba(0,113,227,1) 90% );
">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-xl-2">
                                            <img src="{{asset('/ass/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                                        </div>
                                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                                            <h4 class="mb-1 mb-sm-0"> {{ auth('admin')->user()->name }}, Your Appointments !</h4>
                                            <p class="mb-0 font-weight-normal d-none d-sm-block">Check out your Appointments </p>
                                        </div>




            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                            <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual">
                                <thead>
                                <tr>
                                    <th> Patient Email </th>
                                    <th>  Name </th>
                                    <th>  Mobile </th>
                                    <th>  Address </th>
                                    <th>  Blood </th>

                                    <th>  Date </th>
                                    <th>  Time </th>
                                    <th> Cancel </th>
                                    <th> Update</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $data3)
                                <tr>

                                        <td> {{$data3->patemail}} </td>
                                        <td> {{$data3->patname}} </td>
                                        <td> {{$data3->patmob}} </td>
                                        <td> {{$data3->patadd}} </td>
                                        <td> {{$data3->patblood}} </td>

                                        <td> {{$data3->appndate}} </td>
                                        <td> {{$data3->appntime}} </td>

                                        <td><a class="btn  btn-danger" href="{{url('/doctor/deleteappointment/'.$data3->id)}}">Cancel</a></td>

                                    <td><a class="btn  btn-danger" style="background-color: #00a045; border-color:#00a045; " href="{{url('/doctor/updatetime/'.$data3->id)}}">Update</a></td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
