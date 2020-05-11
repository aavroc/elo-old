    <div class="card m-b-30">
        <div class="card-header bg-white">
            <h5 class="card-title text-black">Total completed Tasks</h5>
            <h6 class="card-subtitle">Toont het totaal aantal afgeronde taken per klas zoals aangegeven door studenten zelf</h6>
        </div>
        <div class="card-body">
            <canvas id="xp-chartjs-horizontal-bar-chart" class="xp-chartjs-chart"></canvas>
        </div>
    </div>

@section('script')
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
{{-- <script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/init/chartjs-init.js') }}"></script>
<script>


data = <?php echo $chart ?>;
// console.log(data);
var ctx = document.getElementById('xp-chartjs-horizontal-bar-chart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: data.labels,
        datasets: [{
            label: '# Of Taken',
            data: data.datasets.data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


</script>
@endsection
