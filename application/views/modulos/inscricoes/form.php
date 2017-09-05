<div class="page-breadcrumb">
    <ol class="breadcrumb container">
    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url("inscricoes")?>">Inscricoes</a></li>
        <li>Adicionar Inscricoe </li>
    </ol>
</div>
<div class="page-title">
    <div class="container">
        <h3>Controle de Inscricoes</h3>
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
				                    <h4 class="panel-title">Inscricoes / <?php echo (@$item->id) ? "Editar" : "Adicionar"?> </h4>
				                    <a href="<?php echo site_url("inscricoes/");?>" class="btn btn-primary pull-right"><span class="fa fa-list"></span> Ir para a Listagem</a>
				                </div>
								<div class="panel-body" style="margin-top:10px;">
									<?php echo $this->load->view('layout/messages.php'); ?>
									<form id="form_inscricoes" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">

																					<div class="form-group">
												<label class="col-sm-2 control-label" for="id">id</label>
												<div class="col-sm-10">
													<input name="id" type="text" id="id" class="form-control" value="<?php echo set_value("id", @$item->id) ?>" />
<?php echo form_error('id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="createdAt">createdAt</label>
												<div class="col-sm-10">
													<input name="createdAt" type="text" id="createdAt" class="form-control" value="<?php echo set_value("createdAt", @$item->createdAt) ?>" />
<?php echo form_error('createdAt'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="updatedAT">updatedAT</label>
												<div class="col-sm-10">
													<input name="updatedAT" type="text" id="updatedAT" class="form-control" value="<?php echo set_value("updatedAT", @$item->updatedAT) ?>" />
<?php echo form_error('updatedAT'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="eventos_id">eventos_id</label>
												<div class="col-sm-10">
													<input name="eventos_id" type="text" id="eventos_id" class="form-control" value="<?php echo set_value("eventos_id", @$item->eventos_id) ?>" />
<?php echo form_error('eventos_id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="status_inscricao_id">status_inscricao_id</label>
												<div class="col-sm-10">
													<input name="status_inscricao_id" type="text" id="status_inscricao_id" class="form-control" value="<?php echo set_value("status_inscricao_id", @$item->status_inscricao_id) ?>" />
<?php echo form_error('status_inscricao_id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="usuarios_id">usuarios_id</label>
												<div class="col-sm-10">
													<input name="usuarios_id" type="text" id="usuarios_id" class="form-control" value="<?php echo set_value("usuarios_id", @$item->usuarios_id) ?>" />
<?php echo form_error('usuarios_id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="valor">valor</label>
												<div class="col-sm-10">
													<input name="valor" type="text" id="valor" class="form-control" value="<?php echo set_value("valor", @$item->valor) ?>" />
<?php echo form_error('valor'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="cupons_id">cupons_id</label>
												<div class="col-sm-10">
													<input name="cupons_id" type="text" id="cupons_id" class="form-control" value="<?php echo set_value("cupons_id", @$item->cupons_id) ?>" />
<?php echo form_error('cupons_id'); ?>
												</div>
											</div>
																															

										<div class="form-actions">
											<div class="col-sm-10 col-offset-2">
												<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
												<a href="<?php echo site_url("inscricoes"); ?>" class="btn">
													Cancelar
												</a>
											</div>
										</div>
									</form>
								</div>
							</div>
								<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/inscricoes/js.js"></script>
								<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/inscricoes/validate.js"></script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>