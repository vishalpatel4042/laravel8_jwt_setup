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
                                        <h3><b>Reset Password</b></h3>
                                    </span>
                                </a>
                            </div>
                        </div>
                        @include('layouts.alertmessage')
                        <form action="{{route('resetPassword')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$id}}" name="user_id">
                            <div class="mb-3 mt-3">
                                <label class="form-label">New Password</label>
                                <input class="form-control" name="password" type="password" id="username" placeholder="Enter new password">
                                @error('password')<div class="validation_error">{{$message}}</div>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="cpassword" class="form-label">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter confirm password">
                                </div>
                                @error('cpassword')<div class="validation_error">{{$message}}</div>@enderror
                            </div>


                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit"> Submit </button>
                            </div>
                        

                        </form>


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