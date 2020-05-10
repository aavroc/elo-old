@section('title') 
Hulp overzocith
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables CSS -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<div class="xp-breadcrumbbar text-center">
</div>
@section('style')
@endsection
<div class="xp-contentbar">
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-20"> <!-- gebruiker card -->
                <div class="card-header bg-white">
                    <h5 class="card-title">Uitleg procedure</h5>
                </div>
                <div class="card-body">
                  {!!$uitleg!!}
                </div>
            </div>
        </div>
        
</div>
    
    

