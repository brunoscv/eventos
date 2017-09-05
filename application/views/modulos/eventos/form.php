<div class="page-breadcrumb">
    <ol class="breadcrumb container">
    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url("eventos")?>">Eventos</a></li>
        <li>Adicionar Evento </li>
    </ol>
</div>
<div class="page-title">
    <div class="container">
        <h3>Controle de Eventos</h3>
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
				                    <h4 class="panel-title">Eventos / <?php echo (@$item->id) ? "Editar" : "Adicionar"?> </h4>
				                    <a href="<?php echo site_url("eventos/");?>" class="btn btn-primary pull-right"><span class="fa fa-list"></span> Ir para a Listagem</a>
				                </div>
								<div class="panel-body" style="margin-top:10px;">
									<?php echo $this->load->view('layout/messages.php'); ?>
									<form id="form_eventos" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">

																					<div class="form-group">
												<label class="col-sm-2 control-label" for="id">id</label>
												<div class="col-sm-10">
													<input name="id" type="text" id="id" class="form-control" value="<?php echo set_value("id", @$item->id) ?>" />
<?php echo form_error('id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="descr_evento">descr_evento</label>
												<div class="col-sm-10">
													<input name="descr_evento" type="text" id="descr_evento" class="form-control" value="<?php echo set_value("descr_evento", @$item->descr_evento) ?>" />
<?php echo form_error('descr_evento'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="data_inicio">data_inicio</label>
												<div class="col-sm-10">
													<input name="data_inicio" type="text" id="data_inicio" class="form-control" value="<?php echo set_value("data_inicio", @$item->data_inicio) ?>" />
<?php echo form_error('data_inicio'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="data_fim">data_fim</label>
												<div class="col-sm-10">
													<input name="data_fim" type="text" id="data_fim" class="form-control" value="<?php echo set_value("data_fim", @$item->data_fim) ?>" />
<?php echo form_error('data_fim'); ?>
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
												<label class="col-sm-2 control-label" for="updatedAt">updatedAt</label>
												<div class="col-sm-10">
													<input name="updatedAt" type="text" id="updatedAt" class="form-control" value="<?php echo set_value("updatedAt", @$item->updatedAt) ?>" />
<?php echo form_error('updatedAt'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="status_eventos_id">status_eventos_id</label>
												<div class="col-sm-10">
													<input name="status_eventos_id" type="text" id="status_eventos_id" class="form-control" value="<?php echo set_value("status_eventos_id", @$item->status_eventos_id) ?>" />
<?php echo form_error('status_eventos_id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="tipo_eventos_id">tipo_eventos_id</label>
												<div class="col-sm-10">
													<input name="tipo_eventos_id" type="text" id="tipo_eventos_id" class="form-control" value="<?php echo set_value("tipo_eventos_id", @$item->tipo_eventos_id) ?>" />
<?php echo form_error('tipo_eventos_id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="instituicoes_id">instituicoes_id</label>
												<div class="col-sm-10">
													<input name="instituicoes_id" type="text" id="instituicoes_id" class="form-control" value="<?php echo set_value("instituicoes_id", @$item->instituicoes_id) ?>" />
<?php echo form_error('instituicoes_id'); ?>
												</div>
											</div>
																																<div class="form-group">
												<label class="col-sm-2 control-label" for="usuarios_id">usuarios_id</label>
												<div class="col-sm-10">
													<input name="usuarios_id" type="text" id="usuarios_id" class="form-control" value="<?php echo set_value("usuarios_id", @$item->usuarios_id) ?>" />
<?php echo form_error('usuarios_id'); ?>
												</div>
											</div>
																															

										<div class="form-actions">
											<div class="col-sm-10 col-offset-2">
												<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
												<a href="<?php echo site_url("eventos"); ?>" class="btn">
													Cancelar
												</a>
											</div>
										</div>
									</form>
								</div>
							</div>
								<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/eventos/js.js"></script>
								<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/eventos/validate.js"></script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>