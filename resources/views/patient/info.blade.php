@extends('dashboard.master') @section('content')
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
                                    <h4 class="mb-1 mb-sm-0">Hi, {{ Auth::user()->name }}</h4>
                                    <p class="mb-0 font-weight-normal d-none d-sm-block">Please {{ Auth::user()->name }} Add your Information for your Better Treatment </p>
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
                    <form action="{{url('/dashboard/submit')}}" method="post" enctype="multipart/form-data">
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                        <br>

                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input readonly type="text" style="color: black" id="email" style="color: white"  name="email" value="{{ Auth::user()->email }}"   class="form-control">
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
                            <label for="exampleInputaddress" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" style="color: white" id="address"  name="address"   placeholder="Enter address"  required>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label for="cllg" class="col-sm-3 col-form-label">Blood Group</label>
                            <div class="col-sm-9">
                                <select name="blood" style="color: white" class="form-control text" required>
                                    <option  value="0"selected disabled>Select</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
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
                                        <input type="radio" class="form-check-input" name="gender" id="membershipRadios2" value="female" > Female </label>
                                </div>
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

@endsection
