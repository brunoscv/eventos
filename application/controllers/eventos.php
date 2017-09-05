<?php
class Eventos extends MY_Controller {
	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
		$this->load->model("Eventos_model");
		
		//adicione os campos da busca
		$camposFiltros["e.id"] = "id";
		$camposFiltros["e.descr_evento"] = "descr_evento";
		$camposFiltros["e.data_inicio"] = "data_inicio";
		$camposFiltros["e.data_fim"] = "data_fim";
		$camposFiltros["e.createdAt"] = "createdAt";
		$camposFiltros["e.updatedAt"] = "updatedAt";
		$camposFiltros["e.status_eventos_id"] = "status_eventos_id";
		$camposFiltros["e.tipo_eventos_id"] = "tipo_eventos_id";
		$camposFiltros["e.instituicoes_id"] = "instituicoes_id";
		$camposFiltros["e.usuarios_id"] = "usuarios_id";

		$this->data['campos']    = $camposFiltros;
	}
	
	function index(){
		$perPage = '10';
		$offset = ($this->input->get("per_page")) ? $this->input->get("per_page") : "0";

		if( !is_null($this->input->get('busca')) ){
			$campo = $this->input->get('filtro_field', true);
			$valor = $this->input->get('filtro_valor', true);

			if($campo && $valor){
				if( array_key_exists($campo, $this->data['campos']) ){
					$this->db->where("{$campo} LIKE","%".$valor."%");
				}
			}
		}
		$countEventos = $this->db
							->select("count(e.id) AS quantidade")
							->from("eventos AS e")
							->get()->row();
		$quantidadeEventos = $countEventos->quantidade;
		
		if( !is_null($this->input->get('busca')) ){
			$campo = $this->input->get('filtro_field', true);
			$valor = $this->input->get('filtro_valor', true);

			if($campo && $valor){
				if( array_key_exists($campo, $this->data['campos']) ){
					$this->db->where("{$campo} LIKE","%".$valor."%");
				}
			}
		}
		
		$resultEventos = $this->db
									->select("*")
									->from("eventos AS e")
									->limit($perPage,$offset)
									->get();
		
		$this->data['listaEventos'] = $resultEventos->result();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url("eventos/index")."?";
		$config['total_rows'] = $quantidadeEventos;
		$config['per_page'] = $perPage;
		
		$this->pagination->initialize($config);
		
		$this->data['paginacao'] = $this->pagination->create_links(); 
	}
    
    function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		//fim Campos relacionados
		
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Eventos') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				
				//Preenche objeto com as informações do formulário
								
				$evento	= array();
				$evento['id'] 		= $this->input->post('id', TRUE);
				$evento['descr_evento'] 		= $this->input->post('descr_evento', TRUE);
				$evento['data_inicio'] 		= $this->input->post('data_inicio', TRUE);
				$evento['data_fim'] 		= $this->input->post('data_fim', TRUE);
				$evento['createdAt'] 		= $this->input->post('createdAt', TRUE);
				$evento['updatedAt'] 		= $this->input->post('updatedAt', TRUE);
				$evento['status_eventos_id'] 		= $this->input->post('status_eventos_id', TRUE);
				$evento['tipo_eventos_id'] 		= $this->input->post('tipo_eventos_id', TRUE);
				$evento['instituicoes_id'] 		= $this->input->post('instituicoes_id', TRUE);
				$evento['usuarios_id'] 		= $this->input->post('usuarios_id', TRUE);
				$this->db->insert("eventos", $evento);
	
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('eventos/index');
			}
		} 
    	
    }
    
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		$evento = $this->db
						->from("eventos AS m")
						->where("id", $id)->get()->row();

		if(!$evento){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('eventos/index');
		} else {
			$this->data['item'] = $evento;
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Eventos') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
					$evento	= array();
					$evento['id']	= $this->input->post('id', true);
					$evento['descr_evento']	= $this->input->post('descr_evento', true);
					$evento['data_inicio']	= $this->input->post('data_inicio', true);
					$evento['data_fim']	= $this->input->post('data_fim', true);
					$evento['createdAt']	= $this->input->post('createdAt', true);
					$evento['updatedAt']	= $this->input->post('updatedAt', true);
					$evento['status_eventos_id']	= $this->input->post('status_eventos_id', true);
					$evento['tipo_eventos_id']	= $this->input->post('tipo_eventos_id', true);
					$evento['instituicoes_id']	= $this->input->post('instituicoes_id', true);
					$evento['usuarios_id']	= $this->input->post('usuarios_id', true);

					$this->db->where("id",$id);
					$this->db->update("eventos",$evento);
				
					$this->session->set_flashdata("msg_success", "Registro <b>#{$evento->id}</b> atualizado!");
					redirect('eventos/index');
				}
			}
		}
	}
	
	public function delete($id){
		$id = $this->uri->segment(3);
		
		$evento = $this->db
						->from("eventos AS m")
						->where("id", $id)->get()->row();
		$this->data['item'] = $evento;
		
		if( !$evento ){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('eventos/index');
		} else {
			$this->data['item'] = $evento;
			
			if( $this->input->post("enviar") ){
				$this->db->where("id", $evento->id);
				$this->db->delete("eventos");
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('eventosindex');
			}
		}
	}
}

/* End of file Eventoses.php */
/* Location: ./system/application/controllers/Eventoses.php */