@if(Auth::user()->role == 1)
    <div class="card m-b-30">
        <div class="card-header bg-white">
            <h5 class="card-title text-black">Get started!</h5>
        </div>
        <div class="card-body">
            <div class="xp-button">
            <a href="{{route('retrieve')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Retrieve Challenge and Module data</a>
            <a href="{{route('users.select_file')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Upload Users</a>
            </div>
        </div>
    </div>
    <div class="card m-b-30">
        <div class="card-header bg-white">
            <h5 class="card-title text-black">Klassen</h5>
        </div>
        <div class="card-body">
            <div class="xp-button">
            <a href="{{URL::to('/classrooms/LCTAOO9A')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9A</a>
            <a href="{{URL::to('/classrooms/LCTAOO9C')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9C</a>
            <a href="{{URL::to('/classrooms/LCTAOO9D')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LCTAOO9D</a>
            </div>
        </div>
    </div>
    <div class="card m-b-30">
        <div class="card-header bg-white">
            <h5 class="card-title text-black"></h5>
        </div>
    </div>
@endif