@extends('frontend.main')

@section('content')
    @include('frontend.slider')
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">Our Features</h2>
                <p>Here are some of our Top Features</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="unit-9">
                    <div class="image" style="background-image: url('{{asset('https://image.freepik.com/free-vector/appointment-booking-mobile-interface-concept_23-2148556785.jpg')}}');"></div>
                    <div class="unit-9-content">
                        <h2>Book Online Appointment</h2>
                        <span>Book Appointment Whenever you want.</span>

                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="unit-9">
                    <div class="image" style="background-image: url('{{asset('https://image.freepik.com/free-vector/illustration-person-donating-blood_23-2148236972.jpg')}}');"></div>
                    <div class="unit-9-content">
                        <h2>Donate Organ</h2>
                        <span>We make sure that your contribution won't go waste.</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="unit-9">
                    <div class="image" style="background-image: url('{{asset('https://image.freepik.com/free-vector/people-donating-blood-flat-design_23-2148248632.jpg')}}');"></div>
                    <div class="unit-9-content">
                        <h2>Seach Donors Nearby</h2>
                        <span>Need Help, Search Donor Nearby You.</span>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="unit-9">
                    <div class="image" style="background-image: url('{{asset('https://image.freepik.com/free-vector/male-doctor-smartphone-screen-chat-bubble-communication-online-consultation-healthcare-medicine-medical-advice-concept_48369-32442.jpg')}}');"></div>
                    <div class="unit-9-content">
                        <h2>Online Treatment  </h2>
                        <span>Book Online Treatment and get instant Treatment.</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="site-section">

    <div class="container">

        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
                <h2 class="mb-5">Why Should You Choose Us ?</h2>
                <p>Our app services let you do most of the tasks –from fixing an appointment, through consultation and diagnosis, to treatment, and rescheduling – everything from a remote location, saving your travel time and cost to pursue different professionals at various centers.</p>
            </div>
        </div>

        <div class="site-block-retro d-block d-md-flex">

            <a href="#" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
                <div class="image" style="background-image: url('{{asset('https://image.freepik.com/free-vector/online-doctor-concept_52683-37585.jpg')}}');"></div>
                <div class="unit-9-content">
                    <h2>Top Skilled Doctors</h2>
                    <span>We have top skilled Doctor in your price range</span>
                </div>
            </a>

            <div class="col2 ml-auto">

                <a href="#" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
                    <div class="image" style="background-image: url('{{asset('https://image.freepik.com/free-vector/parents-kid-visiting-pediatrician_74855-10976.jpg')}}');"></div>
                    <div class="unit-9-content">
                        <h2>Instant Treatment </h2>
                        <span>Get Instant Treatment From Top Hospital Doctors</span>
                    </div>
                </a>

                <a href="#" class="col2-row2 unit-9 no-height" data-aos="fade-up" data-aos-delay="300">
                    <div class="image" style="background-image: url('{{asset('https://image.freepik.com/free-vector/appointment-booking-with-calendar-doctor_23-2148565452.jpg')}}');"></div>
                    <div class="unit-9-content">
                        <h2>Book Appointment Nearby You</h2>
                        <span>Book Appointment with Top Doctors Near your Location</span>
                    </div>
                </a>

            </div>

        </div>

    </div>
</div>


<div class="site-section bg-dark block-13">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">Love By Our Paients</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
            </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="{{asset('https://image.freepik.com/free-vector/young-woman-white_25030-39527.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Megan Smith</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="{{asset('https://image.freepik.com/free-vector/vector-pop-art-illustration-brutal-bearded-man-macho-with-tatoo_1441-376.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Brooke Cagle</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="{{asset('https://image.freepik.com/free-vector/young-woman-white_25030-39527.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Philip Martin</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="{{asset('https://image.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Steven Ericson</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="{{asset('https://image.freepik.com/free-vector/young-woman-white_25030-39546.jpg')}}" alt="Image" style="height: 120px;" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Nathan Dumlao</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
                <div class="mb-4">
                    <img src="{{asset('https://image.freepik.com/free-vector/young-woman-white_25030-39545.jpg')}}" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
                </div>
                <div class="text-black">
                    <h3 class="font-weight-light h5">Brook Smith</h3>
                    <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="site-section">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">People Behind HealthGuru</h2>
                <p>Its would not have been possible without Them</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="{{asset('https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60561.jpg')}}" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Rohit Raj Singh</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Full Stack Developer/Admin </span>
                        <p class="mb-4">The Project Developer And Owner.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>






            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="{{asset('https://image.freepik.com/free-vector/young-woman-trendy-outfit-flat-color-faceless-character-girl-wearing-stylish-modern-clothes-isolated-cartoon-illustration-web-graphic-design-animation-female-fashion-model_151150-4006.jpg')}}" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Pooja Singh</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Content Manager</span>
                        <p class="mb-4">The Content Writer For This Website.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                <div class="team-member">

                    <img src="{{asset('https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60563.jpg')}}" alt="Image" class="img-fluid">

                    <div class="text">

                        <h2 class="mb-2 font-weight-light h4">Siddhart Singh</h2>
                        <span class="d-block mb-2 text-white-opacity-05">Front-End Designer</span>
                        <p class="mb-4">The Frontend-Designer  of the Website.</p>
                        <p>
                            <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                            <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>


</div>

<div class="bg-primary" data-aos="fade">
    <div class="container">
        <div class="row">
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
    </div>
</div>
@endsection
