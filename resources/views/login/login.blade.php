@include('layouts.loginLayout.main')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card bg-pattern">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <div class="auth-logo">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <h3><b>LOGIN</b></h3>
                                        <!-- <img src="../assets/images/logo-dark.png" alt="" height="22"> -->
                                    </span>
                                </a>

                                <!-- <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="../assets/images/logo-light.png" alt="" height="22">
                                    </span>
                                </a> -->
                            </div>
                            <!-- <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p> -->
                        </div>
                        @include('layouts.alertmessage')

                        <form action="{{route('login_auth')}}" method="post">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label class="form-label">Username</label>
                                <input class="form-control" name="email" type="text" id="username" placeholder="Enter your username" value="{{old('email')}}">
                                @error('email')<div class="validation_error">{{$message}}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                    <!-- <div class="input-group-text" data-password="false"> -->
                                    <!-- <span class="password-eye"></span> -->
                                    <!-- </div> -->
                                </div>
                                @error('password')<div class="validation_error">{{$message}}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>


                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p> <a  class="text-blue-50 ms-1" href="{{route('forgotPassword')}}">Forgot your password?</a></p>
                                </div>
                            </div>

                        </form>

                        <!-- <div class="text-center">
                            <h5 class="mt-3 text-muted">Sign in with</h5>
                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                </li>
                            </ul>
                        </div> -->

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <!-- end row -->
                @include('layouts.loginLayout.footer')

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->