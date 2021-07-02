<!DOCTYPE html>
<html lang="en">

<head>

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="log/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="log/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark" >

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group ">


                                <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>


                            <div class="form-group">
                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                                </div>
                            </div>


                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <a href="{{ url('auth/google') }}" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>

                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="log/vendor/jquery/jquery.min.js"></script>
    <script src="log/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="log/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="log/js/sb-admin-2.min.js"></script>

</body>

</html>
