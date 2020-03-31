@section('title') 
Booster - Login
@endsection
@extends('layouts.main')
@section('style')

@endsection
<div class="xp-authenticate-bg"></div>
<!-- Start XP Container -->
<div id="xp-container" class="xp-container">
    <!-- Start Container -->
    <div class="container">
        <!-- Start XP Row -->
        <div class="row vh-100 align-items-center">
            <!-- Start XP Col -->
            <div class="col-lg-12 ">
                <!-- Start XP Auth Box -->
                <div class="xp-auth-box">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center mt-0 m-b-15">
                                <a href="index.html" class="xp-web-logo"><img src="assets/images/logo.svg" height="40" alt="logo"></a>
                            </h3>
                            <div class="p-3">
                                <form action="#">
                                    <div class="text-center mb-3">
                                        <h4 class="text-black">Sign In !</h4>
                                        <p class="text-muted">New to Booster? <a href="page-register.html">Sign Up</a> Here</p>
                                    </div>                                        
                                    <div class="social-login text-center">
                                        <button type="button" class="btn btn-facebook btn-rounded mb-1"><i class="fa fa-facebook m-r-5"></i> Facebook </button>
                                        <button type="button" class="btn btn-googleplus btn-rounded mb-1"><i class="fa fa-google-plus m-r-5"></i> Google+ </button>
                                    </div> 
                                    <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-6">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="rememberme">
                                              <label class="custom-control-label" for="rememberme">Remember Me</label>
                                            </div>                                
                                        </div>
                                        <div class="form-group col-6 text-right">
                                          <label class="forgot-psw"> 
                                            <a id="forgot-psw" href="page-forgotpsw.html">Forgot Password?</a>
                                          </label>
                                        </div>
                                    </div>                          
                                  <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End XP Auth Box -->
            </div>
            <!-- End XP Col -->
        </div>
        <!-- End XP Row -->
    </div>
    <!-- End Container -->
</div>
<!-- End XP Container -->
@section('script')

@endsection 