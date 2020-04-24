@section('title') 
Tasks
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
        <div class="card m-b-20">
        <div class="card-header bg-white">
                <h5 class="card-title">Taken</h5>
            </div>
        <div class="card-body">
            <!-- requests, alerts and reviews here -->
            <div class="table-responsive">
                <table id="xp-default-datatable" class="display table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>module</th>
                        <th>level</th>
                        <th>url</th>
                        <th>toon</th>
                    </tr>    
                </thead>    
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>
                            {{$task->name}}
                        </td>
                        <td>
                            {{$task->module->name}}
                        </td>
                        <td>
                            {{$task->level}}
                        </td>
                        <td>
                            <a href="{{$task->url}}" target="_blank">link to github</a>
                        </td>
                        <td>
                            <a href="{{route('tasks.show', $task)}}"><i class="mdi mdi-eye"></i> toon</a>
                        </td>
                    </tr>

                    @endforeach
                
                </tbody>
                </table>
                </div> <!-- end table responsive -->
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div><!-- End XP Col -->

</div><!-- End XP Row -->
</div><!-- End XP Contentbar -->


@endsection 

@section('script')
<!-- Required Datatable JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/init/table-datatable-init.js') }}"></script>
@endsection 