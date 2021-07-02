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
                                    <h4 class="mb-1 mb-sm-0"> {{ Auth::user()->name }}, Your Treatments !</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">We Believe in Fast And Quality Treatment </p>
                                </div>


                                <br>

                                <div class="col-lg-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">

                                            @if(session('message'))

                                                <p class ="alert alert-success">
                                                    {{session('message')}}
                                                </p>

                                            @endif
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-contextual">
                                                    <thead>
                                                    <tr>
                                                        <th> Doc Name </th>
                                                        <th> Doc Email </th>

                                                        <th> Specialization </th>

                                                        <th> Fees </th>
                                                        <th> Symptoms </th>
                                                        <th> Prescription </th>
                                                        <th> Medicines </th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $data3)
                                                        <tr>
                                                            <td> Dr.{{$data3->docname}} </td>
                                                            <td> {{$data3->docmail}} </td>
                                                            <td> {{$data3->docspel}} </td>
                                                            <td> {{$data3->docfee}} </td>
                                                            <td> {{$data3->symp}} </td>
                                                            <td> {{$data3->priscrip}} </td>
                                                            <td> {{$data3->medic}} </td>
                                                            <td><a class="btn  btn-danger" href="{{url('/dashboard/deleteappointment/'.$data3->id)}}">Quit</a></td>
                                                            <td><a class="btn  btn-success" href="{{url('/dashboard/medicalreport/'.$data3->id)}}">Report</a></td>

@endforeach


                                                        </tr>

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
