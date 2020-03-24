<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{URL::to('/student')}}">DeepDive 2.0</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('student')}}" class="nav-link">Dashboard</a>
            </li>
            @if(Auth::user()->github_access_token == null)
            <li class="nav-item pull-right">
                <a class="btn btn-success" href="{{route('github.call')}}">Github Connection</a>
            </li>
            @endif

        </ul>

        <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item" id="message">

            </li>
            <li class="nav-item pull-right">
                <a class="btn btn-success" href="{{route('github.create')}}">Github create repo</a>
            </li>
            <li class="nav-item pull-right">
                <a class="btn btn-success" href="{{route('github')}}">Github Connection</a>
            </li> --}}
            <li class="nav-item pull-right">
                <a class="btn btn-danger" href="{{route('logout')}}">Logout {{Auth::user()->firstname}}</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    setInterval(look_for_change, 2000);

    function look_for_change(){
        // console.log(  $.trim($("#message").html()== ''));
        if( $.trim($("#message").html())=='' ){
        
            $.ajax({
                method: "POST",
                url: "/students/check_assignment_status",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: { 
                        
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
                $("#message").html(
                
                msg.msg
                
            );
                
            });
        }
    }
                    
</script>