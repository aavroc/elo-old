@section('title') 
Module: {{$module->name}}
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start XP Breadcrumbbar -->                    
<div class="xp-breadcrumbbar text-center">
</div>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">
    <div class="row">
        <!-- Start XP Col -->
        <!-- End XP Col -->
        <!-- Start XP Col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h4>{{$module->name}}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>Klas</th>
                                <th>Status</th>
                                <th>Datum/Tijd huidige status</th>
                                @foreach($module->tasks as $taks)

                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php $status_words = [ 0 => 'gesloten', 1 => 'bezig', 3 => 'voldaan']; @endphp
                            @foreach ($module->users as $user)
                            <tr>
                                <td>
                                <a href="{{route('users.show',$user->id)}}">{{$user->firstname}}</a>
                                </td>
                                <td>
                                    <a href="{{route('users.show',$user->id)}}">{{$user->lastname}}</a>
                                </td>
                                <td>
                                    <a href="{{route('classrooms.show',$user->classroom)}}">{{$user->classroom}}</a>
                                </td>
                                @if(is_object($module->users()->where('user_id', $user->id)->first()))
                                <td>
                                    @php $status = $module->users()->where('user_id', $user->id)->first()->pivot->status; @endphp
                                    @php $datetime = $module->users()->where('user_id', $user->id)->first()->pivot->updated_at; @endphp
                                    @if( $status == 0 )
                                        <span class="text-danger">{{$status_words[$status] }} <i class="mdi mdi-lock"></i></span>
                                    @elseif($status == 1)
                                        <span class="text-warning">{{$status_words[$status] }} <i class="mdi mdi-lock-open"></i></span>
                                    @else
                                        <span class="text-success">{{$status_words[$status] }} <i class="mdi mdi-school"></i></span>
                                        
                                    @endif
                                        
                                </td>
                                <td>
                                    {{$datetime}}
                                </td>
                                @endif
                               
                                
                            </tr>
                            @endforeach
                            </tbody>
                    </table><!-- End TABLE RESPONSIVE -->
                </div> <!-- End card body -->
            </div> <!-- end card -->
        </div>
        <!-- End XP Col -->
    </div>
    <!-- End XP Row -->
</div>
<!-- End XP Contentbar -->
@endsection
@section('script')

@endsection 
