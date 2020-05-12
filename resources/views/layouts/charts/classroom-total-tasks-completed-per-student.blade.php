<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black">Taken Overzicht</h5>
            </div>
            <div class="card-body">
                @foreach($users as $user)
                    <div class="xp-progressbar">
                        @php
                            $number = \DB::table('users_tasks')->where('evaluation', 1)->where('user_id', $user->id)->count();
                        @endphp
                        <p class=""><a href="{{route('users.show', $user)}}">{{$user->firstname}}</a><span class="pull-right">{{$number}}</span></p>
                        <div class="progress m-b-20" style="height: 10px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: {{$number}}%" aria-valuenow="{{$number}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
