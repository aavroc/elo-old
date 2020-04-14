@section('title') 
Booster - Nestable
@endsection
@extends('layouts.main')
@section('style')
<!-- Nestable CSS -->
<link href="{{ asset('assets/plugins/nestable/jquery.nestable.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Nestable</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Components</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nestable</li>
      </ol>                
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Start XP Row -->
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div id="xp-nestable-menu" class="xp-button">
                        <button type="button" class="btn btn-primary btn-rounded" data-action="expand-all">Expand All</button>
                        <button type="button" class="btn btn-secondary btn-rounded" data-action="collapse-all">Collapse All</button>
                        <button type="button" class="btn btn-success btn-rounded" data-action="add-item">Add new item</button>
                        <button type="button" class="btn btn-danger btn-rounded" data-action="replace-item">Replace item 10</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Nestable2 List 1</h5>
                    <h6 class="card-subtitle">Drag & drop hierarchical list with mouse and touch compatibility (jQuery plugin)</h6>
                </div>
                <div class="card-body">
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            <li data-id="1" class="dd-nochildren dd-item">
                                <div class="dd-handle"><span class="dd-content">First item <i>(id = 1)</i></span></div>
                            </li>
                            <li data-id="2" class="dd-item">
                                <button class="dd-collapse" data-action="collapse" type="button">Collapse</button>
                                <button class="dd-expand" data-action="expand" type="button">Expand</button>
                                <div class="dd-handle"><span class="dd-content">Second item <i>(id = 2)</i></span></div>
                                <ol class="dd-list">
                                    <li data-id="3" class="dd-item">
                                        <div class="dd-handle"><span class="dd-content">Item 3 <i>(id = 3)</i></span></div>
                                    </li>
                                    <li data-id="4" class="dd-item">
                                        <div class="dd-handle"><span class="dd-content">Item 4 <i>(id = 4)</i></span></div>
                                    </li>
                                    <li data-id="5" data-value="Item 5 value" data-foo="Bar" class="dd-item">
                                        <button class="dd-collapse" data-action="collapse" type="button">Collapse</button>
                                        <button class="dd-expand" data-action="expand" type="button">Expand</button>
                                        <div class="dd-handle"><span class="dd-content">Item 5 <i>(id = 5)</i></span></div>
                                        <ol class="dd-list">
                                            <li data-id="6" class="dd-item">
                                                <div class="dd-handle"><span class="dd-content">Item 6 <i>(id = 6)</i></span></div>
                                            </li>
                                            <li data-id="7" class="dd-item">
                                                <div class="dd-handle"><span class="dd-content">Item 7 <i>(id = 7)</i></span></div>
                                            </li>
                                            <li data-id="8" class="dd-item">
                                                <div class="dd-handle"><span class="dd-content">Item 8 <i>(id = 8)</i></span></div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                            <li data-id="9" class="dd-item">
                                <div class="dd-handle"><span class="dd-content">Item 9 <i>(id = 9)</i></span></div>
                            </li>
                            <li data-id="10" class="dd-item">
                                <button class="dd-collapse" data-action="collapse" type="button">Collapse</button>
                                <button class="dd-expand" data-action="expand" type="button">Expand</button>
                                <div class="dd-handle"><span class="dd-content">Item 10 <i>(id = 10)</i></span></div>
                                <ol class="dd-list">
                                    <li data-id="11" class="dd-item">
                                        <button class="dd-collapse" data-action="collapse" type="button">Collapse</button>
                                        <button class="dd-expand" data-action="expand" type="button">Expand</button>
                                        <div class="dd-handle"><span class="dd-content">Item 11 <i>(id = 11)</i></span></div>
                                        <ol class="dd-list">
                                            <li data-id="12" class="dd-item">
                                                <div class="dd-handle"><span class="dd-content">Item 12 <i>(id = 12)</i></span></div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Nestable2 List 2</h5>
                    <h6 class="card-subtitle">Drag & drop hierarchical list with mouse and touch compatibility (jQuery plugin)</h6>
                </div>
                <div class="card-body">
                    <div class="dd" id="nestable2">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="13">
                                <div class="dd-handle">Item 13</div>
                            </li>
                            <li class="dd-item" data-id="14">
                                <div class="dd-handle">Item 14</div>
                            </li>
                            <li class="dd-item" data-id="15"><button class="dd-collapse" data-action="collapse" type="button">Collapse</button><button class="dd-expand" data-action="expand" type="button">Expand</button>
                                <div class="dd-handle">Item 15</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="16">
                                        <div class="dd-handle">Item 16</div>
                                    </li>
                                    <li class="dd-item" data-id="17">
                                        <div class="dd-handle">Item 17</div>
                                    </li>
                                    <li class="dd-item" data-id="18">
                                        <div class="dd-handle">Item 18</div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>                                
                    
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Draggable Handles</h5>
                    <h6 class="card-subtitle">If you're clever with your CSS and markup this can be achieved without any JavaScript changes.</h6>
                </div>
                <div class="card-body">
                    <div class="dd" id="nestable3">
                        <ol class="dd-list">
                            <li class="dd-item dd3-item" data-id="13">
                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">Item 13</div>
                            </li>
                            <li class="dd-item dd3-item" data-id="14">
                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">Item 14</div>
                            </li>
                            <li class="dd-item dd3-item" data-id="15"><button class="dd-collapse" data-action="collapse" type="button">Collapse</button><button class="dd-expand" data-action="expand" type="button">Expand</button>
                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">Item 15</div>
                                <ol class="dd-list">
                                    <li class="dd-item dd3-item" data-id="16">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content">Item 16</div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="17">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content">Item 17</div>
                                    </li>
                                    <li class="dd-item dd3-item" data-id="18">
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content">Item 18</div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
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
<!-- Nestable js -->
<script src="{{ asset('assets/plugins/nestable/jquery.nestable.min.js') }}"></script>
<script src="{{ asset('assets/js/init/nestable-init.js') }}"></script>
@endsection 