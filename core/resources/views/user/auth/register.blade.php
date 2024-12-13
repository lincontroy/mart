<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebbaymart</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ url('css/plugin.min.css') }}">

    <link rel="stylesheet" href="{{ url('style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- endinject -->

    <link rel="icon" type="{{ url('image/png') }}" sizes="16x16"
        href="{{ url('img/favicon.png') }}">
</head>

<body>
    <main class="main-content">

        <div class="signUP-admin">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">

                    <?php
                    $ref=request()->ref;

                    if($ref==null){
                        $ref="rootuser";
                    }
                    ?>

                   

                    </div><!-- End: .col-xl-4  -->
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                            <div
                                class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                <p class="mb-0">
                                    Do you have an account?
                                    <a href="{{url('user/login')}}" class="color-primary">
                                        Sign in
                                    </a>
                                </p>
                            </div><!-- End: .signUp-topbar  -->
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-12">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        <div class="card border-0">
                                            <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                                <div class="edit-profile__title">
                                                    <h6>Sign in to <span class="color-primary">Ebbaymart</span></h6>
                                                </div>
                                            </div>
                                            <form class="create-account-form verify-gcaptcha" method="post"
                                                action="{{ route('user.registerr') }}">
                                                @csrf

                                                @if(session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}</div>
                                                @endif

                                                @if($errors->has('login_error'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('login_error') }}</div>
                                                @endif

                                                <div class="card-body">
                                                    <div class="edit-profile__body">
                                                        <div class="form-group mb-20">
                                                            <label for="username">Email Address</label>
                                                            <input type="email" class="form-control" id="username"
                                                                placeholder="Email Address" name="email" required>
                                                        </div>

                                                        <div class="form-group mb-20">
                                                            <label for="username">First name</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="First name" name="firstname" required>
                                                        </div>

                                                        <div class="form-group mb-20">
                                                            <label for="username">Last name</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="Last name" name="lastname" required>
                                                        </div>

                                                        <div class="form-group mb-20">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control" id="username"
                                                                placeholder="Username" name="username" required>
                                                        </div>

                                                        <div class="form-group mb-20">
                                                            <label for="mobile">Mobile</label>
                                                            <input type="tel" class="form-control" id="mobile"
                                                            placeholder="0724555676" maxlength="10" pattern="[0-9]{10}" name="mobile" required>
                                                        </div>


                                                        <div class="form-group mb-20">
                                                            <label for="username">Reffered By</label>
                                                            <input type="text" class="form-control" id="text"
                                                                placeholder="Username" name="referredby" value="{{$ref}}" readonly>
                                                        </div>

                                                        <div class="form-group mb-15">
                                                            <label for="password-field">password</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" type="password"
                                                                    class="form-control" name="password">
                                                                <div
                                                                    class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2">
                                                                </div>
                                                            </div>
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group mb-15">
                                                            <label for="password-field">password confirmation</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" type="password"
                                                                    class="form-control" name="password_confirmation">
                                                                <div
                                                                    class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2">
                                                                </div>
                                                            </div>
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="signUp-condition signIn-condition">
                                                            <div class="checkbox-theme-default custom-checkbox ">
                                                                <input class="checkbox" type="checkbox" id="check-1">
                                                                <label for="check-1">
                                                                    <span class="checkbox-text">Keep me logged in</span>
                                                                </label>
                                                            </div>
                                                           
                                                        </div>

                                                        <div
                                                            class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                                                                Sign up
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div><!-- End: .card-body -->
                                            </form>
                                        </div><!-- End: .card -->
                                    </div><!-- End: .edit-profile -->
                                </div><!-- End: .col-xl-5 -->
                            </div>
                        </div><!-- End: .signUp-admin-right  -->
                    </div><!-- End: .col-xl-8  -->
                </div>
            </div>
        </div><!-- End: .signUP-admin  -->

    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->

    <script src="{{ url('js/plugins.min.js') }}"></script>

    <script src="{{ url('js/script.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    @if (session('success'))
        toastr.success('{{ session('success') }}');
    @endif

    @if (session('error'))
        toastr.error('{{ session('error') }}');
    @endif

    @if (session('info'))
        toastr.info('{{ session('info') }}');
    @endif

    @if (session('warning'))
        toastr.warning('{{ session('warning') }}');
    @endif
</script>

    <!-- endinject-->
</body>

</html>
