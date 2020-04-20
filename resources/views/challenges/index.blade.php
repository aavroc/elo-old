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
        <div class="col-lg-8">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                <h4>Challenges</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            @if(Auth::user()->role == 3)
                            <caption class=" m-2">*
                                <span class="text-danger">Module is nog niet toegankelijk.</span> - 
                                <span class="text-success">Module is open</span> - 
                                <span class="text-info">Module is voltooid</span>
                            </caption>
                            @endif
                        <thead>
                            <tr>
                                <th>Module(s)</th>
                                <th>naam</th>
                                <th>Toon</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(Auth::user()->role == 3)
                        @foreach(Auth::user()->challenges as $challenge)
                        <tr>
                            <td>
                                @foreach($challenge->modules as $module)
                                    @if($module->users()->where('user_id', Auth::user()->id)->first()->pivot->status == 0)
                                        <span class="btn text-danger">{{$module->name}}</span>

                                    @elseif($module->users()->where('user_id', Auth::user()->id)->first()->pivot->status == 1)
                                       <a href="{{route('modules.show', $module->slug)}}" class="btn btn-success">{{$module->name}}</a></span>
                                    @elseif($module->users()->where('user_id', Auth::user()->id)->first()->pivot->status == 3)
                                        <a href="{{route('modules.show', $module->slug)}}" class="btn btn-info">{{$module->name}}</a></span>    
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                    <span class="btn">{{$challenge->name}}</span>
                            </td>
                            <td>
                                @if($challenge->status == 0)
                                <span class="btn">Je moet nog modules afronden voordat je aan deze challenge kunt beginnen</span>
                                @elseif($challenge->status == 1)
                                <a href="{{route('challenges.show', $challenge)}}"><i class="fa fa-eye"></i> toon</a>
                                @elseif($challenge->status == 2)
                                <span class="btn">Deze challenge is behaald!!</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($challenges as $key => $challenge)
                        <tr>
                            <td>
                                @foreach($challenge->modules as $module)
                                    <span class="btn"><a href="{{route('modules.show', $module->slug)}}">{{$module->name}}</a></span>
                                @endforeach
                            </td>
                            <td>
                                {{$challenge->name}}
                            </td>
                            <td>
                                <a href="{{route('challenges.edit', $challenge)}}"><i class="fa fa-eye"></i> Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
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