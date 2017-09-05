<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['Atividades'] = array(
							array(
								'field' => "id",
								'label' => "id",
								'rules' => ""
									),
							array(
								'field' => "descr_atividade",
								'label' => "descr_atividade",
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
								'field' => "valor",
								'label' => "valor",
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
								'field' => "eventos_id",
								'label' => "eventos_id",
								'rules' => "required"
									),
);

/* End of file atividades.php */
/* Location: ./system/application/config/form_validation/atividades.php */