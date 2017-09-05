<div class="page-breadcrumb">
    <ol class="breadcrumb container">
    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url("usuarios")?>">Eventos</a></li>
        <li>Remover Evento </li>
    </ol>
</div>
<div class="page-title">
    <div class="container">
        <h3>Eventos</h3>
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
				                    <h4 class="panel-title">Controle de Eventos / Remover</h4>
				                    <a href="<?php echo site_url("eventos/");?>" class="btn btn-primary pull-right"><span class="fa fa-list"></span> Ir para a Listagem</a>
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
											<label class="col-sm-2 control-label" for="descr_evento">descr_evento</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("descr_evento", $item->descr_evento); ?>" name="descr_evento" id="descr_evento">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="data_inicio">data_inicio</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("data_inicio", $item->data_inicio); ?>" name="data_inicio" id="data_inicio">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="data_fim">data_fim</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("data_fim", $item->data_fim); ?>" name="data_fim" id="data_fim">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="createdAt">createdAt</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("createdAt", $item->createdAt); ?>" name="createdAt" id="createdAt">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="updatedAt">updatedAt</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("updatedAt", $item->updatedAt); ?>" name="updatedAt" id="updatedAt">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="status_eventos_id">status_eventos_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("status_eventos_id", $item->status_eventos_id); ?>" name="status_eventos_id" id="status_eventos_id">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="tipo_eventos_id">tipo_eventos_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("tipo_eventos_id", $item->tipo_eventos_id); ?>" name="tipo_eventos_id" id="tipo_eventos_id">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="instituicoes_id">instituicoes_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("instituicoes_id", $item->instituicoes_id); ?>" name="instituicoes_id" id="instituicoes_id">
											</div>
										</div>
																				<div class="form-group">
											<label class="col-sm-2 control-label" for="usuarios_id">usuarios_id</label>
											<div class="col-sm-10">
												<input type="text" disabled="" class="form-control" value="<?php echo set_value("usuarios_id", $item->usuarios_id); ?>" name="usuarios_id" id="usuarios_id">
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-10 col-offset-2">
												<input type="submit" name="enviar" class="btn btn-danger" value="Apagar" />
												<a href="<?php echo site_url("eventos")?>" class="btn">
													Cancelar
												</a>
											</div>
										</div>
									</form>
			</div>
			<!-- /widget-content -->
		</div>
		<!-- /widget -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/eventos/js.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/eventos/validate.js"></script>
	</div>
</div>