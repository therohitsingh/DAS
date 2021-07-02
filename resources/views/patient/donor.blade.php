@extends('dashboard.master') @section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 stretch-card">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card" style="background-image: linear-gradient( 109.6deg,  rgba(48,207,208,1) 11.2%, rgba(51,8,103,1) 92.5% );
">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <div class="row align-items-center">
                                    <div class="col-4 col-sm-3 col-xl-2">
                                        <img src="{{asset('/ass/images/dashboard/Group126@2x.png')}}" class="gradient-corona-img img-fluid" alt="">
                                    </div>
                                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                                        <h4 class="mb-1 mb-sm-0"> {{ Auth::user()->name }}   Donating Organ ?</h4>
                                        <p class="mb-0 font-weight-normal d-none d-sm-block">We appreciate you for donating  {{ Auth::user()->name }}  </p>
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
                    <form action="{{url('/dashboard/donor/submitorgan')}}" method="post" enctype="multipart/form-data">
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                        <br>

                        {{csrf_field()}}

                                <div class="col-sm-9">
                                    <input hidden type="text" style="color: black" id="email" style="color: white"  name="name" value="{{ Auth::user()->name }}"   class="form-control">
                                </div>

                            <div class="col-sm-9">
                                <input hidden type="text" style="color: black" id="email" style="color: white"  name="email" value="{{ Auth::user()->email }}"   class="form-control">
                            </div>

                            @foreach($data as $datas)

                            <div class="col-sm-9">
                                <input hidden type="tel" class="form-control" style="color: black"  id="mobile" name="mobile" value="{{$datas->mobile}}" placeholder="Mobile number">
                            </div>

                            <div class="col-sm-9">
                                <input hidden type="text" class="form-control" style="color: black" id="address"  name="age"   placeholder="Enter Age" value="{{$datas->age}}" required>
                            </div>

                            <div class="col-sm-9">
                                <input hidden type="text" class="form-control" style="color: black" id="address"  name="address"   placeholder="Enter address" value="{{$datas->address}}" required>
                            </div>

                                <div class="col-sm-9">
                                    <input hidden type="text" class="form-control" style="color: black;" id="address"  name="blood"   placeholder="Enter address" value="{{$datas->blood}}"  required>
                                </div>



                                    <div class="col-sm-9">
                                        <input hidden type="text" class="form-control" style="color: black;" id="address"  name="gender"   placeholder="Enter address" value="{{$datas->gender}}"  required>
                                    </div>



                            @endforeach

                            <div class="form-group row" >
                                <label for="cllg" class="col-sm-3 col-form-label">Donate Organ</label>
                                <div class="col-sm-9">
                                    <select name="organ" style="color: white" class="form-control text" required>
                                        <option  value="0"selected disabled>Select</option>
                                        <option value="Eye">Eye</option>
                                        <option value="Heart">Heart</option>
                                        <option value="Liver">Liver</option>
                                        <option value="Kidney">Kidney</option>
                                        <option value="Blood">Blood</option>
                                        <option value="Tissue">Tissue</option>
                                        <option value="Cornea">Cornea</option>
                                    </select>
                                </div>
                            </div>
<br>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
