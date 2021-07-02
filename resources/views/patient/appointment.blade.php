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
                                    <h4 class="mb-1 mb-sm-0">Hi, {{ Auth::user()->name }}</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block"> Please {{ Auth::user()->name }} Check the Appointment Details Carefully </p>
                                </div>
                                <div class="col-lg-12 stretch-card">
            <div class="card">
                <enter class="card-body">


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <center> <td>@php if(!empty($data->image))
                            {
                            @endphp
                            <img src="{{ url('/upload/'.$data->image) }}" style="height: 100px; width: 100px; border-radius: 100%;">
                            @php }else{ @endphp

                            <p>No Image Found</p>
                            @php } @endphp
                    </td></center>
                    <form action="{{url('/dashboard/appointment/submit')}}" method="post" enctype="multipart/form-data">
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                        <br>

                        {{csrf_field()}}

                        <div class="form-group row">

                            <div class="col-sm-9">
                                <input hidden type="text" style="color: black" id="email" style="color: black"  name="docemail" value="{{$data->email}}"   class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Doctor Name</label>
                            <div class="col-sm-9">
                                <input readonly type="text" class="form-control" style="color: black"   id="name" name="docname" value="{{$data->name}}" placeholder="Doctor Name">
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Doctor Specialization</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" class="form-control" style="color: black"   id="name" name="docspel" value="{{$data->specialization}}" placeholder="Doctor Name">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Doctor Clinic/Hospital Name</label>
                            <div class="col-sm-9">
                                <input readonly type="text" class="form-control"  style="color: black"  id="address"  name="dochname" value="{{$data->chname}}"  placeholder="Enter Clinic/Hospital Name"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Doctor Clinic/Hospital Address</label>
                            <div class="col-sm-9">
                                <input readonly type="text" class="form-control" style="color: black" id="address"  name="docadd" value="{{$data->address}}"   placeholder="Enter Clinic/Hospital Address"  required>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Doctor Fees</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" class="form-control" style="color: black" id="address"  name="docfee"  value="{{$data->fees}}"  placeholder="Enter address"  required>
                                </div>
                            </div>
                            @foreach($data1 as $datas)
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Patient Name</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" class="form-control" style="color: black" id="address"  value="{{ Auth::user()->name }}" name="patname"   placeholder="Enter Patient Name"  required>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-9">
                                    <input hidden type="text" class="form-control"style="color: black" id="address"  name="patemail" value="{{$datas->email}}"  placeholder="Enter address"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Patient Mobile</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" style="color: white;" id="address"  name="patmob" value="{{$datas->mobile}}"   placeholder="Enter mobile no."  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Patient Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" style="color: white" id="address"  name="patadd" value="{{$datas->address}}"   placeholder="Enter address"  required>
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-9">
                                    <input hidden type="text" class="form-control" style="color: black;" id="patblood" value="{{$datas->blood}}"  name="patblood"   placeholder="Enter address"  required>
                                </div>
                            </div>
                            @endforeach

                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Appointment Date</label>
                                <div class="col-sm-9">
                                    <input type="date" style="color: white;" name="appndate"  class="form-control" id="reservationDate">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Appointment Time</label>
                                <div class="col-sm-9">
                                    <input type="time" style="color: white;" name="appntime" class="form-control" id="reservationDate">
                                </div>
                            </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
