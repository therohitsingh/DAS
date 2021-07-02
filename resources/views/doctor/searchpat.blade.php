@extends('multiauth::layouts.masterhome') @section('content')
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
                                        <h4 class="mb-1 mb-sm-0"> {{ auth('admin')->user()->name }},You can Search Patient Here !</h4>
                                        <p class="mb-0 font-weight-normal d-none d-sm-block">You can search patient by Name , Address  </p>
                                    </div>

                                    <div class="col-lg-12 stretch-card">
        <div class="card">
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    @if(session('message'))

                        <p class ="alert alert-success">
                            {{session('message')}}
                        </p>

                    @endif
                    <br>
                <form action="{{url('/doctor/searchpat')}}" method="post" role="search">


                    {{ csrf_field() }}
                    <div class="form-group row">
                        <input type="text" style="color: white;" class="form-control" name="q"
                               placeholder="Search Patient"> <span class="input-group-btn">
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
                                <th>Profile</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Blood</th>
                                <th>Gender</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($details as $user)
                                <tr><td>@php if(!empty($user->image))
                            {
                                        @endphp
                                        <img src="{{ url('/upload/'.$user->image) }}" style="height: 100px; width: 100px; border-radius: 100%;">
                                        @php }else{ @endphp

                                        <p>No Image Found</p>
                                        @php } @endphp
                                    </td>

                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->age}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->blood}}</td>
                                    <td>{{$user->gender}}</td>


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
