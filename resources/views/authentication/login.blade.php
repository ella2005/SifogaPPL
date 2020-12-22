<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="{{asset('auth-template/image/png')}}" href="images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('auth-template/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('auth-template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth-template/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>
<div class="bg-light">
    <img
        src="../img/login.jpeg"
        alt="" style="opacity:0.85 ;position: absolute; width: 100%;" class="position-fixed">
</div>
@if('salah')
    <div class="alert alert-danger text-black" role="alert" style="z-index: 999;opacity: 100%; ">
        <!--<h1>Tolong masukkan data dengan benar! <h1> -->
    </div>
@endif

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="background-color:white;">
            <form class="login150-form validate-form mt-5 mb-4 ml-4 mr-4" action="/postlogin" method="POST">
                {{csrf_field()}}
                <span class="login100-form-title text-center mb-3 text-black">
						Login
					</span>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                    <input class="input100" type="text" name="email" placeholder="Masukkan E-mail">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Masukkan Password">
                    <span class="focus-input100"></span>
                </div>
                <div class="flex-sb-m w-full p-t-3 p-b-24">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="Ingatkan saya">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="container-login100-form-btn m-t-17">
                    <button class="w-100 h-25 btn btn-info">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('auth-template/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('auth-template/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('auth-template/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('auth-template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('auth-template/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('auth-template/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('auth-template/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('auth-template/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('auth-template/js/main.js')}}"></script>

</body>
</html>
