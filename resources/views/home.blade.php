@extends('layouts.app')
@section('title-block')
Home @endsection
@section('content')
<h1>home</h1>
@endsection
@section('aside')
@parent
<p>дополнительный текст</p>
@endsection
<style >
	.body{
		color: black;
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0">
</script>
<body>
	<div class="container">
<canvas id = "myChart" width="800px" height="300px">	
</canvas>
<hr>
<canvas id = "myChartt" width="700" height="330">	
</canvas>
<hr>
<canvas id = "myCharttt" width="700" height="350">	
</canvas>
</div>
<script type="text/javascript">
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["prospects", "entry barrier", "competition", "payability", "demand"],
			datasets: [
			{ label: 'Profession rating(on a 100% scale)' ,
			data: [50, 25, 95, 50, 75],
			backgroundColor :['rgba(222, 89, 213, 1)',
			'rgba(107, 149, 227, 1)',
			'rgba(225, 235, 94, 1)',
			'rgba(227, 113, 93, 1)',
			'rgba(149, 227, 125, 1)', ],
		}]
		},
		options:{
			responsive: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
<script >
	var ctx1 = document.getElementById("myChartt");
	var myChartt = new Chart(ctx1, {
		type: 'doughnut',
		data: {
			labels: ["Filming", "Video Editing", "Self-education", "Advertising and Marketing", "Meeting with customers"],
			datasets: [
			{ label: 'How videographers work' ,
			data: [15, 70, 7, 4, 4],
			backgroundColor :['rgba(222, 89, 213, 1)',
			'rgba(107, 149, 227, 1)',
			'rgba(225, 235, 94, 1)',
			'rgba(227, 113, 93, 1)',
			'rgba(149, 227, 125, 1)', ],
		}]
		},
		options:{
			responsive: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
<script >
	var ctx2 = document.getElementById("myCharttt");
	var myCharttt = new Chart(ctx2, {
		type: 'pie',
		data: {
			labels: ["Editing photos", "Meeting with clients", "Taking pictures", "Advertising & Marketing", "Social media & Blogging", "Album Design & Production", "Networking", "Camera & Computer Upkeep", "Print Orders & Lab Work"],
			datasets: [
			{ label: 'How photographers actually spent their time' ,
			data: [29, 11, 15, 6, 9, 10.5, 6.5, 4, 9],
			backgroundColor :['rgba(222, 89, 213, 1)',
			
			'rgba(230, 255, 5, 1)',
			'rgba(225, 235, 94, 1)',
			'rgba(227, 113, 93, 1)',
			'rgba(149, 227, 125, 1)',
			'rgba(107, 149, 227, 1)',
			'rgba(250, 175, 175, 1)',
			'rgba(245, 92, 27, 1)',
			'rgba(64, 255, 233, 1)' ],
		}]
		},
		options:{
			responsive: false,
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>
</body>