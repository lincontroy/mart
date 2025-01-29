

<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ebbaymart </title>
    <!--favicon-->
    <link rel="icon" href="{{ url('assets/assetss/images/favicon-32x32.png') }}"
        type="image/png">
    <!-- loader-->
    <link href="{{ url('assets/assetss/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ url('assets/assetss/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link
        href="{{ url('assets/assetss/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ url('assets/assetss/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ url('assets/assetss/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ url('assets/assetss/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ url('assets/assetss/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ url('sass/main.css') }}" rel="stylesheet">
    <link href="{{ url('sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ url('sass/blue-theme.css') }}" rel="stylesheet">
    <link href="{{ url('sass/responsive.css') }}" rel="stylesheet">

</head>

<body>

<?php
                    $ref=request()->ref;

                    if($ref==null){
                        $ref="rootuser";
                    }
                    ?>

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-primary border-gradient-1">
                        <div class="card-body p-5">
                            <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                            <h4 class="fw-bold">Get Started Now</h4>
                            <p class="mb-0">Create an account to proceed</p>

                            <div class="form-body my-5">
                                <form class="row g-3" action="{{ route('user.registerr') }}" method="POST">

                                    @csrf

                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}</div>
                                    @endif

                                    @if($errors->has('login_error'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('login_error') }}</div>
                                    @endif
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmailAddress"
                                            placeholder="jhon@example.com" name="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="John" name="firstname">
                                        @error('firstname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Doe" name="lastname">
                                        @error('lastname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Username</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="john" name="username">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Mobile No</label>
                                        <input type="tel" class="form-control" id="inputEmailAddress"
                                            placeholder="0734899585" pattern="[0-9]{10}" name="mobile" required>
                                        @error('mobile')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>



                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Reffered By</label>
                                        <input type="text" class="form-control" id="inputEmailAddress"
                                             name="referredby" value="{{$ref}}"  readonly>
                                        @error('referredby')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" class="form-control border-end-0"
                                                id="inputChoosePassword" value="" name="password"
                                                placeholder="Enter Password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                    class="bi bi-eye-slash-fill"></i></a>

                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" class="form-control border-end-0"
                                                id="inputChoosePassword" value="" name="password_confirmation"
                                                placeholder="Enter Password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                    class="bi bi-eye-slash-fill"></i></a>

                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-grd-primary">REGISTER</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-start">
                                            <p class="mb-0">Already have an account? <a
                                                    href="{{url('user/login')}}">Login</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--authentication-->


    <!--plugins-->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });

    </script>

</body>

</html>
