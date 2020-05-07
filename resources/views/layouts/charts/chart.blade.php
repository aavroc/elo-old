<script src="{{ asset('assets/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>



<div class="col-lg-6">
    <div class="card m-b-30">
        <div class="card-header bg-white">
            <h5 class="card-title text-black">Horizontal Bar</h5>
            <h6 class="card-subtitle">Example of Chartistjs Chart</h6>
        </div>
        <div class="card-body">
            <div class="xp-chart-label">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <p><i class="mdi mdi-circle-outline text-primary"></i>Series A</p>
                    </li>
                    <li class="list-inline-item">
                        <p><i class="mdi mdi-circle-outline text-success"></i>Series B</p>
                    </li>
                </ul>
            </div>
            <div id="xp-chartist-horizontal-bar" class="ct-chart ct-golden-section xp-chartist-horizontal-bar"></div>
        </div>
    </div>
</div>

@section('script')

@foreach ($users as $user)
    <?php
    $usertasks = $user->tasks->count();
    // dd($user);
    ?>
@endforeach

{{-- <?php dd($users[0]); ?> --}}

<script>
// new Chartist.Bar('.ct-chart', {
//     labels: ['Q1', 'Q2', 'Q3', 'Q4',],

//     labels: [
//         @php
//         foreach($users as $user){
//             echo "'".$user->firstname."',";
//         }
//         @endphp
//     ],

//     series: [
//       [800000, 1200000, 1400000, 1300000],
//       [200000, 400000, 500000, 300000],
//       [100000, 200000, 400000, 600000]
//     ]
//   }, {
//     stackBars: true,
//     axisY: {
//       labelInterpolationFnc: function(value) {
//         return (value / 1000) + 'k';
//       }
//     }
//   }).on('draw', function(data) {
//     if(data.type === 'bar') {
//       data.element.attr({
//         style: 'stroke-width: 30px'
//       });
//     }
//   });


  new Chartist.Bar('.ct-chart', {
  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],

  labels: [
        @php
        foreach($users->take(2) as $user){
            echo "'".$user->firstname."',";
        }
        @endphp
    ],

//   series: [
//     [5, 4, 3, 7, 5, 10, 3],
//     [3, 2, 9, 5, 4, 6, 4]
//   ],

    series: [
        [
        @php
        foreach($users->take(2) as $user){
            echo $user->tasks->count().',';
        }
        @endphp
        ]
    ]

}, {
  seriesBarDistance: 10,
  reverseData: true,
  horizontalBars: true,
  axisY: {
      offset: 100
    }
});
</script>
@endsection
