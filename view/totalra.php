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

	<!-- MAPA DO DF -->
	<div class="row-fluid">
		<style>
			path {transition: .6s fill; fill: #D3D3D3;}
			path:hover {fill: #22aa22;}
		</style>
		<div class="box span12" onTablet="span12" onDesktop="span12">
			<div class="box-header">
				<h2>Mapa do Distrito Federal</h2>
			</div>
			<div class="box-content">
				<div style="width: 950px; height: 650px; margin: 0 auto;">
					<embed src='./img/regioes_administrativa.svg' width='950' height='650'/>
				</div>
			</div>
		</div>
	</div>
	<!-- /MAPA DO DF -->

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-tasks"></i>Total de Crimes por R.A.</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<h3>Taguatinga</h3>
							<div class="progress progress-success" title="70%">
								<div class="bar" style="width: 70%;"></div>
							</div>

						<h3>Guara</h3>
							<div class="progress progress-success" title="60%">
								<div class="bar" style="width: 60%;"></div>
							</div>
					</div>
		</div><!--/span-->

	</div>

</div>
<!-- end: Content -->

</div>
<!--/fluid-row-->

<?php 
	include 'footer.php';
?>