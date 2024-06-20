<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN CI/CD deplayment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/login1/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login1/css/util.css">
    <link rel="stylesheet" type="text/css" href="/login1/css/main.css">
    <!--===============================================================================================-->
    {{-- {!! htmlScriptTagJsApi($configuration) !!} --}}
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('/login1/images/bg-01.jpg');">
            <div class="wrap-login100"
                style="width: 440px; padding-left: 35px;padding-right: 35px;padding-top: 45px;padding-bottom: 40px;">
                <form action="/login" class="login100-form validate-form" method="POST">
                    @csrf
                    <span class="login100-form-logo" style="height: 90px; width:90px">
                        <img style="height: 60px; width:60" src="/asset/logoloading.png" alt="logo garuda">
                    </span>

                    <span class="login100-form-title p-b-10 p-t-15">
                        Login
                    </span>

                    <div style="margin-bottom: 25px;" class="wrap-input100 validate-input"
                        data-validate = "Enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div style="margin-bottom: 15px;" class="wrap-input100 validate-input"
                        data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    {{-- <div class="contact100-form-checkbox" style="padding-top: 0px;padding-bottom: 20px;">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> --}}

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    {{-- {!! htmlFormSnippet() !!}
                    <!-- OR -->
                    {!! htmlFormSnippet($attributes) !!}
                    <input type="submit"> --}}

                    {{-- <div class="text-center p-t-5">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div> --}}
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="/login1/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/login1/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/login1/vendor/bootstrap/js/popper.js"></script>
    <script src="/login1/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/login1/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/login1/vendor/daterangepicker/moment.min.js"></script>
    <script src="/login1/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/login1/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/login1/js/main.js"></script>

</body>

</html>
