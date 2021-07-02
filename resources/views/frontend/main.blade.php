<!DOCTYPE html>
<html lang="en">
<head>
    <title>HealtGuru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link rel="stylesheet" href="front/fonts/icomoon/style.css">
    <link rel="icon" href="https://image.freepik.com/free-vector/doctor-character-background_1270-84.jpg" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/css/magnific-popup.css">
    <link rel="stylesheet" href="front/css/jquery-ui.css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="front/css/mediaelementplayer.css">
    <link rel="stylesheet" href="front/css/animate.css">
    <link rel="stylesheet" href="front/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="front/css/fl-bigmug-line.css">
    <link rel="stylesheet" href="front/css/preloader.css">


    <title>HealthGuru</title>
    <link rel="stylesheet" href="front/css/aos.css">

    <link rel="stylesheet" href="front/css/style.css">
    <style>
        #myCarousel .carousel-item .mask {
            position: absolute;
            top: 95px;
            left:0;
            height:100%;
            width: 100%;
            background-attachment: fixed;
        }
        #myCarousel h4{
            font-size:50px;
            margin-bottom:15px;
            color:#FFF;
            line-height:100%;
            letter-spacing:0.5px;
            font-weight:600;
        }
        #myCarousel p{
            font-size:18px;
            margin-bottom:15px;
            color:#d5d5d5;
        }


        #myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;}
        #myCarousel .carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;}
        #myCarousel .carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
        #myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight; animation-name:slideInRight; display:block; height:auto; max-width:100%;}
        #myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;
            animation-duration: 1.2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        #myCarousel .container {max-width: 1430px;  }
        #myCarousel .carousel-item{height:100%; min-height:667px; }
        #myCarousel{position:relative; z-index:1; background:#222831 center center no-repeat; background-size:cover; }

        .carousel-control-next, .carousel-control-prev{height:40px; width:40px; padding:12px; top:50%; bottom:auto; transform:translateY(-50%); background-color:  silver; }


        .carousel-item {
            position: relative;
            display: none;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            transition: -webkit-transform .6s ease;
            transition: transform .6s ease;
            transition: transform .6s ease,-webkit-transform .6s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }
        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-duration: .6s;
            transition-duration: .6s;
            -webkit-transition-property: opacity;
            transition-property: opacity
        }
        .carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
            opacity: 1
        }
        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
            opacity: 0
        }
        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0)
        }
        @supports (transform-style:preserve-3d) {
            .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
                -webkit-transform:translate3d(0, 0, 0);
                transform:translate3d(0, 0, 0)
            }
        }
        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }



        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }

        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        @-webkit-keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .slideInRight {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
        }

        .rounded-cirle{
            height: 124px;
        }




    </style>

</head>
<body>



<div class="site-wrap">

    <div class="site-navbar mt-4">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <h1 class="mb-0"><a href="/" class="text-white h2 mb-0"><strong>HealthGuru<span class="text-primary">.</span></strong></a></h1>
                </div>


                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                        @if (Route::has('login'))
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li><a href="/join"> Join Us</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/doctor">Doctor Login</a></li>
                            @auth
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @else
                            <li><a href="{{ route('login') }}"> Login</a></li>
                                @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"> Register</a></li>
                                @endif
                            @endauth
                        </ul>
                        @endif
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->


@yield('content')




<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">About Deejee</h3>
                    <p>We offer quality healthcare through our network of certified and experienced doctors.
                        All the doctors are registered medical practitioners. Along with qualifying degrees - experience, research and track-record of practice are taken into account before a doctor is credentialed with HealthGuru.
                        We make sure that when you are sick or dreading to visit a health care provider, you don’t have to go through a ridiculously long process and keep track of and carry all the files, reports, and prescriptions from doctor to doctor.</p>
                </div>
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">Subscribe</h3>
                    <form action="#" method="post" class="site-block-subscribe">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter your email"
                                   aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary rounded-top-right-0" type="button" id="button-addon2">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Doctor Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Follow Us</h3>

                        <div>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4"></h3>

                    <div class="block-16">
                        <figure>
                            <img src="{{asset('https://image.freepik.com/free-vector/doctor-character-background_1270-84.jpg')}}" alt="Image placeholder" class="img-fluid rounded">

                        </figure>
                    </div>

                </div>



            </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | HealthGuru <i class="icon-heart text-danger" aria-hidden="true"></i>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>

</div>

<script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('front/js/jquery-ui.js')}}"></script>
<script src="{{asset('front/js/popper.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/mediaelement-and-player.min.js')}}"></script>
<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('front/js/aos.js')}}"></script>
<script src="{{asset('front/js/circleaudioplayer.js')}}"></script>
<script>
    $(window).on("load",function ()
    {
       $(".loader").fadeOut("slow");
    });
</script>

<script src="{{asset('front/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</body>
</html>
