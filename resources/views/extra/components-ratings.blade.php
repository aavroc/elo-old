@section('title') 
Booster - Ratings
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Ratings</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Components</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ratings</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">1/10 Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="xp-rating-box-1to10">
                        <select id="xp-rating-1to10" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7" selected="selected">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Movie Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="xp-rating-box-movie">
                        <select id="xp-rating-movie" name="rating" autocomplete="off">
                            <option value="Bad">Bad</option>
                            <option value="Mediocre">Mediocre</option>
                            <option value="Good" selected="selected">Good</option>
                            <option value="Awesome">Awesome</option>
                        </select>                                   
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Square Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="xp-rating-box-square">
                        <select id="xp-rating-square" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>                                   
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Pill Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="xp-rating-box-pill">
                        <select id="xp-rating-pill" name="rating" autocomplete="off">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>                                   
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Reversed Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="xp-rating-box-pill">
                        <select id="xp-rating-reversed" name="rating" autocomplete="off">
                            <option value="Strongly Agree">Strongly Agree</option>
                            <option value="Agree">Agree</option>
                            <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree</option>
                            <option value="Disagree">Disagree</option>
                            <option value="Strongly Disagree">Strongly Disagree</option>
                        </select>                                                                      
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Horizontal Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="xp-rating-box-horizontal">
                        <select id="xp-rating-horizontal" name="rating" autocomplete="off">
                            <option value="10">10</option>
                            <option value="9">9</option>
                            <option value="8">8</option>
                            <option value="7">7</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1" selected="selected">1</option>
                        </select>                                                                      
                    </div>    
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Font Awesome Star Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="stars stars-example-fontawesome">
                        <select id="xp-rating-fontawesome" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>   
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Star Fractional Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="stars stars-example-fontawesome-o">
                        <select id="xp-rating-fontawesome-o" name="rating" data-current-rating="5.6" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span class="title current-rating">
                        Current rating: <span class="value"></span>
                        </span>
                        <span class="title your-rating hidden">
                        Your rating: <span class="value"></span>&nbsp;
                        <a href="#" class="clear-rating"><i class="fa fa-times-circle"></i></a>
                        </span>
                    </div>   
                </div>
            </div>    
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-4 col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">CSS Star Rating</h5>
                    <h6 class="card-subtitle">Lorem ipsim dolore</h6>
                </div>
                <div class="card-body">
                    <div class="stars stars-example-css">
                        <select id="xp-rating-css" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>   
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
<!-- jQuery Bar Rating JS -->
<script src="{{ asset('assets/plugins/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('assets/js/init/barrating-init.js') }}"></script>
@endsection 