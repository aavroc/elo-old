@section('title') 
Booster - Paginations
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Paginations</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">UI Kits</a></li>
        <li class="breadcrumb-item active" aria-current="page">Paginations</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Working With Text</h5>
                    <h6 class="card-subtitle">Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping <code class="highlighter-rouge">&lt;nav&gt;</code> element to identify it as a navigation section to screen readers and other assistive technologies.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Working With Icons</h5>
                    <h6 class="card-subtitle">Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with <code class="highlighter-rouge">aria</code> attributes and the <code class="highlighter-rouge">.sr-only</code> utility.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Disabled And Active States with Link</h5>
                    <h6 class="card-subtitle">While the <code class="highlighter-rouge">.disabled</code> class uses <code class="highlighter-rouge">pointer-events: none</code> to <em>try</em> to disable the link functionality of <code class="highlighter-rouge">&lt;a&gt;</code>s, that CSS property is not yet standardized and doesn’t account for keyboard navigation. As such, you should always add <code class="highlighter-rouge">tabindex="-1"</code> on disabled links and use custom JavaScript to fully disable their functionality.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="...">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Disabled And Active States with Span</h5>
                    <h6 class="card-subtitle">You can optionally swap out active or disabled anchors for <code class="highlighter-rouge">&lt;span&gt;</code>, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="...">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                          <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                          </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Larger Sizing</h5>
                    <h6 class="card-subtitle">Fancy larger pagination? Add <code class="highlighter-rouge">.pagination-lg</code>  for additional sizes.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="...">
                      <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                      </ul>
                    </nav>                                
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Small Sizing</h5>
                    <h6 class="card-subtitle">Fancy smaller pagination? Add <code class="highlighter-rouge">.pagination-sm</code> for additional sizes.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="...">
                      <ul class="pagination pagination-sm">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Center Alignment</h5>
                    <h6 class="card-subtitle">Fancy larger pagination? Add <code class="highlighter-rouge">.pagination-lg</code> for additional sizes.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Right Alignment</h5>
                    <h6 class="card-subtitle">Fancy smaller pagination? Add <code class="highlighter-rouge">.pagination-sm</code> for additional sizes.</h6>
                </div>
                <div class="card-body">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">Next</a>
                        </li>
                      </ul>
                    </nav>
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