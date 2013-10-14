<!doctype html>
<html>
	<head>
		<title>RadarCriminal | Mapa de Ocorrências no DF.</title>
		<script type="text/javascript" src="assets/puc1imu.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="assets/Chart.js"></script>
		<script type="text/javascript" src="assets/jquery.min.js"></script>
		<script type="text/javascript" src="assets/modernizr.js"></script>
		<!--[if lte IE 8]>
			<script type="text/javascript" src="assets/excanvas.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="assets/styles.css"/>
	</head>

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
			<h1><a href="index.php"><img src="assets/logo.png"></a></h1>
			<h2>Saiba sobre os níveis de ocorrências dentro da sua <abbr title="Região Administrativa">RA</abbr> em Brasília</h2>
		</hgroup>
		
		<canvas id="introChart" width="489" height="246"></canvas>
		
		<a class="btn blue" href="https://github.com/mds2013gx/mds2013"><img src="assets/down.png">Download</a>
		<a class="btn transparent" href="#"><img src="">ou Experimente</a>

	</header>
	<!-- /TOPO DA PÁGINA -->