<?php 
include 'header.php';
?>
<?php include_once('../views/CrimeView.php');
include_once('../views/TempoView.php');
include_once('../views/NaturezaView.php');
$crimeVW = new CrimeView();
$tempoVW = new TempoView();
$naturezaVW = new NaturezaView();

?>
<!-- start: Content -->
<div id="content" class="span10">

	<div class="row-fluid">

		<div class="box span12">
					<div class="box-header">
						<h2><a href="#" class="btn-minimize"><i class="icon-tasks"></i>$Tipo</a></h2>
						<div class="box-icon">
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content" style="display: none;">
						<h3>Por Ano</h3></br>
							<div class="main-chart">
							<!--Impressão de gráfico em barras-->
							<?php echo $crimeVW->retornarDadosCrimeSomadoFormatoNovo() ?></div>
						</br><h3>Por Regiao Administrativa</h3></br>
							<!--Impressao de Gráfico em horizontal -->
							<?php echo $naturezaVW->listarTodasAlfabicamente(); ?>

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