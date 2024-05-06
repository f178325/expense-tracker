<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Expense Tracker</title>
    @include('includes.style')
</head>

<body class="dashboard">
<div id="preloader" class="preloader-wrapper">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="authincation">
    <div class="container">
        <div class="row justify-content-center align-items-center g-0">
            <div class="col-xl-8">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="welcome-content">
                            <div class="welcome-title">
                                <div class="mini-logo">
                                    <a href="#">
                                        <img src="{{ asset('assets') }}/images/logo-white.png" alt="" width="30"/></a>
                                </div>
                                <h3>Welcome to Expense Tracker</h3>
                            </div>
                            <div class="privacy-social">
                                <div class="intro-social">
                                    <ul>
                                        <li><a href="#"><i class="fi fi-brands-facebook"></i></a></li>
                                        <li><a href="#"><i class="fi fi-brands-twitter-alt"></i></a></li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/muhammad-ibrahim-butt/" target="_blank">
                                                <i class="fi fi-brands-linkedin"></i>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fi fi-brands-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="auth-form">
                            <h4>Sign In</h4>
                            <form id="pageForm" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" required/>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control" required/>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input name="remember" id="acceptTerms" type="checkbox"
                                                   class="form-check-input"/>
                                            <label class="form-check-label" for="acceptTerms">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn btn-primary me-8 text-white">
                                        Sign In
                                    </button>
                                </div>
                            </form>
                            <p class="mt-3 mb-0 undefined">Don't have an account?
                                <a class="text-primary" href="#"> Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/vendor/toastr/toastr.min.js"></script>
<script src="{{ asset('assets') }}/js/scripts.js"></script>
<script src="{{ asset('assets') }}/js/plugins/parsley.min.js"></script>
<script src="{{ asset('assets') }}/js/custom.js"></script>
<script>
    $('#pageForm').parsley().on('form:submit', function (formInstance) {
        ajaxCall('{{ route('post.login') }}', formInstance.$element.serialize(), function (response) {
            if (response.success) {
                redirectTo('{{ route('get.index') }}');
            }
        });
        return false;
    });
</script>
</body>
</html>
