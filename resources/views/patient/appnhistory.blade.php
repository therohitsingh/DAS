@extends('dashboard.master') @section('content')
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
                                    <h4 class="mb-1 mb-sm-0"> {{ Auth::user()->name }}, Your Appointments !</h4>
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
                                    <th> Doctor Email </th>
                                    <th> Doctor Name </th>
                                    <th> Specialization </th>
                                    <th> Clinic/Hospital Name </th>
                                    <th>  Address </th>
                                    <th> Fees </th>
                                    <th> Appointment Date </th>
                                    <th> Appointment Time </th>
                                    <th> Action </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $data3)
                                    <tr>
                                        <td> {{$data3->docemail}} </td>
                                        <td> Dr.{{$data3->docname}} </td>
                                        <td> {{$data3->docspel}} </td>
                                        <td> {{$data3->dochname}} </td>
                                        <td> {{$data3->docadd}} </td>
                                        <td> {{$data3->docfee}} </td>
                                        <td> {{$data3->appndate}} </td>
                                        <td> {{$data3->appntime}} </td>
                                        <td><a class="btn  btn-danger" href="{{url('/dashboard/deleteappointment/'.$data3->id)}}">Cancel</a></td>
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

@endsection
