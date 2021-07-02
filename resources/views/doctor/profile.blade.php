@extends('multiauth::layouts.masterhome') @section('content')


    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card" style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);

 /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

">
                <div class="card-body">
                    <div class="container" >
                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    @foreach($data as $datas)
                                        <div class="profile-img">
                                            @php if(!empty($datas->image))
                            {
                                            @endphp
                                            <img src="{{ url('/upload/'.$datas->image) }}" style="height: 150px; width: 150px; border-radius: 100%;">
                                            @php }else{ @endphp

                                            <img src="{{asset('/ass/images/man.png')}}" style="height: 150px; width: 150px; border-radius: 100%;">
                                            @php } @endphp

                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h3 style="color: black;font-family: "Rubik", sans-serif;">
                                        {{ auth('admin')->user()->name }}'s Profile
                                        </h3>
                                        <br>
                                        <br>
                                        <br>
                                        <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p>-->

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit"
                                           class="btn btn-behance" name="btnAddMore" value="Update Profile"/>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-work" >
                                        <h5 style="color: black;font-family: "Rubik", sans-serif;">User profile</h5>
                                        <!-- <a href="">Website Link</a><br/>
                                         <a href="">Bootsnipp Profile</a><br/>
                                         <a href="">Bootply Profile</a>
                                         <p>SKILLS</p>-->
                                        <a href=""style="color: black;font-family: "Rubik", sans-serif;">Appointments</a><br/>
                                        <a href=""style="color: black;font-family: "Rubik", sans-serif;">Treatment</a><br/>
                                        <a href=""style="color: black;font-family: "Rubik", sans-serif;">Donar</a><br/>
                                    </div>
                                </div>
                                <div class="col-md-8">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label style="color: black;font-family:'ROG Fonts' ">Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ auth('admin')->user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label style="color: black;font-family: 'ROG Fonts'">Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ auth('admin')->user()->email }}</p>
                                        </div>
                                    </div>
                                    @foreach($data as $datas)
                                        @if(empty($datas->mobile))
                                            <h2>Please, Add the detials first</h2>
                                        @else
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="color: black;font-family:'ROG Fonts'">Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$datas->mobile}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="color: black;font-family:'ROG Fonts'">Age</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$datas->age}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="color: black;font-family:'ROG Fonts'">Clinic/Hospital Address</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$datas->address}}</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="color: black;font-family: 'ROG Fonts'">Clinic/Hospital Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$datas->chname}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label style="color: black;font-family: 'ROG Fonts'">Gender</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$datas->gender}}</p>
                                                </div>
                                            </div>
                                </div>
                            @endif
                            @endforeach
                        </form>
                    </div>


                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">

                    </script>
                </div>
            </div>
        </div>
    </div>

@endsection
