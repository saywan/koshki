<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="shortcut icon" href="{{asset("panel/images/favicon.ico")}}">

    <meta charset="utf-8" />
    <title>KoshKi | RealEstate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("panel/images/favicon.ico")}}">



    <!-- App css -->
    <link href="{{"panel/css/bootstrap.min.css"}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/css/app.min.css")}}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page card-bg">
<!-- Log In page -->
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-12">
            <div class="card-body p-0">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-xl-3 col-lg-4">
                        <div class="card mb-0 border-0">
                            <div class="card-body p-0">
                                <div class="text-center p-3">
                                    <a href="{{url('/')}}" class="logo logo-admin">
                                        <img src="{{asset("panel/images/logo-sm.png")}}" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold font-18">
                                        @lang('messages.loginTitlePage')
                                    </h4>

                                </div>
                            </div><!--end card-body-->
                            <div class="card-body pt-0">
                                <form class="my-4" method="POST" action="{{ route('login') }}" name="registerform">
                                    @csrf

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="username">
                                            @lang('messages.Username')
                                        </label>
                                        <input type="email" class="form-control text-left @error('email') is-invalid @enderror"
                                               placeholder="@lang('auth.EmailPlacholder')" dir="ltr" value="{{ old('email') }}" required autofocus
                                               name="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
             </span>
                                        @enderror
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="form-label" for="userpassword">
                                            @lang('messages.Password')
                                        </label>
                                        <input type="password" class="form-control text-left @error('password') is-invalid @enderror"
                                               placeholder="@lang('auth.PasswordPlacholder')" dir="ltr" required autocomplete="current-password"
                                               name="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-check form-switch form-switch-success">
                                                <input type="checkbox" class="form-check-input" id="customSwitchSuccess" name="remember">
                                                <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-6 text-end">
                                            <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-primary" type="submit">Log In
                                                    <i class="fas fa-sign-in-alt ms-1"></i>
                                                </button>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                                <div class="m-3 text-center text-muted">
                                    <p class="mb-0">Don't have an account ?  <a href="auth-register-alt.html" class="text-primary ms-2">Free Resister</a></p>
                                </div>
                                <hr class="hr-dashed mt-4">
                                <div class="text-center mt-n5">
                                    <h6 class="card-bg px-3 my-4 d-inline-block">Or Login With</h6>
                                </div>
                                <div class="d-flex justify-content-center mb-1">
                                    <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-primary rounded-circle me-2">
                                        <i class="fab fa-facebook align-self-center"></i>
                                    </a>
                                    <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-info rounded-circle me-2">
                                        <i class="fab fa-twitter align-self-center"></i>
                                    </a>
                                    <a href="#" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-danger rounded-circle">
                                        <i class="fab fa-google align-self-center"></i>
                                    </a>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg">
                        <div class="accountbg d-flex align-items-center">
                            <div class="account-title text-center text-white">
                                <img src="{{asset("panel/images/logo-sm.png")}} alt="" class="thumb-sm">
                                <h4 class="mt-3 text-white">Welcome To <span class="text-warning">Metrica</span> </h4>
                                <h1 class="text-white">Let's Get Started</h1>
                                <p class="font-18 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                                <div class="border w-25 mx-auto border-warning"></div>
                            </div>
                        </div><!--end /div-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->

<!-- App js -->
<script src="{{asset("panel/js/app.js")}}"></script>

</body>



</html>
