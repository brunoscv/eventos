<div class="page-breadcrumb">
    <ol class="breadcrumb container">
    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url("menus")?>">Menus</a></li>
        <li>Remover Menu</li>
    </ol>
</div>
<div class="page-title">
    <div class="container">
        <h3>Menu</h3>
    </div>
</div>
<div id="main-wrapper" class="container">
	<div class="row" data-container="all">
        <div class="col-md-12">
            <div class="panel panel-transparent">
                <div class="panel-body">
					<div class="row" data-container="all">
						<div class="col-md-4">
							<?php echo $this->load->view("layout/search"); ?>
						</div>
						<div class="col-md-8" data-container="main">
							<div class="panel panel-default">
								<div class="panel-heading clearfix">
				                    <h4 class="panel-title">Menus do sistema / Remover</h4>
				                    <a href="<?php echo site_url("menus");?>" class="btn btn-primary pull-right"><span class="fa fa-list"></span> Listagem de menus</a>
				                </div>
								<div class="panel-body" style="margin-top:10px;">
									<?php echo $this->load->view("layout/messages"); ?>
									<form id="form_usuario" class="form-horizontal" method="post">
										<div class="alert alert-danger" role="alert">
                                        	<strong>Atenção!</strong> 
                                        	Esta ação não poderá ser desfeita.
                                    	</div>

										<div class="form-group">
											<label class="col-sm-2 control-label" for="descricao">Descrição</label>
											<div class="col-sm-10">
												<input type="text" disabled="" value="<?php echo set_value("descricao", $item->descricao); ?>" class="form-control" name="descricao" id="descricao">
											</div>
											<!-- /controls -->
										</div>
										<!-- /control-group -->

										<div class="form-actions">
											<div class="col-sm-10 col-offset-2">
												<input type="submit" name="submit" class="btn btn-danger" value="Apagar" />
												<a href="<?php echo site_url("menus")?>" class="btn">
													Cancelar
												</a>
											</div>
										</div>
										<!-- /form-actions -->
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/menus/js.js"></script>
			</div>
		</div>
	</div>
</div>