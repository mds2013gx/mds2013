<?php include 'header.php'; ?>
	
	<!-- CORPO  -->
	<section id="examples">
		<h2 id="navText">Informações por Ano</h2><br>
				
		<article id="barChart" class="hidden">
			<div class="canvasWrapper">
				<canvas id="barChartCanvas" width="475" height="350"></canvas>		
			</div>
			<div class="half">
				<h2>Indíces de 2001 até 2011</h2>
				<p>Os gráficos demonstram o indíce criminal geral</p>
				<p>Cruzamento dos dados por ano e porcentagem(%) e exibição em comparação com anos anteriores.</p>
			</div>
		</article>
		
		<!-- <article id="pieChart" class="hidden">
			<div class="canvasWrapper">
				<canvas id="pieChartCanvas" width="449" height="300"></canvas>		
			</div>
			<div class="half">
				<h2>Pie charts</h2>
				<p>Pie charts are great at comparing proportions within a single data set.</p>
				<p>Chart.js shows animated pie charts with customisable colours, strokes, animation easing and effects.</p>
			</div>
		</article> -->

		<!-- <article id="doughnutChart" class="hidden">
			<div class="canvasWrapper">
				<canvas id="doughnutChartCanvas" width="449" height="300"></canvas>		
			</div>
			<div class="half">
				<h2>Doughnut charts</h2>
				<p>Similar to pie charts, doughnut charts are great for showing proportional data.</p>
				<p>Chart.js offers the same customisation options as for pie charts, but with a custom sized inner cutout to turn your pies into doughnuts.</p>
			</div>
		</article> -->
	</section>
	<!-- /CORPO -->

	<!-- NAVEGAÇÃO -->
	<?php include 'navigation.php'; ?>
	<!-- /NAVEGAÇÃO -->

<?php include 'footer.php'; ?>