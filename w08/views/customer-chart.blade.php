@extends('layout')
@section('title')
@endsection
@section('content')

{{-- <h1>How to use Chart.js in Laravel</h1>
<div style="width:80%; height:90vh;">
    <canvas id="myChart" height=""></canvas>
</div> --}}

<div style="width: 80%; margin: auto;">
    <canvas id="customerChart" width="400" height="200"></canvas>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

    var labels = {{ Js::from($labels) }};
    var data = {{ Js::from($data) }};


    var ctx = document.getElementById('customerChart').getContext('2d');
    var categoryChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Customer',
                data: data,
                backgroundColor: 'rgba(85, 222, 192, 0.2)', 
                borderColor: 'rgba(75, 22, 192, 1)', 
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


@endsection