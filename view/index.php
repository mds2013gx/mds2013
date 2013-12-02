<?php 
include 'header.php';
?>
<?php include_once('../views/CrimeView.php');
include_once('../views/TempoView.php');
$crimeVW = new CrimeView();
$tempoVW = new TempoView();

?>
<!-- start: Content -->
<div id="content" class="span10">


	<div class="row-fluid">

		<div class="span3 smallstat box mobileHalf" onTablet="span6"
			onDesktop="span3">
			<div class="boxchart-overlay radarGrey">
				<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
			</div>
			<span class="title">Ocorrências</span> <span class="value"><?php echo number_format($crimeVW->_somarGeral(),0,',','.') ?>
			</span>
		</div>

		<div class="span3 smallstat box mobileHalf" onTablet="span6"
			onDesktop="span3">
			<div class="boxchart-overlay red">
				<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
			</div>
			<span class="title">Homicídios</span> <span class="value"> <?php echo number_format($crimeVW->_somaTotalHomicidios(),0,',','.') ?>
			</span>
		</div>

		<div class="span3 smallstat box mobileHalf noMargin" onTablet="span6"
			onDesktop="span3">
			<i class="icon-search green"></i> <span class="title">Roubo</span> <span
				class="value"><?php echo  number_format($crimeVW->_somaTotalRoubo(),0,',','.') ?>
			</span>
		</div>

		<div class="span3 smallstat mobileHalf box" onTablet="span6"
			onDesktop="span3">
			<i class="icon-certificate radarYellow"></i> <span class="title">Furto</span>
			<span class="value"><?php echo number_format($crimeVW->_somaTotalFurtos(),0,',','.') ?>
			</span>
		</div>

	</div>

	<div class="row-fluid">

		<div class="main-chart">
			<!--Impressão de gráfico em barras-->
			<?php echo $crimeVW->retornarDadosCrimeSomadoFormatoNovo() ?>
		</div>

	</div>

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-tasks"></i>Total de Crimes por Regiao Administrativa</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<h3>Taguatinga</h3>
							<div class="progress">
								<div class="bar" style="width: 70%;"></div>
							</div>
							<div class="progress progress-success" style="margin-bottom: 9px;">
								<div class="bar" style="width: 40%"></div>
							</div>
						<h3>Guara</h3>
							<div class="progress">
								<div class="bar" style="width: 60%;"></div>
							</div>
							<div class="progress progress-success" style="margin-bottom: 9px;">
								<div class="bar" style="width: 80%"></div>
							</div>
					</div>
		</div><!--/span-->

		<div class="span6" onTablet="span12" onDesktop="span6">

			<div class="row-fluid">
				<div class="span12 multi-stat-box box">
					<div class="header row-fluid">
						<div class="left">
							<h2>Crimes contra pessoa</h2>
							<a class="icon-chevron-down"></a>
						</div>
						<div class="right">
							<h2>JAN 2010 - DEZ 2011</h2>
							<div class="percent">
								<i class="icon-double-angle-down"></i> 5%
							</div>
						</div>
					</div>
					<div class="content row-fluid">
						<!--Dados retirados das celulas de total e somatorio entre anos 2010 e 2011-->
						<div class="left">
							<ul>
								<li><span class="date">Homicídio</span> <span class="value"><?php echo number_format($crimeVW->_somaHomicidios2010_2011(),0,',','.') ?>
								</span>
								</li>
								<li class="active"><span class="date">Tent. de Homicídio</span>
									<span class="value"><?php echo number_format($crimeVW->_somaTotalTentativasHomicidio2010_2011(),0,',','.') ?>
								</span>
								</li>
								<li><span class="date">Lesão Corporal</span> <span
									class="value"><?php echo number_format($crimeVW->_somaLesaoCorporal2010_2011(),0,',','.') ?>
								</span>
								</li>
								<li><span class="date">Total de Crimes*</span> <span
									class="value"><?php echo number_format($crimeVW->_somaCrime2010_2011(),0,',','.') ?>
								</span>
								</li>
							</ul>
						</div>
						<div class="right">
							<div class="multi-stat-box-chart"
								style="height: 180px; width: 90%; padding: 10px"></div>
						</div>
					</div>
				</div>

				<div class="box blue span12 noMarginLeft">
					<div class="box-header">
						<h2>
							<i class="icon-bar-chart"></i>Estatistica da Última Década
						</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i>
							</a> <a href="#" class="btn-close"><i class="icon-remove"></i> </a>
						</div>
					</div>
					<div class="box-content">
						<div class="chart-type1" style="height: 170px"></div>
					</div>
				</div>
				<!--/span-->

			</div>

		</div>

	</div>

	<div class="row-fluid">

		<div class="span7" onTablet="span12" onDesktop="span7">



			<div class="row-fluid">

				<div class="span6 smallchart blue box mobileHalf">

					<div class="title">ROUBOS ÚLTIMA DÉCADA</div>

					<div class="content">

						<div class="chart-stat">
							<span class="chart white">10000,3,2,6,6,3,9,0,1,4</span>
						</div>

					</div>

					<div class="value">$19 999,99</div>

				</div>

				<div class="span6 smallchart red box mobileHalf">

					<div class="title">GRAFICO</div>

					<div class="content">

						<div class="chart-stat">
							<span class="chart white">5,8,3,9,2,5,6,2,2,5</span>
						</div>

					</div>

					<div class="value">$1 849,99</div>

				</div>

			</div>

		</div>

	</div>

	<div class="row-fluid">

		<div class="box span12" onTablet="span12" onDesktop="span12">
			<div class="box-header">
				<h2>tickets</h2>
			</div>
			<div class="box-content" style="height: 308px">
				<div id="stats-chart2" class="span12" style="height: 308px"></div>
			</div>
		</div>


	</div>

	<!-- MAPA DO DF -->
	<div class="row-fluid">
		<div class="box span12" onTablet="span12" onDesktop="span12">
			<div class="box-header">
				<h2>Mapa do Distrito Federal</h2>
			</div>
			<div class="box-content">
				<div class="span12" style="height: 200px">
					<p>MAPA DO DF</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /MAPA DO DF -->

</div>
<!-- end: Content -->

</div>
<!--/fluid-row-->

<?php 
include 'footer.php';
?>