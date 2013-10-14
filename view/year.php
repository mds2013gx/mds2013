<?php include 'header.php'; ?>
	
	<!-- CORPO  -->
	<section id="examples">
		<h2 id="navText">Informações por Ano</h2>
		<article id="lineChart" class="hidden">
			<div class="half">
				<h2>Line charts</h2>
				<p>Line graphs are probably the most widely used graph for showing trends.</p>
				<p>Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart.</p>
			</div>
			<div class="canvasWrapper">
				<canvas id="lineChartCanvas" width="449" height="300"></canvas>		
			</div>
		</article>
		
		<article id="barChart" class="hidden">
			<div class="canvasWrapper">
				<canvas id="barChartCanvas" width="449" height="300"></canvas>		
			</div>
			<div class="half">
				<h2>Bar charts</h2>
				<p>Bar graphs are also great at showing trend data.</p>
				<p>Chart.js supports bar charts with a load of custom styles and the ability to show multiple bars for each x value.</p>
			</div>
		</article>

		<article id="radarChart" class="hidden">
			<div class="half">
				<h2>Radar charts</h2>
				<p>Radar charts are good for comparing a selection of different pieces of data.</p>
				<p>Chart.js supports multiple data sets plotted on the same radar chart. It also supports all of the customisation and animation options you'd expect.</p>
			</div>
			<div class="canvasWrapper">
				<canvas id="radarChartCanvas" width="449" height="300"></canvas>		
			</div>
		</article>
		
		<article id="pieChart" class="hidden">
			<div class="canvasWrapper">
				<canvas id="pieChartCanvas" width="449" height="300"></canvas>		
			</div>
			<div class="half">
				<h2>Pie charts</h2>
				<p>Pie charts are great at comparing proportions within a single data set.</p>
				<p>Chart.js shows animated pie charts with customisable colours, strokes, animation easing and effects.</p>
			</div>
		</article>

		<article id="polarAreaChart" class="hidden">
			<div class="half">
				<h2>Polar area charts</h2>
				<p>Polar area charts are similar to pie charts, but the variable isn't the circumference of the segment, but the radius of it. </p>
				<p>Chart.js delivers animated polar area charts with custom coloured segments, along with customisable scales and animation.</p>
			</div>
			<div class="canvasWrapper">
				<canvas id="polarAreaChartCanvas" width="449" height="300"></canvas>		
			</div>
		</article>

		<article id="doughnutChart" class="hidden">
			<div class="canvasWrapper">
				<canvas id="doughnutChartCanvas" width="449" height="300"></canvas>		
			</div>
			<div class="half">
				<h2>Doughnut charts</h2>
				<p>Similar to pie charts, doughnut charts are great for showing proportional data.</p>
				<p>Chart.js offers the same customisation options as for pie charts, but with a custom sized inner cutout to turn your pies into doughnuts.</p>
			</div>
		</article>
	</section>
	<!-- /CORPO -->

	<!-- NAVEGAÇÃO -->
	<?php include 'navigation.php'; ?>
	<!-- /NAVEGAÇÃO -->

<?php include 'footer.php'; ?>