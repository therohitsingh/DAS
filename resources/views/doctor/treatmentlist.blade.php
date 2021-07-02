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
                                    <h4 class="mb-1 mb-sm-0"> {{ auth('admin')->user()->name }}, These are the Treatment Request !</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Please Try to Give Treatment response as fast as you can. </p>
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
                                                        <th> Patient Email </th>
                                                        <th>  Name </th>
                                                        <th>  Blood </th>
                                                        <th>  Symptoms </th>
                                                        <th>  Medical History </th>
                                                        <th>  Meet ID </th>
                                                        <th>  Requested At </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $data3)
                                                        <tr>

                                                            <td> {{$data3->patmail}} </td>
                                                            <td> {{$data3->patname}} </td>
                                                            <td> {{$data3->patblood}} </td>

                                                            <td> {{$data3->symp}} </td>
                                                            <td> {{$data3->medhist}} </td>
                                                            <td> {{$data3->gmeetid}} </td>
                                                            <td> {{$data3->created_at->diffForHumans()}} </td>






                                                            <td><a class="btn  btn-danger" style="background-color: #00a045; border-color:#00a045; " href="{{url('/doctor/treatment/'.$data3->id)}}">Treatment</a></td>

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
