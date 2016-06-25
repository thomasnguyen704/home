<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dynatable/0.3.1/jquery.dynatable.min.css">
		<style>
			* {
				font-weight: 200 !IMPORTANT;
			}
			body {
				padding-bottom: 10%
			}
			.thumbnail {
				padding: 25px 35px  25px 35px;
			}
			.filler {
				background-color: silver;
				color: white;
				min-height: 350px;
			}
		</style>
	</head>

	<body>
		<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Any Bank Dashboard</h1>
						<p>The analytics provided is for demonstration purposes and were developed using fictitous data. This is a demostration of an analytics applicatoin distributed on a web browser platform. Results can be served from a database or embeded as an array. Click on the legends to filter results. </p>
						<a id="click-start" class="btn btn-danger" href="#start-dashboard" role="button">Go To Dashboard</a>
					</div>
					<div class="col-md-6">
						<br><br>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Q1-IGeEtK48"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">		

			<div id="start-dashboard" class="row thumbnail">
				<h3>Deposits vs Withdrawls <br> <span class="small">Contacts: Retail Banking</span> </h3><br><br>
				
				<div class="col-sm-5">
					<div class="pre-scrollable">
						<p>This is filler text that can be about this section. Tempus quam lobortis odio aliquam ligula auctor aliquam, diam bibendum pulvinar tincidunt fusce etiam, donec nunc taciti risus egestas pretium. Per est nisi sem mauris orci inceptos condimentum pharetra convallis viverra morbi, sed aenean convallis eget a sollicitudin dolor tristique lacus facilisis, maecenas dictum risus elementum molestie libero cursus hendrerit pellentesque dui. Arcu est per condimentum sagittis volutpat in lacus fusce pharetra posuere sit praesent arcu, ullamcorper nullam laoreet blandit etiam aliquam augue feugiat metus class turpis amet. Litora congue habitasse morbi phasellus facilisis cubilia, hac curae hac etiam tempus venenatis senectus, primis hendrerit turpis auctor aenean. Risus enim ut eget himenaeos tristique velit habitant in aliquet at sodales, luctus primis mauris lobortis nam ipsum primis sed vehicula mauris luctus, vel inceptos pulvinar tempor primis in ad torquent imperdiet hac. Turpis posuere donec urna taciti praesent pulvinar hac sed fames, massa malesuada turpis gravida metus molestie litora blandit justo urna, vel eget eros dapibus turpis leo massa orci. Habitasse magna viverra mauris mollis dui venenatis class duis, augue iaculis cubilia nec porta consectetur adipiscing convallis nibh, tellus eleifend torquent curabitur vivamus porttitor lacus. </p>
					</div>
					<hr>
				</div>
				
				<div class="col-sm-7">
					<div id="dep-wd"></div>
				</div>
			</div>

			<div class="row thumbnail">
				<h3>Market Concentration <br> <span class="small">Contacts: Strategy</span> </h3><br><br>

				<div class="col-md-5 small">
					<table id="table1" class="table">
						<thead>
							<th class="text-center text-uppercase">state</th>
							<th class="text-center text-uppercase">value</th>
							<tbody class="text-center text-uppercase"></tbody>
						</thead>
					</table>
				</div>

				<br><br>

				<div class="col-md-7">
					<div id="map1"></div>
				</div>

			</div>


			<div class="row thumbnail">
				<h3>Areas of Concern <br> <span class="small">Contacts: Enterprise Risk Management & BSA/AML Office</span> </h3><br><br>

				<div class="row">
					<div class="col-md-7">
						<div id="issue-mgmt"></div>
					</div>
					<div class="col-md-5">
						<div class="pre-scrollable">
							<p>This is filler text that can be about this section. Tempus quam lobortis odio aliquam ligula auctor aliquam, diam bibendum pulvinar tincidunt fusce etiam, donec nunc taciti risus egestas pretium. Per est nisi sem mauris orci inceptos condimentum pharetra convallis viverra morbi, sed aenean convallis eget a sollicitudin dolor tristique lacus facilisis, maecenas dictum risus elementum molestie libero cursus hendrerit pellentesque dui. Arcu est per condimentum sagittis volutpat in lacus fusce pharetra posuere sit praesent arcu, ullamcorper nullam laoreet blandit etiam aliquam augue feugiat metus class turpis amet. Litora congue habitasse morbi phasellus facilisis cubilia, hac curae hac etiam tempus venenatis senectus, primis hendrerit turpis auctor aenean. Risus enim ut eget himenaeos tristique velit habitant in aliquet at sodales, luctus primis mauris lobortis nam ipsum primis sed vehicula mauris luctus, vel inceptos pulvinar tempor primis in ad torquent imperdiet hac. Turpis posuere donec urna taciti praesent pulvinar hac sed fames, massa malesuada turpis gravida metus molestie litora blandit justo urna, vel eget eros dapibus turpis leo massa orci. Habitasse magna viverra mauris mollis dui venenatis class duis, augue iaculis cubilia nec porta consectetur adipiscing convallis nibh, tellus eleifend torquent curabitur vivamus porttitor lacus. </p>
						</div>
					</div>
				</div>
				<hr>

				<br><br>

				<div class="row">
					<div class="col-md-7">
						<div id="sar-product"></div>
					</div>
					<div class="col-md-5">
						<div class="pre-scrollable">
							<p>This is filler text that can be about this section. Tempus quam lobortis odio aliquam ligula auctor aliquam, diam bibendum pulvinar tincidunt fusce etiam, donec nunc taciti risus egestas pretium. Per est nisi sem mauris orci inceptos condimentum pharetra convallis viverra morbi, sed aenean convallis eget a sollicitudin dolor tristique lacus facilisis, maecenas dictum risus elementum molestie libero cursus hendrerit pellentesque dui. Arcu est per condimentum sagittis volutpat in lacus fusce pharetra posuere sit praesent arcu, ullamcorper nullam laoreet blandit etiam aliquam augue feugiat metus class turpis amet. Litora congue habitasse morbi phasellus facilisis cubilia, hac curae hac etiam tempus venenatis senectus, primis hendrerit turpis auctor aenean. Risus enim ut eget himenaeos tristique velit habitant in aliquet at sodales, luctus primis mauris lobortis nam ipsum primis sed vehicula mauris luctus, vel inceptos pulvinar tempor primis in ad torquent imperdiet hac. Turpis posuere donec urna taciti praesent pulvinar hac sed fames, massa malesuada turpis gravida metus molestie litora blandit justo urna, vel eget eros dapibus turpis leo massa orci. Habitasse magna viverra mauris mollis dui venenatis class duis, augue iaculis cubilia nec porta consectetur adipiscing convallis nibh, tellus eleifend torquent curabitur vivamus porttitor lacus. </p>
						</div>
					</div>
				</div>
				<hr>

				<br><br>

			</div>
		</div>

		<!-- js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/maps/modules/map.js"></script>
		<script src="https://code.highcharts.com/mapdata/countries/us/us-all.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Dynatable/0.3.1/jquery.dynatable.min.js"></script>
		<script src="data.js"></script>

		<script>

			$("#click-start").click(function() {
				$('html, body').animate({
					scrollTop: $("#start-dashboard").offset().top
				}, 500);
			});


			$(function (){
				var tableData = geoData;

				$('#table1').dynatable({
					dataset: {
						records: tableData 
					},
					features: { 
						pushState: false 
					}
				});
			});


			$(function (){
				// IMPORTANT FOR MAPS: Make states "states" uppercase
				$.each (geoData, function(){
					this.state = this.state.toUpperCase();
				});

				$('#map1').highcharts('Map', {
					chart: { borderWidth: 0 },
					credits: { enabled: false },
					title: {
						text: 'Market Concentration',
						style: {'display':'none'}
					},
					mapNavigation: {
						enabled: true,
						buttonOptions: { 
							verticalAlign: 'bottom',
							align: 'right'
						}
					},
					colorAxis: {
						min: 1,
						type: 'logarithmic'
					},
					series: [{
						data: geoData,
						mapData: Highcharts.maps['countries/us/us-all'],
						joinBy: ['postal-code', 'state'],
						name: 'Market Value',
						tooltip: { pointFormat: '{point.postal-code}: ${point.value}MM' }
					}]
				})
			});




			$(function () {
				$('#dep-wd').highcharts({
					chart: { 
						zoomType: 'xy' 
					},
					title: {
						text: 'DDA: Deposits vs Withdrawls',
						style: {
							'display':'none'
						}
					},
					credits: { 
						enabled: false 
					},
					xAxis: [{
						categories: months,
						crosshair: true
					}],
					yAxis: [{ // Primary yAxis
						labels: {
							format: '{value} MM',
							style: { color: Highcharts.getOptions().colors[1] }
						},
						title: {
							text: 'Deposits',
							style: { color: Highcharts.getOptions().colors[1] }
						}
					}, { // Secondary yAxis
						title: {
							text: 'Withdrawls',
							style: { color: Highcharts.getOptions().colors[1] }
						},
						labels: {
							format: '{value} MM',
							style: { color: Highcharts.getOptions().colors[1] }
						},
						opposite: true
					}],
					tooltip: { shared: true },
					series: [{
						name: 'Deposits',
						type: 'area',
						data: depositsData,
						tooltip: { 
							valueSuffix: ' MM' 
						}
					}, {
						name: 'Withdrawls',
						type: 'area',
						data: withdrawlsData,
						tooltip: { 
							valueSuffix: 'MM' 
						}
					}]
				});
			});

			$(function () {
				$('#issue-mgmt').highcharts({
					credits: { enabled: false },
					chart: {
						type: 'column'
					},
					title: {
						text: 'Vintage of Issue Management',
						style: {fontWeight:'100'}
					},
					subtitle: {
						text: 'Days From Pending Validation to Close Date'
					},
					xAxis: {
						categories: months,
						crosshair: true
					},
					yAxis: {
						min: 0,
						title: {
							text: '# of Issues'
						}
					},
					tooltip: {
						headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
						pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
							'<td style="padding:0"><b>{point.y} </b></td></tr>',
						footerFormat: '</table>',
						shared: true,
						useHTML: true
					},
					plotOptions: {
						column: {
							pointPadding: 0.2,
							borderWidth: 0
						}
					},
					series: [{
						name: '90 Days',
						data: [ 49, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54 ]
					}, {
						name: '90 - 120 Days',
						data: [ 83, 78, 98, 93, 106, 84, 105, 104, 91, 83, 106, 92 ]
					}, {
						name: '120 - 360 Days',
						data: [ 48, 38, 39, 41, 47, 48, 59, 59, 52, 65, 59, 51 ]
					}, {
						name: '> 360 Days',
						data: [ 42, 33, 34, 39, 52, 75, 57, 60, 47, 39, 46, 51 ]
					}]
				});
			});

			$(function () {
				$('#sar-product').highcharts({
					credits: {
						enabled: false 
					},
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: 'pie'
					},
					title: {
						text: 'Suspecious Activity Reports (SAR)'
					},
					subtitle: {
						text: 'By Product'
					},
					legend: {
						align: 'right',
						verticalAlign: 'middle',
						layout: 'vertical',
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: { enabled: false },
							showInLegend: true
						}
					},
					series: [{
						name: 'Percentage of SARs',
						data: [
							{ name: 'Demand Deposit', y: 60 }, 
							{ name: 'Money Card', y: 20 }, 
							{ name: 'Savings', y: 10 }, 
							{ name: 'Brokerage', y: 5 }, 
							{ name: 'Mortgage', y: 3 }, 
							{ name: 'Other', y: 2 }
						] 
					}]
				});
			});

		</script>
	</body>
</html>