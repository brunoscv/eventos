<div class="page-breadcrumb">
    <ol class="breadcrumb container">
    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url("usuarios")?>">Inscricoes</a></li>
        <li>Remover Inscricoe </li>
    </ol>
</div>
<div class="page-title">
    <div class="container">
        <h3>Inscricoes</h3>
    </div>
</div>
<div id="main-wrapper" class="container">
	<div class="row" data-container="all">
        <div class="col-md-12">
            <div class="panel panel-transparent">
                <div class="panel-body">
					<div class="row" data-container="all">
						<div class="col-md-4">
							<?php echo $this->load->view('layout/search.php'); ?>
						</div>
						<div class="col-md-8" data-container="main">
							<div class="panel panel-default">
								<div class="panel-heading clearfix">
				                    <h4 class="panel-title">Controle de Inscricoes / Remover</h4>
				                    <a href="<?php echo site_url("inscricoes/");?>" class="btn btn-primary pull-right"><span class="fa fa-list"></span> Ir para a Listagem</a>
				                </div>
								<div class="panel-body" style="margin-top:10px;">
									<?php echo $this->load->view("layout/messages"); ?>
									<form id="form_usuario" class="form-horizontal" method="post">
										<div class="alert alert-danger" role="alert">
					                    	<strong>Atenção!</strong> 
					                    	Esta ação não poderá ser desfeita.
					                	</div>
					                											<div class="form-group">
											<label class="col-sm-2 control-label" for="id">id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("id", $item->id); ?>" name="id" id="id">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="createdAt">createdAt</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("createdAt", $item->createdAt); ?>" name="createdAt" id="createdAt">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="updatedAT">updatedAT</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("updatedAT", $item->updatedAT); ?>" name="updatedAT" id="updatedAT">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="eventos_id">eventos_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("eventos_id", $item->eventos_id); ?>" name="eventos_id" id="eventos_id">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="status_inscricao_id">status_inscricao_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("status_inscricao_id", $item->status_inscricao_id); ?>" name="status_inscricao_id" id="status_inscricao_id">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="usuarios_id">usuarios_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("usuarios_id", $item->usuarios_id); ?>" name="usuarios_id" id="usuarios_id">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="valor">valor</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("valor", $item->valor); ?>" name="valor" id="valor">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="cupons_id">cupons_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("cupons_id", $item->cupons_id); ?>" name="cupons_id" id="cupons_id">
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-10 col-offset-2">
												<input type="submit" name="enviar" class="btn btn-danger" value="Apagar" />
												<a href="<?php echo site_url("inscricoes")?>" class="btn">
													Cancelar
												</a>
											</div>
										</div>
									</form>
			</div>
			<!-- /widget-content -->
		</div>
		<!-- /widget -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/inscricoes/js.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/inscricoes/validate.js"></script>
	</div>
</div>