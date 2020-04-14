@section('title') 
Booster - Editable Table
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
    <h4 class="page-title">Editable Table</h4>  
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Booster</a></li>
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editable Table</li>
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
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Edit with button</h5>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="xp-edit-btn">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email ID</th>
                                <th>Phone</th>                                                    
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>CEO</td>
                                  <td>mark@gmail.com</td>
                                  <td>9898989898</td>                                                      
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Larry</td>
                                  <td>Manager</td>
                                  <td>larry@gmail.com</td>
                                  <td>9797979797</td>                                                      
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>John</td>
                                  <td>Employee</td>
                                  <td>john@gmail.com</td>
                                  <td>9696969696</td>                                                      
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Edit with click</h5>
                    <h6 class="card-subtitle">Inline edit like a spreadsheet on two columns only and without identifier column.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="xp-edit-click">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email ID</th>
                                    <th>Phone</th>                                                    
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                                  <td>CEO</td>
                                  <td>mark@gmail.com</td>
                                  <td>9898989898</td>                                                      
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Larry</td>
                                  <td>Manager</td>
                                  <td>larry@gmail.com</td>
                                  <td>9797979797</td>                                                      
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>John</td>
                                  <td>Employee</td>
                                  <td>john@gmail.com</td>
                                  <td>9696969696</td>                                                      
                              </tr>
                            </tbody>
                        </table>
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
<!-- Tabledit JS -->
<script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>
<script src="{{ asset('assets/js/init/table-editable-init.js') }}"></script>
@endsection 