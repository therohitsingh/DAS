@extends('multiauth::layouts.masterhome') @section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="color: deepskyblue">Hey {{ auth('admin')->user()->name }},</h4>
                    <p class="card-description">You can Change the appointment date and time </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{url('/doctor/treatment/submit')}}" method="post" >
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                        <br>

                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Patient name</label>
                            <div class="col-sm-9">
                                <input readonly type="text" style="color: black;" name="patname"  class="form-control"  value="{{$data->patname}}" >
                            </div>
                        </div>
                            <div class="col-sm-9">
                                <input hidden type="text" style="color: black;" name="patmail"  class="form-control"  value="{{$data->patmail}}" >
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Blood Group</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" style="color: black;" name="patblood"  class="form-control"  value="{{$data->patblood}}" >
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Symptoms</label>
                            <div class="col-sm-9">
                                <input readonly type="text" style="color: black;" name="symp" class="form-control"  value="{{$data->symp}}" >
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Medical History</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" style="color: black;" name="medhist" class="form-control"  value="{{$data->medhist}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Prescription</label>
                                <div class="col-sm-9">

                                        <textarea name="priscrip" id="" cols="30" rows="6" style="color: white;" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Medicines</label>
                                <div class="col-sm-9">
                                    <textarea name="medic" id="" cols="30" rows="4" style="color: white;" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Gmeet ID</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" style="color: black;" name="gmeetid" class="form-control"  value="{{$data->gmeetid}}" >
                                </div>
                            </div>
                            <br>

                        <button type="submit" class="btn btn-inverse-primary mr-2">Submit</button>
                        <button class="btn btn-inverse-danger">Cancel</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
