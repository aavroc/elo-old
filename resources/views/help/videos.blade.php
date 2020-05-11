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
<div class="xp-contentbar">
    <div class="row">
        <div class="col-lg-6">
            <div class="card m-b-20"> <!-- gebruiker card -->
                <div class="card-header bg-white">
                    <h5 class="card-title">Wachtwoord reset</h5>
                </div>
                <div class="card-body">
                    <div>Deze video geeft een korte uitleg over je inloggegevens</div>

                    <div style='max-width: 640px'><div style='position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;'><iframe width="640" height="360" src="https://web.microsoftstream.com/embed/video/59b1b93b-a5c4-4e8f-9764-e101309fcde4?autoplay=false&amp;showinfo=true" allowfullscreen style="border:none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; height: 100%; max-width: 100%;"></iframe></div></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-b-20"> <!-- gebruiker card -->
                <div class="card-header bg-white">
                    <h5 class="card-title">Inloggen en github link leggen</h5>
                </div>
                <div class="card-body">
                    <div>Deze video geeft een korte uitleg over het inloggen en het leggen van een Github Link</div>

                    <div style='max-width: 640px'><div style='position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;'><iframe width="640" height="360" src="https://web.microsoftstream.com/embed/video/06cf7665-78dd-43c7-b57a-34db3a490911?autoplay=false&amp;showinfo=true" allowfullscreen style="border:none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; height: 100%; max-width: 100%;"></iframe></div></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-b-20"> <!-- gebruiker card -->
                <div class="card-header bg-white">
                    <h5 class="card-title">Dashboard Uitgelegd!</h5>
                </div>
                <div class="card-body">
                    <div>Deze video geeft een korte uitleg (7:04) over hoe de procedure van modules, repositories en taken werkt.</div>

                    <div style='max-width: 640px'><div style='position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;'><iframe width="640" height="360" src="https://web.microsoftstream.com/embed/video/c5034f2d-fd83-4dc7-9a19-52fc89e315ed?autoplay=false&amp;showinfo=true" allowfullscreen style="border:none; position: absolute; top: 0; left: 0; right: 0; bottom: 0; height: 100%; max-width: 100%;"></iframe></div></div>
                </div>
            </div>
        </div>
    </div>
</div>



