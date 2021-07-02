@extends('frontend.main')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('https://image.freepik.com/free-vector/contact-us-concept-landing-page_52683-12860.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Contact Us</h1>
                    <p>Contact Us Today For Any Doubt or Questions.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 mb-5">
                    <form action="{{url('/contact/submit')}}" method="post" enctype="multipart/form-data">
                        @if(session('message'))

                            <p class ="alert alert-success">
                                {{session('message')}}
                            </p>

                        @endif
                        <br>

                        {{csrf_field()}}


                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="exampleInputMobile" class="font-weight-bold">Full Name</label>

                                <input  type="text" class="form-control" style="color: black"   id="name" name="fullname"  placeholder=" Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="exampleInputMobile" class="font-weight-bold">Email</label>

                                <input  type="email" class="form-control" style="color: black"   id="name" name="email"  placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="exampleInputMobile"class="font-weight-bold">Subject</label>

                                <input  type="text" class="form-control" style="color: black"   id="name" name="subject"  placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="exampleInputaddress" class="font-weight-bold">Message</label>

                                <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                          placeholder="Say hello to us"></textarea>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>

                </div>
                <div class="col-lg-4 ml-auto">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3">Contact Info</h3>
                        <p class="mb-0 font-weight-bold text-black">Address</p>
                        <p class="mb-4 text-black">203 Fake St. Mountain View, San Francisco, California, USA</p>

                        <p class="mb-0 font-weight-bold text-black">Phone</p>
                        <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                        <p class="mb-0 font-weight-bold text-black">Email Address</p>
                        <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                    </div>

                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h5 text-black mb-3 text-black">More Info</h3>
                        <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic
                            consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
                        <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>
    @endsection
