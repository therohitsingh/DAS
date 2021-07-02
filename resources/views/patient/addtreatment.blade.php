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
                                    <h4 class="mb-1 mb-sm-0">  {{ Auth::user()->name }} Search Doctor for Treatment And Send Request </h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">{{ Auth::user()->name }} Search Doctor by Name , Clinic/Hospital Name or By Address You Want To Search For </p>
                                </div>
                                <div class="col-lg-12 stretch-card">
                                    <div class="card">
                                        <div class="card-body">


                                            <form action="{{url('/dashboard/streat')}}" method="post" role="search">
                                                @if(session('message'))

                                                    <p class ="alert alert-success">
                                                        {{session('message')}}
                                                    </p>

                                                @endif
                                                <br>
                                                {{ csrf_field() }}
                                                <div class="form-group row">
                                                    <input type="text" style="color: white;" class="form-control" name="q"
                                                           placeholder="Search Doctor .."> <span class="input-group-btn">
                                <span class="glyphicon glyphicon-search"></span>

                                  <br>
                                    <br>

                                 <button type="submit" class="btn btn-primary mr-2">Search</button>
                                                </div>
                                            </form>
                                            <div class="table-responsive">
                                                @if(isset($details))
                                                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>

                                                    <table class="table table-bordered table-contextual">
                                                        <thead>
                                                        <tr>
                                                            <th>Profile </th>
                                                            <th>Name</th>

                                                            <th>Specialization</th>
                                                            <th>Clinic/Hospital Name</th>
                                                            <th>Clinic/Hospital Address</th>
                                                            <th>Fees</th>
                                                            <th>Appointment</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($details as $user)
                                                            <tr>
                                                                <td>@php if(!empty($user->image))
                            {
                                                                    @endphp
                                                                    <img src="{{ url('/upload/'.$user->image) }}" style="height: 100px; width: 100px; border-radius: 100%;">
                                                                    @php }else{ @endphp

                                                                    <p>No Image Found</p>
                                                                    @php } @endphp
                                                                </td>
                                                                <td>Dr.{{$user->name}}</td>

                                                                <td>{{$user->specialization}}</td>
                                                                <td>{{$user->chname}}</td>
                                                                <td>{{$user->address}}</td>
                                                                <td>{{$user->fees/2}}</td>



                                                                <td><a class="btn btn-warning btn-rounded btn-fw" href="{{url('/dashboard/treatment/'.$user->id)}}"> Request</a></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                @endif
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
@endsection
