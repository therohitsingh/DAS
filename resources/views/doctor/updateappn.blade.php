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
                    <form action="{{url('/doctor/updated/')}}" method="post" >
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                        <br>

                        {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Appointment Date</label>
                            <div class="col-sm-9">
                                <input type="date" style="color: white;" name="appndate"  class="form-control"  value="{{$data->appndate}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Appointment Time</label>
                            <div class="col-sm-9">
                                <input type="time" style="color: white;" name="appntime" class="form-control"  value="{{$data->appntime}}" >
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
