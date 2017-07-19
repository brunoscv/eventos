                <div class="page-breadcrumb">
                    <ol class="breadcrumb container">
                    	<li><a href="/">Home</a></li>
                        <li>Dashboard</li>
                    </ol>
                </div>
                <div class="page-title">
                    <div class="container">
                        <h3>Dashboard</h3>
                    </div>
                </div>
                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-white">
								<div class="panel-heading">
									<h4 class="panel-title"><i class="fa fa-line-chart"></i> Cadastrados Recentemente</h4>
									<div class="alterar-visualizacao" id='alterar-visualizacao'></div>
								</div>
								<div class="panel-body">
									<canvas id="chart-1" width="420" height="300"></canvas>
									<div class="legenda-div">
										<div class="legenda">
											<div class="cor" style="background-color:rgba(151,187,205,.2);border:2px solid rgba(151,187,205,1);"></div>
											<div class="rotulo">CADASTRADOS</div>
										</div>
										<div class="legenda">
											<div class="cor" style="background-color:rgba(220,220,220,.2);border:2px solid rgba(220,220,220,1);"></div>
											<div class="rotulo">ATUALIZADOS</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-6">
                            <div class="panel panel-white">
								<div class="panel-heading">
									<i class="fa fa-pie-chart"></i> Últimas Notícias
								</div>
								<div class="panel-body">
									<canvas id="chart-2" width="420" height="300"></canvas>
									<div class="legenda-div"></div>
								</div>
							</div>
						</div>
					</div>
						
				</div>
			<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/dashboard/js.js"></script>
		</div>
    </div>