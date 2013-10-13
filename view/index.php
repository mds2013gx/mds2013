<?php include 'header.php'; ?>

	<body>
	<!-- CABEÇALHO -->
	<div class="redBorder"></div>
	<div class="blueBorder"></div>
	<div class="greenBorder"></div>
	<div class="orangeBorder"></div>
	<!-- /CABEÇALHO -->

	<!-- TOPO DA PÁGINA -->
	<header>
		<hgroup>
			<h1>RadarCriminal</h1>
			<h2>Saiba sobre os níveis de ocorrências dentro da sua <abbr title="Região Administrativa">RA</abbr> em Brasília</h2>
		</hgroup>
		
		<canvas id="introChart" width="489" height="246"></canvas>
		
		<a class="btn blue" href="#"><img src="">Download</a>
		<a class="btn tranparent" href="#"><img src="">ou Experimente</a>

	</header>
	<!-- /TOPO DA PÁGINA -->


	<section id="features">
		<article>
			<img src="assets/6charts.png">
			<h3>6 Chart types</h3>
			<p>Visualise your data in different ways. Each of them animated, fully customisable and look great, even on retina displays.</p>
		</article>
		<article>
			<img src="assets/html.png">
			<h3>HTML5 Based</h3>
			<p>Chart.js uses the HTML5 canvas element. It supports all modern browsers, and polyfills provide support for IE7/8.</p>
		</article>
		<article>
			<img src="assets/simple.png">
			<h3>Simple and flexible</h3>
			<p>Chart.js is dependency free, lightweight (4.5k when minified and gzipped) and offers loads of customisation options.</p>
		</article>
	</section>
	<section id="examples">
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
		<h3>Gostou? Baixe o <a href="https://github.com/nnnick/Chart.js">Chart.js</a> ou a <a href="docs">Documentação</a></h3>
	</section>

<?php include 'footer.php'; ?>