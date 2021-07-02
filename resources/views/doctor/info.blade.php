@extends('multiauth::layouts.masterhome') @section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card" STYLE="background: #000000;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #e74c3c, #000000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #e74c3c, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
                        <div class="card-body py-0 px-0 px-sm-3">
                            <div class="row align-items-center">
                                <div class="col-4 col-sm-3 col-xl-2">
                                    <img src="{{asset('/ass/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                                </div>
                                <div class="col-5 col-sm-7 col-xl-8 p-0">
                                    <h4 class="mb-1 mb-sm-0">Hi, {{ auth('admin')->user()->name }}</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Please {{ auth('admin')->user()->name }} Add your Information for your Better Patient Reach </p>
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
                    <form action="{{url('/doctor/submit')}}" method="post" enctype="multipart/form-data">
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                        <br>

                        {{csrf_field()}}
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" style="color: black" id="email" style="color: white"  name="name" value="{{ auth('admin')->user()->name }}"   class="form-control">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input readonly type="text" style="color: black" id="email" style="color: white"  name="email" value="{{ auth('admin')->user()->email }}"   class="form-control">
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Specialization</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" style="color: black" id="email" style="color: white"  name="specialization" value="{{ auth('admin')->user()->specialization }}"   class="form-control">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" style="color: white"  id="mobile" name="mobile" placeholder="Mobile number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Age</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" style="color: white" id="address"  name="age"   placeholder="Enter Age"  required>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Clinic or Hospital Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" style="color: white" id="address"  name="chname"   placeholder="Enter your Clinic or Hospital Name"  required>
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Clinic/Hospital Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" style="color: white" id="address"  name="address"   placeholder="Enter Clinic or Hospital address"  required>
                            </div>
                        </div>
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" id="membershipRadios1" value="male" > Male </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" id="membershipRadios2"value="female" > Female </label>
                                </div>
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="exampleInputaddress" class="col-sm-3 col-form-label">Treatment Fees</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" style="color: white" id="address"  name="fees"   placeholder="Enter Fees"  required>
                                </div>
                            </div>


                        <div class="form-group col-sm-12">
                            <label for="exampleInputcity">Upload Image</label>
                            <input type="file" class="form-control" id="image"  name="image"  placeholder="Enter image" required>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
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
