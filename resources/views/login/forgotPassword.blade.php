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
                                        <h4><b>FORGOT PASSWORD</b></h4>
                                    </span>
                                </a>
                            </div>
                        </div>
                        @include('layouts.alertmessage')
                        <form action="{{route('SendResetPasswordLink')}}" method="post">
                            @csrf
                            <div class="mb-3 mt-1">
                                <label class="form-label">Email</label>
                                <input class="form-control" name="email" type="text" id="email" placeholder="Enter your email">
                                @error('email')<div class="validation_error">{{$message}}</div>@enderror

                            </div>
                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit"> Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
                @include('layouts.loginLayout.footer')

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->