<!doctype html>
<html>
	<head>
		<title>RadarCriminal | Mapa de Ocorrências no DF.</title>
		<script type="text/javascript" src="./view/assets/puc1imu.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="./view/assets/Chart.js"></script>
		<script type="text/javascript" src="./view/assets/jquery.min.js"></script>
		<script type="text/javascript" src="./view/assets/modernizr.js"></script>
		<!--[if lte IE 8]>
			<script type="text/javascript" src="assets/excanvas.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="./view/assets/styles.css"/>
	</head>

	<body>

	<!-- CABEÃ‡ALHO -->
	<div class="redBorder"></div>
	<div class="blueBorder"></div>
	<div class="greenBorder"></div>
	<div class="orangeBorder"></div>
	<!-- /CABEÃ‡ALHO -->

	<!-- TOPO DA PÃ�GINA -->
	<header>
		<hgroup>
			<h1><a href="index.php"><img src="./view/assets/logo.png"></a></h1>
			<h2>Saiba sobre os níveis de ocorrências dentro da sua <abbr title="RegiÃ£o Administrativa">RA</abbr> em Brasília</h2>
		</hgroup>
		
		<canvas id="topoChart" width="489" height="246"></canvas>
		<div id="navSection">
			<a class="btn blue" href="https://github.com/mds2013gx/mds2013"><img src="./view/assets/down.png">Download</a>
			<a class="btn transparent disable" href="#"><img src="">ou Experimente<img id="soonIcon" src="./view/assets/soon.png"></a>
		</div>
	</header>
	<!-- /TOPO DA PÃ�GINA -->