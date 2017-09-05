<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['Eventos'] = array(
							array(
								'field' => "id",
								'label' => "id",
								'rules' => ""
									),
							array(
								'field' => "descr_evento",
								'label' => "descr_evento",
								'rules' => "required"
									),
							array(
								'field' => "data_inicio",
								'label' => "data_inicio",
								'rules' => ""
									),
							array(
								'field' => "data_fim",
								'label' => "data_fim",
								'rules' => ""
									),
							array(
								'field' => "createdAt",
								'label' => "createdAt",
								'rules' => ""
									),
							array(
								'field' => "updatedAt",
								'label' => "updatedAt",
								'rules' => ""
									),
							array(
								'field' => "status_eventos_id",
								'label' => "status_eventos_id",
								'rules' => "required"
									),
							array(
								'field' => "tipo_eventos_id",
								'label' => "tipo_eventos_id",
								'rules' => "required"
									),
							array(
								'field' => "instituicoes_id",
								'label' => "instituicoes_id",
								'rules' => ""
									),
							array(
								'field' => "usuarios_id",
								'label' => "usuarios_id",
								'rules' => "required"
									),
);

/* End of file eventos.php */
/* Location: ./system/application/config/form_validation/eventos.php */