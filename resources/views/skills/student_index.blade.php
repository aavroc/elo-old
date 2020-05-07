@section('title') 
Vaardigheden
@endsection
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<div class="xp-breadcrumbbar text-center">
</div>
<div class="xp-contentbar">


 <div class="row">
    <div class="col-lg-12">
        @if($user->role == 3)
        <div class="card m-b-20">
            <div class="card-header bg-white">
                <h5 class="card-title">Vaardigheden</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive table-bordered ">
                    <table class="table">
                        <thead>
                            <tr>
                               <th>
                                   Vaardigheid
                               </th>
                                <th>
                                    Indicatoren
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{dd($user->skills->unique('name'))}} --}}
                            @foreach($user->skills->unique() as $skill)
                                <tr>
                                    <td>
                                        {{$skill->name}}
                                    </td>
                                    <td>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>docent</th>
                                                    <th>student</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($skill->indicators as $indicator)
                                                <tr>
                                                    <td>  {{$indicator->name}}</td>
                                                    </td>
                                                    <td>
                                                        @if( $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->docent == 0 )
                                                        <span class="text-danger">Niet voldaan</span> 
                                                        @elseif( $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->docent == 1 )
                                                        <span class="text-success">Voldaan</span> 
                                                            
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @php
                                                            //get current status
                                                            $student_status = $user->skills()->where('indicator_id', $indicator->id)->first()->pivot->student;
                                                        @endphp
                                                        <div class="custom-control custom-radio custom-control-inline text-success skills">
                                                            <input type="radio" id="{{$indicator->id}}_voldaan" name="indy_{{$indicator->id}}" class="custom-control-input " value="voldaan" @if( $student_status == 1) checked  @endif>
                                                            <label class="custom-control-label " for="{{$indicator->id}}_voldaan">Voldaan</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline text-danger skills" >
                                                            <input type="radio" id="{{$indicator->id}}_nietvoldaan" name="indy_{{$indicator->id}}" class="custom-control-input" value="niet_voldaan" @if( $student_status == 0) checked  @endif>
                                                            <label class="custom-control-label " for="{{$indicator->id}}_nietvoldaan">Niet voldaan</label>
                                                        </div>
                                                  
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- End TABLE RESPONSIVE -->
            </div> <!-- End card body -->
        </div> <!-- end card -->
        @endif
    </div><!-- End XP Col -->
</div>

@section('script')

<script>
    $('.skills input[type=radio]').change(function() {
        
        let value = $(this).val();
        let id = $(this).attr('id');
        let ind_id = id.split("_")[0];

        $.ajax({
            method: "POST",
            url: "/update_indicator_student",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: { 
                    'student': {{$user->id}}, 
                    'status': value,
                    'indicator_id': ind_id,
                },
            success: function(response){ // What to do if we succeed
                // console.log(response); 
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                // console.log(JSON.stringify(jqXHR));
                // console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        })
        .done(function( msg ) {
            console.log(msg);
           
            
        });
    });
</script>
@endsection