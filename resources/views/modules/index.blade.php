@section('title') 
Modules
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
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h4>Modules</h4>
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
                        @foreach($modules as $module)
                            <tr>
                                <td>{{$module->name}}</td>
                                <td>
                                    @if(Auth::user()->role ==3 )
                                    <a href="{{route('modules.show', Str::slug($module->name))}}"><i class="mdi mdi-eye"></i> Toon</a>
                                    @else
                                    <a href="{{route('modules.show', Str::slug($module->name))}}" class="btn btn-info m-2"><i class="mdi mdi-eye"></i> Studentenweergave</a>
                                    <a href="{{route('modules.show_teacher', Str::slug($module->name))}}" class="btn btn-warning m-2" ><i class="mdi mdi-eye"></i> Docentenweergave</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table><!-- End TABLE RESPONSIVE -->
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