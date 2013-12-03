<?php 
	include ('C:/xampp/htdocs/mds2013/views/RegiaoAdministrativaView.php');
	$RAVW = new RegiaoAdministrativaView();
?>
<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="C:/xampp/htdocs/mds2013/index.php"><i class="icon-home"></i><span class="hidden-tablet"> Pagina Inicial</span></a></li>
						<li><a href="?pag=tRA"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Ocorrencias por R.A.</span></a></li>	
						<li>
							<a class="dropmenu" href="#" alt="Por Natureza" title="Por Natureza"><i class="icon-globe"></i><span class="hidden-tablet"> Crimes</span> <span class="label">5</span></a>
							<ul>
								<li><a class="submenu" href="?pag=cCat"><i class="icon-inbox"></i><span class="hidden-tablet"> $Categoria</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-inbox"></i><span class="hidden-tablet"> $Categoria</span></a></li>
								<li><a class="submenu" href="?pag=u"><i class="icon-inbox"></i><span class="hidden-tablet"> $Categoria</span></a></li>
							</ul>
						</li>
						<li>
							<a class="dropmenu" href="#" alt="Região Administrativa" title="Região Administrativa"><i class="icon-move"></i><span class="hidden-tablet"> Cidades <span class="label">5</span></span></a>
							<ul>
								<!--<span class="label"><?php/* echo $RAVW->contarRegistrosRA(); */?></span> -->
								<?php 
									echo $RAVW->listarTodasAlfabeticamente();
								?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->