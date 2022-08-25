<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="shortcut icon" href="{{asset("panel/images/favicon.ico")}}">

    <meta charset="utf-8" />
    <title>koshkizinwe | RealEstate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("panel/images/favicon.ico")}}">



    <!-- App css -->
    <link href="{{asset("panel/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("panel/css/app.min.css")}}" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-color: #E91E63">
<!-- Log In page -->
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-12">
            <div class="card-body p-0">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-xl-3 col-lg-4">
                        <div class="card mb-0 border-0">
                            <div class="card-body p-0">
                                <div class="text-center">
                                    <a href="{{url('/')}}" class="logo logo-admin">
                                        <img src="{{asset("Content/images/koshkiFinal.png")}}" height="100" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="fw-semibold font-18">
                                        @lang('messages.loginTitlePage')
                                    </h4>

                                </div>
                            </div><!--end card-body-->
                            <div class="card-body pt-0">
                                <form class="my-4" method="POST" action="{{ route('login') }}" name="registerform">
                                    @csrf

                                    <div class="form-group mb-2">
                                        <label class="form-label" for="username">
                                            @lang('messages.email')
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
                                                <label class="form-check-label" for="customSwitchSuccess">@lang('messages.remember')</label>
                                            </div>
                                        </div><!--end col-->

                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-primary" type="submit">@lang('messages.login')
                                                    <i class="fas fa-sign-in-alt ms-1"></i>
                                                </button>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->



                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg">
                        <div class="accountbg d-flex align-items-center">
                            <div class="account-title text-center text-white">
                                <img src="#" alt="" class="thumb-sm">
                                <h4 class="mt-3 text-white">Welcome To <span class="text-warning">Koshki Zinwe</span> </h4>

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
