@section('title') 
Gebruiker
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <!-- Write page content code here -->
    <!-- Start XP Row -->     
    <div class="row">
        <!-- Start XP Col -->
        <div class="col-lg-4">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                <h4>Challenges</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Module</th>
                                <th>Toon</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($challenges as $challenge)
                            <tr>
                                <td>{{$challenge->name}}</td>
                                <td><a href="{{route('challenges.show', $challenge)}}"><i class="fa fa-eye"></i> toon</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
                </div> <!-- end card -->
            </div><!-- End XP Col -->
    <!-- End XP Row -->
    </div>
</div>
<!-- End XP Contentbar -->

@endsection

@section('script')
@endsection