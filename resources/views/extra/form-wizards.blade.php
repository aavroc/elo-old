@section('title') 
Booster - Form Wizards
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Form Wizards</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Wizards</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- End XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Basic Form Wizard</h5>
                    <h6 class="card-subtitle">Example of basic form wizard.</h6>
                </div>
                <div class="card-body">
                    <form id="xp-basic-form-wizard" action="#">
                        <div>
                            <h3>Account</h3>
                            <section>
                                <h4 class="mb-3">Account</h4>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword">
                                </div>
                            </section>
                            <h3>Profile</h3>
                            <section>
                                <h4 class="mb-3">Profile</h4>
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email ID</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                            </section>
                            <h3>Hints</h3>
                            <section>
                                <h4 class="mb-3">Hints</h4>
                                <ul>
                                    <li><strong>First Name :</strong> John</li>
                                    <li><strong>Last Name :</strong> Doe</li>
                                    <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                    <li><strong>Address :</strong> 123, Street, City.</li>
                                </ul>
                            </section>
                            <h3>Finish</h3>
                            <section>
                                <h4 class="m-b-30">Finish</h4>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="acceptTerms">
                                  <label class="custom-control-label" for="acceptTerms">I Agree with the Terms and Conditions.</label>
                                </div>
                            </section>
                        </div>
                    </form>                                
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Vertical Form Wizard</h5>
                    <h6 class="card-subtitle">Example of Vertical form wizard.</h6>
                </div>
                <div class="card-body">
                    <form id="xp-vertical-form-wizard" action="#">
                        <div>
                            <h3>Account</h3>
                            <section>
                                <h4 class="mb-3">Account</h4>
                                <div class="form-group">
                                    <label for="verticalusername">Username</label>
                                    <input type="text" class="form-control" id="verticalusername">
                                </div>
                                <div class="form-group">
                                    <label for="verticalpassword">Password</label>
                                    <input type="password" class="form-control" id="verticalpassword">
                                </div>
                                <div class="form-group">
                                    <label for="verticalconfirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="verticalconfirmPassword">
                                </div>
                            </section>
                            <h3>Profile</h3>
                            <section>
                                <h4 class="mb-3">Profile</h4>
                                <div class="form-group">
                                    <label for="verticalfirstname">First Name</label>
                                    <input type="text" class="form-control" id="verticalfirstname">
                                </div>
                                <div class="form-group">
                                    <label for="verticallastname">Last Name</label>
                                    <input type="text" class="form-control" id="verticallastname">
                                </div>
                                <div class="form-group">
                                    <label for="verticalemail">Email ID</label>
                                    <input type="email" class="form-control" id="verticalemail">
                                </div>
                                <div class="form-group">
                                    <label for="verticaladdress">Address</label>
                                    <input type="text" class="form-control" id="verticaladdress">
                                </div>
                            </section>
                            <h3>Hints</h3>
                            <section>
                                <h4 class="mb-3">Hints</h4>
                                <ul>
                                    <li><strong>First Name :</strong> John</li>
                                    <li><strong>Last Name :</strong> Doe</li>
                                    <li><strong>Email ID :</strong> johndoe@gmail.com</li>
                                    <li><strong>Address :</strong> 123, Street, City.</li>
                                </ul>
                            </section>
                            <h3>Finish</h3>
                            <section>
                                <h4 class="mb-3">Finish</h4>
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="verticalacceptTerms">
                                  <label class="custom-control-label" for="verticalacceptTerms">I Agree with the Terms and Conditions.</label>
                                </div>
                            </section>
                        </div>
                    </form>                                
                </div>
            </div>
        </div>  
        <!-- End XP Col -->
    </div> 
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')
<!-- Form Step JS -->
<script src="{{ asset('assets/plugins/jquery-step/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/js/init/form-step-init.js') }}"></script>
@endsection 