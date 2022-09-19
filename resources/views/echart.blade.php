<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>how to create dynamic pie chart in laravel - techsolutionstuff.com</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.3/echarts.min.js"></script>
   
</head>
<body>
<div class="col-md-12">
	<h1 class="text-center">how to create dynamic pie chart in laravel - techsolutionstuff.com</h1>
	<div class="col-xl-6" style="margin-top: 30px;">
		<div class="card">
			<div class="card-body">
				<div class="chart-container">
					<div class="chart has-fixed-height" id="pie_basic"></div>
				</div>
			</div>
		</div>
	</div>	
</div>
</body>
</html>
<script type="text/javascript">
var pie_basic_element = document.getElementById('pie_basic');
if (pie_basic_element) {
    var pie_basic = echarts.init(pie_basic_element);
    pie_basic.setOption({               
        
        textStyle: {
            fontFamily: 'Roboto, Arial, Verdana, sans-serif',
            fontSize: 13
        },

        title: {
            text: 'Pie Chart Example',
            left: 'center',
            textStyle: {
                fontSize: 17,
                fontWeight: 500
            },
            subtextStyle: {
                fontSize: 12
            }
        },

        tooltip: {
            trigger: 'item',
            backgroundColor: 'rgba(0,0,0,0.75)',
            padding: [10, 15],
            textStyle: {
                fontSize: 13,
                fontFamily: 'Roboto, sans-serif'
            },
            formatter: "{a} <br/>{b}: {c} ({d}%)"
        },

        legend: {
            orient: 'horizontal',
            bottom: '0%',
            left: 'center',                   
            data: ['Fruit', 'Vegitable','Grains'],
            itemHeight: 8,
            itemWidth: 8
        },

        series: [{
            name: 'Product Type',
            type: 'pie',
            radius: '70%',
            center: ['50%', '50%'],
            itemStyle: {
                normal: {
                    borderWidth: 1,
                    borderColor: '#fff'
                }
            },
            data: [
                {value: {{$fruit_count}}, name: 'Fruit'},
                {value: {{$veg_count}}, name: 'Vegitable'},
                {value: {{$grains_count}}, name: 'Grains'}
            ]
        }]
    });
}
</script>