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
				
				<div class="span3 smallstat box mobileHalf" onTablet="span6" onDesktop="span3">
					<div class="boxchart-overlay blue">
						<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					</div>	
					<span class="title">Ocorrências</span>
					<span class="value">4 589</span>
				</div>
				
				<div class="span3 smallstat box mobileHalf" onTablet="span6" onDesktop="span3">
					<div class="boxchart-overlay red">
						<div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
					</div>	
					<span class="title">Homicídios</span>
					<span class="value">789</span>
				</div>
				
				<div class="span3 smallstat box mobileHalf noMargin" onTablet="span6" onDesktop="span3">
					<i class="icon-download-alt green"></i>
					<span class="title">Roubo</span>
					<span class="value">500</span>
				</div>
				
				<div class="span3 smallstat mobileHalf box" onTablet="span6" onDesktop="span3">
					<i class="icon-money yellow"></i>
					<span class="title">Furto</span>
					<span class="value">1000</span>
				</div>
			
			</div>	

			<div class="row-fluid">
				
				<div class="main-chart">
					<?php echo $crimeVW->retornarDadosCrimeSomadoFormatoNovo() ?>
					<!--<div class="bar">
						
						<div class="title">JAN</div>
						<div class="value">80%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">FEV</div>
						<div class="value">60%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">MAR</div>
						<div class="value">50%</div>
					
					</div>
					
					<div class="bar">
						
						<div class="title">ABR</div>
						<div class="value">40%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">MAI</div>
						<div class="value">10%</div>
					
					</div>	
					
					<div class="bar simple">
						
						<div class="title">JUN</div>
						<div class="value">30%</div>
					
					</div>
					
					<div class="bar">
						
						<div class="title">JUL</div>
						<div class="value">50%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">AGO</div>
						<div class="value">65%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">SET</div>
						<div class="value">40%</div>
					
					</div>
					
					<div class="bar">
						
						<div class="title">OUT</div>
						<div class="value">32%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">NOV</div>
						<div class="value">20%</div>
					
					</div>

					<div class="bar simple">
						
						<div class="title">DEZ</div>
						<div class="value">10%</div>
					
					</div>
					
					<div class="bar">
						
						<div class="title">JAN</div>
						<div class="value">100%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">FEV</div>
						<div class="value">60%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">MAR</div>
						<div class="value">50%</div>
					
					</div>
					
					<div class="bar">
						
						<div class="title">ABR</div>
						<div class="value">40%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">MAI</div>
						<div class="value">10%</div>
					
					</div>	
					
					<div class="bar simple">
						
						<div class="title">JUN</div>
						<div class="value">30%</div>
					
					</div>
					
					<div class="bar">
						
						<div class="title">JUL</div>
						<div class="value">50%</div>
					
					</div>
					
					<div class="bar simple">
						
						<div class="title">AGO</div>
						<div class="value">65%</div>
					
					</div> -->	
					
				</div>	
			
			</div>	

			<div class="row-fluid">
				
				<div class="span6" onTablet="span12" onDesktop="span6">
					
					<div class="row-fluid">
						<div class="span12 multi-stat-box box">
							<div class="header row-fluid">
								<div class="left">
									<h2>Crimes contra pessoa</h2>
									<a class="icon-chevron-down"></a>
								</div>
								<div class="right">
									<h2>JAN 2010 - JAN 2011</h2>
									<div class="percent"><i class="icon-double-angle-up"></i> 22%</div>
								</div>
							</div>
							<div class="content row-fluid">	
								<div class="left">
									<ul>
										<li>
											<span class="date">Homicídio</span>
											<span class="value">500</span>
										</li>
										<li class="active">
											<span class="date">Tentativa de Homicídio</span>
											<span class="value">821</span>
										</li>
										<li>
											<span class="date">Lesão Corporal</span>
											<span class="value">12230</span>
										</li>
										<li>
											<span class="date"></span>
											<span class="value"></span>
										</li>
									</ul>	
								</div>
								<div class="right">
									<div class="multi-stat-box-chart" style="height:180px; width: 90%; padding: 10px"></div>
								</div>
							</div>	
						</div>
						
						<div class="box blue span12 noMarginLeft">
							<div class="box-header">
								<h2><i class="icon-bar-chart"></i>Estatistica Semanal</h2>
								<div class="box-icon">
									<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
									<a href="#" class="btn-close"><i class="icon-remove"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="chart-type1" style="height:170px"></div>	
							</div>	
						</div><!--/span-->
					
					</div>	
					
				</div>				

				<div class="box blue span6 noMargin" onTablet="span12" onDesktop="span6">
					<div class="box-header">
						<h2>Homicídios nos últimos 10 anos</h2>
					</div>
					<div class="box-content">
						
						<div class="chart-type2" style="height:220px"></div>
						
						<div class="verticalChart">
							
							<div class="singleBar" alt="Taguatinga" title="Taguatinga">
							
								<div class="bar">
								
									<div class="value">
										<span>85%</span>
									</div>
								
								</div>
								
								<div class="title">TG</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>16%</span>
									</div>
								
								</div>
								
								<div class="title">PL</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>12%</span>
									</div>
								
								</div>
								
								<div class="title">GB</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>9%</span>
									</div>
								
								</div>
								
								<div class="title">DE</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>7%</span>
									</div>
								
								</div>
								
								<div class="title">NL</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>6%</span>
									</div>
								
								</div>
								
								<div class="title">CA</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>5%</span>
									</div>
								
								</div>
								
								<div class="title">FI</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>4%</span>
									</div>
								
								</div>
								
								<div class="title">RU</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>3%</span>
									</div>
								
								</div>
								
								<div class="title">AU</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>1%</span>
									</div>
								
								</div>
								
								<div class="title">N/A</div>
							
							</div>	

							<div class="singleBar" alt="Taguatinga" title="Taguatinga">
							
								<div class="bar">
								
									<div class="value">
										<span>37%</span>
									</div>
								
								</div>
								
								<div class="title">TG</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>16%</span>
									</div>
								
								</div>
								
								<div class="title">PL</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>12%</span>
									</div>
								
								</div>
								
								<div class="title">GB</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>9%</span>
									</div>
								
								</div>
								
								<div class="title">DE</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>7%</span>
									</div>
								
								</div>
								
								<div class="title">NL</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>6%</span>
									</div>
								
								</div>
								
								<div class="title">CA</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>5%</span>
									</div>
								
								</div>
								
								<div class="title">FI</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>4%</span>
									</div>
								
								</div>
								
								<div class="title">RU</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>3%</span>
									</div>
								
								</div>
								
								<div class="title">AU</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>1%</span>
									</div>
								
								</div>
								
								<div class="title">N/A</div>
							
							</div>	

							<div class="singleBar" alt="Taguatinga" title="Taguatinga">
							
								<div class="bar">
								
									<div class="value">
										<span>37%</span>
									</div>
								
								</div>
								
								<div class="title">TG</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>16%</span>
									</div>
								
								</div>
								
								<div class="title">PL</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>12%</span>
									</div>
								
								</div>
								
								<div class="title">GB</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>9%</span>
									</div>
								
								</div>
								
								<div class="title">DE</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>7%</span>
									</div>
								
								</div>
								
								<div class="title">NL</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>6%</span>
									</div>
								
								</div>
								
								<div class="title">CA</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>5%</span>
									</div>
								
								</div>
								
								<div class="title">FI</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>4%</span>
									</div>
								
								</div>
								
								<div class="title">RU</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>3%</span>
									</div>
								
								</div>
								
								<div class="title">AU</div>
							
							</div>
							
							<div class="singleBar" alt="" title="">
							
								<div class="bar">
								
									<div class="value">
										<span>1%</span>
									</div>
								
								</div>
								
								<div class="title">N/A</div>
							
							</div>	
							
						</div>
						
						<div class="clearfix"></div>	
						
					</div>	
						
				</div><!--/span-->
			
			</div>
			
			<div class="row-fluid">
				
				<div class="span7" onTablet="span12" onDesktop="span7">
					
					
					
					<div class="row-fluid">	
						
						<div class="span6 smallchart blue box mobileHalf">

							<div class="title">GRAFICO</div>

							<div class="content">

								<div class="chart-stat">
									<span class="chart white">7,3,2,6,6,3,9,0,1,4</span>
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
				
				<div class="box span8" onTablet="span12" onDesktop="span8">
					<div class="box-header">
						<h2>tickets</h2>
					</div>
					<div class="box-content" style="height:308px" >
						<div id="stats-chart2"  class="span12" style="height:308px" ></div>
					</div>	
				</div>	
				
				<div class="box span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="icon-check"></i>To Do List</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="todo">
							<ul class="todo-list">
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">Windows Phone 8 App</span> 
									<span class="label label-important">today</span>					
								</li>
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">New frontend layout</span>
									<span class="label label-important">today</span>
								</li>
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">Hire developers</span>
									<span class="label label-warning">tommorow</span>
								</li>
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">Windows Phone 8 App</span>
									<span class="label label-warning">tommorow</span>
								</li>
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">New frontend layout</span>
									<span class="label label-success">this week</span>
								</li>
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">Hire developers</span>
									<span class="label label-success">this week</span>
								</li>
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">New frontend layout</span>
									<span class="label label-info">this month</span>
								</li>
								<li>
									<span class="todo-actions">
										<a href="#"><i class="icon-check-empty"></i></a>
									</span>
									<span class="desc">Hire developers</span>
									<span class="label label-info">this month</span>
								</li>
							</ul>
						</div>	
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
						<div class="span12" style="height:200px">
							<p>MAPA DO DF</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /MAPA DO DF -->

			</div>
			<!-- end: Content -->
				
				</div><!--/fluid-row-->

<?php 
	include 'footer.php';
?>