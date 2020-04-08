@section('title') 
Booster - Collapse
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Collapse</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Collapse</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Accordion example</h5>
                    <h6 class="card-subtitle">Using the card component, you can extend the default collapse behavior to create an accordion.</h6>
                </div>
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                      <div class="card mb-2">
                        <div class="card-header p-1" id="headingOne">
                          <h5 class="mb-0 text-black">
                            <button class="btn btn-link text-black" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="icon-question text-primary mr-1"></i>
                              What is Lorem Ipsum?
                            </button>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-header p-1" id="headingTwo">
                          <h5 class="mb-0 text-black">
                            <button class="btn btn-link text-black collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="icon-question text-primary mr-1"></i>
                              How to use Lorem Ipsum?
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-header p-1" id="headingThree">
                          <h5 class="mb-0 text-black">
                            <button class="btn btn-link text-black collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="icon-question text-primary mr-1"></i>
                              Why choose Lorem Ipsum?
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Default collapse</h5>
                    <h6 class="card-subtitle">You can use a link with the <code class="highlighter-rouge">href</code> attribute, or a button with the <code class="highlighter-rouge">data-target</code> attribute. In both cases, the <code class="highlighter-rouge">data-toggle="collapse"</code> is required.</h6>
                </div>
                <div class="card-body">
                    <p>
                      <a class="btn btn-primary my-1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Link with href
                      </a>
                      <button class="btn btn-primary my-1" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Button with data-target
                      </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                      </div>
                    </div>

                    <h5 class="card-title text-black m-t-30">Multiple targets collapse</h5>
                    <h6 class="card-subtitle">A <code class="highlighter-rouge">&lt;button&gt;</code> or <code class="highlighter-rouge">&lt;a&gt;</code> can show and hide multiple elements by referencing them with a JQuery selector in its <code class="highlighter-rouge">href</code> or <code class="highlighter-rouge">data-target</code> attribute. Multiple <code class="highlighter-rouge">&lt;button&gt;</code> or <code class="highlighter-rouge">&lt;a&gt;</code> can show and hide an element if they each reference it with their <code class="highlighter-rouge">href</code> or <code class="highlighter-rouge">data-target</code> attribute</h6>
                    <hr>
                    <p>
                      <a class="btn btn-primary my-1" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                      <button class="btn btn-primary my-1" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                      <button class="btn btn-primary my-1" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                    </p>
                    <div class="row">
                      <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                          <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                          <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                          </div>
                        </div>
                      </div>
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

@endsection 