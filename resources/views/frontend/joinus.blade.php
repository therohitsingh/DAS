@extends('frontend.main')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('https://image.freepik.com/free-vector/health-professional-team-concept_23-2148485651.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Join Us</h1>
                    <p>Join Us as an Doctor Today.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
    <div class="col-md-12 col-lg-7 mb-5">
    <form action="{{url('/join/save')}}" method="post" enctype="multipart/form-data">
        @if(session('message'))

            <p class ="alert alert-success">
                {{session('message')}}
            </p>

        @endif
        <br>

        {{csrf_field()}}


        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
            <label for="exampleInputMobile" class="font-weight-bold">Doctor Name</label>

                <input  type="text" class="form-control" style="color: black"   id="name" name="name"  placeholder="Doctor Name">
            </div>
        </div>
                <div class="form-group row">
                    <div class="col-md-12 mb-3 mb-md-0">
                    <label for="exampleInputMobile" class="font-weight-bold">Email</label>

                        <input  type="text" class="form-control" style="color: black"   id="name" name="email"  placeholder="Doctor Email">
                    </div>
                </div>
        <div class="form-group row">
            <div class="col-md-12 mb-3 mb-md-0">
            <label for="exampleInputMobile"class="font-weight-bold">Doctor Specialization</label>

                <input  type="text" class="form-control" style="color: black"   id="name" name="special"  placeholder="Doctor Name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12 mb-3 mb-md-0">
            <label for="exampleInputaddress" class="font-weight-bold">Doctor Clinic/Hospital Name</label>

                <input  type="text" class="form-control"  style="color: black"  id="address"  name="chname" placeholder="Enter Clinic/Hospital Name"  required>
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
