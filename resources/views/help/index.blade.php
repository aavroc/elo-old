@section('title')
Hulp overzicht
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

@yield('videos', View::make('help.videos'))
@yield('videos', View::make('help.uitleg', ['uitleg'=> $uitleg]))

