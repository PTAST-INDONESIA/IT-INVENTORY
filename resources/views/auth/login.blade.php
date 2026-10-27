
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page - AST HUB</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('quixlab-master/images/ast/ast_indonesia_logo.jpg') }}">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="{{ asset('quixlab-master/css/style.css') }}" rel="stylesheet">
    
</head>

<body class="h-100 login-page">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <style>
        /* ===============================
        BUTTONS - GREEN LOGIN THEME
        ================================ */

        /* SOLID BUTTON */
        .login-page .btn-success {
            background-color: #1f8f4a;
            border-color: #1f8f4a;
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 0.3px;
            transition: all 0.2s ease-in-out;
        }

        .login-page .btn-success:hover,
        .login-page .btn-success:focus {
            background-color: #166c37;
            border-color: #166c37;
            box-shadow: 0 0 0 0.15rem rgba(31, 143, 74, 0.35);
            color: #ffffff;
        }

        .login-page .btn-success:active {
            background-color: #145e31;
            border-color: #145e31;
        }

        /* OUTLINE BUTTON */
        .login-page .btn-outline-success {
            color: #1f8f4a;
            border-color: #1f8f4a;
            font-weight: 600;
            transition: all 0.2s ease-in-out;
        }

        .login-page .btn-outline-success:hover,
        .login-page .btn-outline-success:focus {
            background-color: #1f8f4a;
            border-color: #1f8f4a;
            color: #ffffff;
            box-shadow: 0 0 0 0.15rem rgba(31, 143, 74, 0.35);
        }

        .login-page .btn-outline-success:active {
            background-color: #166c37;
            border-color: #166c37;
            color: #ffffff;
        }

        /* DISABLED */
        .login-page .btn-success:disabled,
        .login-page .btn-outline-success:disabled {
            background-color: #a5d6a7;
            border-color: #a5d6a7;
            color: #ffffff;
            cursor: not-allowed;
            opacity: 0.7;
        }
    </style>

    <style>
        /* ===============================
        VALIDATION TOOLTIP - GREEN THEME
        ================================ */

        /* Border input saat invalid */
        .input-group.is-invalid .form-control {
            border-color: #1f8f4a;
            /* box-shadow: 0 0 0 0.15rem rgba(31, 143, 74, 0.25); */
        }

        /* Tooltip body */
        .tooltip-inner {
            background-color: #ffffff;
            color: #1f8f4a;
            border: 1px solid #1f8f4a;
            font-size: 12px;
            text-align: left;
            padding: 6px 10px;
            border-radius: 6px;
            box-shadow: 0 4px 10px rgba(31, 143, 74, 0.15);
        }

        /* Tooltip arrows */
        .tooltip.top .tooltip-arrow {
            border-top-color: #1f8f4a;
        }

        .tooltip.bottom .tooltip-arrow {
            border-bottom-color: #1f8f4a;
        }

        .tooltip.left .tooltip-arrow {
            border-left-color: #1f8f4a;
        }

        .tooltip.right .tooltip-arrow {
            border-right-color: #1f8f4a;
        }
    </style>

    <style>
        /* ===============================
        LOGIN PAGE - GREEN THEME
        ================================ */
      
        /* Background halaman */
        .login-form-bg {
            background: linear-gradient(135deg, #334139, #00a352);
        }

        /* Card login */
        .login-form {
            border-radius: 12px;
            border-top: 4px solid #1f8f4a;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Judul */
        .login-form h4 {
            color: #1f8f4a;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Input */
        .login-input .form-control {
            border-radius: 6px;
            border: 1px solid #a5d6a7;
            padding: 10px 15px;
        }

        .login-input .form-control:focus {
            border-color: #1f8f4a;
            box-shadow: 0 0 0 0.15rem rgba(31, 143, 74, 0.25);
        }

        /* Button */
        .login-input .btn-success {
            /* background-color: #1f8f4a; */
            border-color: #1f8f4a;
            border-radius: 6px;
            padding: 8px;
        }

        .login-input .btn-success:hover {
            /* background-color: #166c37; */
            border-color: #166c37;
        }

        /* Spasi antar input */
        .login-input .form-group {
            margin-bottom: 0.8rem;
        }
    </style>

    <style>
        /* ===============================
        FORCE INVALID HIGHLIGHT - GREEN
        ================================ */

        /* Bootstrap .is-invalid */
        .form-control.is-invalid,
        .input-group.is-invalid .form-control {
            border-color: #1f8f4a !important;
            background-image: none !important;
            box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.35) !important;
        }

        /* Saat focus + invalid */
        .form-control.is-invalid:focus,
        .input-group.is-invalid .form-control:focus {
            border-color: #166c37 !important;
            box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.45) !important;
        }

        /* Untuk textarea & select */
        textarea.is-invalid,
        select.is-invalid {
            border-color: #1f8f4a !important;
            box-shadow: 0 0 0 0.1rem rgba(31, 143, 74, 0.35) !important;
        }

        /* Hilangkan icon error merah bootstrap */
        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            background-image: none !important;
        }

        /* HTML5 validation (browser native) */
        input:invalid,
        textarea:invalid,
        select:invalid {
            box-shadow: none;
        }
    </style>

   
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>AST HUB</h4></a>
                                @if (count($errors) > 0)
									<div class="alert alert-danger" role="alert"> 
											<!-- <button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button> -->
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
                                <form class="mt-5 mb-5 login-input form-login" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" id="txt_username" name="name"  class="form-control form-control-md" placeholder="Username" style="padding: 5px 5px;">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="txt_password" name="password" class="form-control form-control-md" placeholder="Password" style="padding: 5px 5px;">
                                    </div>
                                    <button class="btn btn-success btn-md submit w-100"><b>Log In</b></button>
                                </form>
                                <div class="alert mt-3 text-center"
                                    style="font-size:13px; border:1px dashed #1f8f4a; color:#1f8f4a; background:#f4fff8;">
                                    <strong>Demo Account</strong><br>
                                    User : <b>Admin</b><br>
                                    Password : <b>123456</b>
                                </div>

                                <!-- <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('quixlab-master/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/custom.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/settings.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/gleek.js') }}"></script>
    <script src="{{ asset('quixlab-master/js/styleSwitcher.js') }}"></script>

    <script src="{{ asset('quixlab-master/plugins/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('quixlab-master/plugins/validation/jquery.validate-init-custom.js') }}"></script>

    <script>
        /* $('#sel_role').on('select2:open', function () {
            $('.select2-dropdown').css('z-index', 9999);
        }); */
        $(function () {
          
            // Pastikan validator instance sudah ada
            let form = $(".form-login");
            let validator = form.data("validator");

            if (!validator) {
                form.validate();
                validator = form.data("validator");
            }

            // ADD RULES
            $("#txt_username").rules("add", {
                required: true,
                minlength: 3,
                messages: {
                    required: "Username wajib diisi",
                    minlength: "Minimal 3 karakter"
                }
            });
            $("#txt_password").rules("add", {
                required: true,
                minlength: 3,
                messages: {
                    required: "Password wajib diisi"
                }
            });
        });
    </script>
</body>
</html>





