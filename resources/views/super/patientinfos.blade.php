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
                                    <h3 class="mb-1 mb-sm-0"> {{ auth('admin')->user()->name }}, We Have Total {{$count}} Patient</h3>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block"> </p>
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
                                                        <th>  Image </th>
                                                        <th>  Email </th>

                                                        <th>  Mobile </th>
                                                        <th>  Age </th>
                                                        <th>  Address </th>

                                                        <th>  Gender </th>
                                                        <th>  Created At </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $data3)
                                                        <tr>
                                                            <td>@php if(!empty($data3->image))
                            {
                                                                @endphp
                                                                <img src="{{ url('/upload/'.$data3->image) }}" style="height: 60px; width: 60px; border-radius: 100%;">
                                                                @php }else{ @endphp

                                                                <p>No Image Found</p>
                                                                @php } @endphp
                                                            </td>
                                                            <td> {{$data3->email}} </td>

                                                            <td> {{$data3->mobile}} </td>
                                                            <td> {{$data3->age}} </td>
                                                            <td> {{$data3->address}} </td>

                                                            <td> {{$data3->gender}} </td>

                                                            <td> {{$data3->created_at->diffForHumans()}} </td>








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
