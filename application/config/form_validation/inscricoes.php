<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['Inscricoes'] = array(
							array(
								'field' => "id",
								'label' => "id",
								'rules' => ""
									),
							array(
								'field' => "createdAt",
								'label' => "createdAt",
								'rules' => ""
									),
							array(
								'field' => "updatedAT",
								'label' => "updatedAT",
								'rules' => ""
									),
							array(
								'field' => "eventos_id",
								'label' => "eventos_id",
								'rules' => "required"
									),
							array(
								'field' => "status_inscricao_id",
								'label' => "status_inscricao_id",
								'rules' => "required"
									),
							array(
								'field' => "usuarios_id",
								'label' => "usuarios_id",
								'rules' => "required"
									),
							array(
								'field' => "valor",
								'label' => "valor",
								'rules' => "required"
									),
							array(
								'field' => "cupons_id",
								'label' => "cupons_id",
								'rules' => ""
									),
);

/* End of file inscricoes.php */
/* Location: ./system/application/config/form_validation/inscricoes.php */